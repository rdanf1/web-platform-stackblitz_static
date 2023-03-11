<?php

function Echo($param) {
    echo $param."\n";
}

Echo("Sammy", "Bonjour");

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ("1st Msg");

Echo($ListeMsgs->name());

?>