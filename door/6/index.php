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
// AUTHOR ============================================
// Wenn kein link angegeben wird, dann verschwindet das jeweilige Icon von der Seite
$author_name="xxx";
$author_tw="xxx";
$author_fb="";
$author_homepage="";
//NOTIFICATION
$notification_text="";
//========================================================
$site_name="Journocode Advent Calendar 2018";
$title="Squirrel Talk with Marco Hernandez Solano";
$description="xxx";
$share_text="xxx";
 
//=========================================================
// Function for basic field validation (present and neither empty nor only white space
$base_url="https://advent17.journocode.com";
$DEBUG = False;
date_default_timezone_set("Europe/Berlin");
$date1 = new DateTime('NOW');
$date2 = new DateTime("2017-12-00");
function debug($data,$DEBUG) {
if($DEBUG){
if(is_array($data) || is_object($data)){
echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
} else {
echo("<script>console.log('PHP: ".$data."');</script>");
}
}
}
function IsNullOrEmptyString($question){
return (!isset($question) || trim($question)==='');
}
session_start();
// session_unset ();
//Code for day calculating
$day_delta = $date2->diff($date1)->format("%r%a");
$dir_num = (int)basename(__DIR__); 
$door_diff = $day_delta-$dir_num;
$show = False;
if($door_diff >= 0){
$show = True;
}
$door_url="../";
if ($day_delta > 0){
$door_url="/door/".(string)$day_delta."/";
}
//increase count and save to file with lock if session doesnt have it, else just read from session
$count=0;
if(!isset($_SESSION['day'.(string)$dir_num])) {
debug("No Session found",$DEBUG );
$file = 'count.txt';
if (!file_exists($file)) {
debug("File not existed",$DEBUG );
touch($file);
debug("Touch File",$DEBUG );
}else{
debug("File existed",$DEBUG );
}
//Open the File Stream
$handle = fopen($file, "r+");
//Lock File, error if unable to lock
if(flock($handle, LOCK_EX)) {
$size = filesize($file);
$count = $size === 0 ? 0 : fread($handle, $size); //Get Current Hit Count
$count = $count + 1; //Increment Hit Count by 1
ftruncate($handle, 0); //Truncate the file to 0
rewind($handle); //Set write pointer to beginning of file
fwrite($handle, $count); //Write the new Hit Count
flock($handle, LOCK_UN); //Unlock File
}else{
debug("Warning could not lock File!",$DEBUG );
}
$_SESSION['day'.(string)$dir_num] = $count; 
} else{
debug("Session found",$DEBUG );
$count=$_SESSION['day'.(string)$dir_num];
}
debug("Count",$DEBUG );
debug((string)$count,$DEBUG );
// else {
//     echo "Could not Lock File!";
// }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta property="jc:door_diff" content="<?= $door_diff ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Pagekit">
    <link rel="shortcut icon" href="https://www.advent18.journocode.com/assets/ico/fav.ico">
    <?php if($show) : ?>
    <meta property="og:site_name" content="<?=$site_name?>">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="<?=$description?>">
    
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.advent18.journocode.com/door/10/assets/share.png">
    <meta property="fb:app_id" content="1593595690933146" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@journocode">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$description?>">
    <meta name="twitter:image" content="https://www.advent18.journocode.com/door/10/assets/share.png">
    <title>
      <?=$title?>
    </title>
    <?php else : ?>
    <title>Oops, you are too early!
    </title>
    <meta name="robots" content="noindex" />
    <?php endif; ?>
    <link href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-72x72.png" rel="apple-touch-icon-precomposed">
    <link href="../../dist/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-57x57.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-60x60.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-72x72.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-76x76.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-114x114.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-120x120.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-144x144.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-152x152.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-180x180.png?v=gAAQ8zKY9d">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-32x32.png?v=gAAQ8zKY9d" sizes="32x32">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-194x194.png?v=gAAQ8zKY9d" sizes="194x194">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-96x96.png?v=gAAQ8zKY9d" sizes="96x96">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/android-chrome-192x192.png?v=gAAQ8zKY9d" sizes="192x192">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-16x16.png?v=gAAQ8zKY9d" sizes="16x16">
    <link rel="manifest" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/manifest.json?v=gAAQ8zKY9d">
    <link rel="mask-icon" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/safari-pinned-tab.svg?v=gAAQ8zKY9d" color="#5bbad5">
    <link rel="shortcut icon" href="https://www.advent18.journocode.com/assets/ico/fav.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/mstile-144x144.png?v=gAAQ8zKY9d">
    <meta name="msapplication-config" content="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/browserconfig.xml?v=gAAQ8zKY9d">
    <meta name="theme-color" content="#ffffff">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110082869-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  window.gtag= function() {dataLayer.push(arguments);}
  window.gtag('js', new Date());

  window.gtag('config', 'UA-110082869-1');
