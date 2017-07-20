<!doctype html>
<html lang="en" ng-app="bccom">
<head>
<title>Marketello Software &amp; Shopping Cart Platform | Marketello</title>
<meta name='description' content='Выводим украинских производителей на рынки ЕС, колцентр, логистика, финансы!' />
<meta name='robots' content='index,follow,archive,imageindex,snippet,noodp,noydir' />
<link rel='canonical' href='http://<?php echo $_SERVER['SERVER_NAME']; ?>' />
<meta property='og:title' content='Marketello: Ecommerce Platform &amp; Shopping Cart Software' />
<meta property='og:type' content='Website' />
<meta property='og:url' content='http://<?php echo $_SERVER['SERVER_NAME']; ?>' />
<meta property='og:image' content='http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/logos/marketello_logo_main.png' />
<meta property='og:image:secure_url' content='http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/logos/marketello_logo_main.png' />
<meta property='og:image:width' content='1200' />
<meta property='og:image:height' content='630' />
<meta property='og:image:type' content='image/png' />
<meta property='og:publisher' content='Marketello' />
<meta property='og:site_name' content='Marketello' />
<meta property='og:description' content='С marketello вывод бренда на рынки ЕС в 10 раз быстрее при 4 кратном сокращении расходов!' />
<meta name='twitter:card' content='summary'>
<meta name='twitter:site' content='Marketello'>
<meta name='twitter:title' content='Homepage- Carousel Test'>
<meta name='twitter:description' content='С marketello вывод бренда на рынки ЕС в 10 раз быстрее при 4 кратном сокращении расходов!'>
<meta name='twitter:url' content='http://<?php echo $_SERVER['SERVER_NAME']; ?>'>
<meta charset="utf-8"/>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1026.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicons/apple-touch-icon-57x57.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicons/apple-touch-icon-60x60.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicons/apple-touch-icon-72x72.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicons/apple-touch-icon-76x76.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicons/apple-touch-icon-114x114.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicons/apple-touch-icon-120x120.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicons/apple-touch-icon-144x144.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicons/apple-touch-icon-152x152.png?v=WGG4RXrbM2">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon-180x180.png?v=WGG4RXrbM2">
<link rel="icon" type="image/png" href="/assets/images/favicons/favicon-32x32.png?v=WGG4RXrbM2" sizes="32x32">
<link rel="icon" type="image/png" href="/assets/images/favicons/favicon-194x194.png?v=WGG4RXrbM2" sizes="194x194">
<link rel="icon" type="image/png" href="/assets/images/favicons/favicon-96x96.png?v=WGG4RXrbM2" sizes="96x96">
<link rel="icon" type="image/png" href="/assets/images/favicons/android-chrome-192x192.png?v=WGG4RXrbM2" sizes="192x192">
<link rel="icon" type="image/png" href="/assets/images/favicons/marketello_favicon_16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/assets/images/favicons/marketello_favicon_32.png" sizes="32x32">
<link rel="manifest" href="/assets/images/favicons/manifest.json?v=WGG4RXrbM2">
<link rel="mask-icon" href="/assets/images/favicons/safari-pinned-tab.svg?v=WGG4RXrbM2" color="#5bbad5">
<link rel="shortcut icon" href="/assets/images/favicons/favicon.ico?v=WGG4RXrbM2">
<meta name="msapplication-TileColor" content="#4b71fc">
<meta name="msapplication-TileImage" content="/assets/images/favicons/mstile-144x144.png?v=WGG4RXrbM2">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" type="text/css" href="/assets/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="/assets/css/bccom-a13829058e.css">

<script type="text/javascript" src="/assets/js/134769299.js"></script>
<script src="/assets/js/6S4LD2WT.js"></script>

</head>
<body class="body--displayMode0">


<div class="bodyWrapper">
<!-- DIV wrapper required for mmenu to work properly and some contentBlocks -->
<header role="banner">
 <div class="topBar-container topBar-container--fixed">
  <div top-bar>
   <ul class="title-area">
    <li class="name">
     <a href="/">
<!--      <img class="title-area-logo--hover" src="/assets/logos/bc-logo-bright.svg" alt="bc-logo-dark" />
      <img class="title-area-logo" src="/assets/logos/bc-logo-dark.svg" alt="bc-logo-dark" />
-->
      <img class="title-area-logo" src="/assets/logos/marketello_logo_main.png" alt="bc-logo-dark" />
     </a>
    </li>
    <li toggle-top-bar class="menu-icon">
     <a href="#mobile-nav"><i class="icon icon-bcburger"></i><span class="text">Menu</span></a>
    </li>
   </ul>
   <section class="top-bar-section">
    <ul class="menuItems">
<!--     <li class="toggleDropdown toggleDropdown--1 ">
      <a href="#" title="Solutions" >Solutions</a>
     </li>
-->
<!-- //hide menu all
     <li class="">
      <a href="/features/" title="Возиожности">Возможности</a>
     </li>
     <li class=" ">
      <a href="/costs/" title="Стоимость">Стоимость</a>
     </li>
     <li class=" ">
      <a href="/blog/" title="Блог">Блог</a>
     </li>
-->
<!--
     <li class=" ">
      <a href="/features/" title="Features" >Features</a>
     </li>
     <li class=" ">
      <a href="/showcase/" title="Clients" >Clients</a>
     </li>
     <li class=" ">
      <a href="/pricing/" title="Pricing" >Pricing</a>
     </li>
     <li class="toggleDropdown toggleDropdown--6 ">
      <a href="#" title="Resources" >Resources</a>
     </li>
-->
    </ul>
   </section>
   <div class="top-bar-actions">
    <div class="optional top-bar-actions--login">

     <a href="#">Войти</a>
    </div>
    <div class="optional">
<!--
     <button class="button button--action button--small gtm_trial_start" trial-modal-v2="15-day-free-trial-modal-v2">Начать</button>
-->
     <button class="button button--action button--small" id="popup" onclick="div_show()">Начать</button>
    </div>
   </div>
  </div>
  <div class="topBar-dropdown topBar-dropdown--1">
   <div class="topBar-dropdown-navSection topBar-dropdown-navSection--main ">
    <ul class="topBar-dropdown-nav">
     <li class="topBar-dropdown-nav-item">
      <a href="/enterprise-ecommerce-solution/" title="/enterprise-ecommerce-solution/">
       Enterprise
       <span class="link-description">Superior reliability and advanced tools for running your whole business
       </span>
      </a>
     </li>
     <li class="topBar-dropdown-nav-item">
      <a href="/ecommerce-solutions/" title="/ecommerce-solutions/">
       Small Business
       <span class="link-description">Increase sales, streamline your business and expand to new channels</span>
      </a>
     </li>
     <li class="topBar-dropdown-nav-item">
      <a href="/features/b2b-ecommerce-platform/" title="/features/b2b-ecommerce-platform/">
       B2B
       <span class="link-description">A powerful platform for B2B selling and wholesaling businesses</span>
      </a>
     </li>
    </ul>
   </ul>
  </div>
 </div>
 <div class="topBar-dropdown topBar-dropdown--2">
  <div class="topBar-dropdown-navSection topBar-dropdown-navSection--main ">
   <ul class="topBar-dropdown-nav">
    <li class="topBar-dropdown-nav-item">
     <a href="/ebay/" title="/ebay/">
      Ebay
      <span class="link-description">Sell on popular marketplaces</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/amazon/" title="/amazon/">
      Amazon
      <span class="link-description">List your products on Amazon</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/facebook/" title="/facebook/">
      Facebook
      <span class="link-description">Reach 1 billion users with shop</span>
     </a>
    </li>
   </ul>
   <ul class="topBar-dropdown-nav">
    <li class="topBar-dropdown-nav-item">
     <a href="/google-shopping/" title="/google-shopping/">
      Google Shopping
      <span class="link-description">Showcase in millions of searches</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/square/" title="/square/">
      Square
      <span class="link-description">Sync both online and offline</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/buy-button/" title="/buy-button/">
      Buy Button
      <span class="link-description">Sell from blogs, emails, and more</span>
     </a>
    </li>
   </ul>
   </ul>
  </div>
 </div>
 <div class="topBar-dropdown topBar-dropdown--6">
  <div class="topBar-dropdown-navSection topBar-dropdown-navSection--main ">
   <ul class="topBar-dropdown-nav">
    <li class="topBar-dropdown-nav-item">
     <a href="/apps/" title="/apps/">
      App Store
      <span class="link-description">Connect to leading software</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/theme-store/" title="/theme-store/">
      Theme Store
      <span class="link-description">Beautiful design templates</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/partners/" title="/partners/">
      Partner Services
      <span class="link-description">Get help building your store</span>
     </a>
    </li>
   </ul>
   <ul class="topBar-dropdown-nav">
    <li class="topBar-dropdown-nav-item">
     <a href="/case-study/" title="/case-study/">
      Case Studies
      <span class="link-description">See our success stories</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/blog/" title="/blog/"target="_blank" >
      Ecommerce Blog
      <span class="link-description">News, strategy and analysis</span>
     </a>
    </li>
    <li class="topBar-dropdown-nav-item">
     <a href="/product-webinar/" title="/product-webinar/">
      Webinars
      <span class="link-description">Product tours and more</span>
     </a>
    </li>
   </ul>
  </ul>
 </div>
