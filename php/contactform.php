<?php

    $name = $_POST['name'];
    $to = $_POST['email'];
    $message = $_POST['message'];

   // $to = "teferae01@mail.buffalostate.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from" ;//.$name.",\n\n".$message;
    
    mail($to, "hey", $txt );
   // header("Location: index.html?mailsend");

    echo "thanks";


?>