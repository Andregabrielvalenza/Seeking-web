<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/magic-input.min.css">
    <link rel="stylesheet" type="text/css" href="/assets-web/css/animations.css">
</head>
<body style="background-image: url('assets-web/img/portada.png');">
	<section class="fondo_login_oscuro animatedParent py-sm-3 py-md-0" data-sequence='500'>
		<div class="div_login animated bounceInUp" data-id='1'>
			<div class="div_login_1 text-center">
				<img src="/assets-web/img/logoterms.png" id="logo_login">
				<h1 class="text-center h1_login mt-3">Log in</h1>
				<input type="email" placeholder="User name or email" class="input_login mt-3">
				<input type="password" placeholder="Your password" class="input_login mt-2">
				<label class="d-flex align-items-center label_check mt-3"><input type="checkbox" class="mgc mgc-info mr-1" /> I agree to the Terms & Privacy Policy.</label>
				<p class="p_login">Promoting illegal commercial activities (such as prostitution) is prohibited. If you are an ESCORT, DO NOT use this website.</p>
				<a href="" class="btn btn_login_celeste">Let’s go</a>
			</div>
			<button type="button" class="btn btn_login_blanco" data-toggle="modal" data-target="#exampleModal">Register</button>
		</div>
	</section>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<button type="button" class="close mr-5 mt-sm-3 mt-md-5 mt-xl-4 d-none d-md-block" data-dismiss="modal" aria-label="Close">
	          <img src="/assets-web/img/Grupo708.png" class="img_close">
	    </button>
	  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content position-relative">
		    	<button type="button" class="close_celular d-block d-md-none" data-dismiss="modal" aria-label="Close">
	          		<i class="fas fa-times"></i>
	    		</button>
		      <div class="row m-0">
		      	<div class="col-md-6 col-lg-7 py-4 px-md-4 px-lg-5 text-center">
		      		<img src="/assets-web/img/logoterms.png" id="logo_login">
		      		<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
					  <label class="btn btn_modal_login mr-1">
					    <input type="radio" name="options" id="option1">
					    <img src="/assets-web/img/iconnegro1.png" class="iconnegro">
					    <img src="/assets-web/img/iconblanco1.png" class="iconoblanco">
					  </label>
					  <label class="btn btn_modal_login mr-1">
					    <input type="radio" name="options" id="option2">
					     <img src="/assets-web/img/iconnegro2.png" class="iconnegro">
					     <img src="/assets-web/img/iconblanco2.png" class="iconoblanco">
					  </label>
					  <label class="btn btn_modal_login mr-1">
					    <input type="radio" name="options" id="option3">
					     <img src="/assets-web/img/iconnegro3.png" class="iconnegro">
					     <img src="/assets-web/img/iconblanco3.png" class="iconoblanco">
					  </label>
					  <label class="btn btn_modal_login">
					    <input type="radio" name="options" id="option4">
					     <img src="/assets-web/img/iconnegro4.png" class="iconnegro">
					     <img src="/assets-web/img/iconblanco4.png" class="iconoblanco">
					  </label>
					</div>
		      		<div class="d-flex justify-content-center align-items-center flex-wrap mt-1">
			      		<button class="btn btn_modal_2 mr-1 mr-md-0 mr-lg-1" id="btn5">Im a Sugar daddy</button>
			      		<button class="btn btn_modal_2 mt-1 mt-lg-0" id="btn6">Im a Sugar baby</button>
			      	</div>
			      	<div class="my-3">
			      		<input type="text" placeholder="Nickname" class="input_blancos_modal bor_radius_top">
				      	<input type="email" placeholder="Your email" class="input_blancos_modal">
				      	<input type="password" placeholder="Password" class="input_blancos_modal">
				      	<input type="text" placeholder="Country" class="input_blancos_modal bor_botom_ultimo">
			      	</div>
			      	<a href="" class="btn btn_registrad_modal">Register now</a>
		      	</div>
		      	<div class="col-md-6 col-lg-5 py-4 px-md-4 px-lg-5 fondo_col_modal text-center d-none d-md-block">
		      		<h6 class="subtitulo_heavy_33 mt-5">Why SeekingTerms</h6>
		      		<p class="p_descrip_modal text-left mt-4">3 In-depth user verifications features Say goodbye to scammers, bots, and catfish Real-time messaging, and phone chat Advanced filters and real-time searching Sugar Babies always free! Elite upgrades & rewards for Sugar Daddies! Send date and travel proposals + create trips Diverse with active members around the world Favorites, winks, gifts, activities, & analytics Most authentic dating platform, try us out!</p>
		      	</div>
		      </div>
		    </div>
		  </div>
	</div>
<script src="/assets-web/js/jquery.min.js"></script>
<script src="/assets-web/js/bootstrap.min.js"></script>
<script src="/assets-web/js/css3-animate-it.js"></script>
<script>
	$('#btn5').click(function(){
        $(this).css({'background-color': '#77BDF0','color': '#fff', 'border-color': '#ffff'});
        $('#btn6').css({'background-color': '#FAFAFA','color': '#333333', 'border-color': '#E3E3E3'});
    });
    $('#btn6').click(function(){
        $(this).css({'background-color': '#77BDF0','color': '#fff', 'border-color': '#ffff'});
         $('#btn5').css({'background-color': '#FAFAFA','color': '#333333', 'border-color': '#E3E3E3'});
    });
</script>
</body>
</html>