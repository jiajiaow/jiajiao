/*买入卖出tab2*/
window.onload = function () {
	var colorArr = {
		0:"#f00",
		1:"#0f0",

	};
	var bgColorArr = {
		0:"#ea4040",
		1:"#86c387",
	}
	var oL = document.getElementById("oLi");
	var oLi = oL.getElementsByTagName("li");
	var oUl = document.getElementById("oUl").getElementsByTagName("div");
	for ( var i=0 ; i<oLi.length ; i++ ){
		oLi[i].index = i;
		oLi[i].onclick = function () {
			for ( var j = 0 ; j < oLi.length ; j++ ){
				oLi[j].className = "";
				oLi[j].style.border = "none";
			}
			this.className = "current";
			this.style.borderBottom = "none";
			for ( var j=0 ; j < oUl.length ; j++ ){
				oUl[j].style.display = "none";
				oUl[this.index].style.display = "block";
		/*		oUl[j].style.backgroundColor = bgColorArr[this.index];*/
			}
		};
	}
};
/*tab1*/
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"hover":"";
		con.style.display=i==cursel?"block":"none";
	}
}

