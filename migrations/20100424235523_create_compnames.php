#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists compnames');
$db->exec('CREATE TABLE compnames (
  id SERIAL,
  CompId varchar(255) NOT NULL,
  SrtOrd varchar(255) NOT NULL,
  Unit varchar(255) NOT NULL,
  CmpNamDK varchar(255) NOT NULL,
  CmpNamEN varchar(255) NOT NULL,
  PublStatus varchar(255) NOT NULL,
  eurofoodsTag varchar(255) NOT NULL
)
');
