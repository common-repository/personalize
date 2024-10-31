window.personalize = window.personalize || [];
function runChanges( vars ) {
	var defaults = {
		'selector': null,  
		'attribute': null,
		'param': null
	}
	vars = Object.assign( defaults, vars );
	var elements = document.querySelectorAll( vars.selector );
	if( vars.param != null && elements.length > 0 ) {
		elements.forEach(function(element) {
			if( !vars.attribute ) {
				element.innerHTML = vars.param;
			} else {
				element.setAttribute( vars.attribute, vars.param );
			}
		});
	}
}
var eventify = function(arr) {
    arr.push = function(e) {
    	runChanges(e);
        Array.prototype.push.call(arr, e);
        return arr;
    };
};
function initiate() {
	window.personalize.forEach(function(e) {
		runChanges(e);
	});
	eventify(window.personalize);
}
document.readyState == 'complete' && initiate() || window.addEventListener("load", initiate)