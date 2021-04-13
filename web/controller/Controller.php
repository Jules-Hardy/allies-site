<?php abstract class Controller{
    /**
     * Render a View
     *
     * @param string $fichier File to render
     * @param array $data Data to be passed for the view to work
     */
    public function render(string $fichier, Array $data = []) : void {
      extract($data);
      $name = explode("\\", strtolower(get_class($this)));
      require_once(DIR . "/view/" . end($name) . "/" . $fichier . ".php");
  }
}
  
?>