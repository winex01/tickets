<?php

use Illuminate\Database\Seeder;

class AppPermissionRolesRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-06-28 13:38:08',
                'updated_at' => '2019-06-28 13:38:08',
            ),
        ));
        
        
    }
}