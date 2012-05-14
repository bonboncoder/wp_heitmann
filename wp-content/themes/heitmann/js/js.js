$(document).ready(function() {
    $('#maincontent').hide().delay(250).slideDown(1500);
    $('#imagecontent').hide().delay(250).slideDown(1500);
    $('#close_ticker').click(function() {
        $.ajax({
            type: "POST",
            data: "hs=TRUE",
            success: function(html){
                    $('#sidebar').hide();
            }
        });
    });
    var allthumbs = $('.gallery-icon').find('a');
    if(document.URL.match('.*/(portraits$|szenen$)')) {
        $('.gallery-item:first-child').addClass('current_thumb');
    } else if(document.URL.match('.*/(portraits|szenen)')) {
        if(document.URL.match('.*/(portraits)')) {
            $('.page-item-28 a').css('color','#66faa2');
        } else {
            $('.page-item-30 a').css('color','#66faa2');
        }
        for(var i=0; i<allthumbs.length; i++) {
            if(allthumbs[i]==document.URL) {
                $('.gallery-item:nth-child('+(i+1)+')').addClass('current_thumb');
                break;
            }
        }
    }

});
