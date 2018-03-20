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

	<style type="text/css">
		.modal-body{
			padding:0;
		}

		.modal-header{
			padding:5px;
			background-color: rgb(0, 57, 51);
		}

		.modal-body img{
			width:100% !important;
			height:auto;
		}
	</style>

	<!-- CSS DA PAGINA -->

	<link rel="stylesheet" href="css/index.css">

	<link rel="stylesheet" href="css/fontes.css">



	<!-- RECAPTCHA -->

	<script src='https://www.google.com/recaptcha/api.js'></script>

	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112968251-3"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-112968251-3');
	</script>



</head>

	<div class="menu_mensagem">

		<!-- MENU Q APARARECE-RA DEPOIS Q ABAIXAR -->

		<div class="caixa_mensagem">
			<div class="fechar" onclick="fechaMensagem();">
				X
			</div>
			<p class="texto" style="width:100%;">
				Teste de mensagem de caixa mensagem
			</p>
		</div>

	</div>

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

				require('./php/db_connect.php');

			}else{

				//echo 'testte';

				$_POST['nome'] = '';

				$_POST['email'] = '';

				$_POST['telefone'] = '';

			}

		}

	?>




	<div class="menu_suspenso">
		<ul id="menu_suspenso_ul">
			<li  onmousedown="decideScroll('pagina_1');if(estado == 1){expande_contrai();}" >Home</li>
			<li  onmousedown="decideScroll('pagina_2');if(estado == 1){expande_contrai();}" >O Curso</li>
			<li  onmousedown="decideScroll('pagina_4');if(estado == 1){expande_contrai();}" >A Formação</li>
			<li  onmousedown="decideScroll('pagina_5');if(estado == 1){expande_contrai();}" >Por que Doracare</li>
			<li  onmousedown="decideScroll('pagina_6');if(estado == 1){expande_contrai();}" >Inscreva-se</li>
		</ul>
		<div class="expandir" onclick="expande_contrai();">
		</div>
	</div>






	<div class="pagina_1" id="pagina_1">

		<div class="header container">

			<div class="row">

				<div class="logo col-md-3 offset-md-1">

					<img src="imagens/logo.png">

				</div>



				<div class="menu col-lg-8">

						<ul>

							<li><a href="#" onclick="return false;"  onmousedown="decideScroll('pagina_1');" >Home</a></li>

							<li><a href="#" onclick="return false;"  onmousedown="decideScroll('pagina_2');" >O Curso</a></li>

							<li><a href="#" onclick="return false;"  onmousedown="decideScroll('pagina_4');">A Formação</a></li>

							<li><a href="#" onclick="return false;"  onmousedown="decideScroll('pagina_5');">Por que  Doracare</a></li>

							<li><a href="#" onclick="return false;"  onmousedown="decideScroll('pagina_6');">Inscreva-se</a></li>

						</ul>

				</div>

			</div>



			<div class="data_chamado">

				<div class="data">

					<img src="imagens/box_datas_descachezado2.png">

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

					<a class="inscreva_se" href="#"  onclick="return false;"  onmousedown="scrollBaixo('pagina_6');">
						INSCREVA-SE AQUI
					</a>

				</div>

			</div>

		</div>

		<div class="onda_maneira">

			<img src="imagens/onda_maneira.png">

		</div>

	</div>



	<div class="pagina_2" id="pagina_2">

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
		</div>

		<div class="full_cor" style="background-color: #f6f6f6;">
			<div class="container">
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

	</div>





	<div class="pagina_3" id="pagina_3">

		<img id="infografico" src="imagens/infografico.jpg">

	</div>



	<div class="pagina_4" id="pagina_4">

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



	<div class="pagina_5" id="pagina_5">

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

								Para acompanhar o mercado de trabalho o cuidador precisa de uma boa formação para ser valorizado.

							</p>

						</div>

					</div>



					<div class="row">

						<div class="box_2 col-md-6">

							<div class="box_2_img">

								<img src="imagens/box_2_3.png">

							</div>

							<h5>Conteúdos Técnicos e Comportamentais</h5>

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

								O banco de contatos poderá ser usado como guia para as nossas soluções em assessoria familiar e empresarial.

							</p>

						</div>



						<div class="box_2 col-md-6">

							<div class="box_2_img">

								<img src="imagens/box_2_6.png">

							</div>

							<h5>Aulas presenciais</h5>

							<p>

								Possibilitamos o uso de diferentes recursos pedagógicos para trasmitir o melhor aprendizado aos alunos.

							</p>

						</div>

					</div>

				<!--</div>

			</div>-->

		</div>

	</div>



	<div class="pagina_6" id="pagina_6">

		<div class="container">

			<div class="row">

				<div class="item_2 contato_esquerda col-md-6">

					<div class="container">
						<div class="row">
							<div class="col-md-12" style="margin:0; padding:0;">
								<h4>INSCREVA-SE AGORA!</h4>

								<p>Abrace uma nova carreira que esta surgindo no mercado.</p>

								<h3><span class="span">R$</span> 500<span class="span">,00</span></h3>
								<h3 style="font-size:19px; font-family: 'Lato-Thin';">em até <span style="font-weight:bold;">5x sem juros</span><br/> ou em até <span style="font-weight:bold;">18x</span> no cartão</h3>

								<div class="container">
									<div class="row">
										<div class="col-md-12" style="margin:0; padding:0;">
											<h6>FORMA DE PAGAMENTO</h6>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6" style="margin:0; padding:0;">
											<ul>
												<li>Cartão de Crédito</li>
												<li>Boleto bancário</li>
												<li>Transferência Bancária</li>
												<li>Bradesco e Itaú</li>
											</ul>
										</div>

										<div class="col-xs-6" style="margin:0; padding:0;">
											<img src="imagens/credit_card.png" style="width:100%;">
										</div>
									</div>

								</div>



							</div>
						</div>

						
					</div>


				</div>



				<div class="item_2 col-md-6">

					<h4>PREENCHA E CADASTRE-SE</h4>

					<form method="POST" action="index.php">



						<input type="text" class="input_2" name="nome" placeholder="seu nome">

						<input type="text" class="input_2" name="email" placeholder="seu e-mail">



						<input type="text" class="input_1" name="telefone"  id="telefone" placeholder="telefone">

						<textarea name="mensagem" class="input_1" placeholder="sua mensagem (opcional)"></textarea>



						<div style="display:block; text-align: right;" class="g-recaptcha" data-sitekey="6LdXGUIUAAAAAPGlSulFFcLO9LaBbQkR6JY1taG6"></div>



						<input type="submit" class="" name="enviar">

					</form>

				</div>

			</div>

			<div class="row">
					<div class="col-md-6">
						<div class="contato">

							<span class="span_icone">

								<table>

									<tr>

										<td><img class="icone" src="imagens/icone_telefone.png"></td>

										<td style="padding-left:9px; color:white !important; font-size:20px;" >0800 020-2851</td>

									</tr>



									<tr>

										<td><img class="icone" src="imagens/icone_mensagem.png"></td>

										<td style="padding-left:9px; font-size:20px; color:white;" >contato@doracare.com.br</td>

									</tr>

								</table>

							</span>

						</div>
					</div>
				</div>

		</div>




	</div>

	<div class="pagina_7" id="pagina_7">
		<div id="map"></div>
	    <script>
	      function initMap() {
	        var uluru = {lat: -23.601834, lng: -46.614189};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 15,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
	      }
	    </script>

		<script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8iKZ557Va1tthf6WNrNlMCfFzwWnPOLM&callback=initMap">
	    </script>
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

					<div class="row">
						<div class="col-md-12 credito" style="font-family: 'Lato-Thin';">
							<p style="text-align:center;color:#8c3638;margin-top:20px;">By:  <a href="http://www.yoagencia.digital" target="_blank">Yo Agência</a></p>
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

				//console.log('XABLAU --> ' + window.innerWidth);

				document.getElementById('infografico').setAttribute('src', 'imagens/infografico_mobile.jpg');
				document.getElementById('popup').setAttribute('src', 'imagens/Doracare_Evento_Pop-up_mobile.jpg');
			}else if(innerWidth < 600){

				document.getElementById('infografico').setAttribute('src', 'imagens/infografico_mobile_mobile.jpg');
				document.getElementById('popup').setAttribute('src', 'imagens/Doracare_Evento_Pop-up_mobile.jpg');

			}else{
				document.getElementById('infografico').setAttribute('src', 'imagens/infografico.jpg');
				document.getElementById('popup').setAttribute('src', 'imagens/Doracare_Evento_Pop-up_Desktop.jpg');
			}



			if(innerWidth < 769){

				document.getElementsByClassName('coracao')[0].style.display ="none";

				document.getElementsByClassName('icone_coracao')[0].style.display = "block";

			}else{

				document.getElementsByClassName('coracao')[0].style.display = "block";

				document.getElementsByClassName('icone_coracao')[0].style.display ="none";

			}

		}


		if(innerWidth > 900){
			document.getElementsByClassName('menu_suspenso')[0].style.top = "-50px";
		}else{
			document.getElementsByClassName('menu_suspenso')[0].style.top = "-80px";
		}



		window.addEventListener('resize', checaWidth);
		window.addEventListener('scroll', function(e) {
			//console.log(window.pageYOffset);

			//Tratamento de scrollagem

			if(window.pageYOffset > ( document.getElementById('pagina_2').offsetTop - 300) ){
				if(document.getElementsByClassName('menu_suspenso')[0].style.top != '0px'){
					document.getElementsByClassName('menu_suspenso')[0].style.top = "0px";
					if(clicado == 1){
						estado = 1;
					}
					if(innerWidth > 900){
						document.getElementById('menu_suspenso_ul').style.display = "block";
					}
				}
				//console.log('TOPSTER');
			}else{
				if(document.getElementsByClassName('menu_suspenso')[0].style.top != '-50px' || document.getElementsByClassName('menu_suspenso')[0].style.top != '-80px'){
					if(innerWidth > 900){
						document.getElementsByClassName('menu_suspenso')[0].style.top = "-50px";
						document.getElementById('menu_suspenso_ul').style.display = "none";
					}else{
						document.getElementsByClassName('menu_suspenso')[0].style.top = "-80px";
						document.getElementById('menu_suspenso_ul').style.display = "none";
						//console.log('-80px');
					}
					estado = 0;
				}
			}
		});

		checaWidth();

	</script>

	<script type="text/javascript">
		//Script de rolagem automatica

		var scrollY = 0;
		var distance = 40;
		var speed = 24;
		var iteracoes = 0;

		function decideScroll(el){
			if(window.pageYOffset <= document.getElementById(el).offsetTop){
				scrollBaixo(el);
			}else{
				scrollCima(el)
			}
		}

		function scrollBaixo(el) {
			//console.log('oi');
			iteracoes++;
			var currentY = window.pageYOffset;
			var targetY = document.getElementById(el).offsetTop - 50;
			var bodyHeight = document.body.offsetHeight;
			var yPos = currentY + window.innerHeight;

			var animator = setTimeout('scrollBaixo(\''+el+'\')',24);
			if(iteracoes > 1000){
				iteracoes = 0;
				clearTimeout(animator);
			}else if(yPos > document.body.scrollHeight){
				//console.log('acabou a brincadeira');
				clearTimeout(animator);
			}else {
				if(currentY < targetY-distance){
					//console.log('oinenem');
				    scrollY = currentY+distance;
				    window.scroll(0, scrollY);
			    } else {
			    	//console.log('erro clear');
				    clearTimeout(animator);
			    }
			}
		}

		function scrollCima(el){
			//console.log('oi');
			iteracoes++;

			var currentY = window.pageYOffset;
			var targetY = document.getElementById(el).offsetTop - 50;
			var bodyHeight = document.body.offsetHeight;
			var yPos = currentY + window.innerHeight;

			var animator = setTimeout('scrollCima(\''+el+'\')',24);
			if(iteracoes > 1000){
				iteracoes = 0;
				clearTimeout(animator);
			}else if(window.pageYOffset <= 0){
				//console.log('acabou a brincadeira');
				clearTimeout(animator);
			} else {
				if(currentY > targetY-distance){
					//console.log('oinenem');
				    scrollY = currentY-distance;
				    window.scroll(0, scrollY);
			    } else {
			    	//console.log('erro clear');
				    clearTimeout(animator);
			    }
			}
		}


	</script>
	<script type="text/javascript">
		function fechaMensagem(){
			document.getElementsByClassName('menu_mensagem')[0].style.display = "none";
			document.location = "http://doracare.com.br/sejaumcuidador/";
		}

		var estado = 0;
		var clicado = 0;

		function expande_contrai(){
			if(innerWidth < 900){
				clicado = 1;
				if(estado == 0){
					document.getElementById('menu_suspenso_ul').style.display = "block";
					estado = 1;
				}else{
					document.getElementById('menu_suspenso_ul').style.display = "none";
					estado = 0;
				}
			}
		}
	</script>


	<!-- Carregando arquivos javscrípt -->
	<script>
		//Condição para caso seja iphone
		var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);

		if(iOS && window.innerWidth < 500){
			document.getElementById('pagina_1').style.backgroundImage  = "url('imagens/bg_doracare_2.jpg')";
			document.getElementById('pagina_1').style.background = "url('imagens/bg_doracare_2.jpg')";
			document.getElementById('pagina_1').style.backgroundRepeat = "no-repeat";
			document.getElementById('pagina_1').style.backgroundSize = "100% 100%";
		}

		function teste(){
			document.getElementById('pagina_1').style.backgroundImage  = "url('imagens/bg_doracare_2.jpg')";
			document.getElementById('pagina_1').style.background = "url('imagens/bg_doracare_2.jpg')";
			document.getElementById('pagina_1').style.backgroundRepeat = "no-repeat";
			document.getElementById('pagina_1').style.backgroundSize = "100% 100%";
		}
	</script>


	<!-- CDN da da google do jquery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- Bootstrap & Jquery LOCAL -->

	<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>


    <!--  JQUERY MASK -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>


    <script type="text/javascript">
    	//Mascara para celular
		$("#telefone").mask("(99) 9999-99999"); 
    </script>
    <script type="text/javascript">
		$(document).ready(function () {

		    $('#myModal').modal('show');

		});
    </script>
</body>

</html>