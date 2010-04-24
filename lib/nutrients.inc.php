<?php
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

class Nutrients extends pdoext_TableGateway {
  function __construct(pdoext_Connection $db) {
    parent::__construct('nutrients', $db);
  }
  function load($row = array()) {
    return new Nutrient($row);
  }
  function validate($nutrient) {
    // TODO: Make validations here
  }
  function validate_update($nutrient) {
    if (!$nutrient->id()) {
      $nutrient->errors[] = "Missing id";
    }
  }
}

class Nutrient {
  public $errors = array();
  function __construct($row = array('id' => null, 'RefId' => null, 'PubTypeId' => null, 'AcqTypeId' => null, 'Title' => null, 'Authors' => null, 'Publishr' => null, 'PubDate' => null, 'Version' => null, 'OrigLang' => null, 'Languages' => null, 'ISBN' => null, 'FstEdDat' => null, 'EdNo' => null, 'NoPages' => null, 'BkTitle' => null, 'Editors' => null, 'Pages' => null, 'LgJrName' => null, 'AbJrName' => null, 'ISSN' => null, 'Volume' => null, 'Issue' => null, 'SeriName' => null, 'SeriNo' => null, 'RprtTitle' => null, 'FileFrmt' => null, 'WWW' => null, 'Medium' => null, 'OS' => null, 'Media' => null, 'Valid' => null, 'Remarks' => null, 'FoodId' => null, 'DateUpdated' => null, 'UpdatedBy' => null, 'DocLink' => null)) {
    $this->row = $row;
  }
  function getArrayCopy() {
    return $this->row;
  }
  function display_name() {
    return "Nutrient#" . $this->id();
  }
  function id() {
    return $this->row['id'];
  }
  function RefId() {
    return $this->row['RefId'];
  }
  function PubTypeId() {
    return $this->row['PubTypeId'];
  }
  function AcqTypeId() {
    return $this->row['AcqTypeId'];
  }
  function Title() {
    return $this->row['Title'];
  }
  function Authors() {
    return $this->row['Authors'];
  }
  function Publishr() {
    return $this->row['Publishr'];
  }
  function PubDate() {
    return $this->row['PubDate'];
  }
  function Version() {
    return $this->row['Version'];
  }
  function OrigLang() {
    return $this->row['OrigLang'];
  }
  function Languages() {
    return $this->row['Languages'];
  }
  function ISBN() {
    return $this->row['ISBN'];
  }
  function FstEdDat() {
    return $this->row['FstEdDat'];
  }
  function EdNo() {
    return $this->row['EdNo'];
  }
  function NoPages() {
    return $this->row['NoPages'];
  }
  function BkTitle() {
    return $this->row['BkTitle'];
  }
  function Editors() {
    return $this->row['Editors'];
  }
  function Pages() {
    return $this->row['Pages'];
  }
  function LgJrName() {
    return $this->row['LgJrName'];
  }
  function AbJrName() {
    return $this->row['AbJrName'];
  }
  function ISSN() {
    return $this->row['ISSN'];
  }
  function Volume() {
    return $this->row['Volume'];
  }
  function Issue() {
    return $this->row['Issue'];
  }
  function SeriName() {
    return $this->row['SeriName'];
  }
  function SeriNo() {
    return $this->row['SeriNo'];
  }
  function RprtTitle() {
    return $this->row['RprtTitle'];
  }
  function FileFrmt() {
    return $this->row['FileFrmt'];
  }
  function WWW() {
    return $this->row['WWW'];
  }
  function Medium() {
    return $this->row['Medium'];
  }
  function OS() {
    return $this->row['OS'];
  }
  function Media() {
    return $this->row['Media'];
  }
  function Valid() {
    return $this->row['Valid'];
  }
  function Remarks() {
    return $this->row['Remarks'];
  }
  function FoodId() {
    return $this->row['FoodId'];
  }
  function DateUpdated() {
    return $this->row['DateUpdated'];
  }
  function UpdatedBy() {
    return $this->row['UpdatedBy'];
  }
  function DocLink() {
    return $this->row['DocLink'];
  }
}
