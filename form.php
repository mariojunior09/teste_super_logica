<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Super Logica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="Validacao.php">
            <div class="row justfy-content-center">
                <div col-6>
                    <label for="userName">Nome do usuário:</label>
                    <input type="text" class="form-control" id="userName" name="userName"   >
                </div>
            </div>

            <div class="row justfy-content-center">
                <div col-6>
                    <label for="zipCode">CEP</label>
                    <input type="text" class="form-control" id="zipCode" name="zipCode" >
                </div>
            </div>

            <div class="row justfy-content-center">
                <div col-6>
                    <div>
                        <label for="phoneNumber">Número do telefone:</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" >
                    </div>
                </div>
            </div>

            <div class="row justfy-content-center">
                <div col-6>
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" >
                    </div>
                </div>
            </div>
            <div class="row justfy-content-center">
                <div col-6>
                    <div>
                        <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1
                            número):</label>
                        <input type="password" class="form-control" id="password" name="password" >
                    </div><br>

                    <input type="submit" class="btn btn-primary" value="Cadastrar" >
                </div>
            </div>
        </form>
    </div>
</body>

</html>