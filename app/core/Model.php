<?php

include $_SERVER['DOCUMENT_ROOT']."/app/models/validators/FormValidation.php";

class Model
{
    public $validator;
    public $post_data;
    function __construct()
    {
        $this->validator = new FormValidation();
    }
    public function validate($post_data,$form_name)
    {
        $this->post_data=$post_data;
        $this->validator->setRule('fio',"/^[A-zА-я]{1,}[\s][A-zА-я]{1,}[\s][A-zА-я]{1,}$/u");
        $this->validator->setRule('phone',"/^[+][37][0-9]{8,10}$/");
        $this->validator->setRule('email',"/^[A-z0-9]{1,}[@][A-z]{1,}[.][A-z]{1,}$/");
        $this->validator->validate($post_data,$form_name);
    }

}