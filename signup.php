<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="./scripts/theme-switcher.js"></script>
    <title>Home</title>
</head>
<body class="light">
    <header>

    </header>

    <div id="dropdown-menu" class="has-dropdown">
        <a href="#" id="dropdown-menu-label">
            <p>___</p>
            <p>___</p>
            <p>___</p>
        </a>
        <ul class="dropdown">
            <li>
                <a href="./index.php">Home</a>
            </li>
            <li>
                <a href="./signup.php">Signup</a>
            </li>
            <li>
                <a href="./login.php">Login</a>
            </li>
        </ul>
    </div>
    
    <button id="theme-switcher" onclick="switchtheme()">
        <div id="bulb-cable"></div>
        <img src="./img/lightbulb.png">
    </button>

    <h1 class="center" style="margin: 15px 0 -15px;">Cadastro</h1>
    <article>
        <form action="">
            <label for="campo-nome" class="bold">Nome</label>
            <input type="text" name="campo-nome" id="campo-nome" required>

            <label for="campo-sexo" class="bold">Sexo</label>
            <div id="campo-sexo">
                <input type="radio" name="campo-sexo" id="campo-masculino">
                <label for="campo-masculino">Masculino</label>

                <input type="radio" name="campo-sexo" id="campo-feminino">
                <label for="campo-feminino">Feminino</label>

                <!--<input type="radio" name="campo-sexo" id="campo-outro">
                <label for="campo-outro">Outro</label>-->
            </div>

            <label for="" class="bold">Senha</label>
            <input type="password" name="campo-senha" id="campo-senha">
            
            <label for="" class="bold">Confirmar Senha</label>
            <input type="password" name="campo-confirmar" id="campo-confirmar">

            <input type="submit" value="Enviar">
        </form>
    </article>
</body>
</html>