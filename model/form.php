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
    public function create($action)
    {
        return '<form action="'.$action.'" method="post">';
    }
    public function end(){
        return '</form>';
    }
    public function label($for, $text){
        return "<label for='$for'>".$text."</label>";
    }

    public function inputType($type, $name){
        return "<p><input type='$type' name='$name'>".$name."</p>";
    }

    public function radio($name, $value) {
        return "<input type='radio' name='$name' value='$value'>";
    }

    public function time($name){
        return "<input type='time' name='$name' value=''>";
    }

    public function select($text, $arrayValue=array()){
        $optionArray= [];
        foreach($arrayValue as $value){ 
            array_push($optionArray,"<option value='$value'>".$value."</option>");
        }
        return "<p>\n<select name='$text'>".implode("",$optionArray)."</select>\n</p>\n";
    }
    public function submit($modifier){
        return '<div><button type="submit" name="submit" class="btn btn-primary mt-1" >'.$modifier.'</button></div>';
    }
}


?>