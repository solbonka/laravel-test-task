@extends('layouts.app')

@section('title', 'Добавить товар')

@section('content')
    <h1>{{ 'Добавить' }} товар</h1>

    <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif

        <label>Название:</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required><br>

        <label>Категория:</label>
        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br>

        <label>Описание:</label>
        <textarea name="description">{{ old('description', $product->description ?? '') }}</textarea><br>

        <label>Цена (в копейках):</label>
        <input type="number" name="price" value="{{ old('price', $product->price ?? '') }}" required><br>

        <button type="submit">Сохранить</button>
    </form>
@endsection
