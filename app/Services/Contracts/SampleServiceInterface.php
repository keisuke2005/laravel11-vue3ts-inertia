<?php

namespace App\Services\Contracts;

use App\Models\Sample;
use \Illuminate\Database\Eloquent\Collection;

interface SampleServiceInterface
{
    /** @return Collection<int, Sample> */
    public function getSample(): Collection;
}
