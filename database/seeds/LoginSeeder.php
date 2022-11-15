<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Seguridad', 'lastName' => 'Seguridad', 'dni' => '12345678L', 'email' => 'seguridadweb@campusviu.es', 'password' => Hash::make('S3gur1d4d?W3b'), 'telephone' => '123456789', 'idCountry' => '1', 'iban' => ' ES91 2100 0418 45 0200051332', 'aboutYou' => 'Seguridades web en la Universidad Internacional de Valencia']
        ];
        DB::table('users')->insert($data);
    }
}
