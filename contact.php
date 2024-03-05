<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Tail Zone</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        <img src="img/contact.png" style="float: right;">
        <h1>Get in Touch</h1>
        <p id="p1">Hello Pet Lovers!

At TailZone, we're passionate about pampering your furry friends with the finest products and services. Whether you have a question about our extensive range of pet supplies, need personalized recommendations, or just want to share adorable stories about your pets, we're here for you!

Our dedicated team of pet enthusiasts is ready to assist you. From premium pet food to stylish accessories, we've got everything your pets need for a happy and healthy life. Have a specific query or looking for something unique? Let's chat!

</p>
    </div><br><br>
    <div class="col-lg">
        <div style="float: right;">
            <h1>COMPANY INFORMATION</h1><br>
            <p id="p1">Bengaluru, India - 560011</p><br>
            <p id="p1">Phone : +91 7358503502</p><br>
            <p id="p1">Email : support@TailZone.com</p>
        </div>
        <h1>CONTACT US</h1>
        <div style="float: left;">
        <form>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>