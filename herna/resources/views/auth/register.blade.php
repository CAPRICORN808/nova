@extends('layouts.main')

@section('title', 'Регистрация')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background-color: var(--primary-color); color: var(--text-dark);">
                <h4>Регистрация</h4>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">Ошибки в форме</div>
                @endif
                <form method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Имя</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Пароль</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Подтверждение</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection