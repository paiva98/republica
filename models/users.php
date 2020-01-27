<?php 

	class users extends model
	{

		public function logar($login, $password)
        {

            $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
            $sql = $this->db->prepare($sql);
			$sql->bindValue(':login', $login);
			$sql->bindValue(':password', $password);
			$sql->execute();

            if ($sql->rowCount() > 0) {
                $sql = $sql->fetch();
                
                $_SESSION['administrator_online'] = $sql['id_user'];
                

                return true;
                
            }else{
            	 
                return false;
            
            }
        }

        public function getInfo($id_user)
        {
        	$sql = "SELECT * FROM users WHERE id_user = :id_user";
            $sql = $this->db->prepare($sql);
			$sql->bindValue(':id_user', $id_user);
			$sql->execute();

          	if ($sql->rowCount() > 0) {

				$array = $sql->fetch(PDO::FETCH_ASSOC);
				
				
				$array['administrator_address'] = $this->getInfoAddress($id_user);
				$array['administrator_social_information'] = $this->getInfoSocialInformation($id_user);
        		
      			
			
			}else{
				return 0;
			}

			return $array;
        }

        public function getInfoAddress($id_user)
        {
        	$sql = "SELECT * FROM address_admin WHERE user_id = :id_user";
            $sql = $this->db->prepare($sql);
			$sql->bindValue(':id_user', $id_user);
			$sql->execute();

          	if ($sql->rowCount() > 0) {

				$array = $sql->fetch(PDO::FETCH_ASSOC);
				
			}else{
				return 0;
			}

			return $array;
        }

        public function getInfoSocialInformation($id_user)
        {
        	$sql = "SELECT * FROM social_information WHERE user_id = :id_user";
            $sql = $this->db->prepare($sql);
			$sql->bindValue(':id_user', $id_user);
			$sql->execute();

          	if ($sql->rowCount() > 0) {

				$array = $sql->fetch(PDO::FETCH_ASSOC);
				
			}else{
				return 0;
			}

			return $array;
        }

      
		
		public function register($name, $email, $password, $state, $city, $street, $number, $zip, $neighborhood, $complement, $whatsapp, $facebook, $instagram, $another_phone, $img)/*falta outros campos*/
		{
			
				$sql = $this->db->prepare('INSERT INTO users (name, login, password, img_profile) VALUES(:name, :login ,:password, :img_profile)');
				$sql->bindValue(':name', $name);
				$sql->bindValue(':login', $email);
				$sql->bindValue(':password', $password);
				$sql->bindValue(':img_profile', $img);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	$id_user = $this->db->lastInsertId();
			    	$return = $this->registerAddress($id_user, $state, $city, $street, $number, $zip, $neighborhood, $complement);
			    	if($return == false){
			    		return false;
			    	}
			    	$return = $this->registerSocialnformation($id_user, $facebook, $instagram, $whatsapp, $another_phone);
			    	if($return == false){
			    		return false;
			    	}else{
			    		$_SESSION['administrator_online'] = $id_user;
			    	}
					
				}else{
					return false;
				}
			
		}

		public function registerAddress($id_user, $state, $city, $street, $number, $zip, $neighborhood, $complement)/*falta outros campos*/
		{
			
				$sql = $this->db->prepare('INSERT INTO address_admin (user_id, state, city, street, number_house, zip, neighborhood, complement) VALUES(:user_id, :state, :city, :street, :number_house, :zip, :neighborhood, :complement)');
				$sql->bindValue(':user_id', $id_user);
				$sql->bindValue(':state', $state);
				$sql->bindValue(':city', $city);
				$sql->bindValue(':street', $street);
				$sql->bindValue(':number_house', $number);
				$sql->bindValue(':zip', $zip);
				$sql->bindValue(':neighborhood', $neighborhood);
				$sql->bindValue(':complement', $complement);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
			    	
					
				}else{
					return false;
				}
			
		}

		public function registerSocialnformation($id_user, $facebook, $instagram, $whatsapp, $another_phone)/*falta outros campos*/
		{			
				$sql = $this->db->prepare('INSERT INTO social_information (user_id, facebook, instagram, whatsapp, another_phone) VALUES(:user_id, :facebook, :instagram, :whatsapp, :another_phone)');
				$sql->bindValue(':user_id', $id_user);
				$sql->bindValue(':facebook', $facebook);
				$sql->bindValue(':instagram', $instagram);
				$sql->bindValue(':whatsapp', $whatsapp);
				$sql->bindValue(':another_phone', $another_phone);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
			    	
					
				}else{
					return false;
				}			
		}

		public function change($user_id, $name, $state, $city, $street, $number, $zip, $neighborhood, $complement, $whatsapp, $facebook, $instagram, $another_phone, $img)/*falta outros campos*/
		{
			
				$sql = $this->db->prepare('UPDATE users SET name = :name, img_profile = :img_profile WHERE id_user = :user_id');
				$sql->bindValue(':name', $name);
				$sql->bindValue(':img_profile', $img);
				$sql->bindValue(':user_id', $user_id);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	$return = $this->changeAddress($user_id, $state, $city, $street, $number, $zip, $neighborhood, $complement);
			    	if($return == false){
			    		return false;
			    	}
			    	$return = $this->changeSocialnformation($user_id, $facebook, $instagram, $whatsapp, $another_phone);
			    	if($return == false){
			    		return false;
			    	}else{
			    		return true;
			    	}
					
				}else{
					return false;
				}
			
		}

		public function changeAddress($id_user, $state, $city, $street, $number, $zip, $neighborhood, $complement)/*falta outros campos*/
		{
			
				$sql = $this->db->prepare('UPDATE address_admin SET state = :state, city = :city, street = :street, number_house = :number_house, zip = :zip, neighborhood = :neighborhood, complement = :complement WHERE user_id = :user_id');
				$sql->bindValue(':user_id', $id_user);
				$sql->bindValue(':state', $state);
				$sql->bindValue(':city', $city);
				$sql->bindValue(':street', $street);
				$sql->bindValue(':number_house', $number);
				$sql->bindValue(':zip', $zip);
				$sql->bindValue(':neighborhood', $neighborhood);
				$sql->bindValue(':complement', $complement);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
			    	
					
				}else{
					return false;
				}
			
		}

		public function changeSocialnformation($id_user, $facebook, $instagram, $whatsapp, $another_phone)/*falta outros campos*/
		{			
				$sql = $this->db->prepare('UPDATE social_information SET facebook = :facebook, instagram = :instagram, whatsapp = :whatsapp, another_phone = :another_phone WHERE user_id = :user_id)');
				$sql->bindValue(':user_id', $id_user);
				$sql->bindValue(':facebook', $facebook);
				$sql->bindValue(':instagram', $instagram);
				$sql->bindValue(':whatsapp', $whatsapp);
				$sql->bindValue(':another_phone', $another_phone);
			    $sql->execute();/*Retorna todos valores no campo params.*/
			    if ($sql->rowCount() > 0) {
			    	return true;
			    	
					
				}else{
					return false;
				}			
		}

		public function existing_email($email)
        {

            $sql = "SELECT * FROM users WHERE login = :login";
            $sql = $this->db->prepare($sql);
			$sql->bindValue(':login', $email);
			$sql->execute();

            return $sql->rowCount();
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