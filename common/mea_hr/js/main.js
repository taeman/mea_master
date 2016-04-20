// JavaScript Document
function pageLink(controller,fn,param){
	url = '?controller='+controller+'&fn='+fn+'&'+param;
	window.location = url;
}