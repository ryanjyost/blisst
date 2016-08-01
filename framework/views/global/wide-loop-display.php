<?php

// =============================================================================
// Wide-FEED.PHP
// -----------------------------------------------------------------------------
// Wide loop
// =============================================================================

?>

<!--   Mumbles   -->
<?php if(get_post_type() == 'mumble') { ?>

  <!--  Display for single mumble in the loop    -->
  <div class="wide-feed-container">

       <!-- Category Link   -->
  	<div class="mumble-feed-category"><?php

        // Display the category
          $categorylist = the_category( ', ' );
            echo "$categorylist";?>

  	</div>


    <div class="mumble-feed-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </div>

    <?php $author = get_the_author() ?>

    <div class="mumble-feed-author">
      <?php  echo "By ";?><?php the_author_posts_link(); ?>
    </div>

    <div class="mumble-feed-excerpt">
      <?php echo the_excerpt()?>
    </div>



    <div class="mumble-feed-date">
      <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
    </div>
  </div>
<?php } ?>

<!--   Media   -->
<?php if(get_post_type()  !='mumble') { ?>

 <!--  Display for single media in the loop    -->
 <div class="wide-feed-container">

  <div class="search-link">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Join the conversation</a>
  </div>

    <div class="loop-media-title">
           <?php
             // Make source link variable and connect to article title.
            $sourcelink = get_field('source_link');

            ?>

         <a href="<?php echo "$sourcelink" ;?>"> <?php the_title();?></a>


    </div>


<?php if(get_post_type($id) == 'article') { ?>

<img class="uci-icon" src="data:image/png;base64,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" width="90" height="90">
<?php } ?>

<?php if(get_post_type($id) == 'essay') { ?>

<img class="uci-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAACs0lEQVR4Xu2bUW7CMBAFyZXgQu3J2gvBlVJFbSUUAfH67dprPPyy++TMxDZx0+XEJxWBJdVoGMwJIcluAoS8i5DL5bImu5bi4azr+nm73b6LGxoWVs+QkYVsfLNKmVZIVilTC8koxU3I9XqtzmqxRL9aYjMtX9UQ9xc4spBMMwUhd9Mzw0yZVsgGf1mWr/1y2VvKtEK2JfZ8Pn9kkzK1kG12ZJMyvZBsUhDyt4lkmSkIudvVM0hByO5nVm8pCHlwTNBTCkKenNv0koKQFwdpPaQg5OBks7UUhBQcNbeUgpACIS0fHhFSKKSVFIQYhLSQghCjkGgpCKkQEillWiGVHoralD9yIaQIsb2o9h0DhNhZF3Ug5ABT6zctEVJ038YVeb0WNc2SFafiNxkh0YSN+QgxAosuR0g0YWM+QozAossREk3YmI8QI7DocoREEzbmI8QILLocIdGEjfkIMQKLLh9eSOvDPqsQ6+EgQqyEjfUIMQKLLkdINGFj/nRCjHzSlw+/h6QnbBwgQozAossREk3YmI8QI7DocoREEzbmI8QILLocIdGEjfnDC+l9lmV98Dvyg5AjQgffI2QHiBny+I7p9uYiQpIJEVecdO3D7yHpiIoDQogI0LsdId5ExTyEiAC92xHiTVTMQ4gI0LsdId5ExbzhhfR+MDzibz1aQcgRUfF7hIgAvdsR4k1UzJtOiMgrXfvwe0g6ouKAECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMS+dEPF63q7d+pLEPwC3/6B6O6LiBSFEBOjdjhBvomJecyHieGl/QqB6D4FoDAGExHCtTkVINbqYxh9eC5iSVC0E+QAAAABJRU5ErkJggg==" width="90" height="90">
<?php } ?>

<?php if(get_post_type($id) == 'book') { ?>

<img class="uci-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAHfUlEQVR4Xu1di3HbOBAFyALiDs5XQSiqgCgVxB3EriBOBXEqiFNB7A7sCmIXQImp4Hwd2AUAe/M0Sx1Nk+KCH5n0LGc8mZFAYLEPu/sAZPSs0WdSHrCTskaNMQrIxBaBAjJXQJbL5QkR/bDWHtfM4a74jIgejDH4M9773Fr7uNls7ic2707mLBaLD0R0FEVRwh0cV/yxquk4d859zfN856N9g4sjJE3TfxrAEE2OiB6ttTkRASQY+SfP81z08oEbJUmSxHH8nogSa23C/x71MCPPsmwheV8MyHK5JEmHIW0YJKycO+fc/WsBxAB8MMasiGhlre3j/FoXZFkm8rWoEUYYA5Cq5Zzubrz312ODAxCiKPpsjDnpE/nSBTg6IM65j1VjOLcWq2ubTxHyxph3UsPLtchae+Gcu83z/DH0/br2SZIcxXH8mYjOO4LwhJTLfRc14RG1sjpeHMe/y5+NDoh0gMKoJElWURSBEAAg5GakiNYHac0Yc+W9/5nn+ZYshD5JkhxHUfTFGHMqTUdEBCICR+fe+wdpUS5sq2YUqb86pyzpAPucx2njBLlbAhARXXrvv0sjBhERRdE3a+15G4gMwJ33/maIdDlLQMpOYuchnwOgT00OZCJwkWXZz31OXi6XX4jooiUibokINQsgDJIWZx0hTQ5lcE6NMcj1fzW0AzM7q6YxZkw/EHV17xHRv8YYRNrV0CCUx5t9hDSBk6YpgMFKfwEMR8tZlmU3eJ/bYvP6grYyEBfr9fqqLX0N8f2bBaRwTpqmiJaLBsZ2jh00f1/1J5gRgLgcwtHSPt48IHAE01as8MYaU3HYrXPudMzU1ARQb0A4bxfUsO686tnYQ7As6WqrtuNoQZ1ofIjo66GjYl8NaahnoPEFpd+Sii3tZfr5W8rR8c5rAsI2r+I4Ru2objqfnHMnofuGrotDGiEtiweby4+g25YjAweHQec3rw1ICZRnO2Ln3GKIfURfgEKPmkBQvPd/2zRNwWC+hRowBUBgc9dcHTrf0PahgKB/IvoOQKrH6tdZloFqPnvmMvE5LZTlcgmCggPO7YPDVSt1tLRd6Erq237udlXtV0D6roiG96ULRQEZCYCuKV4BUUDG9YA0NYxrxcvepXZphBwIGQWEHT0n2lu3j1KWNVLEaIRohMj+n9FIC3DXrXQljm2H0l72gAIy09SgEXIgD2iEaISIlpp0oejGUOTO/o0UkJlGrkZI/8Uv6kEjRCNEN4b7QkUjRCNEI0QjpMYD0tQgqsQDNpLapSxrQKdrhGiE/O8BaQgeaAHq8bsCErbUpP7SGhLm186tFRDdh+g+RFmWsixlWV2LiNYQrSFaQ7SGaA3RGqI1JNAD0uIZ2G3v5lK7dKfe29WyDhQQZVnKspRlKctSliWrGC9baQ3RGqI1RGuI1hCtIVpDAj0gLZ6B3fZuLrVLd+q9XS3rQAFRlqUsS1mWsixlWbKKoTv1nQekxbOrY7u+J7VLWVZXDwe+p4Aoy1KWNSmWBWW1BoMeSzpNOy1DInoa4xenpakhMOM8a46fYrfWvqtoGBb6Wk2/CP5Mv6Tph9UGqyF9JshgboGz1j700TQcCpCSdiHEIqGTBUfXisJ0mfvggKRp+rBH7aaLjXXvQHjyjoUnoWvYKgLWBRCIhMVxDNVOaF9tRcqGmkBdP0T0Z71e147RJ0IgvYrfiX8/pvHlvlnXsBDquq0bVwpIkiSfoigqBMha5TiGmiPA8N6fN6k1dAakzUDI4pXbsETeduIsX4oUgHTQpCm1dwiWzytEJ3f1ax8gLNVXiEcGqT8UxrBUErJDuTY+QEqvbHBXeYzRAGkDrPw9UgbAgRAlgwWgRLqG3A8EwSCfd1cHCICI4xiKD+IaANk81DPUNRaKhHZha8oMmbckwsW/Stp3YMn7LCyDvA5H4q9NIRSRUnV63WfV4Z9ALFCvvPd3Y7A/yXzRZhIRIjWWAYJ0BvQNO6W6SupByoNc3mRUqmcFSCXNQVIbip07vQ0BsIiEG+fc5ZRAKNs9W0CKSbBEEyT0AE5TSoNUHsQjAcSgCp6CRRDUZPaAlIGJ4xjahNWIuXbOgWZOGohiHm8GkNKEsD/aikYiagrVz6Bl+oqN3xwgr+jLQYZ+AUj1SISIrtbr9dkgo2knez2Qpukva+1OgA2b0M6yeYfyNR+ffO8rKszCxdBWP9ixSaiPtrJ5rC+LHWnbJiy0/8Has+giBCM77ZxxMhBF0SZUPHOwCcg6gkLp8U56NY5j7HAnC4oxJnfOQZ40iD3xgoMa6KgnujKfN7YCGKut9GqV3xtjTvvuinsat+/1IFCmDgYfXEKceLdf2gEyohM7d52m6aW1FgrWuwc1xXt/1na6yie9KJrPagYR/Vyv19hUTvKZNCDwWJqmuFWsu4NBisXqethsNvdou1gsPvCxP5jLi5PefRdFU0Fn8oDwUQluEXtdjPFFEfJ0UA06NFCTBwQO4VpQd0wi9ddsjlNmAUiJeKyiKMI1sugyC5dO3vuLtnojRfUQ7WYFSAmYpLgfL18LF9etuHzy3t9M9ch9H7D/AVQIb4UXpiroAAAAAElFTkSuQmCC" width="90" height="90">
<?php } ?>

<?php if(get_post_type($id) == 'study') { ?>

<img class="uci-icon" src="data:image/png;base64,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" width="90" height="90">
<?php } ?>

<?php if(get_post_type($id) == 'audio') { ?>

<img class="uci-icon" src="data:image/png;base64,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" width="90" height="90">
<?php } ?>

<?php if(get_post_type($id) == 'speech') { ?>

<img class="uci-icon" src="data:image/png;base64,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" width="90" height="90">
<?php } ?>

<?php if(get_post_type($id) == 'video') { ?>

<img class="uci-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAC60lEQVR4Xu2ZS24DMQzFkjPl/keYM7XbJos+EJZlDcJu8+APKY1t9PnwbxSB56jVuJiHQoYVgUIUMozAsOXYIQoZRmDYcuyQuwl5vV4/w9Z86+Vc1/VvE8QOUUitf4XU8lweTSHLCGsHKBeSBvz8xKV87Xb3j0b3R/P4DEmA6QL2I6ydge6P5hUCfVHANK8QhUACw+K04mneDoHCKWCax0Lg+h/pEkDHO51ffSgnHgqBhhUCge2OK2Q3YTj+OCHpG0gPMcjjeJzuj+bxGaKQ939HVPNQCOw5WvE0rxCFQALD4rTiad4OgcIpYJrHQuD6fal/AEuXAIXAChv3DoHrt0PsEFoyLD+uQ9I3kB5iDMf5NN0fzeMzRCG+1M+3xZ8V0IqneTsE6qaAaV4hCoEEhsVpxdM87hDKJ10C6Hin8+OuvRSIQt6JJR52CKwwOwQC2x0fJyS1HD3EdgOsHp/uj+bxJ0shvtSri3xpPFrxNG+HQD0UMM0rRCGQwLA4rXiaxx0yjM/tlpMuRQppVqqQZuBpOoUkQs2/lwtJA9JDrJnH8nR0fzSPzxCF+FJfrurKAWjF07wdAm1RwDSvEIVAAsPitOJpHncI5ZMuAXS80/lx/6CiQBTi/9RpzaC8HYJw7Q+PE5I+QfQQ24+wdga6P5rHh7pCfKnXlvjiaLTiad4OgYIoYJpXiEIggWFxWvE0jzuE8kmXADre6fy4ay8FohBf6rRmUN4OQbj2h8cJSZ8geojtR1g7A90fzeNDXSG+1GtLfHE0WvE0b4dAQRQwzStEIZDAsDiteJrHHUL5pEsAHe90fty1lwJRiC91WjMob4cgXPvD44SkTxA9xPYjrJ2B7o/m8aGuEF/qtSW+OBqteJq3Q6AgCpjmFaIQSGBYnFY8zeMOGcbndstJlyKFNCtVSDPwNJ1CEqHm35eFNK/366eLZ8jXE2oGoJBm4Gk6hSRCzb8rpBl4mk4hiVDz7wppBp6mU0gi1Pz7L3BC8JL583XhAAAAAElFTkSuQmCC" width="90" height="90">
<?php } ?>

<?php if(get_post_type($id) == 'media') { ?>

<img class="uci-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAFnklEQVR4Xu2d8ZmVOBTFEyhg7WDHChaTAlYr0A5WK9ixgh0r0A5WK3CtwGcBRKzAsQLHAkL2u7sz375hgHPJXnjAXP49IbycHyeQBHjWMDfv/bOU0mtr7Rlzl/tSrIkxvmya5iDRYMutxDn3VWEMutXUdf2I6+VYOTYQ732SOOBe66jrmu2lAlngLDg5EKkfsIBXsxyi22NI+cGO2Vw/YBa3Fqh0Lj8USCY8BZJp3Fy7KZC5nM2sd8Jd56RxinZZ8wOhI7DHKQpkGSCGexemQBRIpgMr2w1d1JE+1BxNSCZoZDjSFUim8UO7IcORrkAUiLADK6sOJQDpmhBhoMhwpCsQBSLswMqqQwlAuiZEGCgyHOmbBlJVVVUUxVNr7WNjzANjTHXUIHq44MoYc4gxfmqaphH2vrc6ZDjSNwnEe/+bMea8AwD5TWBeST0FouMQcr+qHpRl+d4YQ4nI2lJKb0MIL7J2ZuyEEoD0zSTkunv6aK2lrun/brQW8aRpGurSRDdkONI3AaSqqrOiKD4Lwbhp86Gu6yeiNIwxyHCkbwKI9/4j6qZSSt+MMZdHDTqz1v48ZnhK6VUI4UISCjIc6asH4px7bq39c8S0dzHGi6ZpjmH8U7yqqsdlWdLF/2nf/imlq7ZtH0p2XchwpG8ByOCjqimlFyGEt+gMd85dWGv/GIDyMoTwBtXB1ZHhSF81kOsznLqrO9vU7sZ7/9dAUtjr2hwoyHCkrxqIc+6Ntfb37o+k60XbttWUroZuDMqy/NrX4BgjdVt3ujwOgG4ZZDjSVw3Ee/+5b/A3NR03jXTONdbaX7qNvr4FFnltABmO9LUDoXHCTz0GPsqZCnHOHay1vyqQnOz/e5dE3UyVUqI5Khqd00tBVyGE4zkrdu0KhG3VMgUVyDI+s4/inPveN9qPMWZ1gX0HRtcIpK/6GsJ2mlGQ3oU0xtDE5K2N7thCCGLvRyLDkX6fgAxNv7yr6/o5gymrCDIc6fcCyNj0i+QtL5mJDEf67oGMzRSnlD6FELLXVvQawuo0bhcamymWvJjfHBUlAOm7TgiYVBSfetcuayQxYGJy8lwYN5woAUjfZUJo7b0oCpq2713unaOr0i5r5JT13tN4g8Ydd7aUkuj6R/cAKAFI311CnHPn1trXAw37UNd1Lyhul4TKIcORvisg9GRKWZY0Zd+3/Ygxnk1ZQ0Hm623v+EWcrhv0ZErvNIj0AHDop6AEIH03CRlaXaQG5i5oaUJyHPhv3aR3eTal9CV3/STn56AEIH0XCRlLx5y3uHoNGTh9htbejTGiM7mcxKAEIH0XCek28qZR3Oe2OEZzyyDDkb5rIEvdWR2biAxHugLhnvrMcshwpCsQptHcYshwpCsQrtPMcshwpO8CCK17dF9XsNZexhjP554q6RqIDEf6LoAwT95FiiHDka5AhDEhw5GuQBSIsAMrqw4lAOmaEGGgyHCkbx4IeEN39hVCvcvqOACeLhF/EA4FCiUA6XtICL1pO/QeogLhfocWnWlcXRPScSo3glzDUTkFokBGzxF0giJdryEoghN1ZDjS9wCEHv+hjwL0bQfpb5kgPshwpG8eCDJoaR0ZjnQFIkwMGY50BaJAhB1YWXUoAUjXhAgDRYYjXYEoEGEHVlYdSgDSNSHCQJHhSFcgCkTYgZVVhxKAdE2IMFBkONIViAIRdmBl1aEEIF0TIgwUGY50BaJAhB1YWXUoAUjXhAgDRYYjXRyIcPs2X133KRwFcmKkiwNxzl2i/+k4sScnO3zfRwuWSMizlBL9HcSdb6qfzIkVHJhgtG1Lb3Dd+qb87EBQ23N/AKp3q3quH+z/U0fG5P4AVO9W9Vw/FMhMxBXITMbmVrs6ILkN2et+3LcFZuuy9mpsbrsWB6LjlGFUUz6uJpkQHaf0MBkapwzh+xvWHgG/ykjRfQAAAABJRU5ErkJggg==" width="90" height="90">
<?php } ?>

  <!-- Author and source   -->
  <?php
    // Source Meta
    $source = get_field('source');
    $article_author = get_field('article_author');
    if($article_author)
  ?>

  <div class="source-bold"><?php echo "$article_author";?></div><br>
  <div class="source"><?php echo "$source";?></div><br>


  <!-- Category Link   -->
  <div class="media-loop-category"><?php

        // Display the category
          $categorylist = the_category( ', ' );
            echo "$categorylist";?>

  	</div>

      <div class="search-tags">
        <?php the_tags( 'Tags: ',', ' ); ?>
      </div>



 </div>
<?php } ?>