@extends('layouts.dashboard.app')
@section('page_title')
    {{ $building->name }}
@endsection
@section('content')
    <div class="card m-b-30">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $building->image) }}" class="card-img h-100" alt="Card image">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title font-18">{{ $building->name }}</h5>
                    <p class="card-text">{{ $building->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $building->updated_at }}</small></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
