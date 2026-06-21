@extends('layouts.main')

@section('title', 'Управление записями')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="p-4 rounded bg-central">
            <h2>Записи</h2>
            <a href="{{ route('admin.records.create') }}" class="btn btn-success mb-3">Добавить</a>
            <table class="table table-striped">
                <thead>
                    <tr><th>ID</th><th>Название</th><th>Дата</th><th>Действия</th></tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->title }}</td>
                            <td>{{ $record->date }}</td>
                            <td>
                                <a href="{{ route('admin.records.edit', $record->id) }}" class="btn btn-sm btn-warning">Ред.</a>
                                <form action="{{ route('admin.records.destroy', $record->id) }}" method="post" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удал.</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection