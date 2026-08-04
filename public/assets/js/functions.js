const modalOverlay = document.getElementById('modalOverlay');
const routeModal = document.getElementById('routeModal');
const routeModalClose = document.getElementById('routeModalClose');
const routes = document.querySelectorAll('.route');

function openModal(modal) {
    modalOverlay.classList.add('is-showing');
    modal.classList.add('is-showing');
}

function populateRouteModal(route) {
    document.getElementById('routeTimestamp').innerHTML     = route.dataset.timestamp;
    document.getElementById('routeUrl').innerHTML           = route.dataset.url;
    document.getElementById('routeGroup').innerHTML         = route.dataset.group;
    document.getElementById('routeUserEmail').innerHTML     = route.dataset.userEmail;
    document.getElementById('routeUserAge').innerHTML       = route.dataset.userAge;
    document.getElementById('routeUserType').innerHTML      = route.dataset.userType;
    document.getElementById('routeModalHeading').innerHTML  = route.dataset.url;
}

function closeModal(modal) {
    modalOverlay.classList.remove('is-showing');
    modal.classList.remove('is-showing');
}

routes.forEach(route => {
    route.addEventListener('click', () => {
        openModal(routeModal);
        populateRouteModal(route);
    });
});

routeModalClose.addEventListener('click', () => { closeModal(routeModal) });
