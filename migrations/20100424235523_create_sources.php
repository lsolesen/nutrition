#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists sources');
$db->exec('CREATE TABLE sources (
  id SERIAL,
  SourceRefId varchar(255) NOT NULL,
  SourceID varchar(255) NOT NULL,
  RefId varchar(255) NOT NULL
)
');
