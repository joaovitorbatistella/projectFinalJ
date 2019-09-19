<?php

use Illuminate\Database\Seeder;
use App\fornecedor;
class fornecedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        fornecedor::create([
            'nome' => 'Peças Teste',
            'email' => 'pecas@pecas.com',
            'endereço' => 'Av heraclides lima gomes, 2336',
            'uf' => 'RS',
            'cidade' => 'Boa Vista do Incra'
                ]);
                /*
                $table->string('nome');
                $table->string('email')->unique();
                $table->string('endereço');
                $table->string('uf');
                $table->string('cidade');
                */    
    }
}
