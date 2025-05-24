@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <h1>{{ $product->name }}</h1>
    <p><strong>Категория:</strong> {{ $product->category->name }}</p>
    <p><strong>Описание:</strong> {{ $product->description }}</p>
    <p><strong>Цена:</strong> {{ $product->price / 100 }} ₽</p>
    <a href="{{ route('products.index') }}">Назад к списку</a>
@endsection
