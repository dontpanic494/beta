@extends('layouts.master')

@section('content')
	<div class="container row">
		<div class = "col-md-8">
			<img class = "img-rounded img-responsive" src="images/profile.jpg">
		</div>
		<div class = "col-md-4">
			<h2>Hi There!</h2>
			<p>I'm John Lincoln, and this is a portfolio page for my <a href="http://www.dwa15.com">Dynamic Web Applications</a> projects. Below is a table containing the necessary information to access my different projects. I hope you can enjoy them!</p>

			<p class= "text-muted">Eventually, I'm going to add a bit more text here to balance out the page. For now, since this site is in beta, I'm just going to include this placeholder text so that I can get a feel for how the layout will look. This paragraph is <strong>VERY</strong> irrelevant.</p>

			<p class = "text-warning"><strong>NOTE:</strong> PLEASE DONT CLICK ANYTHING OR EVERYTHING WILL BREAK</p>
		</div>
	</div>
	<div class = 'container row'>
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Project Title</th>
		      <th>Live URL</th>
		      <th>GitHub URL</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>P1</td>
		      <td>Project Portfolio</td>
		      <td><a href="http://p1.johnlincoln.me/">p1.johnlincoln.me</a></td>
		      <td><a href="https://github.com/jlincoln88/P1">jlincoln88/P1</a></td>
		    </tr>
		    <tr>
		      <td>P2</td>
		      <td>xkcd Password Generator</td>
		      <td><a href="http://p2.johnlincoln.me/">p2.johnlincoln.me</a></td>
		      <td><a href="https://github.com/jlincoln88/P2">jlincoln88/P2</a></td>
		    </tr>
		    <tr>
		      <td>P3</td>
		      <td>Dev's Best Friend</td>
		      <td><a href="http://p3.johnlincoln.me/">p3.johnlincoln.me</a></td>
		      <td><a href="https://github.com/jlincoln88/P3">jlincoln88/P3</a></td>
		    </tr>
		    <tr>
		      <td>P4</td>
		      <td>Name TBD</td>
		      <td><a href="http://p4.johnlincoln.me/">p4.johnlincoln.me</a></td>
		      <td><a href="https://github.com/jlincoln88/P4">jlincoln88/P4</a></td>
		    </tr>
		  </tbody>
		</table>
	</div>

@stop