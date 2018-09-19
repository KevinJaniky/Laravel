@extends('layouts.app')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{ trans('home.welcome') }}</h1>
            <p class="lead text-muted">{{ Helpers::getInformation('home.about')  }}</p>
        </div>
    </section>

    <section class="container">
        <h2>{{ trans('home.last-blog') }}</h2>
        <div class="row">
            @foreach($post as $p)
                <article class="col-md-3" style="padding: 5px !important; ">
                    <div class="card">
                        <img class="card-img-top" src="https://picsum.photos/280/220/?random" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$p->title}}</h5>
                            <p class="card-text">{{$p->summary}}</p>
                            <a href="{{ route('blog.show',[$p->slug]) }}" class="btn btn-primary">{{ trans('home.see-more') }}</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>


@endsection