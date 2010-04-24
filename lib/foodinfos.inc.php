<?php
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

class Foodinfos extends pdoext_TableGateway {
  function __construct(pdoext_Connection $db) {
    parent::__construct('foodinfos', $db);
  }
  function load($row = array()) {
    return new Foodinfo($row);
  }
  function validate($foodinfo) {
    // TODO: Make validations here
  }
  function validate_update($foodinfo) {
    if (!$foodinfo->id()) {
      $foodinfo->errors[] = "Missing id";
    }
  }
}

class Foodinfo {
  public $errors = array();
  function __construct($row = array('id' => null, 'FoodId' => null, 'DanName' => null, 'ProdName' => null, 'EngName' => null, 'SysName' => null, 'MainGrp' => null, 'SubGrp' => null, 'Waste' => null, 'NCF' => null, 'FACF' => null, 'PEF' => null, 'FEF' => null, 'CEF' => null, 'Density' => null, 'Remarks' => null, 'PublStatus' => null, 'LanguaL' => null, 'GRIN' => null, 'FISHBASE' => null, 'BASIS' => null, 'USDA' => null, 'FIFood' => null, 'UKFood' => null, 'FRFood' => null, 'DEFood' => null, 'SEFood' => null, 'NOFood' => null, 'NLFood' => null, 'ISFood' => null, 'SPFood' => null, 'ITFood' => null, 'DateUpdated' => null, 'UpdatedBy' => null, 'Recipe' => null, 'WaterYield' => null, 'FatYield' => null)) {
    $this->row = $row;
  }
  function getArrayCopy() {
    return $this->row;
  }
  function display_name() {
    return "Foodinfo#" . $this->id();
  }
  function id() {
    return $this->row['id'];
  }
  function FoodId() {
    return $this->row['FoodId'];
  }
  function DanName() {
    return $this->row['DanName'];
  }
  function ProdName() {
    return $this->row['ProdName'];
  }
  function EngName() {
    return $this->row['EngName'];
  }
  function SysName() {
    return $this->row['SysName'];
  }
  function MainGrp() {
    return $this->row['MainGrp'];
  }
  function SubGrp() {
    return $this->row['SubGrp'];
  }
  function Waste() {
    return $this->row['Waste'];
  }
  function NCF() {
    return $this->row['NCF'];
  }
  function FACF() {
    return $this->row['FACF'];
  }
  function PEF() {
    return $this->row['PEF'];
  }
  function FEF() {
    return $this->row['FEF'];
  }
  function CEF() {
    return $this->row['CEF'];
  }
  function Density() {
    return $this->row['Density'];
  }
  function Remarks() {
    return $this->row['Remarks'];
  }
  function PublStatus() {
    return $this->row['PublStatus'];
  }
  function LanguaL() {
    return $this->row['LanguaL'];
  }
  function GRIN() {
    return $this->row['GRIN'];
  }
  function FISHBASE() {
    return $this->row['FISHBASE'];
  }
  function BASIS() {
    return $this->row['BASIS'];
  }
  function USDA() {
    return $this->row['USDA'];
  }
  function FIFood() {
    return $this->row['FIFood'];
  }
  function UKFood() {
    return $this->row['UKFood'];
  }
  function FRFood() {
    return $this->row['FRFood'];
  }
  function DEFood() {
    return $this->row['DEFood'];
  }
  function SEFood() {
    return $this->row['SEFood'];
  }
  function NOFood() {
    return $this->row['NOFood'];
  }
  function NLFood() {
    return $this->row['NLFood'];
  }
  function ISFood() {
    return $this->row['ISFood'];
  }
  function SPFood() {
    return $this->row['SPFood'];
  }
  function ITFood() {
    return $this->row['ITFood'];
  }
  function DateUpdated() {
    return $this->row['DateUpdated'];
  }
  function UpdatedBy() {
    return $this->row['UpdatedBy'];
  }
  function Recipe() {
    return $this->row['Recipe'];
  }
  function WaterYield() {
    return $this->row['WaterYield'];
  }
  function FatYield() {
    return $this->row['FatYield'];
  }
}
