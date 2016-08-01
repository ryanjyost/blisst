(function($) {
	$(document).ready(function(){

		//get rid of the ability to use return key to submit
		$('button').keypress(
		    function(event){
		     if (event.which == '13') {
		        event.preventDefault();
		      }
		});


		jQuery.fn.extend({
			    toggleText: function (a, b){
			        var that = this;
			            if (that.text() != a && that.text() != b ){
			                that.text(b);
			            }
			            else
			            if (that.text() == a ){
			                that.text(b);
			            }
			            else
			            if (that.text() == b){
			                that.text(a);
			            }
			        return this;
			    }
			});

//=================================================================================================================================================
//
//jQuery Form
//
//=================================================================================================================================================


		//initialize variables
		var $step=0;
		var $type = '';

		//=======================================
		//Start and reset the form w/ share button
		//=======================================

				// toggle to open and close the form window
				$('.share-button').click(function(){

					//toggle text on the share button
					$('.share-button').toggleText('Post', 'Nevermind');
					$('.share-button').toggleClass('share-btn-dim');

					// toggle the form window up and down to display step0, i.e. start of the form
					$('.form-window').slideToggle("fast");

					//swtich between the share button and button to escape form
					//$(this).toggleClass("share-btn-dim");

					if($step==0){
						$('#step0').fadeIn('fast'); //start with the post-type icons for selection
					}

					if($step==5){
						$('.next-btn').show(); //show the next button if it was hidden on final step (step5)
					}

					//reset the form
					if($step > 0){
						$('#step'+$step.toString()+"_"+$type.toString()).hide('fast'); //hide form window if toggled mid-form
						$('#add-'+$type+'-form').hide('fast').find("input[type=text], textarea").val(""); //reset form fields
						$('#step0').delay('slow').fadeIn('fast'); //start with the post-type icons for selection
						$('.post-type-desc').show();//bring back the post description box
						$('.prev-btn').removeClass('prev-btn-submit'); // if was on submit page, remove  "go back" styling unique to step 5
						$(".share-button").text("Post") // reset share button

						//reset validation styling
						$('#step1_'+$type.toString()).find("input").removeClass("input-invalid");
						$('#step2_'+$type.toString()).find("input").removeClass("input-invalid");
						$('#step3_'+$type.toString()).find("input").removeClass("input-invalid");
						$('#step4_'+$type.toString()).find("input").removeClass("input-invalid");



						$type ='';
						$step= $step - $step;
						//$(".share-button").text($step);//test step value
					}

				});

						//=======================================
						//Hover post type descriptions
						//=======================================

									$('#article-icon').hover(
											function(){
												$('#article-desc').show();
											}, function(){
												$('#article-desc').hide();
											}
									);

									$('#essay-icon').hover(
											function(){
												$('#essay-desc').show();
											}, function(){
												$('#essay-desc').hide();
											}
									);

									$('#book-icon').hover(
											function(){
												$('#book-desc').show();
											}, function(){
												$('#book-desc').hide();
											}
									);

									$('#study-icon').hover(
											function(){
												$('#study-desc').show();
											}, function(){
												$('#study-desc').hide();
											}
									);

									$('#audio-icon').hover(
											function(){
												$('#audio-desc').show();
											}, function(){
												$('#audio-desc').hide();
											}
									);

									$('#speech-icon').hover(
											function(){
												$('#speech-desc').show();
											}, function(){
												$('#speech-desc').hide();
											}
									);

									$('#video-icon').hover(
											function(){
												$('#video-desc').show();
											}, function(){
												$('#video-desc').hide();
											}
									);

									$('#media-icon').hover(
											function(){
												$('#media-desc').show();
											}, function(){
												$('#media-desc').hide();
											}
									);

		//=======================================
		//Start the form for selected post type
		//=======================================

		//transition from icons when an icon is clicked
		$(".pick-type-icon").click(function(){
			$step = $step + 1;
			$('.post-type-desc').hide();//immediately hide the post type description from hover
			$('#step0').slideUp('fast'); //slide the icon section up
			//$(".share-button").text($step);//test step value

		});

					$('#article-icon').click(function(){
						$type = 'article';
						$('#add-article-form').fadeIn('slow'); // queue the form
						$('#step1_article').fadeIn('fast');
						$(".share-button").text("Article / Op-Ed").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form
					});

					$('#essay-icon').click(function(){
						$type = 'essay';
						$('#add-essay-form').fadeIn('slow'); // queue the form
						$('#step1_essay').fadeIn('fast');
						$(".share-button").text("Essay / Longform");//make the button on top reflect the post-type of the form
					});

					$('#book-icon').click(function(){
						$type = 'book';
						$('#add-book-form').fadeIn('slow'); // queue the form
						$('#step1_book').fadeIn('fast');
						$(".share-button").text("Book").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form
					});

					$('#study-icon').click(function(){
						$type = 'study';
						$('#add-study-form').fadeIn('slow'); // queue the form
						$('#step1_study').fadeIn('fast');
						$(".share-button").text("Study / Stats").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form
					});

					$('#audio-icon').click(function(){
						$type = 'audio';
						$('#add-audio-form').fadeIn('slow'); // queue the form
						$('#step1_audio').fadeIn('fast');
						$(".share-button").text("Podcast / Audio").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form
					});

					$('#speech-icon').click(function(){
						$type = 'speech';
						$('#add-speech-form').fadeIn('slow'); // queue the form
						$('#step1_speech').fadeIn('fast');
						$(".share-button").text("Speech / Debate").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form
					});

					$('#video-icon').click(function(){
						$type = 'video';
						$('#add-video-form').fadeIn('slow'); // queue the form
						$('#step1_video').fadeIn('fast');
						$(".share-button").text("Film / Video").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form
					});

					$('#media-icon').click(function(){
						$type = 'media';
						$('#add-media-form').fadeIn('slow'); // queue the form
						$('#step1_media').fadeIn('fast');
						$(".share-button").text("Everything Else").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form
					});



			//=======================================
			//
			//Navigation
			//
			//=======================================


					//previous button functionality
					$('.prev-btn').click(function(){

						//navigate back to icon selection
						if($step==1){
							$('#step'+$step.toString()+"_"+$type.toString()).removeClass('prev-step-in'); //remove the class that allows swipe left
							$('#add-'+$type+'-form').find("input[type=text], textarea").val(""); //reset form fields
							$('.post-type-desc').show();//bring back the post description box
							$('#step1_'+$type.toString()).fadeOut('fast'); //slide the icon section up
							$('#step0').slideDown('fast');
							$(".share-button").text("Nevermind");//chnage back share button

							$step = $step-1;
							$type = '';
							//$(".share-button").text($step);//test step value
						}

						else{

							//back to normal "Go Back"
							if($step==5){
								$('.prev-btn').removeClass('prev-btn-submit');

							};

							$('#step'+$step.toString()+"_"+$type.toString()).removeClass('prev-step-in'); //remove the class that allows swipe left
							$('#step'+$step.toString()+"_"+$type.toString()).animate({width: 'toggle', height:'100%'}, 150, "linear").fadeOut('fast'); //hide current form step, swipe left
							$step = $step - 1;

							if($step==4){
								$('.next-btn').show(); //show the next button again
							};


							$('#step'+$step.toString()+"_"+$type.toString()).addClass('prev-step-in').delay(200).animate({width: 'toggle', height:'100%'}, 150, "linear"); //bring in previous step
							//$(".share-button").text($step);//test step value
						}
					});

					$('.next-btn').click(function(){

						if(formCheck($step)==true){

								$('#step'+$step.toString()+"_"+$type.toString()).removeClass('prev-step-in'); //remove the class that allows swipe left
								$('#step'+$step.toString()+"_"+$type.toString()).animate({width: 'toggle', height:'100%'}, 150, "linear").fadeOut('fast'); //hide current form step, swipe right

								$step = $step + 1;


								//if hit next button to the preview/submit step
								if($step==5){
									$('.next-btn').hide(); //hide the next button
									$('.prev-btn').addClass('prev-btn-submit');
									$('.post-type-desc').show();

												//Link Preview
												var previewLink = $('#step1_'+$type.toString()).find("input").val();
												$("#preview-"+$type.toString()+"-link").attr("href", previewLink.toString());
												$("#preview-"+$type.toString()+"-link").attr("target", '_blank');

												// Title preview
												var previewTitle = $('#step2_'+$type.toString()).find("input").val();
												$("#preview-"+$type.toString()+"-title").text(previewTitle.toString());

												// Author preview
												var previewAuthor = $('#step3_'+$type.toString()).find("input").val();
												$("#preview-"+$type.toString()+"-author").text(previewAuthor.toString());

												// Source preview
												var previewSource = $('#step4_'+$type.toString()).find("input").val();
												$("#preview-"+$type.toString()+"-source").text(previewSource.toString());

								};

								$('#step'+$step.toString()+"_"+$type.toString()).addClass('prev-step-in').delay(200).animate({width: 'toggle', height:'100%'}, 150, "linear"); //bring in next step
								//$(".share-button").text($step);//test step value
							};

					});


					//=======================================
					//
					//Validation - check for basic requirements step by step
					//
					//=======================================


					function formCheck(step){

							var check = false;
							switch(step){

								//check that the URL has "http://"
								case 1:
									var inputCheck = $('#step'+$step.toString()+"_"+$type.toString()).find("input").val();
									if(inputCheck.indexOf('http') < 0){
										$('#step'+$step.toString()+"_"+$type.toString()).find("input").addClass("input-invalid");

									}
									else{
										$('#step'+$step.toString()+"_"+$type.toString()).find("input").removeClass("input-invalid");
										check = true;
									};
									break;

								//check that the input is not blank
								case 2:
								case 3:
								case 4:
									var inputCheck = $('#step'+$step.toString()+"_"+$type.toString()).find("input").val();
									if(inputCheck.length < 1){
										$('#step'+$step.toString()+"_"+$type.toString()).find("input").addClass("input-invalid");
									}
									else{
										$('#step'+$step.toString()+"_"+$type.toString()).find("input").removeClass("input-invalid");
										check = true;
									};
									break;
							};
						return check;
					};


//End of jQuery Submit Form
//===============================================================================================================================================


//===============================================================================================================================================
//
//Main Side Accordion Menu
//
//===============================================================================================================================================



	var $active = 0;
	var $prev = 0;
	var $dropdown = 0; //0 for closed, 1 for open

		$('.main-side-label').click(function(){
			$prev=$active;
			var $id = this.id;
			//$(".share-button").text(id.toString());//test step value

					//More
					if($id=='main-side-1'){
						$active=1;
					};

					//topics
					if($id=='main-side-2'){
						$active=2;
					};

					//lists
					if($id=='main-side-3'){
						$active=3;
					};

					//feedback
					if($id=='main-side-4'){
						$active=4;
					};

			if($prev==0){
				$('#main-side-drop-'+$active.toString()).slideDown('fast');
				$('#main-side-'+$active.toString()).addClass('main-side-label-active');
				$dropdown = 1;
			}

			else if($prev==$active && $dropdown==1){
				$('#main-side-drop-'+$prev.toString()).slideUp('fast');
				$('#main-side-'+$active.toString()).removeClass('main-side-label-active');
				$dropdown=0;
			}

			else if ($prev==$active && $dropdown==0){
				$('#main-side-drop-'+$prev.toString()).slideDown('fast');
				$('#main-side-'+$active.toString()).addClass('main-side-label-active');
				$dropdown=1;
			}

			else if($prev !=$active && $dropdown==1){
				$('#main-side-drop-'+$prev.toString()).slideUp('fast');
				$('#main-side-'+$prev.toString()).removeClass('main-side-label-active');

				$('#main-side-drop-'+$active.toString()).slideDown('fast');
				$('#main-side-'+$active.toString()).addClass('main-side-label-active');
				$dropdown = 1;
			}

			else if($prev !=$active && $dropdown==0){
				$('#main-side-drop-'+$active.toString()).slideDown('fast');
				$('#main-side-'+$active.toString()).addClass('main-side-label-active');
				$dropdown = 1;
			}



		});



//===============================================================================================================================================
//
//Additional Functionality
//
//===============================================================================================================================================

//================================================
// Dropdown on topic and playlist descriptions


	$('#dropdown').click(function(){
			$('.subcat-desc').slideToggle('fast');
			$(this).toggleClass('collapse');
	});

//================================================
// Dropdown form to add topic
	$('#add-subcat-btn').click(function(){
		$('#add-topic').slideToggle('fast');
		$(this).toggleText("+", "-").toggleClass('collapse-add-btn');
	});

// Dropdown form to add list
	$('#add-list-btn').click(function(){
		$('#add-list').slideToggle('fast');
		$(this).toggleText("Make a List", "-").toggleClass('collapse-list-btn');
	});





































	});
})( jQuery );



