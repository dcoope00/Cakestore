<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hours-Locations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url("https://themes.muffingroup.com/be/icecream2/wp-content/uploads/2019/09/icecream2-sectionbg3.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Titan One", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu,
                Cantarell, "Helvetica Neue", sans-serif;
        }

        .navbar-default .navbar-nav>li>a:hover {
            color: white;
            text-decoration: underline;
        }

        .navbar-default .navbar-nav>li>a {
            color: white;
            font-weight: bold;
        }

        .navbar-default {
            background-color: rgba(141, 12, 12, 0.973);
            border: none;
        }

        .navbar-default .navbar-nav>li.active>a,
        .navbar-default .navbar-nav>li.active>a:focus,
        .navbar-default .navbar-nav>li.active>a:hover {
            background-color: rgba(141, 12, 12, 0.973);
            text-decoration: underline;
            color: white;
        }
    </style>
</head>

<body>
   
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="ice-cream-cone.png" style="height: 40px; width: 40px; margin-top: -10px;"> </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Treats.php">Treats</a></li>
                <li class="active"><a href="Hours-Locations.php">Hours & Locations</a></li>
                <li><a href="ContactUs.php" >Contact Us</a></li>
                <li><a href="Customers/Customers.php">Customers</a></li>

            </ul>
        </div>
    </nav>

   
    <div class="container" style="background-color: #d41442; height: auto; width: 600px; border-radius: 55px; margin-top: 50px;">
        <p style="padding-top: 50px; color: white; font-size: 40px; font-weight: bold; text-align: center;">
            Store Locations
        </p>
        <p style="padding-top: 20px; color: white; font-size: 20px; font-weight: bold; text-align: center;">
            Fort Smith<br>
        </p>
        <p style="padding-top: 10px; color: white; font-size: 16px; font-weight: bold; text-align: center;">
            5210 Grand Ave<br>Fort Smith, AR 72913<br>(479) 788-7000
        </p>

        <p style="padding-top: 10px; color: white; font-size: 20px; font-weight: bold; text-align: center;">
            Little Rock<br>
        </p>
        <p style="padding-top: 10px; color: white; font-size: 16px; font-weight: bold; text-align: center;">
            2801 S. University Ave.<br>Little Rock, AR 72204<br>(501) 916-3000
        </p>

        <p style="padding-top: 10px; color: white; font-size: 20px; font-weight: bold; text-align: center;">
            Fayetteville<br>
        </p>
        <p style="padding-top: 10px; color: white; font-size: 16px; font-weight: bold; text-align: center;">
            1 University of Arkansas<br>Fayetteville, AR 72701<br>(479) 575-2000
        </p>
    </div>

    
    <div class="container" style="background-color: #d41442; height: 350px; width: 600px; border-radius: 55px; margin-top: 30px;">
        <p style="padding-top: 50px; color: white; font-size: 35px; font-weight: bold; text-align: center;">
            Hours For All Locations
        </p>
        <p style="padding-top: 20px; color: white; font-size: 20px; font-weight: bold; text-align: center;">
            9:00am - 9:00pm<br> Monday - Saturday<br><br><br> 10:00am - 6:00pm <br> Sundays
        </p>
    </div>

</body>

</html>
