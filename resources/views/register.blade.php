<x-layout page="To-do | Register">

    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary"> Já possui conta? Faça login </a>
    </x-slot:btn>

    <section id="task_section">
        <h1> Registrar-se </h1>
        <form action="{{ route('user.register_action') }}" method="post">
            @csrf

            <x-form.text_input type="text" name="name" label=" Seu nome " placeholder="Digite o seu nome completo"
                required="required" />

            <x-form.text_input type="email" name="email" label=" Seu e-mail " placeholder="exemplo@email.com"
                required="required" />

            <x-form.text_input type="password" name="password" label=" Sua senha " required="required" />

            <x-form.form_button resetText="Limpar" submitText="Registrar-se" />

        </form>
    </section>

</x-layout>
