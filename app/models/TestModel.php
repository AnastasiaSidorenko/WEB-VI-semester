<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/13/19
 * Time: 5:59 PM
 */

include("app/core/Model.php");
include("app/models/validators/ResultsVerification.php");

class TestModel extends Model
{
    function __construct(){
        parent::__construct();
        $this->validator = new ResultsVerification();
    }
    function validate($post_data, $form_name)
    {
        parent::validate($post_data, $form_name);
        $this->validator->checkTest($this->post_data);
    }
}