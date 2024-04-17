<?php

namespace App\Http\Controllers;

use App\Models\TZodiac;
use Carbon\Carbon;
use Illuminate\Http\Request;
class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

 
    public function processForm(Request $request)
{
   
    $request->validate([
        'nama' => 'required|string',
        'tanggal_lahir' => 'required|date',
    ]);
    
    // Hitung usia
    $tanggal_lahir = Carbon::parse($request->tanggal_lahir);
    $today = Carbon::now();
    $diff = $today->diff($tanggal_lahir);
    // var_dump($request->tanggal_lahir);
    $usia = [
        'tahun' => $diff->y,
        'bulan' => $diff->m,
        'hari' => $diff->d,
    ];


     // Query semua data zodiak dari database
     $allZodiacs = TZodiac::all();

     // Pisahkan bulan dan tanggal dari tanggal lahir
     $bulan_hari = substr($request->tanggal_lahir, 5, 5);
     $parts = explode('-', $bulan_hari);
     $tanggal = (int)$parts[1];
     $bulan = (int)$parts[0];
 
     // Tentukan zodiak berdasarkan rentang tanggal
     $zodiacName = 'Zodiak tidak ditemukan';
     foreach ($allZodiacs as $zodiac) {
         $start_date = explode('-', $zodiac->start_date);
         $end_date = explode('-', $zodiac->end_date);
         $start_month = (int)$start_date[0];
         $start_day = (int)$start_date[1];
         $end_month = (int)$end_date[0];
         $end_day = (int)$end_date[1];
 
         if (($bulan == $start_month && $tanggal >= $start_day) || ($bulan == $end_month && $tanggal <= $end_day)) {
             $zodiacName = $zodiac->zodiac_name;
             break;
         }
     }
 
     // Tampilkan hasil ke view
     return view('result', [
         'nama' => $request->nama,
         'usia' => $usia,
         'zodiac_name' => $zodiacName,
     ]);
}



}
