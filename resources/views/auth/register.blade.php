<x-layout.static title="Register | Pertineo">
    <section class="section">
        <div class="section__inner">
            <h1 class="text-align-center">Sign up for a new account</h1>

            <div class="container--narrow mx-auto mt-large">
                <form method="POST" action="{{ route('register.store') }}" class="form mb-large">
                    @csrf

                    <p><span class="color-lightblue">*</span> Required fields</p>

                    <div class="form__group">
                        <div class="form__field">
                            <label class="label has-asterisk" for="firstName">First name</label>
                            <input
                                class="input input--text"
                                type="text"
                                name="firstName"
                                id="firstName"
                                placeholder="Jane"
                                autofocus
                            >

                            @error('firstName')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form__field">
                            <label class="label has-asterisk" for="lastName">Last name</label>
                            <input
                                class="input input--text"
                                type="text"
                                name="lastName"
                                id="lastName"
                                placeholder="Doe"
                            >

                            @error('lastName')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__field">
                            <label class="label has-asterisk" for="email">E-mail</label>
                            <input
                                class="input input--email"
                                type="email"
                                name="email"
                                id="email"
                                placeholder="example@domain.com"
                            >

                            @error('email')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form__field">
                            <label class="label has-asterisk" for="password">Password</label>
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
                    </div>

                    <button class="button button--solid mx-auto" type="submit">Register</button>
                </form>

                <p class="text-align-center mb-tiny">Already have an account?</p>
                <a href="{{ route('login') }}" class="button button--outline mx-auto">Log in here</a>
            </div>
        </div>
    </section>
</x-layout.static>
