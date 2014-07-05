<html>
<?php
    @extract($_POST);
    $sub="Form feedback";
    $name = stripslashes($name);
    $email = stripslashes($email);
    mail('test@wildermann.berlin',$sub,"$name $email","From: Gewissen laura.dietz@facebook.com");
    echo stripslashes($name);
    ?> , we will drop you a line shortly.

</html>