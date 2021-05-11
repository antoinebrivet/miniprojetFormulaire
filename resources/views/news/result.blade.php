@extends('template')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
        <div class="panel-body">
            <h3>title</h3>
            <p>valeur : <b>{{ $news['title'] }}</b></p>
            <h3>content</h3>
            <p>valeur : <b>{{ $news['content'] }}</b></p>
        </div>
    </div>

@endsection