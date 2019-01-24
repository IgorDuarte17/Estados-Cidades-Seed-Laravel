<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->delete();

        DB::table('estados')->insert(['id' => 1, 'sigla' => 'AC', 'nome' => 'Acre']);
        DB::table('estados')->insert(['id' => 2, 'sigla' => 'AL', 'nome' => 'Alagoas']);
        DB::table('estados')->insert(['id' => 3, 'sigla' => 'AP', 'nome' => 'Amapá']);
        DB::table('estados')->insert(['id' => 4, 'sigla' => 'AM', 'nome' => 'Amazonas']);
        DB::table('estados')->insert(['id' => 5, 'sigla' => 'BA', 'nome' => 'Bahia']);
        DB::table('estados')->insert(['id' => 6, 'sigla' => 'CE', 'nome' => 'Ceará']);
        DB::table('estados')->insert(['id' => 7, 'sigla' => 'DF', 'nome' => 'Distrito Federal']);
        DB::table('estados')->insert(['id' => 8, 'sigla' => 'ES', 'nome' => 'Espírito Santo']);
        DB::table('estados')->insert(['id' => 9, 'sigla' => 'GO', 'nome' => 'Goiás']);
        DB::table('estados')->insert(['id' => 10, 'sigla' => 'MA', 'nome' => 'Maranhão']);
        DB::table('estados')->insert(['id' => 11, 'sigla' => 'MT', 'nome' => 'Mato Grosso']);
        DB::table('estados')->insert(['id' => 12, 'sigla' => 'MS', 'nome' => 'Mato Grosso do Sul']);
        DB::table('estados')->insert(['id' => 13, 'sigla' => 'MG', 'nome' => 'Minas Gerais']);
        DB::table('estados')->insert(['id' => 14, 'sigla' => 'PA', 'nome' => 'Pará']);
        DB::table('estados')->insert(['id' => 15, 'sigla' => 'PB', 'nome' => 'Paraíba']);
        DB::table('estados')->insert(['id' => 16, 'sigla' => 'PR', 'nome' => 'Paraná']);
        DB::table('estados')->insert(['id' => 17, 'sigla' => 'PE', 'nome' => 'Pernambuco']);
        DB::table('estados')->insert(['id' => 18, 'sigla' => 'PI', 'nome' => 'Piauí']);
        DB::table('estados')->insert(['id' => 19, 'sigla' => 'RJ', 'nome' => 'Rio de Janeiro']);
        DB::table('estados')->insert(['id' => 20, 'sigla' => 'RN', 'nome' => 'Rio Grande do Norte']);
        DB::table('estados')->insert(['id' => 21, 'sigla' => 'RS', 'nome' => 'Rio Grande do Sul']);
        DB::table('estados')->insert(['id' => 22, 'sigla' => 'RO', 'nome' => 'Rondônia']);
        DB::table('estados')->insert(['id' => 23, 'sigla' => 'RR', 'nome' => 'Roraima']);
        DB::table('estados')->insert(['id' => 24, 'sigla' => 'SC', 'nome' => 'Santa Catarina']);
        DB::table('estados')->insert(['id' => 25, 'sigla' => 'SP', 'nome' => 'São Paulo']);
        DB::table('estados')->insert(['id' => 26, 'sigla' => 'SE', 'nome' => 'Sergipe']);
        DB::table('estados')->insert(['id' => 27, 'sigla' => 'TO', 'nome' => 'Tocantins']);
    }
}
