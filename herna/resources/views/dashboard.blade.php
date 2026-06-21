@extends('layouts.main')

@section('title', 'Кабинет')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="p-4 rounded bg-central">
            <h2>Мои записи</h2>
            <table class="table table-striped">
                <thead>
                    <tr><th>Название</th><th>Дата</th></tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                        <tr><td>{{ $record->title }}</td><td>{{ $record->date }}</td></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection