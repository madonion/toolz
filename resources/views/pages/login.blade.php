
@extends('layouts.master')

@section('title', 'Login ')


@section('content')

	<div class="bs-about">
		<div class="panel panel-primary ">
			<div class="panel-heading"> Bine ai venit, Te rugam sa te logezi cu adresa ta de mail</div>
			<div class="panel-body">
				<form name="login" action="http://www.toolszone.ro/login.php?action=process" method="post">


					<div class="row">
						<div class="col-md-6">
							<h3>Cont nou</h3>
							<p class="loginTxt">Vreau un cont nou.<br><br>Creand un cont nou la ToolsZone.ro - Magazin online de scule profesionale o sa poti comanda mai usor, sa fi la curent cu statusul comenzii tale si sa administrezi comenziile facute.</p>
							<a href="http://www.toolszone.ro/create_account.php" title="Continua"><img src="includes/languages/english/images/buttons/button_continue.gif" alt="Continua" title=" Continua "></a>                            </div>
						<div class="col-md-6">
							<h3>Login</h3>


							<div class="form-group">
								<label for="user" class="control-label">Adresa de email</label>
								<input id="user" class="form-control" type="text" name="email_address">
							</div>
							<div class="form-group">
								<label for="parola" class="control-label">Parola:</label>
								<input type="password" class="form-control" name="password" id="parola">
							</div>
							Ai uitat parola? <a href="http://www.toolszone.ro/password_forgotten.php">Apasa aici</a>                                <input type="image" src="includes/languages/english/images/buttons/button_login.gif" border="0" alt="Logheza" title=" Logheza ">

						</div>
					</div>


				</form></div>
		</div>
	</div>


@endsection