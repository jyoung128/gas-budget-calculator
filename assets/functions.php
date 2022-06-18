<?php

/*
Jonah Young
Assignment 3: Gas Budget Calculator
10/13/2020
**/

require_once "index.php";
require_once "classes/FormData.php";

function getViewModel(): ViewModel {
	$model = new ViewModel();

	try {
		$model->info = handleSubmit();
	} catch (Exception $e) {
		$model->msg = $e->getMessage();
	}

	return $model;
}

function handleSubmit() {
    if($_SERVER["REQUEST_METHOD"] !== "POST") {
        return null;
    }

    $gasType = $_POST['gastype'];
    $commuteMileage = $_POST['mileage'];
    $milesPerGal = $_POST['mpg'];
    $isDiscounted = isset($_POST['discounted']);
    

    $info = new FormData(
        $gasType,
        $commuteMileage,
        $milesPerGal,
        $isDiscounted
        
    );

    

    $gasTypes = array(
        "87" => 1.89,
        "89" => 1.99,
        "92" => 2.09,
        );


    if($isDiscounted === true){
        $groceries = $_POST['groceries'];
    
        $discount = floor($groceries/100);
            
        $gasTypes = array(
            "87" => (1.89 - (0.1 * $discount)),
            "89" => (1.99 - (0.1 * $discount)),
            "92" => (2.09 - (0.1 * $discount)),
            );
                
        }

   switch ($gasType) {
       case '87':
           $gasType = $gasTypes["87"];
           break;

       case '89':
            $gasType = $gasTypes["89"];
            break;

       case '92':
            $gasType = $gasTypes["92"];
            break;
   }


   if ($info->isValid()) {
        $budget = ($commuteMileage / $milesPerGal) * $gasType;

        return number_format($budget, 2);
    }
    
    if (!$info->isValid()) {
		throw new Exception("Please enter a gas type, a valid commute mileage, and a valid mpg");
    }
    

}