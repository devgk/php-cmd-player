<?php

require_once '../vendor/cmd.core.php';

$command = "php ".dirname(__FILE__)."/write-current-time.php";

cmd_player::exec($command);