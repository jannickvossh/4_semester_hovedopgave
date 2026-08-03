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
                        <p class="key-statistic__value">375.399</p>
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
                    <li class="route" data-route-id="654304">
                        <p class="route__timestamp">30.10.26 08:09</p>
                        <p class="route__url">/lorem-ipsum/dolor/sit-amet/part</p>
                    </li>
                    <li class="route" data-route-id="654303">
                        <p class="route__timestamp">30.10.26 08:05</p>
                        <p class="route__url">/egestas/porta-ridiculus</p>
                    </li>
                    <li class="route" data-route-id="654302">
                        <p class="route__timestamp">30.10.26 08:04</p>
                        <p class="route__url">/lorem-ipsum/dolor/sit-amet</p>
                    </li>
                    <li class="route" data-route-id="654301">
                        <p class="route__timestamp">30.10.26 08:01</p>
                        <p class="route__url">/bibendum/magna/tellus</p>
                    </li>
                    <li class="route" data-route-id="654300">
                        <p class="route__timestamp">30.10.26 07:59</p>
                        <p class="route__url">/bibendum/magna/tellus</p>
                    </li>
                    <li class="route" data-route-id="654299">
                        <p class="route__timestamp">30.10.26 07:59</p>
                        <p class="route__url">/egestas/porta-ridiculus</p>
                    </li>
                    <li class="route" data-route-id="654298">
                        <p class="route__timestamp">30.10.26 07:58</p>
                        <p class="route__url">/egestas</p>
                    </li>
                    <li class="route" data-route-id="654297">
                        <p class="route__timestamp">30.10.26 07:55</p>
                        <p class="route__url">/bibendum/magna/tellus</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard-module dashboard-module--full no-max-height">
            <header class="dashboard-module__header">
                <h2 class="dashboard-module__heading">Route group visits by user types</h2>
            </header>

            <div class="dashboard-module__content">
                <x-chart.column-grouped
                    chartName="test"

                ></x-chart.column-grouped>
            </div>
        </div>
    </div>

    <form class="mt-medium" method="POST" action="{{ route('sessions.destroy') }}">
        @csrf
        @method('DELETE')

        <button class="button button--solid" type="submit">Log out</button>
    </form>

    <div class="modal-overlay"></div>
    <div class="route-modal">
        <header class="route-modal__header">
            <h2 class="route-modal__heading">Route heading</h2>
        </header>

        <div class="route-modal__content">
            <div class="route-modal__data">
                <p class="route-modal__data-heading">Date and time</p>
                <p class="route-modal__data-value">30.10.26 08:09</p>
            </div>

            <div class="route-modal__data">
                <p class="route-modal__data-heading">Route URL</p>
                <p class="route-modal__data-value">/lorem-ipsum/dolor/sit-amet/part</p>
            </div>
        </div>
    </div>
</x-layout.dashboard>
