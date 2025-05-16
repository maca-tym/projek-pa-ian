<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function index()
{
    if (auth()->user()->role !== 'admin') {
        abort(403, 'Unauthorized');
    }

    $userCount = User::count();
    $productCount = Product::count();
    $categoryCount = Category::count();
    $transactionCount = Transaction::count();

    return view('admin.dashboard', compact(
        'userCount',
        'productCount',
        'categoryCount',
        'transactionCount'
    ));
}
}
