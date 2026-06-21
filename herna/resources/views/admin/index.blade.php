@extends('layouts.main')

@section('title', 'Админка')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="p-4 rounded bg-central">
            <h2>Панель администратора</h2>
            <p>Количество записей: {{ count($records) }}</p>
            <a href="{{ route('admin.records') }}" class="btn btn-primary">Управление записями</a>
        </div>
    </div>
</div>
@endsection