</div>
</div>
</header>

<!--        <section id="contentBlock20266" class="block block--defaultScheme block--diagonalBottomLargeUnderScheme block--paddingBottomLargeScheme block--desktopViewport block--paddingTopBottom block--twoColAbsolute">
-->
            <section id="contentBlock20266" class="block block--defaultScheme block--diagonalBottomLargeUnderScheme block--paddingBottomLargeScheme block--desktopViewport block--paddingTopBottom block--twoColAbsolute">
         <div class="block-container" style="top:-50px;">
          <div class="block-container-inner">
           <div class="block--twoColAbsolute-row block--twoColAbsolute-row--split7">
            <div class="block--twoColAbsolute-column">
             <div class="block-image block-image--png">
<!--
              <img style="left:550px;top:-100px;" src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/herobanners/home-hero-laquan.png?mtime=20160311101249" alt="home-hero-laquan">
-->
              <img style="left:450px;top:50px;" src="/assets/herobanners2/marketello_main_small.png" alt="home-hero-laquan">
             </div>
             <div class="block-text">
<!--
              <h1><br>Вывод украинских производителей и реселлеров на рынки ЕС</h1>
-->
              <h1><br>Начните продавать свои товары в Евросоюзе уже сейчас</h1>
<!--
              <p>продвижение, клиенты, call-center, приём оплат,<br>вывод денег и логистика</p>
-->
              <p>Без офиса, регистрации компании, склада и сотрудников.<br>
              Прямо из Укрины. Благодаря Marketello.<br><br>
              Всю работу по локализации, продвижению, складированию,<br>
              доставке, колл-центр и выводу денег мы возьмем на себя.</p>
              <p><br></p>
              <p>
<!--
               <a href="" trial-modal-v2="15-day-free-trial-modal-v2" class="button button--action gtm_trial_start">Start your free trial</a>
-->
               <a href="" trial-modal-v2="15-day-free-trial-modal-v2" class="button button--action gtm_trial_start">Выбрать тариф</a>

              </p>
            </div>
           </div>
          </div>
         </div>
        </div>
       </section>
<!-- // original mobile version block
       <section id="contentBlock20270" class="block block--defaultScheme block--mobileViewport block--paddingTop block-imagePosition--default block--oneColTextImage">
        <div class="block-container">
         <div class="block-container-inner">
          <div class="block-text block-textWidth--full">
           <h1 class="text-center">Build your online store with BigCommerce</h1>
           <p class="text-center">
            Customize your site, manage shipping and payments, and list your products on Amazon, Ebay, and 
            Facebook with the #1 ecommerce platform. <br>Try it free, no credit card required.<br><br>
           </p>
           <p class="text-center">
            <a href="" trial-modal-v2="15-day-free-trial-modal-v2" class="button button--action gtm_trial_start">Start your free trial</a>
           </p>
          </div>
         </div>
        </div>
       </section>
-->
       <section id="contentBlock20270" class="block block--defaultScheme block--mobileViewport block--paddingTop block-imagePosition--default block--oneColTextImage">
        <div class="block-container">
         <div class="block-container-inner">
          <div class="block-text block-textWidth--full">
           <h1 class="text-center">Начните продавать свои товары в Евросоюзе уже сейчас</h1>
           <p class="text-center">
           Без офиса, регистрации компании, склада и сотрудников.
           Прямо из Украины. Благодаря Marketello. Всю работу по локализации, продвижению, складированию,
           доставке, колл-центр и выводу денег мы возьмем на себя.<br><br>
           </p>
           <p class="text-center">
            <a href="" trial-modal-v2="15-day-free-trial-modal-v2" class="button button--action gtm_trial_start">Выбрать тариф</a>
           </p>
          </div>
         </div>
        </div>
       </section>

       <section id="contentBlock20271" class="block block--lightestGreyDefaultScheme block--diagonalTopLargeUnderScheme block--desktopViewport block--paddingBottom block--multiColAbsolute block--paddingMobileTopNoneScheme">
        <div class="block-decoration--homeRight">
        </div>
        <div class="block-container">
         <div class="block-container-inner">
          <div class="block--multiColAbsolute-row">
           <div class="block--multiColAbsolute-column columnWidth--3">
            <div class="block-image block-image--png block-image--hideOnMobile">
<!--             <img style="right:-265px;bottom:-420px;" src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/product-images/home-laquan-fabric.png?mtime=20160315104348" alt="home-laquan-fabric">
-->                 <img style="right:-65px;bottom:-420px;" src="/assets/images/eu_back.png" alt="EU">
            </div>
            <div class="eyeCatcher eyeCatcher--circleXl" style="top:-122px;left:-100px;">
             <div class="eyeCatcher-container">
<!--
              <h1 class="eyeCatcher-headline">28%</h1>
              <h3 class="eyeCatcher-tagline">Annual Growth</h3>
              <div class="eyeCatcher-body">
               According to research by Ipsos, BigCommerce merchants grow 28% year over year, nearly 2x 
                the industry average.
              </div>
-->
              <h1 class="eyeCatcher-headline">300</h1>
              <h3 class="eyeCatcher-tagline">И более</h3>
              <div class="eyeCatcher-body">
               Европейских прайс-аггрегаторов и маркетплейсов на которых мы можем разместить Ваши товары.
              </div>
             </div>
            </div>
           </div>
           <div class="block--multiColAbsolute-column columnWidth--3">
            <div class="block-text">
<!--
             <h1 class="type-weight--thin" style="text-align: center; margin-bottom: 10px;" rel="text-align: center; padding-top:280px; margin-bottom: 10px;">
              99.99%
             </h1>
             <h3 style="text-align: center; margin-bottom: 10px;" rel="text-align: center; margin-bottom: 10px;">
              Average Uptime
             </h3>
             <p style="text-align: center; padding-bottom: 70px;">
              <span class="type-small">
               Your store is always open for business thanks to one of the best uptimes in the industry, 
               including 100% availability during Cyber Week.
              </span>
             </p>
