<?php
require_once 'links.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Шестнадцатиричная система в десятичную | Информатика</title>
  <meta name="description" content="Декодировать шестнадцатиричный-hex код в десятичную систему">
  <meta name="keywords" content="hex-code, hexocode, декодировать hex код, декодер">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/style_compsci.css">

  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

  <script>
   function funcSuccess(data) {
  	if ($("#text2").val() != '') 
  	{
  		elText = $("#text2").val();
  		elText = elText.replace(elText,data);
  		$("#text2").val(elText); 
  	} else 
  	{
  		$("#text2").val(data);
  	}
  }  	
  function Request_Ajax(click,val) 
  {
  	$(document).ready (function () {
  		$(click).bind("click", function () {
  		$.ajax({
  		 url: 'hex_value.php',
  		type: "POST",                     
  		 data:({hex: $(val).val()}),
  		 dataType: "html",
  		 success:funcSuccess
  			});
  		});
  	});
  }
  Request_Ajax('#enter','#text1')
</script>
</head>
<body>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" style="color: #007BFF;">#Информатика</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Главная страница<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Выбрать уравнение
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BC; ?>">Кодировать в бинарный код</a>
          <a class="dropdown-item" href="<?php echo BCR; ?>">Декодировать бинарный код</a>
          <a class="dropdown-item" href="<?php echo BN; ?>">Десятичная система в двоичную</a>
          <a class="dropdown-item" href="<?php echo BNR; ?>">Двоичная система в десятичную</a>
          <a class="dropdown-item" href="<?php echo HN; ?>">Десятичная система в шестнадцатиричную</a>
          <a class="dropdown-item" href="#">Шестнадцатиричная система в десятичную</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: #007BFF;">Увидеть больше</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Справка</a>
      </li>
    </ul>
  </div>
</nav>

<center><h1>Шестнадцатиричная система в десятичную</h1></center>

<div class="form-row form-col">
  <div class="col col1">
    <p>Hex-></p>
    <textarea class="form-control" id="text1" rows="5" name="hex" value=""></textarea>
  </div>

  <div class="col col2">
    <p>->Dec</p>
    <textarea class="form-control" id="text2" rows="5" name="dec" value=""></textarea>
  </div>    
</div>

<center>
  <input class="btn btn-primary btn-lg btn-margin" type="submit" value="Декодировать" id="enter">
  <a class="btn btn-secondary btn-margin btn-lg" href="<?php echo HN; ?>" role="button"><img src="../img/arrows.png" width="26"></a>
</center>


<!-- Scripts! -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- End -->

</body>
</html>
