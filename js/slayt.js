$('.carousel-item').click(function() {
    const link = $(this).data('link');
    window.open(link);
});
