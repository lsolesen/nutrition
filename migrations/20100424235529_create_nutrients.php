#!/usr/bin/env php
<?php
require_once(dirname(__FILE__) . '/../config/global.inc.php');
$container = create_container();
$db = $container->get('pdo');
$db->exec('drop table if exists nutrients');
$db->exec('CREATE TABLE nutrients (
  id SERIAL,
  RefId varchar(255) NOT NULL,
  PubTypeId varchar(255) NOT NULL,
  AcqTypeId varchar(255) NOT NULL,
  Title varchar(255) NOT NULL,
  Authors varchar(255) NOT NULL,
  Publishr varchar(255) NOT NULL,
  PubDate varchar(255) NOT NULL,
  Version varchar(255) NOT NULL,
  OrigLang varchar(255) NOT NULL,
  Languages varchar(255) NOT NULL,
  ISBN varchar(255) NOT NULL,
  FstEdDat varchar(255) NOT NULL,
  EdNo varchar(255) NOT NULL,
  NoPages varchar(255) NOT NULL,
  BkTitle varchar(255) NOT NULL,
  Editors varchar(255) NOT NULL,
  Pages varchar(255) NOT NULL,
  LgJrName varchar(255) NOT NULL,
  AbJrName varchar(255) NOT NULL,
  ISSN varchar(255) NOT NULL,
  Volume varchar(255) NOT NULL,
  Issue varchar(255) NOT NULL,
  SeriName varchar(255) NOT NULL,
  SeriNo varchar(255) NOT NULL,
  RprtTitle varchar(255) NOT NULL,
  FileFrmt varchar(255) NOT NULL,
  WWW varchar(255) NOT NULL,
  Medium varchar(255) NOT NULL,
  OS varchar(255) NOT NULL,
  Media varchar(255) NOT NULL,
  Valid varchar(255) NOT NULL,
  Remarks varchar(255) NOT NULL,
  FoodId varchar(255) NOT NULL,
  DateUpdated varchar(255) NOT NULL,
  UpdatedBy varchar(255) NOT NULL,
  DocLink varchar(255) NOT NULL
)
');
