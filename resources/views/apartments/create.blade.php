@extends('layouts.dashboard.app')
@section('page_title', 'الشقق السكنية')
@section('action')
    <a href="{{ route('apartments.create') }}">
        <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>اضافة شقة
            سكنية</button>
    </a>
@endsection
@section('content')
    <div class="col-lg-10">
        <div class="card m-b-30">
            <form method="POST" action="{{ route('buildings.store') }}" enctype="multipart/form-data">
                @csrf
                @include('apartments.partials.form')
            </form>
        </div>
    </div>
@endsection('content')
