<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body{
	font-family: Arial;
	font-size: 14px;
}
a{
    color: blue;
    text-decoration: none;
    font-size: 22px;
}
a:hover{
	text-decoration: none;
	color:red;
}
.header{
	padding:5px;
	background-color:#353535;
	color:#fff;
	width:100%;
	text-align: center;
}
</style>
</head>
<body>
<div class='header'>
	<center><h1>Inventory Collections</h1></center>
</div>
	<div>
		<a href='<?php echo site_url('welcome/logout')?>'>Logout</a> 
		
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
