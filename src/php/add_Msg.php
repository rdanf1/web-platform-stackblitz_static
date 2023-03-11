<!-- We don't stay on this Page - 2s - Time to display if Msg was added successfully or not -->
<meta http-equiv="refresh" content="2;/src/php/msgFile.html">

<?php
  //
  // Same as add_note using ListOfMessages Class
  //

  // Only 1 Owner => 1 Msg List - "Adm-ListOfMsg"
  //    (User Accounts / Login => TODO Later)
  $owner = 'Adm';   // that's already defined : default owner in constructor 
                    
  if(isset($_POST['Msg']) && $_POST['Msg'] == true) {
    // The Message was validated in "note_form.php" 
    
    $Msg = $_POST['Msg'];
   
    // We're almost finished here ! 
    $MsgList = new ListOfMessages ($Msg, $owner);

    // This is it :
    $MsgList->Display ()

  } else {
    return 'Something Wrong!';



