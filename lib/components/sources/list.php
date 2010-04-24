<?php
require_once 'sources.inc.php';

class components_sources_List extends k_Component {
  protected $templates;
  protected $sources;
  protected $source;
  protected $url_init = array('sort' => 'id', 'direction' => 'asc', 'page' => 1);
  function __construct(k_TemplateFactory $templates, Sources $sources) {
    $this->templates = $templates;
    $this->sources = $sources;
  }
  function map($name) {
    return 'components_sources_Entry';
  }
  function renderHtml() {
    $this->document->setTitle("Sources");
    $t = $this->templates->create('sources/list');
    return $t->render(
      $this,
      array(
        'sources' => $this->sources));
  }
  function wrapHtml($content) {
    $t = $this->templates->create('sources/wrapper');
    return $t->render(
      $this,
      array(
        'sources' => $this->sources,
        'content' => $content));
  }
  function renderHtmlNew() {
    if (!$this->source) {
      $this->source = new Source();
    }
    $this->document->setTitle("New source");
    $t = $this->templates->create('sources/new');
    return $this->wrapHtml($t->render($this, array('source' => $this->source)));
  }
  function postForm() {
    if ($this->processNew()) {
      return new k_SeeOther($this->url($this->source->id()));
    }
    return $this->render();
  }
  function processNew() {
    $this->source = new Source(
      array(
        'SourceRefId' => $this->body('SourceRefId'),
        'SourceID' => $this->body('SourceID'),
        'RefId' => $this->body('RefId')));
    return $this->sources->insert($this->source);
  }
}
