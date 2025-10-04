<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SkillRabbit</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/remixicon.css">
    <link rel="stylesheet" href="/css/vendor/eduvibe-font.css">
    <link rel="stylesheet" href="/css/vendor/magnifypopup.css">
    <link rel="stylesheet" href="/css/vendor/slick.css">
    <link rel="stylesheet" href="/css/vendor/odometer.css">
    <link rel="stylesheet" href="/css/vendor/lightbox.css">
    <link rel="stylesheet" href="/css/vendor/animation.css">
    <link rel="stylesheet" href="/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
</head>

<body>

<style>

.edu-section-gap {
    padding: 60px 0 !important;
}

.height-940 {
    min-height: 820px;
    width: 100%;
}

.book-free {
    background: #FEE45A !important;
    padding: 6px 18px !important;
    font-size: 20px;
    color: #000 !important;
    border-radius: 100px;
    text-decoration: none;
    display: inline-block;
    font-weight: 600 !important;
    transition: background 0.3s ease, transform 0.2s ease;
}

.free-call {
    margin-left: 10px; 
    width: 25px;
}

.standard {
    background-color: #FEE45A;
    margin: 10px auto;
    border-radius: 6px;
    padding: 10px;
    border: 2px solid #FEA613;
    max-width: fit-content;
    color: #000;
    font-size: 14px;
    font-weight: 700;
}

.industry {
    background: linear-gradient(90deg, rgba(179, 122, 222, 1) 0%, rgba(13, 129, 254, 1) 100%)!important;
    padding: 5px 8px;
    color: #fff;
    border-radius: 6px;
    font-weight: 500;
}

.computer {
    margin-top: -4px;
    width: 16px;
}

.banner-style-3 .banner-image .banner-main-image {
    margin-right: -45px;
    margin-bottom: 16px !important;
    text-align: right;
}

.three-box {
    margin-bottom: 220px;
}
 
.gradient-purple {
    background: linear-gradient(90deg, rgba(179, 122, 222, 1) 0%, rgba(13, 129, 254, 1) 100%) !important;
}

.gradient-blue {
    background: #0D81FE;
}

.credentials {
    font-size: 20px;
    font-weight: 600;
}

.recognized {
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    margin-top: 10px;
}

.student-image {
    position: relative;
}

.student-image img {
    max-width: 100%;
    border-radius: 12px;
}

.feature-card {
    border-radius: 16px;
    color: white;
    padding: 30px 20px;
    height: 100%;
}

.feature-icon {
    height: 50px;
    margin-bottom: 20px;
}

.video-section {
    padding: 50px 20px;
    text-align: center;
    background-image: url("/images/videos_bg.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
}
 
.video-container {
    max-width: 750px;
    margin: -250px auto 30px;
    border: 2px solid #FFD700;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
}
 
video {
   width: 100%;
   height: 400px;
   display: block;
   border-radius: 12px;
   object-fit: cover;
   background-color: #000;
}
 
.play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #FFD700;
    color: black;
    font-size: 40px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    box-shadow: 0 0 20px rgba(255, 215, 0, 0.7);
    z-index: 2;
}
 
 video::-webkit-media-controls {
    display: none;
}
 
