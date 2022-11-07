<?php

namespace App\Http\Controllers\Pagina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function farmacia(){
        return view('farmacia');
    }
}
