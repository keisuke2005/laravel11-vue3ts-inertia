<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Sample;
use App\Services\Contracts\SampleServiceInterface;
use Mockery;

class SampleControllerTest extends TestCase
{
    /** @test */
    public function it_returns_sample_page_with_sample_message():void
    {
        // サンプルデータ
        $sampleData = new Sample([
            'id' => 1,
            'sample_num' => 123,
            'sample_str' => 'Mocked Message',
        ]);

        // モックの振る舞いを定義
        $this->mock(SampleServiceInterface::class, function ($mock) use ($sampleData) {
            $mock->shouldReceive('getSample')
                ->with(1)
                ->once()
                ->andReturn($sampleData);
        });

        // Act: エンドポイントにGETリクエスト
        $response = $this->get('/sample');

        // Assert: レスポンスの検証
        $response->assertStatus(200);
    }

}
