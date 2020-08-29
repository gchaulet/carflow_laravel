@extends('layouts.app')

@section('action')
    <button class="badge badge-danger ">bouton</button>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header ">All Users</div>

                <div class="card-body">
                    <users-list :users="{{ $users }}"></users-list>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="/js/plugins/users_datatable.js" defer></script>



<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->




