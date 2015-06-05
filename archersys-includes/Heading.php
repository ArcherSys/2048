<?php
namespace Game2048\Info;
require_once "archersys-includes\GameMessage.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;
class Heading extends AbstractComponent{
function __construct(){
   echo '<div class="heading">';
}
function addTitle(){
'<h1 class="title">'.$title.'</h1>';
}
function addScoreContainer(){
 echo '<div class="scores-container">';
        echo '<div class="score-container">0</div>';
        echo '<div class="best-container">0</div>';
      echo '</div>';
}
     
function end(){
 $this->__destruct();
} 
  
function __destruct(){
 echo '</div>';
}
}    
    


class AboveGame extends AbstractComponent{
function __construct(){
echo '<div class="above-game">';
      }
      function addIntro($intro){
 echo '<p class="game-intro">'.$intro.'</p>';
}
function addRestartButton($restart){
      echo '<a class="restart-button">'.$restart.'</a>';
    echo '</div>';
}
}