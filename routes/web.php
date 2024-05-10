<?php

use App\Http\Controllers\AbstrakHukumController;
use App\Http\Controllers\CategoryHukumController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductHukumController;
use App\Http\Controllers\SubjekHukumController;
use Illuminate\Support\Facades\Route;

Route::get("/home", [HomeController::class, "index"]);
Route::get("/dashboard", [DashboardController::class, "index"]);



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
    Route::get("/product-hukum-update/{slug}", "edit")->name("edit.product_hukum");
    Route::post("/product-hukum-update/{slug}", "update")->name("update.product_hukum");
});

Route::controller(AbstrakHukumController::class)->group(function () {
    Route::get("/abstract-hukum", "index")->name("index.abstrack_hukum");
    Route::get("/abstract-hukum-add", "create")->name("create.abstrack_hukum");
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
