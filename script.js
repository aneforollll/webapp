let myPieChart = null; 

document.getElementById('predictionForm').addEventListener('submit', async function(e) {
    e.preventDefault(); 
    
    const errorDiv = document.getElementById('errorMessage');
    const riskSummaryDiv = document.getElementById('riskSummary');
    
    // Hide previous messages
    errorDiv.style.display = 'none';
    riskSummaryDiv.style.display = 'none';

    const payload = {
        age: parseInt(document.getElementById('age').value),
        sex: document.getElementById('sex').value,
        chest_pain_type: document.getElementById('chest_pain_type').value,
        blood_pressure: parseInt(document.getElementById('blood_pressure').value),
        cholesterol: parseInt(document.getElementById('cholesterol').value),
        fasting_bs: parseInt(document.getElementById('fasting_bs').value),
        max_hr: parseInt(document.getElementById('max_hr').value)
    };

    try {
        const response = await fetch('/predict', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
        });

        if (!response.ok) {
            throw new Error("Server error or invalid input data.");
        }

        const data = await response.json();
        
        drawChart(data.chance_not_likely, data.chance_likely);

    } catch (error) {
        errorDiv.textContent = "Error: " + error.message + " (Is your FastAPI server running?)";
        errorDiv.style.display = 'block';
    }
});

function drawChart(notLikely, likely) {
    const ctx = document.getElementById('predictionChart').getContext('2d');
    
    if (myPieChart) {
        myPieChart.destroy();
    }

    // 1. Draw the Chart
    myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Not Likely', 'Likely'],
            datasets: [{
                data: [notLikely * 100, likely * 100], 
                backgroundColor: ['#2ecc71', '#e74c3c'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.label + ': ' + context.raw.toFixed(2) + '%';
                        }
                    }
                }
            }
        }
    });

    // 2. Update the Text Summary
    const riskSummaryDiv = document.getElementById('riskSummary');
    riskSummaryDiv.style.display = 'block'; // Unhide the div

    if (likely > 0.5) {
        // More than 50% chance -> High Risk
        riskSummaryDiv.className = 'risk-summary high-risk';
        riskSummaryDiv.innerHTML = `<strong>Assessment: Elevated Risk</strong><br>
                                    Based on the data, there is a ${(likely * 100).toFixed(1)}% probability of heart disease presence. Please consult a medical professional.`;
    } else {
        // Less than 50% chance -> Low Risk
        riskSummaryDiv.className = 'risk-summary low-risk';
        riskSummaryDiv.innerHTML = `<strong>Assessment: Low Risk</strong><br>
                                    Based on the data, there is a ${(notLikely * 100).toFixed(1)}% probability that heart disease is not present.`;
    }
}