<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?=  $this->Html->css('bootstrap');?>
    <?=  $this->Html->css('grayscale');?>
    <?=  $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')?>
    <?=  $this->Html->css('animate');?>     
    <?=  $this->fetch('css');?>


    <title>Fédération de pêche des alpes de haute provence</title>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="preloader">
        <div id="status"></div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li >
                        <a class="page-scroll" href="#page-top">Accueil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Le site à venir</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Nous contacter</a>
                    </li>
                    <?php
                    if ($this->Session->read('Auth.User')) {
                        echo "<li>";
                    echo $this->Html->link('Déconnexion',array('plugin'=>'users','controller'=>'users','action'=>'logout'));
                    echo "</li><li>";
                    }else{
                    echo "<li>";
                    echo $this->Html->link('Connexion',array('plugin'=>'users','controller'=>'users','action'=>'login'),array('class'=>'ajax','ajax-modal'=>'connexion',"data-toggle"=>"modal", "data-target"=>"#connexion"));
                    echo "</li><li>";
                    
                    echo $this->Html->link('Inscription',array('plugin'=>'users','controller'=>'users','action'=>'add'),array('class'=>'ajax','ajax-modal'=>'inscription',"data-toggle"=>"modal", "data-target"=>"#inscription"));
                    echo "</li>";}?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <?php
            include 'header.ctp';
             //include 'home.ctp';
            echo $this->Layout->sessionFlash();
            echo $content_for_layout;
            ?>
    <div id="inscription" class="modal fade" tabindex="1000" role="dialog" aria-labelledby="inscriptionLabel" aria-hidden="true">
          <div class="modal-body" id="inscription-content">
            
          </div>
        </div>

        <div id="connexion" class="modal fade" tabindex="1000" role="dialog" aria-labelledby="connexionLabel" aria-hidden="true">
          <div class="modal-body" id="connexion-content">
            
          </div>
        </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; <a href="http://peche-alpes-haute-provence.com/">http://peche-alpes-haute-provence.com/</a></p>
        </div>
    </footer>
    <?= $this->Html->script('jquery');?>
    <?= $this->Html->script('bootstrap.min');?>
    <?= $this->Html->script('jquery.easing.min');?>
    <?= $this->Html->script('wow.min');?>
    <?= $this->Html->script('custom');?>
    <?= $this->fetch('script');?>


</body>

</html>