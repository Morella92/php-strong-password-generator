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
    
        // Funzione per generare una password casuale
        function generate_password($length) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!$%&*()_-,.?";
            $password = "";
        
            for ($i = 0; $i < $length; $i++) {
                $random_password = random_int(0, strlen($chars) - 1);
                
            }
        
        }
    
    ?>
</body>
</html>