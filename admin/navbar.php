
<style>
	nav#sidebar {
    background: url(../assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: cover;
</style>
<nav id="sidebar" class='mx-lt-5' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Pagina Principal</a>
				<a href="index.php?page=booked" class="nav-item nav-booked"><span class='icon-field'><i class="fa fa-book"></i></span> Reservas </a>
				<a href="index.php?page=check_in" class="nav-item nav-check_in"><span class='icon-field'><i class="fa fa-sign-in-alt"></i></span> Registrarse </a>
				<a href="index.php?page=check_out" class="nav-item nav-check_out"><span class='icon-field'><i class="fa fa-sign-out-alt"></i></span> Verificar </a>
				<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> Categoría de habitación List</a>
				<a href="index.php?page=rooms" class="nav-item nav-rooms"><span class='icon-field'><i class="fa fa-bed"></i></span> Habitaciones </a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Usuarios</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Ajustes del Sitio</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>