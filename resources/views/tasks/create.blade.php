<x-layout page="To-do | Create">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary"> Voltar </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1> Criar Tarefa </h1>
        <form action="" method="post">
            <div class="inputArea">
                <label for="title"> Título da tarefa </label>
                <input type="text" id="title" name="title" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="inputArea">
                <label for="due_date"> Data de Realização </label>
                <input type="date" id="due_date" name="due_date" required>
            </div>
            <div class="inputArea">
                <label for="category"> Categoria </label>
                <select id="category" name="category">
                    <option selected disabled value="">Selecione a categoria</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="inputArea">
                <label for="description"> Descrição da tarefa </label>
                <textarea id="description" name="description" rows="8" placeholder="Dígite uma descrição para sua tarefa"></textarea>
            </div>
        </form>
    </section>

</x-layout>
