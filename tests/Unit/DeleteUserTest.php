<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
       $user = new User();
       $user->name = ' King';
        $user->email = 'elisa@example.com';
        $user->password = 'PfQx37YgCzwiKb.KjNyWgaHb9';
        $user->save();

       $this->assertTrue($user->delete());
    }
}
