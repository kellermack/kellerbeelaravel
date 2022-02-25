<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
</head>
<style>
    body {
        background-color: khaki;

    }

    h1 {
        text-align: center;
        font-size: 5em;
    }

    p {
        text-align: center;
        font-size: 1.6em;
        font-weight: bold;
    }

    .donate{
        text-align: center;
        margin: 20px;
    }

</style>
<body>


<a href="welcome.blade.php"><img src="Images/honeycomb.png" alt="Bee hive" width="5%" height="5%"></a>
<h3>Back to the Hive!!</h3>
<h1>Donate!</h1>
<p>Your donations help maintain this webpage as well as helping
    me purchase beekeeping supplies.
</p>
<div class="donate">
    <form action="https://www.paypal.com/donate" method="post" target="_top">
        <input type="hidden" name="cmd" value="_donations" />
        <input type="hidden" name="business" value="2VW9JMSFTDZF6" />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" style="border: 0px none ; padding: 0px; width: 196px; height: 96px;" />
        <img alt=""src="https://www.paypal.com/en_US/i/scr/pixel.gif"/>
    </form>
</div>


</body>
<footer>&copy; Copyright 2022 kellerbee.com</footer>
</html>
