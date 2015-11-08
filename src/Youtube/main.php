<?php

namespace Youtube;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;

class main extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info(Color::GREEN."[Youtube] Enabled");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        if($sender instanceof Player) {
            $name = $sender->getName();
            if(strtolower($command->getName()) == 'Youtube') {
                if(count($args) <= 1) {
                    $sender->sendMessage(Color::GOLD."[Youtube] Hello! $name");
                    return;
                }  else {
                    $sender->sendMessage(Color::GOLD."[Youtube] this is comand requires no testes");
                    return;
                }
            }
        }
        $sender->sendMessage(Color::RED."[Youtube] Hello Player!");
        return;
    }
}
