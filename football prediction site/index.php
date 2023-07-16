
<!DOCTYPE html>
<html>
	<head>
		<title>nigeria latest news</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="https://vanguardngr.com">Vanguard News: Home</a>
		&nbsp <a href="http://punchng.com">Punch Newspapers</a>
		&nbsp <a href="http://sunnewsonline.com">The Sun News | – Voice of the Nation</a>
	   &nbsp  <a href="http://dailypost.ng">Daily Post - Nigeria News, Nigerian Newspapers</a>
		&nbsp <a href="http://lindaikejisblog.com">Welcome to Linda Ikeji's Blog</a>
	</head>
	
	<body>
	<div id="wrapper">
		<div id="header">
			<h1>nigeria latest news</h1>
		</div>
		
	
		
		   <h4>Mr Adeeko Tobi David have a dream of  making nigeria a better place,
		   so he developed an idear if nigerian can get information
		   of our beloved country nigeria from one source, we will be able to think as one and live as one
		   i love my country nigeria.</h4><br /><br />
		   <div id="body">
			
			<h2>TODAY</h2><br />
			<p>Nigeria’s economy grows faster than South Africa’s –IMF</p><br />
			<a href="images/Christine-Lagarde.jpg" ><img src="images/Christine-Lagarde.jpg" /></a><br />
			<p>Among the two leading economies in Sub Saharan Africa, Nigeria’s economy would grow faster than that
			of South Africa in 2017, according to the International Monetary Fund (IMF).

            Division Chief, Research Department, IMF, Oya Calesun, gave the forecast while briefing the media on 
			the World Economic Outlook (WEO) released Tuesday at the IMF/World Bank Annual Meetings in Washington D.C.</p><br />
			
			<p>Dangote Cement withdraws from South African acquisition</p><br />
			<a href="images/Dangote.jpg" ><img src="images/Dangote.jpg" /></a><br />
			<p>Africa’s largest cement company and Nigerian multinational, Dangote Cement has withdrawn its bid to
			   acquire the entire share capital of PPC Limited, South Africa’s leading cement firm.

            In a statement signed by Dangote Cement’s company secretary, Mahmud Kazaure, the company stated that the
			Aliko Dangote-led board of directors of Dangote Cement has communicated its withdrawal of interest to acquire
			the entire share capital of PPC to the board of directors of the South Africa’s firm.

            Established in 1892 as De Eerste Cement Fabrieken Beperkt, PPC is a leading supplier of cement and related products 
			in southern Africa. It has 11 cement factories in South Africa, Botswana, Democratic Republic of Congo, Ethiopia, Rwanda 
			and Zimbabwe.</p><br /><br />
		
		
	<?php
	require_once("included_functions.php");
	require_once("validation_functions.php");
	
	$errors = array();
	$message = "";
	
	if (isset($_POST['submit'])) {
		// form was submitted
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

		// Validations
		$fields_required = array("username", "password");
		foreach($fields_required as $field) {
			$value = trim($_POST[$field]);
			if (!has_presence($value)) {
				$errors[$field] = ucfirst($field) . "can't be blank";
			}
		}
		
		$fields_with_max_lengths = array("username" => 30, "password" => 11);
		validate_max_lengths($fields_with_max_lengths);
		
		if (empty($errors)) {
			// try to login
			if ($username == "emediong" && $password == "robert" ||$username=="Tobi"&& $password=="oyim"|| $username == "Tobi" && $password == "Adeeko"|| $username == "AdeekoTobiDavid" && $password == "onebook") {
				// successful login
				redirect_to("about.html");
			} else {
				$message = "Username/password do not match.";
			}
		}

	} else {
		
		$username = "";
		$message = "Please log in.";
	}
	
?>
  
        <?php echo $message; ?><br />
		<?php echo form_errors($errors); ?>
		
		<form action="index.php" method="post">
		  Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
		  Password: <input type="password" name="password" value="" /><br />
			<br />
		 <input type="submit" name="submit" value="Submit" /><tb>
	
	
	<div id="copyright">
			<p>copyright &copy:Tobi nigeria limited 2017;</p>
		</div>
		
	</div>
	</body>
</html>

		