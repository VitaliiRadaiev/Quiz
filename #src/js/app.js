

var isMobile = { Android: function () { return navigator.userAgent.match(/Android/i); }, BlackBerry: function () { return navigator.userAgent.match(/BlackBerry/i); }, iOS: function () { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, Opera: function () { return navigator.userAgent.match(/Opera Mini/i); }, Windows: function () { return navigator.userAgent.match(/IEMobile/i); }, any: function () { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };


$(document).ready(function () {
	document.body.classList.add('is-load');

	// === Проверка, поддержка браузером формата webp ==================================================================

	function testWebP(callback) {

		var webP = new Image();
		webP.onload = webP.onerror = function () {
			callback(webP.height == 2);
		};
		webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
	}

	testWebP(function (support) {

		if (support == true) {
			document.querySelector('body').classList.add('webp');
		} else {
			document.querySelector('body').classList.add('no-webp');
		}
	});


			// ==== ADD PADDING-TOP ================================
			// {
			// 	let wrapper = document.querySelector('.wrapper');
			// 	if (wrapper) {
			// 		let header = document.querySelector('.header');
			// 		if(header) {
			// 			let headerHeight = header.clientHeight;
			// 			wrapper.style.paddingTop = headerHeight + 'px';
			// 		}
					
			// 	}
			// }
			// ==== AND ADD PADDING-TOP ================================

	@@include('_function.js');
	@@include('files/dynamic_adapt.js');
	@@include('forms.js');
	@@include('../common/burger/burger.js');
	//@@includ e('../common/popup/popup.js');
	
});

//@@include('plagins/lazy-load.js');
