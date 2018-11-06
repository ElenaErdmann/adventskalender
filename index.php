<!-- 
 __    __       ___       __    __       ___          
|  |  |  |     /   \     |  |  |  |     /   \         
|  |__|  |    /  ^  \    |  |__|  |    /  ^  \        
|   __   |   /  /_\  \   |   __   |   /  /_\  \       
|  |  |  |  /  _____  \  |  |  |  |  /  _____  \   __ 
|__|  |__| /__/     \__\ |__|  |__| /__/     \__\ (_ )
                                                   |/ 
.__   __.  _______ .______       _______   __         
|  \ |  | |   ____||   _  \     |       \ |  |        
|   \|  | |  |__   |  |_)  |    |  .--.  ||  |        
|  . `  | |   __|  |      /     |  |  |  ||  |        
|  |\   | |  |____ |  |\  \----.|  '--'  ||__|        
|__| \__| |_______|| _| `._____||_______/ (__)      
 -->
<?php 
//SHARING==================================================
$site_name="Journocode Advent Calendar 2017";
$title="Advent Calendar with data-driven treats";
$description="Soon it's Christmas! Count down the days with the data-driven Advent Calendar from Journocode and discover a new data-driven surprise every day. Happy holidays to all of you!";
$share_text="Count down the days till Christmas with the #ddj Advent Calendar from @journocode and discover a surprise every day.";
$share_text_facebook="Count down the days till Christmas with the data-driven Advent Calendar from @Journocode and discover a surprise every day.";
//NOTIFICATION
$notification_text="Soon it's Christmas! Count down the days together with your friends from  <a target='_blank' href='https://www.journocode.com'>Journocode</a> and discover a new data-driven surprise every day.<br>Happy holidays to all of you!";
//========================================================

$base_url="https://advent18.journocode.com";
date_default_timezone_set("Europe/Berlin");
$date1 = new DateTime('NOW');
$date2 = new DateTime("2017-12-01");
$day_delta = $date2->diff($date1)->format("%r%a");
$day_delta = ($day_delta>24 ? 24 : $day_delta) +1;
$day_delta = '#day'.(string)$day_delta
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta property="jc:door_diff" content="<?= $door_diff ?>">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Pagekit">
    <link rel="shortcut icon" href="https://advent18.journocode.com/assets/ico/favi.ico">
    <meta property="og:site_name" content="<?=$site_name?>">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="<?=$description?>">
    <meta property="og:url" content="<?= $base_url ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= $base_url ?>/share.png">
    <meta property="fb:app_id" content="1593595690933146" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@journocode">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$description?>">
    <meta name="twitter:image" content="<?= $base_url ?>/share.png">
    <title>
      <?=$title?>
    </title>
    <link href="dist/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-57x57.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-60x60.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-72x72.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-76x76.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-114x114.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-120x120.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-144x144.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-152x152.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.journocode.com/wp-content/uploads/fbrfg/apple-touch-icon-180x180.png?v=gAAQ8zKY9d">
    <link rel="icon" type="image/png" href="https://www.journocode.com/wp-content/uploads/fbrfg/favicon-32x32.png?v=gAAQ8zKY9d"
          sizes="32x32">
    <link rel="icon" type="image/png" href="https://www.journocode.com/wp-content/uploads/fbrfg/favicon-194x194.png?v=gAAQ8zKY9d"
          sizes="194x194">
    <link rel="icon" type="image/png" href="https://www.journocode.com/wp-content/uploads/fbrfg/favicon-96x96.png?v=gAAQ8zKY9d"
          sizes="96x96">
    <link rel="icon" type="image/png" href="https://www.journocode.com/wp-content/uploads/fbrfg/android-chrome-192x192.png?v=gAAQ8zKY9d"
          sizes="192x192">
    <link rel="icon" type="image/png" href="https://www.journocode.com/wp-content/uploads/fbrfg/favicon-16x16.png?v=gAAQ8zKY9d"
          sizes="16x16">
    <link rel="manifest" href="https://www.journocode.com/wp-content/uploads/fbrfg/manifest.json?v=gAAQ8zKY9d">
    <link rel="mask-icon" href="https://www.journocode.com/wp-content/uploads/fbrfg/safari-pinned-tab.svg?v=gAAQ8zKY9d"
          color="#5bbad5">
    <link rel="shortcut icon" href="https://advent18.journocode.com/assets/ico/fav.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="https://www.journocode.com/wp-content/uploads/fbrfg/mstile-144x144.png?v=gAAQ8zKY9d">
    <meta name="msapplication-config" content="https://www.journocode.com/wp-content/uploads/fbrfg/browserconfig.xml?v=gAAQ8zKY9d">
    <meta name="theme-color" content="#ffffff">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110082869-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110082869-1');
