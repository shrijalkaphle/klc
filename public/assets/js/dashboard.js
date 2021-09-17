$("#darkModeToogle").on('click', () => {
    var element = document.body;
    $(document.body).toggleClass("dark-mode")
    $('#topnav').toggleClass("nav-dark")
    $('#darkModeToogle').toggleClass("floating-dark")
    $('#sidebar').toggleClass("sidebar-dark")
    $('table').toggleClass('table-dark');
    $('.card').toggleClass('card-dark');
    $('.modal').toggleClass('model-dark')
    if( $('#darkModeToogle').hasClass("floating-dark")) {
        $('#darkimage').text('light_mode')
    } else {
        $('#darkimage').text('dark_mode')
    }
})

$('#sidebarToogle').on('click', () => {
    var sidebarwidth = getComputedStyle(document.documentElement).getPropertyValue('--sidebar-width')
    if(sidebarwidth == '0px') {
        sidebarwidth = '280px'
    } else {
        sidebarwidth = '0px'
    }
    $('#sidebar').animate({
        width: sidebarwidth
    })
    document.documentElement.style.setProperty('--sidebar-width', sidebarwidth);
})
