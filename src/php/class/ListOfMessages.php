<?php

class ListOfMessages
{
    // properties
    private $numberOfMsg = '0';
    private $listMsgOwner = 'Adm';
    private $ficname = $this->listMsgOwner . "-MessageList";

    // properties methods
    public function displayNbMsg() {
        echo $this->numberOfMsg;
    }

    public function displayOwner() {
        echo $this->listMsgOwner;
    }

    // construct
    public function __construct( var $Msg = 'Mon 1er Message' ) {
        echo 'In ListOfMessages construct' . '\n'
        echo $Msg;
        //
        // Implements :
        // A> Fic management - data persistence ( create / append + $Msg )
        //   1. File creation or open 'a' append mode
        //   CODE HERE
        //   2. $Msg added in file $ficname
        //   CODE HERE
        //   3. Return an array of the file lines (1 line = 1 Msg)
        //   CODE HERE
    }    
    // Add Msg
    public function add( var $Msg = 'Mon 1er Message') {
        echo 'In ListOfMessages construct' . '\n'
        echo $Msg;
        //
        // Implements :
        // A> Fic management - data persistence ( create / append + $Msg )
        //   1. File creation or open 'a' append mode
        //   CODE HERE
        //   2. $Msg added in file $ficname
        //   CODE HERE
        //   3. Return an array of the file lines (1 line = 1 Msg)
        //   CODE HERE
    }  
     // Delete Msg
    public function del( int $MsgNbr = $this->numberOfMsg ) {
        echo 'In Delete Msg func'
        echo $MsgNbr;
        //
        // Implements :
        // A> Fic management - data persistence ( create / append + $Msg )
        //   1. File creation or open 'a' append mode
        //   CODE HERE
        //   2. $Msg added in file $ficname
        //   CODE HERE
        //   3. Return an array of the file lines (1 line = 1 Msg)
        //   CODE HERE
    }    
    // View function
    public function displayListOfMessages ( var $textListMsg[] ) {
        //
        // Implements :
        // B> Create HTML View (an HTML file)
        //   1. Header of a List of Messages (fixed .head file ?)
        //   CODE HERE
        //   2. Encapsulate Fic line (only text) in HTML/CSS line
        //   CODE HERE
        //   3. Add footer of List of Message Page (fixed .foot file ?)
        //   CODE HERE
        //
       
    }
  
}

?>