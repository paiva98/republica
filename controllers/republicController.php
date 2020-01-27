<?php
class republicController extends controller {

   
    public function __construct() {
        parent::__construct();

    }

    public function register() {

      if (!isset($_SESSION['administrator_online']) || empty($_SESSION['administrator_online'])) {
        header("Location:" . BASE_URL);
        exit;
      }else{
        $user_id = $_SESSION['administrator_online'];
      }
      
      $dados  = array();
      $dados['main_menu'] = "";
      $r = new republics();




      if (isset($_POST['name']) && !empty($_POST['name'])) {


                $way  = array();
                $imagem_cheia  = array();
                $name = addslashes($_POST['name']);
                $category = addslashes($_POST['category']);
                $tags = (isset($_POST['tags']) && !empty($_POST['tags'])) ? addslashes($_POST['tags']) : "not"; 
                $propriety_type = addslashes($_POST['propriety_type']);
                $culture = addslashes($_POST['culture']);
                $total_residents = addslashes($_POST['total_residents']);
                $rooms = addslashes($_POST['rooms']);
                $state = addslashes($_POST['state']);
                $city = addslashes($_POST['city']);
                $street = addslashes($_POST['street']);
                $number = addslashes($_POST['number']);
                $zip = addslashes($_POST['zip']); 
                $neighborhood = addslashes($_POST['neighborhood']);
                $complement =  (isset($_POST['complement']) && !empty($_POST['complement'])) ? addslashes($_POST['complement']) : "not";
                $facebook = (isset($_POST['facebook']) && !empty($_POST['facebook'])) ? addslashes($_POST['facebook']) : "not";
                $instagram = (isset($_POST['instagram']) && !empty($_POST['instagram'])) ? addslashes($_POST['instagram']) : "not";                
                $youtube = (isset($_POST['youtube']) && !empty($_POST['youtube'])) ? addslashes($_POST['youtube']) : "not";
                if (isset($_POST['subtitle']) && !empty($_POST['subtitle'])) {
                  foreach ($_POST['subtitle'] as $key => $value) {
                    $subtitle[] = $value;
                  }
                }
                
                if (isset($_POST['facilities']) && !empty($_POST['facilities'])) {
                    foreach ($_POST['facilities'] as $key => $value) {
                      $facilities[] = $value;
                    } 
                }else{
                  $facilities = 0;
                }
                 
                // Extensões aceitas
                $extensoes = array(".jpeg", ".jpg", ".JPG", ".png", ".PNG", ".webp", ".WEBP");
                // Caminho para onde o arquivo será enviado
                $folder = "assets/img/republic/". $name . "/";
                
                if (!file_exists($folder)){
                  mkdir("$folder", 0777, true);
                }
                // Substituir arquivo já existente (true = sim; false = nao)
                $substituir = true;
                $numeroCampos = 0;

                if (isset($_FILES['files']) && !empty($_FILES['files'])) {
                  foreach ($_FILES['files']['name'] as $key => $value) {
                    if ($_FILES['files']['name'][$key] != "") {
                        $numeroCampos++;
                        $imagem_cheia[] = $key;
                    }
                  }

                  foreach ($imagem_cheia as $key => $value) {
                
                    
                    $nomeArquivo = $_FILES["files"]["name"][$value];
                    $nomeArquivo = $r->remover_caracter($nomeArquivo);
                    $nomeTemporario = $_FILES["files"]["tmp_name"][$value];

                    // Verifica se o arquivo foi colocado no campo
                    if (!empty($nomeArquivo)) {

                      $erro = false;

                      // Verifica se a extensão está entre as aceitas
                      if (!in_array(strrchr($nomeArquivo, "."), $extensoes)) {
                          $erro = "A extensão do arquivo <b>" . $nomeArquivo . "</b> não é válida";
                      }
                      // Verifica se o arquivo existe e se é para substituir
                      if (file_exists($folder . $nomeArquivo) and !$substituir) {
                          $erro = "O arquivo <b>" . $nomeArquivo . "</b> já existe";
                      }

                      // Se não houver erro
                      if (!$erro) {
                          // Move o arquivo para o caminho definido
                          move_uploaded_file($nomeTemporario, ($folder . $nomeArquivo));
                          $way[] = $folder . $nomeArquivo;
                      }
                      // Se houver erro
                      else {
                          // Mensagem de erro
                          echo $erro . "<br />";
                      }
                    } else {
                      $way[] = "assets/img/administrator/avatar_default.png";
                    }
                  }
                }

                  if ($numeroCampos == 0) {
                      
                    $way[] = "assets/img/administrator/avatar_default.png";
                    
                
                  }
                

                   $dados['return'] = $r->register($user_id, $name, $category, $tags, $propriety_type, $culture, $total_residents, $rooms, $state, $city, $street, $number, $zip, $neighborhood, $complement, $facebook, $instagram, $youtube, $facilities, $subtitle, $way);

                    if($dados['return'] == true){
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

      $this->loadTemplate("home", "republic/register", $dados);
    }

    public function register_rooms($id) {

      if (!isset($_SESSION['administrator_online']) || empty($_SESSION['administrator_online'])) {
        header("Location:" . BASE_URL);
        exit;
      }else{
        $user_id = $_SESSION['administrator_online'];
      }
      
      
      $dados  = array();
      $dados['main_menu'] = "";
      $r = new republics();
      $dados['republics_info'] = $r->getInfo($id);



      if (isset($_POST['room_type']) && !empty($_POST['room_type'])) {
               
                
                foreach ($_POST['room_type'] as $key => $value) {
                      $room['room_type'][] = $value;
                     
                }

                foreach ($_POST['room_price'] as $key => $value) {
                      $room['room_price'][] = $value;
                    
                }

                foreach ($_POST['room_vacancies'] as $key => $value) {
                      $room['room_vacancies'][] = $value;
                     
                }
                
                foreach ($_POST['description_room'] as $key => $value) {
                      $room['description_room'][] = $value;
                     
                }

                
               
                

                $dados['return'] = $r->register_rooms($id, $room);

                    if($dados['return'] == true){
                      if (isset($_SESSION['error_register'])) {
                          unset($_SESSION['error_register']);
                      }
                      header("Location:" . BASE_URL . "administrator");
                      exit;
                    }else{
                      echo $dados['return'];
                      $_SESSION['error_register'] = "Erro no cadastro do quarto. Tente novamente ou entre contato em nosso site.";
                    }
                  
      }

      $this->loadTemplate("home", "republic/register_room", $dados);
    }

    public function edit_rooms($id) {

      if (!isset($_SESSION['administrator_online']) || empty($_SESSION['administrator_online'])) {
        header("Location:" . BASE_URL);
        exit;
      }else{
        $user_id = $_SESSION['administrator_online'];
      }
      
      
      $dados  = array();
      $dados['main_menu'] = "";
      $r = new republics();
      $dados['republics_info'] = $r->getInfo($id);
      $dados['rooms_info'] = $r->getRoom($id);


      if (isset($_POST['id_room']) && !empty($_POST['id_room'])) {
                
                foreach ($_POST['id_room'] as $key => $value) {
                      $room['id_room'][] = $value;
                    
                }

                foreach ($_POST['room_price'] as $key => $value) {
                      $room['room_price'][] = $value;
                    
                }

                foreach ($_POST['room_vacancies'] as $key => $value) {
                      $room['room_vacancies'][] = $value;
                     
                }
                
                foreach ($_POST['description_room'] as $key => $value) {
                      $room['description_room'][] = $value;
                     
                }

                
                $dados['return'] = $r->edit_rooms($room);

                    if($dados['return'] == true){
                      if (isset($_SESSION['error_register'])) {
                          unset($_SESSION['error_register']);
                      }
                      header("Location:" . BASE_URL . "administrator");
                      exit;
                    }else{
                      echo $dados['return'];
                      $_SESSION['error_register'] = "Erro na alteração do quarto. Tente novamente ou entre contato em nosso site.";
                    }
                  
      }

      $this->loadTemplate("home", "republic/edit_room", $dados);
    }

    public function see($id) {
      
      $dados  = array();
      $dados['main_menu'] = "republic";
      $republics = new republics();
      $filters['order'] = " ORDER BY rand() ";
      $filters['republic_id'] = $id;
      $dados['republics_info'] = $republics->getInfo($id);
      $dados['republics_vacancies'] = $republics->getlistVacancies(0, 8, $filters);
      $this->loadTemplate("home","republic/singler", $dados);
    }

    public function list() {
      
      $dados  = array();
      $dados['main_menu'] = "republic";
      $filters  = array();
      $republics = new republics();

      $currentPage = 1;
      $limit = 15;

      if (!empty($_GET['search_options'])) {/*recebe a pagina via get*/
            $filters['search_options'] = $_GET['search_options'];
            print_r($_GET['search_options']);
            exit;
      }

      if (!empty($_GET['p'])) {/*recebe a pagina via get*/
            $currentPage = $_GET['p'];
      }

     
      if (!empty($_GET['search'])) {/*recebe a pagina via get*/
            $filters['search'] = $_GET['search'];
             $dados['category'] = $_GET['search'];
      }
      
      $offset = ($currentPage * $limit) - $limit;


      if (!empty($_GET['vacancies'])) {/*recebe a pagina via get*/
          $dados['totalItems'] = $republics->getTotal($filters);
          $dados['numberOfPages'] = ceil($dados['totalItems'] / $limit);
          $dados['republics_list'] = $republics->getlistVacancies($currentPage, $limit, $filters);
      }else{
         
          $dados['republics_list'] = $republics->getList($offset, $limit, $filters);  
          $dados['totalItems'] = $republics->getTotal($filters);
          $dados['numberOfPages'] = ceil($dados['totalItems'] / $limit);
      }

   
    
      $dados['currentPage'] = $currentPage;

      $this->loadTemplate("home","republic/listing", $dados);
    }



  
    

      


  
    



  

}