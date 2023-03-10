<?php

/*  $Msg = $_POST['Msg'];
  if (isset($Msg)) {
    echo "<p style='font-size: 2rem;'>$Msg<br></p>";
  } */

  if(isset($_POST['Msg']) && $_POST['Msg'] == true) {

    $msgFile = 'msgFile.html';
    /* check if the like file exists*/
    if(file_exists($msgFile)) {
        /* read only the first line of the file as we don't intend to have more */
        $file = fopen($msgFile, 'w');
        $data = "<p style='font-size: 2rem;'> $Msg<br></p>.PHP_EOL;";
        fwrite($file, $data);
        
        /* log */
        echo "<p style='font-size: 2rem;'>Written $Msg<br></p>";

        fclose($file);
    } else {
    /* if file does not exist create it for the first time with count 1 */
        file_put_contents($msgFile, "<p style='font-size: 2rem;'> NO MESSAGE<br>.PHP_EOL;");
        echo '1';
    }
} else {
    return 'Something Wrong!';
}