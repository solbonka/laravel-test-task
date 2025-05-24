@extends('layouts.app')

@section('title', 'Список товаров')

@section('content')
    <h1>Список товаров</h1>
    <a href="{{ route('products.create') }}" class="button mb-1">Добавить товар</a>

    <div class="card-list">
        @foreach ($products as $product)
            <div class="card">
                <h3>
                    <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                </h3>
                <p><strong>Цена:</strong> {{ $product->price / 100 }} ₽</p>
                <p><strong>Категория:</strong> {{ $product->category->name }}</p>

                <div class="actions">
                    <a href="{{ route('products.edit', $product) }}" class="button small">Редактировать</a>

                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button small danger" onclick="return confirm('Удалить товар?')">Удалить</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
