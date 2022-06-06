<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        //echo $p1 . ' + ' . $p2 . ' = ' . ($p1 + $p2);

        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); // Array Associativo
        //return view('site.teste', compact('p1', 'p2')); // Compact (nativo do PHP, o método mais comum)
        return view('site.teste')->with('p1', $p1)->with('p2', $p2); // With
    }
}
