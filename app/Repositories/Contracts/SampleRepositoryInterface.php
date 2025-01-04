<?php

namespace App\Repositories\Contracts;

use App\Models\Sample;

interface SampleRepositoryInterface
{
    public function findById(int $id): Sample;
}
