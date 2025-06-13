<?php
/*
 * 
 * 
 * @author: ranjan
 * @version: 1.0.0
 * @package: app\core
 * @subpackage: router
 * @copyright: 2025 ranjan
 * @license: MIT
 * @link: https://github.com/webx34
 */
namespace app\core;
class Router {
   protected  array  $routes =[];
   public function get($path,$callback){
$this->routes[$path] = $callback;
   }

   public function resolve(){
    
   }
}
?>
