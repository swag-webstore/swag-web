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

// close nav
$(document).on('click touchend', function(event) {
    if (!$.contains($(".navbar-collapse")[0], event.target)) {
        $(".navbar-collapse.in").collapse('hide');
    }
});
