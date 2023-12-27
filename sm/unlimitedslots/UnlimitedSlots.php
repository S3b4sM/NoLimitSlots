<?php

declare(strict_types=1);

namespace suky\unlimitedslots;

use pocketmine\plugin\PluginBase;

class UnlimitedSlots extends PluginBase
{
    
    protected function onEnable(): void
    {
        // Register handler
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }
}
