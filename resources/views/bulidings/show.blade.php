@extends('layouts.dashboard.app')
@section('page_title')
    {{ $building->name }}
@endsection
@section('content')
    <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-header">{{ $building->name }}</div>
        <div class="card-body">
            <h5 class="card-title">{{ $building->name }}</h5>
            <ul>
                <li>الاسم: {{ $building->name }}</li>
                <li>عدد الشقق: {{ $building->apartments_number }}</li>
                <li>العنوان: {{ $building->address }}</li>
            </ul>
        </div>

    </div>
    <div class="table-responsive">
        <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>الرقم</th>
                    <th>رقم الشقة</th>
                    <th>المالك</th>

                    <th> الأمر</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apartments as $apartment)
                    <tr>
                        <td>{{ $apartment->id }}</td>
                        <td>{{ $apartment->number }}</td>
                        <td>{{ $apartment->owner }}</td>
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
@endsection('content')
