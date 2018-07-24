<?php include("header.php"); ?>

<style type="text/css">
	#maindiv{
		display: flex;
	}
	#banner{
		width: 65%;
		background-color: #087a8a;
    	margin: 0.5em 0em 0.5em 0.5em;
	}
	#banner img{		
		width: 100%;
	}
	#banner-menu{
	    display: flex;
	    flex-wrap: wrap;
		justify-content: center;
		background-color: #087a8a;
	}
	#banner-menu a{
		margin: 1em 1em 1em 1em;
		flex-wrap: wrap;
		text-decoration:none;
		color: white;
		font-weight: 600;
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
		#banner-menu{
			display: grid;
			justify-items: center;
		}
		#descricao{
			width: 100%;
		}
	}
</style>

<div id="maindiv">
  <div id="banner">
  	<img src="images/igreja_banner.jpg">

  	<div id="banner-menu">
  		<a href="">A IGREJA</a>
  		<a href="">O PASTOR</a>
  		<a href="">EXAME DAS ESCRITURAS</a>
  		<a href="">COMPROMISSO SOCIAL</a>
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