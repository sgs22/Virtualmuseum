//used to interact with each of the models in the gallery

var spinning = true;
var lighOn = true;

function spin() {
    spinning = !spinning;
    document.getElementById('model_RotationTimer').setAttribute('enabled', spinning.toString());
}

function wireframe() {
    var e = document.getElementById('model');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

function lighting() {
    lightOn = !lighOn;
    // this will need to be updated for lighting set in scene rather than headlight
    document.getElementById('model_lighting').setAttribute('headlight', lighOn.toString());
}

function cam1() {
    // will need to be updated for correct camera naming
    document.getElementById('model_Camera01').setAttribute('bind', 'true');
}

function cam2() {
    // will need to be updated for correct camera naming
    document.getElementById('model_Camera02').setAttribute('bind', 'true');
}