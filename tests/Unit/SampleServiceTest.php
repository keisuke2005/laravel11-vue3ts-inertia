<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\Contracts\SampleServiceInterface;
use App\Repositories\Contracts\SampleRepositoryInterface;
use App\Models\Sample;
use PHPUnit\Framework\Attributes\Test;

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

        $this->mock(SampleRepositoryInterface::class, function ($mock) use ($sampleData) {
            $mock->shouldReceive('findById')
                ->with(1)
                ->once()
                ->andReturn($sampleData);
        });

        $sampleService = app(SampleServiceInterface::class);
        $result = $sampleService->getSample(1);

        $this->assertInstanceOf(Sample::class, $result);
        $this->assertEquals(123, $result->sample_num);
        $this->assertEquals('Mocked String', $result->sample_str);
    }
}
