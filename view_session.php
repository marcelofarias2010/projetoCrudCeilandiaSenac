<?php

session_start();

echo "meu animal favorito é ".$_SESSION['favanimal'];
echo "<br>";
echo "minha cor favorita é ".$_SESSION['favcolor'];
