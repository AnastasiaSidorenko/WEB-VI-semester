<?php

class FormValidation
{
    protected $rules=[];//массив, содержащий набор правил проверки валидности данных
    protected $errors=[];//массив, содержащий тексты ошибок, возникших при проверке валидности данных

    public function isNotEmpty($data,$key){
        if(empty($data)){
            $this->errors[$key]="Поле не должно быть пустым";
            return 0;
        }
        return 1;
    }
    public function isInteger($data){
        if(is_integer($data)){
            $this->errors["isInteger"]="Строковое значение представлено целым числом";
            return $this->errors["isInteger"];
        }
    }
    public function isLess($data,$value){
        if($data > $value && is_integer($data)){
            $this->errors["isLess"]="Строковое значение представлено целым числом и $data > $value";
            return $this->errors["isLess"];
        }
    }
    public function isGreater($data,$value){
        if($data < $value && is_integer($data)){
            $this->errors["isGreater"]="Строковое значение представлено целым числом и $data < $value";
        }
    }
    //public function isEmail
    public function SetRule($field_name,$validator_name){
        $this->rules[$field_name]=$validator_name;
        return $this;
    }
    public function validate($post_array,$form_name){
        switch($form_name){
            case ("toContact"):
                if(count($post_array)!=7){
                    $this->errors["field"] = "Заполнены не все поля";
                }
                break;
            case ("toTest"):
                if(count($post_array)<3){
                    $this->errors["field"] = "Заполнены не все поля";
                }
                break;
        }
        foreach($post_array as $key => $value){
            if($this->isNotEmpty($value,$key)){
                if($this->rules[$key]){
                    $matches=preg_match($this->rules[$key],$value);
                    if($matches == 0){
                        $this->errors[$key] = "Поле заполнено неверно";
                    }
                }
            }
        }
    }
    public function ShowErrors(){
        $errors="<div id='validation'";
        if(count($this->errors)==0){
            $errors.="<p style='color:green; font-size:22px;'>Ваше сообщение будет отправлено </p>";
        }
        else{
            foreach($this->errors as $error=>$value){
                $errors.="<p style='color: red; font-size:22px;'>Ошибка! ".$error." : ".$value."</p>";
            }
        }
        return $errors."</div>";
    }
}