<header class="header">
    <form method="POST" action="{{ route('sessions.destroy') }}">
        @csrf
        @method('DELETE')

        <button class="button" type="submit">Log out</button>
    </form>
</header>
