<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "teferae01@mail.buffalostate.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from" .$name.".\n\n".$message;
    
    mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>