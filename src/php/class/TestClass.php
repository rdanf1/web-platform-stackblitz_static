<?php

function myEcho($param) {
    echo $param . "<br>";
}

myEcho("Sammy");

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ('Mon 1er Message');

myEcho($ListeMsgs->name());

myEcho($ListeMsgs->owner());

myEcho($ListeMsgs->nbMsg());

$ListeMsgs->addMsg("Msg to add");

$ListeMsgs->delMsg(3);

$ListeMsgs->display("List-toDisplay");

$ListeMsgs->remove("List-toRemove");

?>