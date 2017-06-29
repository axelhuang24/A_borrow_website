@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2>Ajouter votre nouvel article!</h2>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="col-md-12">
				{!! Form::open(['url' => 'add_article','role' => 'form']) !!}
					<label for="name">Choisissez une catégorie:</label>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Livres" checked>Livres
					  </label>
					</div>
					<div class="radio">
					 <label>
						<input type="radio" name="type" id="optionsRadios1" value="Outils">Outils
					 </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Joujous" checked>Joujous
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Vetêments" checked>Vetêments
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Articles" checked>Articles
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Chaussures" checked>Chaussures
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Portables" checked>Portables
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Maquillages" checked>Maquillages
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="type" id="optionsRadios1" value="Sacs" checked>Sacs
					  </label>
					</div>


					<div class="form-group">

						<label for="name">
							Votre nom de l'article:
						</label>
						<input type="text" name="object_name" class="form-control" placeholder="max 5 mots">
					</div>
					<div class="form-group">

						<label for="titre">
							Votre titre:
						</label>
						<input type="text" name="object_titre" class="form-control" placeholder="max 20 mots">
					</div>
					<div class="form-group">

						<label for="name">
							Les descriptions:
						</label>
						<textarea name="description" class="form-control" rows="5" placeholder="max 400 mots"></textarea>
					</div>
					<div class="form-group">

						<label for="name">
							Input une photo:
						</label>
						<input type="file" name= "image" id="exampleInputFile">
						<p class="help-block">
							Choississez une et une seule photo:.jpg/.png/.jpeg
						</p>
					</div>

					{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
					<a class="btn btn-default" href="{{route('addarticle')}}" role="btn btn-default">
					   Cancel
					</a>
				{!! Form::close() !!}
			</div>
		</div>
	</div>


  {{--  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>--}}
@endsection('content')
