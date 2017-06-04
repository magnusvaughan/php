<?php
require_once __DIR__ . '/lib/Model/Monster.php';
//require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/MonsterLoader.php';
//require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';

$configuration = array(
    'db_dsn' => 'mysql:host=localhost;dbname=php_horror_trumps',
    'db_user' => 'admin',
    'db_pass' => 'admin'
);