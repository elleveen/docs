let uri = window.location.href;
let preg_subdivisions = /subdivisions$/;
let preg_premises = /premises$/;

if(uri.search(preg_subdivisions) !== -1) {
    let buttonPlaces = document.querySelector('#button-places');
    let places = document.querySelector('#places');
    buttonPlaces.addEventListener('click', function () {
        places.classList.remove('hidden');
    });
} else if(uri.search(preg_premises) !== -1) {
    let squareButton = document.querySelector('#button-square');
    let square = document.querySelector('#square');
    squareButton.addEventListener('click', function () {
        square.classList.remove('hidden');
    });
}