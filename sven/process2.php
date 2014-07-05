<html>
<?php
    @extract($_POST);
    $text = stripslashes($text);
    $sub = stripslashes($sub);
    $sender = stripslashes($sender);
    $name = stripslashes($name);
    $receiver = stripslashes($receiver);
    mail("$receiver","$sub","$text","From: anonym <anonym@anonym.com>);
    ?> , Deine Mail wurde versandt.

</html>