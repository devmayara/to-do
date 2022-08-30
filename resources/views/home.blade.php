<x-layout page="To-do | Home">

    <x-slot:btn>
        <a href="#" class="btn btn-primary"> Criar Tarefa </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header_line"></div>
            <div class="graph_header_date">
                <img src="/assets/images/icon-prev.png">
                    13 de Dez
                <img src="/assets/images/icon-next.png">
            </div>
        </div>
        <div class="graph_header-subtitle"> Tarefas: <b>3/6</b> </div>
        <div class="graph-placeholder"></div>
        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png">
            Restam 3 tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>

        @php
            $tasks = [
                ['done' => false, 'title' => 'Minha Primeira Task', 'category' => 'Categoria 1', 'edit_url' => '#', 'delete_url' => '#'],
                ['done' => true, 'title' => 'Minha Segunda Task', 'category' => 'Categoria 2', 'edit_url' => '#', 'delete_url' => '#'],
                ['done' => false, 'title' => 'Minha Terceira Task', 'category' => 'Categoria 3', 'edit_url' => '#', 'delete_url' => '#'],
                ['done' => true, 'title' => 'Minha Quarta Task', 'category' => 'Categoria 4', 'edit_url' => '#', 'delete_url' => '#'],
                ['done' => false, 'title' => 'Minha Quinta Task', 'category' => 'Categoria 5', 'edit_url' => '#', 'delete_url' => '#'],
            ]
        @endphp

        <x-task :data=$tasks[0] />
        <x-task :data=$tasks[1] />
        <x-task :data=$tasks[2] />
        <x-task :data=$tasks[3] />
        <x-task :data=$tasks[4] />

    </section>

</x-layout>
