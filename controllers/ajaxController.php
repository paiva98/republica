<?php
class ajaxController extends controller {

    public function __construct() {
        parent::__construct();
    }    

    public function search_republic(){
        $dados = array();

        $user = new users();
        $pesquisa = $_POST['pesquisa'];
        $dados['result'] = $user->search_lawyer($pesquisa);
        echo json_encode($dados);

    }

    public function login()
    {
     
      $dados = array();
      $users = new users();
      
      if (isset($_POST['email'])) {
              $email = addslashes($_POST['email']);
              $password = md5(addslashes($_POST['password']));
              $dados['return'] = $users->logar($email, $password);
              echo json_encode($dados);
                  
      }
      

      
    }

    public function existing_email()
    {
      $dados = array();
      $users = new users();
      if(isset($_POST['email'])){ 

        #Recebe o Email Postado
        $email = $_POST['email'];
        $dados['result'] = $users->existing_email($email);
        echo json_encode($dados);

      
      }
    }

    public function existing_name_republic()
    {
      $dados = array();
      $republics = new republics();
      if(isset($_POST['name'])){ 

        #Recebe o Email Postado
        $name = $_POST['name'];
        $dados['result'] = $republics->existing_name_republic($name);
        echo json_encode($dados);

      
      }
    }

   

  
      

      
}


   

  

   

  
