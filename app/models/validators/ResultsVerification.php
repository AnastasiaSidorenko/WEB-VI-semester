<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/13/19
 * Time: 6:13 PM
 */

class ResultsVerification extends FormValidation
{
    public function checkTest($post_array){
        if($post_array['option1']!="language") {
            $this->errors["первый вопрос"] = "Неверно";
        }
        if($post_array['Groups2'] != "4") {
            $this->errors["второй вопрос"] = "Неверно";
        }
        if(!$post_array['question3']) {
            $this->errors["третий вопрос"] = "Нет ответа";
        }
        /*else{
            $this->errors["Ответ на третий вопрос"] = "Класс это образ сущности (объекта) имеющий определенные свойства (поля) и функции (методы) для работы с этими свойствами";
        }*/
    }
    public function showErrors(){
        $errors="<div id='valid'";
        if(count($this->errors)==0){
            $errors.="<p style='color: green; font-size: 22px;'> Ответ на третий вопрос :<br>
Класс это образ сущности (объекта), имеющий определенные свойства (поля)<br> 
и функции (методы) для работы с этими свойствами<br><br>
Тест пройден! </p>";
        }
        else{
            foreach($this->errors as $error => $value)
                $errors.="<p style='color: red; font-size: 22px;'> Ошибка! ".$error." : ".$value."</p>";
        }
        return $errors."</div>";
    }
/*var question3 = document.forms.ToTest.question3.value;
Reg_FLOAT=/^[-]?[0-9]{1,}[.,][0-9]{1,}$/;
	if(!(Reg_FLOAT.test(question3))){
        alert("Error. Неверное формат ответа на вопрос №3");
        document.forms.ToTest.question3.focus();
        return false;
    }
	return true;*/
}