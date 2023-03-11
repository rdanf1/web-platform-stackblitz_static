<?php

function cho($param) {
    echo $param."\n";
}

cho("Sammy", "Bonjour");

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ("1st Msg");

cho($ListeMsgs->name());

?>