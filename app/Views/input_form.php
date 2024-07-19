<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: calc(100% - 10px);
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type='submit'] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px;
            cursor: pointer;
        }  
        input[type='submit']:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Form</h2>

        <form id="myForm" action="<?php echo base_url('submitData'); ?>" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="referid">Refer ID:</label>
                <input type="text" id="referid" name="referid">
            </div>
            <div class="form-group">
                <label for="amount">Amount :</label>
                <input type="number" id="amount" name="amount">
            </div>
            <div class="form-group">
                <input type="button" value="Submit" onclick="submitForm()">
            </div>
        </form>
    </div>
    <script>
        function submitForm() {
            var form = document.getElementById('myForm');
            var formData = {
                name: form.elements['name'].value,
                email: form.elements['email'].value,
                referid: form.elements['referid'].value,
                amount: form.elements['amount'].value
            };
            console.log(formData);
            alert('Data has been post')
            form.reset();

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo base_url('submitData'); ?>');
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log('Data saved successfully!');
                    form.reset();
                } else {
                    console.error('Failed to save data');
                }
            };

            xhr.send(JSON.stringify(formData));
        }
    </script>
</body>
</html>