-->
             <h1 class="type-weight--thin" style="text-align: center; margin-bottom: 10px;" rel="text-align: center; padding-top:280px; margin-bottom: 10px;">
              256 000 000
             </h1>
             <h3 style="text-align: center; margin-bottom: 10px;" rel="text-align: center; margin-bottom: 10px;">
              Потенциальных покупателей
             </h3>
             <p style="text-align: center; padding-bottom: 70px;">
              <span class="type-small">
               В 28 странах и список этих стран будет постоянно расширяться
              </span>
             </p>
            </div>
           </div>
           <div class="block--multiColAbsolute-column columnWidth--3">
            <div class="block-text">
<!--
             <h1 class="type-weight--thin" style="text-align: center; margin-bottom: 10px;" rel="text-align: center; margin-bottom: 10px;">
              1/4
             </h1>
             <h3 style="text-align: center; margin-bottom: 10px;" rel="text-align: center; margin-bottom: 10px;">
              The Cost
             </h3>
             <p style="text-align: center;" rel="text-align: center;">
              <span class="type-small">
               BigCommerce is a quarter of the cost of on-premise solutions like Magento, with no hosting, 
               maintenance or update expenses
              </span>
              <span class="type-small">.</span>
             </p>
-->
             <h1 class="type-weight--thin" style="text-align: center; margin-bottom: 10px;" rel="text-align: center; margin-bottom: 10px;">
              В 10 раз
             </h1>
             <h3 style="text-align: center; margin-bottom: 10px;" rel="text-align: center; margin-bottom: 10px;">
              меньше затрат
             </h3>
             <p style="text-align: center;" rel="text-align: center;">
              <span class="type-small">
               по сравнению с самостоятельным выводом компании на рынки ЕС
              </span>
             </p>
            </div>
           </div>
          </div>
         </div>
        </div>
       </section>
<!-- //original mobile version block
       <section id="contentBlock20275" class="block block--lightestGreyDefaultScheme block--mobileViewport block--paddingTopBottom block--multiColTextImage">
        <div class="block-decoration--homeRight">
        </div>
        <div class="block-container">
         <div class="block-container-inner">
          <div class="block--multiColTextImage-row block--multiColTextImage-row--columns3">
           <div class="block--multiColTextImage-column block--multiColTextImage-column--centerImageAlign">
            <div class="block--multiColTextImage-column-inner">
             <div class="block-text">
              <h1 style="text-align: center;">28%</h1>
              <h3 style="text-align: center;" rel="text-align: center;">Annual Growth</h3>
              <p style="text-align: center;" rel="text-align: center;">
               <span class="type-small">
                According to research by Ipsos, BigCommerce merchants grow 28% year over year, 
                nearly 2x the industry average.
               </span>
              </p>
             </div>
            </div>
           </div>
           <div class="block--multiColTextImage-column block--multiColTextImage-column--centerImageAlign">
            <div class="block--multiColTextImage-column-inner">
             <div class="block-text">
              <h1 style="text-align: center;">99.99%</h1>
              <h3 style="text-align: center;" rel="text-align: center;">Higher Uptime</h3>
              <p style="text-align: center;">
               <span class="type-small">
                Your store is always open for business thanks to one of the best uptimes in the industry, 
                including 100% availability during Cyber Week.
               </span>
               <span class="type-small"></span>
               <br>
              </p>
             </div>
            </div>
           </div>
           <div class="block--multiColTextImage-column block--multiColTextImage-column--centerImageAlign">
            <div class="block--multiColTextImage-column-inner">
             <div class="block-text">
              <h1 style="text-align: center;" rel="text-align: center;">1/4</h1>
              <h3 style="text-align: center;" rel="text-align: center;">The Cost</h3>
              <p style="text-align: center;" rel="text-align: center;">
               <span class="type-small">
                BigCommerce is a quarter of the cost of on-premise solutions like Magento, 
                with no hosting, maintenance or update expenses.
               </span>
              </p>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </section>
-->
       <section id="contentBlock20275" class="block block--lightestGreyDefaultScheme block--mobileViewport block--paddingTopBottom block--multiColTextImage">
        <div class="block-decoration--homeRight">
        </div>
        <div class="block-container">
         <div class="block-container-inner">
          <div class="block--multiColTextImage-row block--multiColTextImage-row--columns3">
           <div class="block--multiColTextImage-column block--multiColTextImage-column--centerImageAlign">
            <div class="block--multiColTextImage-column-inner">
             <div class="block-text">
              <h1 style="text-align: center;">300</h1>
              <h3 style="text-align: center;" rel="text-align: center;">И более</h3>
              <p style="text-align: center;" rel="text-align: center;">
               <span class="type-small">
		Европейских прайс-аггрегаторов и маркетплейсов на которых мы можем разместить Ваши товары.
               </span>
              </p>
             </div>
            </div>
           </div>
           <div class="block--multiColTextImage-column block--multiColTextImage-column--centerImageAlign">
            <div class="block--multiColTextImage-column-inner">
             <div class="block-text">
              <h1 style="text-align: center;">256 000 000</h1>
              <h3 style="text-align: center;" rel="text-align: center;">Потенциальных покупателей</h3>
              <p style="text-align: center;">
               <span class="type-small">
                В 28 странах и список этих стран будет постоянно расширяться.
               </span>
               <span class="type-small"></span>
               <br>
              </p>
             </div>
            </div>
           </div>
           <div class="block--multiColTextImage-column block--multiColTextImage-column--centerImageAlign">
            <div class="block--multiColTextImage-column-inner">
             <div class="block-text">
              <h1 style="text-align: center;" rel="text-align: center;">В 10 раз</h1>
              <h3 style="text-align: center;" rel="text-align: center;">меньше затрат</h3>
              <p style="text-align: center;" rel="text-align: center;">
               <span class="type-small">
                по сравнению с самостоятельным выводом компании на рынки ЕС
               </span>
              </p>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </section>

       <section id="contentBlock20279" class="block block--paddingBottomSmallScheme block--defaultScheme block--desktopViewport block--paddingTopBottom block-imagePosition--default block--oneColTextImage">
        <div class="block-container">
         <div class="block-container-inner">
         </div>
        </div>
       </section>
<!-- original section
       <section id="contentBlock20280" class="block block--narrowWidthScheme block--defaultScheme block--allViewport block--paddingTop block--carouselRebrand-style--default block--carouselRebrand">
        <div class="block-container">
         <div class="block-container-inner">
          <div class="icon icon-arrowleft arrowIcon arrowIcon--sides">
          </div>
          <div class="icon icon-arrowright arrowIcon arrowIcon--sides">
          </div>
          <div carousel-rebrand ng-cloak>
           <div class="slickCarousel">
            <div class="block--carouselRebrand-slide">
             <div class="block-image block-image--png">
              <img style="" src="/assets/carousel/Carousel-Amazon-screenshot.png" width="485" height="281" alt="Carousel Amazon Resize">
             </div>
             <div class="content-container block--carouselRebrand-content--positionright">
              <div class="block-text">
               <h3 class="text-center  marginTop-60">A single hub for all your channels</h3>
               <p class="type-small text-center">
                Streamline and grow your business by selling on Amazon, eBay, Facebook, and Pinterest 
                to billions of shoppers, all from one location.
               </p>
               <p class="text-center"><a href="/amazon/">Learn more</a></p>
              </div>
             </div>
            </div>
           <div class="block--carouselRebrand-slide">
            <div class="block-image block-image--png">
             <img style="" src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/carousel/carousel-dashboard.png?mtime=20170206115756" width="487" height="289" alt="Carousel Dashboard">
            </div>
            <div class="content-container block--carouselRebrand-content--positionright">
             <div class="block-text">
              <h3 class="text-center marginTop-40">Attend our weekly Product Tour webinar</h3>
              <p class="type-small text-center">
               We’ll give you a high-level look at the BigCommerce platform and its key features, 
               plus answer any questions you have.&nbsp;
              </p>
              <p class="text-center">
               <a href="http://grow.bigcommerce.com/weekly-product-tour.html" target="_blank">Sign up now</a>
              </p>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </section>
