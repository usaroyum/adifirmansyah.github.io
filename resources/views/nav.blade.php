<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
</head>
<body>



<nav class="navbar navbar-expand-md">
	<a href="home" class="navbar-brand">Welcome</a>

<div class="container-mobile" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>



	<div class="collapse navbar-collapse" id="navbar">


		<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#header" class="nav-link active">Home</a>
				</li>
				<li class="nav-item">
					<a href="#skills" class="nav-link">Skills</a>
				</li>
				<li class="nav-item">
					<a href="#blog" class="nav-link">Project</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link">Contact</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link" data-target="#exampleModal" data-toggle="modal">Tambah	</a>
				</li>
				
			</ul>	
	</div>
		
</nav>

<!-- navbar mobile -->

<script>
function myFunction(x) {
  x.classList.toggle("change");
  var x = document.getElementById("navbar");
  if (x.style.display === "flex") {
  	x.style.display = "none";
  } else{
  	x.style.display = "flex";

  }

}
</script>


</body>
</html>