</script>

  </head>
  <body>
     
    <div id="hidden-text-target" style="display: none;">
      <?php echo htmlspecialchars($share_text); ?>
    </div>
    <div id="hidden-notification-target" style="display: none;">
      <?php echo htmlspecialchars($notification_text); ?>
    </div>
    <div class="uk-padding-remove-horizontal">
      <div class="ac-article-tree top uk-animation-slide-top">
        <img src="../../assets/svg/tree_min.svg" alt="" />
      </div>
      <div class="uk-container uk-container-small">
        <?php if($show) : ?>
        <article class="ac-article uk-article">
          <!--BEGIN OF ARTICLE, CHANGE HERE///////////////////////////////////////////-->
          <h1 class="ac-title uk-article-title">
            <a class="uk-link-reset" href="">xxx
            </a>
          </h1>
          <p class="uk-margin-remove-top uk-article-meta">by 
            <a href="#author-box" uk-scroll>
              <?= $author_name?>
            </a>
          </p>
          <div class="ac-box-container">
            <img src="assets/teaser.png" alt="">
          </div>
          <p class="uk-text-lead ac-text-heading">What tools do you use to manipulate, edit and handle data?</p>
          <p>I guess it depends on the project, we are not sticked to a abstract data visualisation or illustrated classic graphics, we do a little bit of everything. Just to mention some I use RAW, Tableau, Excel, Google docs, D3, CD4, QGIS, GeoJSON, Adobe CC pack ...</p>
          <p class="uk-text-lead ac-text-heading">Should journalists learn how to code?</p>
          <p>Let’s say it in this way, designers, coders, journalist… many times they are all same person especially in small companies. But even if you are in a big media, you need to understand the different languages to know the possibilities, contribute and develop better final products. 
Learn the basics will make you understand the work of the others, journalist don't need to become developers, but they do need to understand them, so to know a little bit of code don’t make any harm
</p>
          <p class="uk-text-lead ac-text-heading">Do you work with Excel? Or do you avoid it?</p>
          <p>Sometimes is a quick way, sometimes you don’t need it at all. 
I believe the tool doesn’t make any difference, if you have a clear idea of what you need to tell the story behind the data, you can make it even just with paper and pencil. My advice will be spend 90% of your time thinking in the solution, leave the rest to the tool whatever it is
</p>
          <p class="uk-text-lead ac-text-heading">Working with data can be time consuming. How do you judge if it is worthwhile to do a data project?</p>
          <p>In the early stages of your project, make an interview to your data.</p>
          <ul>
            <li>Filter it: Ask what is the most interesting part there, don’t be afraid to edit yourself</li>
            <li>Find little stuff: The curiosities or anomalies there with some context can become in the main idea.</li>
            <li>Give context: Make comparisons, all in simple charts to understand it, very quick…</li>
          </ul>
          <p>If the result is good on your judge not because the amount of time you spend but to the impact go ahead. Don’t fall in love of your analisis, just be such cruel with yourself as the editors will be, it will save you a lot of time.</p>
          <p class="uk-text-lead ac-text-heading">Suppose I’m the only person in my newsroom who knows about data or how to code. What can I do?</p>
          <p>Frist, don’t go crazy.<br>
          Take the good data to work in, create one or two good projects and solve the rest with basic solutions, maybe in future you can develop the topic in deept. I prefer one good project rather than 10 badly done </p>
          <p>Second, create your own toolkit<br>A lot of stuff can be solved by recycling components, take your time to create a nice tool kit, and encourage the people around to learn how to use it, maybe it will release time to do better stuff </p>
          <p class="uk-text-lead ac-text-heading">What does the daily work routine look like for you in the SCMP data team?</p>
          <p>We are a bunch of nerds doing the stuff we love the most, so every day is like go to the playground rather than another day in the office, then you now someone will pay you for it… even.</p>
          <p class="uk-text-lead ac-text-heading">Which of your data projects are you most proud of? What didn’t work out so well? And which project was most well received by the readers?</p>
          <p>Everytime we publish something we take a look on what we can do better for the next, so I’ll say I’ll be proud of the one we will publish tomorrow every day.</p>
          <p>We have a few the readers get crazy, “A world of languages” is one of those, “City of anarchy” is another, and more recently the Forbidden City series, those have reached millions of reads and have become crazy on social media also</p>
          <p class="uk-text-lead ac-text-heading">How far does your newsroom support you in the development of data journalistic formats? And what do you expect from your newsroom?</p>
          <p>We have good support from the rest of the newsroom, they trust us. That’s tricky also because always they will have high expectations on us and no one likes to disappoint the newsroom, specially the newspaper heads…</p>
          <p>We expect of them respect in our choices, the focus we want for each story and the freedom to express. Happily we got it and their suggestions sometimes just make our product better, and sometimes are just funny suggestions.</p>
          <p class="uk-text-lead ac-text-heading">Does data journalism have a future in small local newsrooms?</p>
          <p>Yes, future in journalism made by humans is go deeper, tell and show stories with an never seen focus. Not just trendy, but useful or educative. <br>I guess is like the other question above, if you are the only one doing code. Pick well you battles, create few good stories, solve the rest with your toolkit.</p>

          
          <p><br><a href='https://advent18.journocode.com'>< Back to the tree</a></p>
          <!--END OF ARTICLE////////////////////////////////////////////////////////////-->
          <hr class="uk-margin uk-margin-large-top">
          <!--<div class="uk-grid-small uk-child-width-auto" uk-grid>-->
            <div class="ac-addition uk-clearfix">
            <div class="ac-badge uk-margin-small-top uk-inline uk-text-center uk-border-rounded">
              <span uk-icon="icon: users; ratio: 1.7">
              </span>
              <br>
              <span>Views 
                <?php echo  number_format($count)?>
              </span>
            </div>
            <div class="uk-float-right">
              <a href="#" class="twitter-share">
                <svg class="tw-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 96"  width="57" height="79" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                <svg class="fb-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 96"  width="57" height="79" xmlns:xlink="http://www.w3.org/1999/xlink">
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
        <hr class="uk-margin uk-margin-large-bottom">
        <!--<div class="ac-box-container ac-share-container uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-panel uk-margin">
