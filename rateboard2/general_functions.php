<?php

function displayUnit($unit) {

    $displayUnit = array(1000000=>'1M',1000=>1000,100=>100,1=>1);
    return $displayUnit[$unit];
}
?>