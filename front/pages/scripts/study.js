$(document).ready(function() {
    $('div[id^="fly"]').each( function(i){
		$(this).transition({
			animation  : 'fly left',
			duration   : '0'
		});

    	$(this).visibility({
    		onBottomVisible: function(){
    			$(this).transition({
    				animation : 'fly left',
    				duration : '800ms'
    			});
    		}
    	});
    });
});
   

$(document).ready(function() {
    $('div[id^="pulse"]').each( function(i){
        $(this).transition({
            animation  : 'pulse',
            duration   : '0'
        });

        $(this).visibility({
            onBottomVisible: function(){
                $(this).transition({
                    animation : 'pulse',
                    duration : '800ms'
                });
            }
        });
    });
});

$(document).ready(function() {
    $('div[id^="fade"]').each( function(i){
        $(this).transition({
            animation  : 'fade',
            duration   : '0'
        });

        $(this).visibility({
            onBottomVisible: function(){
                $(this).transition({
                    animation : 'fade up',
                    duration : '800ms'
                });
            }
        });
    });
});
    