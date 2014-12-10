function $(i) {
	return document.getElementById(i);
}
function removeE(e) {
	e.parentNode.removeChild(e);
}
function onLoadFunction() {
	setTimeout(function(){removeE($("alerts"))},3000);
}