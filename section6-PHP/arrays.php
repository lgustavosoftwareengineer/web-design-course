<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 6 - Operações</title>
    <!--Imagem na aba do navegador-->
    <link rel="shortcut icon" href="./public/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <?php 
        $lista = array(1,2,3,4,7);
        $listaComIndex = array("A"=>1, "B"=>2);
        $cont = 0;

        // Printando os elementos do array enquanto eu caminho por ele
        foreach($lista as $valorqualquer){
            $cont++;
            echo "
            <div class=\"container\">
                <h1 class='display-1'> 
                    Printando o valor $cont: <p style=\"color: red\">".$valorqualquer."</p> 
                </h1>
                
            </div>";
        };

        // Printando os elementos da listaComIndex
        print_r($listaComIndex);
        
        // Printando um elemeto apartir do index definido dele
        print_r($listaComIndex["A"])
        
    
    
    
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>