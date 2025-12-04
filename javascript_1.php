<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1 - Fahrenheit to Celcius</title>
    <script>
        function toCelsius(){
            var F = document.getElementById("fah").value;
            var C = (F-32) * 5/9;
            document.getElementById('result').innerHTML = C + '&deg; Celsius';
        }
    </script>
</head>
<body>
    <h1> Temperature Calculator</h1>

    <input type="number" step="any" id="fah">
    <label>&deg;Fahrenheit</label>
    <input type="button" value="=" onclick="toCelsius()">
    <p id="result"></p>

</body>
</html>