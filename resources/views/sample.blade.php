
<!DOCTYPE html>
<html<p>>
</p><head>
	<title>Sample</title>
</head>
<body>

	<h1>This is the sample page</h1>

	@if($fullname['name'] == "Juan")
		<h2>Hello, {{ $fullname['name'] }}</h2>
	@else
		<h2>You are not, Juan</h2>
	@endif

	@foreach($fullname as $key => $value)
	<h2>Key is {{$key}}, Value is: {{$value}}</h2>
	@endforeach


	<h2>Hello, {{$fullname['name']}}</h2>
	<h2>Middelname: {{$fullname['middlename']}}</h2>
	<h2>Surname: {{$fullname['lastname']}}</h2>


	<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->


	<div class="links">
		<a href="http://localhost:8000/">Home</a>
    	<a href="http://localhost:8000/users">Users</a>
    </div>

</body>
</html>