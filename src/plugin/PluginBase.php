<?php

/*
 *
 *  ____            _        _    ____
 * |  _ \ ___   ___| | _____| |_ / ___|___  _ __ ___
 * | |_) / _ \ / __| |/ / _ \ __| |   / _ \| '__/ _ \
 * |  __/ (_) | (__|   <  __/ |_| |__| (_) | | |  __/
 * |_|   \___/ \___|_|\_\___|\__|\____\___/|_|  \___|

 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author flyxdev
 *
 *
*/

namespace core\plugin;

use core\utils\Logger;
use core\api\TelegramApi;

abstract class PluginBase implements Plugin
{
    public TelegramApi $api;
    public Logger $logger;

    public function __construct(TelegramApi $api, Logger $logger)
    {
        $this->api = $api;
        $this->logger = $logger;
    }

    public function getLogger()
    {
        return $this->logger;
    }

    public function getApi()
    {
        return $this->api;
    }
}