</script>

  </head>
  <body class="body-bg" show-notification>
     
    <div id="hidden-text-target" style="display: none;">
      <?php echo htmlspecialchars($share_text); ?>
    </div>
    <div id="hidden-notification-target" style="display: none;">
      <?php echo htmlspecialchars($notification_text); ?>
    </div>
    <svg style="position: absolute;" width="0" height="0" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
      <defs>
        <filter id="kugel-a" x="-13.8%" y="-3.7%" filterUnits="objectBoundingBox">
          <feOffset dy="15" in="SourceAlpha" result="shadowOffsetOuter1" />
          <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="6" />
          <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
          <feMerge>
            <feMergeNode in="shadowMatrixOuter1" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
        <path id="kugel-c" d="M104 49h76.8v30.72H104z" />
      </defs>
      <g id="kugel" fill="none" fill-rule="evenodd" filter="url(#kugel-a)" transform="translate(26)">
        <g id="ball-group" transform="translate(0 82)">
          <!--#08AAAE-->
          <ellipse fill="#08AAAE" style="fill: var(--primary-color, #D0CDD1);" id="kugel-b" cx="142.87" cy="142.62" rx="142.87" ry="142.62"
                   />
          <ellipse cx="142.87" cy="142.62" stroke="#282828" stroke-width="14" rx="149.87" ry="149.62" />
          <path id="ball-shine" style="fill: var(--secondary-color,#BDBBBD)" fill="#28CDD1" d="M177.4 267c59.83 0 108.33-56.86 108.33-127S237.23 13 177.4 13s45.46 52.35 45.46 122.5c0 70.13-105.3 131.5-45.47 131.5z"
                />
          <!--#28CDD1-->
        </g>
        <use fill="#9B9B9B" href="#kugel-c" />
        <path stroke="#282828" stroke-width="14" d="M111 56h62.8v16.72H111z" />
        <rect width="18.43" height="58.38" x="134" fill="#282828" rx="9.22" />
      </g>
    </svg>
    <div class="uk-offcanvas-content">
      <div class="ac-nav-container">
        <div class="uk-container fixed-bottom-container">
        <a href='<?= $day_delta ?>' id="scroll-to" class="uk-button uk-button-default uk-border-rounded ac-scroll-to" uk-scroll>Today
            </a>
          <button uk-toggle="target: #offcanvas-usage" id="nav-button" class="ac-nav-button uk-margin-small-bottom uk-border-circle">
            <span class="ac-nav-icon" uk-icon="icon: grid; ratio: 1.7">
            </span>
          </button>
        </div>
      </div> 
      <div id="offcanvas-usage" class="" uk-offcanvas>
        <div class="uk-offcanvas-bar">
          <div id="nav-Calendar" uk-scrollspy-nav="closest: div ; cls:active; scroll: true;overflow:false" class="uk-grid-collapse ac-cal-nav uk-child-width-1-4 uk-height-1-1 uk-text-center" uk-grid>
            <div class="ac-cal-nav-item" data-menuanchor="day1">

              <a href="#day1">
                <div class="uk-card uk-card-default uk-card-body">1
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day2">
              <a href="#day2">
                <div class="uk-card uk-card-default uk-card-body">2
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day3">
              <a href="#day3">
                <div class="uk-card uk-card-default uk-card-body">3
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day4">
              <a href="#day4">
                <div class="uk-card uk-card-default uk-card-body">4
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day5">
              <a href="#day5">
                <div class="uk-card uk-card-default uk-card-body">5
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day6">
              <a href="#day6">
                <div class="uk-card uk-card-default uk-card-body">6
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day7">
              <a href="#day7">
                <div class="uk-card uk-card-default uk-card-body">7
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day8">
              <a href="#day8">
                <div class="uk-card uk-card-default uk-card-body">8
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day9">
              <a href="#day9">
                <div class="uk-card uk-card-default uk-card-body">9
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day10">
              <a href="#day10">
                <div class="uk-card uk-card-default uk-card-body">10
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day11">
              <a href="#day11">
                <div class="uk-card uk-card-default uk-card-body">11
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day12">
              <a href="#day12">
                <div class="uk-card uk-card-default uk-card-body">12
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day13">
              <a href="#day13">
                <div class="uk-card uk-card-default uk-card-body">13
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day14">
              <a href="#day14">
                <div class="uk-card uk-card-default uk-card-body">14
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day15">
              <a href="#day15">
                <div class="uk-card uk-card-default uk-card-body">15
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day16">
              <a href="#day16">
                <div class="uk-card uk-card-default uk-card-body">16
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day17">
              <a href="#day17">
                <div class="uk-card uk-card-default uk-card-body">17
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day18">
              <a href="#day18">
                <div class="uk-card uk-card-default uk-card-body">18
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day19">
              <a href="#day19">
                <div class="uk-card uk-card-default uk-card-body">19
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day20">
              <a href="#day20">
                <div class="uk-card uk-card-default uk-card-body">20
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day21">
              <a href="#day21">
                <div class="uk-card uk-card-default uk-card-body">21
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day22">
              <a href="#day22">
                <div class="uk-card uk-card-default uk-card-body">22
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day23">
              <a href="#day23">
                <div class="uk-card uk-card-default uk-card-body">23
                </div>
              </a>
            </div>
            <div class="ac-cal-nav-item" data-menuanchor="day24">
              <a href="#day24">
                <div class="uk-card uk-card-default uk-card-body">24
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="fullpage" uk-scrollspy="target: .tree-middle; cls:active; repeat: true;hidden:false;">
        <div class="section">
          <div class="tree-start" id="tree-start">            
            <div class="uk-container uk-inline uk-height-viewport">
              <!--<img src="assets/svg/tree-start.svg">-->
              <div class="uk-clearfix" uk-sticky="top: #tree-start;animation:uk-animation-slide-top;">
                <div class="ac-share-container uk-float-right" >
                  <a href="#" class="twitter-share">
                    <svg class="tw-icon" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 81 96"  width="57" height="79" xmlns:xlink="https://www.w3.org/1999/xlink">
                      <defs>
                        <filter id="inactive-a" width="156.1%" height="132.9%" x="-28.1%" y="-10.1%" filterUnits="objectBoundingBox">
                          <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1"/>
                          <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="3"/>
                          <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.491111866 0"/>
                          <feMerge>
                            <feMergeNode in="shadowMatrixOuter1"/>
                            <feMergeNode in="SourceGraphic"/>
                          </feMerge>
                        </filter>
                        <path id="inactive-b" d="M0 0h13.87v9.45H0z"/>
                        <path id="inactive-c" class="icon-bg" d="M28.46 56.68c15.7 0 28.45-12.7 28.45-28.34S44.2 0 28.5 0C12.74 0 0 12.7 0 28.34 0 44 12.74 56.68 28.46 56.68z"/>
                      </defs>
