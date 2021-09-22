<?php

namespace Tests\Feature\Controllers\Wallets;


use App\Stock;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http;
use Tests\TestCase; 

class StocksControllerTest extends TestCase
{
    use RefreshDatabase;
    /** @test **/
    public function it_generates_the_correct_avarage_price_for_a_given_stock()
    {
        // avarage = ...(purchase price * quantity) / (number of stocks)

        // 1 AAPL @ 10
        // 2 APPL @ 20

        // ((1 * 10) + (2 * 20)) / 3 = (50 / 3 ) = 16, 666

        // Buys 10 apple stocks at 10 dollars
        // Buys 30 apple stocks at 15 dollars
        //Average price should be 13.75

       $user = factory(User::class)->create();
        $stock = factory(Stock::class)->create([
            'stock' => "AAPL",
            'market' => 'NASDAQ',
            'current_price' => 12,
        ]);

        //dd($stocks);
    }
}
