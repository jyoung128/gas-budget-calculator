<?php

/*
Jonah Young
Assignment 3: Gas Budget Calculator
10/13/2020
**/

class ViewModel {
	public $info;
	public $msg;

	
}

class FormData {
    public $gasType;
    public $commuteMileage;
    public $milesPerGal;
    public $isDiscounted;
    

    function _construct(string $gas, string $mileage, string $mpg, bool $discounted) {
        $this->gasType = $gas;
        $this->commuteMileage = $mileage;
        $this->milesPerGal = $mpg;
        $this->isDiscounted = $discounted;
    }


    public function isValid(): bool {
		if (empty($_POST["gastype"])) {
			return false;
		}

		if (empty($_POST["mileage"]) || !is_numeric($_POST["mileage"])) {
			return false;
		}

		if (empty($_POST["mpg"]) || !is_numeric($_POST["mpg"])) {
			return false;
		} 

		return true;
		
	}

	
}