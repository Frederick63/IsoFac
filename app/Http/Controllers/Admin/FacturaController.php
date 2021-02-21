<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factura;
use App\Mail\CorreoSolicitudAlta;
use Illuminate\Support\Facades\Mail;


class FacturaController extends Controller
{
    public function index()
    {   
        // $mailUser=auth()->user()->email;
        // Mail::to('f.llanas@canon-cbc.com')->send(new CorreoSolicitudAlta($mailUser));

         return view('admin.facturas.index');
    }


    public function show(Request $facturaDocNo)
    {        
        $DocNo=$facturaDocNo->get('facturaDocNo');
        return view('admin.facturas.show',compact('DocNo'));
    }
}
