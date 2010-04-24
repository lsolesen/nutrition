<?php
require_once 'classifs.inc.php';

class components_classifs_List extends k_Component {
  protected $templates;
  protected $classifs;
  protected $classif;
  protected $url_init = array('sort' => 'id', 'direction' => 'asc', 'page' => 1);
  function __construct(k_TemplateFactory $templates, Classifs $classifs) {
    $this->templates = $templates;
    $this->classifs = $classifs;
  }
  function map($name) {
    return 'components_classifs_Entry';
  }
  function renderHtml() {
    $this->document->setTitle("Classifs");
    $t = $this->templates->create('classifs/list');
    return $t->render(
      $this,
      array(
        'classifs' => $this->classifs));
  }
  function wrapHtml($content) {
    $t = $this->templates->create('classifs/wrapper');
    return $t->render(
      $this,
      array(
        'classifs' => $this->classifs,
        'content' => $content));
  }
  function renderHtmlNew() {
    if (!$this->classif) {
      $this->classif = new Classif();
    }
    $this->document->setTitle("New classif");
    $t = $this->templates->create('classifs/new');
    return $this->wrapHtml($t->render($this, array('classif' => $this->classif)));
  }
  function postForm() {
    if ($this->processNew()) {
      return new k_SeeOther($this->url($this->classif->id()));
    }
    return $this->render();
  }
  function processNew() {
    $this->classif = new Classif(
      array(
        'MainGrp' => $this->body('MainGrp'),
        'SubGrp' => $this->body('SubGrp'),
        'EngFdGp' => $this->body('EngFdGp'),
        'OrigFdGp' => $this->body('OrigFdGp')));
    return $this->classifs->insert($this->classif);
  }
}
