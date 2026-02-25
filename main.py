from fastapi import FastAPI, HTTPException
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import FileResponse
from pydantic import BaseModel
import pandas as pd
import pickle

# 1. Initialize FastAPI app
app = FastAPI(title="Heart Disease Prediction API")

@app.get("/")
def serve_home_page():
    # Make sure index.html is in the same folder as main.py
    return FileResponse("index.html")

@app.get("/style.css")
def serve_css():
    return FileResponse("style.css")

@app.get("/script.js")
def serve_js():
    return FileResponse("script.js")


# Add CORS configuration block
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"], # Allows all origins. In production, change to your domain.
    allow_credentials=True,
    allow_methods=["*"], # Allows all methods (GET, POST, etc.)
    allow_headers=["*"], # Allows all headers
)
# 2. Load the trained model into memory
try:
    with open('heart_model.pkl', 'rb') as f:
        model = pickle.load(f)
except FileNotFoundError:
    raise RuntimeError("Model file not found. Please run train.py first.")

# 3. Define the expected incoming JSON data format
class HealthData(BaseModel):
    age: int
    sex: str                 # Expects 'male' or 'female'
    chest_pain_type: str     # Expects 'none', 'acid_reflux', 'ata', or 'squeezed'
    blood_pressure: int
    cholesterol: int
    fasting_bs: int
    max_hr: int

# 4. Create the prediction endpoint
@app.post("/predict")
def predict_heart_disease(data: HealthData):
    # Fasting Blood Sugar logic
    fasting_1 = 1 if data.fasting_bs > 120 else 0
    fasting_2 = 0 if data.fasting_bs > 120 else 1

    # Sex logic
    sex_class_1 = 1 if data.sex.lower() == 'male' else 0
    sex_class_2 = 1 if data.sex.lower() == 'female' else 0

    # Chest Pain Type logic
    chestpaintype_class_1 = 0
    chestpaintype_class_2 = 0
    chestpaintype_class_3 = 0
    chestpaintype_class_4 = 0

    if data.chest_pain_type.lower() == 'none':
        chestpaintype_class_1 = 3
    elif data.chest_pain_type.lower() == 'acid_reflux':
        chestpaintype_class_2 = 4
    elif data.chest_pain_type.lower() == 'ata':
        chestpaintype_class_3 = 5
    elif data.chest_pain_type.lower() == 'squeezed':
        chestpaintype_class_4 = 6
    else:
        raise HTTPException(status_code=400, detail="Invalid chest pain type")

    # Construct the dictionary
    input_features = {
        'Age': [data.age],
        'Sex_1': [sex_class_1],
        'Sex_2': [sex_class_2],
        'ChestPainType_1': [chestpaintype_class_1],
        'ChestPainType_2': [chestpaintype_class_2],
        'ChestPainType_3': [chestpaintype_class_3],
        'ChestPainType_4': [chestpaintype_class_4],
        'RestingBP': [data.blood_pressure],
        'Cholesterol': [data.cholesterol],
        'FastingBS_1': [fasting_1],
        'FastingBS_2': [fasting_2],
        'MaxHR': [data.max_hr],
    }

    # Convert to DataFrame
    health_df = pd.DataFrame(input_features)

    # Predict probabilities
    prediction_proba = model.predict_proba(health_df)[0]

    # Return as JSON
    return {
        "chance_not_likely": float(prediction_proba[0]),
        "chance_likely": float(prediction_proba[1])
    }