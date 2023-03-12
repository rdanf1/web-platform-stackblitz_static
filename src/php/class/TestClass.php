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

myEcho($ListeMsgs->nbMsg());

$ListeMsgs->addMsg("3rd Msg added");

myEcho($ListeMsgs->nbMsg());

$list = $ListeMsgs->listMsgs()

$ListeMsgs->delMsg(3);

$ListeMsgs->display("List-toDisplay");

$ListeMsgs->remove("List-toRemove");

vardump($list);

?>