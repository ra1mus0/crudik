<?php
class User {
    public $username = 'нет';
    public $email = 'нет';
    public $phoneNumber = 'нет';
    
    public function __construct($username, $email, $userNumber) {
        $this->username = $username;
        $this->email = $email;
        $this->phoneNumber = $userNumber;
    }
}