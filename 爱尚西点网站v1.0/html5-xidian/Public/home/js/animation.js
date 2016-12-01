window.onload = function(){
	var animatorfrench = document.getElementById('animatorfrench');
    animatorfrench.addEventListener('mouseover', endHandlerFrench);
    function endHandlerFrench() {
        animatorfrench.removeEventListener('animationed', endHandlerFrench);
        animatorfrench.className = '';
        setTimeout(function () {
            animatorfrench.className = 'animationfrench';
        }, 0);
    }

    var animatoritaly = document.getElementById('animatoritaly');
    animatoritaly.addEventListener('mouseover', endHandlerItaly);
    function endHandlerItaly() {
        animatoritaly.removeEventListener('animationed', endHandlerItaly);
        animatoritaly.className = '';
        setTimeout(function () {
            animatoritaly.className = 'animationitaly';
        }, 0);
    }

    var animatorrussion = document.getElementById('animatorrussion');
    animatorrussion.addEventListener('mouseover', endHandlerRussion);
    function endHandlerRussion() {
        animatorrussion.removeEventListener('animationed', endHandlerRussion);
        animatorrussion.className = '';
        setTimeout(function () {
            animatorrussion.className = 'animationrussion';
        }, 0);
    }

    var animatoruk = document.getElementById('animatoruk');
    animatoruk.addEventListener('mouseover', endHandlerUK);
    function endHandlerUK() {
        animatoruk.removeEventListener('animationed', endHandlerUK);
        animatoruk.className = '';
        setTimeout(function () {
            animatoruk.className = 'animationuk';
        }, 0);
    }
}