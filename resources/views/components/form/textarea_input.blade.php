
<div class="inputArea">
    <label for="{{$name}}"> {{$label ?? ''}} </label>
    <textarea id="{{$name}}" name="{{$name}}" rows="8" placeholder="{{$placeholder ?? ''}}" {{empty($required) ? 'required' : ''}}></textarea>
</div>
