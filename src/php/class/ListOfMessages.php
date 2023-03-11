<?php

class ListOfMessages
{
    // properties:
    private $nbMsg ;        // No Empty List created (but when all messages are deleted...)
    private $owner = 'Adm'; // Actually s a beginning : 1 single list callled Adm-MessageList
    private $name ;         // <owner> . '-MessageList'  (+ Increment if one to many - TODO...)
    private $ficName ;      // <owner> . '-MessageList' . '.txt'
    private $htmName ;      // <owner> . '-MessageList' . '.html'

    // exposing properties methods
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
    public function __construct( $Msg , $Owner ) {
 
        $this->owner = $Owner ;
        // Calculated properties
        $this->name = $Owner . '-MessageList';
        $this->ficName = $this->name . '.txt';
        $this->htpName = $this->name . '.html';
        
        // simplifying further notations
        $owner = $this->owner;
        $name = $this->name;
        $fic = $this->ficName;
        $htm = $this->htpName;
        $msg = $Msg;

        // Implements :
        // A> Fic management - data persistence ( create / append + $Msg )
        //   1. File creation or open 'a' append mode
        $fic = $this->ficName;

        if(file_exists($fic)) {

        /* read only the first line of the file as we don't intend to have more */
          $file = fopen($fic, 'a');
          $data = "$Msg\n";
          file_put_contents($fic, $data . "\n", FILE_APPEND);
          fclose($file);

        } else {
        /* if file does not exist create it */
          file_put_contents($fic, "$Msg\n");        

        } else {
          return 'Something Wrong!';
}
        
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
        echo 'Number of the line of the message to be deleted : ' . $MsgNbr . '<br>';
        // Implements :
        // A> Fic management - data persistence ( create / append + $Msg )
        //   1. File creation or open 'a' append mode
        //   CODE HERE
        //   2. $Msg added in file $ficname
        //   CODE HERE
        //   3. Return an array of the file lines (1 line = 1 Msg)
        //   CODE HERE
    }
    
    // List (Store fic of Msg contents in Array)
    public function list () {
      echo 'In List func' . '<br>';
        // Implements :
        //   3. Return an array of the fic of Msg lines (1 line = 1 Msg) 
        //   CODE HERE

      return ArrayOfMsg;
    }

    // View function
    public function display () {
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
    public function remove () {
      $NameFic = $this->$name . txt

      echo 'removing ' . $this->$name . '<br>';
        // Implements : deletion of Fic and view (html file) of the list 
    }
  
}

?>
<!--
    $msgFile = 'msgFile.html';
    /* check if the like file exists*/
    if(file_exists($msgFile)) {
        /* read only the first line of the file as we don't intend to have more */
        $file = fopen($msgFile, 'a');
        $data = "<p style='font-size: 3rem;'> $Msg<br></p>";
        file_put_contents($msgFile, $data . "\n", FILE_APPEND);
        
        /* log */
        echo "<p style='font-size: 3rem;'>Message ajouté : <br><br>$Msg</p>";

        fclose($file);
    } else {
    /* if file does not exist create it for the first time with count 1 */
        file_put_contents($msgFile, "<head><meta charset='utf-8'></head>" . "\n");
        file_put_contents($msgFile, "<p style='font-size: 3rem; background: MediumSeaGreen'" . " class='bg-warning'" . "> Liste des Messages <br></p>" . "\n", FILE_APPEND);
        file_put_contents($msgFile, "<a href='/src/index.html'>Retour</a>" . "\n", FILE_APPEND);
        $data = "<p style='font-size: 3rem;'> $Msg<br></p>";
        file_put_contents($msgFile, $data . "\n", FILE_APPEND);
        /* log */
        echo "<p style='font-size: 3rem;'>Message ajouté : <br><br>$Msg</p>";
    }

