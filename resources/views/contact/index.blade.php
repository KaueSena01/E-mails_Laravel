<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kauê Sena | Formulário de Contado</title>

	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
	<style type="text/css">
		body{
			background-color: #000;
		}
		.container-form{
			min-width: 400px;
			/*min-height: 500px;*/
			background-color: #232323;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			border-radius: 5px;
		}
		.aling-form{
			width: 95%;
			margin: 0 auto;
		}
		.aling-form form{
			margin-top: 30px;
		}
		form h2{
			text-align: center;
			color: #fff;
		}
		strong{
			font-size: 15px;
		}
		ul li{
			font-size: 13px;
		}
		label{
			color: #fff;
		}
		button{
			margin-bottom: 15px;
		}
	</style>
<body>
	<div>
		<div class="container-form">
			
			<div class="aling-form">
				<form action="{{ url('/') }}" method="POST">
					@csrf

					<div class="form-group">
						<h2>Página de contato</h2>
					</div>

					@if(count($errors) > 0)
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
  					<strong>Ops! Preencha seus dados corretamente.</strong> 
  						<ul>
  							@foreach($errors->all() as $error)
  								<li>{{ $error }}</li>
  							@endforeach
  						</ul>

  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button>
					</div>
					@endif

					@if($message = Session::get('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
  					<strong>Obrigado!</strong> {{ $message }}
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button>
					</div>
					@endif

					@if($message = Session::get('error'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					<strong>Ops!</strong> {{ $message }}
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button>
					</div>
					@endif
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" class="form-control" name="" placeholder="Seu nome">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" name="" placeholder="Seu Email">
					</div>
					
					<div class="form-group">
						<label for="mensagem">Mensagem</label>
						<textarea name="mensagem" class="form-control" id="" cols="10" rows="
						5" placeholder="Sua mensagem"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>