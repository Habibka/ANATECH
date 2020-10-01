<?php
	$error = "";

    if (array_key_exists("submit", $_POST)) {
        
        $link = mysqli_connect("shareddb-y.hosting.stackcp.net", "intership-3135391e57", "pp1kqva9kz", "intership-3135391e57");
        
            if (mysqli_connect_error()){
            die("Database Connection Error");
            }
				
			if(!$_POST['email']){
			    $error = "An email address is requierd";
			}
			
			if ($error != "") {
			    $error = "<p>There were error(s) in your form</p>".$error;
			} else {
			    
			    $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
			    
			    $result = mysqli_query($link, $query);
			    
			    if (mysqli_num_rows($result) > 0) {
			        
			        $error = "That email address is taken.";
			    } else {
			        
			        $query = "INSERT INTO `users` (`email`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."')";

                    if (!mysqli_query($link, $query)) {

                        $error = "<p>Could not sign you up - please try again later.</p>";

                    } else {
                        
                         $error = "<p>You have successfuly sign up for ads.</p>";
                    }      
			    }
			    
			}
		}
		include("index.php");
?>