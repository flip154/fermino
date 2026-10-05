<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Atividades DS</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <h2 class="logo">Meu Portifólio</h2>
            <ul class="menu">
                <li><a href="#inicio"></a>Início</li>
                <li><a href="#sobre"></a>Sobre</li>
                <li><a href="#habilidades"></a>Habilidades</li>
                <li><a href="#projetos"></a>Projetos</li>
                <li><a href="#contato"></a>Contato</li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="inicio" class="inicio">
            <div class="inicio-conteudo">
                <p class="saudacao">Olá, eu sou </p>
                <h1>Felipe Fermino</h1>
                <h2>Desenvolvedor em Formação</h2>
                <p></p>
                <a href="#projetos" class="botao">
                    Ver meus Projetos
                </a>
            </div>
        </section>

        <section id="sobre" class="secao">
            <h2 class="titulo-secao">Sobre Mim</h2>
            <div class="foto">
                JS
            </div>
            <div class="sobre-texto">
                <h3>Quem sou eu?</h3>
                <p>
                    Me chamo Felipe Fermino sou 
                    estudante de desenvolvimento de sistemas.
                </p>
                <p>
                    Atualmente estou estudando sobre PHP, HTML e CSS. Este portifolio reune 
                    alguns dos meus projetos que desenvolvi durante o curso de desenvolvimento de sistemas.
                </p>
                <p>
                    Meu objetivo é seguir evoluindo como desenvolvedor,
                    além de aprender novas tecnologias.
                </p>
            </div>
        </section>

        <section id="habilidades" class="secao secao-destaque">
            <h2 class="titulo-secao">Minhas Habilidades</h2>
            <p class="subtitulo-secao">
                Algumas tecnologias que estou estudando:
            </p>
            <div class="lista-habilidades">
                <div class="habilidades">
                    HTML
                </div>
                <div class="habilidades">
                    CSS
                </div>
                <div class="habilidades">
                    PHP
                </div>
            </div>
        </section>
        
        <section id="projetos" class="secao">
        <h2 class="titulo-secao">Minhas Habilidades</h2>
            <p class="subtitulo-secao">
                Alguns peojetos desenvolvidos durante as aulas: 
            </p>
            <div class="peojetos-container">
                <div class="projeto-card">
                    <div class="projeto-numero">
                        01
                    </div>
                    <h3>Verificação de Idade</h3>
                    <p>
                        Sistema desenvolvido para praticar
                        formulários e manipulação de dados.
                    </p>
                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="projetos/idade.php" class="link-projeto">
                        Ver Projeto:
                    </a>
                    </div>

                    <div class="peojetos-container">
                        <div class="projeto-card2">
                        <div class="projeto-numero">
                            02
                        </div>
                        <h3>Cadastro de Jogos</h3>
                        <p>
                            Sistema desenvolvido para praticar
                            inserção de dados em banco de dados e manipulação de dados.
                        </p>
                        <div class="tecnologias">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>
                        </div>
                        <a href="projetos/jogos.php" class="link-projeto">
                        Ver Projeto:
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>