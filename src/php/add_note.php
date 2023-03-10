<?php

  /*
  if (isset($Msg)) {
    echo "<p style='font-size: 2rem;'>$Msg<br></p>";
  } */

  if(isset($_POST['Msg']) && $_POST['Msg'] == true) {
    
    $Msg = $_POST['Msg'];

    $msgFile = 'msgFile.html';
    /* check if the like file exists*/
    if(file_exists($msgFile)) {
        /* read only the first line of the file as we don't intend to have more */
        $file = fopen($msgFile, 'a');
        $data = "<p style='font-size: 2rem;'> $Msg<br></p>";
        file_put_contents($msgFile, $data . "\n", FILE_APPEND);
        
        /* log */
        echo "<p style='font-size: 2rem;'>Written $Msg<br></p>";

        fclose($file);
    } else {
    /* if file does not exist create it for the first time with count 1 */
        file_put_contents($msgFile, "<p style='font-size: 2rem; class=bg-warning> Liste des Messages<br>'");
        $data = "<p style='font-size: 2rem;'> $Msg<br></p>";
        file_put_contents($msgFile, $data . "\n", FILE_APPEND);
    }
} else {
    return 'Something Wrong!';
}