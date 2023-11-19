<x-layout>

  <x-slot name='btn'>
    <a href="{{route('register')}}" class="btn btn-primary">
      Não possui conta?
    </a>
  </x-slot>

  <section id="task_section">
    <h1>Registrar-se</h1>

    @if ($errors->any())
      <ul class="alert alert-error">
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif

    <form method="POST" action="{{route('user.login_action')}}">
      @csrf
     
      <x-form.text_input 
        name="email" 
        label="Email" 
        required="required" 
        placeholder="Seu email"
      />
      <x-form.text_input
      type="password"
      name="password" 
      label="Senha" 
      required="required" 
      placeholder="Sua senha"
    />


    <div class="input_area">
      <x-form.btn_form 
        type="reset" 
        class="btn"
        label="Limpar"
      />
      <x-form.btn_form 
        type="submit" 
        class="btn-primary"
        label="Entrar"
      />
    </div>

    </form>
  </section>

</x-layout>