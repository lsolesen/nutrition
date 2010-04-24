<?php
require_once 'pdoext.inc.php';
require_once 'pdoext/connection.inc.php';
require_once 'pdoext/query.inc.php';
require_once 'pdoext/tablegateway.php';

class Sources extends pdoext_TableGateway {
  function __construct(pdoext_Connection $db) {
    parent::__construct('sources', $db);
  }
  function load($row = array()) {
    return new Source($row);
  }
  function validate($source) {
    // TODO: Make validations here
  }
  function validate_update($source) {
    if (!$source->id()) {
      $source->errors[] = "Missing id";
    }
  }
}

class Source {
  public $errors = array();
  function __construct($row = array('id' => null, 'SourceRefId' => null, 'SourceID' => null, 'RefId' => null)) {
    $this->row = $row;
  }
  function getArrayCopy() {
    return $this->row;
  }
  function display_name() {
    return "Source#" . $this->id();
  }
  function id() {
    return $this->row['id'];
  }
  function SourceRefId() {
    return $this->row['SourceRefId'];
  }
  function SourceID() {
    return $this->row['SourceID'];
  }
  function RefId() {
    return $this->row['RefId'];
  }
}
