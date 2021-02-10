<h1>Промяна на мейл:</h1>

{!! Form::open(['method' => 'post', 'url' => route('form.submit'), 'id' => 'form', 'autocomplete' => 'off']) !!}
    @if (Session::has('message'))
        <div class="form-group">
            <div class="alert {{ Session::get('type') }}">
                {{ Session::get('message') }}
            </div>
        </div>
    @endif

    <div class="form-group @error('email') error @enderror">
        <div class="input">
            {!! Form::email('email', $user->email) !!}

            @error('email')
                <span class="error backend-error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group submit-button">
        {!! Form::button('<span>Обнови</span>', ['type' => 'submit', 'class' => 'button style-1']) !!}
    </div>
{!! Form::close() !!}
