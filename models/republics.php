<?php

class republics extends model {
    public function __construct() {
		parent::__construct();
	}

	public function existing_name_republic($name)
        {

            $sql = "SELECT * FROM republic WHERE name = :name";
            $sql = $this->db->prepare($sql);
			$sql->bindValue(':name', $name);
			$sql->execute();

            return $sql->rowCount();
        }

	public function register($user_id, $name, $category, $tags, $propriety_type, $culture, $total_residents, $rooms, $state, $city, $street, $number, $zip, $neighborhood, $complement, $facebook, $instagram, $youtube, $facilities, $subtitle, $way)/*falta outros campos*/
	{
			
				$sql = $this->db->prepare('INSERT INTO republic (user_id, name, category, culture, property_type, residents, qtd_rooms) VALUES(:user_id, :name, :category, :culture, :property_type, :residents, :rooms)');
				$sql->bindValue(':user_id', $user_id);
				$sql->bindValue(':name', $name);
				$sql->bindValue(':category', $category);
				$sql->bindValue(':culture', $culture);
				$sql->bindValue(':property_type', $propriety_type);
				$sql->bindValue(':residents', $total_residents);
				$sql->bindValue(':rooms', $rooms);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	$id_republic = $this->db->lastInsertId();
			    	$return = $this->registerAddress($id_republic, $state, $city, $street, $number, $zip, $neighborhood, $complement);
			    	if($return == false){
			    		return false;
			    	}
			    	$return = $this->registerContact($id_republic, $facebook, $instagram, $youtube);
			    	if($return == false){
			    		return false;
			    	}
			    	$return = $this->registerImages($id_republic, $subtitle, $way);
			    	if($return == false){
			    		return false;
			    	}
			    	$return = $this->registerFacilities($id_republic, $facilities);
			    	if($return == false){
			    		return false;
			    	}
			    	$return = $this->registerTags($id_republic, $tags);
			    	if($return == false){
			    		return false;
			    	}else{
			    		return true;
			    	}
					
				}
			
	}


	public function registerAddress($id_republic, $state, $city, $street, $number, $zip, $neighborhood, $complement)/*falta outros campos*/
	{
			
				$sql = $this->db->prepare('INSERT INTO address_republic (republic_id, street, number_republic, neighborhood, city, state, cep, complement) VALUES(:republic_id, :street, :number_republic, :neighborhood, :city, :state, :cep, :complement)');
				$sql->bindValue(':republic_id', $id_republic);
				$sql->bindValue(':street', $street);
				$sql->bindValue(':number_republic', $number);
				$sql->bindValue(':neighborhood', $neighborhood);
				$sql->bindValue(':city', $city);
				$sql->bindValue(':state', $state);
				$sql->bindValue(':cep', $zip);
				$sql->bindValue(':complement', $complement);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
				}else{
					return false;
				}
			
	}

	public function registerContact($id_republic, $facebook, $instagram, $youtube)/*falta outros campos*/
	{
			
				$sql = $this->db->prepare('INSERT INTO contact_republic (republic_id, facebook, youtube, instagram) VALUES(:republic_id, :facebook, :youtube, :instagram)');
				$sql->bindValue(':republic_id', $id_republic);
				$sql->bindValue(':facebook', $facebook);
				$sql->bindValue(':instagram', $instagram);
				$sql->bindValue(':youtube', $youtube);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
				}else{
					return false;
				}
			
	}

	public function registerFacilities($id_republic, $facilities)/*falta outros campos*/
	{	
		$sql = "";
		foreach ($facilities as $key => $value) {
			$sql .= "INSERT INTO facilities (republic_id, facilities_options_id) VALUES($id_republic, $value);";	
		}

	

			
		$sql = $this->db->prepare($sql);
		$sql->execute();/*Retorna todos valores no campo params.*/
		if ($sql->rowCount() > 0) {
		   	return true;
		}else{
			return false;
		}
			
	}

	public function registerImages($id_republic, $subtitle, $way)/*falta outros campos*/
	{	
		$sql = "";
		
		foreach ($subtitle as $key => $value) {
			if ($subtitle[$key] != "not") {
				$sql .= "INSERT INTO img_republic (republic_id, way, subtitle) VALUES($id_republic, '$way[$key]', '$value');";
			}		
			
		}
			
		$sql = $this->db->prepare($sql);
		$sql->execute();/*Retorna todos valores no campo params.*/
		if ($sql->rowCount() > 0) {
		   	return true;
		}else{
			return false;
		}
			
	}

	public function registerTags($id_republic, $tags)/*falta outros campos*/
	{	
		$sql = "";
		$tags = explode(";", $tags);
		foreach ($tags as $key => $value) {
			$sql .= "INSERT INTO tags_republic (republic_id, name) VALUES($id_republic, '$value');";	
		}

		
		$sql = $this->db->prepare($sql);
		$sql->execute();/*Retorna todos valores no campo params.*/
		if ($sql->rowCount() > 0) {
		   	return true;
		}else{
			return false;
		}
			
	}

	public function register_rooms($id, $room)/*falta outros campos*/
	{
				$sql = "";
				$qtd_room = count($room['room_type']);
				for ($i=0; $i < $qtd_room ; $i++) { 
					$sql .= "INSERT INTO republic_room (republic_id, room_type, description, monthly_expense, vacancies)
					VALUES($id, '" . $room['room_type'][$i]  . "', '" . $room['description_room'][$i] .  "', " . $room['room_price'][$i] . ", " . $room['room_vacancies'][$i] . ");";
				}
               
				$sql = $this->db->prepare($sql);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
			    }else{
			    	return false;
			    }
			
	}

	public function edit_rooms($room)/*falta outros campos*/
	{
				$sql = "";
				$qtd_room = count($room['room_price']);
				for ($i=0; $i < $qtd_room ; $i++) { 
					$sql .= "UPDATE republic_room SET description = '" . $room['description_room'][$i] .  "', monthly_expense =" . $room['room_price'][$i] . ", vacancies = " . $room['room_vacancies'][$i] . " WHERE id_republic_room = " . $room['id_room'][$i] .";";
				}
				
				$sql = $this->db->prepare($sql);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
			    }else{
			    	return false;
			    }
			
	}

	public function deletar($id)
    {
        	$retorno = true;
            $sql = "DELETE FROM republic WHERE id_product = :id";
                   
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->execute();
            if ($sql->rowCount() > 0) {
            	$dados = $this->getImagesByProductId($id);
            	foreach ($dados as $key => $value) {
            		if (unlink($value['way']) == false) {
            			$retorno = false;
            		}
            	}
            	if ($retorno != false) {
            		$this->deletarImagemProduct($id);
            	}
				
			}

			return $retorno;
					



    }


    public function getInfo($id)
	{	
		$array = array();	
		
		$sql = "SELECT republic.* 
			FROM republic
			WHERE id_republic = " . $id;
		
		$sql = $this->db->prepare($sql);
				

		$sql->execute();
		if ($sql->rowCount() > 0) {
			$users = new users();
			$array = $sql->fetch(PDO::FETCH_ASSOC);
			$array['vacancies'] = 0;
			$array['single_rooms'] = 0;
			$array['collective_rooms'] = 0;
			$array['images'] = $this->getImagesByRepublicId($array['id_republic']);
			$array['facilities'] = $this->getFacilities($array['id_republic']);
			$array['address'] = $this->getAdresss($array['id_republic']);
			$array['contact'] = $this->getContact($array['id_republic']);
			$array['administrator'] = $users->getInfo($array['user_id']);
			$array['rooms'] = $this->getRoom($array['id_republic']);
			foreach ($array['rooms'] as $key => $value) {
         		$array['vacancies'] += $value['vacancies'];
         		if ($value['room_type'] == "Individual") {
         			$array['single_rooms'] += $value['vacancies'];
         		}else{
         			$array['collective_rooms'] += $value['vacancies']; 
         		}
      		}
      		
      		

		}else{
			return 0;
		}
		
		return $array;

	}

	public function getAdresss($id)
	{	
		$array = array();	
		
		$sql = "SELECT * 
			FROM address_republic
			WHERE republic_id = " . $id;
		
		$sql = $this->db->prepare($sql);
				

		$sql->execute();
		if ($sql->rowCount() > 0) {
			$users = new users();
			$array = $sql->fetch(PDO::FETCH_ASSOC);
			
		}else{
			return 0;
		}
		
		return $array;

	}

	public function getContact($id)
	{	
		$array = array();	
		
		$sql = "SELECT * 
			FROM contact_republic
			WHERE republic_id = " . $id;
		
		$sql = $this->db->prepare($sql);
				

		$sql->execute();
		if ($sql->rowCount() > 0) {
			$users = new users();
			$array = $sql->fetch(PDO::FETCH_ASSOC);
			
		}else{
			return 0;
		}
		
		return $array;

	}


	public function getFacilities($id)
	{	
		$array = array();	
		
		$sql = "SELECT facilities.facilities_options_id 
			FROM facilities
			WHERE republic_id = " . $id;
		
		$sql = $this->db->prepare($sql);
				

		$sql->execute();
		if ($sql->rowCount() > 0) {
			$users = new users();
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
			
			foreach ($array as $key => $value) {
				$array[$key] = $this->getFacilitiesOptions($value['facilities_options_id']);
			}
			
		}else{
			return 0;
		}
		
		return $array;

	}

	public function getFacilitiesOptions($id)
	{	
		$array = array();	
		
		$sql = "SELECT * 
			FROM facilities_options
			WHERE id_facilities_options = " . $id;
		
		$sql = $this->db->prepare($sql);
				

		$sql->execute();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch(PDO::FETCH_ASSOC);
			
			
		}else{
			return 0;
		}
		
		return $array;

	}

	public function getRoom($id)
	{	
		$array = array();	
		
		$sql = "SELECT * 
			FROM republic_room
			WHERE republic_id = " . $id;
		
		$sql = $this->db->prepare($sql);
				

		$sql->execute();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
			
			
		}
		
		return $array;

	}

	public function getlist($offset, $limit, $filters = array())
	{	
		$array = array();		
		$order = " ORDER BY id_republic ";
		$where = array(
			'1=1'
		);

		if (!empty($filters['id_administrator'])) {/*todos filtros*/
			$where[] = "republic.user_id = :user_id";
		}

		

		if (!empty($_GET['search'])) {
			$pesquisa = $filters['search'];
			$where[] = "republic.name LIKE :search OR republic.category LIKE :search OR republic.culture LIKE :search OR republic.property_type LIKE :search";
		}

		if (!empty($filters['order'])) {/*todos filtros*/
			$order = $filters['order'];
		}

		$sql = "SELECT republic.* 
				FROM republic
				WHERE ". implode(' AND ', $where) . 
				$order . "
				LIMIT $offset, $limit";	


		$sql = $this->db->prepare($sql);
		if (!empty($filters['id_administrator'])) {/*todos filtros*/
			$sql->bindValue(":user_id" , $filters['id_administrator'] );
		}

		
		if (!empty($filters['search'])) {/*todos filtros*/
			
			$sql->bindValue(':search', '%' . "$pesquisa" .'%');
		}
		$sql->execute();
		if ($sql->rowCount() > 0) {

			$array = $sql->fetchAll(PDO::FETCH_ASSOC);

			foreach ($array as $key => $item) {
				
				$ids[] = $item['id_republic'];
				
			}
				$where = array(
					'1=1'
				);
				$order = " ORDER BY republic_id ";
				if (!empty($_GET['search'])) {
					$pesquisa = $filters['search'];
					$where[] = "tags_republic.name LIKE :search";
				}
				$sql = "SELECT DISTINCT tags_republic.republic_id
					FROM tags_republic
					WHERE ". implode(' AND ', $where) . 
					$order . "
					LIMIT $offset, $limit";	
				$sql = $this->db->prepare($sql);
				if (!empty($filters['search'])) {/*todos filtros*/
				
					$sql->bindValue(':search', '%' . "$pesquisa" .'%');
				}
				$sql->execute();
				if ($sql->rowCount() > 0) {

					$array2 = $sql->fetchAll(PDO::FETCH_ASSOC);
					
					
					
					foreach ($array2 as $key2 => $value2) {

						$array2[$key2] = $value2['republic_id'];
						
						
					}
					$array2 = array_merge($ids, $array2);
					$array2 = array_unique($array2);
					
					foreach ($array2 as $key => $value) {
						$array2[$key] = $this->getInfo($value);

					}

				
					
					
				}else{
					foreach ($ids as $key => $value) {
						$array2[$key] = $this->getInfo($value);

					}
				}

			return $array2;
		}else{
				$where = array(
					'1=1'
				);
				$order = " ORDER BY republic_id ";
				if (!empty($_GET['search'])) {
					$pesquisa = $filters['search'];
					$where[] = "tags_republic.name LIKE :search";
				}
				$sql = "SELECT tags_republic.republic_id
					FROM tags_republic
					WHERE ". implode(' AND ', $where) . 
					$order . "
					LIMIT $offset, $limit";	
				$sql = $this->db->prepare($sql);
				if (!empty($filters['search'])) {/*todos filtros*/
				
					$sql->bindValue(':search', '%' . "$pesquisa" .'%');
				}
				$sql->execute();
				if ($sql->rowCount() > 0) {

					$array = $sql->fetchAll(PDO::FETCH_ASSOC);
					foreach ($array as $key => $value) {
						$array[$key] = $this->getInfo($value['republic_id']);

					}
				}else{
					return 0;
				}
			
		}		

		return $array;

	}

	public function getlistVacancies($offset, $limit, $filters = array())
	{	
		$array = array();		
		$order = " ORDER BY republic_id ";
		$where = array(
			'1=1'
		);

		if (!empty($filters['id_administrator'])) {/*todos filtros*/
			$where[] = "republic.user_id = :user_id";
		}

		if (!empty($filters['republic_id'])) {/*todos filtros*/
			$where[] = "republic_room.republic_id = :republic_id";
		}

		if (!empty($filters['order'])) {/*todos filtros*/
			$order = $filters['order'];
		}
		$where[] = "republic_room.vacancies >= 1";
		$sql = "SELECT republic_room.* 
				FROM republic_room
				WHERE ". implode(' AND ', $where) . 
				$order . "
				LIMIT $offset, $limit";	
		
		$sql = $this->db->prepare($sql);
		if (!empty($filters['id_administrator'])) {/*todos filtros*/
			$sql->bindValue(":user_id" , $filters['id_administrator'] );
		}

		if (!empty($filters['republic_id'])) {/*todos filtros*/
			$sql->bindValue(":republic_id" , $filters['republic_id'] );
		}		

		$sql->execute();
		if ($sql->rowCount() > 0) {

			$array = $sql->fetchAll(PDO::FETCH_ASSOC);

			foreach ($array as $key => $item) {
				/*Criamos uma chave que chama images e vamos atribuir a ela*/
				$array[$key]['republics_info'] = $this->getInfo($item['republic_id']);
				
			}

			
		}else{
			return 0;
		}		

		return $array;

	}
	
	public function getImagesByRepublicId($id)
  	{
   		$array = array();

	    $sql = "SELECT * FROM img_republic WHERE republic_id = :id";
	   
	    $sql = $this->db->prepare($sql);
	    $sql->bindValue(":id", $id);
	    $sql->execute();

	    if($sql->rowCount() > 0){
	      $array = $sql->fetchAll(PDO::FETCH_ASSOC);
	    }

    	return $array;
 	}

	public function getTotal($filters = array()){
			$where = array(
				'1=1'
			);
		
			if (!empty($filters['category'])) {/*todos filtros*/
				$where[] = "republic.category = :nome_category";
			}

			if (!empty($_GET['search'])) {
				$pesquisa = $filters['search'];
				$where[] = "republic.name LIKE :search OR republic.category LIKE :search OR republic.culture LIKE :search OR republic.property_type LIKE :search";
			}

			$sql = "SELECT 
			COUNT(*) as c 
			FROM republic
			WHERE ". implode(' AND ', $where) . "";
		
			$sql = $this->db->prepare($sql);
			if (!empty($filters['category'])) {/*todos filtros*/
				$sql->bindValue(":nome_category" , $filters['category'] );
			}
			
			if (!empty($filters['search'])) {/*todos filtros*/
			
				$sql->bindValue(':search', '%' . "$pesquisa" .'%');
			}	

			
			
			$sql->execute();
			$produtos = $sql->fetch();

			return $produtos['c'];
	}

        

    public function addVisit($id_product, $ip)/*falta outros campos*/
	{
			$hour = date('Y-m-d H:i:s');

			$sql = "SELECT COUNT(*) as c FROM visit_product WHERE ip = :ip AND product_id = :id_product";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":ip", $ip);
			$sql->bindValue(":id_product", $id_product);			
			$sql->execute();
			$total = $sql->fetch(PDO::FETCH_ASSOC);


			if ($total['c'] == 0) {
				$sql = $this->db->prepare("INSERT INTO visit_product (ip, hour, product_id) VALUES (:ip, :hour, :id_product)");/*Adiciona ao bd sempre que apertar f5 as informações*/
				$sql->bindValue(":ip", $ip);
				$sql->bindValue(":hour", $hour);
				$sql->bindValue(":id_product", $id_product);
				$sql->execute();

				$sql = $this->db->prepare("UPDATE republic SET visit_number = visit_number + 1 WHERE id_product = :id_product");
				$sql->bindValue(":id_product", $id_product);
				$sql->execute();


			}else{
				$sql = "SELECT hour FROM visit_product WHERE ip = :ip order by id_visit desc limit 1";/*seleciona usuarios, limitando por ip*/
				$sql = $this->db->prepare($sql);
				$sql->bindValue(":ip", $ip);			
				$sql->execute();
				$sql = $sql->fetch(PDO::FETCH_ASSOC);
				if ($sql['hour'] < date('Y-m-d H:i:s', strtotime("-5 minutes"))) {
					$sql = $this->db->prepare("INSERT INTO visit_product (ip, hour, product_id) VALUES (:ip, :hour, :id_product)");/*Adiciona ao bd sempre que apertar f5 as informações*/
					$sql->bindValue(":ip", $ip);
					$sql->bindValue(":hour", $hour);
					$sql->bindValue(":id_product", $id_product);
					$sql->execute();

					$sql = $this->db->prepare("UPDATE republic SET visit_number = visit_number + 1 WHERE id_product = :id_product");
					$sql->bindValue(":id_product", $id_product);
					$sql->execute();

				}	
			}
			
			

			
			/*
			$sql = $this->db->prepare("DELETE FROM visit_product WHERE hour < :hour");/*Delete todos acessos com mais de 5 minutos
			$sql->bindValue(":hour", date('H:i:s', strtotime("-5 minutes")));
			$sql->execute();	
			*/
	}

	function remover_caracter($string) {
		    $string = preg_replace("/[áàâãä]/", "a", $string);
		    $string = preg_replace("/[ÁÀÂÃÄ]/", "A", $string);
		    $string = preg_replace("/[éèê]/", "e", $string);
		    $string = preg_replace("/[ÉÈÊ]/", "E", $string);
		    $string = preg_replace("/[íì]/", "i", $string);
		    $string = preg_replace("/[ÍÌ]/", "I", $string);
		    $string = preg_replace("/[óòôõö]/", "o", $string);
		    $string = preg_replace("/[ÓÒÔÕÖ]/", "O", $string);
		    $string = preg_replace("/[úùü]/", "u", $string);
		    $string = preg_replace("/[ÚÙÜ]/", "U", $string);
		    $string = preg_replace("/[çõ]/", "co", $string);
		    $string = preg_replace("/ç/", "c", $string);
		    $string = preg_replace("/Ç/", "C", $string);
		    $string = preg_replace("/[][><}{)(:;,!?*%~^`@]/", "", $string);
		    $string = preg_replace("/ /", "_", $string);
		    $string = strtolower($string);
		    return $string;
	}

		
	  
		


		
}