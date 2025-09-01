<div>
    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <input name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="email_confirmation" placeholder="Email confirmation" value="{{ old('email_confirmation') }}">
            @error('email_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Register</button>
    </form>
</div>
