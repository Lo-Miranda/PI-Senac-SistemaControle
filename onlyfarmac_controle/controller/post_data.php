<?php include('..\model\dbcon.php'); 


if(isset($_POST['add_cadastro'])) {    
    $f_name = $_POST['nome_comercial'];
    $f_quantidade = $_POST['quantidade'];
    
    if($f_name == "" || empty($f_name)){
        header('location:..\view\index.php?message=Campo de "Nome comercial" está vazio.');
    }
    else {
        $query = "INSERT into `farmacos` (`nome_comercial`, `quantidade`)
        values 
        ('$f_name', '$f_quantidade')";
        
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("query Failed".mysqli_error($connection));
        } else {
            header('location:..\view\index.php?msg=Operação realizada com sucesso');
        }
    }


    
}




?>