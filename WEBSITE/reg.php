<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>PHP Web-site</title>
</head>
<body>
    
    <?php require ("blocks/header.php"); ?>

    <?php 
        require ('connection.php');
        
        if(isset($_POST['username']) && isset($_POST['passwd'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $passwd = $_POST['passwd'];

            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$passwd') ";
            $result = mysqli_query($connection, $query);

            if($result){
                $success = "Registration successed!";
            }else{
                $false = "Warning!"; 
            }
        }
        
    ?>

     <div class="container mt-5">
         <h3>Log in</h3>

         <?php if(isset($success)){ 
                    echo "<div class=\"alert alert-success\" role=\"alert\">".$success."</div>";
            }       
        ?>

        <?php if(isset($false)){ 
                    echo "<div class=\"alert alert-danger\" role=\"alert\">".$false."</div>";
            }       
        ?>
         
         <form action="reg.php" class="form-signin" method="post">
             Username
            <input type="text" name="username" placeholder="Username" class="form-control" required> 
            E-mail 
             <input type="email" name="email" placeholder="E-mail" class="form-control" required>
             Password 
             <input type="passwd" name="passwd" placeholder="Password" class="form-control" required></br>
             <button type="submit" name="send" class=" btn btn-success">Log in</button>
         </form>
    </div>

    <?php require ("blocks/footer.php"); ?>

</body>
</html>