<?php
function litems(...$args)
{
    foreach ($args as $arg) {
        echo "<li>$arg</li>";
    }
}
