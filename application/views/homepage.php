<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width", initial-scale=1/>
	<link rel="stylesheet" type="text/css" href="public/style/style.css">
	<script src="public/style/jquery-3.3.1.min.js"></script>
	<link rel="icon" type="image/jpg" href="public/img/logos.png">

	<style>
	.btn {
	border: none;
	background-color: inherit;
	padding: 15px 10px 12px 202px;
	font-size: 40px;
	cursor: pointer;
	display: inline-block;
	}

	.btn:hover {background: #1ABC9C;}
	.info {color: White;}
	
	</style>

	<title>AUS</title>

	<script type="text/javascript">
		$(window).on('scroll',function(){
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}		
		})
	</script>

</head>
<body>
	
	<nav>
		<div class="logo">
			<img src="public/img/logos.png">
		</div>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php/welcome/index">Lomba</a></li>
			<li><a href="index.php/welcome2/index">Seminar</a></li>
		</ul>

	</nav>

	<div class="logo2">
			<img src="public/img/samping.png">
		</div>	

	<section class="header">
		
		<div class="pembuka">
		<br>
		<div>
		<button class="btn info" onclick="window.location.href='index.php/welcome/index'" >LOMBA</button>
		<button class="btn info" onclick="window.location.href='index.php/welcome2/index'">SEMINAR</button>
		</div>

		<br>

		<li  id="l2">PILIH INFO <span > YANG <span > ANDA INGIN</li>
			
		<li  class="l3">-&emsp;&emsp;ABOUT AUS_WEB&emsp;&emsp;- </li>
		<li  class="l4">A-US merupakan suatu aplikasi sebagai wadah seluruh informasi event seperti lomba dan Seminar yang dapat diikuti oleh mahasiswa di Perguruan Tinggi Negeri dan Swasta di Indonesia. </li>

		</div>


		<div id="banner" style="top:0px;">
		</div>
		
	</section>
	
	<section class="Penutup" id="akhir">

			<div id="popupbox1">
				<div class ="popup-wrap">
					<div class="popup-conts">
						<h3>E-MAIL&emsp;&emsp; INSTAGRAM&emsp;&emsp;WHATSAPP</h3>
						<div class="logos2">
							<div class="itemz1"><a href="mailto:yanakriswin@gmail.com"><img src="public/img/email.png"></a></div>
							
							<div class="itemz3"><a href="https://www.instagram.com/shn_philip/"><img src="public/img/ig.png"></a></div>
							
							<div class="itemz2"><a href="https://wa.me/6289613509160"><img src="public/img/wa.png"></a></div>
	
						</div>
						
						<p><a href="javascript:voud(0)" onclick="toggle_visibility('popupbox1');">-x-</a>
						</p>
					</div>
				</div>
			</div>

			<div id="wrapper">
				<p><strong>CONTACT-<a href="javascript:void(0)" onclick="toggle_visibility('popupbox1');"><strong>ME</p>
			</div>
	</section>


	<script type="text/javascript">
	    function toggle_visibility() {
	       var e = document.getElementById('popupbox1');
	       		if(e.style.display == 'block'){
	       			e.style.display = 'none';
	       		}
	         	else{
	         		e.style.display = 'block';	
	         	}
	          	
	    }
	</script>

</body>

</html>