<?php

namespace App\Repositories\Contracts;

use App\Models\Sample;
use \Illuminate\Database\Eloquent\Collection;

interface SampleRepositoryInterface
{
    public function findById(int $id): Sample;
    /** @return Collection<int, Sample> */
    public function getLimitedSamples(): Collection;
}
