<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="./css/login.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>

    <div class="header">
        <div class="logo_peq"></div>
        <div class="logo_hor"></div>
        <span class="categorias_txt">Categorias</span>
        <span class="suporte_txt">Suporte</span>
        <div class="car_img"></div>
        <div class="perfil_fundo">
            <div class="perfil_img"></div>
        </div>

    </div>

    <div class="login_box">
        <span class="login_txt">Login</span>
        <div class="email">
            <input type="email" placeholder="email"></input>
        </div>
        <div class="senha">
            <input type="senha" placeholder="senha"></input>
        </div>
        <div class="entrar_btn" onclick="location.href='index.php'">
            <span class="entrar_txt">Entrar</span>
        </div>
        <span class="possui_txt">Não possui cadastro?</span>
        <span class="criar_txt" onclick="location.href='cadastro.php'">Crie sua conta</span>
    </div>

    <div class="footer">
        <span class="home_txt">Home</span>
        <span class="cat_txt">Categorias</span>
        <span class="prod_txt">Produtos</span>
        <span class="sup_txt">Suporte</span>
        <span class="cont_txt">Contate-nos</span>
        <div class="logo_f"></div>
    </div>
</body>

</html>