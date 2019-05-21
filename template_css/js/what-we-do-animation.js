jQuery(function($){
    var whatWeDo = $('#what-we-do');
    
    // preload images
    whatWeDo.find('.hover-box').each(function(i, element){
        var bg = $(element).css('background-image');
        var url = '';
        if (bg.indexOf('url("') === -1) {
            url = bg.replace('url(','').replace(')','');
        } else {
            url = bg.replace('url("','').replace('")','');
        }
        (new Image()).src = url;
    });

    var drupal = whatWeDo.find('.drupal');
    var mobile = whatWeDo.find('.mobile');
    var wordpress = whatWeDo.find('.wordpress');
    var responsive = whatWeDo.find('.responsive');
    var ecommerce = whatWeDo.find('.ecommerce');
     
    function calculateAnimation(speed, limit, treshhold) {
        var treshhold = typeof treshhold !== "undefined"?treshhold:0;
        var multiplicator = typeof speed !== "undefined"?speed:1;
        var limit = typeof limit !== "undefined"?limit:-50;
        var result = Math.round((1 - (($(window).scrollTop() - treshhold)*multiplicator) / $(document).height())*100);
        result = result<limit?limit:result;
        return result;
    }

    function parallaxScroll(){
        var h1 = whatWeDo.find('h1');
        var drupalTop = parseInt(drupal.css('top'));
        var mobileTop = parseInt(mobile.css('top'));
        var wordpressTop = parseInt(wordpress.css('top'));
        var responsiveTop = parseInt(responsive.css('top'));
        var ecommerceTop = parseInt(ecommerce.css('top'));

        drupal.css('top', calculateAnimation(8.5, -50, 800) + '%');
        mobile.css('top', calculateAnimation(5, -50, 900) + '%');
        wordpress.css('top', calculateAnimation(4.5, -50, 900) + '%');
        responsive.css('top', calculateAnimation(11, -100, 900) + '%');
        ecommerce.css('top', calculateAnimation(4.5, -50, 800) + '%');
    }

    parallaxScroll();
    $(window).bind('scroll', parallaxScroll);

    var elementList = [drupal, mobile, wordpress, ecommerce, responsive];

    function getTopRightElements(element){
        var elements = [];
        $.each(elementList, function(i, el){
            if (el.offset().left > element.offset().left
                && el.offset().top < element.offset().top) {
                elements.push(el.find('img'));
            }
        });
        return elements;
    }

    function getTopLeftElements(element){
        var elements = [];
        $.each(elementList, function(i, el){
            if (el.offset().left < element.offset().left
                && el.offset().top < element.offset().top) {
                elements.push(el.find('img'));
            }
        });
        return elements;
    }

    function getBottomRightElements(element){
        var elements = [];
        $.each(elementList, function(i, el){
            if (el.offset().left > element.offset().left
                && el.offset().top > element.offset().top) {
                elements.push(el.find('img'));
            }
        });
        return elements;
    }

    function getBottomLeftElements(element){
        var elements = [];
        $.each(elementList, function(i, el){
            if (el.offset().left < element.offset().left
                && el.offset().top > element.offset().top) {
                elements.push(el.find('img'));
            }
        });
        return elements;
    }

    function applyAnimations(element, topRightAnimation, topLeftAnimation, bottomRightAnimation, bottomLeftAnimation){
        var options = {duration:800};

        var topRightElements = getTopRightElements(element);
        var topLeftElements = getTopLeftElements(element);
        var bottomRightElements = getBottomRightElements(element);
        var bottomLeftElements = getBottomLeftElements(element);

        $.each(topRightElements, function(i, element){
            element.stop(true, true).animate(topRightAnimation, options);
        });

        $.each(topLeftElements, function(i, element){
            element.stop(true, true).animate(topLeftAnimation, options);
        });

        $.each(bottomRightElements, function(i, element){
            element.stop(true, true).animate(bottomRightAnimation, options);
        });

        $.each(bottomLeftElements, function(i, element){
            element.stop(true, true).animate(bottomLeftAnimation, options);
        });
    }

    function moveIntoFocus(element){
        var topRightAnimation = {opacity:0.5, left:"+=2%", top:"-=2%"};
        var topLeftAnimation = {opacity:0.5, left:"-=2%", top:"-=2%"};
        var bottomRightAnimation = {opacity:0.5, left:"+=2%", top:"+=2%"};
        var bottomLeftAnimation = {opacity:0.5, left:"-=2%", top:"+=2%"};
        applyAnimations(element, topRightAnimation, topLeftAnimation, bottomRightAnimation, bottomLeftAnimation);
    }

    function leaveFocus(element){
        var topRightAnimation = {opacity:1, left:"-=2%", top:"+=2%"};
        var topLeftAnimation = {opacity:1, left:"+=2%", top:"+=2%"};
        var bottomRightAnimation = {opacity:1, left:"-=2%", top:"-=2%"};
        var bottomLeftAnimation = {opacity:1, left:"+=2%", top:"-=2%"};
        applyAnimations(element, topRightAnimation, topLeftAnimation, bottomRightAnimation, bottomLeftAnimation);
    }

    whatWeDo.find('.preview-box').hover(function(e){
        var element = $(this);
        element.css({zIndex:1000});
        var hoverElement = element.find('.hover-box');
        hoverElement.stop(true, true).animate({width:'100%', height:'100%', left:'0%', top:'0%', opacity:'show'});
        moveIntoFocus(element);
    }, function(e){
        var element = $(this);
        element.css({zIndex:1});
        var hoverElement = element.find('.hover-box');
        hoverElement.stop(true, true).animate({width:0, height:0, left:'50%', top:'50%', opacity:'hide'});
        leaveFocus(element);
    }).click(function(e){

    }).children('img').each(function(i, element){
        element = $(element);
        element.css({
            position:'absolute',
            left:'50%',
            top:'45%',
            marginLeft:-element.width()/2,
            marginTop:-element.height()/2
        });
        if (element.parent().hasClass('ecommerce')) {
            element.css({
                left:'47%'
            });
            element.siblings('.hover-box').children('div').css({
                left:'-15px'
            });
        }
    });
});