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
                'nivel' => '1',
                'telefone' => '55984485442',
                'cpf' => '04672297080',
                'rua'=>'av. heraclides lima gomes',
                'numero'=>'2336',
                'bairro'=>'centro',
                'cidade'=>'boa vista do incra',
                'uf'=>'RS',

            ]
            );
            User::create(
                [
                    'name' => 'joao',
                    'email' => 'joao@erick.com',
                    'password' => bcrypt('joao123'),
                    'nivel' => '1',
                    'telefone' => '55984485442',
                    'cpf' => '04672297080',
                    'rua'=>'av. heraclides lima gomes',
                    'numero'=>'2336',
                    'bairro'=>'centro',
                    'cidade'=>'boa vista do incra',
                    'uf'=>'RS',
    
                ]
                );
    }
}
