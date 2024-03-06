<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
    <form method="POST" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div id="nome">
                <label for="">Nome</label>
                <input type="text" id="nome_input" required name="nome_input"><br>
            </div>
            <div id="CPF">
                <label for="">CPF</label>
                <input type="text" id="cpf_input" required name="cpf_input"><br>
            </div>
            <div id="telefone">
                <label for="">Telefone</label>
                <input type="text" id="telefone_input" required name="telefone_input"><br>
            </div>
            <div id="nascimento">
                <label for="">Data que veio ao mundo</label>
                <input type="date" id="nascimento_input" required name="nascimento_input"><br>
            </div>
            <div id="email">
                <label for="">Email</label>
                <input type="text" id="email_input" required name="email_input">
            </div>
            <div id="estudante">
                <input type="checkbox">
                <label for="" id="eh_estudante" name="eh_estudante">Você é estudante</label><br>
            </div>
            <div id="button_form">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <?php



if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nome = isset($_POST["nome_input"]) ? $_POST["nome_input"] : "Não informado";
    $cpf = isset($_POST["cpf_input"]) ? $_POST["cpf_input"] : "Não informado";
    $telefone = isset($_POST["telefone_input"]) ? $_POST["telefone_input"] : "Não informado";
    $nascimento = $_POST["nascimento_input"];
    $email = isset($_POST["email_input"]) ? $_POST["email_input"] : "Não informado";
    $estudante = isset($_POST["eh_estudante"]) ? "Sim" : "Não";

    $nascimento_objeto = new DateTime($nascimento);
    $dia = $nascimento_objeto->format("d");
    $mes = $nascimento_objeto->format("m");
    $ano = $nascimento_objeto->format("y");


    echo "<p>Eu, $nome, $estudante sou estudante. Meu número de CPF é $cpf, nasci em $dia/$mes/$ano e tenho " . (date("Y") - date("Y", strtotime($nascimento))) . " anos de idade. Meu telefone para contato é $telefone e o meu email é $email.</p>";

} elseif ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_POST)) {
    echo "<p>Formulário preenchido de forma incorreta.</p>";
}
?>

    
    
    


</body>
</html>
