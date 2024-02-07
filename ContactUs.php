<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />
</head>

<body>
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
            border-radius: 0;
        }

        .navbar-default .navbar-nav>li.active>a,
        .navbar-default .navbar-nav>li.active>a:focus,
        .navbar-default .navbar-nav>li.active>a:hover {
            background-color: rgba(141, 12, 12, 0.973);
            text-decoration: underline;
            color: white;
        }

        h1 {
            align-content: center;
            margin: 0 auto;
            font-family: 'Luckiest Guy', cursive;
            text-align: center;
            color: rgba(141, 12, 12, 0.973);
        }

        .contact-form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 25vh; 
        }

        .contact-form {
            padding: 20px;
            background-color: #d41442;
            height: auto;
            width: 500px;
            border-radius: 55px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #d41442;
            border-color: #d41442;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #b30c3e;
            border-color: #b30c3e;
        }
    </style>


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
                <li><a href="Hours-Locations.php">Hours & Locations</a></li>
                <li class="active"><a href="ContactUs.php">Contact Us</a></li>
                <li><a href="Customers/Customers.php">Customers</a></li>

            </ul>
        </div>
    </nav>

    <div class="contact-form-container">
        <h1>Send us a message!</h1>
        <div class="container contact-form">
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter the subject">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                </div>
                <button style="background-color: rgba(141, 12, 12, 0.973);" type="submit" class="btn btn-primary">Send a message</button>
            </form>
        </div>
    </div>



</body>

</html>
