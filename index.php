<!DOCTYPE html>
				<html lang="en">
				<head>
				  <meta charset="utf-8">
				  <meta http-equiv="X-UA-Compatible" content="IE=edge">
				  <meta name="viewport" content="width=device-width, initial-scale=1">
				  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				  <meta name="description" content="">
				  <meta name="author" content="">
				  <link rel="icon" href="img/favicon.ico">

				  <title>Abirobado</title>

				  <!-- Bootstrap core CSS -->
				  <link href="css/bootstrap.min.css" rel="stylesheet">
					<link href="css/bootstrap.css" rel="stylesheet">
				  <link href="css/custom.css" rel="stylesheet">
				  <link href="style.css" rel="stylesheet">

<script type="text/javascript">
					var credito = 10;
					var aux = 0;
					var aposta = 1;
					var nSort = 0;
					var slt1, slt2, slt3, slt4;
					
					function aleatorio(inferior,superior){ 
						numPossibilidades = superior - inferior; 
						aleat = Math.random() * numPossibilidades;
						aleat = Math.floor(aleat);
						return parseInt(inferior) + aleat;
					}
					
					function apostaMenos() {
						if (aposta > 1) {
							aposta--;
							document.getElementById('aposta').value = 'R$ ' + aposta;					
						}
					}
					
					function apostaMais() {
						if (aposta < 10) {
							aposta ++;
							document.getElementById('aposta').value = 'R$ ' + aposta;
						}
					}
					
					function verificaPremio() {
						//verifica se ganhou algum pr�mio
					
						//inicio dos pr�mios menores
						if (slt1 == 1 && slt2 == 2 && slt3 == 3 && slt4 == 4){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}

						else if (slt1 == 1 && slt2 == 2 && slt3 == 4 && slt4 == 3){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 1 && slt2 == 3 && slt3 == 2 && slt4 == 4){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 1 && slt2 == 3 && slt3 == 4 && slt4 == 2){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 1 && slt2 == 4 && slt3 == 2 && slt4 == 3){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 1 && slt2 == 4 && slt3 == 3 && slt4 == 2){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 2 && slt2 == 1 && slt3 == 3 && slt4 == 4){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}

						else if (slt1 == 2 && slt2 == 1 && slt3 == 4 && slt4 == 3){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 2 && slt2 == 3 && slt3 == 1 && slt4 == 4){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 2 && slt2 == 3 && slt3 == 4 && slt4 == 1){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 2 && slt2 == 4 && slt3 == 1 && slt4 == 3){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 2 && slt2 == 4 && slt3 == 3 && slt4 == 1){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
							
						else if (slt1 == 3 && slt2 == 2 && slt3 == 1 && slt4 == 4){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}

						else if (slt1 == 3 && slt2 == 2 && slt3 == 4 && slt4 == 1){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 3 && slt2 == 1 && slt3 == 2 && slt4 == 4){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 3 && slt2 == 1 && slt3 == 4 && slt4 == 2){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 3 && slt2 == 4 && slt3 == 2 && slt4 == 1){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 3 && slt2 == 4 && slt3 == 1 && slt4 == 2){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}

						else if (slt1 == 4 && slt2 == 2 && slt3 == 3 && slt4 == 1){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}

						else if (slt1 == 4 && slt2 == 2 && slt3 == 1 && slt4 == 3){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 4 && slt2 == 3 && slt3 == 2 && slt4 == 1){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 4 && slt2 == 3 && slt3 == 1 && slt4 == 2){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 4 && slt2 == 1 && slt3 == 2 && slt4 == 3){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						
						else if (slt1 == 4 && slt2 == 1 && slt3 == 3 && slt4 == 2){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 2);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 2 + ".");
						}
						//fim dos pr�mios menores
						
						//inicio dos premios maiores
						else if (slt1 == 1 && slt2 == 1 && slt3 == 1 && slt4 == 1){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 5);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 10 + ".");
						}
						
						else if (slt1 == 2 && slt2 == 2 && slt3 == 2 && slt4 == 2){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 10);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 10 + ".");
						}
						
						else if (slt1 == 3 && slt2 == 3 && slt3 == 3 && slt4 == 3){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 20);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 10 + ".");
						}
						
						else if (slt1 == 4 && slt2 == 4 && slt3 == 4 && slt4 == 4){
							aposta = parseInt(aposta);
							credito = credito + (aposta * 50);
							document.getElementById('credito').value = 'R$ ' + credito;
							window.alert("Parab�ns, voc� ganhou um pr�mio de R$ " + aposta * 10 + ".");
						} else{
						window.alert("Voce perdeu!");
						}
						//fim dos pr�mios maiores
					}
					
					function jogar() {
						if (credito < 1 || credito < aposta) {
							aux = window.prompt("Coloque mais creditos, digite a quantidade em R$:","1");
							aux = parseInt(aux);
							credito = parseInt(credito);
							credito = credito + aux;
							document.getElementById('credito').value = 'R$ ' + credito
						}
						else {
							if(credito > 0 && credito >= aposta){
								credito = credito - aposta;
								document.getElementById('credito').value = 'R$ ' + credito;
								document.getElementById('img1').src = 'img/roleta.gif';
								document.getElementById('img2').src = 'img/roleta.gif';
								document.getElementById('img3').src = 'img/roleta.gif';
								document.getElementById('img4').src = 'img/roleta.gif';
								
								//processamento do slot1
								nSort = aleatorio(1,5);
								switch (nSort) {
									case 1:
									cont=setTimeout("document.getElementById('img1').src = 'img/1.jpeg'", 4000);
									slt1 = 1;
									break;
									case 2:
									cont=setTimeout("document.getElementById('img1').src = 'img/2.jpeg'", 4000);
									slt1 = 2;
									break;
									case 3:
									cont=setTimeout("document.getElementById('img1').src = 'img/3.jpeg'", 4000);
									slt1 = 3;
									break;
									case 4:
									cont=setTimeout("document.getElementById('img1').src = 'img/4.jpeg'", 4000);
									slt1 = 4;
									break;
								}
								
								//processamento do slot2
								nSort = aleatorio(1,5);
								switch (nSort) {
									case 1:
									cont=setTimeout("document.getElementById('img2').src = 'img/1.jpeg'", 6000);
									slt2 = 1;
									break;
									case 2:
									cont=setTimeout("document.getElementById('img2').src = 'img/2.jpeg'", 6000);
									slt2 = 2;
									break;
									case 3:
									cont=setTimeout("document.getElementById('img2').src = 'img/3.jpeg'", 6000);
									slt2 = 3;
									break;
									case 4:
									cont=setTimeout("document.getElementById('img2').src = 'img/4.jpeg'", 6000);
									slt2 = 4;
									break;
								}
								
								//processamento do slot3
								nSort = aleatorio(1,5);
								switch (nSort) {
									case 1:
									cont=setTimeout("document.getElementById('img3').src = 'img/1.jpeg'", 7000);
									slt3 = 1;
									break;
									case 2:
									cont=setTimeout("document.getElementById('img3').src = 'img/2.jpeg'", 7000);
									slt3 = 2;
									break;
									case 3:
									cont=setTimeout("document.getElementById('img3').src = 'img/3.jpeg'", 7000);
									slt3 = 3;
									break;
									case 4:
									cont=setTimeout("document.getElementById('img3').src = 'img/4.jpeg'", 7000);
									slt3 = 4;
									break;
								}
								
								//processamento do slot4
								nSort = aleatorio(1,5);
								switch (nSort) {
									case 1:
									cont=setTimeout("document.getElementById('img4').src = 'img/1.jpeg'", 8000);
									slt4 = 1;
									break;
									case 2:
									cont=setTimeout("document.getElementById('img4').src = 'img/2.jpeg'", 8000);
									slt4 = 2;
									break;
									case 3:
									cont=setTimeout("document.getElementById('img4').src = 'img/3.jpeg'", 8000);
									slt4 = 3;
									break;
									case 4:
									cont=setTimeout("document.getElementById('img4').src = 'img/4.jpeg'", 8000);
									slt4 = 4;
									break;
								}
								cont=setTimeout("verificaPremio()", 9000);
							}
						}
					}
