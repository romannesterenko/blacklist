@extends('layouts.app')

@section('content')
    @if(is_null($user))
        <div class="container my_container" style="padding-top: 3rem">
            <h1 class="">Informacje o numerze telefonu +{{$phone}}</h1>
        </div>
        <div class="container" style="padding-top: 3rem">
            <h2 class="text-center pb-4">Informacje ogólne</h2>
            <div class="card border-success mb-3">
                <div class="card-header py-5">Ten numer telefonu nie znajduje się w bazie danych kupujących bez skrupułów!</div>
            </div>
        </div>
    @else
    <div class="container my_container" style="padding-top: 3rem">
        <h1 class="">Informacje o numerze telefonu +{{$phone}}</h1>
    </div>
    <div class="container" style="padding-top: 3rem">
        <h2 class="text-center pb-4">Informacje ogólne</h2>
        <div class="card border-danger mb-3">
            <div class="card-header fs-5 p-4">Informacje o numerze telefonu <b>+{{$user->phone}}</b> {{$user->name}} {{$user->last_name}}</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nazwisko i imię odbiorcy przesyłki:<br/>
                        @foreach($lists as $list)
                            <span class="fw-bold">{{$list->name}} {{$list->last_name}}</span><br/>
                        @endforeach
                    </li>

                    <li class="list-group-item fw-bold">Kupujący <span class="text-danger">{{$lists->count()}}</span> razy nie odebrał towaru za pobraniem</li>
                    @foreach($lists as $list)
                        <li class="list-group-item">
                            Nazwa usługi pocztowej: {{$list->post}}<br/>
                            Koszt przesyłki: -- zl<br/>
                            Komentarz: {{$list->coment}}<br/>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
@endsection
