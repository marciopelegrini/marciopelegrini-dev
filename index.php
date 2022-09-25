<?php
    $arquivo = 'contador.txt';
    if (file_exists($arquivo)) {
        $valor_atual = file_get_contents($arquivo);
        $valor_atual = chop($valor_atual);
        $valor_atual++;
    } else {
        $valor_atual = 1;
    }

    $ponteiro = fopen($arquivo, "w");
    fwrite($ponteiro, $valor_atual);
    fclose($ponteiro);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Marcio Pelegrini</title>

    <!-- Import Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link id="favicon" rel="icon" type="image/x-icon" href="img/global-info/favicon.ico">

    <!-- Import Theme & Components -->
    <link href="css/theme.min.css" rel="stylesheet">

    <!-- Import Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="top" data-spy="scroll" data-target="#navbar" data-offset="340">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#top">Mon CV</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a class="page-scroll hidden-xs hidden-sm hidden-md hidden-lg" href="#top"></a></li>
                <li><a class="page-scroll" href="#about-me">À propos de moi</a></li>
                <li><a class="page-scroll" href="#work-experience">Expérience professionnelle</a></li>
                <li><a class="page-scroll" href="#education">Formation</a></li>
                <!--<li><a class="page-scroll" href="#certificates">Certificates</a></li>-->
                <li><a class="page-scroll" href="#skills-tools">Compétences</a></li>
                <li><a class="page-scroll" href="#languages">Langues</a></li>
                <li><a class="page-scroll" href="#hobbies">Loisir</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right quick-links">
                <li><a href="https://twitter.com/marciopelegrini/" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="https://facebook.com/marciopelegrini" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://ca.linkedin.com/in/marcio-pelegrini" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>
                <!--<li><a href="http://codepen.io/tamashi/" target="_blank"><i class="fa fa-codepen"></i></a></li>-->
                <!--<li><a href="en.html"><strong>EN</strong></a></li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<section class="global-info">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="avatar">
                    <img src="img/global-info/marcio-profil-2019-small.jpg" alt="" class="img-responsive">
                </div>
                <div class="name-jobtitle">
                    <h2 class="title">
                        <small>TI Soutien technique et développeur web</small>
                        Marcio Andrei Pelegrini
                    </h2>
                </div>
            </div>
            <div class="col-md-7 hidden-sm hidden-xs">
                <div class="address-contact">
                    <div class="address">
                        <span>Address</span>
                        <p>Montréal<br/>
                            Canada</p>
                    </div>
                    <div class="contact">
                        <span>Contact</span>
                        <p>marcio.pelegrini@gmail.com<br/></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="resume-container">
    <section id="about-me" class="resume-section">
        <article class="container">
            <div class="row">
                <div class="category-title col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>À propos de moi</h2>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Montréal  —  QC</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Je m'appelle Marcio, enchanté.</h3>
                        <p>J'ai plus de 8 années d'expérience en soutien technique. Je suis diplômé en "Conception et programmation des sites web" au
                            Collège de Maisonneuve en 2015 et présentement je travaille à l'Université du Québec à Montréal - UQAM comme programmeur
                            web. Précédemment à Sednove Inc à Saint-Lambert, à la même fonction.
                        </p>
                        <p>En espérant développer ma carrière en TI, j'aime travailler comme développeur d'applications web et j'aime aussi travailler
                            comme technicien en soutien technique, Windows, Linux et Mac :-)
                        </p>
                        <p>Je suis reconnu pour établir des priorités et respecter les délais, ainsi que la capacité de détecter les problèmes et les
                            résoudre.<br/> Je suis calme, courtois et patient.
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section id="work-experience" class="resume-section">
        <article class="container">
            <div class="row">
                <div class="category-title col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Expérience professionelle</h2>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Novembre 2016 – Présent</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Développeur web
                            <small>UQAM, Montréal</small>
                        </h3>
                        <p>À l'UQAM je développe des applications web dynamiques à l'aide du PHP et Laravel Framework, ainsi que la conception des pages web avec HTML,
                            Bootstrap, JavaScript, CSS et Ajax.<br/> Je conçois et développe des bases de données relationnelles MySQL et MariaDB.
                        </p>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Janvier 2016 – Avril 2016</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Programmeur Web back-end
                            <small>Sednove Inc., Saint-Lambert</small>
                        </h3>
                        <p>À Sednove j'ai travaillé à développer, maintenir et mettre à jour des applications web avec
                            PHP et base de données MariaDB pour divers projets et clients en utilisant HTML, JavaScript,
                            CSS et Ajax, dans un environnement Linux.</p>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Septembre 2013 - Avril 2014</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Technicien en informatique
                            <small>UQAM, Montréal</small>
                        </h3>
                        <p>À l'UQAM j'ai eu l'opportunité de travailler dans un environnement très dynamique en offrirent un soutien aux utilisateurs
                            et aussi leur fournir des informations requises sur les outils informatiques en PC et Mac.<br>
                            Je faisais la gestion des postes de travail dans l'Active Directory, inventaire des équipements, logiciels et planifier
                            des remplacements. Réparations des matériels comme carte mémoire, disques durs et cartes vidéos.<br>
                            J'ai effectué des installations et configurations des postes de travail à partir des images avec SCCM et des imprimantes.
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section id="education" class="resume-section">
        <article class="container">
            <div class="row">
                <div class="category-title col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Formation</h2>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Mai 2015 – Septembre 2015</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Collège de Maisonneuve - Montréal
                            <small>A.E.C. EN CONCEPTION ET PROGRAMMATION DE SITES WEB</small>
                        </h3>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Novembre 2012 – Septembre 2013</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Champlain Regional College - Saint-Lambert
                            <small>A.E.C. EN ITSS - INFORMATION TECHNOLOGY SUPPORT SPECIALIST</small>
                        </h3>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Janvier 2004 – Décembre 2007</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Universidade Paulista - Brésil
                            <small>BAC EN SCIENCES INFORMATIQUES</small>
                        </h3>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <!--<section id="certificates" class="resume-section">-->
    <!--<article class="container">-->
    <!--<div class="row">-->
    <!--<div class="category-title col-md-12">-->
    <!--<div class="row">-->
    <!--<div class="col-md-4">-->
    <!--<h2>Certificates</h2>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="card-container">-->
    <!--<span class="col-md-3 col-md-offset-1 side-note">July 2015 – Present</span>-->
    <!--<div class="col-md-6 resume-card">-->
    <!--<h3 class="title">Certified ScrumMaster® (CSM)-->
    <!--<small>SCRUM ALLIANCE</small>-->
    <!--</h3>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</article>-->
    <!--</section>-->
    <section id="skills-tools" class="resume-section">
        <article class="container">
            <div class="row">
                <div class="category-title col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Compétences</h2>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note hidden-print">Infrastructure TI</span>
                    <div class="col-md-6 resume-card">
                        <!--<h3 class="title">Multidisciplinary Design</h3>-->
                        <div class="skill">
                            <h4 class="title">Windows 7, 10</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;">
                                    <span class="sr-only">Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Windows 2008, 2012 Server</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">Professional</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Mac OS X</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;">
                                    <span class="sr-only">Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Linux (Ubuntu, CentOS, SUSE)</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">Professional</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Power Shell, Shell Script</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 75%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">SCCM 2012</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 70%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">VMWare, VirtualBox</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Matériel, Logiciel</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;">
                                    <span class="sr-only">Expert</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note hidden-print">Programmation</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Développement</h3>
                        <div class="skill">
                            <h4 class="title">PHP</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">Professional</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Laravel 5+</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 85%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">HTML &amp; CSS</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">Professional</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Javascript</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 80%;">
                                    <span class="sr-only">Professional</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Bootstrap</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 85%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="title">Jquery / Ajax</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 70%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="skill">
                            <h4 class="title">C#, ASP.NET MVC</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div> -->
                        <div class="skill">
                            <h4 class="title">MySQL, MariaDB</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 90%;">
                                    <span class="sr-only">Intermediate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note">Outils</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title">Les outils que j'aime
                            <small>POUR DESIGN ET CODE</small>
                            <small>Mac OS, Linux et Windows</small>
                        </h3>
                        <div class="row list">
                            <div class="col-md-5">
                                <ul class="list-unstyled">
                                    <li>Vagrant</li>
                                    <li>Xampp, Laragon</li>
                                    <li>PHPStorm</li>
                                    <li>WebStorm</li>
                                    <li>Notedpad++</li>
                                    <li>Netbeans</li>
                                    <li>VisualStudio Code</li>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <ul class="list-unstyled">
                                    <li>MySQL Workbench</li>
                                    <li>PhpMyAdmin</li>
                                    <li>Brackets</li>
                                    <li>BitBucket</li>
                                    <li>GitHub</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section id="languages" class="resume-section">
        <article class="container">
            <div class="row">
                <div class="category-title col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Langues</h2>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note hidden-print">Langues</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title hidden-print">Langues</h3>
                        <div class="skill">
                            <h4 class="title">Fran&ccedil;ais
                                <small>Capacité professionnelle complète</small>
                            </h4>
                        </div>
                        <div class="skill">
                            <h4 class="title">English
                                <small>Compétence professionnelle</small>
                            </h4>
                        </div>
                        <div class="skill">
                            <h4 class="title">Portugais
                                <small>Langue maternelle</small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section id="hobbies" class="resume-section">
        <article class="container">
            <div class="row">
                <div class="category-title col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Loisir</h2>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <span class="col-md-3 col-md-offset-1 side-note hidden-print">Mes loisirs</span>
                    <div class="col-md-6 resume-card">
                        <h3 class="title hidden-print">Mes Loisirs
                            <small>SPORTS ET VOYAGE</small>
                        </h3>
                        <div class="row list">
                            <div class="col-md-3">
                                <ul class="list-unstyled">
                                    <li>Soccer</li>
                                    <li>Vélo</li>
                                    <li>Marche à pied</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</div>

<footer class="text-center">
    <p>© <?= date('Y') ?> Marcio Pelegrini</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- jQuery Easing -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Load main js -->
<script src="js/main.min.js"></script>

</body>
</html>