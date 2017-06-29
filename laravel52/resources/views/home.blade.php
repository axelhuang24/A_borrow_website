@extends('layouts.app')

@section('content')

<br/>
<br/>
<div id="works"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Livres</h2>
            <a href="{{url('List1')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Outils</h2>
            <a href="{{url('List2')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Joujous</h2>
            <a href="{{url('List3')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Vetements</h2>
            <a href="{{url('List4')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Articles</h2>
            <a href="{{url('List5')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Chaussures</h2>
            <a href="{{url('List6')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/7.jpg" alt="img01"/>
        <figcaption>
            <h2>Portables</h2>
            <a href="{{url('List7')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/8.jpg" alt="img01"/>
        <figcaption>
            <h2>Maquillages</h2>
            <a href="{{url('List8')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/9.jpg" alt="img01"/>
        <figcaption>
            <h2>Sacs</h2>
            <a href="{{url('List9')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
</div>

@endsection
