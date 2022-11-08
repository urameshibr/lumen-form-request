<?php

$filename = "session.php";

$source = __DIR__ . DIRECTORY_SEPARATOR
    . ".."
    . DIRECTORY_SEPARATOR
    . "config"
    . DIRECTORY_SEPARATOR
    . $filename;

$destination = __DIR__
    . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR
    . "config"
    . DIRECTORY_SEPARATOR
    . $filename;

if (!copy($source, $destination)) {
    echo "\n--------------------------------------------------------------------";
    echo "\n| Cannot copy the {$filename} config file, please, read the docs:   |";
    echo "\n| https://github.com/urameshibr/lumen-form-request                  |";
    echo "\n--------------------------------------------------------------------";
    echo "\n";
} else {
    echo "\n--------------------------------------------------------------------";
    echo "\n| Session config file addded to your project. (config/{$filename}) |";
    echo "\n--------------------------------------------------------------------";
    echo "\n";
}
