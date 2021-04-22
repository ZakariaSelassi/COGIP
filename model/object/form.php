<?php

class Form {

    private $data;

    public $p = 'p';
    public $div = 'div';


    public function __construct($data = array())
    {
        $this -> data = $data;
    }

    public function surroundP($html){  
        return "<{$this->p}>{$html}</{$this->p}>";
    }

    public function surroundDiv($html){
        return "<{$this->div}>{$html}</{$this->div}>";
    }

    public function label($for, $text){
        return "<p><label for='$for'>".$text."</label></p>";
    }

    public function inputType($type, $name){
        return "<p><input type='$type' name='$name'></p>";
    }

    public function radio($name, $value) {
        return "<input type='radio' name='$name' value='$value'>";
    }

    public function time($name){
        return "<input type='time' name='$name' value=''>";
    }

    public function select($name, $arrayValue=array()){
        $optionArray= [];
        foreach($arrayValue as $value){ 
            array_push($optionArray,"<option value='$value'".$value."</option>");
        }
        return "<p>\n<select name='$name'>".implode("",$optionArray)."</select>\n</p>\n";
    }
}





?>


