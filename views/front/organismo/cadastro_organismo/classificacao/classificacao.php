<section
	id="promo" class="promo leaf section offset-header has-pattern ">
	<div class="container">
		<div class="row">

			<!-- ******NOME BINOMINAL****** -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<h1 id="nome_binominal" class="title animated fadeInUp delayp1 folha_text_shadow"></h1>
			</div><!--//nome binominal-->

			<!-- ******IMAGES CAROUSEL****** -->
			<div class="overview col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="display: none;">
				  	<!-- Indicators -->
				  	<ol id="ser_vivo_imagens_indicadores" class="carousel-indicators">
				  		    <?php
						        if(isset($this->organismo[0]['imagem']) && !empty($this->organismo[0]['imagem'])){
						            $markers = [];

						            foreach ($this->organismo[0]['imagem'] as $indice => $imagem) {
				    				// echo '<li id='1_remove' data-target="#myCarousel" data-slide-to="0"' . $indice == 0 ? . 'class="active"': '></li>';
				    				}
						        }
						    ?>
				  	</ol>

				  	<!-- Wrapper for slides -->
				  	<div id="ser_vivo_imagens" class="carousel-inner" role="listbox">
				  		<div id='2_remove' class="item active">
				      		<img class="img-responsive center-block" src="/public/front_end/images/iphone/iphone-slide-1.png"  alt="" />
				    	</div>
				  	</div>

				  	<!-- Left and right controls -->
				  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" >
				  	  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  	  	<span class="sr-only">Proxima</span>
				  	</a>
				  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				  	  	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  	  	<span class="sr-only">Anterior</span>
				  	</a>
				</div>
			</div><!--//images carousel-->


			<!-- ******CLASSIFICACAO TAXONOMICA****** -->
			<div class="overview col-xs-12 col-sm-12  col-md-8 col-lg-8 ">

				<h2 class="title folha_text_shadow">Classificação Taxonomica</h2>

				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label class="folha_text_shadow">Reino</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
							<input class="taxonomy_search" id="reino" data-placeholder="Reino" data-id_classificacao="1" data-id_ascendente="NULL" name="taxonomia[1]" style="width: 90%;" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 marginT10">
							<label class="folha_text_shadow">Filo/Dominio</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 marginT10">
							<input class="taxonomy_search" id="filo_dominio" data-placeholder="Filo/Dominio" data-id_classificacao="2" data-id_ascendente="NULL" name="taxonomia[2]" style="width: 90%;" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 marginT10">
							<label class="folha_text_shadow">Classe</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 marginT10">
							<input class="taxonomy_search" id="classe" data-placeholder="Classe" data-id_classificacao="3" data-id_ascendente="NULL" name="taxonomia[3]" style="width: 90%;" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 marginT10">
							<label class="folha_text_shadow">Ordem</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 marginT10">
							<input class="taxonomy_search" id="ordem" data-placeholder="Ordem" data-id_classificacao="4" data-id_ascendente="NULL" name="taxonomia[4]" style="width: 90%;" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 marginT10">
							<label class="folha_text_shadow">Familia</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 marginT10">
							<input class="taxonomy_search" id="familia" data-placeholder="Familia" data-id_classificacao="5" data-id_ascendente="NULL" name="taxonomia[5]" style="width: 90%;" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 marginT10">
							<label class="folha_text_shadow">Genero</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 marginT10">
							<input class="taxonomy_search" id="genero" data-placeholder="Genero" data-id_classificacao="6" data-id_ascendente="NULL" name="taxonomia[6]" style="width: 90%;" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 marginT10">
							<label class="folha_text_shadow">Especie</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 marginT10">
							<input class="taxonomy_search" id="especie" data-placeholder="Especie" data-id_classificacao="7" data-id_ascendente="NULL" name="taxonomia[7]" style="width: 90%;" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 marginT10">
							<label class="folha_text_shadow">Subespecie</label>
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 marginT10">
							<input class="taxonomy_search" id="subespecie" data-placeholder="Subespecie" data-id_classificacao="8" data-id_ascendente="NULL" name="taxonomia[8]" style="width: 90%;">
						</div>
					</div>

				</div>
			</div><!--//classificacao taxonomica-->
		</div>
	</div>
</section>

<?php require 'views/front/organismo/cadastro_organismo/classificacao/classificacao.js.php'; ?>
