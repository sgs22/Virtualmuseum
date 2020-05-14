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
    document.getElementById('model__Omni001').setAttribute('headlight', lightOn.toString());
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

//over-rights pointlights in the scene and uses built in headlight
function headlight() {
    if(document.getElementById('model__NavInfo').getAttribute('headlight')!= 'true')
        document.getElementById('model__NavInfo').setAttribute('headlight', 'true');
    else
        document.getElementById('model__NavInfo').setAttribute('headlight', 'true');
}

//uses pointlights already set in the scene
function pointlight() {
    if(document.getElementById('model__NavInfo').getAttribute('headlight')!= 'false')
    document.getElementById('model__NavInfo').setAttribute('headlight', 'false');
else
    document.getElementById('model__NavInfo').setAttribute('headlight', 'false');
}

function iMacColor() {
    if((document.getElementById('model__speakerLMaterial').getAttribute('diffuseColor')!= '0.1098 0.349 0.6941') && 
        (document.getElementById('model__speakerRMaterial').getAttribute('diffuseColor')!= '0.1098 0.349 0.6941') && 
        (document.getElementById('model__bodyMaterial').getAttribute('diffuseColor')!= '0.1098 0.349 0.6941') &&
        (document.getElementById('model__standMaterial').getAttribute('diffuseColor')!= '0.1098 0.349 0.6941')) {
            document.getElementById('model__speakerLMaterial').setAttribute('diffuseColor', '0.1098 0.349 0.6941');
            document.getElementById('model__speakerRMaterial').setAttribute('diffuseColor', '0.1098 0.349 0.6941');
            document.getElementById('model__bodyMaterial').setAttribute('diffuseColor', '0.1098 0.349 0.6941');
            document.getElementById('model__standMaterial').setAttribute('diffuseColor', '0.1098 0.349 0.6941');
        }
    else
    {
        document.getElementById('model__speakerLMaterial').setAttribute('diffuseColor', '0.2548 0.001 0.001'); //change colour to orange
        document.getElementById('model__speakerRMaterial').setAttribute('diffuseColor', '0.2548 0.001 0.001'); //change colour to orange
        document.getElementById('model__bodyMaterial').setAttribute('diffuseColor', '0.2548 0.001 0.001'); //change colour to orange
        document.getElementById('model__standMaterial').setAttribute('diffuseColor', '0.2548 0.001 0.001'); //change colour to orange
    }
}

