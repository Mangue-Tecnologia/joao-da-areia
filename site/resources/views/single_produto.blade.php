@extends('layouts.app')

@section('title', 'Produto')

@section('content')

@include('includes.modal-orcamento')

@include('includes.menu-mobile')

<!-- =======================
			#Produto-single
========================= -->

<div class="produto-single" id="produto-single">
	<div class="container produto-single__content">
		<div class="title">
			<h1>Areia</h1>
		</div>
		<div class="produtos--secao">
			<div class="produto">
				<div class="overflow-image">
					<div class="image" style="background-image: url(../img/areia-Grossa.jpg);">
						
					</div>
				</div>
				<div class="produto-detalhes">
					<div class="nome">
						<p>Areia Lavada Grossa</p>
					</div>
					<div class="texto">
						<p>Recomendada para o chapisco, emboço, fabricação de argamassa de assentameno para piso, fabricação de argamassa de assentamento para alvenaria e fabricação de concreto.</p>
					</div>
				</div>
			</div>

			<div class="produto">
				<div class="overflow-image"><div class="image" style="background-image: url(../img/areia-Grossa.jpg);"></div></div>
				<div class="produto-detalhes">
					<div class="nome">
						<p>Areia Lavada Grossa</p>
					</div>
					<div class="texto">
						<p>Recomendada para o chapisco, emboço, fabricação de argamassa de assentameno para piso, fabricação de argamassa de assentamento para alvenaria e fabricação de concreto.</p>
					</div>
				</div>
			</div>

			<div class="produto">
				<div class="overflow-image"><div class="image" style="background-image: url(../img/areia-Grossa.jpg);"></div></div>
				<div class="produto-detalhes">
					<div class="nome">
						<p>Areia Lavada Grossa</p>
					</div>
					<div class="texto">
						<p>Recomendada para o chapisco, emboço, fabricação de argamassa de assentameno para piso, fabricação de argamassa de assentamento para alvenaria e fabricação de concreto.</p>
					</div>
				</div>
			</div>

			<div class="produto">
				<div class="overflow-image"><div class="image" style="background-image: url(../img/areia-Grossa.jpg);"></div></div>
				<div class="produto-detalhes">
					<div class="nome">
						<p>Areia Lavada Grossa</p>
					</div>
					<div class="texto">
						<p>Recomendada para o chapisco, emboço, fabricação de argamassa de assentameno para piso, fabricação de argamassa de assentamento para alvenaria e fabricação de concreto.</p>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<div class="pedir-orcamento">
	<div class="container pedir-orcamento__content">
		<div class="chamada-orcamento">
			<h1>Ficou Interessado? Faça o seu orçamento </h1>
		</div>

		<div class="abrir-modal">
			<button class="orcamento-btn">Clique aqui</button>
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