<?php
function Interests_Output($args){
    foreach($args as $item) {
        echo "<li>$item</li>";
    }
}