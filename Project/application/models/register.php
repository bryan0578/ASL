<?php

class Register extends MY_Model {
    
    const DB_TABLE = 'user';
    const DB_TABLE_PK = 'user_id';
    
    public $user_id;
    public $name;
    public $username;
    public $email;
    public $password;
    
}