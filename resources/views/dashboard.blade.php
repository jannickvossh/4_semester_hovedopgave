<x-layout.dashboard title="Home | Pertineo">
    <div class="flex-wrapper justify-between mt-medium mb-medium">
        <h1>Good morning, Jannick.<br>Here is your overview for the day.</h1>
    </div>

    <div class="dashboard">
        <div class="dashboard-module dashboard-module--half">
            <header class="dashboard-module__header">
                <h2 class="dashboard-module__heading">Key statistics</h2>
            </header>

            <div class="dashboard-module__content">
                <div class="key-statistics">
                    <div class="key-statistic">
                        <p class="key-statistic__type">Total app visits</p>
                        <p class="key-statistic__value">{{ count($routes) }}</p>
                    </div>

                    <div class="key-statistic">
                        <p class="key-statistic__type">Most visited route group</p>
                        <p class="key-statistic__value">Population report</p>
                    </div>

                    <div class="key-statistic key-statistic--sub">
                        <p class="key-statistic__type">Total visits</p>
                        <p class="key-statistic__value">42.473</p>
                    </div>

                    <div class="key-statistic key-statistic--sub">
                        <p class="key-statistic__type">Most common user type</p>
                        <p class="key-statistic__value">Teacher (24%)</p>
                    </div>

                    <div class="key-statistic">
                        <p class="key-statistic__type">Most common user type</p>
                        <p class="key-statistic__value">Management</p>
                    </div>

                    <div class="key-statistic key-statistic--sub">
                        <p class="key-statistic__type">Total visits</p>
                        <p class="key-statistic__value">12.302</p>
                    </div>

                    <div class="key-statistic key-statistic--sub">
                        <p class="key-statistic__type">Most common user type</p>
                        <p class="key-statistic__value">Leave report (5.623 visits)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-module dashboard-module--half">
            <header class="dashboard-module__header">
                <h2 class="dashboard-module__heading"><a href="#" class="dashboard-module__link">Routes</a></h2>
            </header>

            <div class="dashboard-module__content dashboard-module__content--no-padding">
                <ul class="routes">
                    @foreach($routes as $route)
                        <li
                            class="route"
                            data-id="{{ $route->id }}"
                            data-timestamp="{{ $route->created_at }}"
                            data-url="{{ $route->url }}"
                            data-group="{{ $route->route_group != null ? $route->route_group : '(None)' }}"
                            data-user-age="{{ $route->user_age }}"
                            data-user-email="{{ $route->user_email }}"
                            data-user-type="{{ $route->user_type }}"
                        >
                            <p class="route__timestamp">{{ $route->created_at }}</p>
                            <p class="route__url">{{ $route->url }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="dashboard-module dashboard-module--half">
            <div class="dashboard-module__header">
                <h2 class="dashboard-module__heading">Route groups</h2>
            </div>

            <div class="dashboard-module__content">
                <x-chart.pie
                    chartName="routeGroups"
                ></x-chart.pie>
            </div>
        </div>

        <div class="dashboard-module dashboard-module--half">
            <div class="dashboard-module__header">
                <h2 class="dashboard-module__heading">User types</h2>
            </div>

            <div class="dashboard-module__content">
                <x-chart.pie
                    chartName="userTypes"
                ></x-chart.pie>
            </div>
        </div>

        <div class="dashboard-module dashboard-module--full no-max-height">
            <header class="dashboard-module__header">
                <h2 class="dashboard-module__heading">Route group visits by user types</h2>
            </header>

            <div class="dashboard-module__content">
                <x-chart.column-grouped
                    chartName="routeGroupsByUserTypes"
                ></x-chart.column-grouped>
            </div>
        </div>
    </div>

    <form class="mt-medium" method="POST" action="{{ route('sessions.destroy') }}">
        @csrf
        @method('DELETE')

        <button class="button button--solid" type="submit">Log out</button>
    </form>

    <div id="modalOverlay" class="modal-overlay"></div>
    <div id="routeModal" class="modal modal--route">
        <header class="modal__header">
            <h2 class="modal__heading" id="routeModalHeading"></h2>

            <div id="routeModalClose" class="modal__close">
                <div class="modal__close-line"></div>
                <div class="modal__close-line"></div>
            </div>
        </header>

        <div class="modal__content">
            <div class="modal__data">
                <p class="modal__data-heading">Date and time</p>
                <p class="modal__data-value" id="routeTimestamp"></p>
            </div>

            <div class="modal__data">
                <p class="modal__data-heading">Route URL</p>
                <p class="modal__data-value" id="routeUrl"></p>
            </div>

            <div class="modal__data">
                <p class="modal__data-heading">Route group</p>
                <p class="modal__data-value" id="routeGroup"></p>
            </div>

            <div class="modal__data">
                <p class="modal__data-heading">User e-mail</p>
                <p class="modal__data-value" id="routeUserEmail"></p>
            </div>

            <div class="modal__data">
                <p class="modal__data-heading">User age</p>
                <p class="modal__data-value" id="routeUserAge"></p>
            </div>

            <div class="modal__data">
                <p class="modal__data-heading">User type</p>
                <p class="modal__data-value" id="routeUserType"></p>
            </div>
        </div>
    </div>
</x-layout.dashboard>
