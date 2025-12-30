jQuery(document).ready(function($) {	
	// Function invocation
	js_popup();
	
	// Link image
	link_image();
	
	// Fade on mouse over
	fade_over();
	
	// header position fixed
	$('#topHeader').affix({
		offset: {
			top: $('#topHeader').offset().top
		}
	});				
	
	// active menu
	var url = window.location;	
	$('.navbar-nav a[href="'+ url +'"]').parent().addClass('active');
	$('.navbar-nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
	// active dropdown menu
	$('.navbar-nav .dropdown a[href="'+ url +'"]').parents('li.dropdown').addClass('active');
	$('.navbar-nav .dropdown a').filter(function() {
		return this.href == url;
	}).parents('li.dropdown').addClass('active');		 
	
	// b-lazy image
    var bLazy = new Blazy({ 
        breakpoints: [{
	        width: 480, // max-width
			src  : 'data-src-small'
	    }, {
			width: 991, // max-width
			src  : 'data-src-medium'
		}],
		success: function(element) {
			setTimeout(function() {				
				var parent = element.parentNode;
				parent.className = parent.className.replace(/\bloading\b/,'');
			}, 200);
        }
    });	
	
	// header search
	$(".headSearch").click(function() {
		var search_box=$('.headDropsearch').outerWidth()-42;
		$(".headResult").css("width",search_box+"px");	
	})	
	// load function search
	data_search();
	// header dropdown search keep open	
	$(".headIconsearch").click(function(event) {		
        event.stopPropagation();
        $(".headDropsearch").slideToggle("fast");
		$("input.headSearch").focus();
		icon = $(this).find("i");
		icon.toggleClass("far fa-times far fa-search");		
    });	
    $(".headSearch").on("click", function (event) {
        event.stopPropagation();
    });		
	$(document).on("click", function () {
		icon = $(this).find("i.iSearch");
		icon.removeClass("far fa-times");
		icon.addClass("far fa-search");
		$(".headDropsearch").hide();
	});
	
	 // hits counter
	$(".hitsLink").mousedown(function(e) {		
		if(e.which == 1) {
			var id = $(this).attr('rel');	
			$.ajax({
				type: "POST",
				url: "/page-view",
				data: { "hits_id": id }
			});
		}
	});	

});

/**
 * SEARCH TITLE DROP BOX
 * ------------------------------------------------------------------------------
 */
// stop submit key enter 
function stopRKey(evt) { 
	var evt = (evt) ? evt : ((event) ? event : null); 
	var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
	if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 
document.onkeypress = stopRKey;
// search drop box
function data_search() {
	$(".headSearch").keyup(function(event) {	
		var search_val = $(this).val();
		var dataString = 'key_search='+search_val;
		
		if(search_val) {
			$.ajax({
				type	: "POST",
				url		: "/search/ajax_search",
				data	: dataString,
				cache	: false,
				success	: function(html) {					
					$(".headResult").html(html);
				}
			});
			
			if(event.keyCode == 13) {		
				// Enter key				
				key_search = search_val.split(' ').join('+');
				if(key_search != ""){
					key_search = "results="+key_search;
					window.location.href="/search?"+key_search;
				}				
			}
			
			$(document).on('click', '.submitSearch', function(e) {				
				key_search = search_val.split(' ').join('+');
				if(key_search != ""){
					key_search = "results="+key_search;
					window.location.href="/search?"+key_search;
				}
			});
		}	
		
		return false;    
	});
	
	$(document).on('click', '.show', function(e) {
		$name = $('span.name', this).html();
		var decoded = $("<div/>").html($name).text();
		$('.headSearch').val(decoded);		
	});	
	
	$(document).on('click', function(e) {
		var $clicked = $(e.target);
		if(! $clicked.hasClass("headSearch")) {
			$(".headResult").fadeOut();
		}
	});
}

/**
 * PAGE PRINT
 * ------------------------------------------------------------------------------
 */
function js_page_print(){
	window.print();
	return false;
}


/**
 * POP UP
 * ------------------------------------------------------------------------------
 */
function js_popup(){
	var js_para = null;
	$('a[class^="js_popup_"], area[class^="js_popup_"]').each(function(index){
		$(this).click(function(){
			var wo = null;
			// get window width & height
			js_para = $(this).attr('class').match(/[0-9]+/g);
			// get window.name
			window.name ? js_para[2] = window.name+'_' : js_para[2] = ('');
			wo = window.open(this.href, 'popup'+index,'width='+js_para[0]+',height='+js_para[1]+',scrollbars=no');
			
			var left = (screen.width/2)-(js_para[0]/2);
			var top = (screen.height/2)-(js_para[1]/2);
			wo.moveTo(left,top);
			wo.resizeTo(js_para[0],js_para[1]);
			return false;
		});
	});
}


/**
 * CLOSE
 * ------------------------------------------------------------------------------
 */
function js_window_close(){
	window.close();
	return false;
}


/**
 * LINK IMAGE
 * ------------------------------------------------------------------------------
 */
function link_image() {
	$('.linkimg').hover(function(){
		$(this).stop().animate({'opacity':0.7}, 500);
	}, function(){
		$(this).stop().animate({'opacity':1}, 500);
	});
}


/**
 * FADE OVER
 * ------------------------------------------------------------------------------
 */
function fade_over() {
	$('.fadeOver').hover(function(){
		$(this).stop().animate({'opacity':0}, 500);
	}, function(){
		$(this).stop().animate({'opacity':1}, 500);
	});
}