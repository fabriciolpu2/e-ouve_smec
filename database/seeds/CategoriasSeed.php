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
            'descricao' => 'Denúncia',
            'style' => 'danger'
        ]);

        DB::table('ouvidoria.tipos_chamado')->insert([
            'descricao' => 'Reclamação',
            'style' => 'warning'
        ]);
        DB::table('ouvidoria.tipos_chamado')->insert([
            'descricao' => 'Sugestão',
            'style' => 'info'
        ]);        
        DB::table('ouvidoria.tipos_chamado')->insert([
            'descricao' => 'Elogio',
            'style' => 'primary'
        ]);

        DB::table('ouvidoria.status')->insert([
            'descricao' => 'Aberto',
            'style' => 'danger'
        ]);
        DB::table('ouvidoria.status')->insert([
            'descricao' => 'Em Analise',
            'style' => 'warning'
        ]);
        DB::table('ouvidoria.status')->insert([
            'descricao' => 'Encerrado',
            'style' => 'info'
        ]);
        DB::table('ouvidoria.tipos_assunto')->insert([
            'descricao' => 'Assistentes de Alunos'
        ]);
        DB::table('ouvidoria.tipos_assunto')->insert([
            'descricao' => 'Cuidadores'
        ]);
        DB::table('ouvidoria.tipos_assunto')->insert([
            'descricao' => 'Coordenação'
        ]);
        DB::table('ouvidoria.tipos_assunto')->insert([
            'descricao' => 'Prédio'
        ]);
        DB::table('ouvidoria.tipos_assunto')->insert([
            'descricao' => 'Professores'
        ]);DB::table('ouvidoria.tipos_assunto')->insert([
            'descricao' => 'Gestores/Diretores'
        ]);DB::table('ouvidoria.tipos_assunto')->insert([
            'descricao' => 'Merenda/Alimentação'
        ]);
        
    }
}
