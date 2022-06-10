<?php

ob_start();
echo 'Hello';
echo 'World';

$variable = ob_get_clean();

var_dump($variable);

?>