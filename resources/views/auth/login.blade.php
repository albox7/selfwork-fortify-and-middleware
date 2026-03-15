

<x-layout title="Accedi">
	
	<div class="row">
		<div class="col">	
			<h1>ACCEDI</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-md-8 col-lg-6 mt-4 mb-5">
			<form method="POST" action="{{route('login')}}">
				@csrf
				
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
				</div>
				
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				
				<div>
					<button type="submit" class="btn btn-primary">Accedi</button>
				</div>

			</form>
		</div>
	</div>

</x-layout>