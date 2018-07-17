<?php
    header("Content-type: text/css; charset: UTF-8");
?>

@import url(https://fonts.googleapis.com/css?family=Poppins:400,500,300,600,700);
/*Theme Colors*/
/*bootstrap Color*/
/*Normal Color*/
/*Border radius*/
/*Preloader*/
.preloader {
  width: 100%;
  height: 100%;
  top: 0px;
  position: fixed;
  z-index: 99999;
  background: #fff;
}
.preloader .cssload-speeding-wheel {
  position: absolute;
  top: calc(50% - 3.5px);
  left: calc(50% - 3.5px);
}
/* This is for popins font for firefox */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/poppins/v1/2fCJtbhSlhNNa6S2xlh9GyEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+02BC, U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200B-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* This is for popins font for firefox */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/poppins/v1/UGh2YG8gx86rRGiAZYIbVyEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* This is for popins font for firefox */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/poppins/v1/yQWaOD4iNU5NTY0apN-qj_k_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/*Just change your choise color here its theme Colors*/
body {
  background: #fff;
}
/*Top Header Part*/
.top-left-part {
  background: rgba(0, 0, 0, 0.04);
}
.logo i {
  color: #ffffff;
}
.navbar-header {
  background: #<?= $_GET['cor'] ?>;
}
.navbar-top-links > li > a {
  color: #ffffff;
}
/*Right panel*/
.right-sidebar .rpanel-title {
  background: #13648F;
}
/*Bread Crumb*/
.bg-title .breadcrumb .active {
  color: #13648F;
}
/*Sidebar*/
.sidebar {
  background: #fff;
  box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
}
.sidebar .label-custom {
  background: #01c0c8;
}
#side-menu li a {
  color: #54667a;
}
#side-menu li a {
  color: #54667a;
  border-left: 0px solid #fff;
}
#side-menu > li > a:hover,
#side-menu > li > a:focus {
  background: rgba(0, 0, 0, 0.03);
}
#side-menu > li > a.active {
  border-left: 3px solid #13648F;
  color: #2b2b2b;
  font-weight: 500;
}
#side-menu > li > a.active i {
  color: #13648F;
}
#side-menu ul > li > a:hover {
  color: #13648F;
}
#side-menu ul > li > a.active {
  color: #2b2b2b;
  font-weight: 500;
}
.sidebar #side-menu .user-pro .nav-second-level a:hover {
  color: #13648F;
}
.fix-sidebar .top-left-part {
  background: #13648F;
}
/*themecolor*/
.bg-theme {
  background-color: #fb9678 !important;
}
.bg-theme-dark {
  background-color: #01c0c8 !important;
}
/*Chat widget*/
.chat-list .odd .chat-text {
  background: #13648F;
}
/*Button*/
.btn-custom {
  background: #13648F;
  border: 1px solid #13648F;
  color: #ffffff;
}
.btn-custom:hover {
  background: #13648F;
  opacity: 0.8;
  color: #ffffff;
  border: 1px solid #13648F;
}
/*Custom tab*/
.customtab li.active a,
.customtab li.active a:hover,
.customtab li.active a:focus {
  border-bottom: 2px solid #13648F;
  color: #13648F;
}
.tabs-vertical li.active a,
.tabs-vertical li.active a:hover,
.tabs-vertical li.active a:focus {
  background: #13648F;
  border-right: 2px solid #13648F;
}
/*Nav-pills*/
.nav-pills > li.active > a,
.nav-pills > li.active > a:focus,
.nav-pills > li.active > a:hover {
  background: #13648F;
  color: #ffffff;
}
