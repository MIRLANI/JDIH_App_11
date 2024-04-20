<?php

use App\Http\Controllers\CategoryHukumController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductHukumController;
use Illuminate\Support\Facades\Route;

Route::get("/dashboard", [DashboardController::class, "index"]);



Route::controller(CategoryHukumController::class)->group(function () {
    Route::get("/category-hukum",  "index")->name("index.category_hukum");
    Route::get("/category-hukum-add",  "create")->name("create.category_hukum");
    Route::post("/category-hukum-add",  "store")->name("store.category_hukum");
    Route::get("/category-hukum-delete/{slug}", "destroy")->name("destroy.category_hukum");
    Route::get("/category-hukum-update/{slug}", "edit")->name("edit.category-hukum");
    Route::post("/category-hukum-update/{slug}", "update")->name("update.category-hukum");
    Route::get("/category-hukum-detail/{slug}", "show")->name("detail.category-hukum");
});

Route::controller(ProductHukumController::class)->group(function(){
    Route::get("/product-hukum", "index")->name("index.product_hukum");
    Route::get("/product-hukum-detail/{slug}", "show")->name("detail.product_hukum");
    Route::get("/product-hukum-add", "create")->name("detail.product_hukum");
    Route::post("/product-hukum-add", "create")->name("detail.product_hukum");
});