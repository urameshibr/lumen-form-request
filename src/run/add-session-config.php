<?php


$filename = "session.php";

$projectConfigDir = __DIR__
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR . ".."
    . DIRECTORY_SEPARATOR
    . "config";

$packageConfigDir = __DIR__
    . DIRECTORY_SEPARATOR
    . ".."
    . DIRECTORY_SEPARATOR
    . "config";

$source = $packageConfigDir
    . DIRECTORY_SEPARATOR
    . $filename;

$destination = $projectConfigDir
    . DIRECTORY_SEPARATOR
    . $filename;

$projectHasConfigDir = is_dir($projectConfigDir);

if (!$projectHasConfigDir) {
    echo "\n--------------------------------------------------------------------";
    echo "\n| Creating 'config' directory in project...                        |";
    echo "\n--------------------------------------------------------------------";
    mkdir($projectConfigDir);
}

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
