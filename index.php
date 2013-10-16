<?php
require_once 'core/define.php';
require_once 'config/system.config.php';

require_once 'core/system.core.php';
require_once 'core/views.php';
$config = new SystenConfig();
$view = new views();

Router::route(new Request);
