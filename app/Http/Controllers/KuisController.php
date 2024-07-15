<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuisController extends Controller
{
    function biodata(Request $request) : RedirectResponse {
        $quiz = new Quiz;
 
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

        return redirect('/kuis');
    }

    function getResults() {
        return redirect('/kuis');
    }

    function results(Request $request) {
        $answers = [];

        for ($i=1; $i <= 31; $i++) {
            $answers[] = $request["soal-kuis-" . $i];
        }

        $results = 0;

        for ($i=0; $i < count($answers); $i++) { 
            $results += $answers[$i];
        }

        $results /= count($answers);

        $respondId = $request->session()->get('respond_id');

        $quiz = Quiz::find($respondId);
        $quiz->hasil = $results;
        $quiz->save();

        $request->session()->flush();

        if ($results < 2) {
            $summary = "Rendah";
        } elseif ($results >= 2 && $results <= 3.99) {
            $summary = "Menengah";
        } else {
            $summary = "Tinggi";
        }

        return view('hasil', compact('summary'));
    }
}
