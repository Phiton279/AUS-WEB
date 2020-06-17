<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a href="https://ausits.000webhostapp.com/index.php/welcome/index" style="list-style:none;" class='navbar-brand'><li>EVENT LOMBA</li></a>
        <a href="https://ausits.000webhostapp.com/index.php/welcome2/index" style="list-style:none;" class='navbar-brand'><li>EVENT SEMINAR</li></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
	<?php if($this->session->userdata('username')) : ?>
      <ul class="nav navbar-nav navbar-left">
        <li><?=anchor('admin/products','Products')?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
			<span style="line-height:50px;">
				<?php echo 'You Are: ' . $this->session->userdata('username');?>
			</span>
		</li>
		<li>
			<?php echo anchor('logout', 'Logout');?>
		</li>
      </ul>
	  <?php endif; ?>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
