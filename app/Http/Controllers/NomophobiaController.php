<?php

namespace App\Http\Controllers;

use App\Models\Nomophobia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NomophobiaController extends Controller
{
    function biodata(Request $request) : RedirectResponse {
        $quiz = new Nomophobia;
 
        $quiz->identitas_responden = $request->identitasResponden;
        $quiz->jenis_kelamin = $request->jenisKelamin;
        $quiz->usia = $request->usia;
        $quiz->instansi = $request->instansi;
        $quiz->pekerjaan = $request->pekerjaan;
        $quiz->waktu_akses = $request->akses;
        $quiz->konsumsi_paket = $request->kuota;
 
        $quiz->save();

        $quizId = $quiz->id;

        session(['respond_id' => $quizId]);

        return redirect('/kuis-nomophobia');
    }

    function results(Request $request) {
        $answers = [];

        for ($i=1; $i <= 20; $i++) {
            $answers[] = $request["soal-kuis-" . $i];
        }

        $results = 0;

        for ($i=0; $i < count($answers); $i++) { 
            $results += $answers[$i];
        }

        $respondId = $request->session()->get('respond_id');

        $quiz = Nomophobia::find($respondId);
        $quiz->hasil = $results;
        $quiz->save();

        $request->session()->flush();

        if ($results <= 20) {
            $summary = "Tidak ada tanda tanda Nomophobia";
        } else if($results > 20 && $results <= 59) {
            $summary = "Nomophobia Ringan";
        } else if($results >= 60 && $results < 100) {
            $summary = "Nomophobia Sedang";
        } else if($results >= 100 && $results <= 140) {
            $summary = "Nomophobia Tinggi";
        }

        return view('/hasil-nomo', compact('summary', 'results'));
    }
}
