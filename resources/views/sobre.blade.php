@extends('layouts.app')

@section('content')

<div class="sobre__main">

	<section class="container-fluid sobre_div sobre__trocar bg-amarelo">
		<article class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2 >Bora Trocar? Tem uma oportunidade maravilhosa te esperando :)</h2>
					<p>Dá uma olhadinha, tem algo perfeito para você!</p>
				</div>
			</div>
		</article>
	</section>

    <section class="container-fluid sobre_div sobre__quemSomos bg-roxo">
		<article class= "container">

			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h3>Quem somos nós?</h3>
					<p>Nossa plataforma tem como principal objetivo realizar o encontro entre pessoas que querem "desapegar" de um objeto e procuram por outro.</p>
					<p>Os interessados tem total controle sobre o que deseja trocar, decidindo juntos a melhor forma de fechar negócio. Nosso papel é auxiliar nessas transações com o intuito de conectar milhões de pessoas.</p>
					<p>Nós temos o imenso prazer de recebe-lo em nosso site e agradecemos pelo interesse em nossa página.</p>
					<p>Seja muito bem vindo e esperamos suprir todas as suas expectativas!</p>
				</div>
			</div>

		</article>
	</section>
		
	<section class="container-fluid sobre_div sobre__oqueaGenteTem">
		<article class="container">
			<div class="row">
				<div class="col-12">
					<h3>O que a gente tem?</h3>
				</div>  
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="icone"></div>
					<h4>titulo</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis leo sapien, quis ullamcorper nibh luctus aliquet.</p>
				</div>
				<div class="col-lg-4">
					<div class="icone"></div>
					<h4>titulo</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis leo sapien, quis ullamcorper nibh luctus aliquet.</p>
				</div>
				<div class="col-lg-4">
					<div class="icone"></div>
					<h4>titulo</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis leo sapien, quis ullamcorper nibh luctus aliquet.</p>
				</div>
			</div>
		</article>
	</section>

	<section class="container-fluid sobre_div sobre__perguntasFrequentes bg-rosa" >
		<article class="container">
			<div class="row">
				<div class="col-12 sobre__perguntasFrequentes_topo">
					<h3>O que todo mundo quer saber?</h3>
					<p>O cadastro é totalmente gratuito! Somos uma plataforma de intermédio para troca de produtos.</p>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-10">
					<div class="accordion" id="accordionFaq">
						<div class="card">
							<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Qual Garantia que eu tenho da troca?
								</button>
							</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFaq">
							<div class="card-body">
								<p>Somos um site de intermédio de troca de produtos entre os usuários, a responsabilidade é total dos envolvidos. Tanto a entrega e retirada dos produtos.</p>
							</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Como funciona a troca?
								</button>
							</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFaq">
							<div class="card-body">
								<p>Você entra no site, faz a busca pelo produto e entra em contato direto com o anunciante.</p>	
							</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Além de trocar, posso vender?
								</button>
							</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaq">
							<div class="card-body">
								<p>Nosso intuito principal é realizar o encontro de quem quer desapegar de seus produtos, não trabalhamos com vendas.</p>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</article>
	</section>


	<section class="container-fluid sobre_div sobre__queroTrocar">
		<article class= "container">

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<p>E aí? Bora lá?</p>
				</div>
				<div class="col-lg-12">
					<button type="button" class="btn__grandeRosa" id="btnQueroTrocar">quero trocar</button>
				</div>
			</div>

		</article>
	</section>


</div>

@endsection