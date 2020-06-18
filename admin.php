<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard 1 &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="http://demo.madebytilde.com/elephant.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="http://demo.madebytilde.com/elephant.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/application.min.css">
	<style>
		@import url(https://fonts.googleapis.com/css?family=Open+Sans);

	/* body	*/
	html, body {
		margin: 0;
		padding: 0;
		height: 100%;
		font-family: "Open Sans", Helvetica, sans-serif;
		background-color: #404040;
	}
	/* body	*/


#responsive-admin-menu {
	float: left;
	width: 200px;
	background-color: #404040;
	height: 100%;
	position: relative;
	overflow: hidden;
	left: 0px;
	min-height: 500px;

}

#content-wrapper {
	width: auto;
	margin-left: 200px;
	background-color: #ffffff;
	height: 1200px;
	padding: 15px;
}

#responsive-admin-menu #responsive-menu {
	height: 50px;
	display: none;
	line-height: 50px;
	cursor: pointer;
	color: #ffffff;
	text-indent: 10px;
}


#responsive-admin-menu #responsive-menu .menuicon {
	color: #ffffff;
	font-size: 24px;
	position: absolute;
	right: 10px;
	top: 0px;
}
#responsive-admin-menu #logo {
	background-position: -0px -36px;
	width: 174px;
	height: 40px;
	margin: 10px;
  background: url('https://assets.codepen.io/assets/footer/codepen-logo-midgray.svg') no-repeat;
  -webkit-background-size: 146.66667px 25.83333px;
  background-size: 146.66667px 25.83333px;
}

/* Menu Styles */
#responsive-admin-menu #menu {
	width: 100%;
}
#responsive-admin-menu #menu a {
	border-bottom: 1px dotted #52535a;
	font-size: 14px;
	text-decoration: none;
	display: block;
	padding: 12px;
	color: #FFFFFF;
	position: relative;
	font-weight: 400;
	overflow: hidden;
}
#responsive-admin-menu #menu a:hover {
	color: #52535a;
	background-color:#fcfcfc;
}
#responsive-admin-menu #menu i {
	width: 16px;
	padding-right: 4px;
}
#responsive-admin-menu #menu div {
	display: none;
	width: 100%;
	background-color: #5c5d64;
	overflow: hidden;
}
#responsive-admin-menu #menu div a {
	color: #c0c0c0;
}
#responsive-admin-menu #menu div a:hover {
	color: #888888;
}
#responsive-admin-menu #menu a.submenu:before {
	font-family: FontAwesome;
	content: "\f054";
}
#responsive-admin-menu #menu a.downarrow:before {
	font-family: FontAwesome;
	content: "\f078";
}
#responsive-admin-menu #menu a.submenu:before {
	font-size: 14px;
	position: absolute;
	right: 15px;
	top: 17px;
}
/* Menu Styles */

@media screen and (max-width: 960px) {
	#responsive-admin-menu #responsive-menu {
		display: none;
	}
	#responsive-admin-menu #menu a span {
		display: inline-block;
	}
}
@media screen and (max-width: 800px) {
	#responsive-admin-menu #menu a span {
		display: none;
	}
	#responsive-admin-menu {
		float: left;
		width: 40px;
		position: relative;
	}
	#responsive-admin-menu {
		height: 100%;
	}
	#content-wrapper {
		margin-left: 40px;
	}
	#responsive-admin-menu #menu a.submenu:before {
		font-size: 6px;
		right: 5px;
	}
	#responsive-admin-menu #logo {
		background: url('../images/logo.png');
		background-position: -0px -0px;
		width: 29px;
		height: 26px;
		margin: 10px 10px 10px 5px;
	}
}
@media screen and (max-width: 480px) {
	#responsive-admin-menu {
		min-height: 50px;
		float: left;
		width: 100%;
		background-color: #404040;
		height: auto;
		position: static;
		top: 0;
	}
	#responsive-admin-menu #logo {
		display: none;
	}
	#responsive-admin-menu #menu a span {
		display: inline-block;
	}
	#content-wrapper {
		margin-left: 0;
		padding-top: 60px;
	}
	#responsive-admin-menu #responsive-menu {
		display: block;
	}
	#responsive-admin-menu #menu {
		display: none;
	}
	#responsive-admin-menu #menu a {
		color: #FFFFFF;
	}
	#responsive-admin-menu #menu a.submenu:before {
		font-size: 14px;
		right: 15px;
	}
}




