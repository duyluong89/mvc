<?php
require_once 'core/define.php';
require_once 'config/system.config.php';
require_once 'core/db.php';
require_once 'core/entity.php';
require_once 'core/system.core.php';
require_once 'core/views.php';
$config = new SystenConfig();
$view = new views();
$db = new db();
$entity = new entity();

Router::route(new Request);
