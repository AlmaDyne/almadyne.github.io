window.onload =  function() {
	document.body.classList.add('PreloadHiding');
	window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('PreloadHiding');
		document.body.classList.add('ready');
    }, 500);
};
