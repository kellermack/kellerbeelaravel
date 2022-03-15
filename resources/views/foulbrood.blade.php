{{--<?php
date_default_timezone_set('America/New_York');
include 'database.php';
include 'comments.php';
session_start();
?>
--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoulBrood</title>
    <link rel="stylesheet" href="{{ url('css/resources.css') }}">
</head>
<body id="foul">
<div>
<a href="{{url("welcome.blade.php")}}"><img src="{{('css/images/honeycomb.png')}}" alt="Bee hive" class="image1"></a>
<h1>Something Smells Foul</h1>
<p>FoulBrood, 4 different diseases that directly attack brood chambers of bee hives.
    Consisting of American Foul brood, European Foul brood, Chalkboard and Stone-brood.
    The following table can help differentiate between the American and European Foul brood.
</p>
<h3>Symptoms</h3>
<table>
    <tr>
        <th>Appearance of Brood</th>
        <th>Color Of Brood</th>
        <th>Consistency of Brood</th>
        <th>Odor</th>
        <th>Type</th>
    </tr>
    <tr>
        <td>Brood is sealed, discolored, punctured or sunken cappings</td>
        <td>Dull white, light brown to dark brown to almost black</td>
        <td>Soft, gooey and sticky</td>
        <td>Putrid odor</td>
        <td>American FoulBrood</td>
    </tr>
    <tr>
        <td>Brood is sealed, discolored, punctured or sunken cappings</td>
        <td>Dull white,yellowish white, light brown to dark brown to almost black</td>
        <td>Watery, rarely stick, more granular</td>
        <td>Sour odor</td>
        <td>European FoulBrood</td>
    </tr>

</table>
<h3>American Foul Brood</h3>
<img src="{{('css/images/americanFoulbrood.jpeg')}}" alt="foul-brood">
<h3>European FoulBrood</h3>
<img src="{{('css/images/EuropeanFoulBrood.jpeg')}}" alt="Euro Foul brood">
<h2>Treatments</h2>
<p>A majority of states by law require you to contact the state beekeepers' association
    to report foul-brood. With the spores able to be viable for nearly 80 years the only real solution
    is to burn all hive bodies and frames that have been infected with foul-brood.
</p>
<h2>Chalkboard</h2>
<p>A fungal disease that attacks the gut of larvae, eventually starving them to death
    and giving them to appear chalky or white.
    Chalkboard is mainly seen in early spring in wet conditions, ventilation is key in to preventing
    and treating Chalkboard.
</p>
<h3>ChalkBrood Larvae</h3>
<img src="{{('css/images/Chalkbrood.jpeg')}}"alt="chalkboard">
<h2>Stone-brood</h2>
<p>Not as common as other fungal diseases, can be somewhat difficult to identify in early stages.
    Can form a collar like ring around the head of the larvae, after death they turn black and
    are difficult to crush. Hence the name. Strong colonies are able to treat this by disposing
    of the larvae that are infected by the fungal spores.
</p>
<h3>Stone-brood Cells</h3>
<img src="{{('css/images/stonebrood.jpeg')}}" alt="stone brood">
</div>
</body>

{{--<?php
echo "<form method ='POST' action='".setComments ($conn)."'>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Comment</button>
</form>";
getComments($conn)
?>--}}

<footer>&copy; Copyright 2022 kellerbee.com</footer>
</html>
