<?php

function echo($param) {
    echo $param."\n";
}

echo("Sammy", "Bonjour");

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ("1st Msg");

echo($ListeMsgs->name());

?>