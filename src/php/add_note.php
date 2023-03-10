<?php

  $Msg = $_POST['Msg'];
  if (isset($Msg)) {
    echo "<p style='font-size: 2rem;'>$Msg</p>";
  }