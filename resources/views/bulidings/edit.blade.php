@extends('layouts.dashboard.app')
@section('page_title', 'تعديل')
@section('content')
    <div class="col-lg-10">
        <div class="card m-b-30">
            <form method="POST" action="{{ route('buildings.update', $building->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('bulidings.partials.form')
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> تعديل</button>
                        <a href="{{ route('buildings.index') }}" class="btn btn-secondary">رجوع</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
