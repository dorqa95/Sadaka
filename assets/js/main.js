		
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

	 /* Contact form ajax Handler
    ================================================*/

    $(".ajax-form").on('submit', function () {
        var form = $(this);
        var formURL = $(this).attr("action");
        var postData = $(this).serializeArray();

        $.ajax({
            url: formURL,
            type: 'POST',
            data: postData,
            dataType: 'json',

            success: function (data, textStatus, jqXHR) {

                if (data.success === 1) {
                    form.find(".alert").fadeOut();
                    form.find(".alert-success").html(data.message);
                    form.find(".alert-success").fadeIn(600);   
                } else {
                    form.find(".alert").fadeOut();
                    form.find(".alert-danger").html(data.message);
                    form.find(".alert-danger").fadeIn(600);
                }
            },

            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }

        });
            

        return false;
    });

    /*
	On scroll animations
	================================================
	*/

    var $elems = $('.animate-onscroll');
    var winheight = $(window).height();
    var fullheight = $(document).height();
 

    function animate_elems() {

	    var wintop = $(window).scrollTop(); // calculate distance from top of window
        
	    // loop through each item to check when it animates
	    $elems.each(function () {
            $elm = $(this);
            if ($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
            topcoords = $elm.offset().top; // element's distance from top of page in pixels
            if (wintop > (topcoords - (winheight * 0.75))) {
	        // animate when top of the window is 3/4 above the element
                $elm.addClass('animated');
            }
	    });
    } // end animate_elems()

    $(window).scroll(function () {
        animate_elems();
    });

    /*  Google map Script
    ====================================================*/
    
	function initMap() {
        
        var mapLatitude = 47.6014702; // Google map latitude
        var mapLongitude = 19.059898; // Google map Longitude  

	    var myLatlng = new google.maps.LatLng(mapLatitude, mapLongitude);

	    var mapOptions = {

	            center: myLatlng,
	            mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 15,
	            scrollwheel: false
            };
        
	    var map = new google.maps.Map(document.getElementById("contact-map"), mapOptions);

	    var marker = new google.maps.Marker({
            position: myLatlng,
            map : map
	    });

	    // To add the marker to the map, call setMap();
	    marker.setMap(map);

	    // Map Custom style
	    var styles = [
            {
                stylers: [
                    { hue: "#1f76bd" },
                    { saturation: 80 }
                ]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    { lightness: 80 },
                    { visibility: "simplified" }
                ]
            }, {
                featureType: "road",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            }
        ];
		map.setOptions({styles: styles});
	}

	if ($("#contact-map").length > 0) {
		initMap();
	}
});



var vid, playbtn, seekslider, curtimetext, durtimetext, mutebtn, volumeslider, fullscreenbtn;
function intializePlayer(){
	// Set object references
	vid = document.getElementById("my_video");
	playbtn = document.getElementById("playpausebtn");
	seekslider = document.getElementById("seekslider");
	curtimetext = document.getElementById("curtimetext");
	durtimetext = document.getElementById("durtimetext");
	mutebtn = document.getElementById("mutebtn");
	volumeslider = document.getElementById("volumeslider");
	fullscreenbtn = document.getElementById("fullscreenbtn");
	// Add event listeners
	playbtn.addEventListener("click",playPause,false);
	seekslider.addEventListener("change",vidSeek,false);
	vid.addEventListener("timeupdate",seektimeupdate,false);
	mutebtn.addEventListener("click",vidmute,false);
	volumeslider.addEventListener("change",setvolume,false);
	fullscreenbtn.addEventListener("click",toggleFullScreen,false);
}
window.onload = intializePlayer;
function playPause(){
	if(vid.paused){
		vid.play();
		playbtn.style.background = "url(pause.png)";
	} else {
		vid.pause();
		playbtn.style.background = "url(play.png)";
	}
}
function vidSeek(){
	var seekto = vid.duration * (seekslider.value / 100);
	vid.currentTime = seekto;
}
function seektimeupdate(){
	var nt = vid.currentTime * (100 / vid.duration);
	seekslider.value = nt;
	var curmins = Math.floor(vid.currentTime / 60);
	var cursecs = Math.floor(vid.currentTime - curmins * 60);
	var durmins = Math.floor(vid.duration / 60);
	var dursecs = Math.floor(vid.duration - durmins * 60);
	if(cursecs < 10){ cursecs = "0"+cursecs; }
	if(dursecs < 10){ dursecs = "0"+dursecs; }
	if(curmins < 10){ curmins = "0"+curmins; }
	if(durmins < 10){ durmins = "0"+durmins; }
	curtimetext.innerHTML = curmins+":"+cursecs;
	durtimetext.innerHTML = durmins+":"+dursecs;
}
function vidmute(){
	if(vid.muted){
		vid.muted = false;
		mutebtn.innerHTML = "Mute";
	} else {
		vid.muted = true;
		mutebtn.innerHTML = "Unmute";
	}
}
function setvolume(){
	vid.volume = volumeslider.value / 100;
}
function toggleFullScreen(){
	if(vid.requestFullScreen){
		vid.requestFullScreen();
	} else if(vid.webkitRequestFullScreen){
		vid.webkitRequestFullScreen();
	} else if(vid.mozRequestFullScreen){
		vid.mozRequestFullScreen();
	}
}