<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Services\Contracts\SampleServiceInterface;

class SampleController extends Controller
{
    function __construct(
        private readonly SampleServiceInterface $sampleService
    )
    {}

    public function sample(): Response
    {
        $sample = $this->sampleService->getSample(1);
        return Inertia::render('SamplePage', [
            'message' => $sample->sample_str,
        ]);
    }
}
