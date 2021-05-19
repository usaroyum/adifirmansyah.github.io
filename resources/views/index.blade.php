<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang!</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
</head>
<body>

	@extends('app')

	<section class="header" id="header">

		<div id="particles-js">
			
		<div class="container-lg" >
				<div class="row">
			<div class="col gambar">
				<img src="css/image\header.png">
			</div>
			<div class="col title">
				<h1><span>I'am</span> adi firmansyah</h1>
			<p>I have exprience about <span>UI / UX design, Graphic design,Web developer & Editor VFX.</span> Who have great abilites can always work anytime and anywhere. I can communicate very well and interested in solving new problems. </p>

			<button type="button" class="btn btn-danger btn-sm">VIEW ALL PROJECT</button>
			</div>
			</div>
		</div>

		</div>

	</section>

	<section class="skills" id="skills">

		<h3>specialist</h3>
		<p class="lead" >I have expertise in various fields such as web developer, ui / ux design and graphic design.</p>
		<div class="row">
			<div class="col uiux">
				<img src="/css/image/uiux.png">
				<h5>UI / UX DESIGN</h5>
				<p>have expertise in the field of user interface and user experience</p>
			</div>
			<div class="col webdeveloper">
				<img src="/css/image/webdeveloper.png">
				<h5>WEB DEVELOPER</h5>
				<p>have expertise in the field of web developers such as front end and back end (full stack). knowledge with laravel framework, vue js and others</p>
			</div>
			<div class="col design">
				<img src="/css/image/design.png">
				<h5>DESIGN GRAPHIC</h5>
				<p>I have expertise in various fields such as web developer, ui / ux design and graphic design</p>
			</div>
		</div>

				
	</section>

	<section class="blog" id="blog">

		<h3>Project laboratory</h3>
		<p class="lead">I often share some of my work experience and knowledge in a field of technology such as web development and so on</p>

		<div class="category">
		<button class="btn btn-success" id="show">SHOW ALL</button>
		<button class="btn btn-primary">WEB DEVELOPER</button>
		<button class="btn btn-primary">UI / UX DESIGN</button>
		<button class="btn btn-primary">GRAPHIC DESIGN</button>
		<button class="btn btn-primary">OTHER</button>
		
		</div>


	


	</section>

	<section class="contact" id="contact">
		<h1>Contact</h1>
		<h2><i class="fa fa-envelope"></i><a href="">email@adifirmansyah</a></h2>
		<p>If you need services to create websites, android and IOS applications, you can contact me by email or <span style="color: #6E2DF6; cursor: pointer; font-weight: 500;">WhatsApp</span></p>
	</section>

	<!-- tambah project -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<label for="img">Thumbnail :</label><br>
      	<input type="file" name="img" id="img">

      	<br>

      	<label>Nama project :</label>
        <input type="text" name="nama" placeholder="" autocomplete="off">

        <label>deskripsi project :</label><br>
        <textarea name="deskripsi" style="width: 300px;"></textarea>
        	<br>
          <label for="kategori">Pilih kategori:</label>

<select name="kategori" id="kategori"  style="width: 60%;">
  <option value="webdeveloper">Web developer</option>
  <option value="uiux">UI / UX design</option>
  <option value="graphicdesign">Graphic design</option>
  <option value="other">Others</option>
</select>

      </div>

    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>



	<script src="{!! asset('js/particles/particles.js') !!}"></script>
	<script src="{!! asset('js/particles/app.js') !!}"></script>
</body>
</html>