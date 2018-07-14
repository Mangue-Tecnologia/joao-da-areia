@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- =======================
			#Home
========================= -->

<div class="home" id="home">
	<div class="container home__content">
		<div class="home--info">
			<h1>Há mais de 30 anos garantindo a satisfação do cliente</h1>
			<a>Fazer orçamento</a>
		</div>
		<div class="home--whatsApp">
			<i class=""></i>
		</div>
	</div>
</div>

<!-- =======================
			#Sobre
========================= -->

<div class="sobre" id="sobre">
	<div class="container sobre__content">

		<div class="paragrafo sobre--paragrafo">
			<h1>Sobre</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>

		<div class="sobre--empresa">
			<div class="empresa missao">
				<h1>Nossa Missão</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
			</div>

			<div class="empresa visao">
				<h1>Nossa Visão</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
			</div>

			<div class="empresa valores">
				<h1>Nossos valores</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
			</div>
		</div>
	</div>
</div>

<!-- =======================
			#Produtos
========================= -->

<div class="produtos" id="produtos">
	<div class="container produtos__content">
		<div class="paragrafo produtos--paragrafo">
			<h1>Produtos</h1>
			<p>Conheça nossos produtos e faça já seu orçamento</p>
		</div>

		<div class="produtos--secao">
			<a class="produto" style="background-image: url(../img/produtos/areia-grossa.png);" href="#">
				<div class="produto--info">
					<div class="nome">
						<p>Areia</p>
					</div>
					<div class="status">
						<p>Status:<span>disponível</span></p>
					</div>
				</div>
			</a>

			<a class="produto" style="background-image: url(../img/produtos/brita.jpg);" href="#">
				<div class="produto--info">
					<div class="nome">
						<p>Brita</p>
					</div>
					<div class="status">
						<p>Status:<span>disponível</span></p>
					</div>
				</div>
			</a>

			<a class="produto" style="background-image: url(../img/produtos/barro.jpg);" href="#" >
				<div class="produto--info">
					<div class="nome">
						<p>Barro</p>
					</div>
					<div class="status">
						<p>Status:<span>disponível</span></p>
					</div>
				</div>
			</a>

			<a class="produto" style="background-image: url(../img/produtos/diversos.jpg);" href="#">
				<div class="produto--info">
					<div class="nome">
						<p>Diversos</p>
					</div>
					<div class="status">
						<p>Status:<span>disponível</span></p>
					</div>
				</div>
			</a>

		</div>

		<div class="setas--paginacao">

		</div>
	</div>
</div>

<!-- =======================
			#Serviços
========================= -->

<div class="servicos" id="servicos">
	<div class="container servicos__content">
		<div class="paragrafo servicos--paragrafo">
			<h1>Serviços</h1>
			<p>Contate nossos serviços para a sua empresa</p>
		</div>

		<div class="servicos--secao">
			<div class="servico" style="background-image: url(../img/servicos/foto.png);">
				<div class="servico--info">
					<div class="content-info">
						<div class="titulo">
							<p>Remoção de materiais</p>
						</div>
						<div class="descricao">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="servico" style="background-image: url(../img/servicos/foto.png);">
				<div class="servico--info">
					<div class="content-info">
						<div class="titulo">
							<p>Remoção de materiais</p>
						</div>
						<div class="descricao">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="servico" style="background-image: url(../img/servicos/foto.png);">
				<div class="servico--info">
					<div class="content-info">
						<div class="titulo">
							<p>Remoção de materiais</p>
						</div>
						<div class="descricao">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="servico" style="background-image: url(../img/servicos/foto.png);">
				<div class="servico--info">
					<div class="content-info">
						<div class="titulo">
							<p>Remoção de materiais</p>
						</div>
						<div class="descricao">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- =======================
			#Parceiros
========================= -->

<div class="parceiros">
	<div class="container parceiros__content">
		<div class="parceiros-slider">

			<div class="item">
				<img src="img/parceiros/ceta.jpg">
			</div>
			<div class="item">
				<img src="img/parceiros/dn.png">
			</div>
			<div class="item">
				<img src="img/parceiros/gv.png">
			</div>

			<div class="item">
				<img src="img/parceiros/ceta.jpg">
			</div>
			<div class="item">
				<img src="img/parceiros/dn.png">
			</div>
			<div class="item">
				<img src="img/parceiros/gv.png">
			</div>
		</div>
	</div>
</div>


<!-- =======================
			#Contato
========================= -->

<div class="mapa" id="contato">
	<div class="formulario">
		<div class="titulo-formulario">
            <h1>Fale conosco</h1>
        </div>
        <div class="campos">
	        <form onsubmit="return false;" method="post" novalidate="novalidate" class="contato-form">
				<ul class="flex-outer">
	                <li>
	                    <input type="text" id="nome" name="nome" placeholder="Nome: ">
	                </li>

	                <li>
	                    <input type="email" id="email" name="email" placeholder="E-mail: ">
	                </li>

	                <li>
	                    <input type="assunto" id="assunto" name="assunto" placeholder="Assunto: ">
	                </li>
	                <li>
	                    <textarea rows="6" id="mensagem" name="mensagem" placeholder="Sua mensagem:"></textarea>
	                </li>
	                <li>
	                    <button>Enviar</button>
	                </li>
	            </ul>

	        </form>
	    </div>
       
    </div>

	
	<div class="map-item">
		<div style="height:650px; width:100%; display:inline-block; overflow:hidden;">
		<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1C9hZHwQU-nk9AeVA4p8snIipZkZwxMSG" width="640" height="480" allowfullscreen frameborder="0" style="position:relative; top:-50px; border:none;"></iframe>
	</div>
</div>



@stop