 $(function() {

 	
 	// start at index 0
 	$('.question_panel').eq(0).show();
 
 	// loop through each panel
	$('.question_panel').each(function(i){
		// create ids for the survey panels
		$(this).attr('id', 'question_panel_'+i).appendTo($(this));

	});
	// set the current panel
	var $curr = $( "#question_panel_0" );

	// declare variables
	var totalQuestions = ($(".question_panel").length); // total number of question panels
	var incrementWidth = (100 / totalQuestions); // increment the width by the total number of panels

    $('.question_panel .list-group-item').click(function(){

    	// update the profess bar
		setTimeout(function() {
			// get the width of the progress bar container
			var progressWrapper = $('#question_wrap .progress').width();
			// get the completed width of the progress bar
			var progressWidth = $('.progress-bar').width();
			// store the current completed width of the progress bar
			var currentWidth = (progressWidth / progressWrapper) * 100;
			// get the new completed width of the progress bar
			var newWidth = currentWidth + incrementWidth;
			// round off the new the width
			var newWidthRounded = Math.round(newWidth);
			// increase the new width and increase the progress data-progress value
			$('.progress-bar').css('width', newWidthRounded + '%').attr('data-progress', newWidthRounded);
			// display what's been completed so far
			$('.progress-bar').html('<b>Completed ' + newWidthRounded +' %</b>');
		}, 50);

		// move to the next panel
		$curr = $curr.next();
		// hide the previous panel
		$('.question_panel').css('display', 'none');
		// display the next panel
		$curr.css('display', 'block');
		// get the last survey panel
		var $lastSurveyPanel = $('.question_panel').children().last();
		// check if the user is at the last question
		if($lastSurveyPanel.is(':visible')){
			// when the user completes the last question prompt the user finish message
			$('.question_panel').after('<div class="panel panel-primary completed_panel">'  +
											'<div class="panel-body" id="completed_Wrap">'+
											    '<h1>Survey Completed!</h1>'              +  
											    '<h3>Thank you</h3>'					  +
											    '<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">'	 +
											    '<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>'			 +
											    '<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>'+
											'</div>'                                      											 +                          
									 '</div>'
									);
		}


		// get the current url path
        var pageURL = $(location).attr("href");
        // send the csrf token as a request header
	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
	    		// get the user answer
		var $answer_name = $(this).attr('data-answer');
        var $_token = $('input[name=_token]').val();
        var formData = {
            answer_name: $answer_name,
            _token: $_token 
        };
        $.ajax({
            type: 'POST',
            url: 'store',
            data: formData,
            success: function () {
                $('.survey_form').submit();
            },
			error: function (xhr) { console.log(xhr.responseText); } 
        });
    });

});