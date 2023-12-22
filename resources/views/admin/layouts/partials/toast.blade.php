@if (
    $errors->any() ||
        (Session::has('success') && !empty(Session::get('success'))) ||
        (Session::has('error') && !empty(Session::get('error'))))
    <div
        class="alert {{ ($errors->any() ? 'alert-danger' : Session::has('success')) && !empty(Session::get('success')) ? 'alert-success' : 'alert-danger' }}">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @else
            <span>{!! Session::get(Session::has('success') ? 'success' : 'error')[0] !!}</span>
        @endif
    </div>
@endif
