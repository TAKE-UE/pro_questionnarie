<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
// use DatabaseMigrations;

class LoginTest extends TestCase
{
    //データベースリセット（マイグレーションを使用している場合有効）
    // use RefreshDatabase;
    //
    use DatabaseTransactions;
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
            $user = factory(User::class)->create();
            $response = $this->actingAs($user)->get('/home');
            $response->assertStatus(200);
            // 認証を確認
            $this->assertAuthenticated();
        }

        public function testLogout() {
            // 認証されてないことを確認
            $this->assertGuest();
            // ダミーログイン
            $user = factory(User::class)->create();
            $response = $this->post('/logout');
            //ホーム画面にリダイレクト
            $response->assertStatus(302)
                     ->assertRedirect('/');
            // 認証されてないことを確認
            $this->assertGuest();
        }

    
        // $response = $this->get('/');

        // $response->assertStatus(200);
}