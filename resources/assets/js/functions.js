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
          console.log(e);
          var map = "https://www.google.com/maps/embed/v1/place?q="+ e.location +"&key=AIzaSyAOiQbEnMGi86XD4-J7uIl7DI1Nby5gw4k";

          $("#eventModalTitle").text(e.title);
          $("#eventModalDate").text(moment(e.start).format('MMM Do h:mm A') + " - " + moment(e.end).format('h:mm A'));
          $("#eventModalLocation").attr("src", map);
          $("#eventModalDescription").html(e.description);
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

  $("#slackBtn").click(function(e) {
    e.preventDefault();
    var email = $("#slackEmail #email").val();
    var slackSubdomain = "sparktuscaloosa";
    var slackBotToken = "xoxp-3880484383-226602205045-226670521380-c5e88994f6f7bfa831726066590c7970";

    var data = {email: email, token: slackBotToken }

    $.ajax({
      type:"POST",
      url:"https://" + slackSubdomain + ".slack.com/api/users.admin.invite",
      data: data,
      success: function (html) {
        console.log(html);
      }
    });
  });
});
