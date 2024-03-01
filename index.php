<?php
    $name = $firstname = $email = $phone = $message = "";
    $nameError =  $firstnameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo = "yanick812@gmail.com";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess = true;
        $emailText = "";

        if(empty($name))
        {
            $nameError = "Votre nom !";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "name : $name \n";
        }

        if(empty($firstname))
        {
            $firstnameError = "Votre prénom !";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "firstname : $firstname \n";
        }

        if(empty($phone))
        {
            $phoneError = "Votre numéro de téléphone  !";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Phone : $phone \n";
        }

        if(empty($message))
        {
            $messageError = "Votre message s'il vous plaît !";
            $isSuccess = false;
        } 
        else
        {
            $emailText .= "Message : $firstname \n";
        }

        if(!isEmail($email))
        {
           $emailError = "Email invalide !"; 
           $isSuccess = false;
        }
        else
        {
            $emailText .= "Email : $email \n";
        }

        if(!isPhone($phone))
        {
            $phoneError = "Que des chiffres et des espaces";
            $isSuccess = false;
        }
        if($isSuccess)
        {
            $headers = "From :  $name $firstname <$email>\r\nReply-To: $email";
           mail($emailTo, "Un message de votre site", $emailText , $headers);
           $name = $firstname = $email = $phone = $message = "";
        }
    }

    function isPhone($var)
    {
        return preg_match("/^0-9 ]*$/", $var);
    }

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }
?>

