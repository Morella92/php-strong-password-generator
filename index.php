<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="container py-5">

        <div class="row">
            <div class="text-center col-12">
                <h1>
                    Strong password Generator
                </h1>
                <h2>
                    Genera una password sicura
                </h2>
            </div>
        </div>
        
        <div class="col-12">
            <!-- Creo un form -->
            <form action="" method="GET" class="text-center py-3">
                <label for="length">Lunghezza Password:</label>
                <input type="number" name="length" min="1" max="50">
                <input type="submit" value="Genera Password">
            </form>
        </div>
    </div>
    
</body>
</html>