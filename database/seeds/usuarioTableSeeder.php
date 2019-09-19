<?php
use Illuminate\Database\Seeder;
use App\User;
class usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Erick',
                'email' => 'erick@erick.com',
                'password' => bcrypt('erick123'),
                'dataNascimento' => '2002-12-11',
                'nivel' => 1,
                'telefone' => '55984485442',
                'cpf' => '04672297080',
            ]
            );
    }
}