<x-layout>

  <x-slot name='btn'>
    <a href="{{route('register')}}" class="btn btn-primary">
      Não possui conta?
    </a>
  </x-slot>

  <section id="task_section">
    <h1>Criar tarefa</h1>
    <form method="POST" action="{{route('task.create_action')}}">
      @csrf
     
      <x-form.text_input 
        name="title" 
        label="Título da tarefa" 
        required="required" 
        placeholder="Digite o título da tarefa"
      /> 
      <x-form.text_input 
        name="completedDate" 
        label="Data de Realização" 
        type="date"
      />
      <x-form.select_input 
        name="category_id" 
        label="Categoria">
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
      </x-form.select_input>
      <x-form.textarea_input 
        name="description"
        label="Descrição"
        placeholder="Digite a descrição da tarefa"
        required
      />
      <div class="input_area">
        <x-form.btn_form 
          type="reset" 
          class="btn"
          label="Resetar"
        />
        <x-form.btn_form 
          type="submit" 
          class="btn-primary"
          label="Adicionar"
        />
      </div>

    </form>
  </section>

</x-layout>