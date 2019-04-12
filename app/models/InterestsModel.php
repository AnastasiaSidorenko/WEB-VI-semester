<?php

include("app/core/BaseActiveRecord.php");

class InterestsModel extends BaseActiveRecord
{
    private $hobbies=["Плавание","Изучения языков","Личные исследования"];
    private $books=["Карлос Кастанеда &quotПутешествие в Икстлан&quot","Карлос Кастанеда &quotСказки о силе&quot",
			"Карлос Кастанеда &quotСила безмолвия&quot","Карлос Кастанеда &quotАктивная сторона бесконечности&quot","Роберт Монро &quotДалёкие путешествия&quot",
			"Роберт Монро &quotОкончательное путешествие&quot","Владимир Серкин &quotЗвёзды Шамана&quot","Слава Курилов &quotОдин в Океане&quot"];
    private $music = ["Классическая","Музыка жанра New age","Израильская музыка"];

    public function GetHobbies()
    {
    return $this->hobbies;
    }
    public function GetBooks(){
        return $this->books;
    }
    public function GetMusic(){
        return $this->music;
    }
    /*function Interests_Output($args){
        foreach($args as $item) {
            echo "<li>$item</li>";
        }
    }*/
}