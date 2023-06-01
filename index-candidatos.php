<?php
if(isset($_GET['buscar'])){
    header('Location: 404.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngoTrabalho | Seu portal de recrutamento e seleção</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <!-- --------------------Cabeçalho-------------- -->
    <header>
        <a href="index-candidatos.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo da AngoTrabalho">
        </a>
        <nav class="nav-menu">
            <a href="index-candidatos.php">Início</a>
            <a href="index.php">Empresas</a>
            <a href="login-page.php">Iniciar Sessão</a>
            <div class="btn"><a href="register-CA.php">Registar</a></div> 
        </nav>
    </header>
    <!-- --------------Contéudo Principal------------ -->
    <main>
        <!-- Barra de Pesquisa para filtração -->
        <section class="info-container">
            <article class="banner">
                <div class="content">
                    <h1>Encontre a <span>Vaga Perfeita</span> para Si.</h1>
                    <p>Sua ferramenta valiosa para a busca por novas oportunidades de trabalho.</p>
                </div>
                <!-- Formulário -------------- -->
                <form action="#" name="form-search" class="form-search" method="get">
                    <div class="form-group">
                        <input type="text"  id="pesquisarCargo" name="pesquisarCargo" placeholder="Pesquisar por cargo, área, empresa..." autocomplete="off">
                    </div>
                    <div class="form-group">
                        <select name="pesquisarZona" id="pesquisarZona">
                            <option disabled selected>Onde?</option>
                            <option value="Todas">Todas</option>
                            <option value="Bengo">Bengo</option>
                            <option value="Benguela">Benguela</option>
                            <option value="Bié">Bié</option>
                            <option value="Cabinda">Cabinda</option>
                            <option value="Cuando Cubango">Cuando Cubango</option>
                            <option value="Cuanza Norte">Cuanza Norte</option>
                            <option value="Cuanza Sul">Cuanza Sul</option>
                            <option value="Cunene">Cunene</option>
                            <option value="Huambo">Huambo</option>
                            <option value="Huíla">Huíla</option>
                            <option  value="Luanda">Luanda</option> <!-- selected="selected" -->
                            <option value="Lunda Norte">Lunda Norte</option>
                            <option value="Luanda Sul">Lunda Sul</option>
                            <option value="Malange">Malange</option>
                            <option value="Moxico">Moxico</option>
                            <option value="Namibe">Namibe</option>
                            <option value="Uíge">Uíge</option>
                            <option value="Zaire">Zaire</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="buscar"><i class="fa-solid fa-magnifying-glass icon"></i>Buscar</button>
                    </div>
                </form>
                </article>
                <img src="img/layered-waves-haikei.svg" class="wave">
                <!--  INFORMAÇÕES SOBRE AS VANTAGENS -->
                <article class="row">
                    <img src="img/pexels-karolina-grabowska-8528852.png" alt="">
                        <div class="row_content">
                            <h2 class="row_title">Oportunidades para sua carreira</h2>
                            <p>Você merece o que há de melhor, e isso inclui a sua carreira.</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-check icon"></i>Acesso a uma grande variedade de oportunidades de trabalho.</li>
                                <li><i class="fa-solid fa-circle-check icon"></i>Possibilidade de filtrar as vagas por localização, e outros critérios para encontrar exatamente o que você procura.</li>
                                <li><i class="fa-solid fa-circle-check icon"></i>Facilidade de candidatura, com a possibilidade de enviar currículos e cartas de apresentação diretamente pelo site.</li>
                            </ul>
                        </div>
                    </article>
                    <article class="row">
                    <div class="row_content">
                        <h2 class="row_title">A um clique da carreira <br> dos seus sonhos</h2>
                        <p>Com a tecnologia atual, nunca foi tão fácil alcançar a carreira dos seus sonhos. Com apenas um clique, você pode se conectar com pessoas, recursos e oportunidades que antes eram inacessíveis. Aproveite essa vantagem e comece a construir a carreira que você sempre quis. O sucesso está ao seu alcance!</p>
                    </div>
                    <img src="img/trabalho-em-equipe2.jpg" alt="Pessoas em reunião analisando papéis">
                </article>
                <img src="img/layered-waves-haikei (1).svg" class="wave2">
                <!-- Benefícios ------------------ -->
                <article class="row benefits">
                    <div class="card">
                        <div class="item item--1">
                            <i class="fa-solid fa-building icon"></i>
                            <span class="quantity"> 90+ </span>
                            <span class="text text--1"> Empresas </span>
                        </div>
                        <div class="item item--2">
                            <i class="fa-solid fa-briefcase icon"></i>
                            <span class="quantity"> 100+ </span>
                            <span class="text text--2"> Vagas</span>
                        </div>
                    </div>
                    <div class="row_content">
                        <h3 class="row_title">O melhor para sua jornada profissional</h3>
                        <p>Para ter sucesso na sua jornada profissional, é importante começar com uma visão clara do que você quer alcançar. Defina suas metas e trabalhe para alcançá-las. Invista em si mesmo, aprenda novas habilidades e esteja sempre disposto a crescer. </p>
                        
                    </div>
                </article>
        </section>
    </main>
    <!-- ---------------------RODAPÉ------------------- -->
    <?php
    include_once 'php/pages/footer.php';
    ?>
    <!-- ----------------JS------------- -->
    <script src="js/script.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>