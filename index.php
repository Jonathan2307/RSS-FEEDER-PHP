<?php
$xml = simplexml_load_file('https://www.lemonde.fr/international/rss_full.xml');
$xml1 = simplexml_load_file('https://www.lemonde.fr/societe/rss_full.xml');
$xml2 = simplexml_load_file('https://www.lemonde.fr/economie/rss_full.xml');
$xml3 = simplexml_load_file('https://www.lemonde.fr/sport/rss_full.xml');
$xml4 = simplexml_load_file('https://www.lemonde.fr/cultures-web/rss_full.xml');

function getRssFlow($xml)
{
  foreach ($xml->channel->item as $article) {
    echo $article->title . '<br>';
    echo $article->description . '<br>';
    echo $article->pubDate . '<br>';
    echo $article->link . '<br>';
    echo $article->children('media', true)->content->attributes() . '<br>';
    echo $article->children('media', true)->content->description . '<br>';
  }
};

getRssFlow($xml);


function getRssXtimes($xml)
{
  for ($i = 0; $i < 10; $i++) {
    echo $xml->channel->item[$i]->title . '<br>';
    echo $xml->channel->item[$i]->description . '<br>';
    echo $xml->channel->item[$i]->link . '<br>';
    echo $xml->channel->item[$i]->children('media', true)->content->attributes() . '<br>';
    echo $xml->channel->item[$i]->children('media', true)->content->description . '<br>';
  }
};



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <!----------------------------------------NAVBAR---------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-rss"></i>&nbsp;RSS CHANNEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Sujet 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sujet 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sujet 3</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Paramètres
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


              <li><a class="dropdown-item" href="#">Dark Mode</a>
                <div class="form-check form-switch ms-3">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                </div>
              </li>

              <li><a class="dropdown-item" href="#">Nombre D'articles</a>
                <div class="form-check ms-3">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    6 articles
                  </label>
                </div>
                <div class="form-check ms-3">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    9 articles
                  </label>
                </div>
                <div class="form-check ms-3">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    12 articles
                  </label>
                </div>
              </li>


              <li><a class="dropdown-item" href="#">Choix Sujets</a>

                <div class="form-check form-check-inline ms-3 ">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Société</label>
                </div>
                <div class="form-check form-check-inline ms-3">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">International</label>
                </div>
                <div class="form-check form-check-inline ms-3">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                  <label class="form-check-label" for="inlineCheckbox3">Économie</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                  <label class="form-check-label" for="inlineCheckbox4">Sport</label>
                </div>
                <div class="form-check form-check-inline ms-3">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option5">
                  <label class="form-check-label" for="inlineCheckbox5">Culture Web</label>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------------------------------------NAVBAR------------------------------------------------>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <!------PREMIERE SLIDE : DERNIER ARTICLE CATEGORIE CHOISIE (IMG, CATEGORIE, TITRE)--------->
        <img src="https://img.lemde.fr/2021/06/30/673/0/5900/2950/644/322/60/0/cfe3e7b_653435307-jmug210629020.jpg" alt="...">
        <div class="carousel-caption d-md-block bg-dark">
          <h5>Société</h5>
          <p>« Avec la PMA pour toutes, les femmes gagnent le droit d’aller se mettre sur une liste d’attente »</p>

        </div>
      </div>
      <div class="carousel-item">


        <!------DEUXIEME SLIDE : DERNIER ARTICLE CATEGORIE CHOISIE (IMG, CATEGORIE, TITRE)--------->
        <img src="https://img.lemde.fr/2021/06/16/216/0/4170/2078/644/322/60/0/b527214_f5a51f2c50b645ba93f6caa54f662379-f5a51f2c50b645ba93f6caa54f662379-0.jpg" alt="...">
        <div class="carousel-caption d-md-block bg-dark">
          <h5>Sport</h5>
          <p>Euro 2021 : Sassuolo, le nouveau laboratoire du football italien</p>
        </div>
      </div>


      <!------TROISIEME SLIDE : DERNIER ARTICLE CATEGORIE CHOISIE (IMG, CATEGORIE, TITRE)--------->
      <div class="carousel-item">
        <img src="https://img.lemde.fr/2021/06/29/0/0/6048/3020/644/322/60/0/59c7940_129107040-000-977996.jpg" alt="...">
        <div class="carousel-caption d-none d-md-block bg-dark">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-fluid">





    <!------------------CARD ARTICLE----------------------->
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-1 d-flex align-items-center">

            <!----------PASTILLE COULEUR/NOM CATEGORIE-------------->
            <button class="btn btn-primary" name="france_societe"></button>
          </div>


          <!----------TITRE ARTICLE-------------->
          <div class="col-11 mt-2">
            <h6 class="ms-2">« Avec la PMA pour toutes, les femmes gagnent le droit d’aller se mettre sur une liste d’attente »</h6>
          </div>
        </div>

        <!----------BOUTON MODALE------------->

        <div class="d-flex justify-content-end me-3">
          <button type="button" class="btn btn-light me-4" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-search"></i></button>

          <!----------BOUTON REDIRECTION LIEN ARTICLE------------->
          <a href="LIEN VERS ARTICLE" class="btn btn-primary btn-sm">Lire l'article</a>
        </div>

      </div>
    </div>

    <!------------------------MODALE-------------------------------------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">

            <!------------CATEGORIE----------->
            <h6 class="modal-title" id="exampleModalLabel">Société</h6>

            <!-------------------BOUTON POUR FERMER LA MODALE---------->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="card text-center">
            <div class="card-body">

              <!---------------------IMAGE ARTICLE----------------->
              <img src="https://img.lemde.fr/2021/06/30/673/0/5900/2950/644/322/60/0/cfe3e7b_653435307-jmug210629020.jpg" width="300" height="150">

              <!-----------------TITRE ARTICLE-------------------->
              <h6 class="card-title">« Avec la PMA pour toutes, les femmes gagnent le droit d’aller se mettre sur une liste d’attente »</h6>

              <!---------------------DESCRIPTION ARTICLE--------------->
              <p class="card-text">Michaël Grynberg, chef du service de médecine de la reproduction à l’hôpital Antoine-Béclère, met en garde, dans un entretien au « Monde », contre la possible pénurie de gamètes, avec l’augmentation du nombre de demandes de PMA et le changement de régime d’anonymat des donneurs. </p>

              <!----------BOUTON REDIRECTION LIEN ARTICLE------------->
              <a href="https://www.lemonde.fr/societe/article/2021/06/30/avec-la-pma-pour-toutes-les-femmes-gagnent-le-droit-d-aller-se-mettre-sur-une-liste-d-attente_6086349_3224.html" class="btn btn-primary">Lire l'article</a>
            </div>

            <!---------DATE DE PUBLICATION-------->
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>

        </div>
      </div>
    </div>
    <!------------------------FIN MODALE-------------------------------------------->
    <!------------------------FIN CARD------------------------------------->



    <button class="btn btn-success" name="international"></button>
    <button class="btn btn-warning" name="economie"></button>
    <button class="btn btn-danger" name="sport"></button>
    <button class="btn btn-info" name="culture_web"></button>


</body>

</html>