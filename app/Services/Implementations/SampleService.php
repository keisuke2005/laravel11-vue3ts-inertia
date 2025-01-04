<?php

namespace App\Services\Implementations;

use App\Models\Sample;
use App\Services\Contracts\SampleServiceInterface;
use App\Repositories\Contracts\SampleRepositoryInterface;

class SampleService implements SampleServiceInterface
{
    public function __construct(
        private readonly SampleRepositoryInterface $sampleRepository
    ){}

    public function getSample(int $id): Sample
    {
        return $this->sampleRepository->findById($id);
    }
}
