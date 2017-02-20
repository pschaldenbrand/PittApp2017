


function makeHeader(path){
	var head = "";
	head = head + "<div id=\"header\">";
	head = head + "sup <button id=\"back\" style=\"height:10%\">";
	head = head + "hey</button></div>";
	header = "<div id=\"head\" style=\"height:10%\"></div>";
	$("body").prepend(header);
	$("#head").load(path);
	
	var h = $("body").height();
	//console.log((h/10)+"px");
	//$("#head").css("height",(h/10)+"px");
}
var backPath;
function setBackPage(path){
	backPath = path;
	console.log("in setback");
	$("#back").click(function(){
		console.log("going back"+backPath);
		window.location.href = backPath;
	});
}

function onHomePage(){
	$("#back").html("Logout");
	$("#back").click(function(){
		//add logout stuff to this button
		//also might be able to get away with just:
		localStorage.emailAdd = undefined;
		//and other variables cleared
	});
}