<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Seat Reservation</title>
	<link rel="stylesheet" href="css/style.css">
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="background">
		<button id="place0" class="place place0"><span></span></button>
		<button id="place1" class="place place1"><span></span></button>
		<button id="place2" class="place place2"><span></span></button>
		<button id="place3" class="place place3"><span></span></button>
		<button id="place4" class="place place4"><span></span></button>
		<button id="place5" class="place place5"><span></span></button>
		<button id="place6" class="place place6"><span></span></button>
		<button id="place7" class="place place7"><span></span></button>
		<button id="place8" class="place place8"><span></span></button>
		<button id="place9" class="place place9"><span></span></button>
		<button id="place10" class="place place10"><span></span></button>
		<button id="place11" class="place place11"><span></span></button>
		<button id="place12" class="place place12"><span></span></button>
		<button id="place13" class="place place13"><span></span></button>
		<button id="place14" class="place place14"><span></span></button>
		<button id="place15" class="place place15"><span></span></button>
		<button id="place16" class="place place16"><span></span></button>
		<button id="place17" class="place place17"><span></span></button>
		<button id="place18" class="place place18"><span></span></button>
		<button id="place19" class="place place19"><span></span></button>
		<button id="place20" class="place place20"><span></span></button>
		<button id="place21" class="place place21"><span></span></button>
		<button id="place22" class="place place22"><span></span></button>
		<button id="place23" class="place place23"><span></span></button>
		<button id="place24" class="place place24"><span></span></button>
		<button id="place25" class="place place25"><span></span></button>
		<button id="place26" class="place place26"><span></span></button>
		<button id="place27" class="place place27"><span></span></button>

		<div id="openModal" class="modalDialog">
			<div id="myModal">
				<form method="POST" id="form">
					<button id="close" type="button" title="Close" class="close">&times;</button>
					<h2>Please enter your name</h2>
					<input type="text" name="login" id="inputname" placeholder="Name" value="">
					<button id="button__ok" type="submit" class="button__ok" on>ok</button>
					<p>After enter your name refresh this page!</p>
				</form>
			</div>
		</div>
	</div>

<?php	
	$login="";
	if(isset($_GET['elemID'])) {
		$id = $_GET['elemID'];
	}
	if(isset($_POST['login'])){
    	$login=htmlentities($_POST['login']);
    	$path_to_file = 'index.php';
		$username1 = file_get_contents($path_to_file);
		$username1 = str_replace("<button id=\"$id\" class=\"place $id\"><span></span>","<button id=\"$id\" class=\"place $id\"><span>$login</span>",$username1);
		file_put_contents($path_to_file,$username1);
			
		$elem_off = file_get_contents($path_to_file);
		$elem_off = str_replace("<button id=\"$id\" class=\"place $id\">", "<button id=\"$id\" class=\"place $id place__off\">",$elem_off);
		file_put_contents($path_to_file,$elem_off);
	}
?>

<script type="text/javascript">
	var loginUser = '<?php echo $login;?>';	
</script>
<script src="js/main.js"></script>
</body>
</html>

