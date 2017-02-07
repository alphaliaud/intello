(function (){

	var scrollY= function (){
		var supportPageOffset = window.pageXOffset !== undefined;
		var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");

		return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;

	}


	var element= document.querySelector(".logoscroll");

	//var top = element.getBoundingClientRect().top + scrollY();
	//Position du bas de mon element - 30
	var bottom = element.getBoundingClientRect().bottom + scrollY() - 280;
	var a = document.querySelector(".hrefimg");

	var img = document.createElement("img");


	var onScroll = function () {
		//ajoute a la balise le style opacity qui est soustrait par la valeur scroll
		document.querySelector('.menu').style.opacity = 1 - (scrollY() / bottom);

		if(scrollY() >= 415){
            img.setAttribute("style", "height:100px; width: auto;left:140px; position: relative;");
            img.setAttribute("class","img");
            img.setAttribute("src","image/lintello.svg");
            a.appendChild(img);
		}
		else if (scrollY() < 415){
			if(document.querySelector(".img")){
            a.removeChild(img);
            }
		}

	}

	window.addEventListener('scroll', onScroll);
})()
