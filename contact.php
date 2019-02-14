<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Xan Olazcuaga Garibal - Contact </title>
<!-- call bootstrap -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="monCss.css">


</head>

<body>
  <div class="container-fluid">
    <div class="header navbar navbar-fixed-top" role="navigation">
      <div class="col-md-12 col-sm-6 col-xs-3">
        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a class="nav-link " href="index.html">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="etudes.html">Diplômes et études</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="expPro.html">Expériences professionnelles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="competences.html">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>

<!-- CONTENT -->
<div class="container">

<form action="formulaireContact.php" method="post">
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label for="inputname">Votre nom</label>
<input required type="text" name="name" class="form-control" id="inputname" value="">
</div><!--/*.form-group-->
</div><!--/*.col-md-6-->

<div class="col-md-6">
<div class="form-group">
<label for="inputemail">Votre email</label>
<input required type="email" name="email" class="form-control" id="inputemail" value="">
</div><!--/*.form-group-->
</div><!--/*.col-md-6-->

<div class="col-md-12">
<div class="form-group">
<label for="inputmessage">Votre message</label>
<textarea required id="inputmessage" name="message" class="form-control"></textarea>
</div><!--/*.form-group-->
</div><!--/*.col-md-12-->

<div class="col-md-12">
<div class="checkbox">
<label for="checkspam">
<input type="checkbox" name="antispam" id="checkspam">Je suis un spammer et je l'assume!
</label>
</div>
</div><!--/*.col-md-12-->

<div class="col-md-12">
<button type='submit' class='btn btn-primary'>Envoyer</button>
</div><!--/*.col-md-12-->

</div><!--/*.row-->
</form>

</div><!--/*.container-->
<!-- END CONTENT -->

</body>
</html>