<!DOCTYPE htmls>
    <head>
        <title>Yanick Armand </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width = divice-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css? family=lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="60">
         <nav class="navbar-left navbar-inverse navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand "
                     style="color: whyte; 
                     text-transform: none;
                     font-size :17px;
                     font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"
                    >Yanick Armand</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#about">Moi</a></li>
                        <li><a href="#skills">Compétences</a></li>
                        <li><a href="#cours">Expérience</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#recommandation">Recommandation</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
         </nav>
        <section id="about" class="container-fluid">
            <div class="col-xs-8 col-md-4 profile-picture">
                <img src="IMG_20220303_165623_735.jpg" alt="yanick" class="img-circle">
            </div>
            <div class="heading">
                <h1>Hello, Bienvenue</h1>
                <h3>Dévéloppeur Web et Mobile
                    Freelance
                </h3>
                <a href="#contact" class="button1">Contactez-moi</a>
            </div>
        </section>

        <section id="skills">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <h5>HTML 100%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <h5>CSS 100%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                <h5> JAVASCRIPT 90%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress"><div class=""></div>
                            <div class="progress-bar" role="progress-bar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%;">
                                <h5>JQUERY 88%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <h5>BOOTSTRAP 100%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progress-bar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                <h5> ANGULAR 85%</h5>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="cours">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2> cours </h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="file:///C:/wamp/www/mon%20site/cours_ta/ta.php" class="lesson">terminale a</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="C:\wamp\www\mon site\cours_ta\ta.php" class="lesson">terminale c</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="C:/wamp/www/mon site/cours_td/td.php" class="lesson">terminale d</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">terminale e</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="file:///C:/wamp/www/mon%20site/cours_pa/pa.php" class="lesson">terminale ti</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="file:///C:/wamp/www/mon%20site/cours_pa/pa.php" class="lesson">première a</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">première c</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">première d</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">première e</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">première ti</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">séconde a</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">séconde c</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">troisième</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">oeuvres</a>
                       </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="lesson-block">
                        <a href="#" class="lesson">livres</a>
                       </div>
                    </div>
                   
                </div>
            </div>
        </section> -->
        <div class="bs-example" class="col-md-6">
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Formations </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>
                                 Nous proposons des formations  pour le développement <b>Web</b> et <b>Mobile</b><br>
                                 dans des langages solides et Framework du moment  <br>
                                 <br>
                                <i><a href="file:///C:/wamp/www/mon%20site/formation.php" target="_blank">Continuer</a></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Cours</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>
                                Nous proposons des cours d'enseignement sécondaire générale <br>
                                en informatique coformement au programme en vigueur (APC)<br>
                                <br>
                                <i><a href="#" target="_blank">Continuer</a></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTree">Documentations</a>
                        </h4>
                    </div>
                    <div id="collapseTree" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>
                                Nous proposons des documents sur des langages de programmation <br>
                                les plus populaires du moment qui pouront vous permttre de faire vos <br>
                                 preuves dans des entreprise <br>
                                <br>
                                <i><a href="#" target="_blank">Continuer</a></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="education">
            <div class="container">
                <div class="red-divider"></div>
            <div class="heading">
                <h2>Education</h2>
            </div>
                <div class="row">
                <div class="col-sm-6">
                        <div class="education-block">
                            <h5>2023</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>INSTITUT SUPERIEUR DE TECHNOLOGIE</h3>
                            <h4></h4>
                            <div class="red-divider"></div>
                            <p>Génie Logiciel</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="education-block">
                            <h5>2023</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>MAARON HIGHER INSTITUE</h3>
                            <h4></h4>
                            <div class="red-divider"></div>
                            <p>Génie Logiciel</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="education-block">
                            <h5>2021</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>IAI-CAMEROUN CENTRE D'EXCELLENCE TECHNOLOQUE PAUL BIYA</h3>
                            <h4></h4>
                            <div class="red-divider"></div>
                            <p>Système et Réseau</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="education-block">
                            <h5>2021</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>CERTIFICATION</h3>
                            <div class="red-divider"></div>
                           <p>DART - FLUTTER</p>
                           <p>CCNP - CCNA</p>
                           <p>C - C++ -  PYTHON - JAVA</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio">
            <div class="container">
                <div class="wite-divider"></div>
                <div class="heading">
                    <h2>Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a  class="thumbnail" href="http://facebook.com" target="_blank">
                            <img src="20.7 facebook_share.png.png" alt="facebook share">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a  class="thumbnail" href="http://google.com" target="_blank">
                            <img src="20.5 google_translate.png.png" alt="google_translate">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a  class="thumbnail" href="http://twitter.com" target="_blank">
                            <img src="20.1 twitter_video.png.png" alt="twitter_video">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a  class="thumbnail" href="http://google.com" target="_blank">
                            <img src="20.2 youtube.png.png" alt="Youtube">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a  class="thumbnail" href="http://twitter.com" target="_blank">
                            <img src="20.8 twitter_retweet.png.png" alt="twitter_retweet">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a  class="thumbnail" href="http://facebook.com" target="_blank">
                            <img src="20.9 facebook_video.png.png" alt="facebook_video">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="recommandation">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Recommandation </h2>
                </div>
                <div id="myCarousel" class="carousel slide txt-center" data-ride="carousel" >
                    <ol class="carousel-indicators">
                        <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="myCarousel" data-slide-to="1"></li>
                        <li data-target="myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <h3>Yanick t'es le meilleur merci pour tous</h3>
                            <h4>Larry page</h4>
                        </div>
                        <div class="item">
                            <h3>l'esprit le plus créatif que j'ai vu de toute ma vie </h3>
                            <h4>Merci Yanick </h4>
                        </div>
                        <div class="item">
                            <h3>Tu es le plus fort de tous</h3>
                            <h4> Ton ami Jean Calvin Blaise</h4>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                        <span glyphicon glyhicon-chevron-left></span>
                    </a>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                        <span glyphicon glyhicon-chevron-right></span>
                    </a>
                </div>
            </div>
        </section>

        <section id="contact" >
            <div class="container">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
                <div class="col-lg10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="">
                        <div class="row">
                            <div class="col-md-6">
                            <label for="name">Nom <span class="blue">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre Nom"  value="<?php echo $name; ?>">
                                <p class="comments"> <?php echo $nameError  ?></p>
                            </div>

                            <div class="col-md-6">
                            <label for="firstname">Prénom <span class="blue">*</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom"  value="<?php echo $firstname; ?>">
                                <p class="comments"> <?php echo $firstnameError  ?></p>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email">Email <span class="blue">*</span></label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Votre email"  value="<?php echo $email; ?>">
                                <p class="comments"> <?php echo $emailError  ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone; ?>">
                                <p class="comments"> <?php echo $phoneError  ?></p>
                            </div>

                            <div class="col-md-12">
                                <label for="message">Message <span class="blue">*</span></label>
                                <textarea name="message" id="message" class="form-control" placeholder="Votre message"  value="<?php echo $message; ?>"  rows="4"></textarea>
                                <p class="comments"> <?php echo $messageError  ?></p>
                            </div>

                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises</strong> </p>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="btn" value="Envoyer">
                            </div>
                        </div>
                        <p class="thank-you" style="display: <?php if($isSuccess) echo 'bloc'; else echo 'none'; ?> ">Votre message a bien été envoyé. Merci  :)</p>
                    </form>
                </div>
            </div>
            </div>
        </section>

        <footer class="text-center">
            <a href="#about">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <h5>Yanick_Armand.com</h5>
        </footer>
    </body>
</html>