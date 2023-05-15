<?php

namespace SVega9848\VegaTouchPot;

use pocketmine\entity\effect\Effect;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\PotionType;
use pocketmine\item\SplashPotion;
use pocketmine\item\VanillaItems;
use pocketmine\block\VanillaBlocks;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Loader extends PluginBase implements Listener {

    public function onEnable(): void {
        Server::getInstance()->getPluginManager()->registerEvents($this, $this);
    }

    public function onInteract(PlayerInteractEvent $event) {
        $player = $event->getPlayer();
        $item = $player->getInventory()->getItemInHand();

        if($item instanceof SplashPotion) {
            $potion = null;
            switch ($item->getMeta()) {
                case 5:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::NIGHT_VISION());
                    break;
                case 6:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_NIGHT_VISION());
                    break;
                case 7:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::INVISIBILITY());
                    break;
                case 8:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_INVISIBILITY());
                    break;
                case 9:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LEAPING());
                    break;
                case 10:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_LEAPING());
                    break;
                case 11:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_LEAPING());
                    break;
                case 12:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::FIRE_RESISTANCE());
                    break;
                case 13:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_FIRE_RESISTANCE());
                    break;
                case 14:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::SWIFTNESS());
                    break;
                case 15:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_SWIFTNESS());
                    break;
                case 16:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_SWIFTNESS());
                    break;
                case 17:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::SLOWNESS());
                    break;
                case 18:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_SLOWNESS());
                    break;
                case 19:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::WATER_BREATHING());
                    break;
                case 20:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_WATER_BREATHING());
                    break;
                case 21:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::HEALING());
                    break;
                case 22:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_HEALING());
                    break;
                case 23:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::HARMING());
                    break;
                case 24:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_HARMING());
                    break;
                case 25:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::POISON());
                    break;
                case 26:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_POISON());
                    break;
                case 27:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_POISON());
                    break;
                case 28:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::REGENERATION());
                    break;
                case 29:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_REGENERATION());
                    break;
                case 30:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_REGENERATION());
                    break;
                case 31:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRENGTH());
                    break;
                case 32:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_STRENGTH());
                    break;
                case 33:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_STRENGTH());
                    break;
                case 34:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::WEAKNESS());
                    break;
                case 35:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_WEAKNESS());
                    break;
                case 36:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::WITHER());
                    break;
                case 37:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::TURTLE_MASTER());
                    break;
                case 38:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_TURTLE_MASTER());
                    break;
                case 39:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::STRONG_TURTLE_MASTER());
                    break;
                case 40:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::SLOW_FALLING());
                    break;
                case 41:
                    $potion = new \pocketmine\entity\projectile\SplashPotion($player->getLocation(), $player, PotionType::LONG_SLOW_FALLING());
                    break;
            }
            $pos = $player->getDirectionVector();
            $pos->y += 0.75;
            $potion->setMotion($pos->multiply(0.4));
            $player->getInventory()->setItemInHand(VanillaBlocks::AIR());
        }
    }

}
