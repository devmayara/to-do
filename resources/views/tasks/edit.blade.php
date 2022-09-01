<x-layout page="To-do | Edit">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary"> Voltar </a>
    </x-slot:btn>

    <section id="task_section">
        <h1> Editar Tarefa </h1>
        <form action="{{route('task.edit_action')}}" method="post">
            @csrf

            <x-form.text_input name="title" label=" Título da tarefa " placeholder="Digite o título da tarefa" required="required"/>

            <x-form.text_input type="date" name="due_data" label=" Data de Realização " required="required"/>

            <x-form.select_input name="category" label=" Categoria " required="required">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input name="description" label=" Descrição da tarefa " placeholder="Dígite uma descrição para sua tarefa" />

            <x-form.form_button resetText="Resetar" submitText="Editar Tarefa"/>

        </form>
    </section>

</x-layout>
