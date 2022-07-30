$(document).ready(function () {
    // open modal
    $('#open_modal').click(function () {
        $('#modal_to_open').css(
            {
                'display': 'block'
            }
        );
    });

    //close modal
    $('#close_modal').click(function () {
        $('#modal_to_open').css(
            {
                'display': 'none'
            }
        )
    });
});



// scroll nav bar

let lastScroll = 0;

window.addEventListener("scroll", () => {
    if (window.scrollY < lastScroll) {
        navbar.style.top = 0;
    } else {
        navbar.style.top = "-80px";
    }

    lastScroll = window.scrollY;
});