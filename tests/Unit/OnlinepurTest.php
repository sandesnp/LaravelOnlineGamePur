<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\user;
use App\product;
use DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use DB;

use Session;

class ExampleTest extends TestCase
{
    // 'pic' => UploadedFile::fake()->image('myprofilepic.png')

    /** @test **/
    public function for_logged_in_users_onlyy(){
        

        $response= $this->get('pur/')->assertRedirect('/login');
    }


     /** @test **/
    public function if_user_registers(){

        $user = factory(user::class)->make([
            'firstname' => 'Abigail',
            'lastname'=>'test1',
            'address'=>'test1',
            'phoneno'=>'test1',
            'email'=>'test1@test1',
            'password'=>'test12345',
            'password_confirmation'=>'test12345',
        ]);

        $response=$this->post('register/',[
            'firstname'=>$user->firstname,
            'lastname'=>$user->lastname,
            'address'=>$user->address,
            'phoneno'=>$user->phoneno,
            'email'=>$user->email,
            'password'=>$user->password,
            'password_confirmation'=>$user->password_confirmation,
        ]);
        $this->assertDatabaseHas('users', [
            'email' => 'test1@test1'
        ]);
    }

        /** @test **/
    public function if_product_stored(){
        

        $response = $this->post('/product', [
            'product_name'=>'test30',
            'product_intro'=>'test2test2test2test2test2',
            'product_price'=>'59',
            'product_developer'=>'test2',
            'product_type'=>'RPG',
            'product_image'=>UploadedFile::fake()->image('file.png', 600, 600),
            'os'=>'windows Vista',
            'ram'=>'16',
            'processor'=>'I7',
            'graphics'=>'Gtx 750ti',
            'network'=>0,
            ]);

            $this->assertDatabaseHas('products', [
                'product_name' => 'test30'
            ]);
    }  

        //USER Delete
    /** @test **/
    public function if_delete_user(){

        $response=$this->call('Delete','user/1');
        $this->assertEquals(302,$response->getstatusCode());
        $this->assertDatabaseHas('users',['email'=>'admin@admin','id'=>1]);
    }

   

    
    //Product Delete
    /** @test **/
    public function if_delete_product(){

        $response=$this->call('Delete','product/2');
        $this->assertEquals(302,$response->getstatusCode());
        $this->assertDatabaseHas('products',['product_name'=>'test29','id'=>2]);
    }

 
//REVIEW Delete
    /** @test **/
    public function if_delete_review(){

        $response=$this->call('Delete','pur/1');
        $this->assertEquals(302,$response->getstatusCode());
        $this->assertDatabaseHas('purchase',['user_id'=>1,'id'=>1]);
    }

    /** @test **/
    public function Destroy($id, Request $request, user $user){

        $user=$user->findOrFail($id);
        if($user->Delete()){

            $request->session()->flash('success','User id Deleted');
            return back();
        }

    }


      /** @test **/
      public function if_suscribe_entry(){

        $response=$this->post('/contactsave',[
            'name'=>'test1',
            'email'=>'test1@test1',
            'message'=>'test1',
           
        ]);
        $this->assertDatabaseHas('contact', [
            'name' => 'test1'
        ]);
    }


    /** @test **/
    public function check_list(){
        $this->call('GET', '/product/2');
        $this->assertViewHas('test29');
    }
   
    /** @test **/
    public function redirect_login_loggedin(){
        $user = new User(array('name' => 'John'));
        $this->be($user); //You are now authenticated

        $response= $this->get('/login')->assertRedirect('/home');
    }


   

    


    
}
