<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        nav {
            margin-bottom: 20px;
        }

        nav a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }

        h1 {
            color: #333;
            margin-bottom: 1rem;
        }

        a.button, button, input[type="submit"] {
            display: inline-block;
            margin-top: 5px;
            padding: 6px 12px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a.button:hover, button:hover, input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input, select, textarea {
            padding: 6px;
            width: 100%;
            max-width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .text-muted {
            color: #777;
        }

        .status-new {
            color: #ffc107;
            font-weight: bold;
        }

        .status-completed {
            color: #28a745;
            font-weight: bold;
        }

        .card-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1rem;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: transform 0.1s ease-in-out, box-shadow 0.2s;
            position: relative;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .card.clickable {
            cursor: pointer;
        }

        .card h3 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        .card p {
            margin: 0.25rem 0;
        }

        .actions {
            margin-top: 1rem;
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .button.small {
            padding: 4px 10px;
            font-size: 0.85rem;
        }

        .button.danger {
            background-color: #dc3545;
        }

        .button.danger:hover {
            background-color: #bd2130;
        }

        .mb-1{
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<nav>
    <a href="{{ route('products.index') }}">Товары</a>
    <a href="{{ route('orders.index') }}">Заказы</a>
</nav>

@yield('content')
</body>
</html>
