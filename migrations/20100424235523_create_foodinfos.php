#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists foodinfos');
$db->exec('CREATE TABLE foodinfos (
  id SERIAL,
  FoodId varchar(255) NOT NULL,
  DanName varchar(255) NOT NULL,
  ProdName varchar(255) NOT NULL,
  EngName varchar(255) NOT NULL,
  SysName varchar(255) NOT NULL,
  MainGrp varchar(255) NOT NULL,
  SubGrp varchar(255) NOT NULL,
  Waste varchar(255) NOT NULL,
  NCF varchar(255) NOT NULL,
  FACF varchar(255) NOT NULL,
  PEF varchar(255) NOT NULL,
  FEF varchar(255) NOT NULL,
  CEF varchar(255) NOT NULL,
  Density varchar(255) NOT NULL,
  Remarks varchar(255) NOT NULL,
  PublStatus varchar(255) NOT NULL,
  LanguaL varchar(255) NOT NULL,
  GRIN varchar(255) NOT NULL,
  FISHBASE varchar(255) NOT NULL,
  BASIS varchar(255) NOT NULL,
  USDA varchar(255) NOT NULL,
  FIFood varchar(255) NOT NULL,
  UKFood varchar(255) NOT NULL,
  FRFood varchar(255) NOT NULL,
  DEFood varchar(255) NOT NULL,
  SEFood varchar(255) NOT NULL,
  NOFood varchar(255) NOT NULL,
  NLFood varchar(255) NOT NULL,
  ISFood varchar(255) NOT NULL,
  SPFood varchar(255) NOT NULL,
  ITFood varchar(255) NOT NULL,
  DateUpdated varchar(255) NOT NULL,
  UpdatedBy varchar(255) NOT NULL,
  Recipe varchar(255) NOT NULL,
  WaterYield varchar(255) NOT NULL,
  FatYield varchar(255) NOT NULL
)
');
