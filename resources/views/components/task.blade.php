<div class="task">
  <div class="title_task">

    <input type="checkbox" 
      @if($data && $data['done'])
        checked
      @endif
    />

    <h5>{{$data['title'] ?? ''}}</h5>
  </div>

  <div class="priority">
    <div class="sphere"></div>
    <h5>{{$data['category'] ?? ''}}</h5>
  </div>

  <div class="actions">
    <div class="sphere"></div>
    <a href="#"">
      <img src="/assets/images/icon-edit.png" alt="">
    </a>
    <a href="#">
      <img src="/assets/images/icon-delete.png" alt="">
    </a>
  </div>
</div>
