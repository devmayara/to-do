<x-layout page="To-do | Login">

    {{-- <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary"> Home</a>
        <a href="{{route('register')}}" class="btn btn-primary"> Registre-se </a>
    </x-slot:btn> --}}

    <section id="task_section">
        <h1> Autenticação </h1>
        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('user.login_action') }}" method="post">
            @csrf

            <x-form.text_input type="email" name="email" label=" Seu e-mail " placeholder="exemplo@email.com"/>

            <x-form.text_input type="password" name="password" label=" Sua senha "/>

            <x-form.form_button resetText="Limpar" submitText="login"/>

        </form>
    </section>

</x-layout>
