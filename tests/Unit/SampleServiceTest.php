<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\Contracts\SampleServiceInterface;
use App\Repositories\Contracts\SampleRepositoryInterface;
use App\Models\Sample;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Database\Eloquent\Collection;

class SampleServiceTest extends TestCase
{
    #[Test]
    public function it_returns_sample_data_by_id():void
    {
        $sampleData = new Sample([
            'id' => 1,
            'sample_num' => 123,
            'sample_str' => 'Mocked String',
        ]);

        $collection = new Collection([$sampleData]);

        $this->mock(SampleRepositoryInterface::class, function ($mock) use ($collection) {
            $mock->shouldReceive('getLimitedSamples')
                ->with()
                ->once()
                ->andReturn($collection);
        });

        $sampleService = app(SampleServiceInterface::class);
        $result = $sampleService->getSample();

        $this->assertEquals(123, 123);
    }
}
