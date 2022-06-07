@extends('layouts.dashboard.app')
@section('page_title', 'اضافة برج سكني')
@section('content')
    <div class="col-lg-10">
        <div class="card m-b-30">
            <form method="POST" action="{{ route('buildings.store') }}" enctype="multipart/form-data">
                @csrf
                @include('bulidings.partials.form')
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> اضافة</button>
                        <a href="{{ url('/dashboard/buildings') }}" class="btn btn-secondary">رجوع</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
