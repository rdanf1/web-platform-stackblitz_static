<html>
 <head>
  <title>Saisie du message</title>
 </head>
 <body style="font-size: 8rem;"> 
    <!--APRES LES TESTS-->
    <form action="/src/php/add_note.php" method="POST">
    <!--<form action="./page3.php" method="POST">-->
      <input type="text" id="Msg" name="Msg" placeholder="Taper le message ici" 
            style="font-size: 3rem;"/>
      <input type="submit" name="validate_Msg" id="validate_Msg" value="Valider"
            style="font-size: 3rem;"/>
    </form>

 </body>
</html>