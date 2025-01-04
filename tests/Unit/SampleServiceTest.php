<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\Contracts\SampleServiceInterface;
use App\Repositories\Contracts\SampleRepositoryInterface;
use App\Models\Sample;
use Mockery;

class SampleServiceTest extends TestCase
{
    /** @test */
    public function it_returns_sample_data_by_id():void
    {
        // サンプルデータを用意
        $sampleData = new Sample([
            'id' => 1,
            'sample_num' => 123,
            'sample_str' => 'Mocked String',
        ]);

        // モックの振る舞いを定義
        $this->mock(SampleRepositoryInterface::class, function ($mock) use ($sampleData) {
            $mock->shouldReceive('findById')
                ->with(1)
                ->once()
                ->andReturn($sampleData);
        });

        // Act: サービスを実行
        $sampleService = app(SampleServiceInterface::class);
        $result = $sampleService->getSample(1);

        // Assert: 期待する結果か確認
        $this->assertInstanceOf(Sample::class, $result);
        $this->assertEquals(123, $result->sample_num);
        $this->assertEquals('Mocked String', $result->sample_str);
    }
}
