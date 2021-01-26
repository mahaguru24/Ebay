<?php

namespace Tests\Unit;

use Tests\TestCase;

class SellersControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSellersIndex()
    {
        $this->get('/sellers')
            ->assertViewHas('sellers');
    }
}
