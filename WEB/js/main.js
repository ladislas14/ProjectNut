jQuery(function($){
	var projects = $('#projects');

    projects.find('.project').each(function(){
    	var elem = $(this);
    	var width = elem.find('img').width();
    	var height = elem.find('img').height();
    	var fontSize = Math.round(width * (0.7 / 10));
    	elem.css({width: width, height: height});
    	elem.find('.thumb').css({width: width, height: height, fontSize: fontSize, lineHeight: height + 'px'});
    });

	/*projects.masonry({
		isAnimated: true,
		itemSelector:'.project'
	});*/

})