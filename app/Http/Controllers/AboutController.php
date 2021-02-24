<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutus() {
        $data = array ( 'Nama' => 'Auzan Ihtifazhuddin', 'NIM' => '1941720009',
                        'Kelas' => 'TI-2D');
        return view ('about-us', $data);
    }
}
