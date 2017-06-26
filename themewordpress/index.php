<?php get_header ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script>
    document.write(Date());
    </script>
    <div id="afficherheure"></div>
<script type="text/javascript">
setInterval(function(){
    document.getElementById('afficherheure').innerHTML = new Date().toLocaleTimeString();
}, 1000);
</script>
<script src"js/main.js"></script>
    <title>Le blog 100% Hardware</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  </form>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Accueil</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="a_propos.html">A propos de moi</a>
                    </li>
                    <li>
                        <a href="#">Articles</a>
                    </li>
                    <li>
                        <a href="formulaire_contact.html">Contactez-moi</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Bienvenue sur mon blog
                    <small>100% Hardware</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="article1.html">Présentation de la carte graphique MSI GeForce GTX 1080 Ti ARMOR 11G OC</a>
                </h2>
                <p class="lead">
                    Par <a href="bio.html">Marien</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Publié le 16 juin 2017</p>
                <hr>
                <img class="img-responsive" src="img/geforce.jpg" alt="Photo du GPU MSI GeForce GTX 1080 Ti ARMOR 11G OC" title="Photo du GPU MSI GeForce GTX 1080 Ti ARMOR 11G OC"
                <hr>
                <p>Courte présentation de la carte graphique MSI GeForce GTX 1080 Ti ARMOR 11G OC. intitulé l'arme ultime d'un gamer avide de haute performances</p>
                <a class="btn btn-primary" href="article1.html">Lire l'article..<span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="article2.html">Présentation du processeur Intel Core i7-7700k</a>
                </h2>
                <p class="lead">
                    par <a href="bio.html">Marien</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Publié le 16 juin 2017</p>
                <hr>
                <img class="img-responsive" src="img/i7-7700k.jpg" alt="Photo du CPU Intel Core i7 7700k" title="Photo du CPU Intel Core i7 7700k"
                <hr>
                <p>Intel Core i7-7700k, le meilleur processeur du moment, en attendant la génération des Intel Core i9</p>
                <a class="btn btn-primary" href="article2.html">Lire l'article..<span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="article3.html">SSD Samsung SM961 + qu'est ce que le cloud computing et ce que j'en pense.</a>
                </h2>
                <p class="lead">
                    par <a href="bio.html">Marien</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Publié le 16 juin 2017</p>
                <hr>
                <img class="img-responsive" src="img/ssd.jpg" alt="Photo du SSD Samsung SM961" title="Photo du SSD Samsung SM961"
                <hr>
                <p>Le SSD Samsung SM961, aillant une vitesse d'écriture séquentielle montant jusqu'à 3200 MB/S ainsi que 1700 MB/S en transfert de données , plus qu'une bombe. Ainsi que mon avis sur le "cloud computing"</p>
                <a class="btn btn-primary" href="article3.html">Lire l'article.. <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Ancien</a>
                    </li>
                    <li class="next">
                        <a href="#">Nouveau &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Recherche sur mon blog</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Mes derniers articles</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="article1.html">MSI GeForce GTX 1080 Ti ARMOR 11G OC</a>
                                </li>
                                <li><a href="article2.html">Intel Core i7-7700k</a>
                                </li>
                                <li><a href="article3.html">SSD Samsung SM961</a>
                                </li>
                                <li><a href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>A propos de mon blog</h4>
                    <p>Bienvenue sur mon blog, 100% Hardware (Cartes Graphique, Processeur, SSD et bien d'autre produits, que ce sois du Intel,Nvidia et AMD )</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>
<?php get_footer ?>
