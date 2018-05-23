<html>
	<?php require_once('includes/header.php'); ?>

	<body onload="getEstado();">
		<?php require_once('includes/nav.php'); ?>
	  <main class="container">
	    <div>
		    <div class="row">
		      <div class="col s12 m12 l12">
						<h4 align="center">PGRD <?php echo date('Y'); ?></h4>
					</div>
		    </div>
				<div class="input-field col s12  m12 l6">
				<div class="card">
					<div class="card-content">
					<span class="card-title">Escoge una opción</span>
		        <form name="form1" action="">
		        <div class="row">
		          <div class="input-field col s4 m12 l4" id="estadoList"></div>
		          <div class="input-field col s4 m12 l4" id="municipioList"></div>
		          <div class="input-field col s4  m12 l4" id="rubroList"></div>
		    		</div>
		          <div class="input-field col s12  m12 l6" id="pasantiaList"></div>
		      </form>
	    </div>
			</div>
			</div>
			</div>
	  </main>
<!-- Footer -->
		<?php require_once('includes/footer.php'); ?>

  <script type="text/javascript" src="css/materialize/js/materialize.min.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- PGRD -->
	<script type='text/javascript' src='https://creativehonduras.com/pgrd.copeco.gob.hn/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.9.2'></script>
	<script type='text/javascript' src='includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='includes/js/jquery/ui/sortable.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='includes/js/jquery/ui/accordion.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='includes/js/plugins.js?ver=16.3'></script>
	<script type='text/javascript' src='includes/js/menu.js?ver=16.3'></script>
	<script type='text/javascript' src='includes/assets/animations/animations.min.js?ver=16.3'></script>
	<script type='text/javascript' src='includes/assets/jplayer/jplayer.min.js?ver=16.3'></script>
	<script type='text/javascript' src='includes/js/parallax/translate3d.js?ver=16.3'></script>
	<script type='text/javascript' src='includes/js/scripts.js?ver=16.3'></script>
	<script type='text/javascript' src='includes/js/comment-reply.min.js?ver=4.9.4'></script>
	<script type='text/javascript' src='includes/js/wp-embed.min.js?ver=4.9.4'></script>
	<a href="#0" class="cd-top js-cd-top">Top</a>
	<script src="includes/styles/back-to-top/back-to-top.js"></script>
	</body>
</html>