/*!
 *  Font Awesome 3.0.2
 *  the iconic font designed for use with Twitter Bootstrap
 *  -------------------------------------------------------
 *  The full suite of pictographic icons, examples, and documentation
 *  can be found at: https://fortawesome.github.com/Font-Awesome/
 *
 *  License
 *  -------------------------------------------------------
 *  - The Font Awesome font is licensed under the SIL Open Font License - http://scripts.sil.org/OFL
 *  - Font Awesome CSS, LESS, and SASS files are licensed under the MIT License -
 *    https://opensource.org/licenses/mit-license.html
 *  - The Font Awesome pictograms are licensed under the CC BY 3.0 License - http://creativecommons.org/licenses/by/3.0/
 *  - Attribution is no longer required in Font Awesome 3.0, but much appreciated:
 *    "Font Awesome by Dave Gandy - https://fortawesome.github.com/Font-Awesome"

 *  Contact
 *  -------------------------------------------------------
 *  Email: dave@davegandy.com
 *  Twitter: https://twitter.com/fortaweso_me
 *  Work: Lead Product Designer @ http://kyruus.com
 */

@font-face{
  font-family:'FontAwesome';
  src:url('font/fontawesome-webfont.eot?v=3.0.1');
  src:url('font/fontawesome-webfont.eot?#iefix&v=3.0.1') format('embedded-opentype'),
  url('font/fontawesome-webfont.woff?v=3.0.1') format('woff'),
  url('font/fontawesome-webfont.ttf?v=3.0.1') format('truetype');
  font-weight:normal;
  font-style:normal }

