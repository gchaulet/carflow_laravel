@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Fiche utilisateur</h2>
        </div>

        <div class="col-md-12">
            <div class="card border-white row ">
                <div class="card-header ">Nom</div>
                    <div class="card-body">
                        <p class="card-text">{{ $user->first_name }} {{ $user->last_name }}</p>
                    </div>
            </div>
            <div class="card border-white row ">
                <div class="card-header ">Date de naissance</div>
                    <div class="card-body">
                        <p class="card-text">{{  date('d-m-Y', strtotime($user->birthdate)) }}</p>
                    </div>
            </div>
            <div class="card border-white row">
                <div class="card-header  ">Email</div>
                    <div class="card-body">
                        <p class="card-text">{{ $user->email }}</p>
                    </div>
            </div>
            <div class="card border-white row">
                <div class="card-header ">Phone</div>
                    <div class="card-body">
                        <p class="card-text">{{ $user->phone }} </p>
                    </div>

            </div>
            <div class="card border-white row">
                <div class="card-header">Adresse</div>
                    <div class="card-body">
                        <ul class="card-text">
                            <li>{{ $user->address }}</li>
                            <li>{{ $user->postal_code }} {{ $user->town }}</li>
                        </ul>
                    </div>
            </div>
            @if($user->description)
            <div class="card border-white row">
                <div class="card-header col-md-12 ">Description</div>
                    <div class="card-body">
                        <p class="card-text">{{ $user->description }}</p>
                    </div>
                </div>
            </div>
            @endif
            <div class="card-body mt-2">
                <a href="{{ url('/user/edit/' . $user->id ) }}" >
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection