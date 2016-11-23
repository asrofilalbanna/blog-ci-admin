<!DOCTYPE html>
<html lang="en"><!-- Awal HTML -->

<head>
	<title> Cleaveland Browns</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css"/>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/image/icon-cleveland-browns-2.gif" />
</head> <!-- Akhir HEAD -->

<header>
	<!-- header -->
	<?php echo @$_header; ?>	
</header>

<body><!-- Awal BODY -->
	<div id="container_content">
		<div id="sidebar">
			<?php echo @$_sidebar; ?>	
		</div> <!-- sidebar -->
		<div id="mainbar">
			<?php echo @$_content; ?>	
		</div> <!-- mainbar -->
	</div> <!-- content -->
	<div class="clearfix"></div>
	<div id="footer">
		<?php echo @$_footer; ?>	
	</div>
</body>

</html>