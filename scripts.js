var hwSlideSpeed = 700;
var hwTimeOut = 3000;
var hwNeedLinks = true;
 
$(document).ready(function(e) {
    $('.slide').css(
        {"position" : "absolute",
         "top":'0', "left": '0'}).hide().eq(0).show();
    var slideNum = 0;
    var slideTime;
    slideCount = $("#slider .slide").size();
    var animSlide = function(arrow){
        clearTimeout(slideTime);
        $('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
        if(arrow == "next"){
            if(slideNum == (slideCount-1)){slideNum=0;}
            else{slideNum++}
            }
        else if(arrow == "prew")
        {
            if(slideNum == 0){slideNum=slideCount-1;}
            else{slideNum-=1}
        }
        else{
            slideNum = arrow;
            }
        $('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
        $(".control-slide.active").removeClass("active");
        $('.control-slide').eq(slideNum).addClass('active');
        }
if(hwNeedLinks){
var $linkArrow = $('<a id="prewbutton" href="#"></a><a id="nextbutton" href="#"></a>')
    .prependTo('#slider');      
    $('#nextbutton').click(function(){
        animSlide("next");
 
        })
    $('#prewbutton').click(function(){
        animSlide("prew");
        })
}
    var $adderSpan = '';
    $('.slide').each(function(index) {
            $adderSpan += '<span class = "control-slide">' + index + '</span>';
        });
    $('<div class ="sli-links">' + $adderSpan +'</div>').appendTo('#slider-wrap');
    $(".control-slide:first").addClass("active");
     
    $('.control-slide').click(function(){
    var goToNum = parseFloat($(this).text());
    animSlide(goToNum);
    });
    var pause = false;
    var rotator = function(){
    if(!pause){slideTime = setTimeout(function(){animSlide('next')}, hwTimeOut);}
            }
    $('#slider-wrap').hover(    
        function(){clearTimeout(slideTime); pause = true;},
        function(){pause = false; rotator();
        });
    rotator();
});

$(function () {
	//script for popups
	$('a.show_popup').click(function () {
		$('div.'+$(this).attr("rel")).fadeIn(500);
		$("body").append("<div id='overlay'></div>");
		$('#overlay').show().css({'filter' : 'alpha(opacity=80)'});
		return false;				
	});	
	$('a.close').click(function () {
		$(this).parent().fadeOut(100);
		$('#overlay').remove('#overlay');
		return false;
	});
	
	//script for tabs
	/*$("div.selectTabs").each(function () {
		var tmp = $(this);
		$(tmp).find(".lineTabs li").each(function (i) {
			$(tmp).find(".lineTabs li:eq("+i+") a").click(function(){
				var tab_id=i+1;
				$(tmp).find(".lineTabs li").removeClass("active");
				$(this).parent().addClass("active");
				$(tmp).find(".tab_content div").stop(false,false).hide();
				$(tmp).find(".tab"+tab_id).stop(false,false).fadeIn(300);
				return false;
			});
		});
	});*/
});