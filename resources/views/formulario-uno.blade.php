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
</head>
<body style="background-color: #FBFBFB">
	<section class="position-relative">
		<div class="div_blanco_cabezera mt-4"></div>
		<img src="/assets-web/img/Grupo721.png" class="img_logo_cabezera">
	</section>
	<section class="secc_bajar_primero">
		<div class="container">
			<h6 class="subtitulo_heavy_33 text-center mb-4">Personal data</h6>
			<div class="row mx-0 mb-5 justify-content-center">
				<div class="col-8 col-sm-5 col-md-4 col-lg-3 position-relative">
					<canvas id="can">
					</canvas>
					<label class="btn btn_foto">
						Add profile photo
						<input type="file" multiple="false" accept="image/*" id="finput" onchange ="upload()" class="input_file">
					</label>
					<label class="btn btn_foto_edit">
						Edit
						<input type="file" multiple="false" accept="image/*" id="finput" onchange ="upload()" class="input_file">
					</label>
				</div>
				<div class="col-md-6 col-lg-5">
					<input type="text" placeholder="Name" class="input_blanco_formu">
					<input type="email" placeholder="E-mail" class="input_blanco_formu bajar_input_blan">
					<input type="number" placeholder="Cel phone" class="input_blanco_formu bajar_input_blan">
					<div class="sd-container bajar_input_blan">
					    <input class="sd" type="date" name="selected_date" id="fecha" placeholder="Date of birth" />
					    <span class="open-button">
					      <button type="button"><i class="fas fa-calendar-alt"></i></button>
					    </span>
					</div>	
				</div>
			</div>
			<h6 class="subtitulo_heavy_33 text-center mb-4">I am into…</h6>
			<div class="btn-group btn-group-toggle w-100 btn_toggle_padding mb-5" data-toggle="buttons">
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option1"> No strings attached
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option2"> Open relationship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option3"> Casual dating
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option4"> Open relationship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option5"> Casual dating
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option6"> Friendship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option7"> Fine dining
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option8"> Romance
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option9"> No strings attached
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option11"> No strings attached
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option12"> Romance
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option13"> Friendship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option14"> Fine dining
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option15"> Traveling
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option16"> Friendship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option17"> Traveling
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option18"> Fine dining
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option19"> Friendship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option20"> Fine dining
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option21"> Traveling
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option22"> Friendship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option23"> Fine dining
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option24"> Traveling
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option25"> No strings attached
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option26"> No strings attached
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option27"> Romance
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option28"> Friendship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option29"> Fine dining
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option30"> Traveling
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option31"> Friendship
			  </label>
			  <label class="btn btn_tag">
			    <input type="checkbox" name="options" id="option32"> Romance
			  </label>
			</div>
			<h6 class="subtitulo_heavy_33 text-center mb-4">Loacation</h6>
			<div class="row m-0 justify-content-center">
				<div class="col-sm-6 col-md-4 col-xl-4 d-flex flex-wrap justify-content-center align-items-center mb-2 mb-md-0">
					<p class="my-0 p_into">Country</p>
					<select class="select_form_1">
						<option>USA</option>
					</select>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-4 d-flex flex-wrap justify-content-center align-items-center mb-2 mb-md-0">
					<p class="my-0 p_into">State</p>
					<select class="select_form_1">
						<option>New York</option>
					</select>
				</div>
				<div class="col-sm-6 col-md-4 col-xl-4 d-flex flex-wrap justify-content-center align-items-center mb-2 mb-md-0">
					<p class="my-0 p_into">City</p>
					<select class="select_form_1">
						<option>Queens</option>
					</select>
				</div>
			</div>
			<div class="row mx-0 mt-5 justify-content-center">
				<div class="col-sm-6 col-md-5 col-lg-4 text-center mt-5">
					<a href="" class="btn btn_next_form">Next</a>
				</div>
				<div class="col-12 text-center mt-5">
					<a href="" class="link_step"><u>Skip step ></u></a>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer_form mt-5 py-3">
		<div class="container px-sm-0">
			<div class="d-flex justify-content-center justify-content-lg-between flex-wrap align-items-center">
				<div class="d-flex align-items-end flex-wrap justify-content-center justify-content-lg-start div_logo_pro">
					<a href="">
						<div class="div_logo">
							<img src="/assets-web/img/Logoh60.png">
						</div>
					</a>
					<p class="my-0 p_2020_footer ml-0 mt-3 mt-lg-0">© 2020. Seekingterms.</p>
				</div>
				<ul class="d-flex flex-wrap justify-content-center mb-0 pl-0 mt-4 mt-lg-0" style="list-style-type: none;">
					<li class="mr-3 mr-sm-3 mr-md-4"><a href="" class="link_footerfomr1">HOW IT WORKS</a></li>
					<li class="mr-3 mr-sm-3 mr-md-4"><a href="" class="link_footerfomr1">FAQS</a></li>
					<li class="mr-3 mr-sm-3 mr-md-4"><a href="" class="link_footerfomr1">BROWSE</a></li>
					<li class="mr-3 mr-sm-3 mr-md-4"><a href="" class="link_footerfomr1">BLOG</a></li>
					<li class="mr-3 mr-sm-3 mr-md-4"><a href="" class="link_footerfomr1">AFFILIATE</a></li>
					<li class="mr-3 mr-sm-3 mr-md-4"><a href="" class="link_footerfomr1">TERMS</a></li>
					<li class=""><a href="" class="link_footerfomr1">PRIVACY</a></li>
				</ul>
			</div>
		</div>
	</footer>
<script src="/assets-web/js/jquery.min.js"></script>
<script src="/assets-web/js/bootstrap.min.js"></script>
<script src="/assets-web/js/css3-animate-it.js"></script>
<script src="/assets-web/js/canvas.js"></script>
<script>
	window.addEventListener('load',function(){

	document.getElementById('fecha').type= 'text';

	document.getElementById('fecha').addEventListener('blur',function(){

	document.getElementById('fecha').type= 'text';

	});

	document.getElementById('fecha').addEventListener('focus',function(){

	document.getElementById('fecha').type= 'date';

	});

	});
</script>
<script>
		function upload(){
  var finput = document.getElementById("finput");
  var canvas = document.getElementById("can");
  var img = new SimpleImage(finput);
  img.drawTo(canvas);
}
</script>
<script>
	$('.btn_foto').click(function(){
        $('.btn_foto').hide();
        $('.btn_foto_edit').show(3000);
        $('.btn_foto_edit').css({'display': 'flex'});
    });
</script>
</body>
</html>