
<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_POST['add'])){
        $database = new Connection();
        $db = $database->open();
        try{
            //use prepared statement to prevent sql injection
            $stmt = $db->prepare("INSERT INTO members (nome, produto, funcionario, venda) VALUES (:nome, :produto, :funcionario, :venda)");
            //if-else statement in executing our prepared statement
            $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'] , ':produto' => $_POST['produto'] , ':funcionario' => $_POST['funcionario'] , ':venda' => $_POST['venda'])) ) ? 'Member added successfully' : 'Something went wrong. Cannot add member';  
         
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //close connection
        $database->close();
    }
 
    else{
        $_SESSION['message'] = 'Fill up add form first';
    }
 
    header('location: index.php');
     
?>