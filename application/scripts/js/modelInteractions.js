//used to interact with each of the models in the gallery

var lightOn = false;

function spin() {
    document.getElementById('model__TouchSensor-SENSOR').setAttribute('bind', 'true');
}

function wireframe() {
    var e = document.getElementById('model');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

function polygon() {
    var e = document.getElementById('model');
    e.runtime.togglePoints(false);
}

function resetView() {
    var e = document.getElementById('model');
    e.runtime.resetView();
}

function uprightView() {
    var e = document.getElementById('model');
    e.runtime.uprightView();
}

function nextView() {
    var e = document.getElementById('model');
    e.runtime.nextView();
}

function prevView() {
    var e = document.getElementById('model');
    e.runtime.prevView();
}

function lighting() {
    lightOn = !lightOn;
    // this will need to be updated for lighting set in scene rather than headlight
    document.getElementById('model__lighting').setAttribute('headlight', lightOn.toString());
}

function mainCamera() {
    // will need to be updated for correct camera naming
    document.getElementById('model__MainCamera').setAttribute('bind', 'true');
}

function panAnimate() {
    // will need to be updated for correct camera naming
    document.getElementById('model__panAnimate').setAttribute('bind', 'true');
}

function panCamera() {
    // will need to be updated for correct camera naming
    document.getElementById('model__PanCamera').setAttribute('bind', 'true');
}

function topAnimation() {
    // will need to be updated for correct camera naming
    document.getElementById('model__TopViewCamera').setAttribute('bind', 'true');
}

function playVid() {
    document.getElementById('comVideo').play();
}
