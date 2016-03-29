<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php if(isset($titulo)): ?>{titulo} | <?php endif; ?>{defaultTitle}</title>
		
		{cssInclude}
		{jsInclude}
		
		<?php includeFile('additionalJavaScripts.js','includes', TRUE);?>
		
	</head>

	
	
	
	
	<body>
		<div class="container">
			<!-- TODO: Acertar colnas abaixo para outras interfaces -->
				<div class="row">
					<div class="col-lg-6">
						<a href="<?php echo base_url('site'); ?>"><h1><?php echo thumb('Marca.png','200','200',TRUE);?></h1></a>
					</div>
					<div class="col-lg-6">
						<p class="pull-right">
							Bem vindo <strong><?php echo $this->session->userdata('name'); ?></strong>!
						</p>
						
						<p class="pull-right">
							<?php
							//Altercao de senha
							echo anchor('usuarios/alterar_senha/' . $this->session->userdata('userId'), 'Alterar Senha', 'class="btn btn-primary"'); 
							//Logoff
							echo anchor('usuarios/logoff', 'Sair', 'class="btn btn-danger"');
							?>
							
						</p>
					</div>
					<hr>
				
				</div> <!-- ./End of row header -->
				
				<!-- **** NavBar *** -->
				
				<nav class="navbar">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <a class="navbar-brand" href="<?php echo base_url('site'); ?>">AteliêPapelPicado</a>
				    </div>
				    <ul class="nav navbar-nav">
				      <li class="active"><?php echo anchor('site', 'Inicio');?></li>
				      <li class="dropdown">
				      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><?php echo anchor('produto/#', 'Produto #1');?></li>
				          <li><?php echo anchor('produto/#', 'Produto #2');?></li>
				           
				        </ul>
				      </li>
				      <li class="dropdown">
				      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				       		<li><?php echo anchor('categoria/gerenciar', 'Categoria #1');?></li>
				           
				        </ul>
				      </li>
				      <li class="dropdown">
				      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Posts
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				       		<li><?php echo anchor('post/#', 'Post #1');?></li>
				       		<li><?php echo anchor('post/#', 'Post #2');?></li>
				           
				        </ul>
				      </li>
				      </li>
				    </ul>
				  </div>
				</nav> <!-- **** ./NavBar *** -->
				
				
				<?php 
					//Adicional as imagens do carrousel
					includeFile('personal_carousel.php','includes', TRUE); 
				?>
				
				
		
			<div class="row">
			
			
			
				{conteudo}
				
			</div>
			
			<div class="row">
				<div class="col-lg-12 text-center">
					{footer}
				</div>
				
			</div>
		</div>
		
		
	
	</body>
</html>