@extends('layouts.app')

@section('title', 'Создать заказ')

@section('content')
    <h1>Создать заказ</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <label>ФИО:</label>
        <input type="text" name="customer_name" value="{{ old('customer_name') }}" required><br>

        <label>Дата:</label>
        <input type="date" name="order_date" value="{{ old('order_date') }}" required><br>

        <label>Комментарий:</label>
        <textarea name="comment">{{ old('comment') }}</textarea><br>

        <label>Товар:</label>
        <select name="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                    {{ $product->name }} ({{ $product->price / 100 }} ₽)
                </option>
            @endforeach
        </select><br>

        <label>Количество:</label>
        <input type="number" name="quantity" value="{{ old('quantity', 1) }}" min="1"><br>

        <button type="submit">Создать заказ</button>
    </form>
@endsection