-->
       <section id="contentBlock20280" class="block block--narrowWidthScheme block--defaultScheme block--allViewport block--paddingTop block--carouselRebrand-style--default block--carouselRebrand">
        <div class="block-container">
         <div class="block-container-inner">
          <div class="icon icon-arrowleft arrowIcon arrowIcon--sides">
          </div>
          <div class="icon icon-arrowright arrowIcon arrowIcon--sides">
          </div>
          <div carousel-rebrand ng-cloak>
           <div class="slickCarousel">
            <div class="block--carouselRebrand-slide">
             <div class="block-image block-image--png">
              <img style="" src="/assets/carousel/Carousel-Amazon-screenshot.png" width="485" height="281" alt="Carousel Amazon Resize">
             </div>
             <div class="content-container block--carouselRebrand-content--positionright">
              <div class="block-text">
               <h3 class="text-center  marginTop-60">Управление продажами онлайн в ЕС в одном месте</h3>
               <p class="type-small text-center">
		Единое место хранения контента, с автоматической выгрузкой на основные прайс агрегаторы,
		маркетплейсы, аукционы и рекламные каналы в ЕС, и основными инструментами продаж он-лайн.
               </p>
               <p class="text-center"><a href="#">Узнать больше...</a></p>
              </div>
             </div>
            </div>
           <div class="block--carouselRebrand-slide">
            <div class="block-image block-image--png">
             <img style="" src="/assets/carousel/carousel-dashboard.png" width="487" height="289" alt="Carousel Dashboard">
            </div>
            <div class="content-container block--carouselRebrand-content--positionright">
             <div class="block-text">
              <h3 class="text-center marginTop-40">Полный цикл обслуживания и доставки заказов в ЕС.
              </h3>
              <p class="type-small text-center">
               Более 10 кратная экономия на доставке заказов из Украины в ЕС, коммуникация,
               вывод платежей, колл-центр и работа с рекламацией на языке ваших европейских клиентов.
               </p>
              <p class="text-center">
               <a href="#">Узнать больше...</a>
              </p>
             </div>
            </div>
           </div>
           <div class="block--carouselRebrand-slide">
            <div class="block-image block-image--png">
             <img style="" src="/assets/carousel/carousel-dashboard.png" width="487" height="289" alt="Carousel Dashboard">
            </div>
            <div class="content-container block--carouselRebrand-content--positionright">
             <div class="block-text">
              <h3 class="text-center marginTop-40">Бесплатный веб-бинар о продажах он лайн в ЕС.
              </h3>
              <p class="type-small text-center">
              Мы расскажем как применить возможности платформы Marketello для реализации ваших
              целей по продаже и продвижению ваших товаров в ЕС.
               </p>
              <p class="text-center">
               <a href="#">Узнать больше...</a>
              </p>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </section>

    <section id="contentBlock20287" class="block block--defaultScheme block--allViewport block--paddingTopBottom block--carouselRebrand-style--default block--carouselRebrand">
     <div class="block-decoration--homeLeft">
     </div>
     <div class="block-container">
      <div class="block-container-inner">
       <div class="icon icon-arrowleft arrowIcon arrowIcon--sides">
       </div>
       <div class="icon icon-arrowright arrowIcon arrowIcon--sides">
       </div>
       <div class="block-text block-text--headline">
        <h2 rel="white-space: nowrap;">
         <br>Создаем возможности выхода на рынок ЕС
       </h2>
        <p>
         <span class="type-large">
          и построение стратегий cross-border продаж для украинского бизнеса
         </span>
        </p>
        <p><span class="type-large"><br></span>
        </p>
       </div>
       <div carousel-rebrand ng-cloak>
        <div class="slickCarousel">
         <div class="block--carouselRebrand-slide">
          <div class="block-image block-image--png">
           <img style="right:-500px;bottom:50px;" src="/assets/images/marketello_ban3.png" alt="home-carousel-uspatriot">
          </div>
          <div class="content-container block--carouselRebrand-content--positionleft">
           <div class="block-text">
            <blockquote>
            <span class="blockquote-text">
<!--             Since moving to BigCommerce our site is now faster, the user experience is better, and we 
             have achieved a higher search rank &mdash; showing up as the number one result in organic 
             listings on Google.
-->
	    Основной целью платформы Marketello является создание возможности для украинских производителей,
	    с минимальными рисками и затратами выйти на рынки ЕС. Что является стратегической основой для 
	    процветания украинской экономики
            </span>
<!--            <cite>Paul Yoo, US Patriot Tactical</cite>
-->            </blockquote>
           </div>
          </div>
         </div>
<!--
         <div class="block--carouselRebrand-slide">
          <div class="block-image block-image--png">
           <img style="right:-500px;bottom:150px;" src="/assets/images/marketello_ban2.png" alt="home-flashtat-beyonce">
          </div>
          <div class="content-container block--carouselRebrand-content--positionleft">
           <div class="block-text">
            <blockquote>
             <span class="blockquote-text">
              When we launched our collaboration with Beyoncé, there was a flood of visits to our website. 
              We couldn’t be happier with how well the BigCommerce team and our website performed under 
              such high stakes.
             </span>
             <cite>Kirsten Stoddard, Flash Tattoos</cite>
            </blockquote>
           </div>
          </div>
         </div>
         <div class="block--carouselRebrand-slide">
          <div class="block-image block-image--png">
           <img style="right:-550px;bottom:100px;" src="/assets/images/marketello_ban1.png" alt="home-carousel-sisu">
          </div>
          <div class="content-container block--carouselRebrand-content--positionleft">
           <div class="block-text">
            <blockquote>
             <span class="blockquote-text">
              We used to see less than 1% mobile conversion, and on BigCommerce we’re above 10%. Our sales 
              overall have increased 55% after switching because of the look and feel of the site and its functionality.
             </span>
             <cite>Rita Shelley, SISU Guard</cite>
            </blockquote>
           </div>
          </div>
         </div>
-->
        </div>
       </div>
      </div>
     </div>
    </section>

<!--
       <section id="contentBlock20280" class="block block--defaultScheme block--narrowWidthScheme block--allViewport block--paddingTop block--carouselRebrand-style--default block--carouselRebrand">
-->
<!--
	<section id="contentBlock14690" class="block block--defaultScheme block--paddingBottomSmallScheme block--allViewport block--paddingTopBottom block--twoColAbsolute">
