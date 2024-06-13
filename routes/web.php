<?php

use App\Http\Controllers\AbstrakHukumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryHukumController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\ProductHukumController;
use App\Http\Controllers\SubjekHukumController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\TipeHukumController;
use App\Http\Controllers\TipePeraturanController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ManajemenUserMiddleware;
use App\Http\Middleware\OnlyQuestMiddleware;
use App\Models\TipePeraturan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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
   

    Route::controller(ProductHukumController::class)->group(function () {
        Route::get("/product-peraturan", "index")->name("index.product_hukum");
        Route::get("/product-peraturan-add", "create")->name("create.product_hukum");
        Route::post("/product-peraturan-add", "store")->name("store.product_hukum");
        Route::get("/product-peraturan-delete/{id}", "destroy")->name("destroy.product_hukum");
        Route::get("/product-peraturan-view-delete", "viewDelete")->name("viewDelete.product_hukum");
        Route::get("/product-peraturan-restore/{id}", "restore")->name("restore.product_hukum");
        Route::get("/product-peraturan-update/{id}/{slug}", "edit")->name("edit.product_hukum");
        Route::post("/product-peraturan-update/{id}/{slug}", "update")->name("update.product_hukum");
    });

    Route::controller(AbstrakHukumController::class)->group(function () {
        Route::get("/abstract-peraturan", "index")->name("index.abstrack_hukum");
        Route::post("/abstract-peraturan-add", "store")->name("store.abstrack_hukum");
        Route::get("/abstract-peraturan-update/{id}", "destroy")->name("destroy.abstrack_hukum");
        Route::post("/abstract-peraturan-update/{id}", "update")->name("update.abstrack_hukum");
    });
    Route::controller(CategoryHukumController::class)->group(function () {
        Route::get("/category-peraturan",  "index")->name("index.category_hukum");
        Route::post("/category-peraturan-add",  "store")->name("store.category_hukum");
        Route::get("/category-peraturan-delete/{id}", "destroy")->name("destroy.category_hukum");
        Route::post("/category-peraturan-update/{id}", "update")->name("update.category-hukum");
    });
    Route::controller(SubjekHukumController::class)->group(function () {
        Route::get("/subjek-peraturan", "index")->name("index.subjek_hukum");
        Route::get("/subjek-peraturan-delete/{id}", "destroy")->name("delete.subjek_hukum");
        Route::post("/subjek-peraturan-add", "store")->name("store.subjek_hukum");
        Route::post("/subjek-peraturan-update/{id}", "update")->name("update.subjek-hukum");
    });

    Route::controller(TahunController::class)->group(function () {
        Route::get("/tahun-peraturan", "index")->name("index.tahun_hukum");
        Route::get("/tahun-peraturan-delete/{id}", "destroy")->name("destroy.tahun_hukum");
        Route::post("/tahun-peraturan-update/{id}", "update")->name("update.tahun_hukum");
        Route::post("/tahun-peraturan-add", "store")->name("store.tahun_hukum");
    });

    Route::controller(TipeHukumController::class)->group(function () {
        Route::get("/sumber-peraturan", "index")->name("index.tipe_hukum");
        Route::post("/sumber-peraturan-update/{id}", "update")->name("update.tipe_hukum");
        Route::get("/sumber-peraturan-delete/{id}", "destroy")->name("delete.tipe_hukum");
        Route::post("/sumber-peraturan-add", "store")->name("store.tipe_hukum");
    });

    Route::middleware(ManajemenUserMiddleware::class)->group(function () {
        
        Route::controller(ManajemenUserController::class)->group(function () {
            Route::get("/manajement-user", "manejementUser")->name("manejementUser");
            Route::post("/add-manajement-user", "store")->name("tambahManajemen");
            Route::post("/update-manajement-user/{id}", "update")->name("updateManajemen");
            Route::get("/delete-manajement-user/{id}", "delete")->name("deleteManajemen");
        });
    });
});






Route::fallback(function () {
    return response()->view("error.erro404");
});
