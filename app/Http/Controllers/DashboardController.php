<?php

namespace App\Http\Controllers;

use App\Models\CategoryHukum;
use App\Models\ProductHukum;
use App\Models\SubjekHukum;
use App\Models\Tahun;
use App\Models\TipeHukum;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
   public function index(): Response
   {
      $jmlPeraturan  = ProductHukum::query()->get()->count();
      $jmlKatagori  = CategoryHukum::query()->get()->count();
      $jmlTipe  = TipeHukum::query()->get()->count();
      $jmlTag  = SubjekHukum::query()->get()->count();


      $jmlPeraturanPerLimaTahun = [];
      $currentYear = now()->year;
      $startYear = $currentYear - 5; // Adjust to include the current year and the last 5 years
      $years = Tahun::where('tahun', '>=', $startYear)->orderBy('tahun', 'desc')->pluck('tahun')->take(5);
      foreach ($years as $year) {
          $count = ProductHukum::whereHas('tahuns', function ($query) use ($year) {
              $query->where('tahun', $year);
          })->count();
          $jmlPeraturanPerLimaTahun[$year] = $count;
      }

      $jmlPeraturanAktif = ProductHukum::query()->where('status', 'berlaku')->count();
      $jmlPeraturanTidakAktif = ProductHukum::query()->where('status', 'tidak berlaku')->count();
      return response()->view("pages.admin.dashboard", compact('jmlPeraturan', 'jmlKatagori', 'jmlTipe', 'jmlTag', 'jmlPeraturanAktif', 'jmlPeraturanTidakAktif', 'jmlPeraturanPerLimaTahun'));
   }
}
