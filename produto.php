<?php
  include_once('header.php');
?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cibele, Felipe, Larissa, Leonardo, Ricardo">
    <meta name="description" content="Projeto integrador Full Stack">
    <link rel="stylesheet" href="css/master.css">
    <title>Blend Café - Produto</title>
  </head>
  <body>
    <main>
      <div class="abaNomeDoProduto">
        <ul>
          <li><a href="index.php">Home</a> / </li>
          <li><a href="#">Categoria</a> / </li>
          <li>Nome do Produto</li>
        </ul>
      </div>

      <div class="boxPrincipalDoProduto">
        <div class="boxImagensDoProduto">
          <div class="imagemPrincipalProduto">
            <img src="img/VCF-02-100W-min.webp" alt="Prensa Francesa" width="600px">
          </div>
          <div class="imagensSecundariasProduto">
            <img src="img/VCF-02-100W-min.webp" alt="" width="200px"><a href="#"></a>
            <img src="img/VCF-02-100W-min.webp" alt="" width="200px"><a href="#"></a>
            <iframe width="200" height="200" src="https://www.youtube.com/embed/fOFg-awZXKg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="boxResumoDoProduto">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p class="precoAtual"><span>$270.00</span></p>
          <div class="ratingProduto">
            <!-- Inserir o código para aparecer a avaliação em formato de estrela -->
          </div>
          <a href="#">1 avaliação</a>
          <div class="resumoMarcaEDisponibilidade">
            <ul>
              <li>Marca: <a href="#">Lorem ipsum</a></li>
              <li>Disponibilidade: Em estoque</li>
            </ul>
          </div>
          <div class="qtdadeParaCarrinho">
            <p>Quantidade</p>
            <div class="boxqtdade">
					    <input type="button" id="menos" value="-">
  					    <input type="text" name="quantidade" value="1" size="2" id="quantidadeCarrinho">
					    <input type="button" id="mais" value="+">
				    </div>
            <button type="button" class="botaoComprarBoxProduto" id="Comprar">Comprar</button>
          </div>
        </div>
      </div>

      <div class="navbarIntermediariaProduto">
        <ul>
          <li><a href="#">Descrição</a> | </li>
          <li><a href="#">Avaliações(1)</a></li>
        </ul>
      </div>

      <div class="boxDescricaoEAvaliacoes">
        <div class="tabelaDescricaoProduto">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p><strong>Detalhamento</strong></p>
          <ul>
      	     <li>Lorem ipsum dolor sit amet</li>
             <li>Lorem ipsum dolor sit amet</li>
             <li>Lorem ipsum dolor sit amet</li>
             <li>Lorem ipsum dolor sit amet</li>
           </ul>
        </div>
        <div class="tabelaAvaliacao">
          <form class="formularioAvaliacao">
            <div id="avaliacaoProduto">
              <table class="tabelaResumoAvaliacao">
                <tbody>
                  <tr>
                    <td><strong>Nome Avaliador</strong></td>
                    <td>Data</td>
                  </tr>
                  <tr>
                    <td>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      <!-- <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h2>Escreva sua avaliação</h2>
              <div class="campoAvaliador">
                <label class="labelAvaliacao" for="input-name">Nome</label><br>
                  <input type="text" name="Nome" value="">
              </div>
              <div class="campoComentarios">
                <label class="labelAvaliacao">Comentários</label><br>
                  <textarea name="text" rows="5"></textarea>
              </div>
              <div class="campoAvaliacao">
                <label class="labelAvaliacao">Avaliação</label><br>
                  <input type="radio" name="Avaliacao" value="1">
                  <input type="radio" name="Avaliacao" value="2">
                  <input type="radio" name="Avaliacao" value="3">
                  <input type="radio" name="Avaliacao" value="4">
                  <input type="radio" name="Avaliacao" value="5">
              </div>
              <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
            </form>
          </div>
    	</div>

    </main>
  </body>
</html>





<?php
  include_once('footer.php');
?>
