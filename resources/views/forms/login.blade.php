<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Font do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <div class="content d-flex">
            <div class="left-side d-flex flex-column">
                <form action="" class="form form-login d-flex flex-column">
                    <div class="header-form">
                        <p class="sub-title">Bem-vindo!</p>
                        <p class="text">Primeira vez aqui? <a href="/cadastrar" class="header-form-link">Inscrever-se</a></p>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="email" class="label">E-mail:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Informe o seu endereço de e-mail">
                        <p class="error"></p>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="password" class="label">Senha:</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Informe a sua senha">
                        <a href="/recover" class="align-self-end reset-password">Esqueceu a senha?</a>
                    </div>
                    <input type="submit" value="Entrar" class="btn btn-primary">
                </form>
            </div>
    </div>
    <script>

    </script>
    <!-- Js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Biblioteca de icones -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>