<x-layout page='Login' btnHref='https://google.com.br' btnText='Go to Google'>
  <x-slot name='btn'>
    <a href="{{route('register')}}" class="btn btn-primary">
      Registre-se
    </a>
  </x-slot>

  Tela de Login
  <a href="{{route('home')}}">
    Ir para Home
  </a>
</x-layout>