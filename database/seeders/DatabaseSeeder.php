<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Banner;
use App\Models\Donadore;
use App\Models\Solicitud;
use App\Models\User;
use DragonCode\Contracts\Routing\Core\Tag;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run(): void
    {
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DonadoreSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(BannerSeeder::class);

        
        user::factory(10)->create()->each(function($user){
            $user->assignRole('donador');
        });
    }
}
