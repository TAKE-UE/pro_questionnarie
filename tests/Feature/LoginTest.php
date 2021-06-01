<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use DatabaseMigrations;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
        public function testLoginView() {
            $response = $this->get('/login');
            $response->assertStatus(200);
            //認証されてないことを確認
            $this->assertGuest();
            
            // $response = $this->post('login', [
            //     'email' => $user->email,
            //     'password' => 'password'
            // ]);
    
            // $response->assertStatus(200)
            // ->assertViewIs('home')
            // ->assertSee('制作したアンケート一覧');
        }
        /**
         * ダッシュボードアクセス（ログイン画面へリダイレクト）
         */
        public function testLoginAccess() {
            $response = $this->get('/home');
            $response->assertStatus(302)
                     ->assertRedirect('/login'); //承認されてないことを確認
            $this->assertGuest();
        }

        /**
         * ログイン処理を実行
         */
        public function testLogin() {
            // 認証されてないことを確認
            $this->assertGuest();
            // ダミーログイン
            $response = $this->dummyLogin();
            $response->assertStatus(200);
            // 認証を確認
            $this->aseertAuthenticated();
        }
    
        // $response = $this->get('/');

        // $response->assertStatus(200);
}