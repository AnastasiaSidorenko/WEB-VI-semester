<?php

class ResultsVerification extends FormValidation
{
    public function checkTest($post_array) {
        if(count($this->errors)==0){
            $test = new TestModel();
            $test->fio = $post_array['fio'];
            $test->date = date('d.m.y');
            $test->group = $post_array['Groups'];
        }
        if($post_array['option1'] != "language") {
            $test->question1 = "Неверно";
            $this->errors["первый вопрос"] = "Неверно";
        }
        else{
            $test->question1 = "Верно";
        }
        if($post_array['Groups2'] != "4") {
            $test->question2 = "Неверно";
            $this->errors["второй вопрос"] = "Неверно";
        }
        else{
            $test->question22 = "Верно";
        }
        if($post_array['question3'] != "поля") {
            $test->question3 = "Неверно";
            $this->errors["третий вопрос"] = "Неверно";
        }
        else{
            $test->question3 = "Верно";
        }
        $test->save();
    }
    public function showErrors(){
        $errors="<div id='valid'";
        if(count($this->errors)==0){
            $errors.="<p style='color: green; font-size: 22px;'><br> Тест пройден! </p>";
        }
        else{
            foreach($this->errors as $error => $value)
                $errors.="<p style='color: red; font-size: 22px;'> Ошибка! ".$error." : ".$value."</p>";
        }
        return $errors."</div>";
    }


}