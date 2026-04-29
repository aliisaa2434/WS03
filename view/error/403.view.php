<?php 
if (!function_exists('loadPartials')){
  function loadPartials($Partial){
    $path = __DIR__ . '/Partials/' . $Partial . '.php';
    if (file_exists($path)) {
      require $path;
    }
  }
}


loadPartials ('head');
loadPartials ('topbanner');
loadPartials ('footer');
?>

<section>
      <div class="container mx-auto p-4 mt-4">
         <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">403 Error</div>
         <p class="text-center text-2xl mb-4">
            You are not authorized to access this page
         </p>
      </div>
</section>