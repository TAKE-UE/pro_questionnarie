<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**
    * public function testLoginView()
    * {
    *    $response = $this->get('/login');
    *    $response->assertStatus(200);
    *    //認証されてないことを確認
    *    $this->assertGuest();
    *    
    *    // $response = $this->post('login', [
    *    //     'email' => $user->email,
    *    //     'password' => 'password'
    *    // ]);

    *    // $response->assertStatus(200)
    *    // ->assertViewIs('home')
    *    // ->assertSee('制作したアンケート一覧');
    * }
    
     * ダッシュボードアクセス（ログイン画面へリダイレクト）
    
    * public function testLoginAccess()
    * {
    *    $response = $this->get('/home');
    *    $response = $this->assertStatus(302)
    *                     ->assertRedirect('/login');//リダイレクト先を確認
    *                     //承認されてないことを確認
    *                $this->assertGuest();
    * }
    */
}
