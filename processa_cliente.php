<?php
define('HOST','localhost');
define('DBNAME', 'formulario_html');
define('USER', 'root');
define('PASSWORD', 'P4r4l3l3p1p3d0');
try {
        $conn = new PDO('mysql:host='. HOST .';dbname='. DBNAME, USER, PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    $stm = $conn->prepare('INSERT INTO cliente(nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente) VALUES (?, ?, ?, ?)');
    $resultSet = $stm->execute([
        $_REQUEST['nome_cliente'],
        $_REQUEST['cpf_cliente'],
        $_REQUEST['email_cliente'],
        $_REQUEST['data_nascimento_cliente']
    ]);
    if ($resultSet) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Ocorreu um erro e não foi possível slvar os dados";
    }

    $stm = null;
    $conn = null;
