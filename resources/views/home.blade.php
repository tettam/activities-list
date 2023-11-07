<x-layout>

  <x-slot name="btn" >
    <a href="#" class="btn btn-primary">
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
      @php
          $tasks = [
            [
              'done' => false, 
              'title' => 'Minha Primeira Task',
              'category' => 'Cateogira 1'
            ],
            [
              'done' => true, 
              'title' => 'Minha Segunda Task',
              'category' => 'Cateogira 2'
            ],
            [
              'done' => false, 
              'title' => 'Minha Terceira Task',
              'category' => 'Cateogira 3'
            ]
          ]
      @endphp
      <x-task :data=$tasks[0] />
      <x-task :data=$tasks[1] />
      <x-task :data=$tasks[2] />
    </div>
  </section>
</x-layout>