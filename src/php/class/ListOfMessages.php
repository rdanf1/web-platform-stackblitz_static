<?php

class ListOfMessages
{
    // properties
    private $nbMsg = '0';
    private $owner = 'Adm';
    private $ficName ;
    private $name ; 

    // properties methods
    public function nbMsg() {
        echo $this->nbMsg;
    }

    public function owner() {
        echo $this->owner;
    }

    public function name() {
        echo $this->name;
    }

    // construct
    public function __construct( $Msg = 'Mon 1er Message' ) {
        // Calculated properties
        $this->ficName = $this->owner . '-MessageList';
        $this->name = $this->ficName;
        
        echo 'In ListOfMessages construct' . '<br>';
        echo $Msg . '<br>';
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
    public function addMsg( $Msg = 'Mon 1er Message') {
        echo 'In addMsg' . '<br>';
        echo $Msg . '<br>';
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
    public function delMsg( $MsgNbr ) {  //  = $this->nbMsg
        echo 'In delMsg func' . '<br>';
        echo 'Number of the line of the message to be deleted : ' . $MsgNbr' . '<br>';
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
    public function display ( $textListMsg ) {
      echo 'In displayList func' . '<br>';
        // Implements :
        // B> Create HTML View (an HTML file) - if not already exists 
        //   1. Header of a List of Messages (fixed .head file ?)
        //   CODE HERE
        //   2. Encapsulate Fic line (only text) in HTML/CSS line
        //   CODE HERE
        //   3. Add footer of List of Message Page (fixed .foot file ?)
        //   CODE HERE
    }
    public function remove ( $name ) {
      echo 'removing ' . $name . '<br>';
        // Implements : Fic and view deletion of the list 
    }
  
}

?>