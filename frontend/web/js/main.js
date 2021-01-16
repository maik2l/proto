$( document ).ready(function() {
    console.log( "ready!" );
    $(".favorite").on('click', function () {
        let data = $(this).data('id');
        let star = $(this).find('.star');
        let star_fill = $(this).find('.star-fill');
        if(star.css("display") === 'block')
        {
            star.css("display", "none");
            star_fill.css("display", "block");
        } else {
            star.css("display", "block");
            star_fill.css("display", "none");
        }


        $.ajax({
            url: '/users/change-favorite',
            type: 'POST',
            data: {
                'favorite_user_id': data
            },
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
});