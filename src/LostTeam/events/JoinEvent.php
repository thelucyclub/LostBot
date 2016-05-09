<?php
namespace LostTeam\events;

use LostTeam\Main;

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\player\PlayerChatEvent;

class JoinEvent implements Listener {
    public $plugin;
    public function __construct(Main $plugin) {
        $this->plugin = $plugin
    }
    public function onChat(PlayerChatEvent $event){
        $message = $this->getMessage();
        if($message == "Hello" or "Hi") {
            //
        }
    }
}
