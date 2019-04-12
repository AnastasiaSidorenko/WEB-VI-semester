<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/29/19
 * Time: 9:56 AM
 */

include("app/core/BaseActiveRecord.php");

class GuestBookModel extends BaseActiveRecord
{
    public $id;
    public $name;
    public $email;
    public $message="Ваш отзыв отправлен";

    protected static $table='guest_book';
}