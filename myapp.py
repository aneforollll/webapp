import pandas as pd 
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
heart_data = pd.read_csv('heart_cleaned.csv')

X_train = heart_data.drop(columns=['HeartDisease'])
Y_train = heart_data['HeartDisease']
X_train,X_test,Y_train,Y_test = train_test_split(X_train,Y_train, test_size=0.2)


model = DecisionTreeClassifier()
model.fit(X_train,Y_train)

import pickle
pickle.dump(model, open('heart_model.pkl', 'wb'))