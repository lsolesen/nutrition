<?php
require_once 'groupnames.inc.php';

class components_groupnames_List extends k_Component {
  protected $templates;
  protected $groupnames;
  protected $groupname;
  protected $url_init = array('sort' => 'id', 'direction' => 'asc', 'page' => 1);
  function __construct(k_TemplateFactory $templates, Groupnames $groupnames) {
    $this->templates = $templates;
    $this->groupnames = $groupnames;
  }
  function map($name) {
    return 'components_groupnames_Entry';
  }
  function renderHtml() {
    $this->document->setTitle("Groupnames");
    $t = $this->templates->create('groupnames/list');
    return $t->render(
      $this,
      array(
        'groupnames' => $this->groupnames));
  }
  function wrapHtml($content) {
    $t = $this->templates->create('groupnames/wrapper');
    return $t->render(
      $this,
      array(
        'groupnames' => $this->groupnames,
        'content' => $content));
  }
  function renderHtmlNew() {
    if (!$this->groupname) {
      $this->groupname = new Groupname();
    }
    $this->document->setTitle("New groupname");
    $t = $this->templates->create('groupnames/new');
    return $this->wrapHtml($t->render($this, array('groupname' => $this->groupname)));
  }
  function postForm() {
    if ($this->processNew()) {
      return new k_SeeOther($this->url($this->groupname->id()));
    }
    return $this->render();
  }
  function processNew() {
    $this->groupname = new Groupname(
      array(
        'MainGrp' => $this->body('MainGrp'),
        'NameDK' => $this->body('NameDK'),
        'NameEn' => $this->body('NameEn')));
    return $this->groupnames->insert($this->groupname);
  }
}
