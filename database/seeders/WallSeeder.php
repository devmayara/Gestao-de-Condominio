<?php

namespace Database\Seeders;

use App\Models\Wall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wall::create([
            'title' => 'Título de Aviso de Teste',
            'body' => 'Lorem Ipsum bla bla bla sknfg newofn ksdmf  moiwemf ksmdf ewpmfwepmfwep,c',
            'datecreated' => '2020-12-20 15:00:00'
        ]);
        Wall::create([
            'title' => 'Alerta Geral de Teste',
            'body' => 'Bla bla bla sknfg newofn ksdmf  moiwemf ksmdf ewpmfwepmfwep,c Lorem Ipsum',
            'datecreated' => '2020-12-20 18:00:00'
        ]);
    }
}