<span>Share On</span> 
</div>-->
        <div>
          <div id="author-box" class="uk-card uk-panel uk-card-default uk-padding-small uk-margin uk-card-body ac-box-container">
            <h2 class="uk-margin-remove-vertical">About
            </h2>
            <h3 class="uk-card-title uk-margin-remove-top uk-margin-small-bottom">
              <?=$author_name?>
            </h3>
            <div class="uk-margin-small uk-clearfix">
              <a target="_blank" href="https://twitter.com/<?= $author_tw ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link" uk-icon="icon: twitter;ratio:1.4" <?php echo IsNullOrEmptyString($author_tw)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="https://www.facebook.com/<?= $author_fb ?>" class="uk-float-left  uk-margin-remove-bottom  uk-icon-link " uk-icon="icon: facebook;ratio:1.4" <?php echo IsNullOrEmptyString($author_fb)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="<?= $author_homepage ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link " uk-icon="icon: link;ratio:1.6" <?php echo IsNullOrEmptyString($author_homepage)?"hidden":"" ?> >
              </a>
            </div>
            <div class="avatar-wrapper uk-align-left@s uk-margin-small-bottom">
              <img class="avatar-img" src="assets/avatar.jpg" width="50" height="50">
            </div>
            <p>xxx  
          </p>
          </div>
        </div>
        <div class="ac-article-spacer uk-margin-top">
          <img class="uk-align-center" id="snow-flake" src="../../assets/svg/snow-flake_min.svg" alt="snow flake" />
        </div></article>
        <?php else : ?>
        <script>
          window.gtag('event', 'too_early', { 'event_category': 'error','event_label':'Visited Page too early' + encodeURIComponent(location.href) });
        </script>
        <div class="uk-text-center">
          <h3>Oops, you are too early!
          </h3>
          <p>This surprise will be available on 
            <span class="uk-text-bold">December 
              <?= $dir_num ?>, 2018 00:00 CET 
            </span>
          </p>
          <p>You can go to the newest treat by clicking 
            <a href="<?=$door_url?>">here...
            </a>
          </p>
        </div>
        <?php endif ; ?>
      </div>
    </div>
    <div>
      <div class="ac-article-tree uk-width-1-1 uk-inline">
        <img src="../../assets/svg/tree_min.svg" alt=""  class="down"/>
        <div class="hj-impressum uk-section uk-padding-small uk-padding-remove-bottom ">
          <div class="uk-container uk-container-small uk-text-center">
            <div class="uk-margin-small">
              <a href="http://journocode.com/imprint/" class="uk-margin-right">Imprint
              </a>
              <a href="http://journocode.com/dataprivacy/">Data Privacy 
              </a>
            </div>
            <div class="uk-margin-small">
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="../../dist/bundle.js">
    </script>
  </body>
</html>
