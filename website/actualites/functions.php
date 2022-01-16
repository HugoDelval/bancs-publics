<?php

function getActualites () {
    $files = scandir(realpath(__DIR__));
    rsort($files);
    return array_filter($files, function($fileName) {
        if (str_starts_with($fileName, 'actu-')) {
            return $fileName;
        }
    });
}
?>
