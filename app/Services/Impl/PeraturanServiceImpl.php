<?php


namespace App\Services\Impl;

use App\Models\Peraturan;
use App\Services\PeraturanService;

class PeraturanServiceImpl implements PeraturanService
{
    public function get()
    {
        $peraturan = Peraturan::query()->orderBy('created_at', 'desc')->get();
        return $peraturan;
    }
}
