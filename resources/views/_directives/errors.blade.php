@if ($errors->count())
    <div class="notification is-danger notification--errors">
        <ul>
            @foreach($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif