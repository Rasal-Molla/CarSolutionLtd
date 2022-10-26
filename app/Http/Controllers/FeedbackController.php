<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function Message(){
        return view('backend.pages.feedback');
    }
}
