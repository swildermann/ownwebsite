<html>
<?php
    @extract($_POST);
    $sub= stripslashes($sub);
    $name = stripslashes($name);
    $sender = stripslashes(§sender);
    $receiver = stripslashes(§receiver);
    $text = stripslashes($text);
    mail('test@wildermann.berlin',"$sub","$text","From: $name <$sender>);
    echo stripslashes($name);
    ?> , Deine Mail wurde versandt.

</html>