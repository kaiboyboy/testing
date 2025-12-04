<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            padding: 0;
            margin: 0;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size:cover;
        }
        #greeting{
            color:white;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
            letter-spacing:1px;
            font-weight:600;
        }
    </style>
</head>
<body>
    <h1  id = 'greeting'></h1>
    <script>
        var currentDate = new Date();
        var currentHour = currentDate.getHours();

        console.log(currentDate);
        console.log(currentHour);

        var img_file =" ";
        var greet = " ";

        if (currentHour >= 6 && currentHour < 12){
            img_file = 'morning.jpg';
            greet = 'Good Morning;';
        }
        else if (currentHour >= 12 && currentHour < 17){
            img_file = 'afternoon.jpg';
            greet = 'Good Afternoon!';
        }
        else if (currentHour >= 17 && currentHour < 22){
            img_file = 'evening.jpg';
            greet = 'Good Evening!';
        }
        else if (currentHour >= 22 && currentHour < 6){
            img_file = 'night.jpg';
            greet = 'Good Night!';
        }

        document.body.style.backgroundImage = 'url('+img_file+')';
        document.getElementById('greeting').innerHTML = greet;
    </script>
</body>
</html>