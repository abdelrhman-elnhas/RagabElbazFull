@if ($errors->any())
<div class="alert text-light my-3 message  alert-danger" role="alert">
    <h4 class="text-light">
        <strong>يوجد خطأ </strong>
        <button type="button" class="close m-0 p-2" data-dismiss="alert">&times;</button>
    </h4>
    @foreach($errors->all() as $error)
    <p>* {{ $error }}</p>
    @endforeach
</div>
@endif

@if(session()->has('success'))
<div class="alert text-light my-3 message  alert-info alert-dismissible fade show" role="alert">
        {{ session('success') }}.
        <button type="button" class="close m-0 p-2" data-dismiss="alert">&times;</button>
</div>
@endif
@if(session()->has('faild'))
<div class="alert text-light message my-3 alert-danger alert-dismissible fade show" role="alert">
        {{ session('faild') }}.
        <button type="button" class="close m-0 p-2" data-dismiss="alert">&times;</button>
</div>
@endif
