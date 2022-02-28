<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/resources.css') }}">
</head>
<body>

<div>
    <a href="{{url("welcome.blade.php")}}"><img src="{{asset('css/images/honeycomb.png')}}" alt="Bee hive" class="image1"></a>
    <h4>Back to the Hive!!</h4>
</div>
<div>
    <h1>Click a picture to learn more!</h1>
    <section class="container">
        <a href="{{url("varroa.blade.php")}}"><img src="{{asset('css/images/varroadestructormite.jpeg')}}" class="image2" alt="varroa"></a>
        <a href="hiveBeetle.php"><img src="{{('/css/images/hiveBeetle.jpeg')}}" class="image2" alt="hivebeetle"></a>
        <a href="foulBrood.php"><img src= "{{('/css/images/foulbrood.jpeg')}}" class="image2"></a>
        <a href="statePrograms.html"><img src="Images/unitedStates.jpeg" class="image2"></a>
        <a href="waxMoth.php"><img src="Images/waxMoth.jpeg" class="image2"></a>
        <a href="bearsandskunks.php"><img src="Images/skunkBear.jpeg" class="image2"></a>
    </section>
</div>
</body>
<footer>&copy; Copyright 2022 kellerbee.com</footer>
</html>

