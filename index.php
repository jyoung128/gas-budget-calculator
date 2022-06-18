
<?php

/*
Jonah Young
Assignment 3: Gas Budget Calculator
10/13/2020
**/

require_once "classes/FormData.php";
require_once "assets/functions.php";


$model = getViewModel();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonah's Gas Budget Calculator (JGBC)</title>
    <link rel="stylesheet" href="assets/main.css">
    <script type="text/javascript" src="assets/main.js"></script>
</head>
<body>
<?php if($model->msg): ?>
	<p class="error"><?=$model->msg?></p>
<?php endif; ?>
    <form action="" method="post">
        <fieldset>
            <legend>JGBC</legend>
            <p class="required">* required</p>
            <div class="input">
                <label for="gastype">Gas type: </label>
                <select name="gastype" id="gastype">
                    <option ></option>
                    <option value="87">87 Octane</option>
                    <option value="89">89 Octane</option>
                    <option value="92">92 Octane</option>
                </select> <span class="required">* </span>
            </div>
            <div class="input">
                <label for="mileage">Weekly commute mileage: </label>
                <input type="text" name="mileage" id="mileage"> <span class="required">* </span>
            </div>
            <div class="input">
                <label for="mpg">Average miles per gallon: </label>
                <input type="text" name="mpg" id="mpg"> <span class="required">* </span>
            </div>
            <div class="input">
            <label for="discounted">Using fuel perks?: </label>
                <input type="checkbox" name="discounted" id="discounted" onclick="check();">
            </div>
            <div class="input" name="perks" id="perks">

            </div>
            <div class="input">
                <button type="submit">Calculate</button>
            </div>
        </fieldset>
    </form>
    <? if($model): ?>

        <h2 class="budgetoutput">Your weekly gas budget: $<?=$model->info?></h2>

    <? endif; ?>
</body>
</html>













<?php
/*
Jonah Young
Assignment 3: Gas Budget Calculator
10/13/2020
**/
?>