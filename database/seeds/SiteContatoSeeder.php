<?php

use Illuminate\Database\Seeder;
use App\SiteContato;


class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $contato = new SiteContato();
        $contato->nome = 'Sistema Super Gestão';
        $contato->telefone = '(86)99999-9999';
        $contato->email = 'contato@supergestao.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo ao sistema Super Gestão ';
        $contato->save();
        */

        factory(SiteContato::class,100)->create();

    }
}
