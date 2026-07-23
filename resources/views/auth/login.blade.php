<x-layout.static title="Log in | Pertineo">
    <h1>Log in</h1>

    <form method="POST" action="{{ route('sessions.store') }}">
        @csrf

        <div class="form__field">
            <label class="label" for="email">E-mail</label>
            <input
                class="input input--email"
                type="email"
                name="email"
                id="email"
            >

            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form__field">
            <label for="password">Password</label>
            <input
                class="input input--password"
                type="password"
                name="password"
                id="password"
            >

            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="button">Log in</button>
    </form>

    <p>Not registered yet?</p>
    <a href="{{ route('register') }}" class="button">Register here</a>
</x-layout.static>
