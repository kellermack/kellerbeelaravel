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
    <a href="{{url("welcome.blade.php")}}"><img src="{{('css/images/honeycomb.png')}}" alt="Bee hive" class="image1"></a>
    <h4>Back to the Hive!!</h4>
</div>
<div>
    <h1>Click a picture to learn more!</h1>
    <section class="container">
        <a href="{{url("varroa.blade.php")}}"><img src="{{('css/images/varroadestructormite.jpeg')}}" class="image2" alt="varroa"></a>
        <a href="{{url("hivebeetle.blade.php")}}"><img src="{{('/css/images/hiveBeetle.jpeg')}}" class="image2" alt="hivebeetle"></a>
        <a href="{{url("foulbrood.blade.php")}}"><img src= "{{('/css/images/foulbrood.jpeg')}}" class="image2" alt="foulbrood"></a>
        <a href="{{url("stateprograms.blade.php")}}"><img src="{{('/css/images/unitedStates.jpeg')}}" class="image2" alt="usmap"></a>
        <a href="{{url("waxmoth.blade.php")}}"><img src="{{('/css/images/waxMoth.jpeg')}}" class="image2" alt="waxmoth"></a>
        <a href="{{url("bearsandskunks.blade.php")}}"><img src="{{('/css/images/skunkBear.jpeg')}}" class="image2" alt="bears and skunks"></a>
    </section>
</div>
</body>
<footer>&copy; Copyright 2022 kellerbee.com</footer>
</html>

