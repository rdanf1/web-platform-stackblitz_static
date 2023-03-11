<?php

function hello($name, $greeting = "Hello") {
    echo $greeting." ".$name;
}

hello("Sammy", "Bonjour");

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ("1st Msg");

Echo($ListeMsgs->name());

?>