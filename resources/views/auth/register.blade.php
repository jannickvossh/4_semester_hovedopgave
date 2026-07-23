<x-layout.static title="Register | Pertineo">
    <h1>Register new user</h1>

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
        </div>

        <button class="button button--submit" type="submit">Register</button>
    </form>

    <p>Already a registered user?</p>
    <a href="{{ route('login') }}" class="button">Log in here</a>
</x-layout.static>
