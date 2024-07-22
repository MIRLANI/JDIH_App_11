<?php

namespace Tests;

use App\Services\CategoryHukumService;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    public CategoryHukumService $categoriHukumService;
    protected function setUp(): void
    {
        parent::setUp();
        DB::delete("delete from kategoris");
        $this->categoriHukumService = $this->app->make(CategoryHukumService::class);
    }
}
