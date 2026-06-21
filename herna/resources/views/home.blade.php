@extends('layouts.main')

@section('title', 'Главная')

@section('content')
{{-- Блок 1: Слайдер --}}
<div class="row mb-4">
    <div class="col-12">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                {{-- ЗАМЕНИТЕ НА <img> С РЕАЛЬНЫМИ КАРТИНКАМИ --}}
                <div class="carousel-item active">
                    <div class="bg-primary text-white d-flex align-items-center justify-content-center" style="height:400px; font-size:2rem; border-radius:10px;">
                    <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Слайд 1" style="height:400px; object-fit:cover;">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-success text-white d-flex align-items-center justify-content-center" style="height:400px; font-size:2rem; border-radius:10px;">
                    <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Слайд 1" style="height:400px; object-fit:cover;">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-warning text-dark d-flex align-items-center justify-content-center" style="height:400px; font-size:2rem; border-radius:10px;">
                    <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Слайд 1" style="height:400px; object-fit:cover;">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>

{{-- Блок 2: О нас / преимущества (блок с фоном) --}}
<div class="row mb-4">
    <div class="col-12">
        <div class="p-4 rounded" style="background-color: var(--central-bg);">
            <h2 class="text-center">Добро пожаловать</h2>
            <p class="text-center"></p>
        </div>
    </div>
</div>

{{-- Блок 3: Карточки преимуществ (цветные блоки) --}}
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card text-white" style="background-color: var(--primary-color);">
            <div class="card-body">
                <h5 class="card-title">Преимущество 1</h5>
                <p class="card-text">Краткое описание преимущества.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white" style="background-color: var(--accent-red);">
            <div class="card-body">
                <h5 class="card-title">Преимущество 2</h5>
                <p class="card-text">Краткое описание преимущества.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white" style="background-color: var(--accent-teal);">
            <div class="card-body">
                <h5 class="card-title">Преимущество 3</h5>
                <p class="card-text">Краткое описание преимущества.</p>
            </div>
        </div>
    </div>
</div>

{{-- Блок 4: Список записей --}}
<div class="row mt-4">
    <div class="col-12">
        <h2>Последние записи</h2>
    </div>
    @forelse($records as $record)
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $record->title }}</h5>
                    <p class="card-text">{{ $record->description ?? 'Без описания' }}</p>
                    <p class="card-text"><small class="text-muted">{{ $record->date }}</small></p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-info">Нет записей</div>
        </div>
    @endforelse
</div>
@endsection