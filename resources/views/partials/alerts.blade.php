@if (session('success'))
<div class="alert alert-success">
    Success
</div>
@endif

@if (session('failed'))
<div class="alert alert-danger">
    Error
</div>
@endif
