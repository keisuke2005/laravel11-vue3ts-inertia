<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Sample;
use App\Services\Contracts\SampleServiceInterface;
use PHPUnit\Framework\Attributes\Test;

class SampleControllerTest extends TestCase
{
    #[Test]
    public function it_returns_sample_page_with_sample_message():void
    {
        $sampleData = new Sample([
            'id' => 1,
            'sample_num' => 123,
            'sample_str' => 'Mocked Message',
        ]);

        $this->mock(SampleServiceInterface::class, function ($mock) use ($sampleData) {
            $mock->shouldReceive('getSample')
                ->with(1)
                ->once()
                ->andReturn($sampleData);
        });

        $response = $this->get('/sample');

        $response->assertStatus(200);
    }

}
