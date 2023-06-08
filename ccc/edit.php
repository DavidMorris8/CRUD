<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_POST['edit'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $produto = $_POST['produto'];
            $funcionario = $_POST['funcionario'];
            $venda = $_POST['venda'];
 
            $sql = "UPDATE members SET nome = '$nome', produto = '$produto', funcionario = '$funcionario', venda = '$venda' WHERE id = '$id'";
            //if-else statement in executing our query
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Member updated successfully' : 'Something went wrong. Cannot update member';
 
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //close connection
        $database->close();
    }
    else{
        $_SESSION['message'] = 'Fill up edit form first';
    }
 
    header('location: index.php');
 
?>