<!DOCTYPE html>
<html>
<head>
    <title>health alert survey</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f8fb;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 5px;
            background-color: #f0f5f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-weight: 500;
            margin-bottom: 30px;
            color: #1565c0;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #1565c0;
        }
        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #e3f2fd;
            transition: box-shadow 0.3s ease-in-out;
            color: #555;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus,
        textarea:focus {
            box-shadow: 0 0 5px rgba(21, 101, 192, 0.5);
        }
        textarea {
            resize: vertical;
        }
        button {
            background-color: #1565c0;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        button:hover {
            background-color: #0d47a1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Example</h1>
        <form>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="sex">Sex</label>
                <select id="sex" name="sex" required>
                    <option value="" selected disabled>Select your sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="chestPain">Chest Pain</label>
                <input type="text" id="chestPain" name="chestPain" required>
            </div>
            <div class="form-group">
                <label for="restingBP">Resting Blood Pressure</label>
                <input type="text" id="restingBP" name="restingBP" required>
            </div>
            <div class="form-group">
                <label for="cholesterol">Cholesterol (mg/dl)</label>
                <input type="text" id="cholesterol" name="cholesterol" required>
            </div>
            <div class="form-group">
                <label for="fastingBloodSugar">Fasting Blood Sugar</label>
                <input type="text" id="fastingBloodSugar" name="fastingBloodSugar" required>
            </div>
            <div class="form-group">
                <label for="maxHeartRate">Maximum Heart Rate Achieved</label>
                <input type="text" id="maxHeartRate" name="maxHeartRate" required>
            </div>
            <div class="form-group">
                <label for="exercise">Do you exercise?</label>
                <select id="exercise" name="exercise" required>
                    <option value="" selected disabled>Select your exercise level</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <button type="submit" onclick="document.location='dashboard.html'">Submit</button>
        </form>
    </div>
</body>
</html>