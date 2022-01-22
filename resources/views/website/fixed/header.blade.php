<div id="header">
	<div id="logo-wrapper">
		<div class="container">

			<!-- Logo -->
			<div id="logo">
				<h1>
					<a href="#">Landscape Tree Management System</a>
				</h1>
				@auth
				<span>Design by Afsana | {{ auth()->user()->name }}</span>
				@else
				<span>Design by Afsana</span>
				@endauth

			</div>

		</div>
	</div>
	<div class="container">
		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li class="active"><a href="index.html">Homepage</a></li>
				<li><a href="{{route('website.user.feedback')}}">User Feedback</a></li>
				<li><a href="{{route('website.user.item')}}">Item</a></li>



				@auth
				<li>
					<a href="{{route('userprofile')}}">
						User Profile
					</a>
				</li>
				<li>
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</li>
				@else
				<li><a href="{{route('register')}}">Registration</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
				@endauth

				<!-- <li><a href="no-sidebar.html">User Feedback</a></li> -->
			</ul>
		</nav>
	</div>
</div>