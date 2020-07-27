
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="estilo.css" rel="stylesheet">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	  <script src="js/localization/messages_pt_BR.js"></script>
  </head>
  <body>
  	<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	  <script type="text/javascript">
	  					function scrollBanner() {
			  var scrollPos;
			  var headerText = document.querySelector('.header-paralax');
			  scrollPos = window.scrollY;

			  if (scrollPos <= 600) {
				  headerText.style.transform =  "translateY(" + (-scrollPos/3) +"px" + ")";
				  headerText.style.opacity = 1 - (scrollPos/600);
				  
  }
}
		  	window.addEventListener('scroll', scrollBanner);
	  </script>
	  
	<script type="text/javascript">
			//valida campos form
			$(document).ready(function(){
                $("#cep").mask('00000-000');
  		        $("#phone").mask('(00) 00000-0000');
              	$('#insert_form').on('submit', function(event){
					event.preventDefault();
					if($('#nome').val() == ""){
						//Alerta de campo nome vazio
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Por favor preencha seu nome!</div>');
					}else if($('#email').val() == ""){
						//Alerta de campo email vazio
						$("#msg-error").html('<div class="alert alert-danger" role="alert">Por favor preencha seu e-mail!</div>');						
					}else{
						//Receber os dados do formulário
						var dados = $("#insert_form").serialize();
						$.post("cadastrar.php", dados, function (retorna){
						 
                            $("#msg").html(retorna);
                            
							//Limpar os campo
				            $('#insert_form')[0].reset();
								
				            //Fechar a janela modal cadastrar
                            $('#modal_cadastro').modal('hide');
								
							//Limpar mensagem de erro
							$("#msg-error").html('');		
						});
					}
				});
            })
    
		</script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  <section class="header">
	<header class="header-paralax">
		<h1>Seja Bem Vindo!</h1>
		  <h2> Seja Bem vindo ao nosso site, navegue e conheça nossos produtos, caso queira clique no botão para realizar seu cadastro!</h2>
				<p class="text-center">
					<a href="#" class="btn btn-danger">Cadastro</a>
				</p>
</header>
</section>
	   <section class="corpo">
	     <div class="container">
		   <div class="row">	   
			   <div class="corpo_text"><h1>Grupo Martins</h1><p>Seja bem vindo ao nosso grupo, aqui você vai encontrar nossa linha alimenticia completa, desde pratos frios prontos para descongelar e esquentar para consumo em seu lar e até saborosos petistos para oferecer a seus clientes em lanchonetes e bares.</p>
				   <span id="msg"></span>
			   </div></div>
		   </div>
<div class="container">
	<div class="row">
    <div class="col-lg-4">
		<div class="card" style="width: 18rem;"> <img src="images/lasanha.jpg" alt="Card image cap" height="200" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Produtos</h5>
    <p class="card-text">Veja nossa linha de produtos alimentícios ofertados para mercado.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> </div>
</div>
	  </div>
    <div class="col-lg-4">
		<div class="card" style="width: 18rem;"> <img src="images/revenda.jpg" alt="Card image cap" height="200" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Revenda</h5>
    <p class="card-text">Seja um revendedor nosso! Produtos de qualidade para seus clientes.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> </div>
</div>
	  </div>
    <div class="col-lg-4">
		<div class="card" style="width: 18rem;"> <img src="images/cadastro.jpg" alt="Card image cap" height="200" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cadastro</h5>
    <p class="card-text">Faça seu cadastro para receber novidades e ofertas. Enviamos comunicados via e-mail</p>
    <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#modal_cadastro">Cadastre-se</a></div>
			<!-- Modal -->
<div class="modal fade" id="modal_cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Faça seu cadastro em nossa base para receber nossas novidades!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <span id="msg-error"></span>
      <form  method="post" id="insert_form" name="insert_form">
   <div class="form-row">
	   <div class="col-md-12 mb-3">
    <div class="form-group">
    <label>Nome Completo</label>
    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome">	
    </div>
      </div>
		  </div>
		  <div class="form-row">
			  <div class="col-md-12 mb-3">
	<div class="form-group">
    <label for="imputEmail" class="control-label">E-mail</label>
    <input type="email" name="email" class="form-control" id="email"  placeholder="Digite seu e-mail">
     <small id="emailHelp" class="form-text text-muted">Digite um e-mail válido ex.: example@domain.com</small></div>
		  </div>
		  </div>
		   <div class="form-row">
	   <div class="col-md-12 mb-3">
    <div class="form-group">
    <label>Telefone/Celular</label>
    <input type="telefone" name="telefone" id="phone" class="form-control">
    </div>
      </div>
		  </div>
		<div class="form-row">
			<div class="col-md-6 mb-3">
			<label>Cidade</label>
			<input type="text" name="cidade" class="form-control" placeholder="Digite sua cidade">
			</div>
			<div class="col-md-3 mb-3">
			<label>Estado</label>
			<input type="text" name="estado" class="form-control" placeholder="Estado">
			</div>
			<div class="col-md-3 mb-3">
			<label>CEP</label>
			<input type="text" name="cep" id="cep" class="form-control" placeholder="CEP">
			</div>
			 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="recebemail" value="">
      <label class="form-check-label" for="invalidCheck">Desejo receber novidades em meu e-mail.</label>
      </div>
	<input type="hidden" name="data" value="<?php echo date('Y-m-d h:l:s');?>">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
		   </form>
      </div>
    </div>
  </div>
</div>
</div>
		</div>
</div>
</div>	  
  </section>  
  </body>
</html>