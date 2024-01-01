<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Incident;
use PDF;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function download($id)
    {
        $incident = Incident::with(['members', 'inform', 'response'])->findOrFail($id)->toArray();
        // dd($incident);
        $pdf = PDF::loadView('pdf.report', ['incident' => $incident]);
        $today = Carbon::today()->format('Y-m-d');
        return $pdf->download("incident-report-$today.pdf");
    }
}
