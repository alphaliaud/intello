$(document).ready(function(){

    $('.menu-icon').click(function(e){
        e.preventDefault();
        $this = $(this);
        if($this.hasClass('is-opened')){
            $this.addClass('is-closed').removeClass('is-opened');
            $('.disapear').css('color', 'black');
            $('.disapear').css('pointer-events', 'none');

        }else{
            $this.removeClass('is-closed').addClass('is-opened');
            $('.disapear').css('color', 'white');
            $('.disapear').css('pointer-events', 'auto');
            $('.disapear').css('transition', 'color 0.5s');

        }
    })

});