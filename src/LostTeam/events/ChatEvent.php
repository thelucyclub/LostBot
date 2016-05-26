<?php

namespace LostTeam\events;

use LostTeam\Main;


use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\player\PlayerChatEvent;

class ChatEvent implements Listener {


public function onChat(PlayerChatEvent $event) {
      $msg = $event->getMessage();
      if($msg == "Hello"){
         $this->getServer()->broadcastMessage(TF:RED."LostBot".TF:WHITE." > Hello ".$event->getPlayer()->getName());
}




}
