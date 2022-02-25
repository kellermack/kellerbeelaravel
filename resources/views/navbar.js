<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Keller Bees</h4>
        </div>

        <ul class="nav-links">
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">About</a>
            </li>
            <li><a href="#">Bee Game</a>
            </li>
            <li><a href="#">Stuff</a>
                <ul class="dropdown">
                    <li><a href="#">Sub-1</a></li>
                    <li><a href="#">Sub-2</a></li>
                    <li><a href="#">Sub-3</a></li>
                </ul>
            </li>
        </ul>
        <div class="burger">
            <div class ="line1"></div>
            <div class ="line2"></div>
            <div class ="line3"></div>
        </div>
    </nav>
    <script src="navbar.js"></script>
</body>
</html>
