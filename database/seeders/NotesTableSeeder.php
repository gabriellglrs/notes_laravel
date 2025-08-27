<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primeiro, precisamos buscar os UUIDs dos usuários criados
        $users = DB::table('users')->pluck('uuid', 'email');

        $notes = [
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['admin@example.com'],
                'title' => 'Lista de Compras',
                'text' => 'Pão, leite, ovos, queijo, presunto, frutas (banana, maçã), verduras (alface, tomate), produtos de limpeza (detergente, sabão em pó)',
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(7),
            ],
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['admin@example.com'],
                'title' => 'Reunião de Projeto',
                'text' => 'Pontos discutidos: - Definir escopo do projeto - Estabelecer cronograma - Dividir responsabilidades entre a equipe - Próxima reunião: sexta-feira às 14h',
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['gabriel@example.com'],
                'title' => 'Ideias para o Blog',
                'text' => '1. Tutorial sobre Laravel 2. Dicas de produtividade 3. Review de ferramentas de desenvolvimento 4. Como configurar ambiente de desenvolvimento 5. Boas práticas de código',
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['admin@example.com'],
                'title' => 'Receita de Bolo de Chocolate',
                'text' => 'Ingredientes: 3 ovos, 2 xícaras de açúcar, 1 xícara de chocolate em pó, 2 xícaras de farinha, 1 xícara de óleo, 1 xícara de água quente. Modo de preparo: Bata os ovos com açúcar, adicione os ingredientes secos, por último a água quente. Asse por 40 minutos a 180°C.',
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['teste@example.com'],
                'title' => 'Objetivos do Mês',
                'text' => '- Concluir curso online de Vue.js - Ler pelo menos 2 livros - Fazer exercícios físicos 3x por semana - Organizar o escritório em casa - Planejar viagem de férias',
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDay(),
            ],
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['gabriel@example.com'],
                'title' => 'Configuração do Servidor',
                'text' => 'Passos para configurar o servidor de produção: 1. Instalar Nginx 2. Configurar PHP 8.2 3. Instalar MySQL 8.0 4. Configurar SSL 5. Configurar backup automático 6. Monitoramento com logs',
                'created_at' => Carbon::now()->subDay(),
                'updated_at' => Carbon::now()->subDay(),
            ],
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['admin@example.com'],
                'title' => 'Lembretes Importantes',
                'text' => 'Não esquecer: - Pagar conta de luz até dia 15 - Agendar consulta médica - Renovar CNH - Ligar para o cliente sobre o projeto - Comprar presente de aniversário',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'uuid' => Str::uuid(),
                'user_uuid' => $users['teste@example.com'],
                'title' => 'Anotações da Palestra',
                'text' => 'Palestra sobre "Desenvolvimento Ágil": Principais pontos - Metodologia Scrum - Importância dos testes automatizados - Comunicação eficaz na equipe - Entrega contínua de valor - Retrospectivas regulares',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('notes')->insert($notes);
    }
}
