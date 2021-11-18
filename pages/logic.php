<?php

session_set_cookie_params( ["samesite" =>"Strict"]);
session_name("sienna"); // changement du nom de cookie de session
session_start();


	class Logic{
	  public function __construct(){
	  }

		public function cleanUserInput($input) { // Netoyage des inputs de l'utilisateur
			$utf8 = array(
			'/[áàâãªä]/u'   =>   'a',
			'/[ÁÀÂÃÄ]/u'    =>   'A',
			'/[ÍÌÎÏ]/u'     =>   'I',
			'/[íìîï]/u'     =>   'i',
			'/[éèêë]/u'     =>   'e',
			'/[ÉÈÊË]/u'     =>   'E',
			'/[óòôõºö]/u'   =>   'o',
			'/[ÓÒÔÕÖ]/u'    =>   'O',
			'/[úùûü]/u'     =>   'u',
			'/[ÚÙÛÜ]/u'     =>   'U',
			'/ç/'           =>   'c',
			'/Ç/'           =>   'C',
			'/ñ/'           =>   'n',
			'/Ñ/'           =>   'N',
			'/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
			'/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
			'/[“”«»„]/u'    =>   ' ', // Double quote
			'/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
			);
			$clean_inmput = preg_replace(array_keys($utf8), array_values($utf8), $input);
	    $clean_inmput = trim($clean_inmput);
	    $clean_inmput = stripslashes($clean_inmput);
	    $clean_inmput = htmlspecialchars($clean_inmput);
	    return $clean_inmput;
	  } // Fin FCT cleanUserInput()

		public function authentication($username, $passwd){ // authentification de l'utilisateur
			$login_accounts = array(
				array(
				'credential_username' => 'Hadrien',
				'credential_password' => '$2y$10$EX3.NXCjh.LN3RiIw3kJkOuU19LsqZv1lm2j3B4M11ftpENGajw6e',
				'credential_status' => 'admin',
				)
			);
			foreach($login_accounts as $key => $tab){
				$actual_username = $tab['credential_username'];
				$actual_passwd = $tab['credential_password'];
				if(($username === $actual_username) && password_verify($passwd, $actual_passwd)){
					$_SESSION["user"] = $tab; // création de la session avec les données de l'utilisateur
					header("Location: account.php");
					}
				else{
					echo "Authentication Failed";
					$this->disconnectUser();
				}
			}
		} // Fin FCT authentication()

		public function disconnectUser(){ //méthode déconnexion utilisateur
			unset($_SESSION["user"]);
			session_destroy();   // destroy session data in storage
		} // Fin FCT disconnectUser()

		public function orderCreation($organization, $name, $address, $email, $mixed_field, $priority){
			$order_date = date('H:i d/m/Y');
			$order_number = rand(1000000000,9999999999);
			$contact_id = 'Organization : ' . $organization . '<br>' . 'Name : ' . $name . '<br>' . 'Address  : ' . $address . '<br>' . 'Email Address  : ' . $email . '<br>';
			$additional_information = "Device type/Archiving time : " . $mixed_field . '<br>' . "Priority : " . $priority;
			$order_id = $order_date . " - " . $order_number . '<br>' . $contact_id . $additional_information;

			$to = "hadrien.paris@icloud.com"; // remplissage des fields du mails
			$subject = "Order " . $order_number . " - " . $order_date;
			$txt = $order_id;
			$headers = "From: orders_scheduler@sienna.com";

			mail($to,$subject,$txt,$headers); // Envoi du mail

			header('Location: status.php'); // changement de la page

		} // Fin FCT authentication()

		public function getDayTime(){
			$time = date('H');// return current hour
			if($time >= 6 && $time <= 12){
				return "Good morning ";
			}
			else if($time >= 13 && $time <= 17){
				return "Good afternoon ";
			}
			else if($time >= 18 && $time <= 22){
				return "Good evening ";
			}
			else{
				return "Hi ";
			}
		} // end fct getDayTime()

		public function connectDB(){
  		$host = '127.0.0.1';
  		$db   = 'TW3_SQL';
  		$user = 'root';
  		$pass = 'H@drien3177';
  		$charset = 'utf8mb4';
  		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  		$options = [
  		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  		PDO::ATTR_EMULATE_PREPARES   => false,
  		];
  		$pdo = new PDO($dsn, $user, $pass, $options);
  		return $pdo;
		}

		public function retrieveDataFromDB(){

		  $request = 'SELECT * FROM jesmonite';
		  $stmt = $pdo->query($request);
		  $tableau = $stmt->fetchAll();
		  foreach($tableau as $ligne){
		    $id = $ligne['id'];
		    $name = $ligne['name'];
		    $type = $ligne['type'];
		    $color = $ligne['color'];
		    $shape = $ligne['shape'];
		    echo "<pre>" .  $id . "\n" .  $name . "\n" . $type . "\n" . $color . "\n" . $shape . "\n" . "</pre>";
		  }
		}

		public function insertDataIntoDB($id, $name, $type, $color, $shape){
		  $request = "INSERT INTO jesmonite VALUES (id=:id, name=:name, type=:type, color=:color, shape=:shape);";
		  $stmt = $this->connectDB()->prepare($request);
		  $data = array(':id'=> intval($id),':name' => $name, ':type' => $type, ':color' => $color, ':shape' => $shape);
		  $stmt->execute($data);
		}

	} // End class Logic



	/*
	$dsn = "mysql:host=mysql.info.unicaen.fr;dbname=21903445_bd;charset=utf8mb4";
	$user = "21903445";
	$pass = "gah9iechai8eiCho";
	$connexion_bd = new PDO($dsn, $user, $pass);

	$enc_pass = password_hash($submitted_pass, PASSWORD_BCRYPT);

	echo shell_exec(escapeshellcmd('ls')); // Permet d'éxécuter des commandes Shell

	<script>
		let saveFile = () => {
			const company_name = document.getElementById("company_name");
			const name = document.getElementById("name");
			const adress = document.getElementById("adress");
			const email = document.getElementById("email");
			const country = document.getElementById("country_list");
			const devices = document.getElementById("devices");
			const amount = document.getElementById("amount");
			const plan = document.getElementById("plan_list");
			var today = new Date();
			var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
			const random_id = "Recovery" + '-' + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9);
			const form_id = date + '-' + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9) + Math.floor(Math.random() * 9);
			let data ='Form ID: ' + random_id + '\n' +'Order ID: ' + form_id + '\n' +'Company Name: ' + company_name.value + '\n' +'Name: ' + name.value + '\n' +'Adress: ' + adress.value + '\n' +'Email adress: ' + email.value + '\n' +'Country: ' + country.value + '\n' +'Type of devices : ' + devices.value + '\n' +'Data quantity (in Gb) : ' + amount.value + '\n' +'Priority: ' + plan.value;
			const textToBLOB = new Blob([data], {
				 type: 'text/plain'
			});
			const sFileName = 'RecoveryForm.txt';
			let newLink = document.createElement("a");
			newLink.download = sFileName;
			if (window.webkitURL != null) {
				newLink.href = window.webkitURL.createObjectURL(textToBLOB);
			}
			else {
				newLink.href = window.URL.createObjectURL(textToBLOB);
				newLink.style.display = "none";
				document.body.appendChild(newLink);
			}
			newLink.click();
			if (plan.value == 'Basic') {
				console.log("Basic");
			}
			if (plan.value == 'Express') {
				console.log("Express");
			}
			if (plan.value == 'Crucial') {
				console.log("Crucial");
			}
		}
	</script>


	if(basename(__FILE__) === 'index.php') {
		header("Location: pages/authentication.php");
	}
	else {
		header("Location: authentication.php");
	}
	*/

?>
