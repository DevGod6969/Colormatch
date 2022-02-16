<?php

namespace ColorMatch\Events;

use pocketmine\event\plugin\PluginEvent;
use ColorMatch\ColorMatch;
use ColorMatch\Arena\Arena;
use pocketmine\event\Cancellable;
use pocketmine\event\CancellableTrait;

class ArenaColorChangeEvent extends PluginEvent implements Cancellable {
    protected $arena;
    protected $oldColor;
    protected $newColor;

    use CancellableTrait;

    public static $handlerList = null;
    
    public function __construct(ColorMatch $plugin, Arena $arena, $oldColor, $newColor) {
        parent::__construct($plugin);
        $this->arena = $arena;
        $this->newColor = $newColor;
        $this->oldColor = $oldColor;
    }
    
    
    public function getArena() {
        return $this->arena;
    }
    
    public function getArenaName() {
        return $this->arena->id;
    }
    
    public function getNewColor() {
        return $this->newColor;
    }
    
    public function getOldColor() {
        return $this->oldColor;
    }
    //color is 0-15
    public function setNewColor($color) {
        $this->newColor = $color;
    }
}
