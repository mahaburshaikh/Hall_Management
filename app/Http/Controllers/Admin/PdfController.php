<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class PdfController extends Controller
{
	public function pdftest()
	{
		$pdf = PDF::loadView('admin.payment.pdfdownload');
		return $pdf->download('hallFee.pdf');
	}
}
