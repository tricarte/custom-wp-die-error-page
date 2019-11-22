<?php
// custom die handler
function wpmu_get_custom_die_handler() {
    return 'wpmu_custom_css_on_wp_die';
}
// hook the function
add_filter('wp_die_handler', 'wpmu_get_custom_die_handler' );
// custom login for theme
function wpmu_custom_css_on_wp_die($message, $title = '', $args = array() ) {
   ?>
    <html>
               <head>
               <title><?php echo $title ?></title>

       <style type="text/css">
       html {
           background: #f1f1f1  ;
       }
       body {
           background: #fff;
           color: #444;
           font-family: "Open Sans", sans-serif;
           margin: 2em auto;
           padding: 1em 2em;
           max-width: 700px;
           -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
           box-shadow: 0 1px 3px rgba(0,0,0,0.13);
       }
       h1 {
           border-bottom: 1px solid #dadada  ;
           clear: both;
           color: #666;
           font: 24px "Open Sans", sans-serif;
           margin: 30px 0 0 0;
           padding: 0;
           padding-bottom: 7px;
       }
       #error-page {
           margin-top: 50px;
       }
       #error-page p {
           font-size: 14px;
           line-height: 1.5;
           margin: 25px 0 20px;
       }
       #error-page code {
           font-family: Consolas, Monaco, monospace;
       }
       ul li {
           margin-bottom: 10px;
           font-size: 14px ;
       }
       a {
           color: #21759B  ;
           text-decoration: none;
       }
       a:hover {
           color: #D54E21  ;
       }
       .button {
           background: #f7f7f7  ;
           border: 1px solid #cccccc  ;
           color: #555;
           display: inline-block;
           text-decoration: none;
           font-size: 13px;
           line-height: 26px;
           height: 28px;
           margin: 0;
           padding: 0 10px 1px;
           cursor: pointer;
           -webkit-border-radius: 3px;
           -webkit-appearance: none;
           border-radius: 3px;
           white-space: nowrap;
           -webkit-box-sizing: border-box;
           -moz-box-sizing:    border-box;
           box-sizing:         border-box;
           -webkit-box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
           box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0,0,0,.08);
            vertical-align: top;
       }
       .button.button-large {
           height: 29px;
           line-height: 28px;
           padding: 0 12px;
       }
       .button:hover,
       .button:focus {
           background: #fafafa  ;
           border-color: #999;
           color: #222;
       }
       .button:focus  {
           -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.2);
           box-shadow: 1px 1px 1px rgba(0,0,0,.2);
       }
       .button:active {
           background: #eee;
           border-color: #999;
           color: #333;
           -webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
            box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
       }
		@media	only screen and (max-width: 480px)
			{
				body {font-size:2em;}
			}
       </style>
       </head>
               <body>
                  <?php echo $message ?>
               </body>
           </html>

<?php
    exit;
}
