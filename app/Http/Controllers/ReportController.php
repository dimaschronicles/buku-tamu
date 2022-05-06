<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        if (empty(request()->tanggal_mulai) || empty(request()->tanggal_sampai)) {
            $data = '';
        } elseif (request()->tanggal_mulai || request()->tanggal_sampai) {
            $start_date = Carbon::parse(request()->tanggal_mulai)->toDateTimeString();
            $end_date = Carbon::parse(request()->tanggal_sampai)->toDateTimeString();
            $data = Guest::whereBetween('created_at', [$start_date, $end_date])->get();
        }

        return view('report.index', [
            'title' => 'Laporan',
            'tamu' => $data,
            'tanggal_mulai' => request()->get('tanggal_mulai'),
            'tanggal_sampai' => request()->get('tanggal_sampai'),
        ]);
    }

    public function printPdf(Request $request)
    {
        $data = Guest::whereBetween('created_at', [$request->tanggal_mulai, $request->tanggal_sampai])->get();

        return view('report.laporan', [
            'title' => 'Cetak Laporan',
            'tamu' => $data,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_sampai' => $request->tanggal_sampai
        ]);
    }
}
