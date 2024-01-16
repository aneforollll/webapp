import numpy as np
import streamlit as st
import pandas as pd
from sklearn.tree import DecisionTreeClassifier
from sklearn.ensemble import RandomForestClassifier 
import matplotlib.pyplot as plt

st.write(
    """ # Heart disease prediction app

    This app will predict your probability of you having heart disease
"""
)

st.sidebar.header("User Input")
def user_input_features():
    age = st.sidebar.slider('Age(year)',20,80,50)
    sex = st.sidebar.selectbox('Sex',('male','female'))
    Chest_pain_type = st.sidebar.selectbox('Chest pain type',('Chest pain like being squeezed, pressed, and heavy in the chest.'
                                                              ,'Chest pain like being stabbed, burning.'
                                                              ,'chest pain like acid reflux.'
                                                              ,'Never felt chest pain'))
    blood_pressure = st.sidebar.slider('Blood pressure',80,180,130)
    cholesterol = st.sidebar.slider('Cholesterol',0,600,300)
    blood_sugar = st.sidebar.slider('Blood sugar',60,200,130)
    max_hr = st.sidebar.slider('Max heart rate',60,200,130)
    
    data = { 'Age': age ,
            'Sex': sex,
            'ChestPainType' : Chest_pain_type,
            'RestingBP' : blood_pressure,
            'Cholesterol' : cholesterol,
            'FastingBS' : blood_sugar,
            'MaxHR' : max_hr
        }
    features = pd.DataFrame(data, index=[0])
    return features
input_df = user_input_features()
st.write(input_df)
percent = st.sidebar.slider('Percentage',0,100,30)
labels = 'likely','unlikely'
size = [percent,100-percent ]
explode =[0.1,0]

fig1, ax1 = plt.subplots()
ax1.pie(size, explode=explode , labels=labels, autopct='%1.1f%%',
        shadow=True , startangle=90)
ax1.axis('equal')

st.pyplot(fig1)


