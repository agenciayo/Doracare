<?php 

	//'echo' 'BOBESPONJAs';

	//echo 'salvi';

	

	$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdXGUIUAAAAAA1ywcT9WBHsF6RU_kx4YUWEG6Gm&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);



	//echo $resposta;

	//echo '<br/><br/><br/>';



	$jsonData = stripslashes(html_entity_decode($resposta));





	$resposta = json_decode($jsonData, true);



	//echo $resposta["success"] . 'oi';



	//var_dump($resposta);

	//echo $resposta->success;



	//echo '<br/><br/>resposta:';

	//echo $resposta['success'];

	//echo '<br/><br/>';





	if(intval($resposta["success"]) == true) {

		//echo 'oihehe';

		//echo $_SERVER['DOCUMENT_ROOT'];

	    //echo '<script>alert("Mensagem enviada com sucesso! Entraremos em contato.")</script>';



	    	/* COMEÇO DO SCRIPT DE INSERÇÃO NO VANCO DE DADOS DA MENSAGEM DO USUARIO*/



			$servername = "localhost";

			$username = "curso_dora";

			$password = "ara2817";

			$dbname = "curso_dora_care";



			//Tudo ja foi verifiado, prosseguir com inserção



		    // Your code here to handle a successful verification

		try {
			$servername = "160.153.57.133";
			$username = "curso_dora";
			$password = "ara2817";
			$dbname = "curso_dora_care";
			
			  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			   
			  $stmt = $pdo->prepare("INSERT INTO inscr_dora (nome, email, telefone, mensagem)VALUES(:name, :email, :telefone, :mensagem)");

			  $stmt->bindParam(':name', $nome);
			  $stmt->bindParam(':email', $email);
			  $stmt->bindParam(':telefone', $telefone);
			  $stmt->bindParam(':mensagem', $mensagem);

			  //$nome = "Gustavo Sales";
			  //$email = "gustavo@yoagencia.digital";
			  //$telefone = "11 985-595-639";
			  //$mensagem = "Olá, meu nome é Gustavo Sales de Melo Miranda e eu adoraria participar do curso de idosos doracare.";
			  //Enviar os dados agora escritos

			  //echo $stmt->rowCount(); 
			  //echo '<script>alert("Mensagem enviada com sucesso, entraremos em contato em alguns dias.");</script>';

			  echo '<script>';
			  	echo "document.getElementsByClassName('menu_mensagem')[0].style.display = 'block';";

			  	echo "document.getElementsByClassName('caixa_mensagem')[0].getElementsByClassName('texto')[0].innerHTML = 'Mensagem enviada com sucesso, em breve entraremos em contato.';";
			  echo '</script>';

			  $stmt->execute();
			   
			  //echo $stmt->rowCount();

			}catch(PDOException $e) {
				//echo '<script>alert("' . $e->getMessage() . 'Erro ao processar solicitação, entre em contato com contato@doracare.com.br ou ligue 0800 020-2851..");</script>';

			  echo '<script>';
			  	echo "document.getElementsByClassName('menu_mensagem')[0].style.display = 'block';";

			  	echo "document.getElementsByClassName('caixa_mensagem')[0].getElementsByClassName('texto')[0].innerHTML = 'Erro ao processar solicitação, entre em contato com contato@doracare.com.br ou ligue 0800 020-2851.';";
			  echo '</script>';


			  //echo 'Error: ' . $e->getMessage();
			}

	} else {

	    //echo '<script>alert("Erro ao verificar código de segurança, tente novamente.");</script>';

	    echo '<script>';
		  	echo "document.getElementsByClassName('menu_mensagem')[0].style.display = 'block';";

		  	echo "document.getElementsByClassName('caixa_mensagem')[0].getElementsByClassName('texto')[0].innerHTML = 'Erro ao verificar código de segurança, tente novamente.';";
		echo '</script>';



	}

?>