[class^="icon-"],[class*=" icon-"]{font-family:FontAwesome;font-weight:normal;font-style:normal;text-decoration:inherit;-webkit-font-smoothing:antialiased;display:inline;width:auto;height:auto;line-height:normal;vertical-align:baseline;background-image:none;background-position:0 0;background-repeat:repeat;margin-top:0}.icon-white,.nav-pills>.active>a>[class^="icon-"],.nav-pills>.active>a>[class*=" icon-"],.nav-list>.active>a>[class^="icon-"],.nav-list>.active>a>[class*=" icon-"],.navbar-inverse .nav>.active>a>[class^="icon-"],.navbar-inverse .nav>.active>a>[class*=" icon-"],.dropdown-menu>li>a:hover>[class^="icon-"],.dropdown-menu>li>a:hover>[class*=" icon-"],.dropdown-menu>.active>a>[class^="icon-"],.dropdown-menu>.active>a>[class*=" icon-"],.dropdown-submenu:hover>a>[class^="icon-"],.dropdown-submenu:hover>a>[class*=" icon-"]{background-image:none}[class^="icon-"]:before,[class*=" icon-"]:before{text-decoration:inherit;display:inline-block;speak:none}a [class^="icon-"],a [class*=" icon-"]{display:inline-block}.icon-large:before{vertical-align:-10%;font-size:1.3333333333333333em}.btn [class^="icon-"],.nav [class^="icon-"],.btn [class*=" icon-"],.nav [class*=" icon-"]{display:inline}.btn [class^="icon-"].icon-large,.nav [class^="icon-"].icon-large,.btn [class*=" icon-"].icon-large,.nav [class*=" icon-"].icon-large{line-height:.9em}.btn [class^="icon-"].icon-spin,.nav [class^="icon-"].icon-spin,.btn [class*=" icon-"].icon-spin,.nav [class*=" icon-"].icon-spin{display:inline-block}.nav-tabs [class^="icon-"],.nav-pills [class^="icon-"],.nav-tabs [class*=" icon-"],.nav-pills [class*=" icon-"],.nav-tabs [class^="icon-"].icon-large,.nav-pills [class^="icon-"].icon-large,.nav-tabs [class*=" icon-"].icon-large,.nav-pills [class*=" icon-"].icon-large{line-height:.9em}li [class^="icon-"],.nav li [class^="icon-"],li [class*=" icon-"],.nav li [class*=" icon-"]{display:inline-block;width:1.25em;text-align:center}li [class^="icon-"].icon-large,.nav li [class^="icon-"].icon-large,li [class*=" icon-"].icon-large,.nav li [class*=" icon-"].icon-large{width:1.5625em}ul.icons{list-style-type:none;text-indent:-0.75em}ul.icons li [class^="icon-"],ul.icons li [class*=" icon-"]{width:.75em}.icon-muted{color:#eee}.icon-border{border:solid 1px #eee;padding:.2em .25em .15em;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.icon-2x{font-size:2em}.icon-2x.icon-border{border-width:2px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.icon-3x{font-size:3em}.icon-3x.icon-border{border-width:3px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.icon-4x{font-size:4em}.icon-4x.icon-border{border-width:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}.pull-right{float:right}.pull-left{float:left}[class^="icon-"].pull-left,[class*=" icon-"].pull-left{margin-right:.3em}[class^="icon-"].pull-right,[class*=" icon-"].pull-right{margin-left:.3em}.btn [class^="icon-"].pull-left.icon-2x,.btn [class*=" icon-"].pull-left.icon-2x,.btn [class^="icon-"].pull-right.icon-2x,.btn [class*=" icon-"].pull-right.icon-2x{margin-top:.18em}.btn [class^="icon-"].icon-spin.icon-large,.btn [class*=" icon-"].icon-spin.icon-large{line-height:.8em}.btn.btn-small [class^="icon-"].pull-left.icon-2x,.btn.btn-small [class*=" icon-"].pull-left.icon-2x,.btn.btn-small [class^="icon-"].pull-right.icon-2x,.btn.btn-small [class*=" icon-"].pull-right.icon-2x{margin-top:.25em}.btn.btn-large [class^="icon-"],.btn.btn-large [class*=" icon-"]{margin-top:0}.btn.btn-large [class^="icon-"].pull-left.icon-2x,.btn.btn-large [class*=" icon-"].pull-left.icon-2x,.btn.btn-large [class^="icon-"].pull-right.icon-2x,.btn.btn-large [class*=" icon-"].pull-right.icon-2x{margin-top:.05em}.btn.btn-large [class^="icon-"].pull-left.icon-2x,.btn.btn-large [class*=" icon-"].pull-left.icon-2x{margin-right:.2em}.btn.btn-large [class^="icon-"].pull-right.icon-2x,.btn.btn-large [class*=" icon-"].pull-right.icon-2x{margin-left:.2em}.icon-spin{display:inline-block;-moz-animation:spin 2s infinite linear;-o-animation:spin 2s infinite linear;-webkit-animation:spin 2s infinite linear;animation:spin 2s infinite linear}@-moz-keyframes spin{0%{-moz-transform:rotate(0deg)}100%{-moz-transform:rotate(359deg)}}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg)}}@-o-keyframes spin{0%{-o-transform:rotate(0deg)}100%{-o-transform:rotate(359deg)}}@-ms-keyframes spin{0%{-ms-transform:rotate(0deg)}100%{-ms-transform:rotate(359deg)}}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}@-moz-document url-prefix(){.icon-spin{height:.9em}.btn .icon-spin{height:auto}.icon-spin.icon-large{height:1.25em}.btn .icon-spin.icon-large{height:.75em}}.icon-glass:before{content:"\f000"}.icon-music:before{content:"\f001"}.icon-search:before{content:"\f002"}.icon-envelope:before{content:"\f003"}.icon-heart:before{content:"\f004"}.icon-star:before{content:"\f005"}.icon-star-empty:before{content:"\f006"}.icon-user:before{content:"\f007"}.icon-film:before{content:"\f008"}.icon-th-large:before{content:"\f009"}.icon-th:before{content:"\f00a"}.icon-th-list:before{content:"\f00b"}.icon-ok:before{content:"\f00c"}.icon-remove:before{content:"\f00d"}.icon-zoom-in:before{content:"\f00e"}.icon-zoom-out:before{content:"\f010"}.icon-off:before{content:"\f011"}.icon-signal:before{content:"\f012"}.icon-cog:before{content:"\f013"}.icon-trash:before{content:"\f014"}.icon-home:before{content:"\f015"}.icon-file:before{content:"\f016"}.icon-time:before{content:"\f017"}.icon-road:before{content:"\f018"}.icon-download-alt:before{content:"\f019"}.icon-download:before{content:"\f01a"}.icon-upload:before{content:"\f01b"}.icon-inbox:before{content:"\f01c"}.icon-play-circle:before{content:"\f01d"}.icon-repeat:before{content:"\f01e"}.icon-refresh:before{content:"\f021"}.icon-list-alt:before{content:"\f022"}.icon-lock:before{content:"\f023"}.icon-flag:before{content:"\f024"}.icon-headphones:before{content:"\f025"}.icon-volume-off:before{content:"\f026"}.icon-volume-down:before{content:"\f027"}.icon-volume-up:before{content:"\f028"}.icon-qrcode:before{content:"\f029"}.icon-barcode:before{content:"\f02a"}.icon-tag:before{content:"\f02b"}.icon-tags:before{content:"\f02c"}.icon-book:before{content:"\f02d"}.icon-bookmark:before{content:"\f02e"}.icon-print:before{content:"\f02f"}.icon-camera:before{content:"\f030"}.icon-font:before{content:"\f031"}.icon-bold:before{content:"\f032"}.icon-italic:before{content:"\f033"}.icon-text-height:before{content:"\f034"}.icon-text-width:before{content:"\f035"}.icon-align-left:before{content:"\f036"}.icon-align-center:before{content:"\f037"}.icon-align-right:before{content:"\f038"}.icon-align-justify:before{content:"\f039"}.icon-list:before{content:"\f03a"}.icon-indent-left:before{content:"\f03b"}.icon-indent-right:before{content:"\f03c"}.icon-facetime-video:before{content:"\f03d"}.icon-picture:before{content:"\f03e"}.icon-pencil:before{content:"\f040"}.icon-map-marker:before{content:"\f041"}.icon-adjust:before{content:"\f042"}.icon-tint:before{content:"\f043"}.icon-edit:before{content:"\f044"}.icon-share:before{content:"\f045"}.icon-check:before{content:"\f046"}.icon-move:before{content:"\f047"}.icon-step-backward:before{content:"\f048"}.icon-fast-backward:before{content:"\f049"}.icon-backward:before{content:"\f04a"}.icon-play:before{content:"\f04b"}.icon-pause:before{content:"\f04c"}.icon-stop:before{content:"\f04d"}.icon-forward:before{content:"\f04e"}.icon-fast-forward:before{content:"\f050"}.icon-step-forward:before{content:"\f051"}.icon-eject:before{content:"\f052"}.icon-chevron-left:before{content:"\f053"}.icon-chevron-right:before{content:"\f054"}.icon-plus-sign:before{content:"\f055"}.icon-minus-sign:before{content:"\f056"}.icon-remove-sign:before{content:"\f057"}.icon-ok-sign:before{content:"\f058"}.icon-question-sign:before{content:"\f059"}.icon-info-sign:before{content:"\f05a"}.icon-screenshot:before{content:"\f05b"}.icon-remove-circle:before{content:"\f05c"}.icon-ok-circle:before{content:"\f05d"}.icon-ban-circle:before{content:"\f05e"}.icon-arrow-left:before{content:"\f060"}.icon-arrow-right:before{content:"\f061"}.icon-arrow-up:before{content:"\f062"}.icon-arrow-down:before{content:"\f063"}.icon-share-alt:before{content:"\f064"}.icon-resize-full:before{content:"\f065"}.icon-resize-small:before{content:"\f066"}.icon-plus:before{content:"\f067"}.icon-minus:before{content:"\f068"}.icon-asterisk:before{content:"\f069"}.icon-exclamation-sign:before{content:"\f06a"}.icon-gift:before{content:"\f06b"}.icon-leaf:before{content:"\f06c"}.icon-fire:before{content:"\f06d"}.icon-eye-open:before{content:"\f06e"}.icon-eye-close:before{content:"\f070"}.icon-warning-sign:before{content:"\f071"}.icon-plane:before{content:"\f072"}.icon-calendar:before{content:"\f073"}.icon-random:before{content:"\f074"}.icon-comment:before{content:"\f075"}.icon-magnet:before{content:"\f076"}.icon-chevron-up:before{content:"\f077"}.icon-chevron-down:before{content:"\f078"}.icon-retweet:before{content:"\f079"}.icon-shopping-cart:before{content:"\f07a"}.icon-folder-close:before{content:"\f07b"}.icon-folder-open:before{content:"\f07c"}.icon-resize-vertical:before{content:"\f07d"}.icon-resize-horizontal:before{content:"\f07e"}.icon-bar-chart:before{content:"\f080"}.icon-twitter-sign:before{content:"\f081"}.icon-facebook-sign:before{content:"\f082"}.icon-camera-retro:before{content:"\f083"}.icon-key:before{content:"\f084"}.icon-cogs:before{content:"\f085"}.icon-comments:before{content:"\f086"}.icon-thumbs-up:before{content:"\f087"}.icon-thumbs-down:before{content:"\f088"}.icon-star-half:before{content:"\f089"}.icon-heart-empty:before{content:"\f08a"}.icon-signout:before{content:"\f08b"}.icon-linkedin-sign:before{content:"\f08c"}.icon-pushpin:before{content:"\f08d"}.icon-external-link:before{content:"\f08e"}.icon-signin:before{content:"\f090"}.icon-trophy:before{content:"\f091"}.icon-github-sign:before{content:"\f092"}.icon-upload-alt:before{content:"\f093"}.icon-lemon:before{content:"\f094"}.icon-phone:before{content:"\f095"}.icon-check-empty:before{content:"\f096"}.icon-bookmark-empty:before{content:"\f097"}.icon-phone-sign:before{content:"\f098"}.icon-twitter:before{content:"\f099"}.icon-facebook:before{content:"\f09a"}.icon-github:before{content:"\f09b"}.icon-unlock:before{content:"\f09c"}.icon-credit-card:before{content:"\f09d"}.icon-rss:before{content:"\f09e"}.icon-hdd:before{content:"\f0a0"}.icon-bullhorn:before{content:"\f0a1"}.icon-bell:before{content:"\f0a2"}.icon-certificate:before{content:"\f0a3"}.icon-hand-right:before{content:"\f0a4"}.icon-hand-left:before{content:"\f0a5"}.icon-hand-up:before{content:"\f0a6"}.icon-hand-down:before{content:"\f0a7"}.icon-circle-arrow-left:before{content:"\f0a8"}.icon-circle-arrow-right:before{content:"\f0a9"}.icon-circle-arrow-up:before{content:"\f0aa"}.icon-circle-arrow-down:before{content:"\f0ab"}.icon-globe:before{content:"\f0ac"}.icon-wrench:before{content:"\f0ad"}.icon-tasks:before{content:"\f0ae"}.icon-filter:before{content:"\f0b0"}.icon-briefcase:before{content:"\f0b1"}.icon-fullscreen:before{content:"\f0b2"}.icon-group:before{content:"\f0c0"}.icon-link:before{content:"\f0c1"}.icon-cloud:before{content:"\f0c2"}.icon-beaker:before{content:"\f0c3"}.icon-cut:before{content:"\f0c4"}.icon-copy:before{content:"\f0c5"}.icon-paper-clip:before{content:"\f0c6"}.icon-save:before{content:"\f0c7"}.icon-sign-blank:before{content:"\f0c8"}.icon-reorder:before{content:"\f0c9"}.icon-list-ul:before{content:"\f0ca"}.icon-list-ol:before{content:"\f0cb"}.icon-strikethrough:before{content:"\f0cc"}.icon-underline:before{content:"\f0cd"}.icon-table:before{content:"\f0ce"}.icon-magic:before{content:"\f0d0"}.icon-truck:before{content:"\f0d1"}.icon-pinterest:before{content:"\f0d2"}.icon-pinterest-sign:before{content:"\f0d3"}.icon-google-plus-sign:before{content:"\f0d4"}.icon-google-plus:before{content:"\f0d5"}.icon-money:before{content:"\f0d6"}.icon-caret-down:before{content:"\f0d7"}.icon-caret-up:before{content:"\f0d8"}.icon-caret-left:before{content:"\f0d9"}.icon-caret-right:before{content:"\f0da"}.icon-columns:before{content:"\f0db"}.icon-sort:before{content:"\f0dc"}.icon-sort-down:before{content:"\f0dd"}.icon-sort-up:before{content:"\f0de"}.icon-envelope-alt:before{content:"\f0e0"}.icon-linkedin:before{content:"\f0e1"}.icon-undo:before{content:"\f0e2"}.icon-legal:before{content:"\f0e3"}.icon-dashboard:before{content:"\f0e4"}.icon-comment-alt:before{content:"\f0e5"}.icon-comments-alt:before{content:"\f0e6"}.icon-bolt:before{content:"\f0e7"}.icon-sitemap:before{content:"\f0e8"}.icon-umbrella:before{content:"\f0e9"}.icon-paste:before{content:"\f0ea"}.icon-lightbulb:before{content:"\f0eb"}.icon-exchange:before{content:"\f0ec"}.icon-cloud-download:before{content:"\f0ed"}.icon-cloud-upload:before{content:"\f0ee"}.icon-user-md:before{content:"\f0f0"}.icon-stethoscope:before{content:"\f0f1"}.icon-suitcase:before{content:"\f0f2"}.icon-bell-alt:before{content:"\f0f3"}.icon-coffee:before{content:"\f0f4"}.icon-food:before{content:"\f0f5"}.icon-file-alt:before{content:"\f0f6"}.icon-building:before{content:"\f0f7"}.icon-hospital:before{content:"\f0f8"}.icon-ambulance:before{content:"\f0f9"}.icon-medkit:before{content:"\f0fa"}.icon-fighter-jet:before{content:"\f0fb"}.icon-beer:before{content:"\f0fc"}.icon-h-sign:before{content:"\f0fd"}.icon-plus-sign-alt:before{content:"\f0fe"}.icon-double-angle-left:before{content:"\f100"}.icon-double-angle-right:before{content:"\f101"}.icon-double-angle-up:before{content:"\f102"}.icon-double-angle-down:before{content:"\f103"}.icon-angle-left:before{content:"\f104"}.icon-angle-right:before{content:"\f105"}.icon-angle-up:before{content:"\f106"}.icon-angle-down:before{content:"\f107"}.icon-desktop:before{content:"\f108"}.icon-laptop:before{content:"\f109"}.icon-tablet:before{content:"\f10a"}.icon-mobile-phone:before{content:"\f10b"}.icon-circle-blank:before{content:"\f10c"}.icon-quote-left:before{content:"\f10d"}.icon-quote-right:before{content:"\f10e"}.icon-spinner:before{content:"\f110"}.icon-circle:before{content:"\f111"}.icon-reply:before{content:"\f112"}.icon-github-alt:before{content:"\f113"}.icon-folder-close-alt:before{content:"\f114"}.icon-folder-open-alt:before{content:"\f115"}
	</style>
</head>
 <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav level-1">
                <li class="sidenav-search">
                  <form class="sidenav-form" action="../../demo_madebytilde_default_2.html">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Navigation</li>
               <li class="sidenav-item">
                  <a href="dashboard.html">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Dashboard</span>
                  </a>
                </li>

                <li class="sidenav-item">
                  <a href="#">
                    
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Media</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">

                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">News</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Admin Tools</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">
                    
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Event</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Pages</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Seetings</span>
                  </a>
                </li>
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
<body>
<div id="content-wrapper">

	<div style="border:1px #e8e8e8 solid;margin:0px 0px 10px 0px">
		<div style="border-bottom:1px #e8e8e8 solid;background-color:#f3f3f3;padding:8px;font-size:13px;font-weight:700;color:#45484d;">
			Admin Menu Content</div>
		<div style="padding:8px;font-size:13px;">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
			eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
			ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
			aliquip ex ea commodo consequat. Duis aute irure dolor in 
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
			pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
			culpa qui officia deserunt mollit anim id est laborum.		</div>
	</div>

	<div style="border:1px #e8e8e8 solid;width:49%;float:left;margin:10px 0px 10px 0px">
		<div style="border-bottom:1px #e8e8e8 solid;background-color:#f3f3f3;padding:8px;font-size:13px;font-weight:700;color:#45484d;">
			Admin Menu Content</div>
		<div style="padding:8px;font-size:13px;">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
			eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
			ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
			aliquip ex ea commodo consequat. Duis aute irure dolor in 
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
			pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
			culpa qui officia deserunt mollit anim id est laborum.		</div>
	</div>

	<div style="border:1px #e8e8e8 solid;width:49%;float:right;margin:10px 0px 10px 0px">
		<div style="border-bottom:1px #e8e8e8 solid;background-color:#f3f3f3;padding:8px;font-size:13px;font-weight:700;color:#45484d;">
			Admin Menu Content</div>
		<div style="padding:8px;font-size:13px;">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
			eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
			ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
			aliquip ex ea commodo consequat. Duis aute irure dolor in 
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
			pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
			culpa qui officia deserunt mollit anim id est laborum.		</div>
	</div>



</div>
<script

eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(o).i(4(){$("p").q(\'<r t="u" m="9/3-6-0.9"/>\');s a="";$("#3-0").c(4(){$("#3-6-0 #0").g()});$(h).f(4(){$("#3-6-0 #0").j("k")});$("#0 a.l").c(4(){d(a!=""){$("#"+a).n("a").e("7");$("#"+a).b("8")};d(a==$(1).5("2")){$("#"+$(1).5("2")).b("8");$(1).e("7");a=""}v{$("#"+$(1).5("2")).w("8");a=$(1).5("2");$(1).x("7")};y z})});',36,36,'menu|this|name|responsive|function|attr|admin|downarrow|fast|css||slideUp|click|if|removeClass|resize|slideToggle|window|ready|removeAttr|style|submenu|href|prev|document|head|append|link|var|rel|stylesheet|else|slideDown|addClass|return|false'.split('|'),0,{}))</script>


</body>
</html>