-->
<!-- #Original of next section
	<section id="contentBlock14690" class="block block--defaultScheme block--paddingBottomSmallScheme block--allViewport block--paddingTopBottom block--twoColAbsolute">
	 <div class="block-container">
	  <div class="block-container-inner">
	   <div class="block-text">
	    <h2 class="marginTop-40" style="text-align: center;">
	     Optimize your business
	    </h2>
	    <p style="text-align: center;" rel="text-align: center;">
	     <span class="type-large">
	      We don’t just help you grow revenue; we empower you to reduce <br>
	      costs and streamline your operations.
	     </span>
	    </p>
	   </div>
	   <div class="block--twoColAbsolute-row block--twoColAbsolute-row--split6">
	    <div class="block--twoColAbsolute-column">
	     <div class="block-image block-image--png">
	      <img style="right:-915px;bottom:110px;" src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/backgrounds/OptimizeYourBusiness_Boxes.png?mtime=20160315102140" alt="OptimizeYourBusiness Boxes">
	     </div>
	     <div class="block-text">
	      <h4 class="marginTop-40">A better way to ship</h4>
	      <p>
	       <span class="type-small">
	        BigCommerce makes it quick and easy to set up powerful shipping options. We <br>
	        support real-time carrier quotes, free shipping, flat rates, dropshipping, USPS 
	        label printing and more.<br>
	        <a href="/features/shipping-and-fulfillment/">More on shipping</a><br>
	       </span>
	      </p>
	      <h4>Analyze and improve</h4>
	      <p>
	       <span class="type-small">
	        BigCommerce Analytics lets you see your most important metrics at a glance, or dig 
	        deeper to spot trends, remove bottlenecks, improve merchandising and increase 
	        customer loyalty.<br>
	        <a href="/features/ecommerce-analytics/">More on BigCommerce Analytics</a><br>
	       </span>
	      </p>
	      <h4>Your choice of payment providers</h4>
	      <p>
	       <span class="type-small">
	        Unlike Shopify, we don’t charge you a fee for using your preferred payment solutions. 
	        You’ll get access to the best gateways at the best rates, digital wallets like 
	        Amazon Pay and Apple Pay to boost mobile conversion, and even consumer 
	        financing options.<br>
	       </span>
	       <span class="type-small">
	        <a href="/features/accept-credit-cards-and-payments/" target="_blank">More on payments</a>
	       </span>
	      </p>
	      <h4>Simplify your multi-channel sales</h4>
	      <p>
	       <span class="type-small">
	        The BigCommerce Channel Manager is the best way to sell on multiple channels. 
	        It gives you a single place to process all online sales, whether they’re made 
	        on your site, social media or marketplaces.<br>
	       </span>
	       <span class="type-small">
	        <a href="/multi-channel-ecommerce/" target="_blank">More on Channel Manager</a>
	       </span>
	      </p>
	     </div>
	    </div>
	   </div>
	  </div>
	 </div>
	</section>
-->
    <section id="contentBlock20291" class="block block--darkGreyWhiteScheme block--allViewport block--paddingTopBottom block--twoColAbsolute">
     <div class="block-container">
      <div class="block-container-inner">
       <div class="block-text">
<!--
        <h2 style="text-align: center; padding-bottom:40px;">Everything you need to grow your business</h2>
-->
        <h2 style="text-align: center; padding-bottom:40px;">
<!--        Начите продавать свои товары в Евросоюзе уже сейчас.
-->		Все что необходимо для прибыльных продаж онлайн в ЕС
        </h2>
       </div>
       <div class="block--twoColAbsolute-row block--twoColAbsolute-row--split5">
        <div class="block--twoColAbsolute-column">
         <div class="block-image block-image--png">
<!--          <img style="left:545px;top:60px;" src="/assets/screens/home-grow.png" alt="home-grow">
-->              <img style="left:445px;top:60px;" src="/assets/images/marketello_analytics.png" alt="home-grow">
         </div>
         <div class="block-text">
<!--
          <h4>Build the ultimate shopping experience</h4>
          <p><span class="type-small">Our revolutionary design platform lets you create stores that engage 
           shoppers and make more sales. Choose from the best responsive ecommerce templates on the market 
           or build a fully custom site.</span>
          </p>
-->
<!--
          <h4>Без офиса, регистрации компании, склада и сотрудников.</h4>
          <p>
           <span class="type-small">
            Прямо из Украины. Благодаря Marketello.
           </span>
          </p>
-->
          <h4>Оценка наиболее перспективных стратегий.</h4>
          <p>
           <span class="type-small">
            Наша команда проведет анализ аналогичных товарных групп на рынках ЕС, составит рекомендации 
            по розничным ценам и подберет наиболее выгодную стратегию продвижения.
           </span>
          </p>
<!--
          <h4>Increase sales with the latest features</h4>
          <p><span class="type-small">Best-in-class marketing and conversion tools enable our merchants to 
           grow at 2x the industry average. Drive more traffic, convert more visitors and seamlessly sell 
           on multiple channels from a single location.</span>
          </p>
-->
<!--
          <h4>Всю работу по локализациимы возьмем на себя.</h4>
          <p>
           <span class="type-small">
            Продвижение, складирование, доставка, колл-центр и вывод денег.
           </span>
          </p>
-->
          <h4>Создание адаптированного под страны ЕС интернет магазина.</h4>
          <p>
           <span class="type-small">
            Буквально в один клик вы создаете на платформе Marketello адаптированный под потребителя ЕС 
            интернет магазин, с выгрузкой всех товаров на новый сайт, базовой seo оптимизацией и 
            готовым локализированным контентом.
           </span>
          </p>
<!--
          <h4>Get unparalleled performance</h4>
          <p><span class="type-small">BigCommerce merchants benefit from industry-leading performance and 
           stability, including an average uptime of more than 99.99% and sites that load fast for 
           maximum conversion.</span>
          </p>
-->
          <h4>Мгновенная выгрузка товаров на прайс агрегаторы, маркет плейсы , Google и Facebook Shop.</h4>
          <p><span class="type-small">
           После добавление товара на платформу, вы получаете автоматическую возможность буквально 
           выгрузить все товары на Amazon, Allegro, Ebay, Etsy, Google Shop, Facebook Shop и сотни 
           других локальных прайс агрегаторы и маркетплейсы.
           </span></p>
          <h4>Мгновенное обслуживание ваших покупателей в ЕС.</h4>
          <p><span class="type-small">
           Наш колл-центр готов с первого заказа проконсультировать и принять заказ ваших европейских 
           клиентов, организовать доставку в течении 4-6 рабочих дней из Украину в любую точку ЕС. 
           И если необходимо решить любые сервисные вопросы.
          </span></p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
    <section id="contentBlock20293" class="block block--darkGreyWhiteScheme block--allViewport block--paddingTopBottom block-imagePosition--default block--oneColTextImage">
     <div class="block-container">
      <div class="block-container-inner">
       <div class="block-text block-textWidth--full">
        <h3 style="text-align: center; padding-top:30px;">
<!--         Get the features you need to accelerate your business.
-->		Получи все инструменты для прибыльных продаж в ЕС
        </h3>
        <p style="text-align: center;">
         <a href="#">Узнать больше о функциях</a>
        </p>
       </div>
      </div>
     </div>
    </section>

	<section id="contentBlock14690" class="block block--defaultScheme block--paddingBottomSmallScheme block--allViewport block--paddingTopBottom block--twoColAbsolute">
	 <div class="block-container">
	  <div class="block-container-inner">
	   <div class="block-text">
	    <h2 class="marginTop-40" style="text-align: center;">
<!--	     Запуск продаж ваших товаров в ЕС &mdash;<br>включено ВСЁ
-->
	    Логистика, доставка и сервис ваших заказов в ЕС
	    </h2>
	    <p style="text-align: center;" rel="text-align: center;">
	     <span class="type-large">
<!--	      We don’t just help you grow revenue; we empower you to reduce <br>
	      costs and streamline your operations.
-->
	    Инфраструктура Marketello позволяет вам сокращать до 4 <br>
	    раз затраты на логистику и операции при продажах в ЕС.
	    
	     </span>
	    </p>
	   </div>
	   <div class="block--twoColAbsolute-row block--twoColAbsolute-row--split6">
	    <div class="block--twoColAbsolute-column">
	     <div class="block-image block-image--png">
	      <img style="right:-915px;bottom:110px;" src="/assets/backgrounds/OptimizeYourBusiness_Boxes.png" alt="OptimizeYourBusiness Boxes">
	     </div>
	     <div class="block-text">
<!--	      <h4 class="marginTop-40">Оценка ниши и ценовой политики</h4>
-->	      <h4 class="marginTop-40">Колл-центр и менеджеры по продажам в ЕС.</h4>
	      <p>
	       <span class="type-small">
<!--	        <ul>
	         <li>анализ аналогичных товарных групп на рынках ЕС</li>
	         <li>рекомендации по розничным ценам</li>
	        </ul>
-->
		Наш колл-центр готов принимать звонки, отвечать на запросы и 
		консультировать ваших клиентов 24/7 , на языке страны продажи.
	        <a href="#">Узнать больше</a><br>
	       </span>
	      </p>
