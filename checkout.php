<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout Mirror Fashion</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- <script src="js/converteMoeda.js"></script>
  <script src="js/testaConversao.js"></script> -->
  <script src="js/total.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/inputmask-plugin.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/converteMoeda.js"></script>
  <script src="js/testaConversao.js"></script>
</head>
<body>

  <div class="jumbotron">
    <div class="container">
      <h1>Ótima escolha!</h1>
      <p>Obrigado por comprar na Mirror Fashion!
      Preencha seus dados para efetivar a compra.</p>
    </div>
  </div>

<div class="container">
  <div class="col-sm-4">
    <div class="panel panel-default">
    	<div class="panel-heading">
    		<h2 class="panel-title">Sua Compra</h2>
    	</div>
      <div class="panel-body">
        <img src="img/produtos/foto1-<?= $_POST["cor"] ?>.png"
        class="img-thumbnail img-responsive">
        <dl>
        <dt>Produto</dt>
        <dd><?= $_POST["nome"] ?></dd>
        <dt>Preço</dt>
        <dd id="preco"><?= $_POST["preco"] ?></dd>
        <dt>Cor</dt>
        <dd><?= $_POST["cor"] ?></dd>
        <dt>Tamanho</dt>
        <dd><?= $_POST["tamanho"] ?></dd>
        </dl>
        <div class="form-group">
        <label for="qt">Quantidade</label>
        <input id="qt" class="form-control" type="number" min="0" max="99"
        value="1">
        </div>
        <div class="form-group">
        <label for="total">Total</label>
        <output for="qt valor" id="total" class="form-control">
          <?= $_POST["preco"] ?>
        </output>
        </div>
        </div>
    </div>
  </div>

<div class="col-sm-8">
  <form>
    <div class="row">
      <fieldset>
        <legend>Dados pessoais</legend>

        <div class="form-group">
          <label for="nome">Nome completo</label>
          <input type="text" class="form-control" id="nome" name="nome" required autofocus>
        </div>

        <div class="form-group">
          <label for="email">Email</label>

          <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control"
                     id="email" name="email">
          </div>
        </div>

        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"  data-mask="999.999.999-99" required>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="sim" name="spam" checked>
            Quero receber spam da Mirror Fashion
          </label>
        </div>
      </fieldset>
      <fieldset>
        <legend>Cartão de crédito</legend>

        <div class="form-group">
          <label for="numero-cartao">Número - CVV</label>
          <input type="text" class="form-control"
                 id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
        </div>

        <div class="form-group">
          <label for="bandeira-cartao">Bandeira</label>
          <select name="bandeira-cartao" id="bandeira-cartao"
              class="form-control">
            <option value="master">MasterCard</option>
            <option value="visa">VISA</option>
            <option value="amex">American Express</option>
          </select>
        </div>

        <div class="form-group">
          <label for="validade-cartao">Validade</label>
          <input type="month" class="form-control"
                 id="validade-cartao" name="validade-cartao">
        </div>
      </fieldset>
    </div>

    <button type="submit" class="btn btn-primary">
      <span class="glyphicon glyphicon-thumbs-up btn-lg"></span>
      Confirmar Pedido
    </button>
  </form>
</div>
</div>


</body>

<script type="text/javascript">
  var soma = 0;
  var pessoas = ["João", "José", "Maria", "Sebastião", "Antônio"];

  for(var i = 0;i <=10; i++){
    if(!(i % 2 == 0)){
      // console.log(i);
    }
  }

  for(var i = 0;i <= 100;i++){
    soma = soma + i;
  }
  // console.log(soma);

  for(var i = 0; i < pessoas.length;i++){
    if(pessoas[i].length == 4){
      // console.log(pessoas[i]);
    }
  }




</script>
</html>
