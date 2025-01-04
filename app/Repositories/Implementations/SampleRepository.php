<?php

namespace App\Repositories\Implementations;

use App\Models\Sample;
use App\Repositories\Contracts\SampleRepositoryInterface;

class SampleRepository implements SampleRepositoryInterface
{
    public function findById(int $id): Sample
    {
        return Sample::find($id) ?? new Sample(['sample_str' => 'Default String']);
    }
}
