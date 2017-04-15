/*广告轮播*/
var imgs=[
<<<<<<< HEAD
	{"i":0,"img":"/delijiajiao/picture/banner.png"},
	{"i":1,"img":"/delijiajiao/picture/br1.png"},
	{"i":2,"img":"/delijiajiao/picture/br2.png"},
=======
	{"i":0,"img":"picture/banner.png"},
	{"i":1,"img":"picture/br1.png"},
	{"i":2,"img":"picture/br2.png"},
>>>>>>> 9fd2507a84c652d4c1c7cdd7991b043d8f968249
];
var adv={
	liwidth:0,
	$ullist:null,
	INTERVAL:1500,
	WAIT:2000,
	timer:null,
	init:function(){
		
		this.liwidth=parseFloat($(".banner-main").css("width"));
		this.$ullist=$(".banner-list");
		this.updateView();
		$(".banner-index").on("mouseover","li",(e)=>{
			var target=$(".banner-index>li").index(e.target);
			var old=imgs[0].i;
			this.move(target-old);
		
		});
		this.autoMove();
	},
	autoMove:function(){
		this.timer=setTimeout(this.move.bind(this,1),this.WAIT);
	},
	move:function(n){
		clearTimeout(this.timer);
		if(n<0){
			n*=-1;
			imgs=imgs.splice(-n,n).concat(imgs);
			this.updateView();
			this.$ullist.css("left",parseFloat(this.$ullist.css("left"))-n*this.liwidth);
			this.$ullist.stop(true);
			this.$ullist.animate({left:0},this.INTERVAL,()=>this.autoMove());

		}else{
			this.$ullist.stop(true);
			this.$ullist.animate(
				{left:-n*this.liwidth},
				this.INTERVAL,this.moveCallback.bind(this,n)
			);
		}
	},
	moveCallback:function(n){
		imgs=imgs.concat(imgs.splice(0,n));
		this.updateView();
		this.$ullist.css("left",0);
		this.autoMove();
	},
	updateView:function(){
		
		for(var i=0,lis="",idex="";i<imgs.length;i++){
			lis+=`<li><img src="${imgs[i].img}"></li>`;
			idex+="<li></li>";
		}
		this.$ullist.html(lis)
					.css("width",imgs.length*this.liwidth);
		$(".banner-index").html(idex)
						  .children(`li:eq(${imgs[0].i})`).addClass("hover");
		
	}
	
};
adv.init();//调用函数
$('#shou').click(function(){
   $(this).css('display','none');
    $('#gen').css('display','block');
    $('.x').css('display','none');
<<<<<<< HEAD

=======
    
>>>>>>> 9fd2507a84c652d4c1c7cdd7991b043d8f968249
});
$('#gen').click(function(){
    $(this).css('display','none');
     $('#shou').css('display','block')
    $('.x').css('display','block');
})
