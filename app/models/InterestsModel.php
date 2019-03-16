<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/13/19
 * Time: 5:46 PM
 */

include("app/core/Model.php");

class InterestsModel extends Model
{
    public $hobbies=["Плавание","Изучения языков","Личные исследования"];
    public $books=["Карлос Кастанеда &quotПутешествие в Икстлан&quot","Карлос Кастанеда &quotСказки о силе&quot",
			"Карлос Кастанеда &quotСила безмолвия&quot","Карлос Кастанеда &quotАктивная сторона бесконечности&quot","Роберт Монро &quotДалёкие путешествия&quot",
			"Роберт Монро &quotОкончательное путешествие&quot","Владимир Серкин &quotЗвёзды Шамана&quot","Слава Курилов &quotОдин в Океане&quot"];
    public $music = ["Классическая","Музыка жанра New age","Израильская музыка"];

    function Interests_Output($args){
        foreach($args as $item) {
            echo "<li>$item</li>";
        }
    }
}