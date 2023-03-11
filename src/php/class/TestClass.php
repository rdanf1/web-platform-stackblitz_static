<?php

function myEcho($param) {
    echo $param."\n";
}

myEcho("Sammy", "Bonjour");

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ("1st Msg");

myEcho($ListeMsgs->name());

?>