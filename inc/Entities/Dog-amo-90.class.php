<?php

class Dog {

    public string $userEmail;
    public string $dogType;
    public int $dogAge;
    public string $gender;
    public array $colors;
    public string $pickupDate;

    //getters 
    public function getUserEmail(): string {
        return $this->userEmail;
    }
    public function getDogType(): string {
        return $this->dogType;
    }
    public function getDogAge(): int {
        return $this->dogAge;
    }    
    public function getGender(): string {
        return $this->gender;
    }    
    public function getColors(): array {
        return $this->colors;
    }
    public function getPickupDate(): string {
        return $this->pickupDate;
    }


    //setters
    public function setUserEmail(string $userEmail){
         $this->userEmail = $userEmail;
    }
    public function setDogType(string $dogType) {
         $this->dogType = $dogType;
    }
    public function setDogAge(int $dogAge) {
         $this->dogAge = $dogAge;
    }    
    public function setGender(string $gender) {
         $this->gender = $gender;
    }    
    public function setColors(array $colors) {
         $this->colors = $colors;
    }
    public function setPickupDate(string $pickupDate) {
         $this->pickupDate = $pickupDate;
    }
}


?>