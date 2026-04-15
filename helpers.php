<?php
function basePath(string$path = '') {
    return __DIR__ . '/' . $path;
}
/**
* load a Partial
* @param string $name
* @return void
* 
*/
function loadview($name) {
    require basePath('views/{$partials{$name}}.view.php');
    $partialPath = basePath('views/Partials/{$name}.view.php');
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} not found.";
    }
}
?>

