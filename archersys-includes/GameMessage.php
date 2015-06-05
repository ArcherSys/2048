<?php
namespace Game2048\Info;
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;
class GameMessage extends AbstractComponent{

  function __construct(){
    echo '<div class="game-message">';
    echo '<p></p>';
    
  }
 function addButtons(KeepPlayingButton $kpbutton, RetryButton $retry){
echo '<div class="lower">';
	   echo $kpbutton;
          echo $retry;
        echo '</div>';
      

}
function end(){
$this->__destruct();
}
   
function __destruct(){
echo '</div>';
}
        
        
}
class KeepPlayingButton extends AbstractComponent{
    
 function __construct($message){

    $this->message = $message;
}
     function __toString(){
return '<a class="keep-playing-button">'.$this->message.'</a>';

}
}
class RetryButton extends AbstractComponent {
    function __construct($message){
   $this->message = $message;
}
    function __toString(){
return '<a class="retry-button">'.$this->message.'</a>';
}
}

