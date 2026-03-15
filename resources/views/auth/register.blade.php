

<x-layout title="Registrati">
	
	<div class="row">
		<div class="col">	
			<h1>REGISTRATI</h1>	
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-md-8 col-lg-6 mt-4 mb-5">
			<form method="POST" action="{{route('register')}}">
				@csrf
				
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
				</div>
				
				<div class="mb-3">
					<label for="name" class="form-label">Nome</label>
					<input type="text" name="name" class="form-control" id="name">
				</div>
				
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				
				<div class="mb-3">
					<label for="password_confirmation" class="form-label">Conferma password</label>
					<input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
				</div>
				
				<div>
					<button type="submit" class="btn btn-primary">Registrati</button>
				</div>

			</form>
		</div>
	</div>

</x-layout>