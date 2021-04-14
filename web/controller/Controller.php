<?php abstract class Controller{
  var $vars = array();
  
  public function set($d){
    $this->vars = array_merge($this->vars,$d);
  }

  
  public function render($filename) {
    extract($this->vars);
    require(ROOT.'/view/admin/pages/'.get_class($this).'/'.$filename.'.php');
  }
}
  
?>