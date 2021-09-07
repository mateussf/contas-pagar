<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()    {
         //\App\Models\User::factory(10)->create();

        $this->call(ContasPagarTableSeeder::class);

    }
}


class ContasPagarTableSeeder extends Seeder{
    public function run(){
        DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)', ['Pagamento Luz', '50']);
        DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)', ['Pagamento Telefone', '76']);
        DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)', ['Pagamento TV Assinatura', '40']);
    }
}