<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/magic-input.min.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/flickity.css">
</head>
<body style="background-color: #FBFBFB">
	<section style="background-color: #ffff" class="position-raltive d-none d-lg-block secc_nav">
		<div class="container-fluid px-5" style="height: 100%;">
			<div class="div_nav_home d-flex justify-content-between align-items-center position-raltive" style="height: 100%;">
				<a href="">
					<img src="/assets-web/img/logo_bandera.png" class="logo_menu_blanco">
				</a>
				<div class="div_list_home left_menu_blanco">
					<ul style="list-style-type: none;" class="pl-0 d-flex align-items-center mb-0">
						<li class="mr-5">
							<a href="" class="link_menu_home">Search</a>
						</li>
						<li class="mr-5">
							<a href="" class="link_menu_home">Inbox</a>
						</li>
						<li class="mr-5">
							<a href="" class="link_menu_home">Get lucky</a>
						</li>
						<li class="">
							<a href="" class="link_menu_home">FAQ</a>
						</li>
					</ul>
				</div>
				<div class="d-flex align-items-center justify-content-end">
					<a href="" class="btn btn_upgrade">Upgrade me</a>
					<p class="my-0 p_credits_number mx-5">Credits: 43</p>
					<div class="div_img_circulo">
						<img src="/assets-web/img/Elipse1.png" class="img_circulo_nav">
					</div>
					<button class="btn_x_nav ml-2">
						<i class="fas fa-angle-down" id="iconcambio"></i>
					</button>
				</div>
			</div>
		</div>
		<div class="div_blanco_drow px-4 py-3">
			<ul class="pl-0" style="list-style-type: none;">
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/8WnFDu.tif.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">Inbox</a></li>
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/Grupo501.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">Favorites</a></li>
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/pORCY6.tif.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">My profile</a></li>
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/sSw9vi.tif.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">Settings</a></li>
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/Grupo652.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">FAQ’s</a></li>
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/Grupo497.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">How it works</a></li>
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/Trazado277.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">Get free credits</a></li>
				<li class="list_drow py-2 d-flex align-items-center"><img src="/assets-web/img/Grupo494.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">Get a plan</a></li>
				<li class="list_drow_top py-2 d-flex align-items-center"><img src="/assets-web/img/wDO3W4.tif.png" width="14px" class="mr-3"><a href="" class="link_menu_home mt-1">Log out</a></li>
			</ul>
		</div>
	</section>
	<section class="altura_seccion position-relative">
		<div class="container-fluid px-0">
			<div class="row m-0 justify-content-end position-relative" style="background-color: #ffff">
				<div class="col-9 px-0 d-flex justify-content-start flex-wrap">
					<div class="btn-group btn-group-toggle justify-content-start" data-toggle="buttons">
					  <label class="btn btn_blanco_inbox py-2 altura_igual_inbox active">
					    <input type="radio" name="options" id="option1" checked>
					    <i class="far fa-envelope mr-2 icon_size"></i>
					    All conversations
					    <span class="badge badge_inbox ml-2">12</span>
					  </label>
					  <label class="btn btn_blanco_inbox py-2 altura_igual_inbox">
					    <input type="radio" name="options" id="option2">
					     <i class="far fa-envelope mr-2 icon_size"></i>
					    Unopened
					    <span class="badge badge_inbox ml-2">12</span>
					  </label>
					  <label class="btn btn_blanco_inbox py-2 altura_igual_inbox">
					    <input type="radio" name="options" id="option3">
					    <i class="far fa-star mr-2 icon_size"></i>
					    Favorites
					    <span class="badge badge_inbox ml-2">9</span>
					  </label>
				      <label class="btn btn_blanco_inbox py-2 altura_igual_inbox">
					    <input type="radio" name="options" id="option3">
					     <i class="fas fa-ban mr-2 icon_size"></i>
					    Ignored
					  </label>
					  <label class="btn btn_blanco_inbox_credit py-2 altura_igual_inbox">
					    <input type="radio" name="options" id="option3">
					    Credits left: 6
					  </label>
					</div>
					<button class="btn_close_inbox"><i class="fas fa-times icon_size"></i></button>
				</div>
				<div class="col-12 px-0">
					<div class="row m-0">
						<div class="col-3 px-0">
							<div class="altura_iguales_envio">
								<div class="px-3 py-4">
									<div class="d-flex align-items-center py-1 div_buscador_inbox px-3 justify-content-between flex-wrap">
										<input type="text" name="" placeholder="Search for a sugar user" class="input_serach_inbox">
										<button class="btn_buscador_inbox pr-0"><i class="fas fa-search"></i></button>
									</div>
								</div>
								<div class="div_datos_img_card">
									<div class="d-flex flex-wrap align-items-center px-3 py-2 div_activo_inbox">
										<div class="div_img_ibox">
											<img src="/assets-web/img/Rectángulo17175.png" class="img_inbox_radius">
										</div>
										<div class="div_datos_inbox pl-3">
											<h6 class="h6_nombre_inbox">Linda, 22</h6>
											<p class="p_drescipcion_inbox mb-0">Lorem ipsum dolor sit amet, consetetur.</p>
										</div>
										<div class="linea_acitvo_inbox"></div>
									</div> 
									<div class="d-flex flex-wrap align-items-center px-3 py-2">
										<div class="div_img_ibox">
											<img src="/assets-web/img/Rectángulo17175.png" class="img_inbox_radius">
										</div>
										<div class="div_datos_inbox pl-3">
											<h6 class="h6_nombre_inbox">Linda, 22</h6>
											<p class="p_drescipcion_inbox mb-0">Lorem ipsum dolor sit amet, consetetur.</p>
										</div>
									</div>
									<div class="d-flex flex-wrap align-items-center px-3 py-2">
										<div class="div_img_ibox">
											<img src="/assets-web/img/Rectángulo17175.png" class="img_inbox_radius">
										</div>
										<div class="div_datos_inbox pl-3">
											<h6 class="h6_nombre_inbox">Linda, 22</h6>
											<p class="p_drescipcion_inbox mb-0">Lorem ipsum dolor sit amet, consetetur.</p>
										</div>
									</div>
									<div class="d-flex flex-wrap align-items-center px-3 py-2">
										<div class="div_img_ibox">
											<img src="/assets-web/img/Rectángulo17175.png" class="img_inbox_radius">
										</div>
										<div class="div_datos_inbox pl-3">
											<h6 class="h6_nombre_inbox">Linda, 22</h6>
											<p class="p_drescipcion_inbox mb-0">Lorem ipsum dolor sit amet, consetetur.</p>
										</div>
									</div>
									<div class="d-flex flex-wrap align-items-center px-3 py-2">
										<div class="div_img_ibox">
											<img src="/assets-web/img/Rectángulo17175.png" class="img_inbox_radius">
										</div>
										<div class="div_datos_inbox pl-3">
											<h6 class="h6_nombre_inbox">Linda, 22</h6>
											<p class="p_drescipcion_inbox mb-0">Lorem ipsum dolor sit amet, consetetur.</p>
										</div>
									</div>
									<div class="d-flex flex-wrap align-items-center px-3 py-2">
										<div class="div_img_ibox">
											<img src="/assets-web/img/Rectángulo17175.png" class="img_inbox_radius">
										</div>
										<div class="div_datos_inbox pl-3">
											<h6 class="h6_nombre_inbox">Linda, 22</h6>
											<p class="p_drescipcion_inbox mb-0">Lorem ipsum dolor sit amet, consetetur.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-9 px-0">
							<div class="px-3 d-flex flex-wrap justify-content-between  altura_iguales_envio div_chats_scrool position-relative">
								<div class="d-flex flex-wrap div_mitad_inbox">
									<div class="div_circulo_inbox">
										<img src="/assets-web/img/Elipse1.png" class="img_radius_circulo">
									</div>
									<div class="ml-2 div_mensaje">
										<div class="div_chats pl-3 py-2 mb-3">
											<p class="p_texto mb-0">Hey</p>
											<span class="spna_hora_inbox">10:43am</span>
										</div>
										<div class="div_chats pl-3 py-2 mb-3">
											<p class="p_texto mb-0">Chatting and image exchange is only available for Premium or diamond users.<b class="b_ngrita"> Go Premium</b> and talk to sugar girls limitlessly.</p>
											<span class="spna_hora_inbox">10:43am</span>
										</div>
										<p class="p_after px-3">After your send your message 1credit will be charged from your account.</p>
									</div>
								</div>
								<div class="d-flex flex-wrap div_mitad_inbox float-right justify-content-end">
									<div class="div_mensaje">
										<div class="div_chats pl-3 py-2 mb-3">
											<p class="p_texto mb-0">Hey</p>
											<span class="spna_hora_inbox">10:43am</span>
										</div>
										<div class="div_chats pl-3 py-2 mb-3">
											<p class="p_texto mb-0">Chatting and image exchange is only available for Premium or diamond users. Go Premium and talk to sugar girls limitlessly.</p>
											<span class="spna_hora_inbox">10:43am</span>
										</div>
									</div>
								</div>
								<div class="d-flex justify-content-between w-100 align-items-center div_llave px-4">
									<p class="p_after mb-0">Never send money, gift card or banking info.</p>
									<button class="btn_llave">
										<img src="/assets-web/img/Imagen11.png" class="img_llave">
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="background-color: #F0F0F0;" class="div_envio_absolute">
			<div class="row m-0 justify-content-end">
				<div class="col-9 d-flex flex-wrap align-items-center px-4 py-2 justify-content-between">
					<textarea placeholder="Type your message here" class="px-3 py-3 text_enviar"></textarea>
					<button class="btn_enviar">
						<img src="/assets-web/img/iconenviaroscuro.png" class="img_enviar">
						<img src="/assets-web/img/iconenviarclaro.png" class="img_enviar_claro">
					</button>
				</div>
			</div>
		</div>
	</section>
<script src="/assets-web/js/jquery.min.js"></script>
<script src="/assets-web/js/bootstrap.min.js"></script>
<script src="/assets-web/js/css3-animate-it.js"></script>
<script src="/assets-web/js/canvas.js"></script>
<script src="/assets-web/js/flickity.pkgd.min.js"></script>
<script>
var estado = "inicial"
$('.btn_x_nav').click(function(){
 	if (estado == "inicial") {
 		$('#iconcambio').addClass("fa-times");
 		$('#iconcambio').removeClass("fa-angle-down");
 		$('.div_blanco_drow').slideDown();
 		$('.div_blanco_drow').css({'z-index': '999999999'});
		estado="click";
 	}
 	else
 	{
 		$('#iconcambio').addClass("fa-angle-down");
 		$('#iconcambio').removeClass("fa-times");
 		$('.div_blanco_drow').slideUp();
 		estado="inicial";
 	}
});
</script>
</body>
</html>