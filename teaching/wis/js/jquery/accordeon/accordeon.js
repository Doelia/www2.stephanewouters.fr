$(function() {
    $('.accordeon .contenu').hide();
    $('.accordeon').on('click', function () {
        let my_contenu = $(this).find('.contenu');
        $('.contenu').not(my_contenu).slideUp('fast');
        my_contenu.slideToggle('fast');
    });
})
