<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome  = 'Fornecedor 100';
        $fornecedor->site  = 'fornecedor100.com.br';
        $fornecedor->uf    = 'CE';
        $fornecedor->email = 'fornecedor100@email.com';
        $fornecedor->save();

        //Com o método create
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf'   => 'SP',
            'email'=> 'fornecedor200@email.com'
        ]);

        //Insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf'   => 'rj',
            'email'=> 'fornecedor300@email.com'
        ]);




    }
}
