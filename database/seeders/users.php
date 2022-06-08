<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

// use Carbon\Carbon;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123456');

        DB::table('users')->delete();
        DB::table('users')->insert([
            [   'id' => 1,
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>$password,
                'is_admin'=>'1',
            ],
            [   'id' => 2,
                'name'=>'Tuấn Anh',
                'email'=>'tuananh9988@gmail.com',
                'password'=>$password,
                'is_admin'=>'1',

            ],
            [   'id' => 3,
                'name'=>'Hoa',
                'email'=>'nguyen@gmail.com',
                'password'=>$password,
                'is_admin'=>'0',

            ],
            [   'id' => 4,
                'name'=>'Good',
                'email'=>'pham@gmail.com',
                'password'=>$password,
                'is_admin'=>'0',
            ],
        ]);
        //
    }
}
