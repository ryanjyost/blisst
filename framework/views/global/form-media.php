<?php
// =============================================================================
// FORM-media.PHP
// -----------------------------------------------------------------------------
// Form to submit "media" post type
// =============================================================================
?>


      <form id="add-media-form" name="add-media-form" method="post" action="">

                <!-- Link -->
                <div id="step1_media">
                    <label for="source-link">Paste the URL here</label>
                    <p class="form-help">It has to start with "http"</p>
                        <input autocomplete="off" type="text" id="source-link" value="" size="20" name="source_link" />

                        <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Title -->
                <div id="step2_media">
                        <label for="title">What's the title?</label>
                        <input type="text" id="title" value="" size="20" name="title" />

                        <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Author/Creator -->
                <div id="step3_media">
                        <label for="article-author">Who created it?</label>
                        <input type="text" id="article-author" value="" size="20" name="article_author" />

                        <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Source -->
                <div id="step4_media">
                        <label for="source">What's the source?</label>
                        <p class="form-help">Just use your best judgement for what the "source" is.</p>
                        <input type="text" id="source" value="" size="20" name="source" />

                        <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>


                <!-- Preview & Submit -->
                <div id="step5_media">

                  <label>Look good? Link work?</label>
                  <p class="form-help">By the way, adding this means you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p><br>
                  <!--  Preview the Post    -->
                      <div class="loop-cont">
                            <div class="loop-title">
                              <span id="preview-media-title"></span>
                            </div>

                                <!-- Post type image -->
                                <img class="bookmark-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAFnklEQVR4Xu2d8ZmVOBTFEyhg7WDHChaTAlYr0A5WK9ixgh0r0A5WK3CtwGcBRKzAsQLHAkL2u7sz375hgHPJXnjAXP49IbycHyeQBHjWMDfv/bOU0mtr7Rlzl/tSrIkxvmya5iDRYMutxDn3VWEMutXUdf2I6+VYOTYQ732SOOBe66jrmu2lAlngLDg5EKkfsIBXsxyi22NI+cGO2Vw/YBa3Fqh0Lj8USCY8BZJp3Fy7KZC5nM2sd8Jd56RxinZZ8wOhI7DHKQpkGSCGexemQBRIpgMr2w1d1JE+1BxNSCZoZDjSFUim8UO7IcORrkAUiLADK6sOJQDpmhBhoMhwpCsQBSLswMqqQwlAuiZEGCgyHOmbBlJVVVUUxVNr7WNjzANjTHXUIHq44MoYc4gxfmqaphH2vrc6ZDjSNwnEe/+bMea8AwD5TWBeST0FouMQcr+qHpRl+d4YQ4nI2lJKb0MIL7J2ZuyEEoD0zSTkunv6aK2lrun/brQW8aRpGurSRDdkONI3AaSqqrOiKD4Lwbhp86Gu6yeiNIwxyHCkbwKI9/4j6qZSSt+MMZdHDTqz1v48ZnhK6VUI4UISCjIc6asH4px7bq39c8S0dzHGi6ZpjmH8U7yqqsdlWdLF/2nf/imlq7ZtH0p2XchwpG8ByOCjqimlFyGEt+gMd85dWGv/GIDyMoTwBtXB1ZHhSF81kOsznLqrO9vU7sZ7/9dAUtjr2hwoyHCkrxqIc+6Ntfb37o+k60XbttWUroZuDMqy/NrX4BgjdVt3ujwOgG4ZZDjSVw3Ee/+5b/A3NR03jXTONdbaX7qNvr4FFnltABmO9LUDoXHCTz0GPsqZCnHOHay1vyqQnOz/e5dE3UyVUqI5Khqd00tBVyGE4zkrdu0KhG3VMgUVyDI+s4/inPveN9qPMWZ1gX0HRtcIpK/6GsJ2mlGQ3oU0xtDE5K2N7thCCGLvRyLDkX6fgAxNv7yr6/o5gymrCDIc6fcCyNj0i+QtL5mJDEf67oGMzRSnlD6FELLXVvQawuo0bhcamymWvJjfHBUlAOm7TgiYVBSfetcuayQxYGJy8lwYN5woAUjfZUJo7b0oCpq2713unaOr0i5r5JT13tN4g8Ydd7aUkuj6R/cAKAFI311CnHPn1trXAw37UNd1Lyhul4TKIcORvisg9GRKWZY0Zd+3/Ygxnk1ZQ0Hm623v+EWcrhv0ZErvNIj0AHDop6AEIH03CRlaXaQG5i5oaUJyHPhv3aR3eTal9CV3/STn56AEIH0XCRlLx5y3uHoNGTh9htbejTGiM7mcxKAEIH0XCek28qZR3Oe2OEZzyyDDkb5rIEvdWR2biAxHugLhnvrMcshwpCsQptHcYshwpCsQrtPMcshwpO8CCK17dF9XsNZexhjP554q6RqIDEf6LoAwT95FiiHDka5AhDEhw5GuQBSIsAMrqw4lAOmaEGGgyHCkbx4IeEN39hVCvcvqOACeLhF/EA4FCiUA6XtICL1pO/QeogLhfocWnWlcXRPScSo3glzDUTkFokBGzxF0giJdryEoghN1ZDjS9wCEHv+hjwL0bQfpb5kgPshwpG8eCDJoaR0ZjnQFIkwMGY50BaJAhB1YWXUoAUjXhAgDRYYjXYEoEGEHVlYdSgDSNSHCQJHhSFcgCkTYgZVVhxKAdE2IMFBkONIViAIRdmBl1aEEIF0TIgwUGY50BaJAhB1YWXUoAUjXhAgDRYYjXRyIcPs2X133KRwFcmKkiwNxzl2i/+k4sScnO3zfRwuWSMizlBL9HcSdb6qfzIkVHJhgtG1Lb3Dd+qb87EBQ23N/AKp3q3quH+z/U0fG5P4AVO9W9Vw/FMhMxBXITMbmVrs6ILkN2et+3LcFZuuy9mpsbrsWB6LjlGFUUz6uJpkQHaf0MBkapwzh+xvWHgG/ykjRfQAAAABJRU5ErkJggg==" width="40" height="40">

                            <!-- Preview Author -->
                            <div class="loop-author">
                                <span id="preview-media-author"></span>
                            </div>

                            <!-- Preview Source -->
                            <div class="loop-source">
                                <span id="preview-media-source"></span>
                            </div>

                           <!-- Link whole preview container   -->
                            <a id="preview-media-link" href="" target="_blank">
                                  <span class="link-spanner"></span>
                            </a>

                      </div>
                      <!-- End of post preview -->

                      <div class="form-nav-butts">
                          <button type="submit" value="Add it" id="submit" name="submit">Add it</button>
                          <div class="prev-btn">Go Back</div>
                      </div>

                </div>

                <!--Pick the post type for PHP submission -->
                <input type="hidden" name="post-type" id="post-type" value="media" />
                  <input type="hidden" name="action" value="media" />

                <!-- Archive the post under current page's category for PHP submission -->
                <input type="hidden" name="cat" id="cat" value="<?php echo $the_cat_id ?>" />
                  <input type="hidden" name="action" value="<?php echo $the_cat_id ?>" />

                <?php wp_nonce_field( 'name_of_my_action','name_of_nonce_field' ); ?>



      </form>

                  <?php
                      //verify that post has been submitted
                      if($_POST){
                        save_post_data();
                      }
                  ?>