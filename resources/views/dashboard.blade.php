<x-layout.dashboard title="Home | Pertineo">
    <form method="POST" action="{{ route('sessions.destroy') }}">
        @csrf
        @method('DELETE')

        <button class="button" type="submit">Log out</button>
    </form>
</x-layout.dashboard>
