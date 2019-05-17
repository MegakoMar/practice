<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <a href="#" class="site-header_logo"></a>
    <div class="container row headerrow">
        <nav class="site-header_menu main-menu">
            <ul>
                <li><a href="index.php" class="is-active">Home</a></li>
                <li><a href="change-place.php">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container-fluid">
    <div class="row content">
        <div class="col-8 block-form black-bg">
            <div class="">
                <span class="form-header"></span>
            </div>
            <div class="form-content">
                <form action="form.php" method="post" class="content">
                    <input type="text" class="color-text" name="name" placeholder="Name" required/>
                    <input type="email" class="color-text" name="email" placeholder="Email" required>
                    <textarea name = "message" class="color-text" placeholder="Message"required></textarea>
                    <div class="button-style"><button>Contact us</button></div>
                    <input type="hidden" name="datetime" value="<?php $date = date("Y-m-d H:i:s"); echo htmlspecialchars($date);?>">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>