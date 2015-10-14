/*---------------------------------------------------------------------*/
;(function($){

/*================= Global Variable End =================*/	
var activeBtn = sectionName = '';
var qno = 1
var totalSpend = price = cnt = prgBG = questionNo = 0
/*================= On Document Load Start =================*/	
$(document).ready( function(){
	winHeight();
	$('.loaderDiv .loader').animate({ width: '100%' }, 1000);
	if( $("#questionDone").length){
		$(document).on({click: function () {
		  if ($(this).hasClass('checkPrd')) {
			   $(this).removeClass('checkPrd');
			   $(this).find('.checked').remove();
			   $('.continueBtn').removeClass('enable').addClass("disable");
		  } else {
		 	   $('.productBlock .checked').remove();
			   $('.productBlock').removeClass('checkPrd');
			   $(this).addClass('checkPrd');
			   $(this).append('<span class="checked">Checked</span>');
			   $('.continueBtn').removeClass('disable').addClass("enable");
		  }
		  return false;
	   }}, '.productBlock');
	}
	
	
	
	if( $("#rewardPreferred").length){
		$(document).on({click: function () {
		  $('.rewardPreferred .rewardsAStar .checked').remove();
		  $('.rewardPreferred .rewardsAStar').removeClass('checkPrd');
		  $(this).addClass('checkPrd');
		  $(this).append('<span class="checked">Checked</span>');
		  $('.continueBtn').removeAttr('disabled');
		  $(this).next().attr('checked', 'checked');
		  
		  return false;
	   }}, '.rewardsAStar');
	}
	
	if( $("#choicePage").length){
	   $('input').on('ifChecked', function(event){
		  $('.choiceBlock').removeClass('active');
		  if ($(this).val() == 'Choice A') {$('.choiceA').addClass('active');}
		  if ($(this).val() == 'Choice B') {$('.choiceB').addClass('active');}
	   });
	}
	
	$(document).on({click: function () {return false;}}, '.continueBtn.disable');
	
	
	if( $("#buyNowSection .continueBtn").length){
		$('input.icheck').iCheck('disable');		
	}
	
	if( $(".icheck").length){	
		$('input.icheck').iCheck({
			checkboxClass: 'icheckbox',
			radioClass: 'iradio',
			uncheckedClass: 'unChecked',
		});
	}
	if( $("#buyNowSection").length){
		if( $("#buyNowSection .continueBtn").length){}else {
		$('input.icheck').on('ifChecked', function(event){
		  $(this).parent().parent().addClass('activeDiv');
	   });
	   $('input.icheck').on('ifUnchecked', function(event){
		  $(this).parent().parent().removeClass('activeDiv');
	   });  
	}
	}
});
/*================= On Document Load and Resize Start =================*/
$(window).resize(function() {
 	
});
/*================= On Window Resize Start =================*/	
$(window).bind('resize orientationchange', function() {
	
});

$(window).load(function() {
	$('.loaderDiv').fadeOut();
	checkCookie();
});

function intervalTrigger() {
  return window.setInterval( function() {
	$('.introBtn').removeAttr('disabled');
	setCookie("activeBtn", 'activeBtn', 30);
	window.clearInterval(activeBtn);
  }, 15000 );
};
function winHeight() {
 	winHeight = $(window).outerHeight()
	prgHeight = winHeight-80;
	$('.slideBlock').css({'min-height':winHeight});
	$('.progressBar').css({'height':prgHeight});
	$('.progressStep').css({'height':prgHeight});
};
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function checkCookie() {
	var showMenu = getCookie("activeBtn");
    if (showMenu == "activeBtn") {
		$('.introBtn').removeAttr('disabled');
    } else {
		activeBtn = intervalTrigger();
	}

}
})(jQuery);

