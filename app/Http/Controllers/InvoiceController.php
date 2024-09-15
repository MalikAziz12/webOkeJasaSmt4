<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function download($id)
    {
        $invoice =  Invoice::find($id);
        $pdf = Pdf::loadView('invoice.index',
        [
            'invoice'=>$invoice
        ]);
        return $pdf->download('invoice.pdf');

    }
}
