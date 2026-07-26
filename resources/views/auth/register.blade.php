<x-layout.static title="Register | Pertineo">
    <section class="section">
        <div class="section__inner">
            <h1>Sign up for a new account</h1>

            <p><span class="color-lightblue">*</span> Required fields</p>

            <form method="POST" action="{{ route('register.store') }}" class="form">
                @csrf

                <div class="form__group">
                    <div class="form__field">
                        <label class="label" for="firstName">First name</label>
                        <input
                            class="input input--text"
                            type="text"
                            name="firstName"
                            id="firstName"
                            placeholder="Jane"
                            required
                        >

                        @error('firstName')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form__field">
                        <label class="label" for="lastName">Last name</label>
                        <input
                            class="input input--text"
                            type="text"
                            name="lastName"
                            id="lastName"
                            placeholder="Doe"
                            required
                        >

                        @error('lastName')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__field">
                        <label class="label" for="email">E-mail</label>
                        <input
                            class="input input--email"
                            type="email"
                            name="email"
                            id="email"
                            placeholder="example@domain.com"
                            required
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
                            required
                        >

                        @error('password')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button class="button button--solid" type="submit">Register</button>
            </form>

            <p>Already have an account?</p>
            <a href="{{ route('login') }}" class="button button--outline">Log in here</a>
        </div>
    </section>
</x-layout.static>
