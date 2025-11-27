
  
	<script src="../../../use.fontawesome.com/18a9c36ed1.js"></script>
	<link rel="stylesheet" href="{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/animate.css')}}" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<script src="{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/js/jquery-3.1.1.slim.min.js')}}" crossorigin="anonymous"></script>

	<script src="{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/js/wow.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#formButton").click(function () {
				$("#form1").toggle();
			});
		});
	</script>

	<title>Lawyer WordPress Theme &#8211; Just another Luzuk Demo Sites site</title>
	<meta name='robots' content='max-image-preview:large' />
	<style>
		img:is([sizes="auto" i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px
		}
	</style>
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel="alternate" type="application/rss+xml" title="Lawyer Wordpress Theme &raquo; Feed"
		href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Lawyer Wordpress Theme &raquo; Comments Feed"
		href="comments/feed/index.html" />
	<script type="text/javascript">
		/* <![CDATA[ */
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/www.luzukdemo.com\/demo\/expert-lawyer\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3" } };
		/*! This file is auto-generated */
		!function (s, n) { var o, i, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === a[t] }) } function u(e, t) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)if (0 !== n.data[a]) return !1; return !0 } function f(e, t, n, a) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !a(e, "\ud83e\udedf") }return !1 } function g(e, t, n, a) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : s.createElement("canvas"), o = r.getContext("2d", { willReadFrequently: !0 }), i = (o.textBaseline = "top", o.font = "600 32px Arial", {}); return e.forEach(function (e) { i[e] = t(o, e, n, a) }), i } function t(e) { var t = s.createElement("script"); t.src = e, t.defer = !0, s.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { s.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p.toString(), u.toString()].join(",") + "));", a = new Blob([e], { type: "text/javascript" }), r = new Worker(URL.createObjectURL(a), { name: "wpTestEmojiSupports" }); return void (r.onmessage = function (e) { c(n = e.data), r.terminate(), t(n) }) } catch (e) { } c(n = g(i, f, p, u)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
		/* ]]> */
	</script>
	<style id='wp-emoji-styles-inline-css' type='text/css'>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'
		href='expert-lawyer/wp-includes/css/dist/block-library/style.min32d4.css?ver=6.8.3' type='text/css' media='all' />
	<style id='classic-theme-styles-inline-css' type='text/css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id='global-styles-inline-css' type='text/css'>
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='contact-form-7-css'
		href='expert-lawyer/wp-content/plugins/contact-form-7/includes/css/styles6a4d.css?ver=6.1.1' type='text/css' media='all' />
	<link rel='stylesheet' id='custom-style-css'
		href='{{ asset('expert-lawyer/wp-content/plugins/luzuk_announcementbar/css/custom-style4963.css?ver=1.1')}}' type='text/css' media='all' />
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='wpcf7-redirect-script-frontend-css'
		href='{{ asset('expert-lawyer/wp-content/plugins/wpcf7-redirect/build/assets/frontend-script413f.css?ver=2c532d7e2be36f6af233')}}'
		type='text/css' media='all' />
	<link rel='stylesheet' id='luzuk-testimonial-frontend-css'
		href='{{ asset('expert-lawyer/wp-content/plugins/luzuk-testimonial-shortcode-manager/assets/css/frontend8a54.css?ver=1.0.0')}}'
		type='text/css' media='all' />
	<link rel='stylesheet' id='brands-styles-css'
		href='{{ asset('expert-lawyer/wp-content/plugins/woocommerce/assets/css/brands8d49.css?ver=10.2.1')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='lz-fitness-premium-style-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/style32d4.css?ver=6.8.3')}}' type='text/css' media='all' />
	<style id='lz-fitness-premium-style-inline-css' type='text/css'>
		body,
		* {
			font-family: 'Open Sans', sans-serif
		}

		h2.lz-about-heading,
		h2.lz-facility-heading,
		.ht-section-title,
		.lz-fitness-h2,
		.ht-title-wrap,
		.ht-slide-cap-title,
		.ht-slide-cap-title span,
		#ht-princing-post-section .ht-princing-icon,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		#pricing-page .ht-princing-icon .ht-slide-cap-descmore a {
			font-family: 'Open Sans', sans-serif
		}

		header.site-header .top-header {
			background: url('');
			background-repeat: no-repeat;
			background-size: cover
		}

		#ht-masthead,
		.ht-site-description a,
		.page-template-home-template .ht-main-navigation .menu-item>a,
		.ht-main-navigation a,
		.ht-main-navigation ul ul a {
			color: ##666666
		}

		.page-template-home-template .ht-main-navigation .current_page_item>a {
			color: #000;
			background-color: none
		}

		li.current_page_item>a {
			color: #ffffff
		}

		.logobox img {
			margin-top: 35px
		}

		.logobox img {
			margin-bottom: 10px
		}

		.logobox img {
			margin-left: 0px
		}

		.logobox img {
			margin-right: 0px
		}

		button,
		input[type='button'],
		input[type='reset'],
		input[type='submit'],
		.widget-area .widget-title:after,
		h3#reply-title:after,
		h3.comments-title:after,
		.nav-previous a,
		.nav-next a,
		.pagination .page-numbers,
		.ht-progress-bar-length,
		.ht-service-post-wrap:after,
		.ht-service-icon,
		.ht-counter:after,
		.ht-counter:before,
		.ht-testimonial-wrap .bx-wrapper .bx-controls-direction a,
		.ht-cta-buttons a.ht-cta-button1,
		.ht-cta-buttons a.ht-cta-button2:hover,
		#ht-back-top:hover,
		.entry-readmore a,
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.woocommerce ul.products li.product:hover .button,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce nav.woocommerce-pagination ul li a,
		.woocommerce nav.woocommerce-pagination ul li span,
		.woocommerce span.onsale,
		.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
		.woocommerce #respond input#submit.disabled,
		.woocommerce #respond input#submit:disabled,
		.woocommerce #respond input#submit:disabled[disabled],
		.woocommerce a.button.disabled,
		.woocommerce a.button:disabled,
		.woocommerce a.button:disabled[disabled],
		.woocommerce button.button.disabled,
		.woocommerce button.button:disabled,
		.woocommerce button.button:disabled[disabled],
		.woocommerce input.button.disabled,
		.woocommerce input.button:disabled,
		.woocommerce input.button:disabled[disabled],
		.woocommerce #respond input#submit.alt.disabled,
		.woocommerce #respond input#submit.alt.disabled:hover,
		.woocommerce #respond input#submit.alt:disabled,
		.woocommerce #respond input#submit.alt:disabled:hover,
		.woocommerce #respond input#submit.alt:disabled[disabled],
		.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
		.woocommerce a.button.alt.disabled,
		.woocommerce a.button.alt.disabled:hover,
		.woocommerce a.button.alt:disabled,
		.woocommerce a.button.alt:disabled:hover,
		.woocommerce a.button.alt:disabled[disabled],
		.woocommerce a.button.alt:disabled[disabled]:hover,
		.woocommerce button.button.alt.disabled,
		.woocommerce button.button.alt.disabled:hover,
		.woocommerce button.button.alt:disabled,
		.woocommerce button.button.alt:disabled:hover,
		.woocommerce button.button.alt:disabled[disabled],
		.woocommerce button.button.alt:disabled[disabled]:hover,
		.woocommerce input.button.alt.disabled,
		.woocommerce input.button.alt.disabled:hover,
		.woocommerce input.button.alt:disabled,
		.woocommerce input.button.alt:disabled:hover,
		.woocommerce input.button.alt:disabled[disabled],
		.woocommerce input.button.alt:disabled[disabled]:hover,
		.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
		#ht-princing-post-section .ht-princing-icon,
		#ht-princing-post-section .plan-amount,
		.ht-princing-icon,
		.plan-amount,
		.ht-princing-link a:hover,
		.readmore a,
		.page-main-header,
		#ht-contactus-wrap .contact-page-form,
		.contact-mapbox iframe,
		#content-box ol li:before,
		.ht-slide-cap-descmore a,
		.ht-princing-link a,
		.days-time-day,
		.lz-facility-text ul li i,
		.post-right .blog-read-more a,
		.pagingation .current,
		.pagingation a:hover,
		.ht-appintment-member-wrap:after,
		.ht-main-navigation ul ul,
		#featured-post-section .Featured-data:hover,
		#featured-new-section .featured-new-icon:hover,
		#featured-post-section .featured-readmore a.btn,
		.total-count .count,
		.sect-height-appointment-section:after,
		#quote-carousel .carousel-control:hover,
		.faq h6:after,
		.single-productpage #sidebars h3:after,
		#innerpage-box ul.ht-blog-date:before,
		#innerpage-box .inner-blog-post:hover ul.ht-blog-date:before,
		.post-date-publishable,
		#blog-box .excerpt .readMore a:hover,
		#inner-blog-section .excerpt .readMore,
		main#innerpage-box div#sitemap-box h3,
		#innerpage-box .innerblogborder:before,
		#innerpage-box .inner-blog-post:hover .innerblogborder:before,
		.socialMedia a,
		.woocommerce div.product .woocommerce-tabs ul.tabs li:hover,
		#blog-box .blog-read-more a:before,
		.add-to-cart {
			background: #d0ac62
		}

		.ht-post-info .entry-date span.ht-day,
		.entry-categories .fa,
		.widget-area a:hover,
		.comment-list a:hover,
		.no-comments,
		.ht-site-title a,
		.woocommerce .woocommerce-breadcrumb a:hover,
		#total-breadcrumbs a:hover,
		.ht-featured-link a,
		.ht-portfolio-cat-name-list .fa,
		.ht-portfolio-cat-name:hover,
		.ht-portfolio-cat-name.active,
		.ht-portfolio-caption a,
		.ht-team-detail,
		.ht-counter-icon,
		.woocommerce ul.products li.product .price,
		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce .product_meta a:hover,
		.woocommerce-error:before,
		.woocommerce-info:before,
		.woocommerce-message:before,
		.featured-post:after,
		.featured-post:before,
		.featured-link a,
		.breadcrumbbox a,
		#ht-colophon .social-profile-icons a:hover,
		footer#ht-colophon ul li a:hover,
		.ht-footer .textwidget .fa,
		h6.secondry-text,
		#ht-about-us-section ul li:before,
		#ht-team-section .team-member-designation,
		#innerpage-box .team-member-designation,
		.pluses.text-right i.fa.fa-plus,
		.ht-section-tagline.lz-newslatter-text b,
		#content-box ul li:before,
		.page-template-home-template .ht-main-navigation .current_page_item>a,
		#ht-site-navigation ul li a:hover,
		.header-social-links a:hover,
		.lz-featured-Post-heading:before,
		.lz-featured-Post-heading:after,
		.featured-new-post h5:hover,
		#ht-about-us-section .ht-section-tagline span,
		#ht-about-us-section .lz-about-text span,
		.ht-project-member .project-readmore a,
		.ht-team-social-id a:hover,
		.ht-team-member h6:hover,
		.faq-description p a,
		.contact-page-address a,
		.main#innerpage-box span.fa,
		div#sitemap-box ul li a:hover,
		#content-box ol li a,
		#commentsAdd p a,
		.product-name a,
		.cart_totals p a,
		#innerpage-box .socialMedia a:hover,
		.woocommerce p.stars a:hover,
		.star-rating,
		.edit-link a,
		.entry-content p a,
		#blog-box .excerpt h2 a,
		.woocommerce-MyAccount-navigation-link a,
		.woocommerce-MyAccount-navigation-link.is-active a:hover,
		.woocommerce-Address-title a,
		.woocommerce-product-rating a:hover,
		.ht-main-navigation li.current_page_item a,
		.woocommerce-shipping-calculator a,
		blockquote a,
		table th a,
		#content p a,
		.woocommerce-info a,
		#inner-blog-section .excerpt h2 a,
		.lz-fitness-time div:nth-child(8) div.days-time-day {
			color: #d0ac62
		}

		.ht-main-navigation ul ul,
		.ht-featured-link a,
		.ht-counter,
		.ht-testimonial-wrap .bx-wrapper img,
		.ht-blog-post,
		#ht-colophon,
		.woocommerce ul.products li.product:hover,
		.woocommerce-page ul.products li.product:hover,
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.woocommerce ul.products li.product:hover .button,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce div.product .woocommerce-tabs ul.tabs,
		.woocommerce #respond input#submit.alt.disabled,
		.woocommerce #respond input#submit.alt.disabled:hover,
		.woocommerce #respond input#submit.alt:disabled,
		.woocommerce #respond input#submit.alt:disabled:hover,
		.woocommerce #respond input#submit.alt:disabled[disabled],
		.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
		.woocommerce a.button.alt.disabled,
		.woocommerce a.button.alt.disabled:hover,
		.woocommerce a.button.alt:disabled,
		.woocommerce a.button.alt:disabled:hover,
		.woocommerce a.button.alt:disabled[disabled],
		.woocommerce a.button.alt:disabled[disabled]:hover,
		.woocommerce button.button.alt.disabled,
		.woocommerce button.button.alt.disabled:hover,
		.woocommerce button.button.alt:disabled,
		.woocommerce button.button.alt:disabled:hover,
		.woocommerce button.button.alt:disabled[disabled],
		.woocommerce button.button.alt:disabled[disabled]:hover,
		.woocommerce input.button.alt.disabled,
		.woocommerce input.button.alt.disabled:hover,
		.woocommerce input.button.alt:disabled,
		.woocommerce input.button.alt:disabled:hover,
		.woocommerce input.button.alt:disabled[disabled],
		.woocommerce input.button.alt:disabled[disabled]:hover,
		.woocommerce .widget_price_filter .ui-slider .ui-slider-handle .ht-main-navigation .current_page_item>a,
		.ht-main-navigation .current-menu-item>a,
		.ht-main-navigation .current_page_ancestor>a,
		.home.blog .ht-main-navigation li:hover>a,
		.page-template-home-template .ht-main-navigation .current>a,
		.home.blog .ht-main-navigation .current>a,
		.featured-post:before,
		.ht-project-member .project-readmore a,
		#innerpage-box .ht-team-member-image,
		.ht-team-social-id a:hover,
		.lz-featured-Post-heading:before,
		.lz-featured-Post-heading:after,
		.lz-featured-new-heading:before,
		.lz-featured-new-heading:after,
		.lz-about-heading:before,
		.lz-about-heading:after,
		.lz-facility-heading:before,
		.lz-facility-heading:after,
		.lz-team-heading:before,
		.lz-team-heading:after,
		.lz-featured-product-heading:before,
		.lz-featured-product-heading:after,
		.lz-testimonials-heading:before,
		.lz-testimonials-heading:after,
		.faq-heading:before,
		.faq-heading:after,
		.lz-blog-heading:before,
		.lz-blog-heading:after,
		.tag-heading:before,
		.tag-heading:after,
		.ht-team-member-image,
		.lz-project-heading:before,
		.lz-project-heading:after,
		div#sitemap-box ul li a:hover,
		.lz-gallery-images:hover,
		.ht-gallery-member-image:hover,
		.newsletter-form-box input[type='email'] {
			border-color: #d0ac62
		}

		#ht-masthead,
		.woocommerce-error,
		.woocommerce-info,
		.woocommerce-message {
			border-top-color: #d0ac62
		}

		.nav-next a:after {
			border-left-color: #d0ac62
		}

		.nav-previous a:after {
			border-right-color: #d0ac62
		}

		.ht-active .ht-service-icon {
			box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 4px #d0ac62
		}

		.woocommerce ul.products li.product .onsale:after {
			border-color: transparent transparent #685631 #685631
		}

		.woocommerce span.onsale:after {
			border-color: transparent #685631 #685631 transparent
		}

		@media screen and (max-width:768px) {
			.navigation.menuopen {
				background: #3a4559
			}

			.navigation {
				border-color: #d0ac62 !important
			}

			.hamburger-menus span {
				background: #d0ac62 !important
			}
		}

		.title-color {
			color: #fe5722
		}

		.secondry-bg {

			// background-color:#ffffff}{border-color:#ffffff}
			#ht-newslatter-section .lz-newslatter-heading,
			{
			color: #ffffff
		}

			{
			border-color: #ffffff
		}

			{
			background-color: #ffffff
		}

		#product-category-section {
			background-image: url("expert-lawyer/wp-content/themes/expert-lawyer-pro/images/pro-cat-bg.html");
			background-position: top;
			background-size: cover
		}

		#ht-offer-section {
			background-image: url("expert-lawyer/wp-content/themes/expert-lawyer-pro/images/offer-bg.html");
			background-position: top;
			background-size: cover
		}

		#facility-content-section {
			background-image: url("expert-lawyer/wp-content/themes/expert-lawyer-pro/images/facility-bg.jpg");
			background-position: top;
			background-size: cover
		}

		#logofaq-page {
			background-color: #ffffff
		}

		.ht-plan-block {
			border-color: #d0ac62
		}

		.ht-main-title,
		.single-productpage .ht-main-title {
			color: #fff
		}

		.page-main-header {
			background-color: #d0ac62
		}

		.breadcrumbbox span {
			color: #000
		}

		.breadcrumbbox span a {
			color: #d0ac62
		}

		.breadcrumbbox span a:hover {
			color: #3a4559
		}

		.breadcrumbbox {
			background-color: #fff
		}

		.breadcrumbbox {
			border-color: #3a4559
		}

		#ht-colophon .widget-title {
			color: #fff
		}

		#ht-colophon .widget-title:before {
			background-color: #d0ac62
		}

		footer#ht-colophon p i {
			color: #fff
		}

		footer#ht-colophon p i:hover {
			color: #d0ac62
		}

		footer#ht-colophon p {
			color: #ffffff
		}

		footer#ht-colophon ul li a {
			color: #ffffff
		}

		footer#ht-colophon ul li span.post-date {
			color: #fff
		}

		footer#ht-colophon ul li a:hover {
			color: #d0ac62
		}

		#ht-top-footer ul li:before {
			color: #ffffff
		}

		#ht-top-footer ul li:hover:before {
			color: #d0ac62
		}

		#ht-top-footer input[type="text"],
		#ht-top-footer input[type="email"],
		#ht-top-footer input[type="url"],
		#ht-top-footer input[type="password"],
		#ht-top-footer input[type="search"],
		#ht-top-footer input[type="number"],
		#ht-top-footer input[type="tel"],
		#ht-top-footer input[type="range"],
		#ht-top-footer input[type="date"],
		#ht-top-footer input[type="month"],
		#ht-top-footer input[type="week"],
		#ht-top-footer input[type="time"],
		#ht-top-footer input[type="datetime"],
		#ht-top-footer input[type="datetime-local"],
		#ht-top-footer input[type="color"],
		#ht-top-footer textarea,
		#ht-top-footer,
		#ht-top-footer select,
		#ht-top-footer input::placeholder,
		#ht-top-footer textarea::placeholder {
			color: #fff
		}

		#ht-top-footer input[type="text"],
		#ht-top-footer input[type="email"],
		#ht-top-footer input[type="url"],
		#ht-top-footer input[type="password"],
		#ht-top-footer input[type="search"],
		#ht-top-footer input[type="number"],
		#ht-top-footer input[type="tel"],
		#ht-top-footer input[type="range"],
		#ht-top-footer input[type="date"],
		#ht-top-footer input[type="month"],
		#ht-top-footer input[type="week"],
		#ht-top-footer input[type="time"],
		#ht-top-footer input[type="datetime"],
		#ht-top-footer input[type="datetime-local"],
		#ht-top-footer input[type="color"],
		#ht-top-footer textarea,
		#ht-top-footer select {
			border-color: #fff
		}

		.ht-top-footer input[type="submit"] {
			color: #fff
		}

		.ht-top-footer input[type="submit"] {
			background-color: #d0ac62
		}

		.social-profile-icons ul li i {
			color: #fff
		}

		.social-profile-icons ul li i:hover {
			color: #fff
		}

		.social-profile-icons ul li i:hover {
			background-color: #d0ac62
		}

		.social-profile-icons ul li i {
			border-color: #4c3a37
		}

		.social-profile-icons ul li i:hover {
			border-color: #d0ac62
		}

		.ht-site-info {
			color: #fff
		}

		#ht-top-footer .footborder {
			border-color: #dadada
		}

		#ht-bottom-footer .ht-site-info:after {
			background-color: #ff6796
		}

		#ht-about-us-section .lz-about-heading,
		#ht-about-us-section .lz-about-heading small,
		.ht-content.lz-about-text h3 {
			color: #272e3e
		}

		#ht-about-us-section .ht-section-title:after {
			border-color: #d0ac62
		}

		#ht-about-us-section .lz-about-subheading {
			color: #292e42
		}

		#ht-about-us-section .ht-section-tagline,
		#ht-about-us-section ul li,
		#ht-about-us-section .lz-about-text {
			color: #303030
		}

		#ht-about-us-section .lz-about-text span {
			color: #d0ac62
		}

		#ht-about-us-section .readmore a {
			color: #fff
		}

		#ht-about-us-section .readmore a {
			background-color: #d0ac62
		}

		#ht-about-us-section .readmore a:hover {
			color: #fff
		}

		#ht-about-us-section .readmore a:before {
			background-color: #3a4559
		}

		#ht-about-us-section .aboutbox-img:before,
		#ht-about-us-section .aboutbox-img:after {
			border-color: #d0ac62
		}

		.aboutimgborder:before,
		.aboutimgborder:after {
			border-color: #fff
		}

		#logo-section .ht-section-title,
		#logo-section .ht-section-title small {
			color: #272e3e
		}

		#logo-section .ht-section-title:after {
			border-color: #d0ac62
		}

		#logo-section .lz-logo-subheading {
			color: #292e42
		}

		#logofaq-page #quote-carousel .carousel-indicators li {
			background-color: #9c9a9b
		}

		#logofaq-page #quote-carousel .carousel-indicators .active {
			background-color: #d0ac62
		}

		#logo-section #quote-carousel .carousel-indicators li:hover {
			background-color: #d0ac62
		}

		#logo-section #quote-carousel .carousel-indicators li {
			border-color: #9c9a9b
		}

		#logo-section #quote-carousel .carousel-indicators .activele {
			border-color: #d0ac62
		}

		#logo-section #quote-carousel .carousel-indicators li:hover {
			border-color: #d0ac62
		}

		#faq-section .ht-section-title,
		#faq-section .ht-section-title small {
			color: #272e3e
		}

		#faq-section .ht-section-title:after {
			border-color: #d0ac62
		}

		#faq-section .faq-subheading {
			color: #292e42
		}

		#faq-section .faq h6,
		#faq-section .faq h6 small {
			color: #fff
		}

		#faq-section .faq h6 {
			background-color: #3a4559
		}

		#faq-section .faq .faq-content:hover h6 {
			background-color: #d0ac62
		}

		#faq-section p {
			color: #464646
		}

		#faq-section .faq h6:after {
			color: #fff
		}

		#faq-section {
			border-left-color: #cdcdcd
		}

		#ht-offer-section .offercall,
		#ht-offer-section .offershape:before,
		#ht-offer-section .offershape:after {
			background-color: #ff6796
		}

		#ht-offer-section .offercall:before,
		#ht-offer-section .offercall:after {
			background-color: #d41d56
		}

		#ht-offer-section .offercall .offertext {
			color: #fff
		}

		#ht-offer-section .offercall .offernum {
			color: #fff
		}

		#ht-offer-section .offercontent .offertitle {
			color: #fff
		}

		#ht-offer-section .offercontent .offertextcode {
			color: #01beff
		}

		#ht-offer-section .offreadmore a {
			color: #fff
		}

		#ht-offer-section .offreadmore a {
			background-color: #01beff
		}

		#ht-offer-section .offreadmore a:hover {
			color: #fff
		}

		#ht-offer-section .offreadmore a:before {
			background-color: #ff6796
		}

		#oursteps-content-section .lz-oursteps-heading {
			color: #303030
		}

		#oursteps-content-section .ht-section-title-tagline:before,
		#oursteps-content-section .ht-section-title-tagline:after,
		#oursteps-content-section .dlab-separator[class*="style-"]:before,
		#oursteps-content-section .dlab-separator[class*="style-"]:after {
			border-color: #1cb9c8
		}

		#oursteps-content-section .roadmap-outer .year {
			color: #1cb9c8
		}

		#oursteps-content-section .roadmap-outer .roadmap:nth-child(2n) .year {
			color: #44d3e0
		}

		#oursteps-content-section .roadmap-outer .year {
			background-color: #fff
		}

		#oursteps-content-section .roadmap-outer .roadmap:nth-child(2n) .roadmap-content,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(2n) .roadmap-content:before,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(3n) .roadmap-content,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(3n) .roadmap-content:before,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(4n) .roadmap-content,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(4n) .roadmap-content:before {
			background-color: #1cb9c8
		}

		#oursteps-content-section .roadmap-outer .roadmap:nth-child(2n) .roadmap-icon,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(4n) .roadmap-icon,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(3n) .roadmap-icon,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(3n) .roadmap-icon {
			border-top-color: #1cb9c8
		}

		#oursteps-content-section .roadmap-outer .roadmap:nth-child(2n) .roadmap-icon,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(4n) .roadmap-icon,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(3n) .roadmap-icon,
		#oursteps-content-section .roadmap-outer .roadmap:nth-child(3n) .roadmap-icon {
			border-right-color: #1cb9c8
		}

		#oursteps-content-section .roadmap-outer .roadmap-content,
		#oursteps-content-section .roadmap-outer .roadmap-content:before {
			background-color: #44d3e0
		}

		#oursteps-content-section .roadmap-outer .roadmap-icon {
			border-top-color: #44d3e0
		}

		#oursteps-content-section .roadmap-outer .roadmap-icon {
			border-right-color: #44d3e0
		}

		#oursteps-content-section .roadmap-outer h2 {
			color: #fff
		}

		#oursteps-content-section .roadmap-outer p {
			color: #fff
		}

		#product-category-section .ht-section-title {
			color: #fff
		}

		#product-category-section .dlab-separator[class*="style-"]:before,
		#product-category-section .dlab-separator[class*="style-"]:after {
			border-color: #fff
		}

		#product-category-section .dlab-separator.style-icon i {
			color: #fff
		}

		#product-category-section .pro-cat-img:after {
			background-color: #01beff
		}

		#product-category-section .pro-cat-content span h5 a {
			color: #fff
		}

		#product-category-section .pro-cat-content p.catdesc {
			color: #fff
		}

		#product-category-section .pro-cat-content {
			background-color: #ff6796
		}

		#product-category-section .procat-separator-svg {
			fill: #ff6796
		}

		#product-category-section .cat-product:hover .pro-cat-content span h5 a {
			color: #000
		}

		#product-category-section .cat-product:hover .pro-cat-content p.catdesc {
			color: #000
		}

		#product-category-section .cat-product:hover .pro-cat-content {
			background-color: #fff
		}

		#product-category-section .cat-product:hover .procat-separator-svg {
			fill: #fff
		}

		#product-category-section .owl-nav button.owl-prev span {
			color: #a59f95
		}

		#product-category-section .owl-carousel .owl-nav button.owl-prev,
		#product-category-section .owl-carousel button.owl-dot {
			border-color: #a59f95
		}

		#product-category-section .owl-nav button.owl-next span {
			color: #a59f95
		}

		#product-category-section .owl-carousel .owl-nav button.owl-next,
		#product-category-section .owl-carousel button.owl-dot {
			border-color: #a59f95
		}

		#product-category-section .owl-nav button.owl-prev:hover span {
			color: #fff
		}

		#product-category-section .owl-carousel .owl-nav button.owl-prev:hover,
		#product-category-section .owl-carousel button.owl-dot:hover {
			border-color: #fff
		}

		#product-category-section .owl-nav button.owl-next:hover span {
			color: #fff
		}

		#product-category-section .owl-carousel .owl-nav button.owl-next:hover,
		#product-category-section .owl-carousel button.owl-dot:hover {
			border-color: #fff
		}

		#counter-section .counter-number.count {
			color: #272c3f
		}

		#counter-section .details .counter-post {
			border-color: #cccccc
		}

		#counter-section .counter-post h5,
		#counter-section .counter-post h5 small {
			color: #323232
		}

		#counter-section .counter-post:hover .counter-number.count {
			color: #d0ac62
		}

		#counter-section .counter-post:hover h5,
		#counter-section .counter-post:hover h5 small {
			color: #3a4559
		}

		#innerpage-box .lz-gallery-images img,
		#innerpage-box .ht-gallery-member-image img {
			border-color: #d0ac62
		}

		#innerpage-box .ht-gallery-member-image:after,
		#innerpage-box .ht-gallery-member-image:before,
		#innerpage-box .ht-gallery-member:before,
		#innerpage-box .ht-gallery-member:after {
			border-color: #3a4559
		}

		.lz-gallery-heading {
			color: #444444
		}

		#ht-gallery-section .dlab-separator[class*="style-"]:before,
		#ht-gallery-section .dlab-separator[class*="style-"]:after {
			border-color: #01beff
		}

		#ht-gallery-section .dlab-separator.style-icon i {
			color: #ff6796
		}

		#ht-gallery-section .lz-gallery-images img,
		#ht-gallery-section .ht-gallery-member-image img {
			border-color: #ffc4d6
		}

		#ht-gallery-section .ctrl-btn.pro-prev {
			color: #9d9d9d
		}

		#ht-gallery-section .ctrl-btn.pro-prev {
			border-color: #9d9d9d
		}

		#ht-gallery-section .ctrl-btn.pro-prev:hover {
			color: #01beff
		}

		#ht-gallery-section .ctrl-btn.pro-prev:hover {
			border-color: #01beff
		}

		#ht-gallery-section .ctrl-btn.pro-next {
			color: #9d9d9d
		}

		#ht-gallery-section .ctrl-btn.pro-next {
			border-color: #9d9d9d
		}

		#ht-gallery-section .ctrl-btn.pro-next:hover {
			color: #01beff
		}

		#ht-gallery-section .ctrl-btn.pro-next:hover {
			border-color: #01beff
		}

		#innerpage-box .faq h6 {
			border-color: #3a4559
		}

		#innerpage-box .faq h6 {
			border-bottom-color: #d0ac62
		}

		#innerpage-box .faq h6 {
			border-right-color: #d0ac62
		}

		#innerpage-box .faq h6,
		#innerpage-box .faq h6 small {
			color: #000
		}

		#innerpage-box .faq h6:after {
			color: #fff
		}

		#innerpage-box .faq h6:before {
			border-top-color: #d0ac62
		}

		#innerpage-box .faq-description p {
			color: #333333
		}

		#innerpage-box .faq-description {
			background-color: #fff9ec
		}

		#innerpage-box .faq-description {
			border-color: #3a4559
		}

		#innerpage-box .faq-description {
			border-right-color: #d0ac62
		}

		header.site-header .header-right-box i {
			color: #d0ac62
		}

		header.site-header .header-right-box .headbox:hover i {
			color: #3a4559
		}

		header.site-header .contact-border .contactlabel {
			color: #303030
		}

		.header-right-box .mailto a {
			color: #303030
		}

		.header-right-box .mailto a:hover {
			color: #d1ac66
		}

		header.site-header .shadeheadbox i {
			color: #d0ac62
		}

		header.site-header .shadeheadbox:hover i {
			color: #fff
		}

		.contactspade-border .themetext a {
			color: #fff
		}

		.header-social-links a span {
			color: #fff
		}

		.header-social-links a span:hover {
			color: #d0ac62
		}

		ul.mainmenu li a {
			color: #fff
		}

		ul.mainmenu li.current_page_item a,
		.page-template-home-template .ht-main-navigation .current_page_item>a {
			color: #fff
		}

		header.site-header li.current_page_item>a {
			background-color: #d0ac62
		}

		ul.mainmenu li a:hover {
			color: #fff
		}

		ul.mainmenu li a:hover {
			background-color: #d0ac62
		}

		.mainmenu .sub-menu li a {
			color: #fff
		}

		ul.sub-menu {
			background-color: #3a4559
		}

		ul.sub-menu {
			border-color: #d1ac66 !important
		}

		.mainmenu .sub-menu li a:hover {
			color: #d1ac66 !important
		}

		ul.mainmenu ul.sub-menu li a:before {
			color: #d1ac66
		}

		ul.sub-menu li.current_page_item a {
			color: #fff
		}

		ul.sub-menu li.current_page_item a {
			background-color: #d1ac66
		}

		header.site-header .medal-header {
			background-color: #3a4559
		}

		header.site-header .top-header {
			background-color: #fff
		}

		header.site-header .headershede {
			background-color: #3a4559
		}

		.ht-main-navigation .ht-menu {
			background-color: #3a4559
		}

		.toggle-bar {
			background-color: #d0ac62
		}

		.header-inquiry-btn .head-button a {
			color: #fff
		}

		.header-inquiry-btn .head-button a {
			background-color: #d0ac62
		}

		.header-inquiry-btn .head-button a:hover {
			color: #fff
		}

		.header-inquiry-btn .head-button a:before {
			background-color: #3a4559
		}

		.ht-main-title {
			color: #fff
		}

		.contact-page-address .ht-section-tagline {
			color: #444
		}

		.contact-page-address .ht-section-tagline .fa {
			color: #444
		}

		.contact-page-address .contact-info {
			color: #444
		}

		#innerpage-box .contact-info a {
			color: #d0ac62
		}

		#innerpage-box .contact-info a:hover {
			color: #3a4559
		}

		#ht-contactus-wrap h4,
		#ht-contactus-wrap h4 small {
			color: #fff
		}

		#ht-contactus-wrap .contact-page-form {
			background-color: #d0ac62
		}

		#ht-contactus-wrap label {
			color: #fff
		}

		#ht-contactus-wrap input[type="text"],
		#ht-contactus-wrap input[type="email"],
		#ht-contactus-wrap input[type="url"],
		#ht-contactus-wrap input[type="password"],
		#ht-contactus-wrap input[type="search"],
		#ht-contactus-wrap input[type="number"],
		#ht-contactus-wrap input[type="tel"],
		#ht-contactus-wrap input[type="range"],
		#ht-contactus-wrap input[type="date"],
		#ht-contactus-wrap input[type="month"],
		#ht-contactus-wrap input[type="week"],
		#ht-contactus-wrap input[type="time"],
		#ht-contactus-wrap input[type="datetime"],
		#ht-contactus-wrap input[type="datetime-local"],
		#ht-contactus-wrap input[type="color"],
		#ht-contactus-wrap select,
		#ht-contactus-wrap textarea,
		#ht-contactus-wrap input::placeholder,
		#ht-contactus-wrap textarea::placeholder,
		#ht-contactus-wrap select::placeholder {
			color: #fff
		}

		#ht-contactus-wrap input[type="text"],
		#ht-contactus-wrap input[type="email"],
		#ht-contactus-wrap input[type="url"],
		#ht-contactus-wrap input[type="password"],
		#ht-contactus-wrap input[type="search"],
		#ht-contactus-wrap input[type="number"],
		#ht-contactus-wrap input[type="tel"],
		#ht-contactus-wrap input[type="range"],
		#ht-contactus-wrap input[type="date"],
		#ht-contactus-wrap input[type="month"],
		#ht-contactus-wrap input[type="week"],
		#ht-contactus-wrap input[type="time"],
		#ht-contactus-wrap input[type="datetime"],
		#ht-contactus-wrap input[type="datetime-local"],
		#ht-contactus-wrap input[type="color"],
		#ht-contactus-wrap select,
		#ht-contactus-wrap textarea {
			border-color: #fff
		}

		#ht-contactus-wrap input[type="submit"] {
			color: #d0ac62
		}

		#ht-contactus-wrap input[type="submit"] {
			background-color: #fff
		}

		#ht-contactus-wrap input[type="submit"]:hover {
			color: #fff
		}

		#ht-contactus-wrap input[type="submit"]:hover {
			background-color: #3a4559
		}

		#ht-contactus-wrap .contact-page-form {
			color: #fff
		}

		#ht-contactus-wrap h3,
		#ht-contactus-wrap h3 small {
			color: #303030
		}

		#ht-contactus-wrap .contact-sm-links li a {
			color: #d0ac62
		}

		#ht-contactus-wrap .contact-sm-links li a {
			background-color: #eaeaea
		}

		#innerpage-box span.fa:hover,
		#ht-contactus-wrap .contact-sm-links li a:hover {
			color: #fff
		}

		#ht-contactus-wrap .contact-sm-links li a:hover {
			background-color: #d0ac62
		}

		.contact-mapbox iframe {
			background-color: #d0ac62
		}

		.ht-slide-cap-title span,
		.ht-slide-cap-title {
			color: #fff
		}

		.ht-slide-cap-desc {
			color: #fff
		}

		.slider-highlight {
			color: #fff
		}

		.slider-highlight {
			background-color: #d0ac62
		}

		.sliderbtn .ht-slide-cap-descmore a {
			color: #fff
		}

		.sliderbtn .ht-slide-cap-descmore a {
			border-color: #fff
		}

		.sliderbtn .ht-slide-cap-descmore a:hover {
			color: #fff
		}

		.sliderbtn .ht-slide-cap-descmore a:before {
			background-color: #d0ac62
		}

		.sliderbtn .ht-slide-cap-descmore a:hover {
			border-color: #d0ac62
		}

		.ht-section-gurantybox h2.lz-guranty-heading {
			color: #000
		}

		.ht-section-gurantybox h2.lz-guranty-heading span {
			color: #1cb9c8
		}

		.ht-section-gurantybox h2.lz-guranty-heading {
			border-color: #fff
		}

		.ht-section-gurantybox .lz-guranty-text {
			color: #464648
		}

		.wave-border svg path {
			fill: #fff
		}

		.lz-facility-heading,
		.lz-facility-heading small {
			color: #fff
		}

		#facility-content-section .ht-section-title:after {
			border-color: #d5b779
		}

		#facility-content-section .lz-facility-subheading {
			color: #fff
		}

		#facility-content-section .faclefttitle {
			color: #fff
		}

		#facility-content-section .facleftdecs p,
		#facility-content-section .facleftdecs {
			color: #fff
		}

		#facility-content-section .facilityleftbox {
			background-color: #3a4559
		}

		#facility-content-section .facility-icon span {
			color: #d5b779
		}

		#facility-content-section .facility-post:hover .facility-icon span {
			color: #fff
		}

		#facility-content-section h5,
		#facility-content-section h5 small {
			color: #292f3f
		}

		#facility-content-section .facility-post:hover h5,
		#facility-content-section .facility-post:hover h5 small {
			color: #fff
		}

		#facility-content-section .content-box .facility-data {
			color: #303030
		}

		#facility-content-section .facility-post:hover .content-box .facility-data {
			color: #fff
		}

		#facility-content-section .facility-post:hover {
			background-color: #d0ac62
		}

		#facility-content-section .facilityrightbox {
			background-color: #fff
		}

		.lz-featured-Post-heading,
		.lz-featured-Post-heading small {
			color: #272e3e
		}

		#featured-post-section .ht-section-title:after {
			border-color: #d0ac62
		}

		#featured-post-section .lz-featured-subheading {
			color: #292e42
		}

		#featured-post-section .featured-icon span {
			color: #d0ac62
		}

		#featured-post-section .featured-post-box:hover .featured-icon span {
			color: #3a4559
		}

		#featured-post-section .featured-post h5 {
			color: #282d40
		}

		#featured-post-section .featured-post-box:hover .featured-data h5 {
			color: #d0ac62
		}

		#featured-post-section .featurborder:after {
			background-color: #d0ac62
		}

		#featured-post-section .featured-post-box:hover .featurborder:after {
			background-color: #d0ac62
		}

		#featured-post-section .featured-post-box .featured-data p {
			color: #303030
		}

		#innerpage-box .featured-post h5 {
			color: #3a4559
		}

		#innerpage-box .featured-post-box .featured-data p {
			color: #383838
		}

		#innerpage-box .featured-post-box:hover .featured-data h5 {
			color: #d0ac62
		}

		#innerpage-box .featured-post-box .featured-data {
			background-color: #fff
		}

		#innerpage-box .featured-post-box .featured-data:after {
			background-color: #3a4559
		}

		.lz-featured-new-heading {
			color: #fff
		}

		.featured-new-post h5 {
			color: #fff
		}

		#featured-new-section .featured-new-icon span {
			color: #303030
		}

		.featured-new-excerpt {
			color: #fff
		}

		#featured-product-section .lz-featured-product-heading {
			color: #303030
		}

		#featured-product-section .dlab-separator[class*="style-"]:before,
		#featured-product-section .dlab-separator[class*="style-"]:after {
			border-color: #01beff
		}

		#featured-product-section .dlab-separator.style-icon i {
			color: #ff6796
		}

		#featured-product-section .total-product-title-wrap {
			background-color: #fff
		}

		.total-product-title-wrap h6 {
			color: #444444
		}

		#recent-porduct .price del span.woocommerce-Price-amount {
			color: #444444
		}

		#recent-porduct .price ins span.woocommerce-Price-amount {
			color: #444444
		}

		#recent-porduct .price ins span.woocommerce-Price-amount {
			background-color: #96e4ff
		}

		#recent-porduct .add-to-cart a {
			color: #fff
		}

		#recent-porduct .add-to-cart a {
			background-color: #01beff
		}

		#recent-porduct .add-to-cart a:hover {
			color: #fff
		}

		#recent-porduct .add-to-cart a:before {
			background-color: #ff6796
		}

		#featured-product-section .ctrl-btn.pro-prev {
			color: #bfbfbf
		}

		#featured-product-section .ctrl-btn.pro-prev {
			border-color: #bfbfbf
		}

		#featured-product-section .ctrl-btn.pro-prev:hover {
			color: #01beff
		}

		#featured-product-section .ctrl-btn.pro-prev:hover {
			border-color: #01beff
		}

		#featured-product-section .ctrl-btn.pro-next {
			color: #bfbfbf
		}

		#featured-product-section .ctrl-btn.pro-next {
			border-color: #bfbfbf
		}

		#featured-product-section .ctrl-btn.pro-next:hover {
			color: #01beff
		}

		#featured-product-section .ctrl-btn.pro-next:hover {
			border-color: #01beff
		}

		.section-waveshape svg.header-separator-svg {
			fill: #fff
		}

		#ht-project-section .ht-section-title-tagline:before,
		#ht-project-section .ht-section-title-tagline:after,
		#ht-project-section .dlab-separator[class*="style-"]:before,
		#ht-project-section .dlab-separator[class*="style-"]:after {
			border-color: #1cb9c8
		}

		h2.ht-section-title.lz-project-heading {
			color: #303030
		}

		.ht-project-member .team-prof .post-title {
			color: #ffffff
		}

		.ht-project-member .team-prof {
			background-color: #1cb9c8
		}

		.ht-project-member .project-main-box {
			background-color: #1cb9c8
		}

		section#ht-project-section .project-button a,
		main#innerpage-box .project-button a {
			color: #000
		}

		section#ht-project-section .project-button a:hover,
		main#innerpage-box .project-button a:hover {
			color: #ffffff
		}

		#ht-project-section .readmore-btn a {
			color: #fff
		}

		#ht-project-section .readmore-btn {
			background-color: #1cb9c8
		}

		section#ht-project-section i.fa.fa-arrow-right {
			color: #fff
		}

		#ht-project-section .readmore-btn a:hover {
			color: #ffffff
		}

		#ht-project-section .readmore-btn:before,
		#ht-project-section .readmore-btn:hover {
			background-color: #3a3c3d
		}

		section#ht-project-section .readmore-btn a:hover i.fa.fa-arrow-right {
			color: #1cb9c8
		}

		#innerpage-box .ht-project-member .team-prof .post-title {
			color: #ffffff
		}

		#innerpage-box .ht-project-member .team-prof {
			background-color: #1cb9c8
		}

		#innerpage-box .ht-project-member .project-main-box {
			background-color: #1cb9c8
		}

		#innerpage-box .project-button a,
		main#innerpage-box .project-button a {
			color: #000
		}

		#innerpage-box .project-button a:hover,
		main#innerpage-box .project-button a:hover {
			color: #ffffff
		}

		h2.ht-section-title.lz-team-heading {
			color: #444444
		}

		#ht-team-section .dlab-separator[class*="style-"]:before,
		#ht-team-section .dlab-separator[class*="style-"]:after {
			border-color: #01beff
		}

		#ht-team-section .dlab-separator.style-icon i {
			color: #ff6796
		}

		#ht-team-section .ht-team-member h6 {
			color: #444444
		}

		#ht-team-section .ht-team-member:hover h6 {
			color: #ff6796
		}

		#ht-team-section .team-member-designation,
		.ht-team-member .ht-team-designation {
			color: #2f2f2f
		}

		#ht-team-section .team-member-designation:after {
			background-color: #01befe
		}

		#ht-team-section .team-content {
			color: #2e2e2e
		}

		.teamwavecurve svg.header-separator-svg {
			fill: #fff
		}

		#innerpage-box .ht-team-member .spinner {
			border-color: #3a4559
		}

		#innerpage-box .ht-team-member .spinner {
			border-right-color: #d0ac62
		}

		#innerpage-box .ht-team-member .spinner {
			border-bottom-color: #d0ac62
		}

		#innerpage-box .ht-team-member h6,
		#innerpage-box .ht-team-member h6 small {
			color: #3a4559
		}

		#innerpage-box .ht-team-member:hover h6 {
			color: #d0ac62
		}

		#innerpage-box .team-member-designation {
			color: #000
		}

		#innerpage-box .team-content {
			color: #2e2e2e
		}

		#innerpage-box .ht-team-social-id {
			border-top-color: #3a4559
		}

		#innerpage-box .ht-team-member:hover .teaminnerborder:after {
			background-color: #d0ac62
		}

		#innerpage-box .ht-team-social-id a {
			color: #3a4559
		}

		#innerpage-box .ht-team-social-id a {
			border-color: #3a4559
		}

		#innerpage-box .ht-team-social-id a:hover {
			color: #d0ac62
		}

		#innerpage-box .ht-team-social-id a:hover {
			border-color: #d0ac62
		}

		#testimonials-section .lz-testimonials-heading,
		#testimonials-section .lz-testimonials-heading small {
			color: #282d40
		}

		#testimonials-section .ht-section-title:after {
			border-color: #d0ac62
		}

		#testimonials-section .lz-testimonial-subheading {
			color: #272e40
		}

		#testimonials-section h6,
		#testimonials-section h6 small {
			color: #d0ac62
		}

		#testimonials-section .text-designation {
			color: #303030
		}

		#testimonials-section .test-content {
			color: #444444
		}

		#testimonials-section .test-content:before {
			color: #d0ac62
		}

		#testimonials-section .ht-test-member:hover .test-content:before {
			color: #3a4559
		}

		#testimonials-section .ht-test-member:hover h6,
		#testimonials-section .ht-test-member:hover h6 small {
			color: #3a4559
		}

		#testimonials-section .ht-test-member:hover .text-designation {
			color: #d0ac62
		}

		#testimonials-section .owl-theme .owl-dots .owl-dot span {
			background-color: #9c9a9b
		}

		#testimonials-section .owl-theme .owl-dots .owl-dot.active span {
			background-color: #d0ac62
		}

		#testimonials-section .owl-theme .owl-dots .owl-dot:hover span {
			background-color: #d0ac62
		}

		#innerpage-box .test-content {
			color: #fff
		}

		#innerpage-box .ht-test-member h6.member-name,
		#innerpage-box .ht-test-member h6.member-name small {
			color: #fff
		}

		#innerpage-box .ht-test-member:hover h6.member-name,
		#innerpage-box .ht-test-member:hover h6.member-name small {
			color: #3b4559
		}

		#innerpage-box .ht-test-member .text-designation {
			color: #fff
		}

		#innerpage-box .ht-test-member {
			background-color: #3b4559
		}

		#innerpage-box .ht-test-member:hover {
			background-color: #d0ac62
		}

		#innerpage-box .ht-test-member:before {
			border-top-color: #d0ac62
		}

		#innerpage-box .ht-test-member:after {
			border-bottom-color: #d0ac62
		}

		#innerpage-box .ht-test-member:hover:before {
			border-top-color: #3b4559
		}

		#innerpage-box .ht-test-member:hover:after {
			border-bottom-color: #3b4559
		}

		.faq-heading {
			color: #161616
		}

		.faq h6 {
			color: #161616
		}

		.faq-description {
			color: #333333
		}

		.lz-gym-heading {
			color: #323232
		}

		.lz-fitness-time .days-time-day-time {
			color: #232222
		}

		.lz-appointment-heading,
		.lz-appointment-heading small {
			color: #fff
		}

		#ht-appintment-section .ht-section-title:after {
			border-color: #d0ac62
		}

		#ht-appintment-section .lz-appointment-subheading {
			color: #fff
		}

		#ht-appintment-section .appointimg:after {
			background-color: #d0ac62
		}

		#ht-appintment-section select,
		.ht-appintment-member-wrap input[type="text"],
		.ht-appintment-member-wrap input[type="email"],
		.ht-appintment-member-wrap input[type="url"],
		.ht-appintment-member-wrap input[type="password"],
		.ht-appintment-member-wrap input[type="search"],
		.ht-appintment-member-wrap input[type="number"],
		.ht-appintment-member-wrap input[type="tel"],
		.ht-appintment-member-wrap input[type="range"],
		.ht-appintment-member-wrap input[type="date"],
		.ht-appintment-member-wrap input[type="month"],
		.ht-appintment-member-wrap input[type="week"],
		.ht-appintment-member-wrap input[type="time"],
		.ht-appintment-member-wrap input[type="datetime"],
		.ht-appintment-member-wrap input[type="datetime-local"],
		.ht-appintment-member-wrap input[type="color"],
		.ht-appintment-member-wrap textarea,
		#ht-appintment-section .ht-appintment-member-wrap input::placeholder,
		#ht-appintment-section .ht-appintment-member-wrap textarea::placeholder {
			color: #fff
		}

		#ht-appintment-section select,
		.ht-appintment-member-wrap input[type="text"],
		.ht-appintment-member-wrap input[type="email"],
		.ht-appintment-member-wrap input[type="url"],
		.ht-appintment-member-wrap input[type="password"],
		.ht-appintment-member-wrap input[type="search"],
		.ht-appintment-member-wrap input[type="number"],
		.ht-appintment-member-wrap input[type="tel"],
		.ht-appintment-member-wrap input[type="range"],
		.ht-appintment-member-wrap input[type="date"],
		.ht-appintment-member-wrap input[type="month"],
		.ht-appintment-member-wrap input[type="week"],
		.ht-appintment-member-wrap input[type="time"],
		.ht-appintment-member-wrap input[type="datetime"],
		.ht-appintment-member-wrap input[type="datetime-local"],
		.ht-appintment-member-wrap input[type="color"],
		.ht-appintment-member-wrap textarea {
			border-color: #fff
		}

		section#ht-appintment-section .ht-appintment-member-wrap input[type="submit"] {
			color: #fff
		}

		section#ht-appintment-section .ht-appintment-member-wrap input[type="submit"] {
			background-color: #d0ac62
		}

		section#ht-appintment-section .ht-appintment-member-wrap input[type="submit"] {
			border-color: #d0ac62
		}

		section#ht-appintment-section .ht-appintment-member-wrap input[type="submit"]:hover {
			color: #d0ac62
		}

		section#ht-appintment-section .ht-appintment-member-wrap input[type="submit"]:hover {
			border-color: #fff
		}

		section#ht-appintment-section .ht-appintment-member-wrap input[type="submit"]:hover {
			background-color: #fff
		}

		.ht-appintment-member-wrap label {
			color: #fff
		}

		.ht-appintment-member-wrap {
			color: #fff
		}

		#ht-appintment-section .appointspace {
			background-color: #3a4559
		}

		#ht-contact-section .contact-icon span {
			color: #d0ac62
		}

		#ht-contact-section .contact-small-box:hover .contact-icon span {
			color: #fff
		}

		#ht-contact-section .contact-small-box:hover .contact-icon span {
			background-color: #d0ac62
		}

		#ht-contact-section .contact-content,
		#ht-contact-section .contact-content a {
			color: #2f2f2f
		}

		#ht-contact-section .contact-content a:hover {
			color: #d0ac62
		}

		#ht-contact-section .contactsection-links li a {
			color: #d0ac62
		}

		#ht-contact-section .contactsection-links li a {
			border-color: #d0ac62
		}

		#ht-contact-section .contactsection-links li a:hover {
			color: #3a4559
		}

		#ht-contact-section .contactsection-links li a:hover {
			border-color: #3a4559
		}

		#ht-blog-section .lz-blog-heading,
		#ht-blog-section .lz-blog-heading small {
			color: #282d40
		}

		#ht-blog-section .ht-section-title:after {
			border-color: #d0ac62
		}

		#ht-blog-section .lz-blog-subheading {
			color: #272e40
		}

		#ht-blog-section .ht-blog-excerpt h5 a,
		#ht-blog-section .ht-blog-excerpt h5 a small {
			color: #444444
		}

		#ht-blog-section .ht-blog-post .box-panels:hover .ht-blog-excerpt h5 a,
		#ht-blog-section .ht-blog-post .box-panels:hover .ht-blog-excerpt h5 a small {
			color: #d0ac62
		}

		#ht-blog-section .blog-date {
			color: #d0ac62
		}

		#ht-blog-section .box-panels:hover .blog-date {
			color: #3a4559
		}

		#ht-blog-section .blogborder:after {
			background-color: #d0ac62
		}

		#ht-blog-section .ht-blog-excerpt p {
			color: #2f2f2f
		}

		#ht-blog-section .box-panels:hover .hover-ripple {
			background-color: #d0ac62
		}

		#ht-blog-section .ht-blog-post .box-panels {
			background-color: #fff
		}

		#ht-blog-section .ht-blog-post .box-panels {
			border-bottom-color: #d0ac62
		}

		#ht-blog-section .ht-blog-post .box-panels:after {
			background-color: #3a4559
		}

		#ht-princing-post-section .lz-plan-heading {
			color: #2b2b2b
		}

		#pricing-page .ht-princing-excerpt ul li {
			color: #4d4d4d
		}

		#ht-newslatter-section .lz-newslatter-heading,
		#ht-newslatter-section .lz-newslatter-heading small {
			color: #fff
		}

		.ht-newslatter-member-wrap input[type="text"],
		.ht-newslatter-member-wrap input[type="email"],
		.ht-newslatter-member-wrap input[type="url"],
		.ht-newslatter-member-wrap input[type="password"],
		.ht-newslatter-member-wrap input[type="search"],
		.ht-newslatter-member-wrap input[type="number"],
		.ht-newslatter-member-wrap input[type="tel"],
		.ht-newslatter-member-wrap input[type="range"],
		.ht-newslatter-member-wrap input[type="date"],
		.ht-newslatter-member-wrap input[type="month"],
		.ht-newslatter-member-wrap input[type="week"],
		.ht-newslatter-member-wrap input[type="time"],
		.ht-newslatter-member-wrap input[type="datetime"],
		.ht-newslatter-member-wrap input[type="datetime-local"],
		.ht-newslatter-member-wrap input[type="color"],
		.ht-newslatter-member-wrap textarea,
		.ht-newslatter-member-wrap input::placeholder,
		.ht-newslatter-member-wrap textarea::placeholder {
			color: #fff
		}

		.ht-newslatter-member-wrap input[type="text"],
		.ht-newslatter-member-wrap input[type="email"],
		.ht-newslatter-member-wrap input[type="url"],
		.ht-newslatter-member-wrap input[type="password"],
		.ht-newslatter-member-wrap input[type="search"],
		.ht-newslatter-member-wrap input[type="number"],
		.ht-newslatter-member-wrap input[type="tel"],
		.ht-newslatter-member-wrap input[type="range"],
		.ht-newslatter-member-wrap input[type="date"],
		.ht-newslatter-member-wrap input[type="month"],
		.ht-newslatter-member-wrap input[type="week"],
		.ht-newslatter-member-wrap input[type="time"],
		.ht-newslatter-member-wrap input[type="datetime"],
		.ht-newslatter-member-wrap input[type="datetime-local"],
		.ht-newslatter-member-wrap input[type="color"],
		.ht-newslatter-member-wrap textarea {
			border-color: #fff
		}

		.ht-newslatter-member-wrap input[type="submit"] {
			color: #fff
		}

		.ht-newslatter-member-wrap input[type="submit"] {
			background-color: #d0ac62
		}

		.ht-newslatter-member-wrap input[type="submit"] {
			border-color: #d0ac62
		}

		.ht-newslatter-member-wrap input[type="submit"]:hover {
			color: #d0ac62
		}

		.ht-newslatter-member-wrap input[type="submit"]:hover {
			background-color: #fff
		}

		.ht-newslatter-member-wrap input[type="submit"]:hover {
			border-color: #fff
		}

		.ht-newslatter-member-wrap label {
			color: #fff
		}

		#ht-newslatter-section .ht-newslatter-member-wrap {
			color: #fff
		}

		.border {
			border: 1px solid #fff
		}
	</style>
	<link rel='stylesheet' id='bxslider-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/jquery.bxslider8aee.css?ver=4.1.2')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='colorbox-popup-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/colorbox8aee.css?ver=4.1.2')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='animate-css' href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/animate5152.css?ver=1.0')}}'
		type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/font-awesome474a.css?ver=4.4.0')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='owl-carousel-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/owl.carousel3ba1.css?ver=1.3.3')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='owl-theme-css' href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/owl.theme3ba1.css?ver=1.3.3')}}'
		type='text/css' media='all' />
	<link rel='stylesheet' id='nivo-lightbox-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/nivo-lightbox3ba1.css?ver=1.3.3')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='superfish-css' href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/superfish3ba1.css?ver=1.3.3')}}'
		type='text/css' media='all' />
	<link rel='stylesheet' id='owl-carousel-min-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/owl.carousel.min3ba1.css?ver=1.3.3')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='owl-theme-default-min-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/owl.theme.default.min3ba1.css?ver=1.3.3')}}' type='text/css'
		media='all' />
	<link rel='stylesheet' id='templete-css'
		href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css-new/templete3ba1.css?ver=1.3.3')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='style-min-css' href='{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/css/style.min3ba1.css?ver=1.3.3')}}'
		type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-css'
		href='https://fonts.googleapis.com/css?family=Archivo+Narrow%7CArimo%7CBerkshire+Swash%7CBitter%7CComfortaa%7CDancing+Script%7CDosis%7CDroid+Serif%7CFrancois+One%7CGermania+One%7CHammersmith+One%7CIndie+Flower%7CLobster%7CMuli%7CNosifer%7CPT+Sans%7CPT+Sans+Caption%7CPT+Sans+Narrow%7CPacifico%7CQuestrial%7CRoboto+Mono%7CRoboto+Slab%7CSource+Serif+Pro%7CTitillium+Web%7CWork+Sans%7CRubik%3A700i&amp;ver=6.8.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='theme-slug-fonts-css'
		href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C500%2C700%2C900' type='text/css' media='all' />
	<script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
	<script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
		id="jquery-migrate-js"></script>
	<script type="text/javascript" src="{{ asset('expert-lawyer/wp-content/plugins/luzuk_announcementbar/js/custom-script.js')}}"
		id="custom-script-js"></script>
	<script type="text/javascript" src="{{ asset('expert-lawyer/wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0')}}" id="imagesloaded-js"></script>
	<script type="text/javascript" src="{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/js/jquery.stellarc7bc.js?ver=20150903')}}"
		id="jquery-stellar-js"></script>
	<script type="text/javascript" src="{{ asset('expert-lawyer/wp-content/themes/expert-lawyer-pro/js/jquery.colorbox9200.js?ver=20160809')}}"
		id="jquery-colorbox-js"></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/10.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.8.3" />
	<meta name="generator" content="WooCommerce 10.2.1" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='index.html' />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="wp-json/oembed/1.0/embed26ef.json?url=https%3A%2F%2Fwww.luzukdemo.com%2Fdemo%2Fexpert-lawyer%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="{{ asset('expert-lawyer/wp-json/oembed/1.0/embedc30a?url=https%3A%2F%2Fwww.luzukdemo.com%2Fdemo%2Fexpert-lawyer%2F&amp;format=xml')}}" />

	<!-- GA Google Analytics @ https://m0n.co/ga -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-LPYNKN12L1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'G-LPYNKN12L1');
	</script>

	<style>
		.ht-service-left-bg {
			background-image: url();
		}

		#ht-counter-section {
			background-image: url();
		}

		#ht-cta-section {
			background-image: url();
		}
	</style> <noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<link rel="icon" href="{{ asset('expert-lawyer/wp-content/uploads/sites/28/2025/08/icon-logo-small-100x100.png')}}" sizes="32x32" />
	<link rel="icon" href="{{ asset('expert-lawyer/wp-content/uploads/sites/28/2025/08/icon-logo-small.png')}}" sizes="192x192" />
	<link rel="apple-touch-icon" href="{{ asset('expert-lawyer/wp-content/uploads/sites/28/2025/08/icon-logo-small.png')}}" />
	<meta name="msapplication-TileImage"
		content="https://www.luzukdemo.com/demo/expert-lawyer/wp-content/uploads/sites/28/2025/08/icon-logo-small.png" />

    <!-- Livewire -->

