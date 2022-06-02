<?php

    include './administracao/conexao.php';

    $noticia__titulo = $_POST['noticia__titulo'];
    $noticia__data = date("Y-m-d");
    $noticia__texto = $_POST['noticia__texto'];
    $noticia__imagem = $_POST['noticia__imagem'];

    //INSERINDO DADOS 

    $sql = "INSERT INTO noticias (titulo, data_noticia, texto, foto)
    VALUES ('$noticia__titulo', '$noticia__data', '$noticia__texto', '$noticia__imagem')";

    if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    include './administracao/conexao.php';

    //PUXANDO DADOS

    $sql = "SELECT titulo, data_noticia, texto, foto FROM noticia ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            
            echo 
            
            "
                <h1>" . $row['titulo'] . "</h1>
                
                <br>" . $row['data_noticia'] . "<br>

                <p>" . $row['texto'] . "</p>

                <br>

                <img src=\"../../imagens/" . $row['foto'] . "\">

                <br>

            ";
        }
        } else {
        echo "0 results";
        }
        
        mysqli_close($conn);

?>