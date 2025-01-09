<?php

namespace App\Repositories\Implementations;

use App\Models\Sample;
use App\Repositories\Contracts\SampleRepositoryInterface;
use \Illuminate\Database\Eloquent\Collection;

class SampleRepository implements SampleRepositoryInterface
{
    public function findById(int $id): Sample
    {
        return Sample::find($id) ?? new Sample(['sample_str' => 'Default String']);
    }

    /** @return Collection<int, Sample> */
    public function getLimitedSamples(): Collection
    {
        return Sample::limit(10)->get();
    }
}
