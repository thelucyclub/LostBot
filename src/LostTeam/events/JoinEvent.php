<?php
namespace LostTeam\events;

use LostTeam\Main;

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\player\PlayerJoimEvent;

class JoinEvent implements Listener {
    public $plugin;
    public function __construct(Main $plugin) {
        $this->plugin = $plugin
    }
    public function onJoin(PlayerJoinEvent $event){
        $this->getServer()->broadcastMessage("Welcome ".$event->getPlayer()->getName()."!");
    }
}
