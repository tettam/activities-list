<x-layout>

  <x-slot name="btn" >
    <a href="{{route('task.create')}}" class="btn btn-primary">
      Criar Tarefa
    </a>
    <a href="{{route('logout')}}" class="btn btn-primary">
      Sair
    </a>
  </x-slot>


  <section class="graph">
          
    <div class="graph_header">
      <h2>Progresso do Dia </h2>
      <p>Olá {{$AuthUser->name}}</p>
      <span></span>
      <div class="date_component">        
          <img src="/assets/images/icon-prev.png" alt="">
            <p>13 de Dez</p>
          <img src="/assets/images/icon-next.png" alt="">
      </div>
    </div>
    
    <div class="graph_header-subtitle"><b>Tarefas {{$countCompleted}} / {{$countTask}}</b></div>

    <div class="graph_placeholder">{{$percentageTasksCompleted}}</div>

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

  <script>
    //Pegando os dados do frontend
    async function taskUpdate(element) {
      let completed = element.checked;
      let taskId = element.dataset.id;
      let url = '{{route('task.update')}}'


      let rawResult = await fetch(url, {
        method:'POST',
        headers: {
          'Content-type' : 'application/json',
          'accept': 'application/json'
        },
        body: JSON.stringify({status, taskId, _token: '{{ csrf_token() }}'}),
      });
      result = await result.json();
      if(result.sucess) {
        alert('TArefa atualizada com Sucesso');
      } else {
        element.checked = !status
      }
    }
  </script>
</x-layout>