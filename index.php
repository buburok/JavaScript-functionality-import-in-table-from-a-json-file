<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		<link href="//db.onlinewebfonts.com/c/32a33e8a3b74a8bdc381d155eb5ca993?family=Helvetica" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<script src='script.js' type='text/javascript'></script>
	</head>
	<body>
		<header><div id="logo">LOGO</div>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Sports</a></li>
						<li><a href="#">Casino</a></li>
						<li class="dropdown"><a class="dropdown-togglea" data-toggle="dropdowna" href="#">Games<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Mega Moolah</a></li>
								<li><a href="#">The curse of the black Pearl</a></li>
								<li><a href="#">Super slots attack</a></li>
								
							</ul>
						</li>
						<li  class="icon" style="display:none;"> Menu</li>
					</ul>
				</div>
			</nav>
			<div id="lang"><a href="#"><span><img src="./img/en.png"></span></a><a href="#"><span><img src="./img/fr.png"></span></a><a href="#"><span><img src="./img/gr.png"></span></a></div>
		</header>
		<div class="container">
			<div class="row panel panel-info col-lg-8 col-md-8 col-sm-12" >
				<div style="overflow-x: hidden;">
					<h1>Page title</h1>
					<hr>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
					
					<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
					
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>					
					
				</div>
				<div class="tableBot table-responsive">
					<table id="myTable" class="paginated" >
						<div id="paginationaf">
						</div>
						<br>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>	
			<div id="contnr h-100 d-inline-block">
				<div class="row1 panel panel-info h-100 d-inline-block col-lg-4 col-md-8 col-sm-12" >
					<div>
						<div class="rightOne"><a href="#contnr">Click to open</a>
						<div class="contRightDiv1" style="display:none;"></div></div>
						
						<div class="rightTwo"><a href="#contnr">Click to close</a>
						<div class="contRightDiv2" ></div></div>
						<div class="rightTre"><a href="#contnr">Click to open</a>
						<div class="contRightDiv3" style="display:none;"></div></div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="footL col-lg-8">2003 - 2011 © Copyright 10Bet.com Ltd. All rights reserved.</div>
			<div class="footr col-lg-4"><a href="#">Home</a>  <a href="#">Terms of use</a>   <a href="#">Responsible gaming</a> <a href="#">Contact us</a>
			</div>
		</footer>
		<script>
			
		</script>
		<script>
			$(".row1 .rightOne a").click(function(){
				$(".contRightDiv1").toggle();$(".contRightDiv2").css("display",'none' );$(".contRightDiv3").css("display",'none' );
				if ($( this ).text() === 'Click to open') {
					$( this ).text('Click to close');
					$('.row1 .rightTre a:contains("Click to close")').text('Click to open');
					$('.row1 .rightTwo a:contains("Click to close")').text('Click to open');
				}
				else if ($( this ).text() === 'Click to close') {
					$( this ).text('Click to open');
					$('.row1 .rightTre a:contains("Click to close")').text('Click to open');
					$('.row1 .rightTwo a:contains("Click to close")').text('Click to open');
				}
			});
			$(".row1 .rightTre a").click(function(){
				$(".contRightDiv3").toggle();$(".contRightDiv2").css("display",'none' );$(".contRightDiv1").css("display",'none' );
				if ($( this ).text() === 'Click to open') {
					$( this ).text('Click to close');
					$('.row1 .rightOne a:contains("Click to close")').text('Click to open');
					$('.row1 .rightTwo a:contains("Click to close")').text('Click to open');
				}
				else if ($( this ).text() === 'Clieck to close') {
					$( this ).text('Click to open');
					$('.row1 .rightOne a:contains("Click to close")').text('Click to open');
					$('.row1 .rightTwo a:contains("Click to close")').text('Click to open');
				}
			});
			$(".row1 .rightTwo a").click(function(){
				$(".contRightDiv2").toggle();$(".contRightDiv1").css("display",'none' );$(".contRightDiv3").css("display",'none' );
				if ($( this ).text() === 'Click to open') {
					$( this ).text('Click to close');
					$('.row1 .rightTre a:contains("Click to close")').text('Click to open');
					$('.row1 .rightOne a:contains("Click to close")').text('Click to open');
				}
				else if ($( this ).text() === 'Click to close') {
					$( this ).text('Click to open');
					$('.row1 .rightTre a:contains("Click to close")').text('Click to open');
					$('.row1 .rightOne a:contains("Click to close")').text('Click to open');
				}
			});
			$('.dropdown').click(function(){ $('.dropdown-menu').toggle() });
			$('.nav.navbar-nav li').on('click', function() {
				$('.nav.navbar-nav li.active').removeClass('active');
				$(this).addClass('active');
			});
			$('.icon').click(function(){ $('.nav.navbar-nav li:nth-child(-n+4)').toggle()});
		</script>
	</body>
</html>