<g fill="none" fill-rule="evenodd" filter="url(#inactive-a)" transform="translate(12 4)">
                                                                                        <rect width="2.85" height="12.28" x="27.03" fill="#4A4A4A" rx="1.42"/>
<g stroke-linejoin="round" transform="translate(21.342 11.809)">
                                                               <use fill="#FFFBC3" xlink:href="#inactive-b"/>
                                                                                                           <path stroke="#1A1A1A" stroke-width="5" d="M-2.5-2.5h18.87v14.45H-2.5z"/>
</g>
<path fill="#E1DC9B" d="M28.47 11.8h7.13v9.46h-7.13z"/>
                                                     <g transform="translate(0 21.256)">
                                                                                       <use fill="#50CBE3" xlink:href="#inactive-c" class="icon-bg"/>
                        <path stroke="#1C1C1C" stroke-width="6" d="M28.46 59.68C11.1 59.68-3 45.65-3 28.34-3 11.04 11.1-3 28.46-3 45.83-3 59.9 11.03 59.9 28.34c0 17.3-14.07 31.34-31.44 31.34z"/>
                        <path fill="#FFF" style="pointer-events: none;" fill-rule="nonzero" d="M43 21.53c-1.07.48-2.2.8-3.42.94 1.23-.74 2.17-1.9 2.62-3.3-1.17.7-2.45 1.2-3.78 1.45-1.08-1.15-2.63-1.88-4.34-1.88-3.3 0-5.95 2.67-5.95 5.95 0 .43.05.9.15 1.32-4.94-.25-9.33-2.62-12.26-6.22-.5.9-.8 1.9-.8 3 0 2.07 1.05 3.9 2.64 4.96-.94-.03-1.87-.3-2.7-.75v.1c0 2.9 2.06 5.3 4.78 5.84-.5.14-1.03.2-1.57.2-.38 0-.76-.03-1.12-.1.76 2.37 2.96 4.1 5.56 4.14-2 1.6-4.6 2.54-7.35 2.54-.48 0-.95-.02-1.42-.07 2.64 1.7 5.77 2.67 9.13 2.67 10.94 0 16.93-9.04 16.93-16.9 0-.26 0-.52-.03-.77 1.16-.85 2.17-1.9 2.97-3.1z"/>
                        </g>
                      </g>
                    </svg> 
                  </a>
                <a href="#" class="facebook-share">
                  <svg class="fb-icon" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 81 96"  width="57" height="79" xmlns:xlink="https://www.w3.org/1999/xlink">
                    <defs>
                      <filter id="inactive-a" width="156.1%" height="132.9%" x="-28.1%" y="-10.1%" filterUnits="objectBoundingBox">
                        <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1"/>
                        <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="3"/>
                        <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.491111866 0"/>
                        <feMerge>
                          <feMergeNode in="shadowMatrixOuter1"/>
                          <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                      </filter>
                      <path id="inactive-b" d="M0 0h13.87v9.45H0z"/>
                      <path id="inactive-c" class="icon-bg" d="M28.46 56.68c15.7 0 28.45-12.7 28.45-28.34S44.2 0 28.5 0C12.74 0 0 12.7 0 28.34 0 44 12.74 56.68 28.46 56.68z"/>