<!--	      <h4>Разработка и адаптация интернет-магазинов на рынки стран ЕС</h4>
-->	      <h4>Доставка заказов вашим клиентам в ЕС.</h4>
	      <p>
	       <span class="type-small">
<!--	        <ul>
	         <li>Локализация и переводы</li>
	         <li>SEO оптимизация</li>
	         <li>Наполнение и поддержка</li>
	         <li>Размещение товаров на маркетплейсах и прайс-агрегаторах
	        </ul>
-->
		Вам нет необходимости хранить все товары на складах в ЕС. После заказа на вашем 
		европейском сайте, достаточно отправить товар на наш распределительный склад в Украине. 
		Мы экспортируем его в несколько раз дешевле чем Укрпочта или существующие службы доставки, 
		и доставим вашему клиенту в течении 4-6 дней.
		<a href="#">More on Marketello Analytics</a><br>
	       </span>
	      </p>
<!--	      <h4>Продвижение</h4>
-->	      <h4>Решение сервисных случаев, рекламаций и возвратов.</h4>
	      <p>
	       <span class="type-small">
<!--	        <ul>
	         <li>SEO продвижение</li>
	         <li>AdWords + CPA/CPC-трафик</li>
	         <li>Email-маркетинг</li>
	         <li>Реклама в соц. сетях</li>
	        </ul>
-->
		Даже если клиент во время получения, или после, решил вернуть товар, что требует запуска 
		всех процедур рекламаций, наша команда с заботой организуем весь процесс возврата или 
		гарантийного обслуживания.
	       </span>
	       <span class="type-small">
	        <a href="#">Узнать больше про сервис</a>
	       </span>
	      </p>
	      <h4>Вывод денег и отсутствие необходимости в наличии юр лица в ЕС.</h4>
	      <p>
	       <span class="type-small">
<!--	        <ul>
	         <li>Клиент-сервис, call-center и обработка заказов на всех европейских языках</li>
	         <li>Приём платежей и вывод валюты в Украину</li>
	         <li>Полный цикл логистики от склада производителя до клиента</li>
	         <li>пост-продажное обслуживание, сервис, возвраты, гарантия</li>
	        </ul>
-->
		Взаимодействуя на основе договора вашего украинского предприятия с нашим европейским 
		представительством, где мы являемся материально ответственным лицом за реализации ваших 
		заказов. С последующим возвратом оплаты за заказ на счет вашей украинской фирмы.
	       </span>
	       <span>
	        <a href="#">Узнать больше про финансы</a>
	       </span>
	      </p>
<!--	      <h4>+ Вывод товаров на Amazon/Ebay</h4>
-->	
	      <p>
	       <a href="" trial-modal-v2="15-day-free-trial-modal-v2" class="button button--action gtm_trial_start">Выбрать тариф</a>
	      </p>
	     </div>
	    </div>
	   </div>
	  </div>
	 </div>
	</section>

<!-- #inner divs without outer section
       <div class="block-container"><div class="block-container-inner"><div class="block-text"><h2 class="marginTop-40" style="text-align: center;">Optimize your business</h2><p style="text-align: center;" rel="text-align: center;"><span class="type-large">We don’t just help you grow revenue; we empower you to reduce <br>costs and streamline your operations.</span></p></div><div class="block--twoColAbsolute-row block--twoColAbsolute-row--split6"><div class="block--twoColAbsolute-column"><div class="block-image block-image--png"><img style="right:-915px;bottom:110px;" src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/backgrounds/OptimizeYourBusiness_Boxes.png?mtime=20160315102140" alt="OptimizeYourBusiness Boxes"></div><div class="block-text"><h4 class="marginTop-40">A better way to ship</h4><p><span class="type-small">BigCommerce makes it quick and easy to set up powerful shipping options. We <br>support real-time carrier quotes, free shipping, flat rates, dropshipping, USPS label printing and more.<br><a href="/features/shipping-and-fulfillment/">More on shipping</a><br></span></p><h4>Analyze and improve</h4><p><span class="type-small">BigCommerce Analytics lets you see your most important metrics at a glance, or dig deeper to spot trends, remove bottlenecks, improve merchandising and increase customer loyalty.<br><a href="/features/ecommerce-analytics/">More on BigCommerce Analytics</a><br></span></p><h4>Your choice of payment providers</h4><p><span class="type-small">Unlike Shopify, we don’t charge you a fee for using your preferred payment solutions. You’ll get access to the best gateways at the best rates, digital wallets like Amazon Pay and Apple Pay to boost mobile conversion, and even consumer financing options.  <br></span><span class="type-small"><a href="https://www.bigcommerce.com/features/accept-credit-cards-and-payments/" target="_blank">More on payments</a></span></p><h4>Simplify your multi-channel sales</h4><p><span class="type-small">The BigCommerce Channel Manager is the best way to sell on multiple channels. It gives you a single place to process all online sales, whether they’re made on your site, social media or marketplaces.<br></span><span class="type-small"><a href="/multi-channel-ecommerce/" target="_blank">More on Channel Manager</a></span></p></div></div></div></div></div>
-->
<!--
      <section id="contentBlock20283" class="block block--defaultScheme block--allViewport block--paddingBottom block-imagePosition--default block--oneColTextImage">
       <div class="block-container">
        <div class="block-container-inner">
         <div class="block-text block-textWidth--wide">
          <h3 style="text-align: center;" rel="text-align: center;">
           No matter what size your business, BigCommerce <br>
           has a solution that will help you sell more
          </h3>
          <h3 style="text-align: center;"></h3>
          <p style="text-align: center;">
           <img src="https://wwwcdn.bigcommerce.com/www1.bigcommerce.com/assets/logos/home-brand-logos.png?mtime=20170110165631">
          </p>
         </div>
        </div>
       </div>
      </section>
     <section id="contentBlock20284" class="block block--defaultScheme block--allViewport block--paddingTopBottom block--twoColTextOverBg">
      <div class="block-container">
       <div class="block-container-inner">
        <div class="block--twoColTextOverBg-row block--twoColTextOverBg-row--split6">
         <div class="block--twoColTextOverBg-column block--twoColTextOverBg-column--centerImageAlign">
          <div class="block-text"><p class="rt-scheme--lightestGrey" style="text-align: center;">
           <strong class="rt-scheme-headline">Solutions for fast-growing brands</strong>
           <span class="type-large">
            <br>All the tools you need to increase sales <br>and improve your bottom line
           </span>
           <span class="type-large">
            .<br><br>
            <a href="/ecommerce-solutions/" class="button button--action">Grow your business</a>
            <br>
           </span>
          </p>
         </div>
        </div>
        <div class="block--twoColTextOverBg-column block--twoColTextOverBg-column--centerImageAlign">
         <div class="block-text">
          <p class="rt-scheme--lightestGrey" style="text-align: center;" rel="text-align: center;">
           <span class="type-large">
            <strong class="rt-scheme-headline">Solutions for high-volume businesses</strong>
            <br>Advanced features, premium support,<br>enterprise-grade hosting
           </span>
           <span class="type-large">
            .<br><br>
            <a href="/enterprise-ecommerce-solution/" class="button button--action">BigCommerce Enterprise</a>
            <br>
           </span>
          </p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
-->
    <section id="contentBlock20291" class="block block--darkGreyWhiteScheme block--allViewport block--paddingTopBottom block--twoColAbsolute">
     <div class="block-container">
      <div class="block-container-inner">
       <div class="block-text">
        <h2 style="text-align: center; padding-bottom:40px;">
         Развитие продаж и твердые позиции на европейском рынке
        </h2>
       </div>
       <div class="block--twoColAbsolute-row block--twoColAbsolute-row--split5">
        <div class="block--twoColAbsolute-column">
         <div class="block-image block-image--png">
