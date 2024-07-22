<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Peraturan;
use App\Models\Tag;
use App\Models\Tahun;
use App\Models\Sumber;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(): Response
    {
        $jmlPeraturan  = Auth::user()->role == "admin" ? Peraturan::query()->get()->count() : Peraturan::where('user_id', Auth::id())->get();
        $jmlReview = Auth::user()->role == "admin" ? Peraturan::query()->sum('review') : Peraturan::where('user_id', Auth::id())->sum('review');
        $jmlDownload = Auth::user()->role == "admin" ? Peraturan::query()->sum('download') : Peraturan::where('user_id', Auth::id())->sum('download');

        

        $jmlKatagori = Auth::user()->role == "admin" ? Kategori::query()->count() : Peraturan::where('user_id', Auth::id())->count();
        $jmlTipe  = Auth::user()->role == "admin" ? Sumber::query()->count() : Peraturan::where('user_id', Auth::id())->where('sumber_id', '!=', null)->count();
        $jmlTag  = Auth::user()->role == "admin" ? Tag::query()->count() : Peraturan::where('user_id', Auth::id())->whereHas('tagPeraturans', function ($query) {
            $query->where('tag_id', '!=', null);
        })->count();
        

        
        $jmlPeraturanPerLimaTahun = [];
        $currentYear = now()->year;
        $startYear = $currentYear - 5; // Adjust to include the current year and the last 5 years
        $years = Tahun::where('tahun', '>=', $startYear)->orderBy('tahun', 'desc')->pluck('tahun')->take(5);
        foreach ($years as $year) {
            $count = Auth::user()->role == "admin" ? Peraturan::whereHas('tahuns', function ($query) use ($year) {
                $query->where('tahun', $year);
            })->count() : Peraturan::where('user_id', Auth::id())->whereHas('tahuns', function ($query) use ($year) {
                $query->where('tahun', $year);
            })->where('user_id', Auth::id())->count();
            $jmlPeraturanPerLimaTahun[$year] = $count;
        }

        $jmlPeraturanAktif = Auth::user()->role == "admin" ? Peraturan::query()->where('status', 'berlaku')->count() : Peraturan::where('user_id', Auth::id())->where('status', 'berlaku')->count();
        
        $jmlPeraturanTidakAktif = Peraturan::query()->where('status', 'tidak berlaku')->count();
        return response()->view("pages.admin.dashboard", compact('jmlPeraturan', 'jmlKatagori', 'jmlTipe', 'jmlTag', 'jmlPeraturanAktif', 'jmlPeraturanTidakAktif', 'jmlPeraturanPerLimaTahun', 'jmlReview', 'jmlDownload'));
    }
}
