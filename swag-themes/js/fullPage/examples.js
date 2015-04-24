$(document).ready(function(){
	$("#demosMenu").change(function(){
	  window.location.href = $(this).find("option:selected").attr("id") + '.html';
	});
});

// fullPage setting
$(document).ready(function() {
    $('#fullpage').fullpage({
        //anchors: ['firstPage', 'secondPage', '3rdPage'],
        sectionsColor: ['#000', '#000', '#000'],
        //navigation: true,
        //navigationColor: '#999',
        //navigationPosition: 'right',
        //navigationTooltips: ['First page', 'Second page', 'Third and last page'],
        //responsive: 900,
        autoScrolling: false,
        resize: false,
        paddingTop: '50px',
        //fixedElements: '#header, #footer',
    });
});

// footer setting
$(function(){
    $(window).on("scroll touchmove", function(){
        $("#hidden-footer").stop();
        $("#hidden-footer").css('display', 'none').delay(500).fadeIn('slow');
    });
});

