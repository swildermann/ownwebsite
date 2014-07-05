<html>
<?php
    @extract($_POST);
    $sub="Form feedback";
    $name = stripslashes($name);
    $email = stripslashes($email);
    mail('test@wildermann.berlin',$sub,"$name $email","From: $name <admin@your-domain.com>");
    echo stripslashes($name);
    ?> , we will drop you a line shortly.

</html>