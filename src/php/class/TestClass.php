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
$ListeMsgs->addMsg("4th Msg added");

$nb_msg = $ListeMsgs->nbMsg();
myEcho($nb_msg);

$list = $ListeMsgs->listMsgs();
var_dump($list);

$linesToDelete = [];
for ($i = 1; $i <= 2; $i++) {
    array_push($linesToDelete, $i);
}
$listToDel = list(4,6,8);
$ListeMsgs->delMsg($ListeMsgs->Owner(), $listToDel);
$ListeMsgs->delMsg($ListeMsgs->Owner(), $linesToDelete);
myEcho("deleted Messages N° : 3, 6, 9, 24");

$list_after_del = $ListeMsgs->listMsgs();
var_dump($list_after_del);

$ListeMsgs->display("List-toDisplay");

$ListeMsgs->remove("List-toRemove");



?>