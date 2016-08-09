(function($) {
	$(document).ready(function(){



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
		var $step= 0;
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

					if($step==0){
						$('#step0').fadeIn('fast'); //start with the post-type icons for selection
					}

					// if close the form on the 'preview' step
					if($step=5){
						$('#step5_'+$type.toString()).hide(); // hide the 'preview' step
					}

					// if close the form on the submit step
					if($step=6){
						$('#step6_'+$type.toString()).hide(); // hide the 'preview' step
					}

					//reset the form
					if($step > 0){
						$('#add-'+$type+'-form').hide('fast').find("input[type=text], textarea").val(""); //reset form fields
						$('#step0').delay('slow').fadeIn('fast'); //start with the post-type icons for selection
						$('.post-type-desc').show();//bring back the post description box
						$(".share-button").text("Post") // reset share button

						//reset validation styling
						$('#step1_'+$type.toString()).find("input").removeClass("input-invalid");
						$('#step2_'+$type.toString()).find("input").removeClass("input-invalid");
						$('#step3_'+$type.toString()).find("input").removeClass("input-invalid");
						$('#step4_'+$type.toString()).find("input").removeClass("input-invalid");

						$step= 0;
						type='';
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
			$step = 1
			$('.post-type-desc').hide();//immediately hide the post type description from hover
			$('#step0').slideUp('fast'); //slide the icon section up
		});

					$('#article-icon').click(function(){
						$type = 'article';
						$('#add-article-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Article / Op-Ed").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});

					$('#essay-icon').click(function(){
						$type = 'essay';
						$('#add-essay-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Essay / Longform");//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});

					$('#book-icon').click(function(){
						$type = 'book';
						$('#add-book-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Book").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});

					$('#study-icon').click(function(){
						$type = 'study';
						$('#add-study-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Study / Stats").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});

					$('#audio-icon').click(function(){
						$type = 'audio';
						$('#add-audio-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Podcast / Audio").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});

					$('#speech-icon').click(function(){
						$type = 'speech';
						$('#add-speech-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Speech / Debate").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});

					$('#video-icon').click(function(){
						$type = 'video';
						$('#add-video-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Film / Video").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});

					$('#media-icon').click(function(){
						$type = 'media';
						$('#add-media-form').fadeIn('slow'); // queue the form
						$(".share-button").text("Everything Else").css({"text-transform": "capitalize"});//make the button on top reflect the post-type of the form

						// bring in input fields, buttons
						$('#step1_'+$type.toString()).fadeIn('fast');
						$('#step2_'+$type.toString()).fadeIn('fast');
						$('#step3_'+$type.toString()).fadeIn('fast');
						$('#step4_'+$type.toString()).fadeIn('fast');
						$('.next-inputs').show();
					});



		//=======================================
		//
		//Navigation
		//
		//=======================================

				//////////////////////////////////////
				// Navigation buttons on the inputs window

						$('.next-inputs').click(function(){

									//hide initial steps
									$('#step1_'+$type.toString()).hide();
									$('#step2_'+$type.toString()).hide();
									$('#step3_'+$type.toString()).hide();
									$('#step4_'+$type.toString()).hide();

									$step = 5; // step5 is the "preview" step

									//remove previous nav button
									$('.next-inputs').hide(); //hide the next button


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

								$('#step'+$step.toString()+"_"+$type.toString()).addClass('prev-step-in').delay(200).fadeIn('fast'); //bring in next step
								//$(".share-button").text($step);//test step value
						});



				/////////////////////////////////////////
				// Navigation buttons on the preview window

						//"Go Back" button on preview step
						$('.prev-preview').click(function(){

							$('#step5_'+$type.toString()).hide(); // hide the 'preview' step

							$step = 1 // step back to 1 (includes steps 1-4)

							// bring back input fields
							$('#step1_'+$type.toString()).fadeIn('fast');
							$('#step2_'+$type.toString()).fadeIn('fast');
							$('#step3_'+$type.toString()).fadeIn('fast');
							$('#step4_'+$type.toString()).fadeIn('fast');


							//reset stuff
							$('.next-inputs').show(); //show the next button
							$('.post-type-desc').hide();

						});

						// next button to progress to content and submission
						$('.next-preview').click(function(){
							$('#step5_'+$type.toString()).hide(); // hide preview window

							$step = 6; // progress to content window
							$('#step'+$step.toString()+"_"+$type.toString()).fadeIn('fast'); //bring in content window
						});

				/////////////////////////////////////////
				// Navigation buttons on the submit window

						//Go Back on submit step
						$('.prev-submit').click(function(){
							$('#step6_'+$type.toString()).hide(); // hide submit window

							$step = 5 //step back to preview (step5)

							//bring back preview window
							$('#step5_'+$type.toString()).fadeIn('fast'); // show preview window

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
//Loop Stuff
//
//===============================================================================================================================================

	// switch between post type icon and expand icon on hover
	$('.loop-cont').hover(function(){
		$(this).find('img').toggle();
	});

	$('.loop-cont').find('img').click(function(){
		$(this).parent().parent().find(".post-comment-box").slideToggle('fast');
	})

	$('.plus-icon').hover(function(){
		$(this).toggleClass('plus-icon-hover')
	});


	//================================================
	//expand all comments

	var $expanded=0;

	$('#expand-all').click(function(){
		$(this).toggleText('Expand all','Collapse all')

		if($expanded==0){
			$(".post-comment-box").slideDown('fast');
			$('.plus-icon').addClass('collapse-plus');
			$expanded = 1;
		} else{
			$(".post-comment-box").slideUp('fast');
			$('.plus-icon').removeClass('collapse-plus');
			$expanded = 0;
		}
	});


	//================================================
	// When click the plus icon
		$('.plus-icon').click(function(){
				$(this).toggleClass('collapse-plus');
		});



//===============================================================================================================================================
//
//Additional Functionality
//
//===============================================================================================================================================

//================================================
// Dropdown for topic and playlist descriptions
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

//================================================
// Start with post comment expanded on single post page
	if ($('#post-middle').length) {
		$('.post-comment-box').css("display", "block")
		$('.plus-icon').addClass("collapse-plus") // start with icon in "open" stage (ready to be collpased)
		$('.loop-post-link').css("display", "none"); // hide the "join the discussion" link if on single post page
	};









































	});
})( jQuery );



