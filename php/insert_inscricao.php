<?php 
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

	  $nome = "Gustavo Sales";
	  $email = "gustavo@yoagencia.digital";
	  $telefone = "11 985-595-639";
	  $mensagem = "Olá, meu nome é Gustavo Sales de Melo Miranda e eu adoraria participar do curso de idosos doracare.";
	  //Enviar os dados agora escritos

	  echo $stmt->rowCount(); 
	  echo '<script>alert("Mensagem enviada com sucesso, entraremos em contato em alguns dias.");</script>';
	  $stmt->execute();
	   
	  echo $stmt->rowCount();

	}catch(PDOException $e) {
		echo '<script>alert("' . $e->getMessage() . 'Erro ao processar solicitação, entre em contato com contato@doracare.com.br ou ligue 0800 020-2851.");</script>';
	  //echo 'Error: ' . $e->getMessage();
	}
?>