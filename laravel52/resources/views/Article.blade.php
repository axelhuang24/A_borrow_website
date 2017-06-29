@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            {{--<div class="col-md-3">
                <p class="logo">Sac d'homme</p>
            </div>--}}

            <div class="col-md-9">
                <img class="img-product" src="image/example1.jpg" height="315" width="315" alt="">
                <div class="thumbnail">
                    
                    <div class="caption-full">
                        <h1 class="pull-right">€270</h1>
                        <h1>{{$object -> name}}</h1>
                        <br/>
                        <p>
                            <strong>Description about this article
                            </strong>
                        </p>
                        <p>{{--Porte-documents en cuir Saffiano<br>
                        Ornements acier poli<br>
                        Doublure en cuir de mouflon<br>
                        Étiquette avec logo à l’intérieur et logo gravé sur la fermeture par cadenas à code<br>
                        Une poignée<br>
                        Deux compartiments avec plis organisés en vue d’un usage professionnel : une poche pour iPad, deux poches pour téléphone portable et une poche zippée<br>
                        Une poche extérieure au dos<br>
                        Dimension <br>
                        l. 40.0    h. 29.0    p. 9.0    cm--}}
                        {{$object -> description}}
                        </p>
                    </div>
                    <br/>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">
                    {!! Form::open(['route' => ['add_com', 'object_id' => $object -> object_id]]) !!}
                    <textarea name="com" class="form-control" rows="5" placeholder="max 400 mots"></textarea>
                    <label for="name">
                        The degree of satisfication:
                    </label>
                    <select name="degree">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <div class="text-right">
                        {!! Form::submit('Comment it',['class'=>'btn btn-success']) !!}
                    </div>

                    <hr/>
                    @foreach($Comments as $comment)
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                $degree = $comment -> degree;
                                $empty_degree = 5 - $degree;
                                ?>
                                @while($degree > 0)
                                    <span class="glyphicon glyphicon-star"></span>
                                    <?php $degree = $degree -1; ?>
                                @endwhile
                                @while($empty_degree > 0)
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <?php $empty_degree = $empty_degree -1; ?>
                                @endwhile
                                {{\App\User::find($comment -> user_id) -> name}}
                                <span class="pull-right">{{$comment -> updated_at}}</span>
                                <p>{{$comment -> com}}</p>
                            </div>
                        </div>
                        <hr/>
                    @endforeach
                    @if ($object -> status == 0)
                        <div class="text-right">
                            <a class="btn btn-success" href="{{route('borrow',['object_id' => $object -> object_id])}}" >Borrow it</a>
                        </div>
                    @endif
                </div>

            </div>

        </div>

    </div>

@endsection