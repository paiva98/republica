<?php
class homeController extends controller {

   
    public function __construct() {
        parent::__construct();
    }

    public function index() {
      
      $dados  = array();
      $dados['main_menu'] = "home";
      $republics = new republics();

      $filters['vacancies'] = true;
      $filters['order'] = " ORDER BY rand() ";


      $dados['republics_vacancies'] = $republics->getlistVacancies(0, 8, $filters);
      
      
      $dados['republics_registered'] = $republics->getlist(0, 8, $filters['order']);
      

      $comments = $republics->getComments();
      $dados['comment'] = $comments;
      
      
      $answer = array();
      foreach( $comments as  $comm){
        $answer[ $comm['id_comments']  ]  = $republics->getAnswer($comm['id_comments']);
      }
      
      $dados['answer'] = $answer;
      
      $this->loadTemplate('home','home/home', $dados);

    }

    public function register() {
        $u = new users();

        $dados  = array();
        $dados['main_menu'] = "home";

          if (isset($_POST['email']) && !empty($_POST['email'])) {
                $name = addslashes($_POST['name']);
                $email = addslashes($_POST['email']);
                $password = md5(addslashes($_POST['password']));
                $state = addslashes($_POST['state']);
                $city = addslashes($_POST['city']);
                $street = addslashes($_POST['street']);
                $number = addslashes($_POST['number']);
                $zip = addslashes($_POST['zip']);
                $neighborhood = addslashes($_POST['neighborhood']);
                $complement = (isset($_POST['complement']) && !empty($_POST['complement'])) ? addslashes($_POST['complement']) : "not"; 
                $whatsapp = (isset($_POST['whatsapp']) && !empty($_POST['whatsapp'])) ? addslashes($_POST['whatsapp']) : "not"; 
                $facebook = (isset($_POST['facebook']) && !empty($_POST['facebook'])) ? addslashes($_POST['facebook']) : "not";
                $instagram = (isset($_POST['instagram']) && !empty($_POST['instagram'])) ? addslashes($_POST['instagram']) : "not";                
                $another_phone = (isset($_POST['another_phone']) && !empty($_POST['another_phone'])) ? addslashes($_POST['another_phone']) : "not";         

                /*todos os campos*/

                // Extensões aceitas
                $extensoes = array(".jpeg", ".jpg", ".JPG", ".png", ".PNG", ".webp", ".WEBP");
                // Caminho para onde o arquivo será enviado
                $caminho = "assets/img/administrator/". $email . "/";
                // Substituir arquivo já existente (true = sim; false = nao)
                $substituir = true;
            
                $nomeArquivo = $_FILES["avatar"]["name"];
                $nomeArquivo = $u->remover_caracter($nomeArquivo);
                $nomeTemporario = $_FILES["avatar"]["tmp_name"];
                  
                  
                    // Verifica se o arquivo foi colocado no campo
                    if (!empty($nomeArquivo)) {
                    
                      $erro = false;
                    
                      // Verifica se a extensão está entre as aceitas
                      if (!in_array(strrchr($nomeArquivo, "."), $extensoes)) {
                        $erro = "A extensão do arquivo <b>" . $nomeArquivo . "</b> não é válida";
                      } 
                      // Verifica se o arquivo existe e se é para substituir
                      if (file_exists($caminho . $nomeArquivo) and !$substituir) {
                        $erro = "O arquivo <b>" . $nomeArquivo . "</b> já existe";
                      }
                    
                      // Se não houver erro
                      if (!$erro) {
                        // Move o arquivo para o caminho definido
                        move_uploaded_file($nomeTemporario, ($caminho . $nomeArquivo));
                        $img = $caminho . $nomeArquivo;
                        
                      } 
                      // Se houver erro
                      else {
                        // Mensagem de erro
                        echo $erro . "<br />";
                      }
                    }else{
                      $img = "assets/img/administrator/avatar_default.png";

                    }

                    $dados['return'] = $u->register($name, $email, $password, $state, $city, $street, $number, $zip, $neighborhood, $complement, $whatsapp, $facebook, $instagram, $another_phone, $img);

                    if($dados['return'] == false){
                      if (isset($_SESSION['error_register'])) {
                          unset($_SESSION['error_register']);
                      }
                      header("Location:" . BASE_URL . "administrator");
                      exit;
                    }else{
                      echo $dados['return'];
                      $_SESSION['error_register'] = "Erro no cadastro. Tente novamente ou entre contato em nosso site.";
                    }
                  
          }
       
        $this->loadTemplate('home','home/add_profile', $dados);



      
    }

    public function check_login() {
          $dados = array();
          $users = new users();

          if (isset($_POST['login']) && !empty($_POST['password'])) {
          
            $login = addslashes($_POST['login']);

            $password = md5(addslashes($_POST['password']));
            $dados['resposta'] = $users->logar($login, $password);     
            if(!$dados['resposta']){
             
              $_SESSION['error_login'] = "E-mail e/ou senha incorretos";
              header("Location: " . BASE_URL);
              exit;

            }else{
              unset($_SESSION['error_login']);
              header("Location: " . BASE_URL . "administrator");
              exit;
            }  
          }
           


    }

    

    public function logout()
    {
            unset($_SESSION['administrator_online']);
            header("Location: " . BASE_URL);
    }

      


  
    



  

}