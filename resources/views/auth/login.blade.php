<x-layout.static title="Log in | Pertineo">
    <section class="section">
        <div class="section__inner">
            <h1>Log in to your account</h1>

            <form method="POST" action="{{ route('sessions.store') }}">
                @csrf

                <div class="form__field">
                    <label class="label" for="email">E-mail</label>
                    <input
                        class="input input--email"
                        type="email"
                        name="email"
                        id="email"
                        autofocus
                    >

                    @error('email')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form__field">
                    <label class="label" for="password">Password</label>
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

                <button type="submit" class="button button--solid">Log in</button>
            </form>

            <p>Not registered yet?</p>
            <a href="{{ route('register') }}" class="button button--outline">Register here</a>
        </div>
    </section>
</x-layout.static>
