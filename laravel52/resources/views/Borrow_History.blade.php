@extends('layouts.app')

@section('content')

    <div class="container-fluid">
		<div class="row">
			<div class="btn-group">
				<p><h2>My Borrow History</h2></p>
				<br/>
				<button class="btn btn-default">
					Trier
				</button> 
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="#">By Date</a>
					</li>
					<li>
						<a href="#">By Name</a>
					</li>
				</ul>
			</div>
			<br/>
			<br/>
			<table class="table">
				<thead>
					<tr>
						<th>
							Product
						</th>
						<th>
							Borrow Date
						</th>
						<th>
							Return Date
						</th>
						<th>
							Status
						</th>
						<th>
							IMG
						</th>
					</tr>
				</thead>
				<tbody>
				<?php $count=0; ?>
				@foreach($Borrows as $borrow)
					<?php ?>
					@if($count%2 == 0)
						<tr class="success">
							<td>
								<a href="#"><h5>{{$borrow -> titre }}</h5></a>
							</td>
							<td>
								{{$borrow -> date_begin}}
							</td>
							<td>
								{{$borrow -> date_end}}
							</td>
							<td>
								@if(strtotime($borrow -> date_end) > time())
									En cours
								@else
									Terminé
								@endif
							</td>
							<td>
								<a href="#"><img  src="image/example1.jpg" width="150" height="150"></a>
							</td>
						</tr>
						<?php $count=$count + 1; ?>
					@else
						<tr class="warning">
							<td>
								<a href="#"><h5>{{$borrow -> titre }}</h5></a>
							</td>
							<td>
								{{$borrow -> date_begin}}
							</td>
							<td>
								{{$borrow -> date_end}}
							</td>
							<td>
								@if(strtotime($borrow -> date_end) > time())
									En cours
								@else
									Terminé
								@endif
							</td>
							<td>
								<a href="#"><img  src="image/example1.jpg" width="150" height="150"></a>
							</td>
						</tr>
						<?php $count=$count - 1; ?>
					@endif
				@endforeach
				</tbody>
			</table>
			<ul class="pagination pagination-sm">
				<li>
					<a href="#">Prev</a>
				</li>
				<li>
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
				<li>
					<a href="#">4</a>
				</li>
				<li>
					<a href="#">5</a>
				</li>
				<li>
					<a href="#">Next</a>
				</li>
			</ul>
	    </div>
	</div>
	<hr />

	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-933434">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-933434">
					</li>
					<li data-slide-to="1" data-target="#carousel-933434" class="active">
					</li>
					<li data-slide-to="2" data-target="#carousel-933434">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img alt="Carousel Bootstrap First" src="image/donner1.png" />
						<div class="carousel-caption">
							<h4>
								EASY!!
							</h4>
							<p>
								Contacter Online
								Prêter ou Emprunter “face to face”
							</p>
						</div>
					</div>
					<div class="item active">
						<img alt="Carousel Bootstrap Second" src="image/donner5.jpg" width="400" height="300" />
						<div class="carousel-caption">
							<h4>
								Petits Frais ou GRATUIT!!
							</h4>
							<p>
								Les chooses que vous allez emprunter chargent peu mais coûtent plus! Quelquel sont gratuits à vous!
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="image/donner2.jpg" width="400" height="300"/>
						<div class="carousel-caption">
							<h4>
								Crédit!!
							</h4>
							<p>
								 Nous empruntons et prêtons. Nous utilisons notre crédit! C'est crédible et fiable!
							</p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-933434" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-933434" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>

	<hr />
	<br />

@endsection