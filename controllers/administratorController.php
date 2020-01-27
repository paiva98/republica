<?php
class administratorController extends controller {

   
    public function __construct() {
        parent::__construct();
    }

    public function index() {
      
      $dados  = array();
      $filters = array();
      $dados['main_menu'] = "";
      $republics = new republics();

      $currentPage = 1;
      $dados['limit'] = 16;
      if (!empty($_GET['p'])) {/*recebe a pagina via get*/
        $currentPage = $_GET['p'];
      }

      $filters['id_administrator'] = $_SESSION['administrator_online'];
      $offset = ($currentPage * $dados['limit']) - $dados['limit'];
      $dados['totalItems'] = $republics->getTotal();

      $dados['numberOfPages'] = ceil($dados['totalItems'] / $dados['limit']);/*arredondar para cima*/
      $dados['republics_list'] = $republics->getlist($offset, $dados['limit'], $filters);
      $dados['currentPage'] = $currentPage;

      $this->loadTemplate("home","administrator/my_republics", $dados);
    }

    public function profile() {

     
      
      $users = new users();
      $dados  = array();
      $dados['main_menu'] = "";
      $filters['id_administrator'] = $_SESSION['administrator_online'];
      $dados['administrator_info'] = $users->getInfo($filters['id_administrator']);
      if (isset($_POST['name']) && !empty($_POST['name'])) {

          $user_id = $filters['id_administrator'];
          $name = addslashes($_POST['name']);
          $state = addslashes($_POST['state']);
          $city = addslashes($_POST['city']);
          $street = addslashes($_POST['street']);
          $number = addslashes($_POST['number']);
          $zip = addslashes($_POST['zip']);
          $neighborhood = addslashes($_POST['neighborhood']);
          $complement = (isset($_POST['complement']) && !empty($_POST['complement'])) ? addslashes($_POST['complement']) : "not"; $whatsapp = (isset($_POST['whatsapp']) && !empty($_POST['whatsapp'])) ? addslashes($_POST['whatsapp']) : "not"; 
          $facebook = (isset($_POST['facebook']) && !empty($_POST['facebook'])) ? addslashes($_POST['facebook']) : "not";
          $instagram = (isset($_POST['instagram']) && !empty($_POST['instagram'])) ? addslashes($_POST['instagram']) : "not";
          $another_phone = (isset($_POST['another_phone']) && !empty($_POST['another_phone'])) ? addslashes($_POST['another_phone']) : "not";         

                /*todos os campos*/

                // Extensões aceitas
                $extensoes = array(".jpeg", ".jpg", ".JPG", ".png", ".PNG", ".webp", ".WEBP");
                // Caminho para onde o arquivo será enviado
                $caminho = "assets/img/administrator/".  $dados['administrator_info']['login'] . "/";
                // Substituir arquivo já existente (true = sim; false = nao)
                $substituir = true;
            
                $nomeArquivo = $_FILES["avatar"]["name"];
                $nomeArquivo = $users->remover_caracter($nomeArquivo);
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

                    $dados['return'] = $users->change($user_id, $name, $state, $city, $street, $number, $zip, $neighborhood, $complement, $whatsapp, $facebook, $instagram, $another_phone, $img);

                    if($dados['return'] == false){
                      if (isset($_SESSION['error_register'])) {
                          unset($_SESSION['error_register']);
                      }
                      header("Location:" . BASE_URL . "administrator/profile");
                      exit;
                    }else{
                      echo $dados['return'];
                      $_SESSION['error_register'] = "Erro no cadastro. Tente novamente ou entre contato em nosso site.";
                    }
      }
      $this->loadTemplate("home","administrator/profile", $dados);
    }

    

  
    

      


  
    



  

}