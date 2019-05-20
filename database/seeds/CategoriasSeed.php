<?php

use Illuminate\Database\Seeder;

class CategoriasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ouvidoria.tipos_instituicao')->insert([
            'descricao' => 'Escolas Municipais'
        ]);
        DB::table('ouvidoria.tipos_instituicao')->insert([
            'descricao' => 'Casas Mãe'
        ]);
        DB::table('ouvidoria.tipos_instituicao')->insert([
            'descricao' => 'SMEC'
        ]);
        DB::table('ouvidoria.instituicoes')->insert([
            'nome' => 'Escola Municipal 01',
            'tipo_id' => 1
        ]);
        DB::table('ouvidoria.instituicoes')->insert([
            'nome' => 'Casa Mae 02',
            'tipo_id' => 2
        ]);
        DB::table('ouvidoria.instituicoes')->insert([
            'nome' => 'Setor RH',
            'tipo_id' => 3
        ]);
           
        
        DB::table('ouvidoria.tipos_chamado')->insert([
            'descricao' => 'Denuncia'
        ]);

        DB::table('ouvidoria.tipos_chamado')->insert([
            'descricao' => 'Elogio'
        ]);
        DB::table('ouvidoria.tipos_chamado')->insert([
            'descricao' => 'Comentario'
        ]);

        DB::table('ouvidoria.chamados')->insert([
            'titulo' => 'Denuncia 01',
            'relato' => 'Texto da denuncia',
            'nome_autor' => 'denuncia anomima',
            'tipo_id' => 1,
            'instituicao_id' => 1
        ]);

        DB::table('ouvidoria.chamados')->insert([
            'titulo' => 'Denuncia 02',
            'relato' => 'Texto da denuncia 2',
            'nome_autor' => 'alexandre',
            'tipo_id' => 2,
            'instituicao_id' => 2
        ]);

        DB::table('ouvidoria.movimentacao_chamados')->insert([
            'status' => 'Aberto',
            'user' => 'Funcionario 01',
            'atividade' => 'encaminhar para setor A',
            'chamado_id' => 1
        ]);
        DB::table('ouvidoria.movimentacao_chamados')->insert([
            'status' => 'Encerrado',
            'user' => 'Funcionario 02',
            'atividade' => 'Solucionado',
            'chamado_id' => 2
        ]);
    }
}
