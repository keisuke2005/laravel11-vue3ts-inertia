<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Services\Contracts\SampleServiceInterface;
use Illuminate\Http\JsonResponse;

class SampleController extends Controller
{
    function __construct(
        private readonly SampleServiceInterface $sampleService
    )
    {}

    public function sample(): Response
    {
        $samples = $this->sampleService->getSample();

        return Inertia::render('SamplePage', [
            'initialSamples' => $samples,
        ]);
    }

    public function getSampleData(): JsonResponse
    {
        // Sampleモデルからデータを取得
        $samples = $this->sampleService->getSample();

        return response()->json([
            'success' => true,
            'samples' => $samples,
        ], 200);
    }
}
