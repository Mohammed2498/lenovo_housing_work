@extends('layouts.dashboard.app')
@section('page_title', 'الشقق السكنية')
@section('action')
    <a href="{{ route('apartments.create') }}">
        <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>اضافة شقة
            سكنية</button>
    </a>
@endsection
@section('content')
    <div class="card-body">
        <h6 class="card-subtitle">جدول الأبراج السكنية في قطاع غزة</h6>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>رقم الشقة</th>
                        <th>المالك</th>
                        <th>اسم البرج</th>
                        <th> الأمر</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apartments as $apartment)
                        <tr>
                            <td>{{ $apartment->id }}</td>
                            <td>{{ $apartment->number }}</td>
                            <td>{{ $apartment->owner }}</td>
                            <td>{{ $apartment->building_name }}</td>
                            <td>
                                <a href="#" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('apartments.destroy', $apartment->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="margin-top: 10px" class="btn btn-danger" type="submit"> حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $buildings->links() }} --}}
        </div>
    </div>
@endsection('content')
