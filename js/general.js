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
	if( $("#rewardsA").length){
		//quesionno,cnt,prdCount,sectionName
		if( $("#question1").length){qno = 1; prdCount = 1; sectionName = 'ra1'; prgBG = 8.33+'%';}
		if( $("#question2").length){qno = 2; prdCount = 3; sectionName = 'ra1'; prgBG = 16.66+'%';}
		if( $("#question3").length){qno = 3; prdCount = 2; sectionName = 'ra1'; prgBG = 24.99+'%';}
		if( $("#question4").length){qno = 4; prdCount = 1; sectionName = 'ra1'; prgBG = 33.33+'%';}
		if( $("#question5").length){qno = 5; prdCount = 1; sectionName = 'ra1'; prgBG = 41.65+'%';}
		if( $("#question6").length){qno = 6; prdCount = 2; sectionName = 'ra1'; prgBG = 49.48+'%';}
		if( $("#question7").length){qno = 7; prdCount = 2; sectionName = 'ra1'; prgBG = 58.31+'%';}
		if( $("#question8").length){qno = 8; prdCount = 2; sectionName = 'ra1'; prgBG = 66.64+'%';}
		if( $("#question9").length){qno = 9; prdCount = 1; sectionName = 'ra1'; prgBG = 74.97+'%';}
		if( $("#question10").length){qno = 10; prdCount = 1; sectionName = 'ra1'; prgBG = 83.3+'%';}
		if( $("#question11").length){qno = 11; prdCount = 2; sectionName = 'ra1'; prgBG = 91.63+'%';}
		if( $("#question12").length){qno = 12; prdCount = 2; sectionName = 'ra1'; prgBG = 100+'%';}
		qRequest = '#question'+qno+' .continueBtn';
		starR = '#question'+qno+' .star'+qno;
		quesBtn = $(qRequest);
		sName = '.' + sectionName + ' .fillBG';
		$(sName).css({'height':prgBG});
		$(document).on({click: function () {
		  ids = '#question' + qno + ' .totalSpend';
		  if ($(this).hasClass('checkPrd')) {
			   $(this).removeClass('checkPrd');
			   $(this).find('.checked').remove();
			   cnt--;
		  } else {
			   $(this).addClass('checkPrd');
			   $(this).append('<span class="checked">Checked</span>');
			   cnt++;
		  }
		  if (cnt == prdCount) {
			  quesBtn.removeClass('disable').addClass("enable");
			  $(starR).addClass('active');
			  $('.totalSpend').fadeIn()
			  qno++;
		  }else {
			  quesBtn.removeClass('enable').addClass("disable");
			  $(starR).removeClass('active');
			  $('.totalSpend').fadeOut()
		  }
		  return false;
	   }}, '.productBlock');
	   
	}
	if( $("#rewardsB").length){
		//quesionno,cnt,prdCount,sectionName
		if( $("#question1").length){qno = 1; prdCount = 1; sectionName = 'ra2'; prgBG = 8.33+'%';}
		if( $("#question2").length){qno = 2; prdCount = 3; sectionName = 'ra2'; prgBG = 16.66+'%';}
		if( $("#question3").length){qno = 3; prdCount = 2; sectionName = 'ra2'; prgBG = 24.99+'%';}
		if( $("#question4").length){qno = 4; prdCount = 1; sectionName = 'ra2'; prgBG = 33.33+'%';}
		if( $("#question5").length){qno = 5; prdCount = 1; sectionName = 'ra2'; prgBG = 41.65+'%';}
		if( $("#question6").length){qno = 6; prdCount = 2; sectionName = 'ra2'; prgBG = 49.48+'%';}
		if( $("#question7").length){qno = 7; prdCount = 2; sectionName = 'ra2'; prgBG = 58.31+'%';}
		if( $("#question8").length){qno = 8; prdCount = 2; sectionName = 'ra2'; prgBG = 66.64+'%';}
		if( $("#question9").length){qno = 9; prdCount = 1; sectionName = 'ra2'; prgBG = 74.97+'%';}
		if( $("#question10").length){qno = 10; prdCount = 1; sectionName = 'ra2'; prgBG = 83.3+'%';}
		if( $("#question11").length){qno = 11; prdCount = 2; sectionName = 'ra2'; prgBG = 91.63+'%';}
		if( $("#question12").length){qno = 12; prdCount = 2; sectionName = 'ra2'; prgBG = 100+'%';}
		qRequest = '#question'+qno+' .continueBtn';
		starR = '#question'+qno+' .star'+qno;
		quesBtn = $(qRequest);
		sName = '.' + sectionName + ' .fillBG';
		$(sName).css({'height':prgBG});
		$(document).on({click: function () {
		  ids = '#question' + qno + ' .totalSpend';
		  if ($(this).hasClass('checkPrd')) {
			   $(this).removeClass('checkPrd');
			   $(this).find('.checked').remove();
			   cnt--;
		  } else {
			   $(this).addClass('checkPrd');
			   $(this).append('<span class="checked">Checked</span>');
			   cnt++;
		  }
		  if (cnt == prdCount) {
			  quesBtn.removeClass('disable').addClass("enable");
			  $(starR).addClass('active');
			  $('.totalSpend').fadeIn()
			  qno++;
		  }else {
			  quesBtn.removeClass('enable').addClass("disable");
			  $(starR).removeClass('active');
			  $('.totalSpend').fadeOut()
		  }
		  return false;
	   }}, '.productBlock');
	   
	}
	if( $("#questionADone").length){
		$(document).on({click: function () {
		
		  if ($(this).hasClass('checkPrd')) {
			   $(this).removeClass('checkPrd');
			   $(this).find('.checked').remove();
			   $('#questionADone .continueBtn').removeClass('enable').addClass("disable");
		  } else {
		 	   $('#questionADone .productBlock .checked').remove();
			   $('#questionADone .productBlock').removeClass('checkPrd');
			   $(this).addClass('checkPrd');
			   $(this).append('<span class="checked">Checked</span>');
			   
			   $('#questionADone .continueBtn').removeClass('disable').addClass("enable");
			   
		  }
		  return false;
	   }}, '.productBlock');
	}
	if( $("#questionBDone").length){
		$(document).on({click: function () {
		
		  if ($(this).hasClass('checkPrd')) {
			   $(this).removeClass('checkPrd');
			   $(this).find('.checked').remove();
			   $('#questionBDone .continueBtn').removeClass('enable').addClass("disable");
		  } else {
		 	   $('#questionBDone .productBlock .checked').remove();
			   $('#questionBDone .productBlock').removeClass('checkPrd');
			   $(this).addClass('checkPrd');
			   $(this).append('<span class="checked">Checked</span>');
			   
			   $('#questionBDone .continueBtn').removeClass('disable').addClass("enable");
			   
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
	
	if( $(".icheck").length){	
		$('input.icheck').iCheck({
			checkboxClass: 'icheckbox',
			radioClass: 'iradio',
			uncheckedClass: 'unChecked',
		});
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
	psHeight = prgHeight/5;
	$('.slideBlock').css({'min-height':winHeight});
	$('.progressBar').css({'height':prgHeight});
	$('.progressStep').css({'height':psHeight});
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

