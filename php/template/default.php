<? 
	ob_start();
?>
		<html>

			<head>
						
			</head>
		
			<body>
				<div>From: <? echo $name; ?></div>
				<div>Email:  <?echo $email; ?></div>	
				<div><? echo $message; ?></div>
			
			</body>
			
		</html>
<?
	$contents=ob_get_contents();
   ob_end_clean();
   return($contents);
?>


	
