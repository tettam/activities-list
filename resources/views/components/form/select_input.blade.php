<div class="input_area">
  <label for="{{$name}}" required>{{$label ?? ''}}</label>
  <select 
    id="{{$name}}" 
    name="{{$name}}">
    <option selected disabled value="">Selecione uma categoria</option>
    {{$slot}}
  </select>
</div>