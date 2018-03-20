<?php
ini_set('error_reporting', E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Curso DoraCare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<meta charset="UTF-8">

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="imagens/favicon.png">

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- CSS DA PAGINA -->
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/fontes.css">

	<!-- RECAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<script id="navegg" type="text/javascript">

	(function(n,v,g){o="Navegg";if(!n[o]){
	a=v.createElement('script');a.src=g;b=document.getElementsByTagName('script')[0];
	b.parentNode.insertBefore(a,b);n[o]=n[o]||function(parms){
	n[o].q=n[o].q||[];n[o].q.push([this, parms])};}})
	(window, document, 'https://tag.navdmp.com/universal.min.js');
	window.naveggReady = window.naveggReady||[];
	nvg49640 = new Navegg({
	acc: 49640
	});
	</script>

</head>
<body>
	<?php
	// Same as error_reporting(E_ALL);
	

	//echo 'oipessoal';
	//echo 'hehe';
		if(isset($_POST['enviar'])){
			//echo 'nelsond';
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$mensagem = $_POST['mensagem'];

			if(!empty($nome) && !empty($email) && !empty($telefone) && isset($_POST['g-recaptcha-response'])){
				//echo 'schulepes';
				$captcha_data = $_POST['g-recaptcha-response'];
				//echo 'johnspn';
				//echo $_SERVER['DOCUMENT_ROOT'];
				require('./php/teste.php');
			}else{
				//echo 'testte';
				$_POST['nome'] = '';
				$_POST['email'] = '';
				$_POST['telefone'] = '';
			}
		}
	?>

	<div class="menu_topo">
		<!-- MENU Q APARARECE-RA DEPOIS Q ABAIXAR -->
	</div>


	<div class="pagina_1">
		<div class="header container">
			<div class="row">
				<div class="logo col-md-3 offset-md-1">
					<img src="imagens/logo.png">
				</div>

				<div class="menu col-lg-8">
						<ul>
							<li><a href="">Homed</a></li>
							<li><a href="">O Curso</a></li>
							<li><a href="">A Formação</a></li>
							<li><a href="">Por que  Doracare</a></li>
							<li><a href="">Increva-se</a></li>
						</ul>
				</div>
			</div>

			<div class="data_chamado">
				<div class="data">
					<img src="imagens/box_datas.png">
				</div>
			</div>
			<div class="data_chamado_2">
				<div class="chamado">
					<h3>
						SEJA UM CUIDADOR DORACARE E ESTEJA PREPARADO PARA O MERCADO DE TRABALHO
					</h3>
					<h4>
						Matricule-se para o curso e tenha toda a preparação para se tornar um profissional qualificado.
					</h4>
					<a class="inscreva_se" href="#">
						INSCREVA-SE AQUI
					</a>
				</div>
			</div>
		</div>
		<div class="onda_maneira">
			<img src="imagens/onda_maneira.png">
		</div>
	</div>

	<div class="pagina_2">
		<div class="sobre_curso container">
			<div class="sinopse row">
				<div class="item_1 col-md-12">
					<h4>O CURSO</h4>
					<div class="texto">
						<p>
							No Brasil houve uma rápida expansão da expectativa de vida e envelhecimento
							da população. Em 2027, podemos chegar a 38 milhões de idosos, esses dados
							revelam a necessidade de formar profissionais qualificados para atender a um público que não para de aumentar.
						</p>

						<p>
							A Doracare desenvolveu o curso de cuidador para pessoas que queiram abraçar
							uma nova carreira. Serão dois finais de semana de Fevereiro para você dominar
							as principais funções. da profissão e lidar com o dia a dia do idoso. 
						</p>
					</div>

					<img src="imagens/bola_redonda_oval.png">

					<span class="texto_2">Aproveite a oportunidade de se especializar e se inserir neste novo mercado de trabalho.</span>
					<div style="clear:both"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="row">
						<div class="box_3 col-md-4">
							<img src="imagens/box_3_1.png">
							<h5>32 horas de curso</h5>
							<p>
								Serão dois finais de semana com estudo presencial com apostila.
							</p>
						</div>

						<div class="box_3 col-md-4">
							<img src="imagens/box_3_2.png">
							<h5>Professores qualificados</h5>
							<p>
								Temos um time de profissionais composto por enfermeiros, assistentes sociais e psicólogos que desenvolveram o conteúdo das aulas.
							</p>
						</div>

						<div class="box_3 col-md-4">
							<img src="imagens/box_3_3.png">
							<h5>Certificado Doracare</h5>
							<p>
								Ao final do curso o participante receberá o seu certificado e poderá entrar para nossa base de contatos.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="pagina_3">
		<img id="infografico" src="imagens/infografico.jpg">
	</div>

	<div class="pagina_4">
		<div class="coracao">
			<img src="imagens/pagina_4_coracao.png">
		</div>
		<div class="container">
			<div class="row">
				<div class="titulo col-md-12">
					<h4>A FORMAÇÃO</h4>
				</div>
			</div>

			<div class="row">
				<div class="icone_coracao col-md-12">
					<img src="imagens/pagina_4_coracao.png">
				</div>
			</div>

			<div class="row">
				<div class="formacao_lista col-md-4">
					<ul>
						<li>Fisiologia do envelhecimento</li>
						<li>Tratamento do idoso independente</li>
						<li>Cuidados da alimentação e higiene oral</li>
						<li>
							Uso de sondas e Ostomias Transferências
							(cama, cadeira de rodas e mudança de posição)
						</li>
						<li>Sessão de atendimento para dúvidas</li>
					</ul>
				</div>

				<div class="col-md-4">
				</div>

				<div class="formacao_lista col-md-4">
					<ul>
						<li>Aula prática com manequins para aplicação de técnica de primeiros socorros</li>
						<li>Prevenção de quedas</li>
						<li>Principais doenças</li>
						<li>Aspectos comportamentais
						(ética e valorização, relacionamento com a família, legislação e estatuto do idoso)</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="pagina_5">
		<div class="container">
			<div class="row">
				<div class="porque_doracare col-md-12">
					<h4>POR QUE ESCOLHER A DORACARE?</h4>
				</div>
			</div>
			<!--<div class="row">
				<div class="col-md-8 offset-md-2">-->
					<div class="row">
						<div class="box_2 col-md-6">
							<div class="box_2_img">
								<img src="imagens/box_2_1.png">
							</div>
							<h5>Professores qualificados</h5>
							<p>
								Equipe técnica responsável por transferir nosso métodos e valores.
							</p>
						</div>

						<div class="box_2 col-md-6">
							<div class="box_2_img">
								<img src="imagens/box_2_2.png">
							</div>
							<h5>Valorização da carreira</h5>
							<p>
								Para companhar o mercado de trabalho o cuidador precisa de uma boa formação para ser valorizado.
							</p>
						</div>
					</div>

					<div class="row">
						<div class="box_2 col-md-6">
							<div class="box_2_img">
								<img src="imagens/box_2_3.png">
							</div>
							<h5>Conteúdos técnicos e compartamentais</h5>
							<p>
								Nossa metodologia prepara o aluno para cuidar do 
								idoso de forma integral, reforçando o atendimento 
								humanizado. Além da base técnica, o cuidador deve 
								ter sensibilidade para contribuir com o seu bem estar.
							</p>
						</div>

						<div class="box_2 col-md-6">
							<div class="box_2_img">
								<img src="imagens/box_2_4.png">
							</div>
							<h5>Certificado de Conclusão de Curso</h5>
							<p>
								O certificado Doracare comprova sua frequência de aula e seu conhecimento sobre o assunto estudado.
							</p>
						</div>
					</div>

					<div class="row">
						<div class="box_2 col-md-6">
							<div class="box_2_img">
								<img src="imagens/box_2_5.png">
							</div>
							<h5>Entrar para a base de contatos Doracare</h5>
							<p>
								O banco de contatos poderá ser usado como guia para as nossas soluções em assesoria familiar e empresarial.
							</p>
						</div>

						<div class="box_2 col-md-6">
							<div class="box_2_img">
								<img src="imagens/box_2_6.png">
							</div>
							<h5>Aulas presenciasi</h5>
							<p>
								Possibilitamos o uso de diferentes recursos pedagógicos para trasmitir o melhor aprendizado aos alunos.
							</p>
						</div>
					</div>
				<!--</div>
			</div>-->
		</div>
	</div>

	<div class="pagina_6">
		<div class="container">
			<div class="row">
				<div class="item_2 col-md-6">
					<h4>INSCREVA-SE AGORA!</h4>
					<p>Abrace uma nova carreira que esta surgindo no mercado.</p>

					<div class="contato">
						<span class="span_icone">
							<table>
								<tr>
									<td><img class="icone" src="imagens/icone_telefone.png"></td>
									<td>0800 020-2851</td>
								</tr>

								<tr>
									<td><img class="icone" src="imagens/icone_mensagem.png"></td>
									<td>contato@doracare.com.br</td>
								</tr>
							</table>
						</span>
					</div>
				</div>

				<div class="item_2 col-md-6">
					<h4>PREENCHA E CADASTRE-SE</h4>
					<form method="POST" action="index.php">

						<input type="text" class="input_2" name="nome" placeholder="seu nome">
						<input type="text" class="input_2" name="email" placeholder="seu e-mail">

						<input type="text" class="input_1" name="telefone" placeholder="telefone">
						<textarea name="mensagem" class="input_1" placeholder="sua mensagem (opcional)"></textarea>

						<div style="display:block; text-align: right;" class="g-recaptcha" data-sitekey="6LdXGUIUAAAAAPGlSulFFcLO9LaBbQkR6JY1taG6"></div>

						<input type="submit" class="" name="enviar">
					</form>
				</div>
			</div>
		</div>

		<div class="triangulo">
			<img src="imagens/triangulo.png">
		</div>
	</div>

	<div class="rodape">
		<div class="container">
			<div class="row">
				<div class="rodape_item col-md-12">
					<div class="row">
						<div class="direitos col-md-6">
							Copyright 2018 Doracare. Todos direitos reservados.
						</div>

						<div class="icones_rodape col-md-6">
							<a href="https://www.facebook.com/CuidecomDoraCare/" target="_blank" ><img src="imagens/icone_facebook.png"></a>
							<a href=""><img src="imagens/icone_linkedin.png"></a>
							<a href=""><img src="imagens/icone_instagram.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- SCRIPT PESSOAL -->
	<script type="text/javascript">
		function checaWidth(){
			if(innerWidth < 900 && innerWidth > 600){
				console.log('XABLAU --> ' + window.innerWidth);
				document.getElementById('infografico').setAttribute('src', 'imagens/infografico_mobile.jpg');
			}else if(innerWidth < 600){
				document.getElementById('infografico').setAttribute('src', 'imagens/infografico_mobile_mobile.jpg');
			}else{
				document.getElementById('infografico').setAttribute('src', 'imagens/infografico.jpg');
			}

			if(innerWidth < 769){
				document.getElementsByClassName('coracao')[0].style.display ="none";
				document.getElementsByClassName('icone_coracao')[0].style.display = "block";
			}else{
				document.getElementsByClassName('coracao')[0].style.display = "block";
				document.getElementsByClassName('icone_coracao')[0].style.display ="none";
			}
		}

		window.addEventListener('resize', checaWidth);
		checaWidth();
	</script>

	<!-- Carregando arquivos javscrípt -->

	<!-- CDN da da google do jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap & Jquery LOCAL -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>