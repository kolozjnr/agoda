@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button class="close" type="button" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button class="close" type="button" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button class="close" type="button" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <i class="bi bi-slash-circle"></i>
    <button class="close" type="button" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-block">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif