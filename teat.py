
import pandas as pd
from sklearn.ensemble import RandomForestClassifier
import streamlit as st
from sklearn.linear_model import LogisticRegression
import matplotlib.pyplot as plt
import numpy as np 
from itertools import chain

st.write("""
    # Health alert +
         
    This is your prediction of your chance of getting disease

""")

st.sidebar.header("User input Features")

age = st.sidebar.slider('Age(years)',0,80,40)
st.sidebar.subheader('Sex')
sex_1 = st.sidebar.checkbox('male')
sex_2 = st.sidebar.checkbox('female')
st.sidebar.subheader('ChestPainType')
chestpaintype_1 = st.sidebar.checkbox('Never felt chest pain')
chestpaintype_2 = st.sidebar.checkbox('Chest pain like acid reflux')
chestpaintype_3 = st.sidebar.checkbox('ATA Chest pain like being stabbed, burning.')
chestpaintype_4 = st.sidebar.checkbox('Chest pain like being squeezed, pressed, and heavy in the chest.')
blood_pressure = st.sidebar.slider('Blood pressure',0,200,100)
cholesterol = st.sidebar.slider('Cholesterol',0,600,300)
fastingBS = st.sidebar.slider('Blood Sugar',0,150,75)
max_hr = st.sidebar.slider('Max Heart rate',60,200,130)
fasting_1 = 0
fasting_2 = 0
sex_class_1 = 0
sex_class_2 =0
chestpaintype_class_1 = 0
chestpaintype_class_2 = 0
chestpaintype_class_3 = 0
chestpaintype_class_4 = 0
if(fastingBS > 120):
    fasting_1 = 1
    fasting_2 = 0
else:
    fasting_1 = 0
    fasting_2 = 1
if(sex_1 == True):
    sex_class_1 = 1
    sex_class_2 =0
else:
    sex_class_1 = 0
    sex_class_2 = 1
if(chestpaintype_1 == True):
    chestpaintype_class_1 = 3
    chestpaintype_class_2 = 0 
    chestpaintype_class_3 = 0
    chestpaintype_class_4 = 0
elif(chestpaintype_2 == True):
    chestpaintype_class_1 = 0
    chestpaintype_class_2 = 4
    chestpaintype_class_3 = 0
    chestpaintype_class_4 = 0
elif(chestpaintype_3 == True):
    chestpaintype_class_1 = 0
    chestpaintype_class_2 = 0
    chestpaintype_class_3 = 5
    chestpaintype_class_4 = 0
else:
    chestpaintype_class_1 = 0
    chestpaintype_class_2 = 0
    chestpaintype_class_3 = 0
    chestpaintype_class_4 = 6



data = { 'Age' : age,
         'Sex_1' : sex_class_1,
         'Sex_2' : sex_class_2,
         'ChestPainType_1' : chestpaintype_class_1,
         'ChestPainType_2' : chestpaintype_class_2,
         'ChestPainType_3' : chestpaintype_class_3,
         'ChestPainType_4' : chestpaintype_class_4,
         'RestingBP' : blood_pressure,
         'Cholesterol' : cholesterol,
         'FastingBS_1' : fasting_1,
         'FastingBS_2' : fasting_2,
         'MaxHR' : max_hr,
}

health = pd.DataFrame(data, index = [0])
st.write(health)

import pickle as pkl 
load_model = pkl.load(open('C:\Gitthub\webapp\heart_model.pkl','rb'))


prediction_proba = load_model.predict_proba(health)
prediction_proba_list = prediction_proba.tolist()
prediction_proba_list_2 = list(chain.from_iterable(prediction_proba_list))
st.subheader('Prediction probability')
fig1,ax1= plt.subplots()
ax1.pie(prediction_proba_list_2,labels = ('not likely','likely') ,autopct="%1.1f%%", explode= (0,0.1)
        , startangle = 90)
ax1.axis('equal')

st.pyplot(fig1)


