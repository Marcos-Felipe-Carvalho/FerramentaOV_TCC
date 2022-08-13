<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="login">
        <h1 class="text-center">Cadastro</h1>
        <form id="form_register" method="post" action="../model/insert/insertUser.php" class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="userName">Digite seu nome completo:</label>
                <input class="form-control" type="text" name="userName" id="userName">
            </div>

            <div class="form-group was-validated">
                <label for="profileSelect">Perfil de acesso:</label>
                <select class="form-control" id="profileSelect" required name="profile">
                    <option disabled selected>Selecione o perfil de acesso</option>
                    <option>Psicólogo/Orientador Vocacional</option>
                    <option>Entrevista/Orientado</option>
                </select>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="email">Endereço de e-mail:</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="password">Senha de acesso</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>

            <input class="btn btn-success w-100" type="submit" name="save" value="CADASTRAR-SE">

            <p class="text-center register">Já possui cadastro?<a href="../index.php"><span class="info-register">Fazer
                        login</span></a></p>

        </form>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <!--Script-->
    <script>
        const btn_submit = document.querySelector("#form_register")
        btn_submit.addEventListener('submit',()=>{
            var name = document.querySelector("#email").value;
            console.log(name);

        })
    </script>
</body>

</html>