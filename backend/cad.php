<?php 
    include("conexao.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $password = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    

    $sql = "INSERT INTO usuarios (nome, email, telefone, idade, curso, senha) 
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);

    if($stmt === false){
        die("Erro na preparação de querry: " . $con->error);
    }

    $stmt->bind_param("ssssss", $name, $email, $telephone, $age, $course, $password);

    if($stmt->execute()){
        echo"Cadastro realizado";
    } else {
        echo "Erro ao cadastrar! " . $stmt->error;
    }


    $stmt->close();
    $con->close();

?>