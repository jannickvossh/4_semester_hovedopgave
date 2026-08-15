<x-layout.dashboard title="Route groups for UCL Data | Pertineo">
    <div class="flex-wrapper justify-between mt-medium mb-medium">
        <h1>All route groups for UCL Data</h1>
    </div>

    <div class="dashboard">
        <div class="dashboard-module dashboard-module--full no-max-height">
            <div class="dashboard-module__content dashboard-module__content no-padding height-auto">
                <ul class="route-groups routes">
                    @foreach($routeGroups as $routeGroup => $routes)
                        <li class="route-group">
                            <span class="route-group__name">{{ $routeGroup }}</span>
                            <span class="route-group__route-count">{{ count($routes) }} visits</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout.dashboard>
