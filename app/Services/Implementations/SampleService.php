<?php

namespace App\Services\Implementations;

use App\Models\Sample;
use App\Services\Contracts\SampleServiceInterface;
use App\Repositories\Contracts\SampleRepositoryInterface;
use \Illuminate\Database\Eloquent\Collection;

class SampleService implements SampleServiceInterface
{
    public function __construct(
        private readonly SampleRepositoryInterface $sampleRepository
    ){}

    /** @return Collection<int, Sample> */
    public function getSample(): Collection
    {
        return $this->sampleRepository->getLimitedSamples();
    }
}
