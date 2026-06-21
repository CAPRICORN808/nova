@extends('layouts.main')

@section('title', 'Создать запись')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="background-color: var(--primary-color); color: var(--text-dark);">
                <h4>Создать запись</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.records.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Название</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Описание</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Дата</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection