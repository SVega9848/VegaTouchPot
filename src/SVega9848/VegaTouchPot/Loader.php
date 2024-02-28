<?php

namespace SVega9848\VegaTouchPot;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\PotionType;
use pocketmine\item\SplashPotion;
use pocketmine\item\VanillaItems;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Loader extends PluginBase implements Listener {

    public function onEnable(): void {
        Server::getInstance()->getPluginManager()->registerEvents($this, $this);
    }

    public function onInteract(PlayerInteractEvent $event): void
    {
        $player = $event->getPlayer();
        $item = $player->getInventory()->getItemInHand();

        if($item instanceof SplashPotion) {
            $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, $item->getType());
            $pos = $player->getDirectionVector();
            $pos->y += 0.75;
            $potion->setMotion($pos->multiply(0.4));
            $player->getInventory()->setItemInHand(VanillaItems::AIR());
        }
    }

}