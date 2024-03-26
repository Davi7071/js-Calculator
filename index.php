<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .calculator {
            width: 300px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" id="expression" placeholder="Enter a mathematical expression" required>
        <input type="submit" value="Calculate" onclick="calculate()">
        <p id="result"></p>
    </div>

    <script>
        function calculate() {
            var expression = document.getElementById("expression").value;
            var result;
            try {
                result = eval(expression);
                document.getElementById("result").innerText = "Result: " + result;
            } catch (error) {
                document.getElementById("result").innerText = "Error: " + error.message;
            }
        }
    </script>
</body>
</html>
