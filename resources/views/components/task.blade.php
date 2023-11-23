<div class="task">
  <div class="title_task">

    <input type="checkbox" onchange="taskUpdate(this)" data-id="{{$data['id']}}" 
      @if($data && $data['completed'])
        checked
      @endif
    />

    <h5>{{$data['title'] ?? ''}}</h5>
  </div>

  <div class="priority">
    <div class="sphere"></div>
    <h5>{{$data['category']->title ?? ''}}</h5>
  </div>

  <div class="actions">
    <div class="sphere"></div>
    <a href="{{route('task.edit', ['id' => $data['id']]) }}">
      <img src="/assets/images/icon-edit.png" alt="">
    </a>
    <a href="{{route('task.delete', ['id' => $data['id']]) }}">
      <img src="/assets/images/icon-delete.png" alt="">
    </a>
  </div>
</div>
