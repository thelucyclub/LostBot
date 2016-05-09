<?php
namespace LostTeam;

use LostTeam\events\JoinEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;	
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener {
  public function onEnable() {
    $this->getServer()->getLogger()->notice(TF::GREEN."Enabled!");
    $this->getServer()->getPluginManager()->registerEvents(new JoinEvent($this), $this);
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
    if(strtolower($command) === "bot") {
      if($args[0] === "version") {
        $sender->sendMessage(TF::AQUA."LostBot:".TF::GREEN." Im running on 1.0.0 LostTeams chip.");
      }
      if($args[0] === "disable") {
        $sender->sendMessage(TF::AQUA."LostBot:".TF::RED." Disabled.");
        $this->getPluginManager()->disablePlugin($this)
      }
      if($args[0] === "help") {
        $sender->sendMessage(TF::YELLOW."LostBot: /bot help");
        $sender->sendMessage(TF::YELLOW."LostBot: /bot version");
        $sender->sendMessage(TF::YELLOW."LostBot: /bot disable");
      }
    }
    public function onDisable() {
      $this->getServer()->getLogger()->notice(TF::GREEN."Disabled!");
    }
  }
}
