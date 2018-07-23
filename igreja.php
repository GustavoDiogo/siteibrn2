<?php include("header.php"); ?>

<style type="text/css">
	#maindiv{
		display: flex;
	}
	#banner{
		width: 65%;
    	margin: 0.5em 0em 0.5em 0.5em;
	}
	#banner img{
		width: 100%;
	}
	#descricao{
		background-color: #087a8a;
   		width: 35%;
    	margin: 0.5em 0.5em 0.5em 0.5em;
	}
	@media (max-width: 991px){
		#maindiv{
			flex-wrap: wrap;
		}
		#banner{
			width: 100%;
			margin: 0.5em 0.5em 0.5em 0.5em;
		}
		#descricao{
			width: 100%;
		}
	}
</style>

<div id="maindiv">
  <div id="banner">
  	<img src="images/igreja1.jpg">

  	<div style="flex-wrap: nowrap;">
  		<a href="">A Igreja</a>
  		<a href="">O Pastor</a>
  		<a href="">Exame das Escrituras</a>
  		<a href="">Compromisso Social</a>
  	</div>

  </div>
  <div id="descricao">
    <div style="margin: 1em 1em 1em 1em;text-align: justify;color: white">
      <h3 align="middle">IGREJA BATISTA REPRESA NOVA</h3>
		<p style="font-style: italic;">
		“Pois Ele é a nossa paz, o qual de ambos fez um e destruiu a
		barreira, o muro da inimizade” (Efésios 2.14).
		</p>
		<p>
		A Igreja Batista Represa Nova é uma família que pertence
		a Deus, formado por homens e mulheres que creram
		em Cristo como seu Senhor e Salvador. Por este ato da
		graça de Deus as barreiras e inimizades entre as pessoas
		foram derrubadas e assim, repudiamos toda tentativa de
		manifestação preconceituosa de qualquer espécie entre
		nós.
		</p>
		<p style="font-style: italic;">
		“Não há salvação em nenhum outro, pois, debaixo do céu
		não há nenhum outro nome dado aos homens pelo qual
		devamos ser salvos” (Atos 4.12).
		</p>
		<p>
		Assim, nós existimos para:
		Alcançar e treinar pessoas para discipular as nações
		</p>
    </div>    
  </div>
</div>

<?php include("footer.php"); ?>