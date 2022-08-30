<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $from_date = request()->get('from_date');
        $till_date = request()->get('till_date');
        if (empty($from_date) || empty($till_date)) {
            $guests = '';
        } else {
            $guests = DB::table('guests')->whereBetween('date_created_guest', [$from_date, $till_date])->get();
        }

        return view('admin.report.index', [
            'title' => 'Rekapitulasi',
            'guests' => $guests,
        ]);
    }

    public function exportPdf()
    {
        $from_date = request()->get('from_date');
        $till_date = request()->get('till_date');
        if (empty($from_date) || empty($till_date)) {
            $guests = '';
        } else {
            $guests = DB::table('guests')->whereBetween('date_created_guest', [$from_date, $till_date])->get();
        }

        $data = [
            'title' => 'Laporan Buku Tamu',
            'guests' => $guests,
        ];

        $pdf = PDF::loadView('admin.report.report_guest', $data);
        return $pdf->stream('test.pdf');
    }
}
