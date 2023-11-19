<x-layout>

  <x-slot name='btn'>
    <a href="{{route('register')}}" class="btn btn-primary">
      Não possui conta?
    </a>
  </x-slot>

  <section id="task_section">
    <h1>Editar tarefa</h1>
    <form method="POST" action="{{route('task.edit_action')}}">
      @csrf
      <input type="hidden" name="id" value="{{$task->id}}" />

      <x-form.checkbox_input
        type="checkbox" 
        name="completed"
        checked="{{$task->completed}}"
        />

      <x-form.text_input 
        name="title" 
        label="Título da tarefa" 
        required="required" 
        placeholder="Digite o título da tarefa"
        value="{{$task->title}}"
      />
      <x-form.text_input 
        name="completedDate" 
        label="Data de Realização" 
        type="date"
        value="{{$task->completedDate}}"
      />
      <x-form.select_input 
        name="category_id" 
        label="Categoria">
        @foreach ($categories as $category)
          <option value="{{$category->id}}" {{$category->id == $task->category_id ? 'selected' : ''}}>
            {{$category->title}}
          </option>
        @endforeach
      </x-form.select_input>
      <x-form.textarea_input 
        name="description"
        label="Descrição"
        placeholder="Digite a descrição da tarefa"
        required
        value="{{$task->description}}"
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
          label="Atualizar Tarefa"
        />
      </div>

    </form>
  </section>

</x-layout>