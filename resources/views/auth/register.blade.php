@extends('main')

@section('title', "Registro")

@section('conteudo')


	@include('partials._breadcrumbs', ['pagina' => "Registro"])

	<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Registre-se</h2>
			<div class="login-form-grids">
				<h5>Informações do perfil</h5>
				<div id="login-options" style="height: 50px;"> 
						<label class="radio-inline" style="color: chocolate;"><input type="radio" name="optradio">Cliente</label>
						<label class="radio-inline" style="color: #33cccc;"> <input type="radio" name="optradio">Loja</label>
				</div>
				<form action="#" method="post">
					<input type="text" placeholder="Nome completo ex: Castiel, Umbrella Corporation..." required=" " >
					<input type="text" placeholder="Cpf/Cnpj ex: 192.168.162-80..." required=" " >
					<input type="text" placeholder="Data de Nascimento/Fundação ex: 01/05/1999..." required=" " >
					<input style="margin-top: 13px;" type="text" placeholder="Número ex: 84996785743..." required=" " >
				</form>
				<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Quero receber novidades e promoções por email</label>
					</div>
				</div>
				<h6>Informações da Conta</h6>
					<form action="#" method="post">
					<input type="email" placeholder="Endereço de E-mail" required=" " >
					<input type="password" placeholder="Senha" required=" " >
					<input type="password" placeholder="Confirmar senha" required=" " >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Estou pronto para fazer minhas compras!</label>
						</div>
					</div>
					<input type="submit" value="Concluir">
					<p style="margin-top: 20px;"><a href="index.html">Voltar para a tela Principal<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
				</form>
			</div>
					
		</div>
	</div>
<!-- //register -->

@endsection