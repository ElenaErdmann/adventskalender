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
$author1_name="Sebastian Meier";
$author1_tw="seb_meier";
$author1_fb="";
$author1_homepage="";
$author2_name="Alsino Skowronnek";
$author2_tw="alsinosko";
$author2_fb="";
$author2_homepage="";
$author3_name="Hans Hack";
$author3_tw="hnshck";
$author3_fb="";
$author3_homepage="";
//NOTIFICATION
$notification_text="";
//========================================================
$site_name="Journocode Advent Calendar 2017";
$title="Data Visualization in the Newsroom — Here is what we have learned";
$description="SVIFT lets users create pretty, reusable graphics easily. Its creators explain what they learned about #dataviz in the newsroom while making it.";
$share_text="SVIFT lets users create pretty, reusable graphics easily. Its creators @hnshck, @Alsinosko and @seb_meier explain what they learned about #dataviz in the newsroom while making it.";
 
//=========================================================
// Function for basic field validation (present and neither empty nor only white space
$base_url="http://advent17.journocode.com";
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
    <link rel="shortcut icon" href="http://www.advent17.journocode.com/assets/ico/fav.ico">
    <?php if($show) : ?>
    <meta property="og:site_name" content="<?=$site_name?>">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="<?=$description?>">
    
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://www.advent17.journocode.com/door/7/assets/share.png">
    <meta property="fb:app_id" content="1593595690933146" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@journocode">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$description?>">
    <meta name="twitter:image" content="http://www.advent17.journocode.com/door/7/assets/share.png">
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
    <link rel="shortcut icon" href="http://www.advent17.journocode.com/assets/ico/fav.ico">
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
            <a class="uk-link-reset" href="">Data Visualization in the Newsroom — Here is what we have learned
            </a>
          </h1>
          <p class="uk-margin-remove-top uk-article-meta">by 
            <a href="#author1-box" uk-scroll>
              <?= $author1_name?>  
            </a>,
            <a href="#author2-box" uk-scroll>
              <?= $author2_name?>  
            </a>,
            <a href="#author3-box" uk-scroll>
              <?= $author3_name?>  
            </a>
          </p>
          <p><strong>For those of you who remember: Our last advent calendar was all about tools. It’s daily surprises became the foundation of our <a target='_blank' href='http://journocode.com/data-journalism-tools/'>DDJ tool collection</a>, which now contains 40 tools to help you with your data-driven projects. <a target='_blank' href='http://www.svift.xyz/'>svift</a> might join them soon. It’s creators aimed to make a simple tool that creates pretty and reusable graphics suited for all kinds of journalistic formats. Here, they explain what they learned in the process.</strong></p>
          <div class="ac-box-container">
            <img src="assets/teaser.png" alt="">
          </div>
          <p>In our last <a target='_blank' href='https://medium.com/svift-blog/hello-world-67b8633bdc3d'>blog post</a>, we explained how we came up with the idea to develop <a target='_blank' href='http://www.svift.xyz/'>svift</a> — an open source data visualization tool.To sum up (for those who missed our first post ;): While there are already many other good tools out there to make charts for online media, many of theses are still quite complex and difficult to use for editors and social media managers with little “data experience”. This is why we had the idea to build a tool that anyone can use to make beautiful charts without having prior knowledge.</p>
          <img src="assets/08_svift_1.jpeg">
          <p>When we set out to develop our tool, we did not just want to trust our intuition, but instead we were eager to learn what day-to-day work in a modern newsroom looks like and how our tool could help journalists and content creators improve their workflow. So we did our research and talked to more than a dozen digital news outlets and social media agencies in Germany to gain insights. Here are our <strong>main learnings</strong>:</p>
          <p>
            <ul>
              <li><strong>Online journalists today have to be »multi-taskers«</strong>: While the main job of journalists is still to tell engaging stories and to inform their readers, many are also taking on additional tasks, as technology evolves and 24/7 news output demands a higher volume of content creation. Especially in local media outlets with smaller teams this means that journalists often have to wear different hats at the same time and create output across multiple channels, i.e. online news articles, social media posts, video and  print articles.</li><br>
              <li><strong>Visual  content gets the »clicks« </strong>: Online content more than ever competes for readers’ attention and  most newsrooms report that articles or social media posts including engaging visual content (e.g. images, animated gifs or videos) receive higher click rates and greater reach than just plain text content. However, the presentation of data in a nice visual form is often still surprisingly underdeveloped in newsrooms. This is because editors are usually not familiar with ways of producing visuals themselves and depend on graphic or video editors for support.</li><br>
              <li><strong>There is a »technical divide« in newsrooms</strong>: While certain journalists are highly computer and technology-oriented folks, most are not technical experts and some even have difficulties adapting their daily routines to new technologies which are introduced in a top-down manner. After all, journalists need to concentrate on the core of their work — reporting — and should not deal with the intricacies of new and complicated software. This is why data visualization tools for journalists (as any other software really) should be as intuitive as possible and fun to use, to easily integrate into the actual daily workflow without requiring extra training.</li><br>
              <li><strong>There is noooooo time</strong>: Being a journalist in a big newsroom is a stressful job. Breaking news often leave little time for in-depth experimentation with graphic or data visualization tools on a day-to-day basis. Once a story is planned  and a graphic is envisioned, results need to be delivered fast. The average time to complete a simple graphic is usually short, ranging from a few minutes to a few hours at best.</li>
            </ul>
          </p>
          <p>Based on the above findings during our interviews with the journalists, we realized that our tool would have to inherit certain characteristics that are based on the actual needs of the daily workflows in today’s newsrooms. We realized that especially <strong>three requirements</strong>strong> were essential for the development of such a tool:</p>
          <ol>
            <li><strong>Ease-of-use:</strong><br>Our tool should be very simple to use and anyone should be able to make a chart or engaging data graphic without prior technical knowledge and without getting frustrated by complex software. To make our tool more accessible, we decided to go for a conversational user interface, i.e. a personal chatbot assistant 🤖 that helps the user through the process of creating an engaging data visualization.</li><br>
          <li><strong>Usability across multiple channels:</strong><br>Given the changing role of the online journalist today, we realized that it would make sense to create a tool, that can create interesting chart types for many different output channels. We want to enable the editor to create a chart only once and then use it not only for the online article (as image or interactive embed), but also share it directly in the optimal sizes on their social media platforms or use it in a video.</li><br>
        

          <img src="assets/08_svift_2.png">
          <p>First sketches and ideas for different chart types (and other weird ideas ;)</p>

          
            <li><strong>Beautiful charts fast:</strong><br>We learned that tight time constraints in journalism are real. Therefore we want to build a tool, that delivers beautiful charts quickly and in a very easily understandable flow: From start to finish, the creation of a chart with our tool — including 1) choosing a chart type, 2) data input, 3) styling and 4) graphic output — should not take more than 3–4 minutes max.</li>

          <img src="assets/08_svift_3.png">
          <p>First rough ideas for a quick step-wise user flow</p>
          </ol>

          <p><strong>Summing up</strong><br>Throughout or research, we have learned quite a bit about the daily work of online journalists today. Some of the assumptions we had at the beginning were challenged, others were supported. We think that the time we invested to talk to all our partners was very helpful for us to understand, what it was, that we were actually going to build and that can be useful in the daily work of journalists. We are pretty confident that we are heading in the right direction, but are of course, thankful for any feedback and comments to come.</p><p>We would also like to express a big thank you (👏) to all of our media partners who have taken the time to patiently answer all our (silly ;) questions and provide us with invaluable feedback. Especially, we would like to thank the following news outlets in Germany: Berliner Morgenpost, Spiegel Online, taz, Rundfunk Berlin Brandenburg (RBB), Bayerischer Rundfunk (BR), Südwestfunk (SWR), Rheinische Post, Ruhr Nachrichten, Märkische Allgemeine Zeitung.</p><p><strong>We have just completed the development of our first prototype, which we are currently testing in a closed setting.If you are interested in testing our prototype, please get in touch with us by email (hello@svift.xyz) or sign up here: <a target='_blank' href='http://www.svift.xyz/'>svift.xyz</a>.<br>In January 2018 we will release a first public demo, which we will announce here. So stay tuned or follow us on twitter (<a target='_blank' href='https://twitter.com/SviftTool'>@SviftTool</a>).</strong></p>

         ---

          <p>svift is designed and developed as an open source project by Sebastian Meier, Alsino Skowronnek and Hans Hack in Berlin. All our code is free and open source and can be found here: <a target='_blank' href='https://github.com/svift-org'>https://github.com/svift-org</a>. Please get in touch with us if you have suggestions or would like to contribute to the project. We are grateful for the financial support by the <a target='_blank' href='http://www.miz-babelsberg.de/'>MIZ Babelsberg</a> for a first round of initial funding.</p>


          <p><br><a href='http://www.advent17.journocode.com'>< Back to the tree</a></p>
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
          <div id="author1-box" class="uk-card uk-panel uk-card-default uk-padding-small uk-margin uk-card-body ac-box-container">
            <h2 class="uk-margin-remove-vertical">About
            </h2>
            <h3 class="uk-card-title uk-margin-remove-top uk-margin-small-bottom">
              <?=$author1_name?>
            </h3>
            <div class="uk-margin-small uk-clearfix">
              <a target="_blank" href="https://twitter.com/<?= $author1_tw ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link" uk-icon="icon: twitter;ratio:1.4" <?php echo IsNullOrEmptyString($author1_tw)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="https://www.facebook.com/<?= $author_fb ?>" class="uk-float-left  uk-margin-remove-bottom  uk-icon-link " uk-icon="icon: facebook;ratio:1.4" <?php echo IsNullOrEmptyString($author1_fb)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="<?= $author_homepage ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link " uk-icon="icon: link;ratio:1.6" <?php echo IsNullOrEmptyString($author1_homepage)?"hidden":"" ?> >
              </a>
            </div>
            <div class="avatar-wrapper uk-align-left@s uk-margin-small-bottom">
              <img class="avatar-img" src="assets/avatar1.jpg" width="50" height="50">
            </div>
            <p>Sebastian Meier is currently completing his doctorate at the University of Potsdam in the field of Geoinformatics. In recent years he has worked for the Interaction Design Lab (IDL) of the FH Potsdam, as well as a freelancer in the field of data visualization and web-based systems.
          </p>
          </div>
        </div>
        <!-- 2 -->
        <div>
          <div id="author2-box" class="uk-card uk-panel uk-card-default uk-padding-small uk-margin uk-card-body ac-box-container">
            <h2 class="uk-margin-remove-vertical">About
            </h2>
            <h3 class="uk-card-title uk-margin-remove-top uk-margin-small-bottom">
              <?=$author2_name?>
            </h3>
            <div class="uk-margin-small uk-clearfix">
              <a target="_blank" href="https://twitter.com/<?= $author2_tw ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link" uk-icon="icon: twitter;ratio:1.4" <?php echo IsNullOrEmptyString($author2_tw)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="https://www.facebook.com/<?= $author_fb ?>" class="uk-float-left  uk-margin-remove-bottom  uk-icon-link " uk-icon="icon: facebook;ratio:1.4" <?php echo IsNullOrEmptyString($author2_fb)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="<?= $author_homepage ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link " uk-icon="icon: link;ratio:1.6" <?php echo IsNullOrEmptyString($author2_homepage)?"hidden":"" ?> >
              </a>
            </div>
            <div class="avatar-wrapper uk-align-left@s uk-margin-small-bottom">
              <img class="avatar-img" src="assets/avatar2.jpg" width="50" height="50">
            </div>
            <p>Alsino Skowronnek is a data and interface designer. He works as a freelance designer for various companies, media outlets and NGOs. For his project Airbnb vs Berlin he was nominated for the Designpreis Brandenburg 2016 and the Grimme Online Award 2016.
          </p>
          </div>
        </div>
        <!-- 3 -->
        <div>
          <div id="author3-box" class="uk-card uk-panel uk-card-default uk-padding-small uk-margin uk-card-body ac-box-container">
            <h2 class="uk-margin-remove-vertical">About
            </h2>
            <h3 class="uk-card-title uk-margin-remove-top uk-margin-small-bottom">
              <?=$author3_name?>
            </h3>
            <div class="uk-margin-small uk-clearfix">
              <a target="_blank" href="https://twitter.com/<?= $author3_tw ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link" uk-icon="icon: twitter;ratio:1.4" <?php echo IsNullOrEmptyString($author3_tw)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="https://www.facebook.com/<?= $author_fb ?>" class="uk-float-left  uk-margin-remove-bottom  uk-icon-link " uk-icon="icon: facebook;ratio:1.4" <?php echo IsNullOrEmptyString($author3_fb)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="<?= $author_homepage ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link " uk-icon="icon: link;ratio:1.6" <?php echo IsNullOrEmptyString($author3_homepage)?"hidden":"" ?> >
              </a>
            </div>
            <div class="avatar-wrapper uk-align-left@s uk-margin-small-bottom">
              <img class="avatar-img" src="assets/avatar3.jpg" width="50" height="50">
            </div>
            <p>Hans Hack is a web developer, creative coder and artist. He studied film and animation in England and World Heritage studies in Germany. Since 2006 he works as a freelance artist and programmer initially specializing in map-based solutions.
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
              <?= $dir_num ?>, 2017 00:00 CET 
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
