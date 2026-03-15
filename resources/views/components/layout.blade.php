<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ $title ?? 'Fortify Autentication' }}</title>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		@vite('resources/css/app.css')
	</head>
	<body>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('home') }}">Fortify Autentication</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarNav">
    				<ul class="navbar-nav">
        				
						<li class="nav-item">
            				<a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" {{ request()->routeIs('home') ? 'aria-current=page' : '' }} href="{{ route('home') }}">Home</a>
						</li>

						<li class="nav-item">
            				<a class="nav-link {{ request()->routeIs('documenti') ? 'active' : '' }}" {{ request()->routeIs('documenti') ? 'aria-current=page' : '' }} href="{{ route('documenti') }}">Documenti</a>
						</li>
						
						@guest
							<li class="nav-item">
								<a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" {{ request()->routeIs('register') ? 'aria-current="page"' : '' }} href="{{ route('register') }}">Registrati</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" {{ request()->routeIs('login') ? 'aria-current="page"' : '' }} href="{{ route('login') }}">Accedi</a>
							</li>
						@endguest

						@auth
							<li class="nav-item">
								<form 
									{{ request()->routeIs('logout') ? 'active' : '' }}" {{ request()->routeIs('logout') ? 'aria-current="page"' : '' }} 
									action="{{ route('logout') }}" 
									method="POST">
									@csrf
									<button class="nav-link type="submit">Logout</button>
								</form>
							</li>
						@endauth

					</ul>
				</div>
  			</div>
		</nav>
		<main>
			<div class="container">
				{{ $slot }}
			</div>
		</main>
		@vite('resources/js/app.js')
	</body>
</html>