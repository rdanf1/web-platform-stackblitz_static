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
        $this->name = $this->ficname;
        
        echo 'In ListOfMessages construct' . '\n';
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
    public function addMsg( $Msg = 'Mon 1er Message') {
        echo 'In addMsg' . '\n';
        echo $Msg;
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
    public function delMsg( int $MsgNbr = $this->numberOfMsg ) {
        echo 'In delMsg func';
        echo 'Number of the line of the message to be deleted' . $MsgNbr;
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
      echo 'In displayList func';
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
      echo 'removing ' . $name;
        // Implements : Fic and view deletion of the list 
    }
  
}

?>