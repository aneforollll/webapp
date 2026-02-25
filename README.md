# Heart Disease Prediction Web App

A full-stack machine learning web application that predicts the likelihood of heart disease based on patient medical data. 

The backend is powered by **FastAPI** to serve a trained predictive model, and the frontend is a responsive web interface utilizing **Chart.js** to display the prediction probability dynamically.



![alt text](<Screenshot 2026-02-25 213536.png>)


## Features
* **Interactive Frontend:** Clean, user-friendly HTML/CSS/JS interface with medical-range validation.
* **Dynamic Visualization:** Real-time pie chart generation using Chart.js based on API responses.
* **FastAPI Backend:** High-performance Python API handling data transformation and model inference.
* **Automated Documentation:** Built-in Swagger UI for testing the API endpoints directly.
* **Public Access:** Instructions included for securely sharing the local server via Ngrok.

## Project Structure
```text
heart-disease-predictor/
├── main.py              # FastAPI server and API endpoints
├── heart_model.pkl      # Pre-trained machine learning model (required)
├── index.html           # Main web page layout and forms
├── style.css            # Styling for the web page
├── script.js            # Form handling, API requests, and Chart.js logic
└── README.md            # Project documentation
```
## Prerequisites
To run this project, you need **Python 3.8+** installed on your computer.

Install the required Python packages using pip:

```Bash
pip install fastapi uvicorn pandas scikit-learn
```
Note: You must have a trained machine learning model named heart_model.pkl saved in the root directory. If you do not have this file, the API will fail to start.

## How to Run Locally
1. Open your terminal and navigate to the project folder.

2. Start the FastAPI server using Uvicorn:

```Bash
uvicorn main:app --reload
```
Open your web browser and go to:

* Web UI: http://127.0.0.1:8000/

* API Docs: http://127.0.0.1:8000/docs

## How to Share Publicly (Ngrok)
To share this website with others while hosting it on your own computer:

1. Download and authenticate [Ngrok](https://ngrok.com).

2. Keep your Uvicorn server running in one terminal.

3. Open a new terminal and run:

```Bash
ngrok http 8000
```
Copy the Forwarding URL provided by Ngrok (e.g., https://random-string.ngrok-free.app) and share it!

## Model Input Features
The API expects the following health metrics for prediction:

* Age: 1 - 120 years

* Sex: Male or Female

* Chest Pain Type: None, Acid Reflux, Atypical Angina (ATA), or Squeezed

* Resting Blood Pressure: mm Hg

* Cholesterol: Serum cholesterol in mg/dl

* Fasting Blood Sugar: mg/dl

* Max Heart Rate: bpm