<?php
require_once 'mets.inc.php';

class components_mets_List extends k_Component {
  protected $templates;
  protected $mets;
  protected $met;
  protected $url_init = array('sort' => 'id', 'direction' => 'asc', 'page' => 1);
  function __construct(k_TemplateFactory $templates, Mets $mets) {
    $this->templates = $templates;
    $this->mets = $mets;
  }
  function map($name) {
    return 'components_mets_Entry';
  }
  function renderHtml() {
    $this->document->setTitle("Mets");
    $t = $this->templates->create('mets/list');
    return $t->render(
      $this,
      array(
        'mets' => $this->mets));
  }
  function wrapHtml($content) {
    $t = $this->templates->create('mets/wrapper');
    return $t->render(
      $this,
      array(
        'mets' => $this->mets,
        'content' => $content));
  }
  function renderHtmlNew() {
    if (!$this->met) {
      $this->met = new Met();
    }
    $this->document->setTitle("New met");
    $t = $this->templates->create('mets/new');
    return $this->wrapHtml($t->render($this, array('met' => $this->met)));
  }
  function postForm() {
    if ($this->processNew()) {
      return new k_SeeOther($this->url($this->met->id()));
    }
    return $this->render();
  }
  function processNew() {
    $this->met = new Met(
      array(
        'category' => $this->body('category'),
        'met' => $this->body('met'),
        'name' => $this->body('name')));
    return $this->mets->insert($this->met);
  }
}
