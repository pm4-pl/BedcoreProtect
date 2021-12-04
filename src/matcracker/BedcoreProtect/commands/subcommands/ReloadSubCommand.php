<?php

/*
 *     ___         __                 ___           __          __
 *    / _ )___ ___/ /______  _______ / _ \_______  / /____ ____/ /_
 *   / _  / -_) _  / __/ _ \/ __/ -_) ___/ __/ _ \/ __/ -_) __/ __/
 *  /____/\__/\_,_/\__/\___/_/  \__/_/  /_/  \___/\__/\__/\__/\__/
 *
 * Copyright (C) 2019-2021
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author matcracker
 * @link https://www.github.com/matcracker/BedcoreProtect
 *
*/

declare(strict_types=1);

namespace matcracker\BedcoreProtect\commands\subcommands;

use dktapps\pmforms\BaseForm;
use matcracker\BedcoreProtect\Main;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

final class ReloadSubCommand extends SubCommand
{
    public function onExecute(CommandSender $sender, array $args): void
    {
        $this->getOwningPlugin()->reloadPlugin();
        $sender->sendMessage(Main::MESSAGE_PREFIX . $this->getLang()->translateString("subcommand.reload.success"));
    }

    public function getForm(Player $player): ?BaseForm
    {
        $player->chat("/bcp reload");
        return null;
    }

    public function getName(): string
    {
        return "reload";
    }
}
