$(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyBYtP6YJ47PKr6Q4DbydCAf1_TYPj5U888',
        eventSources: [
            {
                googleCalendarId: 'urnpggctdpssnemfi6m28937i8@group.calendar.google.com'
            }
        ]
    });

    $("#toggleNav").click(function(e) {
		e.preventDefault();
		$(this).parent().toggleClass('responsive');
	});


});