</defs>
<g fill="none" fill-rule="evenodd" filter="url(#inactive-a)" transform="translate(12 4)">
                                                                                        <rect width="2.85" height="12.28" x="27.03" fill="#4A4A4A" rx="1.42"/>
<g stroke-linejoin="round" transform="translate(21.342 11.809)">
                                                               <use fill="#FFFBC3" xlink:href="#inactive-b"/>
                                                                                                           <path stroke="#1A1A1A" stroke-width="5" d="M-2.5-2.5h18.87v14.45H-2.5z"/>
</g>
<path fill="#E1DC9B" d="M28.47 11.8h7.13v9.46h-7.13z"/>
                                                     <g transform="translate(0 21.256)">
                                                                                       <use fill="#4A90E2" xlink:href="#inactive-c" class="icon-bg"/>
                      <path stroke="#1C1C1C" stroke-width="6" d="M28.46 59.68C11.1 59.68-3 45.65-3 28.34-3 11.04 11.1-3 28.46-3 45.83-3 59.9 11.03 59.9 28.34c0 17.3-14.07 31.34-31.44 31.34z"/>
                      <path fill="#FFF" style="pointer-events: none;" fill-rule="nonzero" d="M31.62 46.4V29.94h5.52l.83-6.43h-6.35v-4.1c0-1.83.52-3.1 3.18-3.1h3.4v-5.74c-.6-.08-2.6-.26-4.95-.26-4.9 0-8.25 3-8.25 8.5v4.72h-5.53v6.44H25V46.4h6.62z"/>
                      </g>
                    </g>
                  </svg>
                </a>
            </div>
          </div>
          <h1 class="uk-margin-top ac-tree-heading">Data-driven Advent Calendar
          </h1>
          <noscript>
            <div class="uk-alert-danger uk-padding-small" uk-alert>
              <a class="uk-alert-close" uk-close>
              </a>
              <p>Ooops! Looks like you have JavaScript disabled. Please enable it and refresh this site.
              </p>
            </div>
          </noscript>
          <ul class="lightrope uk-position-bottom push-down"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
        </div>

    <div class="tree-bg">
    <div class="section tree-middle" id="day1" >

      <div class="ac-ball  uk-inline">
        <a href="door/1/" class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-svg" id="ball1">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">A tips for those starting out in data journalism
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day2">
      <div class="ac-ball uk-inline">
        <a href="door/2/"  class=" ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball2">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Journocode Origins - The Squirrel Awakens
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day3">
      <div class="ac-ball uk-inline">
        <a href="door/3/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball3">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Speed Dat(a)ing: This is Africa Check
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day4">
      <div class="ac-ball uk-inline">
        <a href="door/4/" id="day4" class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball4">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Nerd Word Puzzle
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day5" >
      <div class="ac-ball uk-inline">
        <a href="door/5/" class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball5">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Why Data Journalism can be sexy
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day6">
      <div class="ac-ball uk-inline">
        <a href="door/6/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball6">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Squirrel Talk with DataViz designer Nadieh Bremer
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day7">
      <div class="ac-ball uk-inline">
        <a href="door/7/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball7">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Data Visualization in the Newsroom
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day8">
      <div class="ac-ball uk-inline">
        <a href="door/8/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball8">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Advent Video
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day9">
      <div class="ac-ball uk-inline">
        <a href="door/9/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball9">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Germany talks
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day10">
      <div class="ac-ball uk-inline">
        <a href="door/10/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball10">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Machine Learning for Bot Detection
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day11">
      <div class="ac-ball uk-inline">
        <a href="door/11/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball11">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Talk with DataViz designer Lisa Charlotte Rost
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day12">
      <div class="ac-ball uk-inline">
        <a href="door/12/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball12">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Neural Networks for DataVis
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day13">
      <div class="ac-ball uk-inline">
        <a href="door/13/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball13">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Tell the story behind the numbers with StoryLineJS
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day14">
      <div class="ac-ball uk-inline">
        <a href="door/14/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball14">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">The Perfect Data Journalist

          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day15">
      <div class="ac-ball uk-inline">
        <a href="door/15/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball15">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">A quick history of data-driven journalism
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day16">
      <div class="ac-ball uk-inline">
        <a href="door/16/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball16">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Behind the screens of Cassini’s Last Dance
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day17">
      <div class="ac-ball uk-inline">
        <a href="door/17/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball17">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Algorithmic Accountability: the next step for ddj
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day18">
      <div class="ac-ball uk-inline">
        <a href="door/18/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball18">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">What makes </br> a winning data journalism project?
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day19">
      <div class="ac-ball uk-inline">
        <a href="door/19/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball19">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Scraping for Everyone
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day20">
      <div class="ac-ball uk-inline">
        <a href="door/20/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball20">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">What we found out about German DDJ
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day21">
      <div class="ac-ball uk-inline">
        <a href="door/21/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball21">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Data Jokes Listicle
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day22">
      <div class="ac-ball uk-inline">
        <a href="door/22/" class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball22">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Why media outlets should invest in ddj
          </div>
        </a>
      </div>
    </div>
    <div class="section tree-middle" id="day23">
      <div class="ac-ball uk-inline">
        <a href="door/23/"  class="ac-inactive uk-position-center">
          <svg viewBox="0 0 338 408" preserveAspectRatio="xMidYMid meet" width="95%" class="uk-align-center uk-margin-remove-bottom ball-deacticated ball-svg"
               id="ball23">
            <use xlink:href="#kugel" href="#kugel" />
          </svg>
          <div id="day23-sticky"class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Talk with Data Journalist John Burn-Murdoch
          </div>
        </a>
      </div>
    </div>
    </div>
   

 
    <div class="section tree-end" id="day24">
      <div class="ac-present uk-height-viewport uk-inline">
              <ul class="lightrope"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
        <a href="door/24/"  class="ac-present-a ac-inactive uk-position-bottom">
          <svg class="ac-present-svg " xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" viewBox="-15 0 482 436"
               preserveAspectRatio="xMidYMid meet" width="100%">
            <defs>
              <path id="inactiv-a" d="M0 0h288.5v218.2H0z" />
              <path id="inactiv-c" d="M0 0h328v55.2H0z" />
              <path id="inactiv-e" d="M.2.3h88.6v55.2H.2z" />
              <path id="inactiv-g" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-i" d="M0 0h82.6v14H0z" />
              <path id="inactiv-k" d="M0 0h22.4v14H0z" />
              <path id="inactiv-m" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-o" d="M0 0h82.6v14H0z" />
              <path id="inactiv-q" d="M0 0h22.4v14H0z" />
              <path id="inactiv-s" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-u" d="M0 0h82.6v14H0z" />
              <path id="inactiv-w" d="M0 0h22.4v14H0z" />
              <path id="inactiv-y" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-A" d="M0 0h82.6v14H0z" />
              <path id="inactiv-C" d="M0 0h22.4v14H0z" />
              <path id="inactiv-E" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-G" d="M0 0h82.6v14H0z" />
              <path id="inactiv-I" d="M0 0h22.4v14H0z" />
              <path id="inactiv-K" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-M" d="M0 0h82.6v14H0z" />
              <path id="inactiv-O" d="M0 0h22.4v14H0z" />
              <path id="inactiv-Q" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-S" d="M0 0h82.6v14H0z" />
              <path id="inactiv-U" d="M0 0h22.4v14H0z" />
              <path id="inactiv-W" d="M0 0h72.7v55.3H0z" />
              <path id="inactiv-Y" d="M0 0h82.6v14H0z" />
              <path id="inactiv-aa" d="M0 0h22.4v14H0z" />
            </defs>
            <g fill="none" fill-rule="evenodd">
              <g transform="translate(-8 4) translate(52) translate(28)">
                <ellipse cx="143.5" cy="67.1" fill="#282828" rx="19.4" ry="15.4" />
                <path fill="#E64C5F" fill-rule="nonzero" stroke="#282828" stroke-width="7" d="M99.6 52.2C82 30.7 63 19.8 43.3 23.4 27.6 26.4 22.5 33 23 44.2c.2 5.7 2 12.2 4.6 18.8.6 1.4 1.2 2.8 2 4.2h81c-3.5-5.2-7-10.2-11-15zM16.3 90L13 84.4l-2.2-3.7c-1.4-2.8-3-5.8-4.2-9C3 62.7.6 53.7.2 45c-.8-22.3 12-39 39-44 16-3 31.5.4 46 8.7 11.6 6.6 22.2 16.2 32 28 6.4 8 12 16.3 17 24.6l4.5 8 1.6 3.4 7.5 16.2H16.3z"
                      />
                <path fill="#E64C5F" fill-rule="nonzero" stroke="#282828" stroke-width="7" d="M139.7 90l7.5-16.3c.3-.6 1-1.7 1.7-3.3 1-2.4 2-5.2 4-8 5-8.4 10.2-16.8 17-24.7 9.4-11.8 20-21.4 32-28C216.2 1.4 232-2 248 1c27 5 40 22 39 44-.3 9-2.7 18-6.3 27l-4.4 9-2 3.8L271 90H139.7zM258 67l2-4.2c2.6-6.6 4.3-13 4.6-18.8.4-11.3-4.7-17.8-20.4-20.8-19.5-3.6-38.6 7.3-56.2 28.8-4 4.8-7.6 9.8-11 15h81z"
                      />
              </g>
              <g transform="translate(-8 4) translate(52) translate(0 92) translate(21.086 57.22)">
                <mask id="inactiv-b" fill="#fff">
                  <use href="#inactiv-a" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-a" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H292v225.2H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-b)" d="M0 6.5h288.5V26H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-b)" d="M0 6.5h145v218.2H0z" />
              </g>
              <g transform="translate(-8 4) translate(52) translate(0 92) translate(0 1.13)">
                <mask id="inactiv-d" fill="#fff">
                  <use href="#inactiv-c" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-c" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h335v62.2h-335z" />
                <path fill="#ECAE29" mask="url(#inactiv-d)" d="M0 28.8h328V84H0z" />
              </g>
              <g transform="translate(-8 4) translate(52) translate(0 92) translate(119.486 .784)">
                <mask id="inactiv-f" fill="#fff">
                  <use href="#inactiv-e" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-e" />
                <path stroke="#282828" stroke-width="7" d="M-3.3-3.2h95.6V59H-3.3z" />
                <path fill="#BC3647" mask="url(#inactiv-f)" d="M-8.2 29H117v26.5H-8z" />
              </g>
              <g transform="translate(-8 4) translate(0 357) translate(5.313 14.51)">
                <mask id="inactiv-h" fill="#fff">
                  <use href="#inactiv-g" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-g" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-h)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-h)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(0 357) translate(0 .286)">
                <mask id="inactiv-j" fill="#fff">
                  <use href="#inactiv-i" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-i" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-j)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(0 357) translate(30.106 .199)">
                <mask id="inactiv-l" fill="#fff">
                  <use href="#inactiv-k" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-k" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-l)" d="M-2 7.4h31.5V14H-2z" />
              </g>
              <g transform="translate(-8 4) translate(245 357) translate(5.313 14.51)">
                <mask id="inactiv-n" fill="#fff">
                  <use href="#inactiv-m" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-m" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-n)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-n)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(245 357) translate(0 .286)">
                <mask id="inactiv-p" fill="#fff">
                  <use href="#inactiv-o" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-o" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-p)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(245 357) translate(30.106 .199)">
                <mask id="inactiv-r" fill="#fff">
                  <use href="#inactiv-q" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-q" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-r)" d="M-2 7.4h31.5V14H-2z" />
              </g>
              <g transform="translate(-8 4) translate(139 357) translate(5.313 14.51)">
                <mask id="inactiv-t" fill="#fff">
                  <use href="#inactiv-s" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-s" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-t)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-t)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(139 357) translate(0 .286)">
                <mask id="inactiv-v" fill="#fff">
                  <use href="#inactiv-u" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-u" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-v)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(139 357) translate(30.106 .199)">
                <mask id="inactiv-x" fill="#fff">
                  <use href="#inactiv-w" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-w" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-x)" d="M-2 7.4h31.5V14H-2z" />
              </g>
              <g transform="translate(-8 4) translate(384 357) translate(5.313 14.51)">
                <mask id="inactiv-z" fill="#fff">
                  <use href="#inactiv-y" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-y" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-z)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-z)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(384 357) translate(0 .286)">
                <mask id="inactiv-B" fill="#fff">
                  <use href="#inactiv-A" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-A" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-B)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(384 357) translate(30.106 .199)">
                <mask id="inactiv-D" fill="#fff">
                  <use href="#inactiv-C" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-C" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-D)" d="M-2 7.4h31.5V14H-2z" />
              </g>
              <g transform="translate(-8 4) translate(67 357) translate(5.313 14.51)">
                <mask id="inactiv-F" fill="#fff">
                  <use href="#inactiv-E" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-E" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-F)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-F)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(67 357) translate(0 .286)">
                <mask id="inactiv-H" fill="#fff">
                  <use href="#inactiv-G" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-G" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-H)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(67 357) translate(30.106 .199)">
                <mask id="inactiv-J" fill="#fff">
                  <use href="#inactiv-I" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-I" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-J)" d="M-2 7.4h31.5V14H-2z" />
              </g>
              <g transform="translate(-8 4) translate(312 357) translate(5.313 14.51)">
                <mask id="inactiv-L" fill="#fff">
                  <use href="#inactiv-K" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-K" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-L)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-L)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(312 357) translate(0 .286)">
                <mask id="inactiv-N" fill="#fff">
                  <use href="#inactiv-M" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-M" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-N)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(312 357) translate(30.106 .199)">
                <mask id="inactiv-P" fill="#fff">
                  <use href="#inactiv-O" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-O" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-P)" d="M-2 7.4h31.5V14H-2z" />
              </g>
              <g transform="translate(-8 4) translate(339 275) translate(5.313 14.51)">
                <mask id="inactiv-R" fill="#fff">
                  <use href="#inactiv-Q" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-Q" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-R)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-R)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(339 275) translate(0 .286)">
                <mask id="inactiv-T" fill="#fff">
                  <use href="#inactiv-S" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-S" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-T)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(339 275) translate(30.106 .199)">
                <mask id="inactiv-V" fill="#fff">
                  <use href="#inactiv-U" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-U" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-V)" d="M-2 7.4h31.5V14H-2z" />
              </g>
              <g transform="translate(-8 4) translate(0 275) translate(5.313 14.51)">
                <mask id="inactiv-X" fill="#fff">
                  <use href="#inactiv-W" />
                </mask>
                <use fill="#F8A11C" href="#inactiv-W" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5h79.7v62.3H-3.5z" />
                <path fill="#D48B1C" mask="url(#inactiv-X)" d="M0 4.2h72.7v5H0z" />
                <path fill="#D48B1C" mask="url(#inactiv-X)" d="M0 4.2h36.5v55.3H0z" />
              </g>
              <g transform="translate(-8 4) translate(0 275) translate(0 .286)">
                <mask id="inactiv-Z" fill="#fff">
                  <use href="#inactiv-Y" />
                </mask>
                <use fill="#FFCA35" href="#inactiv-Y" />
                <path stroke="#282828" stroke-width="7" d="M-3.5-3.5H86v21H-3.4z" />
                <path fill="#ECAE29" mask="url(#inactiv-Z)" d="M0 7.3h82.6v14H0z" />
              </g>
              <g transform="translate(-8 4) translate(0 275) translate(30.106 .199)">
                <mask id="inactiv-ab" fill="#fff">
                  <use href="#inactiv-aa" />
                </mask>
                <use fill="#E64C5F" href="#inactiv-aa" />
                <path stroke="#282828" stroke-width="7" d="M-3.4-3.4H26v21H-3.5z" />
                <path fill="#BC3647" mask="url(#inactiv-ab)" d="M-2 7.4h31.5V14H-2z" />
              </g>
            </g>
          </svg>
          <div class="uk-position-center ac-fat-font uk-text-center  uk-margin-small-top uk-padding uk-padding-remove-vertical">Let’s go Nuts on Data Journalism together - at JournoCon 2018!
          </div>
        </a>
        <div class="hj-impressum uk-position-bottom uk-section uk-padding-small uk-padding-remove-bottom ">
          <div class="uk-container uk-container-small uk-text-center">
            <div class="uk-margin-small">
              <a href="https://journocode.com/imprint/" class="uk-margin-right">Imprint
              </a>
              <a href="https://journocode.com/dataprivacy/">Data Privacy 
              </a>
            </div>
            <div class="uk-margin-small" >
              <a target="_blank" href="https://twitter.com/journocode" class="uk-icon-link uk-margin-small-right" uk-icon="icon: twitter;ratio:1.4">
              </a>
              <a target="_blank" href="https://www.facebook.com/journocode" class="uk-icon-link uk-reverse" uk-icon="icon: facebook;ratio:1.4">
              </a>
            </div>
            <div>
              <span class="hj-copyright">© 2017 Journocode
                <br>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
<script src="dist/bundle.js">
</script>
</body>
</html>
