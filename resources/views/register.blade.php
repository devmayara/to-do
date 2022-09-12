<x-layout page="To-do | Register">

    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary"> Já possui conta? Faça login </a>
    </x-slot:btn>

    <section id="task_section">
        <h1> Registrar-se </h1>
        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('user.register_action') }}" method="post">
            @csrf

            <x-form.text_input name="name" label=" Seu nome "/>

            <x-form.text_input type="email" name="email" label=" Seu e-mail " placeholder="exemplo@email.com"/>

            <x-form.text_input type="password" name="password" label=" Sua senha "/>

            <x-form.text_input type="password" name="password_confirmation" label=" Confirme sua senha "/>

            <x-form.form_button resetText="Limpar" submitText="Registrar-se"/>

        </form>
    </section>

</x-layout>
