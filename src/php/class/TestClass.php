<?php

public function Echo($txt) {
        echo $txt .  '<br>';
}

include 'ListOfMessages.php';

$ListeMsgs = new ListOfMessages ("1st Msg");

Echo($ListeMsgs->name());

?>