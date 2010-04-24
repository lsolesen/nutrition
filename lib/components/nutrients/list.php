<?php
require_once 'nutrients.inc.php';

class components_nutrients_List extends k_Component {
  protected $templates;
  protected $nutrients;
  protected $nutrient;
  protected $url_init = array('sort' => 'id', 'direction' => 'asc', 'page' => 1);
  function __construct(k_TemplateFactory $templates, Nutrients $nutrients) {
    $this->templates = $templates;
    $this->nutrients = $nutrients;
  }
  function map($name) {
    return 'components_nutrients_Entry';
  }
  function renderHtml() {
    $this->document->setTitle("Nutrients");
    $t = $this->templates->create('nutrients/list');
    return $t->render(
      $this,
      array(
        'nutrients' => $this->nutrients));
  }
  function wrapHtml($content) {
    $t = $this->templates->create('nutrients/wrapper');
    return $t->render(
      $this,
      array(
        'nutrients' => $this->nutrients,
        'content' => $content));
  }
  function renderHtmlNew() {
    if (!$this->nutrient) {
      $this->nutrient = new Nutrient();
    }
    $this->document->setTitle("New nutrient");
    $t = $this->templates->create('nutrients/new');
    return $this->wrapHtml($t->render($this, array('nutrient' => $this->nutrient)));
  }
  function postForm() {
    if ($this->processNew()) {
      return new k_SeeOther($this->url($this->nutrient->id()));
    }
    return $this->render();
  }
  function processNew() {
    $this->nutrient = new Nutrient(
      array(
        'RefId' => $this->body('RefId'),
        'PubTypeId' => $this->body('PubTypeId'),
        'AcqTypeId' => $this->body('AcqTypeId'),
        'Title' => $this->body('Title'),
        'Authors' => $this->body('Authors'),
        'Publishr' => $this->body('Publishr'),
        'PubDate' => $this->body('PubDate'),
        'Version' => $this->body('Version'),
        'OrigLang' => $this->body('OrigLang'),
        'Languages' => $this->body('Languages'),
        'ISBN' => $this->body('ISBN'),
        'FstEdDat' => $this->body('FstEdDat'),
        'EdNo' => $this->body('EdNo'),
        'NoPages' => $this->body('NoPages'),
        'BkTitle' => $this->body('BkTitle'),
        'Editors' => $this->body('Editors'),
        'Pages' => $this->body('Pages'),
        'LgJrName' => $this->body('LgJrName'),
        'AbJrName' => $this->body('AbJrName'),
        'ISSN' => $this->body('ISSN'),
        'Volume' => $this->body('Volume'),
        'Issue' => $this->body('Issue'),
        'SeriName' => $this->body('SeriName'),
        'SeriNo' => $this->body('SeriNo'),
        'RprtTitle' => $this->body('RprtTitle'),
        'FileFrmt' => $this->body('FileFrmt'),
        'WWW' => $this->body('WWW'),
        'Medium' => $this->body('Medium'),
        'OS' => $this->body('OS'),
        'Media' => $this->body('Media'),
        'Valid' => $this->body('Valid'),
        'Remarks' => $this->body('Remarks'),
        'FoodId' => $this->body('FoodId'),
        'DateUpdated' => $this->body('DateUpdated'),
        'UpdatedBy' => $this->body('UpdatedBy'),
        'DocLink' => $this->body('DocLink')));
    return $this->nutrients->insert($this->nutrient);
  }
}
