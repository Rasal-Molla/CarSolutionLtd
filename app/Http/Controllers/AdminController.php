<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard(){

        $totalCustomer=User::where('role','customer')->count();
        $totalServiceCenter=User::where('role','service_center')->count();
        $serviceCenter=User::where('role', 'service_center')->latest()->take(10)->get();
        $customer=User::where('role','customer')->latest()->take(10)->get();

        return view('backend.pages.dashboard', compact('totalCustomer','totalServiceCenter','serviceCenter', 'customer'));

    }

}
