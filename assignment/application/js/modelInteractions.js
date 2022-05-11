
var spinning = false;
var lightOn = true;
var Omni = true;

function spin() {
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model1__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model2__RotationTimer').setAttribute('enabled', spinning.toString());
}

function headlight() {
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	document.getElementById('model1__headlight').setAttribute('headlight', lightOn.toString());
	document.getElementById('model2__headlight').setAttribute('headlight', lightOn.toString());
}
function Omnilight() {
	Omni = !Omni;
	document.getElementById('model__Omni004').setAttribute('on', Omni.toString());
	document.getElementById('model1__Omni004').setAttribute('on', Omni.toString());
	document.getElementById('model2__Omni004').setAttribute('on', Omni.toString());
	document.getElementById('model__Omni005').setAttribute('on', Omni.toString());
	document.getElementById('model1__Omni005').setAttribute('on', Omni.toString());
	document.getElementById('model2__Omni005').setAttribute('on', Omni.toString());
	document.getElementById('model__Omni006').setAttribute('on', Omni.toString());
	document.getElementById('model1__Omni006').setAttribute('on', Omni.toString());
	document.getElementById('model2__Omni006').setAttribute('on', Omni.toString());
}
function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
	var e1 = document.getElementById('wire1');
	e1.runtime.togglePoints(true);
	e1.runtime.togglePoints(true);
	var e2 = document.getElementById('wire2');
	e2.runtime.togglePoints(true);
	e2.runtime.togglePoints(true);
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
	document.getElementById('model1__CameraFront').setAttribute('bind', 'true');
	document.getElementById('model2__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
	document.getElementById('model1__CameraBack').setAttribute('bind', 'true');
	document.getElementById('model2__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('model1__CameraLeft').setAttribute('bind', 'true');
	document.getElementById('model2__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
	document.getElementById('model1__CameraRight').setAttribute('bind', 'true');
	document.getElementById('model2__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
	document.getElementById('model1__CameraTop').setAttribute('bind', 'true');
	document.getElementById('model2__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
	document.getElementById('model1__CameraBottom').setAttribute('bind', 'true');
	document.getElementById('model2__CameraBottom').setAttribute('bind', 'true');
}

