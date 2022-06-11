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
            <form method="POST" action="{{ route('apartments.update', $apartment->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('apartments.partials.form')
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> تعديل</button>
                        <a href="{{ route('apartments.index') }}" class="btn btn-secondary">رجوع</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
