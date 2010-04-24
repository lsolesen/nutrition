<?php
require_once 'foodinfos.inc.php';

class components_foodinfos_List extends k_Component {
  protected $templates;
  protected $foodinfos;
  protected $foodinfo;
  protected $url_init = array('sort' => 'id', 'direction' => 'asc', 'page' => 1);
  function __construct(k_TemplateFactory $templates, Foodinfos $foodinfos) {
    $this->templates = $templates;
    $this->foodinfos = $foodinfos;
  }
  function map($name) {
    return 'components_foodinfos_Entry';
  }
  function renderHtml() {
    $this->document->setTitle("Foodinfos");
    $t = $this->templates->create('foodinfos/list');
    return $t->render(
      $this,
      array(
        'foodinfos' => $this->foodinfos));
  }
  function wrapHtml($content) {
    $t = $this->templates->create('foodinfos/wrapper');
    return $t->render(
      $this,
      array(
        'foodinfos' => $this->foodinfos,
        'content' => $content));
  }
  function renderHtmlNew() {
    if (!$this->foodinfo) {
      $this->foodinfo = new Foodinfo();
    }
    $this->document->setTitle("New foodinfo");
    $t = $this->templates->create('foodinfos/new');
    return $this->wrapHtml($t->render($this, array('foodinfo' => $this->foodinfo)));
  }
  function postForm() {
    if ($this->processNew()) {
      return new k_SeeOther($this->url($this->foodinfo->id()));
    }
    return $this->render();
  }
  function processNew() {
    $this->foodinfo = new Foodinfo(
      array(
        'FoodId' => $this->body('FoodId'),
        'DanName' => $this->body('DanName'),
        'ProdName' => $this->body('ProdName'),
        'EngName' => $this->body('EngName'),
        'SysName' => $this->body('SysName'),
        'MainGrp' => $this->body('MainGrp'),
        'SubGrp' => $this->body('SubGrp'),
        'Waste' => $this->body('Waste'),
        'NCF' => $this->body('NCF'),
        'FACF' => $this->body('FACF'),
        'PEF' => $this->body('PEF'),
        'FEF' => $this->body('FEF'),
        'CEF' => $this->body('CEF'),
        'Density' => $this->body('Density'),
        'Remarks' => $this->body('Remarks'),
        'PublStatus' => $this->body('PublStatus'),
        'LanguaL' => $this->body('LanguaL'),
        'GRIN' => $this->body('GRIN'),
        'FISHBASE' => $this->body('FISHBASE'),
        'BASIS' => $this->body('BASIS'),
        'USDA' => $this->body('USDA'),
        'FIFood' => $this->body('FIFood'),
        'UKFood' => $this->body('UKFood'),
        'FRFood' => $this->body('FRFood'),
        'DEFood' => $this->body('DEFood'),
        'SEFood' => $this->body('SEFood'),
        'NOFood' => $this->body('NOFood'),
        'NLFood' => $this->body('NLFood'),
        'ISFood' => $this->body('ISFood'),
        'SPFood' => $this->body('SPFood'),
        'ITFood' => $this->body('ITFood'),
        'DateUpdated' => $this->body('DateUpdated'),
        'UpdatedBy' => $this->body('UpdatedBy'),
        'Recipe' => $this->body('Recipe'),
        'WaterYield' => $this->body('WaterYield'),
        'FatYield' => $this->body('FatYield')));
    return $this->foodinfos->insert($this->foodinfo);
  }
}
