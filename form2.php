<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container">
        <header> <h2>Exclua um registro</h2> </header>
            <form method="POST" action="delete.php">
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">ID</span>
                    <input autofocus type="text" name="id" class="form-control" placeholder="Nome completo do Professor" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <button type="submit" class="btn btn-primary">Deletar</button> 
            </form>
                <br>
                Deseja inserir algum registro? <a href="form.php">Clique aqui!</a> <br>
                Deseja alterar algum registro? <a href="form3.php">Clique aqui!</a>
            <footer>
                <br>
                EEEP Amélia - 2022
            </footer>
        </div>
    </section>
    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>