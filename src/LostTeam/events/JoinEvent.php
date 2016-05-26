<?php
namespace LostTeam\events;

use LostTeam\Main;

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\player\PlayerJoinEvent;

class JoinEvent implements Listener {
    public $plugin;
    public function __construct(Main $plugin) {
        $this->plugin = $plugin
    }
    public function onJoin(PlayerJoinEvent $event){
        $this->getServer()->broadcastMessage(TF::RED."LostBot".TF::WHITE." > Welcome ".$event->getPlayer()->getName()."!");
    }
}
