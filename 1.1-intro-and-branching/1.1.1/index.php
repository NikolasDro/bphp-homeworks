<?php
$variable = [];
if(is_bool($variable)) {
    echo 'bool';
} elseif(is_float($variable)) {
    echo 'float';
} elseif(is_int($variable)) {
    echo 'int';
} elseif(is_string($variable)) {
    echo 'string';
} elseif(is_null($variable)) {
    echo 'null';
} else {
    echo 'other';
};
?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>bPHP - 1.1.1</title>
    </head>
    <body>
        <p><?=$variable?></p>
    </body>
</html>