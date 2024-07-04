<?php

class Validation {
    public static function validateEmail($userEmail){
        if (empty($userEmail)) {
            return "Email is required! Please fill the email input!";
        } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format!";
        }
        return null;
    }
    public static function validateDogType($dogType){
        if (empty($dogType)) {
            return "Dog's breed is required! Please choose your prefered breed!";
        } 
        return null;
    }
    public static function validateDogAge($dogAge){
        if (empty($dogAge) || $dogAge == 0) {
            return "Dog's age is required! Please choose your prefered age!";
        }elseif (!filter_var($dogAge, FILTER_VALIDATE_INT)) {
            return "Invalid age format! The age should be a number!";
        } 
        return null;
    }
    public static function validateDogGender($gender){
        if (empty($gender)) {
            return "Dog's gender is required! Please choose your prefered gender!";
        } 
        return null;
    }
    public static function validateDogColors($colors){
        if (empty($colors)) {
            return "Dog's colors are required! Please choose your preferred colors!";
        } 
        return null;
    }
    public static function validatePickupDate($colors){
        if (empty($colors)) {
            return "Dog's pickup date is required! Please choose your prefered date!";
        } 
        return null;
    }
}

?>