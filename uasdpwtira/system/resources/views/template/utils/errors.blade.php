@if($errors->has($item))
    @foreach($errors->get($item) as $msg)
    <label for="" class="label text-danger">{{$errors->get($item)[0]}}</label>
    @endforeach
@endif