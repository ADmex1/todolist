<?php

namespace Tests\Feature;

use App\Services\UserService;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    private UserService $userService;
    protected function setUp(): void{
        parent::setUp();

        $this->UserService = $this-> app->make(UserService::class);
    }
    public function testSample(){
        self::assertTrue(true);
    }
}
