<?php

class Validator { 

    private $data;
    private $errors = [];
    private static $formNameEmail = ['firstName','lastName', 'email',];
  
    public function __construct($post_data){
      $this->data = $post_data;
    }
  
    public function validateForm(){
  
      foreach(self::$formNameEmail as $field){
        if(!array_key_exists($field, $this->data)){
          trigger_error("'$field' is not present in the data");
          return;
        }
      }
  
      $this->validateUserName();
      $this->validateFirstName();
      $this->validateLastName();
      $this->validateEmail();
      return $this->errors;
  
    }
  
    private function validateUserName(){
  
      $val = trim($this->data['username']);
  
      if(empty($val)){
        $this->addError('username', 'username cannot be empty');
      } else {
        if(!preg_match('/^[a-zA-Z0-9]{4,12}$/', $val)){
          $this->addError('username','username must be 4-12 chars & alphanumeric');
        }
      }
  
    }

    private function validateFirstName(){
  
        $val = trim($this->data['firstName']);
    
        if(empty($val)){
          $this->addError('firstName', 'username cannot be empty');
        } else {
          if(!preg_match('/^[a-zA-Z0-9]{4,12}$/', $val)){
            $this->addError('firstName','username must be 4-12 chars & alphanumeric');
          }
        }   
    }

    private function validateLastName(){
  
        $val = trim($this->data['lastName']);
    
        if(empty($val)){
          $this->addError('lastName', 'username cannot be empty');
        } else {
          if(!preg_match('/^[a-zA-Z0-9]{4,12}$/', $val)){
            $this->addError('lastName','username must be 4-12 chars & alphanumeric');
          }
        }   
    }
  
    private function validateEmail(){
  
      $val = trim($this->data['email']);
  
      if(empty($val)){
        $this->addError('email', 'email cannot be empty');
      } else {
        if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
          $this->addError('email', 'email must be a valid email address');
        }
      }
  
    }
  
    private function addError($key, $val){
      $this->errors[$key] = $val;
    }

}
?>