<!DOCTYPE html>
<html>
<body>
    <?php 
        session_start();
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $username=$_POST['username']??'Anônimo';
            $email=$_POST['email']??'sem email';
            $password=$_POST['password']??'';
            echo "Usuário cadastrado com sucesso!<br>";
            echo"Nome de Usuário:" .htmlspecialchars($username)."<br>";
            echo "Email:".htmlspecialchars($email)."<br>";
        }else{
            header("Location: register.html");
            exit;
        }
    ?>  
</body>
</html>