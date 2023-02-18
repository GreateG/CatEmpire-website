<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>IT230 Homepage</h1>

    <?php 
    
    if(!isset($_SESSION["user"])){
        echo "<p>To login <a href=\"login_form.php\">click here</a></p>";
    }else{
        echo '<h2>Welcome '.$_SESSION["user"].'.</h2>';
        print '<p>To logout <a href="logout.php">click here</a></p>';
    }
    
    ?>

</body>

</html>
