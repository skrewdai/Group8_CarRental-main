<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Car Models</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
        }

        .navbar {
            background-color: black;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .car-model {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .car-model img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Car Models</h1>
    </header>

    <div class="navbar">
        <a href="welcome">Home</a>
        <a href="ContactUs">Contact Us</a>
        <a href="AboutUs">About Us</a>
        <a href="Faqs">FAQs</a>
        <a href="Models">Models</a>
    </div>

    <div class="container">
        <div class="car-model">
            <img src="car1.jpg" alt="Car Model 1">
            <h2>Car Model 1</h2>
            <p>Description of Car Model 1.</p>
        </div>

        <div class="car-model">
            <img src="car2.jpg" alt="Car Model 2">
            <h2>Car Model 2</h2>
            <p>Description of Car Model 2.</p>
        </div>

        <div class="car-model">
            <img src="car3.jpg" alt="Car Model 3">
            <h2>Car Model 3</h2>
            <p>Description of Car Model 3.</p>
        </div>
    </div>
</body>
</html>
