<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" type="image/png" href="https://www.findlaw.com/static/c/images/image/upload/v1751527194/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="https://www.findlaw.com/static/c/images/image/upload/v1751531996/favicon-svg_zbx0ra.svg" />
    <link rel="shortcut icon" href="https://www.findlaw.com/static/c/images/image/upload/v1751527182/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.findlaw.com/static/c/images/image/upload/v1751527167/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Your CPA Expert" />

    <title>@yield('title', 'Find Laws, Legal Help, and Attorneys - FindLaw')</title>
    <meta name="description" content="Find trusted, free legal information, news, DIY forms and access to local lawyers at FindLaw.com."/>
    
    <link rel="stylesheet" id="11803ad6-css" href="https://www.findlaw.com/assets/aemwp/css/min/corporate.css?ver=66bb2360" media="all" />
    <script>
        var CLDLB = {"image_delivery":"on","image_optimization":"on","image_format":"auto","image_quality":"auto:eco","image_freeform":"w_1200,c_limit,dpr_auto","svg_support":"on","crop_sizes":"","image_preview":"https:\/\/res.cloudinary.com\/demo\/image\/upload\/w_600\/leather_bag.jpg","video_delivery":"on","video_player":"wp","adaptive_streaming":"off","adaptive_streaming_mode":"mpd","video_controls":"on","video_loop":"off","video_autoplay_mode":"off","video_optimization":"on","video_format":"auto","video_quality":"auto","video_freeform":"","video_preview":"","use_lazy_load":"on","lazy_threshold":"100px","lazy_custom_color":"rgba(153,153,153,0.5)","lazy_animate":"on","lazy_placeholder":"blur","dpr":"2X","lazyload_preview":"https:\/\/res.cloudinary.com\/demo\/image\/upload\/w_600\/leather_bag.jpg","enable_breakpoints":"on","pixel_step":200,"breakpoints":"","max_width":2048,"min_width":200,"breakpoints_preview":"https:\/\/res.cloudinary.com\/demo\/image\/upload\/w_600\/leather_bag.jpg","overlay":"off","placeholder":"e_blur:2000,q_1,f_auto","base_url":"https://www.findlaw.com/static/c/images"};!function(){const e={deviceDensity:window.devicePixelRatio?window.devicePixelRatio:"auto",density:null,config:CLDLB||{},lazyThreshold:0,enabled:!1,sizeBands:[],iObserver:null,pObserver:null,rObserver:null,aboveFold:!0,minPlaceholderThreshold:500,bind(e){e.CLDbound=!0,this.enabled||this._init();const t=e.dataset.size.split(" ");e.originalWidth=t[0],e.originalHeight=t[1],this.pObserver?(this.aboveFold&&this.inInitialView(e)?this.buildImage(e):(this.pObserver.observe(e),this.iObserver.observe(e)),e.addEventListener("error",(t=>{e.srcset="",e.src='data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="rgba(0,0,0,0.1)"/><text x="50%" y="50%" fill="red" text-anchor="middle" dominant-baseline="middle">%26%23x26A0%3B︎</text></svg>',this.rObserver.unobserve(e)}))):this.setupFallback(e)},buildImage(e){e.dataset.srcset?(e.cld_loaded=!0,e.srcset=e.dataset.srcset):(e.src=this.getSizeURL(e),e.dataset.responsive&&this.rObserver.observe(e))},inInitialView(e){const t=e.getBoundingClientRect();return this.aboveFold=t.top<window.innerHeight+this.lazyThreshold,this.aboveFold},setupFallback(e){const t=[];this.sizeBands.forEach((i=>{if(i<=e.originalWidth){let s=this.getSizeURL(e,i,!0)+` ${i}w`;-1===t.indexOf(s)&&t.push(s)}})),e.srcset=t.join(","),e.sizes=`(max-width: ${e.originalWidth}px) 100vw, ${e.originalWidth}px`},_init(){this.enabled=!0,this._calcThreshold(),this._getDensity();let e=parseInt(this.config.max_width);const t=parseInt(this.config.min_width),i=parseInt(this.config.pixel_step);for(;e-i>=t;)e-=i,this.sizeBands.push(e);"undefined"!=typeof IntersectionObserver&&this._setupObservers(),this.enabled=!0},_setupObservers(){const e={rootMargin:this.lazyThreshold+"px 0px "+this.lazyThreshold+"px 0px"},t=this.minPlaceholderThreshold<2*this.lazyThreshold?2*this.lazyThreshold:this.minPlaceholderThreshold,i={rootMargin:t+"px 0px "+t+"px 0px"};this.rObserver=new ResizeObserver(((e,t)=>{e.forEach((e=>{e.target.cld_loaded&&e.contentRect.width>=e.target.cld_loaded&&(e.target.src=this.getSizeURL(e.target))}))})),this.iObserver=new IntersectionObserver(((e,t)=>{e.forEach((e=>{e.isIntersecting&&(this.buildImage(e.target),t.unobserve(e.target),this.pObserver.unobserve(e.target))}))}),e),this.pObserver=new IntersectionObserver(((e,t)=>{e.forEach((e=>{e.isIntersecting&&(e.target.src=this.getPlaceholderURL(e.target),t.unobserve(e.target))}))}),i)},_calcThreshold(){const e=this.config.lazy_threshold.replace(/[^0-9]/g,"");let t=0;switch(this.config.lazy_threshold.replace(/[0-9]/g,"").toLowerCase()){case"em":t=parseFloat(getComputedStyle(document.body).fontSize)*e;break;case"rem":t=parseFloat(getComputedStyle(document.documentElement).fontSize)*e;break;case"vh":t=window.innerHeight/e*100;break;default:t=e}this.lazyThreshold=parseInt(t,10)},_getDensity(){let e=this.config.dpr?this.config.dpr.replace("X",""):"off";if("off"===e)return this.density=1,1;let t=this.deviceDensity;"max"!==e&&"auto"!==t&&(e=parseFloat(e),t=t>Math.ceil(e)?e:t),this.density=t},scaleWidth(e,t,i){const s=parseInt(this.config.max_width),r=Math.round(s/i);if(!t){t=e.width;let a=Math.round(t/i);for(;-1===this.sizeBands.indexOf(t)&&a<r&&t<s;)t++,a=Math.round(t/i)}return t>s&&(t=s),e.originalWidth<t&&(t=e.originalWidth),t},scaleSize(e,t,i){const s=e.dataset.crop?parseFloat(e.dataset.crop):(e.originalWidth/e.originalHeight).toFixed(2),r=this.scaleWidth(e,t,s),a=Math.round(r/s),o=[];return e.dataset.transformationCrop?o.push(e.dataset.transformationCrop):e.dataset.crop||(o.push(e.dataset.crop?"c_fill":"c_scale"),e.dataset.crop&&o.push("g_auto")),o.push("w_"+r),o.push("h_"+a),i&&1!==this.density&&o.push("dpr_"+this.density),e.cld_loaded=r,{transformation:o.join(","),nameExtension:r+"x"+a}},getDeliveryMethod:e=>e.dataset.seo&&"upload"===e.dataset.delivery?"images":"image/"+e.dataset.delivery,getSizeURL(e,t){const i=this.scaleSize(e,t,!0);return[this.config.base_url,this.getDeliveryMethod(e),"upload"===e.dataset.delivery?i.transformation:"",e.dataset.transformations,"v"+e.dataset.version,e.dataset.publicId+"?_i=AA"].filter(this.empty).join("/")},getPlaceholderURL(e){e.cld_placehold=!0;const t=this.scaleSize(e,null,!1);return[this.config.base_url,this.getDeliveryMethod(e),t.transformation,this.config.placeholder,e.dataset.publicId].filter(this.empty).join("/")},empty:e=>void 0!==e&&0!==e.length};window.CLDBind=t=>{t.CLDbound||e.bind(t)},window.initFallback=()=>{[...document.querySelectorAll('img[data-cloudinary="lazy"]')].forEach((e=>{CLDBind(e)}))},window.addEventListener("load",(()=>{initFallback()})),document.querySelector('script[src*="?cloudinary_lazy_load_loader"]')&&initFallback()}();
    </script>
    <script src="https://www.findlaw.com/assets/aemwp/javascript/min/corporate.js?ver=66bb2360" id="d570227d-js" async data-wp-strategy="async"></script>
    <script src="https://www.findlaw.com/assets/react/javascript/min/app.js" id="aea8bd01-js" async data-wp-strategy="async"></script>
    @stack('head')
</head>
<body class="page page-template-home-page">
    @include('partials.header')

    <main id="main-content" class="ability-corporate flw-general-main-content">
        @yield('content')
    </main>

    @include('partials.footer')

    <div id="snackbar">Copied to clipboard</div>

    <script type="text/javascript">
        var reactComponentsData = reactComponentsData || {};
    </script>
    @stack('scripts')
</body>
</html>
