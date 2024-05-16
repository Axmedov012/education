<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\User;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CoursesTest extends TestCase
{

    public function test_courses_yaratsa_bolyapdi()
    {
        $admin = User::find(1);

       $responce = $this->actingAs($admin)->post('admin/add/cource/post',
            [
                'title' =>'world',
                'price' =>'1234',
                'description' =>'required',

            ]);

        $this->assertDatabaseHas('courses',[
            'title' =>'world',
        ]);

        $responce->assertRedirect('admin/all/cource/page');

    }

    public function test_courses_korish()
    {
        $admin = User::find(1);
        $responce = $this->actingAs($admin)->get('admin/all/cource/page');

        $responce->assertStatus(200)->assertOk();
    }

    public function test_courses_yaratish_sahifani_korish()
    {
        $view = $this->withViewErrors([])->view('admin/cource/addCource');
        $view->assertSee('Back');
    }

}
