<?php

function myEcho($param) {
    echo $param . "<br>";
}

myEcho("Sammy");

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ('Mon 1er Message');

myEcho($ListeMsgs->name());

myEcho($ListeMsgs->owner());

$nb_msg = $ListeMsgs->nbMsg('toto');
myEcho($nb_msg);

$ListeMsgs->addMsg("Msg to add");

$nb_msg = $ListeMsgs->nbMsg();
myEcho($nb_msg);

$ListeMsgs->addMsg("3rd Msg added");

$nb_msg = $ListeMsgs->nbMsg();
myEcho($nb_msg);

$list = $ListeMsgs->listMsgs();
var_dump($list);


myEcho("deleting Messages N° : 3, 6, 9, 24");
$ListeMsgs->delMsg($ListeMsgs->owner(),3, 6, 9, 24);
myEcho("deleted Messages N° : 3, 6, 9, 24");

$list_after_del = $ListeMsgs->listMsgs();
var_dump($list);

$ListeMsgs->display("List-toDisplay");

$ListeMsgs->remove("List-toRemove");



?>