.custom-btn {
   display: inline-flex;
   align-items: center;
   gap: 10px;
   font-weight: 600;
   font-size: 18px;
   color: #000;
   text-decoration: none;
   padding: 12px 30px;
   border-radius: 50px;
   position: relative;
   z-index: 1;
   background: 
     linear-gradient(#FFD700, #FFD700) padding-box,
     linear-gradient(90deg, #00ff85, #ff6600) border-box;
   border: 3px solid transparent;
}
 
.custom-btn::after {
   content: "";
   position: absolute;
   left: 50%;
   transform: translateX(-50%);
   bottom: -12px;
   width: 80%;
   height: 20px;
   border-radius: 50%;
   z-index: -2;
}
 
.video-text {
    margin-top: 20px;
    font-size: 18px;
    color: #fff;
}
 
.video-text span {
    font-weight: 700;
    color: #F9B776;
}
 
@media (max-width: 768px) {

.video-container {
    margin-top: 0;
}

.play-btn {
    width: 60px;
    height: 60px;
    font-size: 30px;
}

.custom-btn {
    font-size: 16px;
    padding: 10px 24px;
}

}
 
 @media (max-width: 991px) {

.video-container {
    margin: -200px auto 20px;
}

video {
    height: 300px;
}

}
 

@media (max-width: 576px) {

.video-container {
    margin: -200px auto 15px;
}
 
video {
    height: 170px;
}

}

.title-career {
    font-size: 46px;
    font-weight: 700;
    background: linear-gradient(135deg, #B37ADE, #0D81FE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.powerful {
    font-size: 24px;
    color: #000;
    font-weight: 600;
    margin-bottom: 60px;
}

.certified-exce {
    font-size: 24px;
    font-weight: 700;
    background: linear-gradient(135deg, #B37ADE, #0D81FE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-top: 10px;
    margin-bottom: 20px;
} 

.earn-exce {
    color: #717171;
    font-size: 18px;
    font-weight: 600;
}

.service-card {
    margin-bottom: 20px;
    margin-top: 20px;
}

.section-title {
    text-align: center;
    font-size: 46px;
    font-weight: 700;
    background: linear-gradient(135deg, #B37ADE, #0D81FE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 30px;
}


.accordion-button:not(.collapsed) {
  color: var(--bs-accordion-active-color);
  background-color: #007bff !important;
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}

.accordion-button {
    background: #007bff;
    color: #fff !important;
    font-weight: 600;
    font-size: 24px !important;
    border-radius: 8px;
    padding: 15px;
}

.accordion-button:focus {
    box-shadow: none;
}

.accordion-button::after {
    color: #fff;
}

.accordion-item {
    border: none;
    margin-bottom: 10px;
}

.accordion-body {
    background: #3399ff;
    color: #fff;
    border-radius: 0 0 8px 8px;
    padding: 20px;
}

.accordion-body ul {
    margin: 0;
    padding-left: 20px;
}

.accordion-body ul li {
    margin-bottom: 10px;
}

.accordion-button .icon {
    margin-right: 30px;
    font-size: 1.5rem;
}

.build-portfolio {
    text-align: center;
    background-image: url("/images/build-portfolio.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    color: white;
}

.portfolio-pro {
    margin-bottom: 20px;
    font-size: 46px;
}

.project-card {
    background-color: #fff;
    color: #000;
    border-radius: 12px;
    padding: 25px;
    text-align: left;
    box-shadow: 0 0 12px rgba(0,0,0,0.1);
    height: 100%;
}
.badge-advanced {
    background: linear-gradient(to right, #aa76f7, #007bff);
    color: white;
    border-radius: 30px;
    padding: 8px 15px;
    font-size: 28px;
    font-weight: 600;
}

.real-time {
    color: #000;
    font-size: 20px;
    line-height: 28px;
}

.badge-expert {
    background: linear-gradient(to right, #F9B776, #FFAF00);
    color: white;
    border-radius: 30px;
    padding: 8px 15px;
    font-size: 28px;
    font-weight: 600;
}

.badge-intermediate {
    background: linear-gradient(to right, #49E4A3, #39C988);
    color: white;
    border-radius: 30px;
    padding: 8px 15px;
    font-size: 28px;
    font-weight: 600;
}

.project-title {
    font-weight: 600;
    margin-top: 30px;
    margin-bottom: 10px;
    font-size: 24px;
    background: linear-gradient(90deg, #9b5de5, #3a86ff);
    background-clip: border-box;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.experience {
    color: #fff;
    font-size: 20px;
    margin-bottom: 40px;
}
.highlight {
    color: #FEE45A;
    font-weight: 600;
}


.container-custom {
    padding-top: 60px;
    padding-bottom: 60px;
}

@media (max-width: 768px) {

.accordion-button {
    font-size: 1rem;
    padding: 12px;
  }
}

.title1 {
    font-size: 50px;
    font-weight: 700;
    background: linear-gradient(135deg, #1a73e8, #9c27b0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.just-month {
    background: linear-gradient(90deg, rgba(179, 122, 222, 1) 0%, rgba(13, 129, 254, 1) 100%) !important;
    padding: 12px 18px !important;
    font-size: 36px !important;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    display: inline-block;
    font-weight: 500;
    transition: background 0.3s ease, transform 0.2s ease;
    line-height: 38px !important;
    margin-top: 20px;
    border-radius: 100px !important; 
}

.info-box {
    color: white;
    padding: 10px 0;
    background: linear-gradient(to right, #bb60f4, #2887f7);
    margin-top: -115px;
    z-index: 2;
    position: relative;
}

.info-icon {
    font-size: 30px;
    margin-bottom: 8px;
    display: block;
}

.info-text {
    font-weight: 600;
    font-size: 16px;
}

.info-item {
    text-align: center;
}

.divider {
    width: 2px;
    background-color: #fff !important;
    height: 50px;
    margin: auto;
}

.title2 {
    font-size: 46px;
    font-weight: 550;
    color: #000; 
    margin-bottom: 10px;
}

.title3 {
    font-size: 46px;
    font-weight: 500;
    background: linear-gradient(135deg, #1a73e8, #9c27b0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-top: 60px;
}

.feature-style-6 .edu-feature-list .content p {
    margin-bottom: 10px !important;
}

.about-style-4 .gallery-wrapper img {
    border-radius: 5px;
    margin-top: 40px;
}

.title-gradient {
    font-weight: 500;
    font-size: 46px;
    background: linear-gradient(90deg, #9b5de5, #3a86ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-top: 40px;
}

.title-name {
    font-weight: 600;
    font-size: 28px;
    background: linear-gradient(90deg, #9b5de5, #3a86ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-top: 8px;
}

.nav-pills .nav-link {
    position: relative;
    border-radius: 30px;
    padding: 10px 25px;
    font-weight: 500;
    color: #000;
    background: #fff;
    border: none;
    margin: 5px 8px;
    z-index: 1;
    transition: all 0.3s ease;
    font-size: 18px;
    font-weight: 600;
}

.nav-pills .nav-link::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 2px;
    border-radius: 30px;
    background: linear-gradient(135deg, #1a73e8, #9c27b0);
    -webkit-mask: 
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    z-index: -1;
}

.nav-pills .nav-link.active {
    color: #1a73e8 !important;
    box-shadow: 0 0 12px rgba(255,208,100,0.7), 
              0 0 12px rgba(255,208,100,0.7);
}

.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #000;
    background-color: #fff;
}

.skills-tools {
    background-image: url("/images/skill_tool.svg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
}

.title-faq {
    font-weight: 500;
    font-size: 46px;
    background: linear-gradient(90deg, #9b5de5, #3a86ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-top: 0px;
}

.cta-section {
    background-image: url("/images/take.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    border-radius: 20px;
}

.take-today {
    font-size: 40px;
    text-align: left;
    margin-left: 20px;
    font-weight: 600;
    margin-top: 10px;
}

.your-career {
    color: #fff;
    text-align: left;
    margin-left: 20px;
    font-size: 20px;
    margin-bottom: 10px;
}

.btn-dark {
    background-color: #000;
    color: white;
    border-radius: 30px;
    padding: 10px 25px;
    font-weight: 600;
    border: none;
    font-size: 20px;
}

.btn-light {
    background-color: white;
    color: black;
    border-radius: 30px;
    padding: 10px 25px;
    font-weight: 600;
    border: none;
    font-size: 20px;
}

.learn {
    color: #fff;
    text-align: right;
    font-size: 40px;
}

.social-share1 li a {
  display: inline-block;
  font-size: 16px;
  color: var(--color-white);
  transition: 0.4s;
  text-align: center;
  padding: 10px;
}

.social-share1 {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    flex-wrap: wrap;
}

.search-wrapper {
    max-width: 600px;
    margin: 20px auto;
}

.search-input::placeholder {
    color: #aaa;
}

.search-input:focus {
    outline: none;
    background-image: none;
}

.search-button {
    position: absolute;
    top: 50%;
    right: 0px;
    transform: translateY(-50%);
    border-radius: 50px;
    border: none;
    color: #fff !important;
    font-weight: 500;
    padding: 10px 60px;
    background: linear-gradient(90deg, #a044ff, #2575fc);
    transition: 0.3s ease;
    font-size: 20px;
}

input[type="text"], input[type="password"], input[type="email"], input[type="number"], input[type="tel"], textarea {
    height: 50px;
    border-radius: 0px;
    border: 2px solid transparent;
    padding-left: 0px;
    padding-right: 120px;
    color: #e9e9e9 !important;
    border-bottom: 1px solid #fff;
}

.form-control:focus {
  color: var(--bs-body-color);
  background-color: transparent;
  border-color: none !important;
  outline: 0;
  box-shadow: none !important;
  border-bottom: 1px solid #fff !important;
}

.gradient-button:hover {
    opacity: 0.9;
    transform: scale(1.02);
    text-decoration: none;
}

.paying-job {
    background: linear-gradient(90deg, rgba(179, 122, 222, 1) 0%, rgba(13, 129, 254, 1) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent; 
    font-size: 90px !important; 
    line-height: normal !important; 
    font-weight: 700 !important;
    margin-top: -30px;
}

.custom-banner {
    background-color: #b682dd;
    color: white;
    padding: 10px 0;
    font-size: 16px;
}

.custom-banner span {
    font-weight: normal;
}

.custom-banner b {
    font-weight: bold;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
}
    
.info-icon img {
    width: 40px;
    height: 40px;
}

.lsat-footer {
    margin-top: -80px; 
    border-top: 1px solid #fff;
}

.modal-content {
    background: linear-gradient(90deg, #B37ADE 0%, #0D81FE 100%);
    border-radius: 25px;
    padding: 30px 20px;
    color: #fff;
    border: 0px;
}

.modal-header {
    border: none;
    padding-bottom: 0;
}

.modal-title {
    font-weight: 700;
    font-size: 32px;
    color: #fff;
    flex: 1;
}

.btn-close {
    background-color: #fff;
    width: 25px;
    height: 25px;
    border-radius: 100px;
}

.modal-body p {
    color: rgba(255,255,255,0.85);
    font-size: 16px;
    margin-bottom: 25px;
    line-height: 22px;
    font-weight: 600;
}

.form-label {
    color: #fff;
    font-weight: 600;
    font-size: 18px;
}

.form-control {
    background: transparent;
    border: none;
    border-bottom: 1px solid rgba(255,255,255,0.8);
    border-radius: 0;
    color: #fff;
    padding: 8px 0;
}

.form-control::placeholder {
    color: rgba(255,255,255,0.6);
}

.form-control:focus {
    box-shadow: none;
    border-bottom: 1px solid #fff;
}

.btn-submit {
    background: linear-gradient(#FFD700, #FFD700);
    color: #000 !important;
    font-weight: 600;
    border: none;
    border-radius: 12px;
    padding: 12px 0;
    width: 100%;
    margin-top: 10px;
    font-size: 20px;
}

.btn-cancel {
    background: transparent;
    color: #fff !important;
    border: 1px solid rgba(255,255,255,0.9) !important;
    border-radius: 12px;
    padding: 12px 0;
    width: 100%;
    margin-top: 12px;
     font-size: 20px;
}

.book-icon {
    width: 50px;
}


@media (max-width: 576px) {

.modal-content {
    padding: 25px 15px;
}

.modal-title {
    font-size: 22px;
}

.modal-body p {
    font-size: 13px;
}

}

@media (max-width: 576px) {

.edu-header.header-sticky.sticky {
    position: fixed;
    top: 0;
    left: 0;
    background-color: var(--color-white) !important;
    width: 100%;
    height: 48px;
    animation: headerSticky .95s ease forwards;
    box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.05);
    z-index: 10;
}

.edu-header .logo a {
    height: 6px !important;
    line-height: 6px !important; 
}

#menus-lines {
    display: none;
}

#logo-wid {
    width: 80px;
}

.logo {
    margin-left: 30px;
}

.logo-light {
    margin-top: -55px;
    margin-left: 15px;
}
 
.custom-banner {
    font-size: 12px !important;
}

.banner-style-3 {
    padding: 55px 0 55px;
}

.just-month {
    font-size: 20px !important;
    padding: 6px 16px !important;
    height: 36px !important;
    margin-top: -5px;
    line-height: 24px !important;
}

.read-more-btn {
    text-align: center !important;
}

#stu-bg {
    display: none;
}

#info-box-bottom {
    display: none;
}

.banner-style-3 .content .title {
    font-size: 22px;
    margin-top: 10px;
    color: #000 !important;
    font-weight: 400 !important;
    text-align: center !important;
    margin-bottom: 5px;
}

button i {
    font-size: 30px !important;
    background: linear-gradient(90deg, #B37ADE, #0D81FE); /* gradient colors */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text; /* for Firefox */
    transition: 0.3s;
}

.hamberger-button {
    background: transparent;
    border: 0px;
}

.book-free {
    font-size: 12px;
    padding: 4px 16px !important;
    font-weight: 600;
    margin-top: -8px;
}

.header-quote .quote-icon {
    margin: 0 10px 0px 0px;
}

.free-call {
    margin-left: 8px; 
    width: 16px;
}

.standard {
    font-size: 12px;
    padding: 8px;
    border-radius: 4px;
    border: 1.5px solid #FEA613;
}

.industry {
    font-size: 10px;
}

.computer {
    margin-top: -1px;
    width: 14px;
}

.paying-job {
    font-size: 36px !important;
    text-align: center;
    margin-top: 0px !important;
}

.info-box {
    margin-top: -88px;
    padding: 10px 0;
}

.video-container {
    margin-top: -125px
}

.three-box {
    margin-bottom: 0px;
}

.edu-section-gap {
    padding: 20px 0 !important;
}

.video-text {
    margin-top: 8px;
    font-size: 12px;
    color: #fff;
}

.custom-btn {
  font-size: 14px;
  color: #000;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 50px;
  position: relative;
  z-index: 1;
  background: linear-gradient(#FFD700, #FFD700) padding-box, linear-gradient(90deg, #00ff85, #ff6600) border-box;
  border: 1px solid transparent;
}

.video-section {
    height: 190px !important;
}

.feature-card {
    border-radius: 6px;
    color: white;
    padding: 8px !important;
    height: 100%;
}

.feature-icon {
    width: 25px;
    height: 25px;
    margin-bottom: 10px;
}

.credentials {
    font-size: 8px;
    font-weight: 600;
}

.recognized {
   display: none;
}

.banner-style-3 .banner-image .banner-main-image {
    margin-right: 0px;
    margin-bottom: 16px !important;
    text-align: right;
}

.title2 {
    font-size: 40px;
    margin-bottom: 10px;
}

.title-career {
    font-size: 20px;
}

.powerful {
   font-size: 14px;
   margin-bottom: 20px;
   line-height: 20px;
}

.certified-exce {
    font-size: 18px;
    margin-bottom: 10px;
}

.earn-exce {
    font-size: 14px;
}

.icon {
    width: 50px;
}

.service-card {
    margin-bottom: 20px;
    margin-top: 20px;
}

.search-button {
    padding: 10px 26px;
}

.title3 {
    font-size: 36px;
    margin-top: 40px;
}

.section-title {
    font-size: 20px;  
}

.book-icon {
    width: 30px;
}

.accordion-button {
   font-size: 15px !important;
}

.foundation-faq {
    font-size: 14px;
    color: #fff; 
    font-weight: 600;
}

.nav-pills .nav-link {
    padding: 10px 16px;
    margin: 5px 4px;
    font-size: 14px;
}

.title-gradient {
    font-size: 40px;
    margin-top: 40px;
}

.title-faq {
   font-size: 20px;
   margin-top: 20px;
}

.accordion-style-1 .edu-accordion-button {
    font-size: 16px;
}

.accordion-style-1 .edu-accordion-body {
    font-size: 14px;
    line-height: 22px;
}

.take-today {
    font-size: 30px;
    text-align: center;
    margin-left: 0px;
}

.your-career {
    color: #fff;
    text-align: center;
    margin-left: 0px;
    font-size: 18px;
}

.btn-dark {
    font-size: 16px;
}

.btn-light {
    font-size: 16px;
}


#logo-footers {
    margin-top: 40px !important;
    width: 100px;
    margin-left: -15px !important;
}

.learn {
    color: #fff;
    text-align: left;
    margin-left: 15px;
    font-size: 26px;
    margin-top: 20px;
}

.footer-style-default .edu-footer-widget.explore-widget {
    margin-left: 15px;
}

.footer-style-default .edu-footer-widget .footer-link li + li {
  margin-top: 10px;
}

.footer-style-default .edu-footer-widget .inner {
  margin-top: 20px;
}

.lsat-footer {
    margin-top: -80px; 
    border-top: 0px solid #fff;
}

.portfolio-pro {
    font-size: 20px;
}

.experience {
    font-size: 14px;
    line-height: 20px;
}

.badge-advanced {
    font-size: 16px;
    padding: 6px 15px;
}

.real-time {
    font-size: 16px;
    line-height: 16px;
}

.social-share1 {
    float: left !important;
    text-align: left !important;
}

#mards-section-desktop {
    display: none !important;
}

.take-today {
    font-size: 24px;
    text-align: center;
    margin-left: 0px;
}

.your-career {
    color: #fff;
    text-align: center;
    margin-left: 0px;
    font-size: 14px;
}

}


@media (min-width: 768px) {

.info-item {
    margin-bottom: 0;
}

.social-share1 li {
    margin-bottom: 8px;
}

   
}

@media (min-width: 577px) and (max-width: 767px)  {

.edu-header.header-sticky.sticky {
    position: fixed;
    top: 0;
    left: 0;
    background-color: var(--color-white) !important;
    width: 100%;
    height: 80px;
    animation: headerSticky .95s ease forwards;
    box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.05);
    z-index: 10;
}    

.edu-header .logo a {
    height: 80px !important;
    line-height: 80px !important; 
}

.book-free {
    font-size: 12px;
    padding: 4px 16px !important;
    font-weight: 600;
    margin-top: 0px;
}

#hamberger-top {
    display: none !important;
}

.logo {
    margin-left: 0px;
}

.banner-style-3 {
    padding: 80px 0 100px;
}

.banner-style-3 .content .title {
    font-size: 34px;
    text-align: center;
    margin-top: 20px;
}

.paying-job {
    font-size: 60px !important;
    text-align: center !important;
}

.just-month {
    font-size: 25px !important;
    padding: 6px 16px !important;
    height: 50px !important;
}

.read-more-btn {
    text-align: center !important;
}

.banner-style-3 .banner-image .banner-main-image {
    margin-right: 0px !important;
    margin-bottom: 12px !important;
    text-align: center !important;
}

.feature-card {
    border-radius: 12px;
    color: white;
    padding: 10px 6px;
    height: 100%;
}

.credentials {
    font-size: 13px;
    font-weight: 600;
}

.recognized {
    font-size: 12px;
    font-weight: 600;
    color: #fff;
    margin-top: 10px;
}


#logo-footers {
    margin-top: 40px !important;
    width: 120px;
    margin-left: -15px !important;
}

.learn {
    color: #fff;
    text-align: left;
    margin-left: -15px;
    font-size: 32px;
    margin-top: 20px;
}

#mards-section-mobile {
    display: none;
}

}


@media (min-width: 768px) and (max-width: 991px) {

.edu-header.header-sticky.sticky {
    position: fixed;
    top: 0;
    left: 0;
    background-color: var(--color-white) !important;
    width: 100%;
    height: 80px;
    animation: headerSticky .95s ease forwards;
    box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.05);
    z-index: 10;
}    

.edu-header .logo a {
    height: 80px !important;
    line-height: 80px !important; 
}

#hamberger-top {
    display: none !important;
}

.banner-style-3 {
    padding: 100px 0 100px;
}

.banner-style-3 .content .title {
    font-size: 44px;
    margin-top: 40px;
    text-align: center;
}

.paying-job {
    font-size: 84px !important;
    text-align: center;
}

.just-month {
    font-size: 25px !important;
    padding: 6px 16px !important;
    height: 50px !important;
}

.banner-style-3 .banner-image .banner-main-image {
    margin-right: 0px;
    margin-bottom: 0px !important;
    text-align: center;
}

#logo-footers {
    margin-top: 40px !important;
}

.learn {
    color: #fff;
    text-align: left;
    margin-left: 15px;
    font-size: 30px;
    margin-top: 20px;
}

.read-more-btn {
    text-align: center !important;
}

.feature-card {
    border-radius: 12px;
    color: white;
    padding: 15px 10px;
    height: 100%;
}

.credentials {
    font-size: 18px;
    font-weight: 600;
}

.recognized {
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    margin-top: 10px;
}

#mards-section-mobile {
    display: none !important;
}


}

@media (min-width: 992px) and (max-width: 1199px) {

.edu-header.header-sticky.sticky {
    position: fixed;
    top: 0;
    left: 0;
    background-color: var(--color-white) !important;
    width: 100%;
    height: 80px;
    animation: headerSticky .95s ease forwards;
    box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.05);
    z-index: 10;
}    

.edu-header .logo a {
    height: 80px !important;
    line-height: 80px !important; 
}

#hamberger-top {
    display: none !important;
}

.height-940 {
    min-height: 650px;
    width: 100%;
}

.banner-style-3 .content .title {
    font-size: 55px;
    margin-top: 0px !important;
}

.paying-job {
    font-size: 64px !important;
}

.just-month {
    font-size: 20px !important;
    padding: 6px 16px !important;
    height: 50px !important;
}

.banner-style-3 .banner-image .banner-main-image {
    margin-right: 0px;
    margin-bottom: 16px !important;
    text-align: left;
    margin-left: -50px;
}

#mards-section-mobile {
    display: none !important;
}

}

@media (min-width: 1200px) and (max-width: 1400px) {

#hamberger-top {
    display: none !important;
}

.height-940 {
    min-height: 760px;
    width: 100%;
}

.banner-style-3 .content .title {
    font-size: 64px;
    margin-top: 40px;
}

.paying-job {
    font-size: 78px !important;
}

.just-month {
    font-size: 30px !important;
    padding: 10px 16px !important;
    height: 55px !important;
}

.banner-style-3 .banner-image .banner-main-image {
    margin-right: 0px;
    margin-bottom: 16px !important;
    text-align: left;
    margin-left: -90px;
}

#mards-section-mobile {
    display: none !important;
}

}

@media (min-width: 1401px) and (max-width: 1800px) {

#hamberger-top {
    display: none !important;
}

.height-940 {
    min-height: 860px;
    width: 100%;
}

.banner-style-3 .content .title {
    margin-top: -40px !important;
}

.banner-style-3 .banner-image .banner-main-image {
    margin-right: 0px;
    margin-bottom: 22px !important;
    text-align: left;
    margin-left: -120px;
}

#mards-section-mobile {
    display: none !important;
}

}

@media (max-width: 991.98px) {
    .social-share1 {
        align-items: flex-start !important;
        padding-bottom: 50px;
    }
}


@media (max-width: 767.98px) {

.social-share1 .list-inline-item {
    margin: 0rem 0 !important;
    padding: 0 !important;
}

.social-share1 a {
    padding: 0;
    margin: 0;
    text-align: left;
    display: inline-block;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
}

}

</style>


<div class="main-wrapper">

    <div class="custom-banner text-center">
        <span>Become AI ready <b>check our AI courses</b> | with Industry expert</span>
    </div>
    
    <!-- Start header Area  -->
    <header class="edu-header header-sticky header-transparent header-style-2 header-default">
        <div class="row align-items-center">
            <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                <button class="hamberger-button" id="hamberger-top"><i class="ri-menu-line"></i></button>
                <div class="logo">
                    <a href="landing">
                        <img class="logo-light" id="logo-wid" src="/images/logo.svg" alt="logo-skill-rabbit">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-xl-block">
                <nav class="mainmenu-nav d-none d-lg-block">
                    <ul class="mainmenu">
                        <li class="has-droupdown"><a href="index">Courses</a>
                            <ul class="submenu">
                                <li><a href="#foundation">Fullstack + GenAI</a></li>
                                <li><a href="#foundation">Frontend + GenAI</a></li>
                                <li><a href="#foundation">Backend + GenAI</a></li>
                            </ul>
                        </li>
                        <li><a href="#footer-area">About</a></li>
                        <li><a href="#faq">FAQs</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#strategyModal">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-8 col-xl-3 col-md-6 col-6">
                <div class="header-right d-flex justify-content-end">
                    <div class="header-quote">
                        <div class="quote-icon quote-user" >
                            <button type="button" class="btn btn-primary book-free" data-bs-toggle="modal" data-bs-target="#strategyModal">Book FREE Call <img src="/images/free_arrow.svg" alt="free-arrow" class="free-call"></button>
                        </div>
                        <div class="hamberger quote-icon d-block d-xl-none">
                            <button class="hamberger-button" id="menus-lines"><i class="ri-menu-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Trigger Button -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="landing">
                        <img src="/images/logo.svg" alt="logo-mobile-skill-rabbit">
                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>
            <ul class="mainmenu">
                <li class="has-droupdown"><a href="#">Courses</a>
                    <ul class="submenu">
                        <li><a href="#foundation">Fullstack + GenAI</a></li>
                        <li><a href="#foundation">Frontend + GenAI</a></li>
                        <li><a href="#foundation">Backend + GenAI</a></li>
                    </ul>
                </li>
                <li><a href="#footer-area">About</a></li>
                <li><a href="#faq">FAQs</a></li>
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#strategyModal">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!-- End header Area  -->

    <!-- Start Sldier Area  -->
    <div class="slider-area banner-style-3 bg-image">
        <div class="d-flex align-items-center height-940">
            <div class="container eduvibe-animated-shape" id="main-top">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <p class="standard"><span class="industry"><img src="/images/computer.svg" class="computer"> Industry Standard</span>  CERTIFIED PROGRAM</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="inner">
                            <div class="content text-start">
                                <h1 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Land a <b> High-Paying </b> IT Job with</h1>
                                <p class="paying-job" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">Fullstack + GenAI</p>
                                <div class="read-more-btn" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                    <a class="edu-btn just-month" href="#">In Just 6 Months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-image" id="stu-bg">
                            <div class="banner-main-image">
                                <img class="img-01" data-sal-delay="150" data-sal="fade" data-sal-duration="800" src="/images/stu_bg.svg" alt="stu_bg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sldier Area  -->
    
    <!-- Start Students Info Area  -->    
    <div class="container-fluid info-box" id="info-box-bottom"></div>
    <!-- End Students Info Area  --> 

    <!-- Bottom Cards Section -->
    <section class="py-5 three-box" id="mards-section-desktop">
        <div class="container">
            <div class="row g-4 text-center">
                <!-- Card 1 -->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="feature-card gradient-purple">
                        <img src="/images/graduation.svg" alt="Graduation" class="feature-icon" />
                        <h5 class="credentials">INDUSTRY CERTIFIED</h5>
                        <p class="recognized">Get Globally Recognized Credentials Employers Trust.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="feature-card gradient-blue">
                        <img src="/images/time.svg" alt="time" class="feature-icon" />
                        <h5 class="credentials">6-MONTHS INTENSIVE LEARNING</h5>
                        <p class="recognized">Fast-Track Your Career With Structured Training.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="feature-card gradient-purple">
                        <img src="/images/task-management.svg" alt="task-management" class="feature-icon" />
                        <h5 class="credentials">HANDS-ON PROJECTS</h5>
                        <p class="recognized">Build A Job-Ready Portfolio With 25+ Real-World Case Studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="video-container">
            <video id="myVideo" poster="https://via.placeholder.com/750x400.png?text=Video+Thumbnail">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="play-btn" id="playBtn"><img src="/images/video-icon.svg" alt="video-icon"> </div>
        </div>
        <button type="button" class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#strategyModal"><img src="/images/call.svg" width="20"> Schedule A Call</button>
        <p class="video-text">
            This course is rated as <span>excellent by 90%</span> of the learners
        </p>
    </section>

    <!-- Bottom Cards Section -->
    <section class="py-5 three-box" id="mards-section-mobile">
        <div class="container">
            <div class="row g-4 text-center">
                <!-- Card 1 -->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="feature-card gradient-purple">
                        <img src="/images/graduation.svg" alt="Graduation" class="feature-icon" />
                        <h5 class="credentials">INDUSTRY CERTIFIED</h5>
                        <p class="recognized">Get Globally Recognized Credentials Employers Trust.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="feature-card gradient-blue">
                        <img src="/images/time.svg" alt="time" class="feature-icon" />
                        <h5 class="credentials">6-MONTHS INTENSIVE LEARNING</h5>
                        <p class="recognized">Fast-Track Your Career With Structured Training.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 col-sm-4 col-4">
                    <div class="feature-card gradient-purple">
                        <img src="/images/task-management.svg" alt="task-management" class="feature-icon" />
                        <h5 class="credentials">HANDS-ON PROJECTS</h5>
                        <p class="recognized">Build A Job-Ready Portfolio With 25+ Real-World Case Studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="sercice-area eduvibe-service-four edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h3 class="title-career">Here’s how SkillRabbit will 10x YOUR CAREER</h3>
                    </div>
                    <p class="powerful text-center" style="margin-top: -10px;">Six powerful advantages designed to accelerate your journey in data analytics</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/checklist.svg" alt="checklist-cion">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Industry-Certified Excellence</h6>
                                <p class="earn-exce">Earn an industry-recognized Skill Rabbit certification that validates your expertise and opens doors to top-tier career opportunities. Showcase your credibility and position yourself for success in leading tech companies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/ai.svg" alt="ai-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">AI-Powered Analytics Mastery</h6>
                                <p class="earn-exce">Master next-generation AI tools and advanced data analysis techniques with Skill Rabbit’s cutting-edge curriculum. Stay ahead of the curve by learning how to apply generative AI to solve real-world business challenges.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/managements.svg" alt="managements-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Real-World Project Portfolio</h6>
                                <p class="earn-exce">Build a portfolio of 25+ hands-on projects designed to meet industry standards. Skill Rabbit ensures you graduate with job-ready skills that employers seek, empowering you to confidently demonstrate your analytical expertise.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/team.svg" alt="team-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Career Acceleration Network</h6>
                                <p class="earn-exce">Connect with industry mentors, access exclusive internship programs, and receive full placement support. With Skill Rabbit’s network-driven opportunities, your career growth is designed to accelerate 10x faster.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/increase.svg" alt="increase-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Future-Ready Technology Stack</h6>
                                <p class="earn-exce">Gain comprehensive training in the latest AI and data science technologies. From emerging platforms to advanced tools, Skill Rabbit prepares you with the technical foundation to thrive in the future of analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/india.svg" alt="india-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Professional Community in India</h6>
                                <p class="earn-exce">Join a thriving network of Skill Rabbit alumni and data professionals across India. Get lifetime access to peer connections, expert mentorship, collaborative projects, and exclusive career opportunities within the Indian market.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5" id="foundation">
        <h2 class="section-title">
            What You'll Learn <span> <img src="/images/books.svg" class="book-icon" alt="book"> </span>
        </h2>
        <div class="accordion" id="curriculumAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="icon"> <img src="/images/layers.svg" alt="layers-icon"> </span> Phase 1: Foundation (Month 1) <br>4 - Topic
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#curriculumAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li class="foundation-faq">HTML, CSS, JavaScript Basics</li>
                            <li class="foundation-faq">Responsive Design (Flexbox, Grid, Media Queries)</li>
                            <li class="foundation-faq">DOM Manipulation</li>
                            <li class="foundation-faq">Git & GitHub</li>
                            <li class="foundation-faq" style="color: #FEE45A !important;">Project 1: Personal Portfolio Website</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="icon"><img src="/images/front-end.svg" alt="front-end-icon"></span> Phase 2: Front-End Development (Months 2–3) <br>4 - Topic
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#curriculumAccordion">
                    <div class="accordion-body">
                         <ul>
                            <li class="foundation-faq">ReactJS (Components, Props, State, Hooks)</li>
                            <li class="foundation-faq">Redux for State Management</li>
                            <li class="foundation-faq">Routing & Form Handling</li>
                            <li class="foundation-faq">API Integration (REST APIs)</li>
                            <li class="foundation-faq" style="color: #FEE45A !important;">Project 2: To-Do App (React + Redux)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="icon"><img src="/images/coding.svg" alt="coding-icon"></span> Phase 3: Back-End Development (Months 4–5) <br>4 - Topic
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#curriculumAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li class="foundation-faq">Node.js, Express.js</li>
                            <li class="foundation-faq">MongoDB + Mongoose</li>
                            <li class="foundation-faq">Authentication (JWT, OAuth)</li>
                            <li class="foundation-faq">Error Handling & Debugging</li>
                            <li class="foundation-faq" style="color: #FEE45A !important;">Project 3: E-Commerce Web App</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Phase 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="icon"><img src="/images/skill.svg" alt="skill-icon"></span> Phase 4: Advanced Topics (Month 6) <br>4 - Topic
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#curriculumAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li class="foundation-faq">Data Structures & Algorithms (DSA)</li>
                            <li class="foundation-faq">Problem Solving for Interviews</li>
                            <li class="foundation-faq">AI Tools for Developers (GitHub Copilot, Codeium)</li>
                            <li class="foundation-faq">Deployment (Heroku, AWS, Docker, CI/CD)</li>
                            <li class="foundation-faq" style="color: #FEE45A !important;">Projects 4 & 5: Social Media App + Blogging Platform</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sercice-area eduvibe-service-four edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <h3 class="title-career">Additional Benefits</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-6 col-sm-12 mb-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon" style="margin-bottom: 20px;">
                                <img src="/images/job-interview.svg" alt="job-interview-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Mock Interviews & HR Prep</h6>
                                <p class="earn-exce">Practice with real interview scenarios</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 mb-4" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/teacher.svg" alt="teacher-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Mentorship & Guidance</h6>
                                <p class="earn-exce">Learn directly from industry experts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-6 col-sm-12 mb-4" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/portfolio.svg" alt="portfolio-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">Portfolio Building</h6>
                                <p class="earn-exce">Showcase your projects to employers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 mb-4" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-card">
                        <div class="inner">
                            <div class="icon">
                                <img src="/images/job-description.svg" alt="job-description-icon">
                            </div>
                            <div class="content">
                                <h6 class="certified-exce">100% placement Assistance</h6>
                                <p class="earn-exce">Profile boosting, interview calls, salary negotiation help</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="build-portfolio">
        <div class="container container-custom">
            <div class="text-center">
                <h2 class="portfolio-pro"><strong>Build Your Portfolio with Real-World Projects</strong></h2>
                <p class="experience">Gain hands-on <span class="highlight">experience</span> with <span class="highlight">Multiple projects</span> and stand out to top recruiters</p>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="project-card">
                        <span class="badge-advanced">Beginner</span>
                        <ul style="margin-top: 24px !important;">
                            <li class="real-time">Frontend Development Basics</li>
                            <li class="real-time">Backend Fundamentals</li>
                            <li class="real-time">Introduction to GenAI</li>
                        </ul>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="project-card">
                        <span class="badge-advanced">Intermediate</span>
                        <ul style="margin-top: 24px !important;">
                            <li class="real-time">Frontend + Backend (Intermediate level)</li>
                            <li class="real-time">GenAI Applications & Tools</li>
                            <li class="real-time">Hands-on Coding Exercises</li>
                        </ul>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="project-card">
                        <span class="badge-advanced">Expert</span>
                        <ul style="margin-top: 24px !important;">
                            <li class="real-time">Advanced Frontend & Backend</li>
                            <li class="real-time">GenAI + API Integration</li>
                            <li class="real-time">Building Scalable Applications</li>
                        </ul>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="project-card">
                        <span class="badge-advanced">Advanced</span>
                        <ul style="margin-top: 24px !important;">
                            <li class="real-time">Real-time Projects (Industry Grade)</li>
                            <li class="real-time">End-to-End Fullstack + GenAI Solutions</li>
                            <li class="real-time">Internship Certificate + Placement Preparation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Accordion Area  -->
    <div class="edu-accordion-area eduvibe-faq-page accordion-shape-1 edu-section-gap bg-color-white" id="faq">
        <div class="wrapper">
            <div class="container eduvibe-animated-shape">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                   <h2 class="title-faq">Frequently Asked <b>Questions</b></h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="accordion-style-1">
                            <div class="edu-accordion" id="accordionExample1">
                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingOne">
                                        <button class="edu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is SkillRabbit?
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            SkillRabbit — The New-Generation Development Academy <br>
                                            SkillRabbit is a career-focused learning platform built for the AI era. We don't just teach coding — we prepare you for what every company wants today: Fullstack Development powered by AI & GenAI.<br> 
                                            Our recession-proof training model ensures you're always industry-ready, no matter how the job market shifts. With 100% placement support, real-world projects, and Pay After Placement, SkillRabbit helps you:<br>
                                            Learn the right skills (Frontend, Backend, GenAI, UI/UX)<br>
                                            Build real projects that matter <br>
                                            Get Hired in high-paying roles (₹5–12 LPA) <br>
                                            At SkillRabbit, we're not just building coders. We're building future-proof developers for the next generation of tech.
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingTwo">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How do I enroll in Skill Rabbit courses?
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            SkillRabbit provides a clear, step-by-step roadmap that transforms you from a beginner to an industry-ready Fullstack + GenAI professional in just 6 months.
                                            <ul>
                                              <li style="color: #000 !important;">Phase 1 – Fundamentals HTML, CSS, JavaScript & core programming concepts</li>
                                              <li style="color: #000 !important;">  Phase 2 – Advanced Frontend & Backend React, Node.js, databases, and scalable architectures</li>
                                              <li style="color: #000 !important;">Phase 3 – GenAI Integration AI & GenAI tools, API integrations, and automation</li>
                                              <li style="color: #000 !important;">Phase 4 – Real-World Projects Hands-on projects that mirror industry use-cases</li>
                                              <li style="color: #000 !important;">Phase 5 – Career Launch Personalized mentorship, mock interviews, profile building & 100% placement support</li>
                                            </ul>
                                            At SkillRabbit, you don't just learn theory — you build, practice, and get hired in high-paying tech jobs (₹5–12 LPA).
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingThree">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What career roadmap does Skill Rabbit provide?
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Skill Rabbit offers a step-by-step career roadmap that takes you from beginner to industry-ready professional in just 6 months. The roadmap includes:
                                            <ul>
                                              <li style="color: #000 !important;">Learning fundamentals (HTML, CSS, JavaScript, etc.)</li>
                                              <li style="color: #000 !important;">Advanced backend and frontend skills (React, Node.js, etc.)</li>
                                              <li style="color: #000 !important;">Building real-world projects</li>
                                              <li style="color: #000 !important;">Personalized mentorship and career guidance</li>
                                            </ul>
                                            This ensures you’re not just learning theory but gaining practical skills to land high-paying jobs.
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingFour">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Can I rewatch or access recorded classes?
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Absolutely! Every live class is recorded and uploaded daily to your Skill Rabbit app. You can revisit the lectures anytime, rewatch important topics, and learn at your own pace.
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingFive">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Do I receive a certificate after completing the course?
                                        </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Yes, you will receive an industry-recognized internship certificate upon course completion. This adds strong value to your resume and boosts your chances during job placements.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Accordion Area  -->

    <div class="cta-wrapper" style="margin-bottom: -70px; z-index: 2; position: relative;">
        <div class="container">
            <div class="cta-section text-center text-white p-4 rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="first-step">
                            <h2 class="take-today">Take the First Step Today</h2>
                            <p class="your-career">Your career transformation starts here.</p>
                        </div>
                    </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="mt-3 mt-lg-0">
                        <a href="#" class="btn btn-dark me-2" data-bs-toggle="modal" data-bs-target="#strategyModal">Get Started</a>
                        <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#strategyModal">Contact Us</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer Area  -->
    <footer class="eduvibe-footer-one edu-footer footer-style-default" id="footer-area">
        <div class="footer-top">
            <div class="container eduvibe-animated-shape">
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="logo">
                            <a href="landing">
                                <img class="logo-light" id="logo-footers" src="/images/footer_logo.svg" alt="footer-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="build">
                            <p class="learn">Learn. Build. Get hired.</p>
                        </div>
                    </div>
                </div>
                <div class="row">  
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget explore-widget">
                            <h5 class="widget-title">Pages</h5>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="index">Landing Page</a></li>
                                    <li><a href="#">Support: Contact@skillrabbit.in</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget explore-widget">
                            <h5 class="widget-title">Courses</h5>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li style="color: #fff;">Front-end Developer</li>
                                    <li style="color: #fff;">Back-end Developer</li>
                                    <li style="color: #fff;">Latest Gen Ai-Tool</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget explore-widget">
                            <h5 class="widget-title">Company</h5>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#strategyModal">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="edu-footer-widget explore-widget">
                            <h5 class="widget-title">Les's do it</h5>
                            <ul class="social-share1">
                                <li><a href="#"> <img src="/images/twitter.svg" alt="twitter-icon" width="40"> </a></li>
                                <li><a href="#"><img src="/images/linkedin.svg" alt="linkedin-icon" width="40"></a></li>
                                <li><a href="#"><img src="/images/instagram.svg" alt="instagram-icon" width="40"></a></li>
                                <li><a href="#"><img src="/images/facebook.svg" alt="facebook-icon" width="40"></a></li>
                                <li><a href="#"><img src="/images/youtube.svg" alt="youtube-icon" width="40"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area copyright-default py-3 lsat-footer">
            <div class="container">
                <div class="row align-items-center text-center text-lg-start">
                    <div class="col-12 col-lg-8 mb-2 mb-lg-0">
                        <ul class="social-share1 list-inline m-0 d-flex flex-column flex-lg-row align-items-start align-items-lg-start">
                            <li class="list-inline-item mx-2 mb-2"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item mx-2 mb-2"><a href="#">Terms of Use</a></li>
                            <li class="list-inline-item mx-2 mb-2"><a href="#">Sales and Refunds</a></li>
                            <li class="list-inline-item mx-2 mb-2"><a href="#">Legal</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 text-center text-lg-end">
                        <p class="mb-0">© 2025 <a href="#">SkillRabbit</a> — All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area  -->

</div>

    <!-- Modal -->
    <div class="modal fade" id="strategyModal" tabindex="-1" aria-labelledby="strategyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="strategyModalLabel">Book FREE Strategy Call</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Connect with our career transformation experts to discuss your goals and create a personalized roadmap</p>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address" />
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" />
                        </div>
                        <button type="submit" class="btn btn-submit">Submit Request</button>
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS ============================================ -->
    <!-- Modernizer JS -->
    <script src="/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="/js/vendor/jquery.js"></script>
    <!-- <script src="/js/vendor/bootstrap.min.js"></script> -->
    <script src="/js/vendor/sal.min.js"></script>
    <script src="/js/vendor/backtotop.js"></script>
    <script src="/js/vendor/magnifypopup.js"></script>
    <script src="/js/vendor/slick.js"></script>
    <script src="/js/vendor/countdown.js"></script>
    <script src="/js/vendor/jquery-appear.js"></script>
    <script src="/js/vendor/odometer.js"></script>
    <script src="/js/vendor/isotop.js"></script>
    <script src="/js/vendor/imageloaded.js"></script>
    <script src="/js/vendor/lightbox.js"></script>
    <script src="/js/vendor/wow.js"></script>
    <script src="/js/vendor/paralax.min.js"></script>
    <script src="/js/vendor/paralax-scroll.js"></script>
    <script src="/js/vendor/jquery-ui.js"></script>
    <script src="/js/vendor/tilt.jquery.min.js"></script>
    <!-- Main JS -->
    <script src="/js/main.js"></script>
    <!-- Bootstrap JS -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="/js/swiper-bundle.min.js"></script>

<script>
    // Play button functionality
    const video = document.getElementById('myVideo');
    const playBtn = document.getElementById('playBtn');

    playBtn.addEventListener('click', () => {
      video.play();
      video.setAttribute("controls","controls"); // Show controls after play
      playBtn.style.display = 'none'; // Hide play button
    });
</script>

<script>
  const menuButton = document.querySelector('.hamberger-button');
  const mobileMenu = document.querySelector('.popup-mobile-menu');
  const closeButton = document.querySelector('.popup-mobile-menu .close-button');
  const mobileLinks = document.querySelectorAll('.popup-mobile-menu .mainmenu a');

  // Open menu
  menuButton.addEventListener('click', () => {
    mobileMenu.classList.add('active');
  });

  // Close menu
  closeButton.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
  });

  // Handle link clicks
  mobileLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      const isModal = this.hasAttribute('data-bs-toggle') && this.getAttribute('data-bs-toggle') === 'modal';

      // Case 1: internal anchor link (#id)
      if (href && href.startsWith('#') && href !== '#') {
        e.preventDefault();
        mobileMenu.classList.remove('active'); // close menu
        setTimeout(() => {
          const target = document.querySelector(href);
          if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 200);
      }

      // Case 2: modal link
      if (isModal) {
        mobileMenu.classList.remove('active'); // close menu when opening modal
      }

      // Case 3: href="#" (submenu parent) → do nothing, let submenu open
    });
  });
</script>



</body>

</html>