</script>
<body>
				 <div class="container-fluid ">

				  <nav class="navbar navbar-inverse navbar-fixed-top background-blue">
					<div class="container-menu">
					  <div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						 <div class="navbar-img">
						 <img src="img/logo.png" alt="some text" width=300 height=70>
						 
						</div>
					  </div>
					  <div id="navbar" class="collapse navbar-collapse navbar-edit">
						<ul class="nav navbar-nav name">
						  <li ><a href="#" class="tr" data-toggle="modal" data-target="#creditos">Creditos</a></li>
						  <li ><a href="#" class="tr" data-toggle="modal" data-target="#Regras">Regras</a></li>
						  
						  </ul>
					  </div><!--/.nav-collapse -->
					</div>
				  </nav>

			<div class="row background-white">
			<div class="row tela">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-3 col-sm-6">
			<form>
					<input id = "credito" class="desenho" type = "text" size = "5" value = "R$ 0" readonly />
			</form>
			</div>
			<div class="col-md-2 col-sm-1"></div>
			<div class="col-md-3 col-sm-6">
			<form>
					<input id = "aposta" class="bug" type = "text" size = "1" value = "R$ 1" readonly />
			</form>
			</div>
			
			
			</div>
			<div class="row center">
			<div class="col-md-3 col-sm-6">
			<img id = "img1" class="imagens" src = "img/1.jpeg" />
			</div>
			<div class="col-md-3  col-sm-6">
			<img id = "img2" class="imagens" src = "img/2.jpeg" />
			</div>
			<div class="col-md-3 col-sm-6">
			<img id = "img3" class="imagens" src = "img/3.jpeg" />
			</div>
			<div class="col-md-3 col-sm-6">
			<img id = "img4" class="imagens" src = "img/4.jpeg" />
			</div>
			
	
			</div>
			<div class="row ">
			<div class="col-md-4 col-sm-4">
			<img src = "img/Aposta.png" class="buttons "onMouseDown="this.src='img/Aposta.png';" onMouseUp="this.src='img/Aposta.png';" onclick = "apostaMais();"  />
			</div>
			<div class="col-md-4 col-sm-4">
			<img src = "img/apostam.png" class="buttons" onMouseDown="this.src='img/apostam2.png';" onMouseUp="this.src='img/apostam.png';" onclick = "apostaMenos();"/>
			</div>
			<div class="col-md-4 col-sm-4">
			<img src = "img/Jogar.png" class="buttons"onMouseDown="this.src='img/Jogar2.png';" onMouseUp="this.src='img/Jogar.png';" onclick = "jogar();" />
			</div>
			
			
	
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="modal fade modal-sm modal-lg" id="creditos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Creditos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="container-fluid">
					<div class="row">
					<div class="col-md-6 pacote">
					<img src = "img/f1.jpg" style="width:150px; height:267px;"/></br>
					<button type="button" class="btn myButton" style="width:150px;"> Comprar agora</button>
					</div>
					<div class="col-md-6 pacote">
					<img src = "img/f2.jpg" style="width:150px;height:267px;"/></br>
					<button type="button" class="btn myButton" style="width:150px;"> Comprar agora</button>
					</div>
					</div>
					</div>
					</div>
				 
				</div>
			  </div>
			  </div>
			  
			  
			  <div class="modal modal-sm fade modal-lg" id="Regras" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Regras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
					<div class="row">
						<p style="color:black;"> 4 Imagens diferentes: Aposta multiplicada por 2;</p>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/1.jpeg" />
						</div>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/2.jpeg" />
						</div>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/3.jpeg" />
						</div>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/4.jpeg" />
						</div>
				
					</div>
					<div class="row">
						<p style="color:black;"> 4 Imagens Iguais: Aposta multiplicada por 10;</p>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/1.jpeg" />
						</div>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/1.jpeg" />
						</div>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/1.jpeg" />
						</div>
						<div class="col-md-3 col-sm-3">
						<img class="imagens2" src = "img/1.jpeg" />
						</div>
				
					</div>
					
					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
			<body/>
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			</html>
