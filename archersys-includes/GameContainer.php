<?php
namespace Game2048\Containers;

require_once $_SERVER["DOCUMENT_ROOT"]."\includes\AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;
class GameContainer extends AbstractComponent{
 
function __construct(callable $onCreate){
    echo '<div class="game-container">';
    $onCreate();
    echo '</div>';

}


}