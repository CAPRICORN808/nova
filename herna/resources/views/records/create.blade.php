@extends('layouts.main')

@section('title', 'Создать запись')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Создать новую запись</h4>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('records.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание</label>
                        <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Дата</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Отмена</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection