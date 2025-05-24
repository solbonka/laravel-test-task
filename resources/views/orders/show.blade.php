@extends('layouts.app')

@section('title', 'Заказ #' . $order->id)

@section('content')
    <h1>Заказ #{{ $order->id }}</h1>

    <p><strong>ФИО покупателя:</strong> {{ $order->customer_name }}</p>
    <p><strong>Дата создания:</strong> {{ $order->order_date }}</p>
    <p><strong>Статус:</strong>
        <span class="status-{{ $order->status == 'new' ? 'new' : 'completed' }}">
            {{ $order->status }}
        </span>
    </p>
    <p><strong>Комментарий покупателя:</strong></p>
    <p>{{ $order->comment ? e($order->comment) : '—' }}</p>

    <hr>

    <h3>Товар в заказе:</h3>
    <p><strong>Название:</strong> {{ $order->product->name }}</p>
    <p><strong>Категория:</strong> {{ $order->product->category->name }}</p>
    <p><strong>Цена за единицу:</strong> {{ $order->product->price / 100 }} ₽</p>
    <p><strong>Количество:</strong> {{ $order->quantity }}</p>
    <p><strong>Итоговая цена:</strong> {{ $order->total_price / 100 }} ₽</p>

    @if ($order->status === 'new')
        <form action="{{ route('orders.complete', $order) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit">Отметить как выполнен</button>
        </form>
    @endif

    <a href="{{ route('orders.index') }}" class="button">← Назад к списку заказов</a>
@endsection
