<?php
namespace Services\Layout;

use Jenssegers\Blade\Blade;

class Layout {
    public static function render($layout,$parameters=[]){

    $blade = new Blade(__DIR__."/../../views",__DIR__."/../../cache");
    echo $blade->make($layout,$parameters)->render();
   }

   public static function rendergir($view,$parameters = [])
   {
       $blade = new Blade(__DIR__."/../../views",__DIR__."/../../cache");
       echo $blade ->make($view,$parameters)->render();
   }
}
