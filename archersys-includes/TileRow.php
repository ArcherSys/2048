<?php 
namespace Game2048\GameBoard;
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;
class GridRow extends AbstractComponent{
public $tiles; 
   function __construct(){
     echo '<div class="grid-row">';
     $this->grid = array();
     $this->grids = 0;

}
function addGrid(Grid $grid){
   $this->grids += 1;
    $this->grid[$this->grids] = $grid;
}
function end(){
 $this->__destruct();
}
function __destruct(){
echo "</div>";

}
}
class Grid extends AbstractComponent{
      function __construct(){
       echo '<div class="grid-cell"></div>';
}
}
class GridContainer extends AbstractComponent{
   function __construct(){
       echo '<div class="grid-container">';
     
}

   function end(){
    $this->__destruct();
      }
function __destruct(){
echo '</div>';
}

}