@extends('layouts.main')

@section('title', 'Редактировать запись')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="background-color: var(--primary-color); color: var(--text-dark);">
                <h4>Редактировать запись</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.records.update', $record->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Название</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $record->title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Описание</label>
                        <textarea name="description" class="form-control">{{ old('description', $record->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Дата</label>
                        <input type="date" name="date" class="form-control" value="{{ old('date', $record->date) }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection