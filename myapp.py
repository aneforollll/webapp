import pandas as pd 
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import pickle as pkl

data = pd.read_csv('heart_cleaned.csv')
X_data = data.drop(columns=['HeartDisease'])
Y_data = data['HeartDisease']
X_data_train,X_data_test,Y_data_train,Y_data_test = train_test_split(X_data,Y_data, test_size=0.2)

model = RandomForestClassifier()
model.fit(X_data_train,Y_data_train)

pkl.dump(model , open('heart_model.pkl','wb'))

prediction = model.predict(X_data_test)
score= accuracy_score(Y_data_test,prediction)
print(score)