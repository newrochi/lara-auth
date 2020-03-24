@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <ul>
            <div class="small mb-2">
            <li class="text-danger">{{$error}}</li>
            </div>
        </ul>
    @endforeach
</ul>
@endif


