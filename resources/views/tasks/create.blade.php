<x-layout>

  <x-slot name='btn'>
    <a href="{{route('register')}}" class="btn btn-primary">
      Não possui conta?
    </a>
  </x-slot>

  <section id="create_task_section">
    <h1>Criar tarefa</h1>
    <form>

      <div class="input_area">
        <label for="title">Título</label>
        <input name="title" id="title" type="text" placeholder="Digite o título da tarefa">
      </div>
   
      <div class="input_area">
        <label for="completedDate">Data de Realização</label>
        <input name="completedDate" id="completedDate" type="date" placeholder="Data de Realização">
      </div>
   
      <div class="input_area">
        <label for="category" @required(true)>Categoria</label>
        <select id="category_id" name="category_id">
          <option selected disabled value="">Selecione a categoria</option>
          <option value="">Valor qualquer</option>
        </select>
      </div>

      <div class="input_area">
        <label for="description">Descrição</label>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Digite uma descrição"></textarea>
      </div>

    </form>
    
  </section>

</x-layout>