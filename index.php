<?php
require_once 'core/define.php';
require_once 'config/system.config.php';
require_once 'core/system.core.php';
$config = new SystenConfig();
$db = new db();

Router::route(new Request);
