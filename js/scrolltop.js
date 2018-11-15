window.onload = function() {
	var fab = document.getElementById('scrolltop');
	var clientHeight = document.documentElement.clientHeight;
	var timer = null;
	var isTop = true;
	window.onscroll = function () {
		var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		if ( scrollTop >= clientHeight) {
			fab.classList.remove('mdui-fab-hide');
		} else {
			fab.classList.add('mdui-fab-hide');
		}
		if (!isTop) {
			clearInterval(timer);
		}
		isTop = false;
	}
}