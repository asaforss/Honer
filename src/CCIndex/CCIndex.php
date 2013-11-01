<?php
/**
* Standard controller layout.
*
* @package HonerCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $hn;
      $hn->data['title'] = "The Index Controller";
      $hn->data['main'] = "<h1>The Index Controller</h1>";
   }

} 