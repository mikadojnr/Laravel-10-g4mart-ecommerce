<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function allCustomers(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        // $users = User::where('id', '!=', Auth::user()->id)->get()->paginate();

        if($searchTerm)
        {
            $users = User::where('name', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('email', 'LIKE', '%' . $searchTerm . '%')
                            ->paginate(1);
        } else {
            $users = User::paginate(1);
        }
        return view('admin.customers', ['users'=>$users, 'searchTerm'=> $search]);
    }

    public function allOrders()
    {
        return view('admin.orders');
    }

    public function orderDetails()
    {
        return view('admin.order-details');
    }
}
