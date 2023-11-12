<x-layout>

  <x-slot name="btn" >
    <a href="{{route('task.create')}}" class="btn btn-primary">
      Criar Tarefa
    </a>
  </x-slot>


  <section class="graph">
          
    <div class="graph_header">
      <h2>Progresso do Dia</h2>
      <span></span>
      <div class="date_component">        
          <img src="/assets/images/icon-prev.png" alt="">
            <p>13 de Dez</p>
          <img src="/assets/images/icon-next.png" alt="">
      </div>
    </div>
    
    <div class="graph_header-subtitle"><b>Tarefas 3/6</b></div>

    <div class="graph_placeholder"></div>

    <div class="tasks_left_footer">
      <img src="/assets/images/icon-info.png" alt="">
      Restam 03 tarefas para serem realizadas
    </div>
  </section>


  <section class="list">
    <div class="list_header">
      <select name="" id="" class="list_header_select">
        <option value="1" class="list_header_option">Todas as Tarefas</option>
      </select>
    </div>
    <div class="task_list">
      @foreach ($tasks as $task)
        <x-task :data=$task />
      @endforeach
      
    </div>
  </section>
</x-layout>