var counter = 0;
function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('body').style.background = 'linear-gradient(rgb(158, 96, 96), #FF0000';
            document.getElementById('body').style.backgroundRepeat = 'no-repeat';
			document.getElementById('header').style.backgroundColor = '#FF0000';
			document.getElementById('footer').style.backgroundColor = '#FF0000';
			break;
		case 2:
            document.getElementById('body').style.background = 'linear-gradient(rgb(84, 84, 84), black)';
            document.getElementById('body').style.backgroundRepeat = 'no-repeat';
			document.getElementById('header').style.backgroundColor = 'black';
			document.getElementById('footer').style.backgroundColor = 'black';
            counter = 0;
			break;
	}
}