<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>PHP Badwords</title>
    </head>

    <body>
        <div class="container">
            <section>
                <h1 class="mt-5 mb-5">Form Badword</h1>
                <form action="response.php" method="GET">
                    <div class="mb-4">
                        <label for="badword" class="mb-2 fw-bold">Parola da censurare</label>
                        <input type="text" class="form-control" id="badword" name="badword" placeholder="Parola da censurare">
                    </div>
        
                    <div class="mb-4">
                        <label for="paragraph" class="mb-2 fw-bold">Paragrafo</label>
                        <textarea class="form-control" name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-secondary" type="submit">Invia</button>
        
                </form>
            </section>

        </div>
        
    </body>
</html>