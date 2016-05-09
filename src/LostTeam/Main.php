<?php
namespace LostTeam;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;	
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener {
  
  public function onEnable() {
    $this->getCfg();
    $this->getServer()->getLogger()->notice(TF::GREEN."Enabled!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
}
