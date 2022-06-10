$(function() {
    let liststart = $(".ratting");

    liststart.click(function() {
        let $this = $(this);
        let number = $this.attr('data-key');
        liststart.removeClass('rating_active');
        $.each(liststart, function(key, value) {
            if (key + 1 <= number) {
                $(this).addClass('rating_active');
            }
        });
        $(".number_rating").val(number);
    });
});