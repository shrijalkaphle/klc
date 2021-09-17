window.onscroll = () => {
    if($(document).scrollTop() > 80) {
        $('#navbar').addClass('is-sticky')
        $('#go-top').addClass('active')
    } else {
        $('#navbar').removeClass('is-sticky')
        $('#go-top').removeClass('active')
    }
}

$('#go-top').on('click', () => {
    $("html, body").animate({ scrollTop: 0 }, "slow");
})