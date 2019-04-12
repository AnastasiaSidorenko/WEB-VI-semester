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
            case("registration")  :
                if(count($post_array)!=4){
                    $this->errors["field"] = "Все поля обязательны к заполнению";
                }
                break;
            case("authorization"):
                if(count($post_array)<2){
                    $this->errors["field"]="Незаполненое поле";
                }
                return;
            case("Create_Blog_Entry"):
                if(!$post_array['blog_entry_title']){
                    $this->errors["field_title"] = "Не введена тема записи";
                }
                if(!$post_array['blog_entry_text']){
                    $this->errors["field_text"] = "Не введен текст записи";
                }
                return;
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
    public function GetErrorsQuantity(){
        return count($this->errors);
    }
    public function setError($key,$value){
        $this->errors[$key]=$value;
    }
    public function ShowErrors($message){
        $errors="<div id='validation'";
        if(count($this->errors)==0){
            $errors.="<p style='color:green; font-size:22px;'>$message</p>";
        }
        else{
            foreach($this->errors as $error=>$value){
                $errors.="<p style='color: red; font-size:22px;'>Ошибка! ".$error." : ".$value."</p>";
            }
        }
        return $errors."</div>";
    }
}