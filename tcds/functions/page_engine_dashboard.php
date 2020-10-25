<?php

if(isset($_GET['page'])){
	$page = $_GET['page'];
    $filename = "../admin/".$page.'.php';
    
    if(file_exists($filename)){
    	include $filename;
    } else {
?>

<div class="text-center">
<br>
<br>
<br>
<h1><i class="fa fa-exclamation" aria-hidden="true"></i> 404 <small> Error</small></h1>
<h3>Page is not Found</h3>
<p>Sorry The page your looking is not found or does not exist</p>
<a href="?page=home_dashboard" class="btn btn-danger btn-lg">Return to Home</a>
</div>
<br>
<br>

<?php
    	}
	}else{
    include '../admin/home_dashboard.php';
}

?>


