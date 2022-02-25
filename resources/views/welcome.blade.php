
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src = "resources/js/app.js"></script>
    <title>Keller Bee</title>
</head>
<body>
<nav>
    <div class="logo">
        <h4>Keller Bees</h4>
        <h6>It's the place to Bee</h6>
    </div>
    <ul class="nav-links">
        <li><a href="{{ url('donate.blade.php') }}">Donate</a></li>

        <li><a href="{{url('about.blade.php')}}">About</a></li>

        <li><a href="{{url('beeginner.blade.php')}}">Beeginners</a></li>

        <li><a href="{{url('resources.blade.php')}}}">Resources</a></li>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<li><a href='logout.php'>Sign Up</a></li>";
        }
        else {
            echo "<li><a href='signup.php'>Sign Up</a></li>";
            echo "<li><a href='login.php'>Login</a></li>";

        }

        ?>
        <li><a href="Storepage.php">Store</a></li>

    </ul>
    <div class="burger">
        <div class ="line1"></div>
        <div class ="line2"></div>
        <div class ="line3"></div>
    </div>
</nav>


<script src="/resources/js/app.js"></script>


</body>
<footer id="footer">&copy; Copyright 2022 kellerbee.com</footer>
</html>
