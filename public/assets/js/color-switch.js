$(document).ready(function($) {

	var cc = 1 + Math.floor(Math.random() * 12);

	$(".color-switch ul li a.change").click(function(){
		$(".color-switch ul li a").removeClass("active");
		$(this).addClass("active");
		return false;
	});
	
	$("#brown").click(function(){
		$("#color" ).attr("href", "css/user/theme-brown.css?" + cc);
		// $(".logo img" ).attr("src", "assets/img/brown/lgo.png");
		setCookie('color', 'brown', 365);
		return false;
	});
	
	$("#red").click(function(){
		$("#color" ).attr("href", "css/user/theme-red.css?" + cc);
		// $(".logo img" ).attr("src", "assets/img/red/lgo.png");
		setCookie('color', 'red', 365);
		return false;
	});
	
	$("#yellow").click(function(){
		$("#color" ).attr("href", "css/user/theme-yellow.css?" + cc);
		// $(".logo img" ).attr("src", "assets/img/yellow/lgo.png");
		setCookie('color', 'yellow', 365);
		return false;
	});
	
	$("#blue").click(function(){
		$("#color" ).attr("href", "css/user/theme-blue.css?" + cc);
		// $(".logo img" ).attr("src", "assets/img/blue/lgo.png");
		setCookie('color', 'blue', 365);
		return false;
	});
	
	$("#green").click(function(){
		$("#color" ).attr("href", "#green");
		// $(".logo img" ).attr("src", "assets/img/green/lgo.png");
		setCookie('color', 'green', 365);
		return false;
	});
	
	$("#gray").click(function(){
		$("#color" ).attr("href", "css/user/theme-gray.css?" + cc);
		// $(".logo img" ).attr("src", "assets/img/gray/lgo.png");
		setCookie('color', 'gray', 365);
		return false;
	});
	
	$("#modernstyle").click(function(){
		$("#color" ).attr("href", "css/user/theme-modernstyle.css?" + cc);
		// $(".logo img" ).attr("src", "assets/img/modernstyle/lgo.png");
		setCookie('color', 'modernstyle', 365);
		return false;
	});
	
	$(".color-switch > i").click(function(){
	  	$(".color-switch ul").slideToggle();
	});
	
});

function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return "";
}

$(function() {
	var cc = 1 + Math.floor(Math.random() * 121);
	var color=getCookie("color");
	if ((color != "") && (color != "green")) {
		document.getElementById(color).className += " active";
			$("#color").attr("href", "css/user/theme-"+color+".css?" + cc);
			// $(".logo img" ).attr("src", "assets/img/"+color+"/lgo.png");
	} else {
		document.getElementById('green').className += " active";
			$("#color").attr("href", "#green");
			// $(".logo img" ).attr("src", "assets/img/green/lgo.png");
	}
});
