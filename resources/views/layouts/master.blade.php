<!DOCTYPE html>
<html>
	<head>
		<title>
			
			@yield('title', 'beta.johnlincoln.me')

		</title>

		<meta charset='utf-8'>
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="stylesheet" type="text/css" href="css/bootstrapDarkly.css">
	    <link rel="stylesheet" type="text/css" href="css/main.css">

		@yield('head')

	</head>
	
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">JohnLincoln</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
					<!--
					<li {{ (Request::is('xkcd') ? 'class=active' : '') }}><a href="/xkcd">xkcd Password</a></li>
		            <li {{ (Request::is('loremipsum') ? 'class=active' : '') }}><a href="/loremipsum">Lorem Ipsum</a></li>
		            <li {{ (Request::is('randomuser') ? 'class=active' : '') }}><a href="/randomuser">Random User</a></li>
		        	-->
		        </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="http://p4.johnlincoln.me">P4 Recipe App</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">github<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="https://github.com/jlincoln88/P1">P1</a></li>
		            <li><a href="https://github.com/jlincoln88/P2">P2</a></li>
		            <li><a href="https://github.com/jlincoln88/P3">P3</a></li>
		            <li><a href="https://github.com/jlincoln88/P4">P4</a></li>
		            <li class="divider"></li>
		            <li><a href="#">PLACEHOLDER</a></li>
		            <li class="divider"></li>
		            <li><a href="#">PLACEHOLDER</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<section>

	    	@yield('content')

	    </section>

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	    @yield('body')

    </body>
</html>