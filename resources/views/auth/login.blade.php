<x-layout.static title="Log in | Pertineo">
    <section class="section">
        <div class="section__inner">
            <h1 class="text-align-center mt-medium">Log in to your account</h1>

            <div class="container--very-narrow mx-auto mt-large">
                <form method="POST" action="{{ route('sessions.store') }}" class="form mb-large">
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

                    <button type="submit" class="button button--solid mx-auto">Log in</button>
                </form>

                <p class="text-align-center mb-tiny">Don't have an account yet?</p>
                <a href="{{ route('register') }}" class="button button--outline mx-auto">Register here</a>
            </div>
        </div>
    </section>
</x-layout.static>
