@if (session('message'))
    <div class="alert alert-{{ session('alert-type') }} g alert-dismissible fade show" role="alert" id="alert-session">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session()->has('message_error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert-session">
    {{ session('message_error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif