<?php
// function basePath($path = '') {
//     return __DIR__ . '/' . $path;
// }
// /**
// * load a Partial
// * @param string $name
// * @return void
// * 
// */
// function loadview($name) {
//     require basePath("view/{$Partial[$name]}.view.php");
//     $partialPath = basePath("view/Partials/{$name}.php");
//     if (file_exists($partialPath)) {
//         require $partialPath;
//     } else {
//         echo "Partials {$name} not found.";
//     }
// }

// function basepath(string $path = '') {
//     return __DIR__ . '/' . $path;
//   }

//   /**
//    * loadview function to load views
//    * @param mixed $name
//    * @return void
//    */
//   function loadview($name) {
//     require basepath('view/' . $name . '.view.php');
//   }
//   /**
//    * loadpartial function to load partials
//    * @param mixed $name
//    * @return void
//    */
//   function loadPartials($name) {
//     $partialPath = basepath('view/Partials/' . $name . '.php');
//     if (file_exists($partialPath)) {
//       require $partialPath;
//     } else {
//       echo "Partial not found: " . $name;
//     }
//   }

function basePath($path = '') {
    return __DIR__ . '/' . $path;
}

/**
 * load a view
 * @param string $name
 * @return void
 */

function loadview($name) 
{
    $viewPath = basePath("view/{$name}.view.php");


    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View not found: " . $name;
    }
}

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
?>

