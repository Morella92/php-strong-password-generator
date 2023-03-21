<?php 
    include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-primary">
    
    <div class="container py-5">

        <div class="row text-center text-white">
            <div class="col-12">
                <h1>
                    Strong password Generator
                </h1>
                <h2>
                    Genera una password sicura
                </h2>
            </div>

            <div class="col-12">
                <!-- Creo un form -->
                <form action="" method="GET" class="py-3">
                    <label for="length">Lunghezza Password:</label>
                    <input type="number" name="length" min="8" max="16">
                    <input type="submit" value="Genera Password">
                </form>
            </div>
        </div>
        
    </div>
    
    <?php 

        

        // Verifico se è stata fornita una lunghezza

        $length = $_GET['length'];
        

        if(isset($length)) {

            //Genero la password casuale
            $password = generate_password($length);
            $message = "La tua password casuale lunga " . $length . " caratteri è: " . $password;
            
            ?>

            <!-- Stampo la password -->
            <p class="fs-5 ms-5 text-white"> <?php echo $message ?></p>
            <?php
        }

    ?>
</body>
</html>