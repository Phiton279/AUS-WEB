<!DOCTYPE html>
<html lang="en">
	<head>
		<title>AUS | ITS</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript" src="public/style/sweetalert2.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu2') ?>
		
		<!-- Tampilkan semua produk -->
		<div class="row">
		<!-- looping products -->
		<?php foreach($products as $product) : ?>
			<?php if ($product->type == 2) : ?> 			
				<div class="col-sm-3 col-md-3">
				<div class="thumbnail">
					<?=img([
					'src'		=> 'uploads/' . $product->image,
					'style'		=> 'max-width: 100%; max-height:100%; height:500px'
					])?>
					<div class="caption">
					<h3 style="min-height:100px;"><?=$product->name?></h3>
					<p><?=$product->description?></p>
					<p>
						<button type="button" class="btn btn-lg btn-primary" onclick="sweet()">CP</button>
						<script>
						function sweet (){
							swal({
							title: 'WA : 089613509160',
							showClass: {
								popup: 'animated fadeInDown faster'
							},
							hideClass: {
								popup: 'animated fadeOutUp faster'
							}
							})
						}
						</script>
			
						</p>
					</div>
					</div>
				
			  </div>
			<?php endif;?>
		<?php endforeach; ?>
		<!-- end looping -->
		</div>		
	</body>
</html>