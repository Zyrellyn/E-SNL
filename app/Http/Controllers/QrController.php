<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function  index()
    {
        return QrCode::size(300)->generate('Halo ini contoh QR saya!');
    }
}
