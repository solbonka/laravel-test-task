<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $orders = Order::with('product')->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        $products = Product::all();

        return view('orders.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOrderRequest $request
     * @return RedirectResponse
     */
    public function store(StoreOrderRequest $request): RedirectResponse
    {
        Order::create($request->validated());

        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @return Application|Factory|View
     */
    public function show(Order $order): Factory|View|Application
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Mark the specified order as completed.
     *
     * @param Order $order
     * @return RedirectResponse
     */
    public function complete(Order $order): RedirectResponse
    {
        $order->update(['status' => 'completed']);

        return redirect()->route('orders.show', $order);
    }
}
