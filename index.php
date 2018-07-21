<?php include("header.php"); ?>

<style type="text/css">
  #indexcarousel{
    width: 65%;
    margin: 0.5em 0em 0.5em 0.5em;
  }

  #devocional{
    background-color: #087a8a;
    width: 35%;
    margin: 0.5em 0.5em 0.5em 0.5em;
  }

@media (max-width: 991px){
  #index1{
    flex-wrap: wrap;
  }
  #indexcarousel{
    width: 100%;
    margin: 0.5em 0.5em 0.5em 0.5em;
  }
  #devocional{
    width: 100%;
  }
}
  
</style>

<div id="index1" style="display: flex">
  <div id="indexcarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#indexcarousel" data-slide-to="0" class="active"></li>
      <li data-target="#indexcarousel" data-slide-to="1"></li> 
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="width: " class="d-block w-100" src="images/carousel_ebd.jpg">
      </div>
      <div class="carousel-item ">
        <img style="width: 1080px" class="d-block w-100" src="images/carousel_missoes.jpg">
      </div>
    </div>
    <a class="carousel-control-prev" href="#indexcarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#indexcarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div id="devocional">
    <div style="margin: 1em 1em 1em 1em;text-align: justify;color: white">
      <h2 align="middle">Devocional da Semana</h2>
      Pensamento: Muitas vezes uma oportunidade nova parece boa aos nossos olhos e a impressão que temos é que tudo vai acabar bem, o problema é que as vezes nossa motivação está errada, e podemos acabar nos afastando da vontade de Deus. Por isso devemos sempre consultar ao Senhor e quando tivermos a resposta certa de Deus, então nossos planos passam a ser os mesmos planos de Deus, e assim podemos descansar, pois tudo o que Deus faz é perfeito e nunca falha.
      
      Oração: Pai querido, ajuda-me a lembrar sempre que eu devo consultar ao Senhor para que os meus caminhos sejam sempre os Seus caminhos, pois não quero andar fora do centro da sua vontade.
    </div>
  </div>
</div>
  
<?php include("footer.php"); ?>