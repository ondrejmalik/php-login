<html>
<body>
<?php

        $myfile = file_get_contents("credentials.txt");
        //var_dump ($myfile);
        $log_arr = explode (",", $myfile); 
        
        if ($log_arr[0] == $_POST["username"] && $log_arr[1] == $_POST["password"]) {
            echo 'Welcome: ' . htmlspecialchars($_POST["username"]) . '';
            echo "</br>";  
            echo 'Your password ' . htmlspecialchars($_POST["password"]) . ''; 
        }else
        {
            echo 'Wrong Credentials';

        }
        
        
       ?>


</body>
</html>