<!--          <img style="left:545px;top:60px;" src="/assets/screens/home-grow.png" alt="home-grow">
-->              <img style="left:445px;top:10px;" src="/assets/images/marketello_amazon.png" alt="marketello-analytics">
         </div>
         <div class="block-text">
<!--
          <h4>Build the ultimate shopping experience</h4>
          <p><span class="type-small">Our revolutionary design platform lets you create stores that engage 
           shoppers and make more sales. Choose from the best responsive ecommerce templates on the market 
           or build a fully custom site.</span>
          </p>
-->
<!--
          <h4>Без офиса, регистрации компании, склада и сотрудников.</h4>
          <p>
           <span class="type-small">
            Прямо из Украины. Благодаря Marketello.
           </span>
          </p>
-->
          <h4>Максимизируем возврат от инвестиций в рекламу (SEO, PPC, CPC, CPA и Ремаркетинг).</h4>
          <p>
           <span class="type-small">
	    Marketello имея интеграцию с основными инструментами продвижения, во взаимодействии с 
	    профильными специалистами нашей команды, позволяют быстро запустить и оптимизировать 
	    сайт под основные методы продвижения в ЕС. С пониманием и уже заложенными в систему 
	    алгоритмами как при минимальных затратах получить максимальную прибыль от рекламы 
	    вашего интернет магазина.
           </span>
          </p>
<!--
          <h4>Increase sales with the latest features</h4>
          <p><span class="type-small">Best-in-class marketing and conversion tools enable our merchants to 
           grow at 2x the industry average. Drive more traffic, convert more visitors and seamlessly sell 
           on multiple channels from a single location.</span>
          </p>
-->

          <h4>Продвижение в социальных сетях, меил маркетинг и другие он-лайн маркетинговые инструменты.</h4>
          <p>
           <span class="type-small">
            Централизованное управление развития отношений с вашими клиентами и коммуникаций с 
            потенциальными покупателями с помощью социальных сетей, системы меил маркетинговых 
            стратегий, маркетинговых активностей, crm , промокодов, акций. Адаптированные под 
            страны продвижения.
           </span>
          </p>

          <h4>Продажи на Amazon и Ebay.</h4>
          <p>
           <span class="type-small">
            Наша платформа позволяет централизованно управлять продажами на таких ключевых 
            e-commerce агрегаторах как Amazon и Ebay. Без лишних хлопот и затрат с вашей стороны. 
            Так как основной функционал Marketello адаптирован под данные каналы, что облегчает 
            управление и расширяет охват вашего предложения в ЕС.
           </span>
          </p>
<!--
          <h4>Get unparalleled performance</h4>
          <p><span class="type-small">BigCommerce merchants benefit from industry-leading performance and 
           stability, including an average uptime of more than 99.99% and sites that load fast for 
           maximum conversion.</span>
          </p>
-->
          <h4>Проверенные и прибыльные алгоритмы продвижения под страны ЕС.</h4>
          <p><span class="type-small">
	    Опыт нашей европейской команды и партнеров позволяет создавать и развивать наиболее прибыльные 
	    алгоритмы продвижения и рекламы в любой из стран ЕС, с учетом особенностей инструментов и 
	    страны продаж. Что позволяет уменьшить временные и финансовые затраты как на подключение 
	    инструментов , так и их эффективного использования.
           </span></p>
<!--          <h4>Мгновенное обслуживание ваших покупателей в ЕС.</h4>
          <p><span class="type-small">
           Наш колл-центр готов с первого заказа проконсультировать и принять заказ ваших европейских 
           клиентов, организовать доставку в течении 4-6 рабочих дней из Украину в любую точку ЕС. 
           И если необходимо решить любые сервисные вопросы.
          </span></p>
-->
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
    <section id="contentBlock20293" class="block block--darkGreyWhiteScheme block--allViewport block--paddingTopBottom block-imagePosition--default block--oneColTextImage">
     <div class="block-container">
      <div class="block-container-inner">
       <div class="block-text block-textWidth--full">
        <h3 style="text-align: center; padding-top:30px;">
	    Узнай как Marketello помогает увеличить ваши продажи и возврат от инвестиций в рекламу в ЕС, 
	    с помощью опыта, лучших стратегий и алгоритмов продвижения.
        </h3>
        <p style="text-align: center;">
         <a href="#">Узнать подробнее</a>
        </p>
       </div>
      </div>
     </div>
    </section>

<!--
    <section id="contentBlock20294" class="block block--defaultScheme block--allViewport block--paddingTopBottom block--twoColTextOverBg">
     <div class="block-container">
      <div class="block-container-inner">
       <div class="block--twoColTextOverBg-row block--twoColTextOverBg-row--split5">
        <div class="block--twoColTextOverBg-column block--twoColTextOverBg-column--centerImageAlign">
         <div class="block-text">
          <h1 class="marginTop-90">Powerful <br>ecommerce <br>software that <br>grows with you</h1>
          <p><span class="type-large">No matter what size your business, <br>BigCommerce can help 
           increase your sales</span><span></span>
          </p>
         </div>
        </div>
        <div class="block--twoColTextOverBg-column block--twoColTextOverBg-column--centerImageAlign">
         <div class="block-text">
          <p class="rt-scheme--lightestGrey">
           <strong class="rt-scheme-headline">Solutions for fast-growing brands</strong><br>
           <span class="type-small">
            Get beautiful themes to build an engaging online store, built-in SEO and conversion tools 
            to scale your business, and much more.<br><br>
           </span>
           <a href="/ecommerce-solutions/" class="button button--action">Grow your business</a>
          </p>
          <p class="rt-scheme--lightestGrey">
           <strong class="rt-scheme-headline">Solutions for high-volume businesses</strong><br>
           <span class="type-small">
            BigCommerce Enterprise is an advanced, reliable platform designed to grow revenue and 
            optimize operations.<br><br>
           </span>
	   <a href="/enterprise-ecommerce-solution/" class="button button--action">BigCommerce Enterprise</a>
	  </p>
	 </div>
	</div>
       </div>
      </div>
     </div>
    </section>
-->
	<footer role="contentinfo" class="footer footer--decorated">
	 <div class="footer-nav">
	  <div class="footer-nav-column footer-nav-column--large">
	   <h4 class="footer-nav-heading">
<!--
	    <a href="/sell/" title="Sell Online" class="footer-links-link ">Sell Online</a>

	    <a href="/contact/" title="Связаться с нами" class="footer-links-link ">Связаться с нами</a>
	   </h4>

	   <ul class="footer-links">
	    <li class="footer-links-item">

	     <a href="/features/" title="Features" class="footer-links-link ">Features</a>

	     <a href="/about/" title="О сервисе" class="footer-links-link ">О сервисе</a>
	    </li>

	    <li class="footer-links-item">
	     <a href="/pricing/" title="Pricing" class="footer-links-link ">Pricing</a>
	    </li>

	    <li class="footer-links-item">
	     <a href="/oferta/" title="Публичная оферта" class="footer-links-link ">Публичная оферта</a>
	    </li>

	    <li class="footer-links-item">
 	     <a href="/showcase/" title="Ecommerce Stores" class="footer-links-link ">Ecommerce Stores</a>
	    </li><li class="footer-links-item">
	     <a href="/enterprise-ecommerce-solution/" title="Enterprise Ecommerce"class="footer-links-link ">Enterprise Ecommerce</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/shopping-cart/" title="Shopping Cart" class="footer-links-link ">Shopping Cart</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/blog/best-ecommerce-website-design/" title="Ecommerce Design"target="_blank"class="footer-links-link ">Ecommerce Design</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/amazon/" title="Sell on Amazon"class="footer-links-link ">Sell on Amazon</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/ecommerce-solutions/" title="Ecommerce Solution"class="footer-links-link ">Ecommerce Solution</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/facebook/" title="Sell on Facebook"class="footer-links-link ">Sell on Facebook</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/features/secure-web-hosting/" title="Ecommerce Hosting" class="footer-links-link ">Ecommerce Hosting</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/features/omni-channel-software/pos-integrations/" title="POS" class="footer-links-link">POS</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/features/ecommerce-api/" title="Ecommerce API"class="footer-links-link ">Ecommerce API</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/features/b2b-ecommerce-platform/" title="B2B Ecommerce"class="footer-links-link ">B2B Ecommerce</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/ecommerce-website/" title="Ecommerce Website"class="footer-links-link ">Ecommerce Website</a>
	    </li>
