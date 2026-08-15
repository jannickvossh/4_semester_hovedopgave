<x-layout.dashboard title="Routes for UCL Data | Pertineo">
    <div class="flex-wrapper justify-between mt-medium mb-medium">
        <h1>All routes for UCL Data</h1>
    </div>

    <div class="dashboard">
        <div class="dashboard-module dashboard-module--full no-max-height">
            <div class="dashboard-module__content dashboard-module__content no-padding height-100">
                <table class="table">
                    <thead class="thead">
                        <tr class="tr">
                            <th class="th">Date & time</th>
                            <th class="th">Route URL</th>
                            <th class="th">Route group</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($routes as $route)
                            <tr
                                class="route tr"
                                data-id="{{ $route->id }}"
                                data-timestamp="{{ formattedTimestamp($route->created_at) }}"
                                data-url="{{ $route->url }}"
                                data-group="{{ $route->route_group != null ? $route->route_group : '(None)' }}"
                                data-user-age="{{ $route->user_age }}"
                                data-user-email="{{ $route->user_email }}"
                                data-user-type="{{ $route->user_type }}"
                            >
                                <td class="route__timestamp td">{{ formattedTimestamp($route->created_at) }}</td>
                                <td class="route__url td">{{ $route->url }}</td>
                                <td class="route__group td">{{ $route->route_group != null ? $route->route_group : '(None)' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
