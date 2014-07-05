<html>
<?php
    @extract($_POST)
    $text = stripslashes($text);
    $receiver = stripslashes($receiver);
    mail("$receiver","","","");

    ?> , Deine Mail wurde versandt.

</html>