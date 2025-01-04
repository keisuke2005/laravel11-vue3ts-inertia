<?php

namespace App\Services\Contracts;

use App\Models\Sample;

interface SampleServiceInterface
{
    public function getSample(int $id): Sample;
}
