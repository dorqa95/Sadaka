$(function () {
    // Initialize and add the map
    let map;

    async function initMap() {
        // The location of Uluru
        const position = {lat: 47.6014702, lng: 19.059898};
        // Request needed libraries.
        const {Map} = await google.maps.importLibrary("maps");
        const {AdvancedMarkerView} = await google.maps.importLibrary("marker");

        // The map, centered at Uluru
        map = new Map(document.getElementById("contact-map"), {
            zoom: 15,
            center: position,
            mapId: "AIzaSyBGv-o_2qb4JgXVstf4AOT-WK1gwbPdzGo",
            mapTypeId: "roadmap",
        });

        // The marker, positioned at Uluru
        const marker = new AdvancedMarkerView({
            map: map,
            position: position,
            title: "Golgota Észak-Buda Keresztény Gyülekezet",
        });
    }

    if ($("#contact-map").length > 0) {
        initMap();
    }
});

$(function () {
    /* Gallery lightBox
    ================================================*/

    if ($(".lightbox").length > 0) {
        $(".lightbox").prettyPhoto();
    }

    /* Owl carousel
    ================================================*/

    if ($(".owl-carousel").length > 0) {
        $(".owl-carousel").owlCarousel({
            margin: 25,
            stagePadding: 25,
            nav: true,
            navText: [
                "<i class='glyphicon glyphicon-chevron-left'></i>",
                "<i class='glyphicon glyphicon-chevron-right'></i>"
            ],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 8
                }
            }

        });
    }

    /*
	On scroll animations
	================================================
	*/

    var $elems = $('.animate-onscroll');
    var winheight = $(window).height();

    function animate_elems() {
        var wintop = $(window).scrollTop(); // calculate distance from top of window

        // loop through each item to check when it animates
        $elems.each(function () {
            $elm = $(this);
            if ($elm.hasClass('animated')) {
                return true;
            } // if already animated skip to the next item
            topcoords = $elm.offset().top; // element's distance from top of page in pixels
            if (wintop > (topcoords - (winheight * 0.75))) {
                // animate when top of the window is 3/4 above the element
                $elm.addClass('animated');
            }
        });
    }

    $(window).scroll(function () {
        animate_elems();
    });
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});