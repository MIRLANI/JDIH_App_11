<?php

namespace App\Http\Controllers;

use App\Models\CategoryHukum;
use App\Models\ProductHukum;
use App\Models\SubjekHukum;
use App\Models\Tahun;
use App\Models\TipeHukum;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(): Response
    {
        $jmlPeraturan  = Auth::user()->role == "admin" ? ProductHukum::query()->get()->count() : ProductHukum::where('user_id', Auth::id())->get();
        $jmlReview = Auth::user()->role == "admin" ? ProductHukum::query()->sum('review') : ProductHukum::where('user_id', Auth::id())->sum('review');
        $jmlDownload = Auth::user()->role == "admin" ? ProductHukum::query()->sum('download') : ProductHukum::where('user_id', Auth::id())->sum('download');

        

        $jmlKatagori = Auth::user()->role == "admin" ? CategoryHukum::query()->count() : ProductHukum::where('user_id', Auth::id())->count();
        $jmlTipe  = Auth::user()->role == "admin" ? TipeHukum::query()->count() : ProductHukum::where('user_id', Auth::id())->where('tipe_id', '!=', null)->count();
        $jmlTag  = Auth::user()->role == "admin" ? SubjekHukum::query()->count() : ProductHukum::where('user_id', Auth::id())->whereHas('subjekHukums', function ($query) {
            $query->where('subjek_hukum_id', '!=', null);
        })->count();
        

        
        $jmlPeraturanPerLimaTahun = [];
        $currentYear = now()->year;
        $startYear = $currentYear - 5; // Adjust to include the current year and the last 5 years
        $years = Tahun::where('tahun', '>=', $startYear)->orderBy('tahun', 'desc')->pluck('tahun')->take(5);
        foreach ($years as $year) {
            $count = Auth::user()->role == "admin" ? ProductHukum::whereHas('tahuns', function ($query) use ($year) {
                $query->where('tahun', $year);
            })->count() : ProductHukum::where('user_id', Auth::id())->whereHas('tahuns', function ($query) use ($year) {
                $query->where('tahun', $year);
            })->where('user_id', Auth::id())->count();
            $jmlPeraturanPerLimaTahun[$year] = $count;
        }

        $jmlPeraturanAktif = Auth::user()->role == "admin" ? ProductHukum::query()->where('status', 'berlaku')->count() : ProductHukum::where('user_id', Auth::id())->where('status', 'berlaku')->count();
        
        $jmlPeraturanTidakAktif = ProductHukum::query()->where('status', 'tidak berlaku')->count();
        return response()->view("pages.admin.dashboard", compact('jmlPeraturan', 'jmlKatagori', 'jmlTipe', 'jmlTag', 'jmlPeraturanAktif', 'jmlPeraturanTidakAktif', 'jmlPeraturanPerLimaTahun', 'jmlReview', 'jmlDownload'));
    }
}
