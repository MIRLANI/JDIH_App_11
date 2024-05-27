<?php

use App\Http\Controllers\AbstrakHukumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryHukumController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductHukumController;
use App\Http\Controllers\SubjekHukumController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;



// Route untuk autLogin
Route::get("/login", [AuthController::class, "getLogin"])->name("getLogin");
Route::post("/login", [AuthController::class, "postLogin"])->name("postLogin");

// Route untuk user
Route::controller(HomeController::class)->group(function () {
    Route::get("/",  "index")->name("home");
    Route::get("/subjek",  "subjek")->name("subjek");
    Route::get("/jenis",  "jenis")->name("jenis");
    Route::get("/tahun",  "tahun")->name("tahun");
    Route::get("/detail/{id}/{slug}",  "detail")->name("detail");
    Route::get("/download_file/{id}/{file}",  "download")->name("download");
    Route::get("/review_file/{id}/{file}",  "review")->name("review");


    Route::get("/search",  "search")->name("search");
    Route::get("/Search",  "search")->name("Search");
    Route::get("/Subjek",  "subjek")->name("searchSubjek");
});


// Route untuk admin
Route::prefix("/admin")->group(function () {

    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::controller(CategoryHukumController::class)->group(function () {
        Route::get("/category-hukum",  "index")->name("index.category_hukum");
        Route::get("/category-hukum-add",  "create")->name("create.category_hukum");
        Route::post("/category-hukum-add",  "store")->name("store.category_hukum");
        Route::get("/category-hukum-delete/{slug}", "destroy")->name("destroy.category_hukum");
        Route::get("/category-hukum-update/{slug}", "edit")->name("edit.category-hukum");
        Route::post("/category-hukum-update/{slug}", "update")->name("update.category-hukum");
        Route::get("/category-hukum-view-delete", "viewDelete")->name("viewDelete.category_hukum");
        Route::get("/category-hukum-restore/{slug}", "restore")->name("restore.category_hukum");
        Route::get("/category-hukum-detail/{slug}", "show")->name("detail.category-hukum");
    });

    Route::controller(ProductHukumController::class)->group(function () {
        Route::get("/product-hukum", "index")->name("index.product_hukum");
        Route::get("/product-hukum-detail/{slug}", "show")->name("detail.product_hukum");
        Route::get("/product-hukum-add", "create")->name("detail.product_hukum");
        Route::post("/product-hukum-add", "store")->name("store.product_hukum");
        Route::get("/product-hukum-delete/{slug}", "destroy")->name("destroy.product_hukum");
        Route::get("/product-hukum-view-delete", "viewDelete")->name("viewDelete.product_hukum");
        Route::get("/product-hukum-restore/{slug}", "restore")->name("restore.product_hukum");
        Route::get("/product-hukum-update/{id}/{slug}", "edit")->name("edit.product_hukum");
        Route::post("/product-hukum-update/{id}/{slug}", "update")->name("update.product_hukum");
    });

    Route::controller(AbstrakHukumController::class)->group(function () {
        Route::get("/abstract-hukum", "index")->name("index.abstrack_hukum");
        Route::get("/abstract-hukum-add", "create")->name("create.abstrack_hukum");
        Route::post("/abstract-hukum-add", "store")->name("store.abstrack_hukum");
    });

    Route::controller(SubjekHukumController::class)->group(function () {
        Route::get("/subjek-hukum", "index")->name("index.subjek_hukum");
        Route::get("/subjek-hukum-add", "create")->name("create.subjek_hukum");
        Route::post("/subjek-hukum-add", "store")->name("store.subjek_hukum");
        Route::get("/subjek-hukum-delete/{slug}", "destroy")->name("destroy.subjek_hukum");
        Route::get("/subjek-hukum-view-delete", "viewDelete")->name("viewDelete.subjek_hukum");
        Route::get("/subjek-hukum-restore/{slug}", "restore")->name("restore.subjek_hukum");
        Route::get("/subjek-hukum-update/{slug}", "edit")->name("edit.subjek-hukum");
        Route::post("/subjek-hukum-update/{slug}", "update")->name("update.subjek-hukum");
    });
});