-->
	   </ul>
	  </div>
	  <!--//Footer Column -->
	  <div class="footer-nav-column footer-nav-column--large">
	   <h4 class="footer-nav-heading">
<!--
	    <a href="/resources/" title="Resources" class="footer-links-link">Resources</a>

	    <a href="/school/" title="Школа e-Commerce продаж" class="footer-links-link">Школа e-Commerce продаж</a>
	   </h4>

	   <ul class="footer-links">
	    <li class="footer-links-item">
	     <a href="/apps/" title="Apps &amp; Integrations" class="footer-links-link">Apps &amp; Integrations</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/ecommerce-answers/" title="Ecommerce Answers" class="footer-links-link ">Ecommerce Answers</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/theme-store/" title="Templates &amp; Themes" class="footer-links-link">Templates &amp; Themes</a>
	    </li>
	    <li class="footer-links-item">
 	     <a href="/developer/" title="Developer Portal" class="footer-links-link">Developer Portal</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/partners/directory/" title="Partner Services" target="_blank" class="footer-links-link">Partner Services</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/developer/api/" title="API Documentation" class="footer-links-link">API Documentation</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/university/" title="Marketello University" class="footer-links-link">Marketello University</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/blog/" title="Marketello Blog" class="footer-links-link">Marketello Blog</a>
	    </li>
	    <li class="footer-links-item">
	     <a href="/case-study/" title="Case Studies" class="footer-links-link ">Case Studies</a>
	    </li>
	   </ul>
-->
	  </div>
	  <!--//Footer Column -->
	 <div class="footer-nav-column">
	  <h4 class="footer-nav-heading">
<!--
	   <a href="/support/" title="Support" target="_blank" class="footer-links-link">Support</a>

	   <a href="/jobs/" title="Вакансии" target="_blank" class="footer-links-link">Вакансии</a>
	  </h4>

	  <ul class="footer-links">
	   <li class="footer-links-item">
	    <a href="/forum/" title="Community Forum" target="_blank" class="footer-links-link">Community Forum</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/partners/" title="Become a Partner" class="footer-links-link">Become a Partner</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/partners/affiliates/" title="Become an Affiliate" class="footer-links-link">Become an Affiliate</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/support/" title="Contact Support" target="_blank" class="footer-links-link">Contact Support</a>
	   </li>
	  </ul>
-->
	 </div>
	 <!--//Footer Column -->
	 <div class="footer-nav-column">
	  <h4 class="footer-nav-heading">
<!--
	   <a href="/partners/" title="Партнёрам" class="footer-links-link">Партнёрам</a>
	   <a href="/about-us/" title="Company" class="footer-links-link">Company</a>
-->
	  </h4>
<!--
	  <ul class="footer-links">
	   <li class="footer-links-item">
	    <a href="/press/awards/" title="Awards" class="footer-links-link">Awards</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/contact/" title="Contact Us" class="footer-links-link">Contact Us</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/press/" title="Press Center" class="footer-links-link">Press Center</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/careers/" title="Careers - we&#039;re hiring!" class="footer-links-link">Careers - we&#039;re hiring!</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/terms/" title="Terms of Service" class="footer-links-link ">Terms of Service</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="/privacy/" title="Privacy Policy"class="footer-links-link ">Privacy Policy</a>
	   </li>
	  </ul>
-->
	 </div>
	 <!--//Footer Column -->
	 </div>
	 
	<!-- //Footer Nav -->
	<div class="footer-bottom">
	 <div class="footer-bottom-copyright footer-bottom-copyright--desktop">
	  <a href="/"><img src="/assets/logos/marketello_logo_main.png" class="footer-bottom-logo"></a>
	  <span class="copyright">&copy; Copyright 2016 - <?php echo date("Y"); ?> Marketello LLC 
	   <a href="/" class="footer-links-link">Ecommerce Platform</a>
	  </span>
	 </div>
<!--
	 <div class="footer-bottom-social">
	  <ul class="footer-links footer-links--horizontal">
	   <li class="footer-links-item">
	    <a href="http://twitter.com/Marketello" title="Twitter" target="_blank" class="footer-links-link">Twitter</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="http://www.facebook.com/Marketello" title="Facebook" target="_blank" class="footer-links-link">Facebook</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="http://www.linkedin.com/company/marketello" title="LinkedIn" target="_blank" class="footer-links-link">LinkedIn</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="http://www.youtube.com/Marketello" title="YouTube" target="_blank" class="footer-links-link">YouTube</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="http://pinterest.com/marketello/" title="Pinterest" target="_blank" class="footer-links-link">Pinterest</a>
	   </li>
	   <li class="footer-links-item">
	    <a href="https://plus.google.com/+marketello" title="Google Plus" target="_blank" class="footer-links-link">Google Plus</a>
	   </li>
	  </ul>
	 </div>
-->
	 <div class="footer-bottom-copyright footer-bottom-copyright--mobile">
	  <span class="copyright">
	   &copy;Copyright 2016 - <?php echo date("Y"); ?> Marketello LLC Shopping Cart Software
	  </span>
	 </div>
	</div>
	<!-- //Footer Bottom -->
       </footer>
<!--       <contact-us></contact-us>
-->
      </div>

<!--
<script type='text/javascript' src='https://c.la3-c1-chi.salesforceliveagent.com/content/g/js/39.0/deployment.js'></script>
<script>
var salesforceEndpoint = "https://www.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8";
var salesforceOrgId = "00D30000001FDCG";
var liveAgentId = '573130000004aDY';
var liveAgentInitParam1 = 'https://d.la3-c1-chi.salesforceliveagent.com/chat';
var liveAgentInitParam2 = '572130000004aAi';
var liveAgentInitParam3 = '00D30000001FDCG';
</script>
-->
<script>
    var _bcdl = {
        attributes: {
                        page:{
                id: 20265
            }
                    },
        config: {
            containerId: "GTM-D9S9",
            customName: "dataLayer"
        },
        plugins: ['BCCOM']
    };
</script>
<!-- // top menu style depends on this file -->
<script src="/assets/js/vendor-bdf5897b38.js"></script>

<script src="/assets/js/bccom-5df12acd2a.js"></script>

<script src="/js/forms2/js/forms2.min.js"></script>
<!--
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"0253ac8af3","applicationID":"745857","transactionName":"MQcEbUBSWhYCB0QPVwhNM0tbHF0LBwFISEgOEg==","queueTime":0,"applicationTime":6,"atts":"HUAHGwhISRg=","errorBeacon":"bam.nr-data.net","agent":""}</script>
-->

<script>
// Validating Empty Field
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
</script>

<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">
<img id="close" src="/assets/images/3.png" onclick ="div_hide()">
<h2>Получите индивидуальное предложение под Ваши товарные группы</h2>
<hr>
<!-- <input id="name" name="name" placeholder="Name" type="text"> -->
<input id="email" name="email" placeholder="Email" type="text">
<!-- <textarea id="msg" name="message" placeholder="Message"></textarea> -->
<br>
<a href="javascript:%20check_empty()" id="submit">Send</a>
</form>
</div>

</body>
</html>


<!-- Cached direct 2017-06-15 16:20:46, displayed 2017-06-15 17:26:09, generated in 0.00611591s -->