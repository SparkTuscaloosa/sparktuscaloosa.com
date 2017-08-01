var moment = require('moment');

$(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyAOiQbEnMGi86XD4-J7uIl7DI1Nby5gw4k',
        eventSources: [
            {
                googleCalendarId: 'urnpggctdpssnemfi6m28937i8@group.calendar.google.com'
            }
        ],
        eventClick: function(e) {
            $("#eventModalTitle").text(e.title);
            $("#eventModalStart").text(moment(e.start).format('MMM Do h:mm A'));
            $("#eventModalEnd").text(moment(e.end).format('MMM Do h:mm A'));
            $("#eventModal").show();
            if(e.url) {
                return false;
            }
        }
    });

    $(".close").click(function(e) {
		e.preventDefault();
		$(this).parent().parent().parent().hide();
	});

    $("#toggleNav").click(function(e) {
		e.preventDefault();
		$(this).parent().toggleClass('responsive');
	});
});
