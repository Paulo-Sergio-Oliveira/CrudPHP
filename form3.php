<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container">
        <header> <h2>Atualize um registro</h2> </header>
            <form method="POST" action="update.php">
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">ID</span>
                    <input autofocus type="text" name="id" class="form-control" placeholder="Nome completo do Professor" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Professor</span>
                    <input autofocus type="text" name="prof" class="form-control" placeholder="Nome completo do Professor" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Serviços Gerais</span>
                    <input type="text" name="servgerais" class="form-control" placeholder="Nome completo do membro dos Serviços Gerais" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Gestão</span>
                    <input type="text" name="gestao" class="form-control" placeholder="Nome completo do membro da Gestão" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">E-mail</span>
                    <input type="email" name="email" class="form-control" placeholder="Exemplo@gmail.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    <div id="emailHelp" class="form-text">Nenhuma das informações desse cadastro serão compartilhadas.</div>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button> 
            </form>
                <br>
                Deseja inserir algum registro? <a href="form.php">Clique aqui!</a> <br>
                Deseja deletar algum registro? <a href="form2.php">Clique aqui!</a>
            <footer>
                <br>
                EEEP Amélia - 2022
            </footer>
        </div>
    </section>
    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>