<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
  public function test_wrong_login(){

      $this->postJson('/login',[
          'email'=> 'someone@ec.com',
          'password'=> 'wrong-password',

      ])->assertStatus(422 )
      ->assertJson([
          'message' => 'These credentials do not match our records'
      ]);
  }
}
