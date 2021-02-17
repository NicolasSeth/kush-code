<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <form>
            <div class="mb-3">
                <h1>Efetue seu Cadastro</h1>
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="nome" placeholder="José Silva">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@gmail.com">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" nome="senha" placeholder="***********">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <a href="index.html" class="btn btn-primary">Voltar para Tela Inicial</a>
        </form>
    </div>


</body>

</html>