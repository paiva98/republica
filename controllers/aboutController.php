<?php
class aboutController extends controller {

   
    public function __construct() {
        parent::__construct();
    }

    public function index() {
      
      $dados  = array();
      $dados['main_menu'] = "about";
      $republics = new republics();
      $dados['active_menu'] = "home";


      $this->loadTemplate('home','about/home', $dados);
    }

    public function affiliate() {
      
      $dados  = array();
      $dados['main_menu'] = "about";
      $republics = new republics();
      $dados['active_menu'] = "affiliate";
      $this->loadTemplate('home','about/affiliate', $dados);
    }

    public function contact_us() {
      
      $dados  = array();
      $dados['main_menu'] = "about";
      $republics = new republics();
      $dados['active_menu'] = "contact_us";
      $this->loadTemplate('home','about/contact_us', $dados);
    }

   

    public function terms_commitments() {
      
      $dados  = array();
      $dados['main_menu'] = "about";
      $dados['active_menu'] = "terms_commitments";
      $this->loadTemplate("home","about/terms_commitments", $dados);
    }

   

      


  
    



  

}