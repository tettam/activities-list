<div class="input_area">
  <label for="title">{{$label}}</label>
  <input 
  type="{{empty($type) ? 'text' : $type}}"
  name="{{$name}}" id="{{$name}}" type="text" placeholder="{{$placeholder ?? ''}}"
  {{empty($required) ? '' : 'required'}}
  value={{$value ?? ''}}
  >
</div>