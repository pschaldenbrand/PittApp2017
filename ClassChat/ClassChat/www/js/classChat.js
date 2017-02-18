


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
function setBackPage(path){
	$("#back").click(function(){
		window.location.href = path;
	});
}