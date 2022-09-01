<x-layout page="To-do | Edit">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary"> Voltar </a>
    </x-slot:btn>

    <section id="task_section">
        <h1> Editar Tarefa </h1>
        <form action="{{route('task.edit_action')}}" method="post">
            @csrf

            <x-form.text_input type="text" name="title" label=" Título da tarefa " value="{{$task->title}}"/>

            <x-form.text_input type="datetime-local" name="due_data" label=" Data de Realização " value="{{$task->due_data}}"/>

            <x-form.select_input name="category" label=" Categoria " required="required">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}"
                        @if ($category->id == $task->category_id)
                            selected
                        @endif
                        >{{$category->title}}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input name="description" label=" Descrição da tarefa " value="{{$task->description}}" />

            <x-form.form_button resetText="Resetar" submitText="Atualizar Tarefa"/>

        </form>
    </section>

</x-layout>
