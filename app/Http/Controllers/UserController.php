<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\ProductHukum;
use App\Models\SubjekHukum;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   public function index(): Response
   {
      $produkHukumsTerbaru = ProductHukum::query()->latest()->take(4)->get();
      $produkHukums = ProductHukum::query()->get();
      $subjekHukums = SubjekHukum::query()->get();
      return response()->view("pages.users.home", [
         "produkHukums" => $produkHukums,
         "subjekHukums" => $subjekHukums,
         "produkHukumsTerbaru" => $produkHukumsTerbaru
      ]);
   }

   public function jenis(): Response
   {
      return response()->view("pages.users.jenis");
   }

   public function subjek(): Response
   {
      return response()->view("pages.users.subjek");
   }
   public function tahun(): Response
   {
      return response()->view("pages.users.tahun");
   }

   public function detail(string $id, string $slug ): Response
   {
      $detailHukum = ProductHukum::query()->where('id', $id)->orWhere('slug', $slug)->first();
     
         return response()->view("pages.users.detail", [
         "detailHukum" => $detailHukum
      ]);
   }


   public function search(): Response
   {
      return response()->view("pages.users.search");
   }
}
