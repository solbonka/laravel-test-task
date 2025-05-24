@extends('layouts.app')

@section('title', 'Список заказов')

@section('content')
    <h1>Список заказов</h1>
    <a href="{{ route('orders.create') }}" class="button mb-1">➕ Добавить заказ</a>

    <div class="card-list">
        @foreach ($orders as $order)
            <div class="card clickable" onclick="location.href='{{ route('orders.show', $order) }}'">
                <h3>Заказ #{{ $order->id }}</h3>
                <p><strong>Дата:</strong> {{ $order->order_date }}</p>
                <p><strong>Покупатель:</strong> {{ $order->customer_name }}</p>
                <p><strong>Статус:</strong>
                    <span class="status-{{ $order->status == 'new' ? 'new' : 'completed' }}">
                        {{ $order->status }}
                    </span>
                </p>
                <p><strong>Итоговая цена:</strong> {{ $order->total_price / 100 }} ₽</p>
            </div>
        @endforeach
    </div>
@endsection
