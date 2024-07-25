<?php

use App\Http\Controllers\AbstrakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\SumberController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ManajemenUserMiddleware;
use App\Http\Middleware\OnlyQuestMiddleware;
use Illuminate\Support\Facades\Route;



// Route untuk autLogin
Route::middleware(OnlyQuestMiddleware::class)->group(function () {
    Route::get("/login", [AuthController::class, "getLogin"])->name("getLogin");
    Route::post("/login", [AuthController::class, "postLogin"])->name("postLogin");
});
// Route untuk user
Route::controller(HomeController::class)->group(function () {
    Route::get("/",  "index")->name("home");
    Route::get("/jenis",  "subjek")->name("subjek");
    Route::get("/sumber",  "sumber")->name("sumber");
    Route::get("/tahun",  "tahun")->name("tahun");
    Route::get("/detail/{id}/{slug}",  "detail")->name("detail");
    Route::get("/download_file/{id}/{file}",  "download")->name("download");
    Route::get("/review_file/{id}/{file}",  "review")->name("review");


    Route::get("/search",  "search")->name("search");
    Route::get("/Search",  "search")->name("Search");
    Route::get("/Subjek",  "subjek")->name("searchSubjek");
    Route::get("/Sumber",  "sumber")->name("searchSumber");
});


// Route untuk admin
Route::prefix("/admin")->middleware(AdminMiddleware::class)->group(function () {

    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
   

    Route::controller(PeraturanController::class)->group(function () {
        Route::get("/product-peraturan", "index")->name("index.peraturan");
        Route::get("/product-peraturan-add", "create")->name("create.peraturan");
        Route::post("/product-peraturan-add", "store")->name("store.peraturan");
        Route::get("/product-peraturan-delete/{id}", "destroy")->name("destroy.peraturan");
        Route::get("/product-peraturan-view-delete", "viewDelete")->name("viewDelete.peraturan");
        Route::get("/product-peraturan-restore/{id}", "restore")->name("restore.peraturan");
        Route::get("/product-peraturan-update/{id}/{slug}", "edit")->name("edit.peraturan");
        Route::post("/product-peraturan-update/{id}/{slug}", "update")->name("update.peraturan");
    });

    Route::controller(AbstrakController::class)->group(function () {
        Route::get("/abstract-peraturan", "index")->name("index.abstrak");
        Route::post("/abstract-peraturan-add", "store")->name("store.abstrak");
        Route::get("/abstract-peraturan-update/{id}", "destroy")->name("destroy.abstrak");
        Route::post("/abstract-peraturan-update/{id}", "update")->name("update.abstrak");
    });
    Route::controller(KategoriController::class)->group(function () {
        Route::get("/category-peraturan",  "index")->name("index.kategori");
        Route::post("/category-peraturan-add",  "store")->name("store.kategori");
        Route::get("/category-peraturan-delete/{id}", "destroy")->name("destroy.kategori");
        Route::post("/category-peraturan-update/{id}", "update")->name("update.kategori");
    });
    Route::controller(TagController::class)->group(function () {
        Route::get("/subjek-peraturan", "index")->name("index.tag");
        Route::get("/subjek-peraturan-delete/{id}", "destroy")->name("delete.tag");
        Route::post("/subjek-peraturan-add", "store")->name("store.tag");
        Route::post("/subjek-peraturan-update/{id}", "update")->name("update.tag");
    });

    Route::controller(TahunController::class)->group(function () {
        Route::get("/tahun-peraturan", "index")->name("index.tahun");
        Route::get("/tahun-peraturan-delete/{id}", "destroy")->name("destroy.tahun");
        Route::post("/tahun-peraturan-update/{id}", "update")->name("update.tahun");
        Route::post("/tahun-peraturan-add", "store")->name("store.tahun");
    });

    Route::middleware(ManajemenUserMiddleware::class)->group(function () {
        Route::controller(SumberController::class)->group(function () {
            Route::get("/sumber-peraturan", "index")->name("index.sumber");
            Route::post("/sumber-peraturan-update/{id}", "update")->name("update.sumber");
            Route::get("/sumber-peraturan-delete/{id}", "destroy")->name("delete.sumber");
            Route::post("/sumber-peraturan-add", "store")->name("store.sumber");
        });

        Route::controller(ManajemenController::class)->group(function () {
            Route::get("/manajement-akun", "manejementUser")->name("manejementUser");
            Route::post("/add-manajement-akun", "store")->name("tambahManajemen");
            Route::post("/update-manajement-akun/{id}", "update")->name("updateManajemen");
            Route::get("/delete-manajement-akun/{id}", "delete")->name("deleteManajemen");
        });
    });
});






Route::fallback(function () {
    return response()->view("error.erro404");
});
