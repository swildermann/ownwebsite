<html>
<?php
    @extract($_POST);
    $text = stripslashes($text);
    $sub = stripslashes($sub);
    $text = stripslashes($text);
    $receiver = stripslashes($receiver);
    mail("$receiver","$sub","$text"," From: anonym");
    ?> , Deine Mail wurde versandt.

</html>