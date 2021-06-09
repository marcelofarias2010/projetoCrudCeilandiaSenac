<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// Set session variables
        $_SESSION["favcolor"] = "Verde";
        $_SESSION["favanimal"] = "Cavalo";
        echo "As variáveis de sessão são: ".$_SESSION['favcolor']. " e ".$_SESSION["favanimal"];
        ?>

    </body>
</html>
