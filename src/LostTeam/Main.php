<?php
namespace LostTeam;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;	
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;
use LostTeam\events\JoinEvent;

class Main extends PluginBase implements Listener {
  
  public function onEnable() {
    $this->getCfg();
    $this->getServer()->getLogger()->notice(TF::GREEN."Enabled!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
   public function onCommand(CommandSender $sender, Command $command, $label, array $args)
  {

          if(strtolower($command) === "bot"){
            if($args[0] === "version") {

      

       }
            if($args[0] === disable){



       }
            if($args[0] === help){
        $sender->sendMessage(TextFormat::YELLOW."Help: /bot help");
        $sender->sendMessage(TextFormat::YELLOW."Version: /bot version");
        $sender->sendMessage(TextFormat::YELLOW."Exit: /bot disable");

       }


     }

   }

}
