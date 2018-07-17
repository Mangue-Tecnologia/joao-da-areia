<?php
    header("Content-type: text/css; charset: UTF-8");
?>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Poppins:400,500,300,600,700);
@import "spinners.css";
body{
    display: inline-block;
    display: -webkit-inline-box;
    width: 100%;
}
form .error {
    color: #273142 !important;
    border: 1px solid #E03E3E !important;
    background-color: #FFE8E8 !important;
    font-weight: 500;
}
.preloader {
    width: 100%;
    height: 100%;
    top: 0;
    position: fixed;
    z-index: 99999;
    background: #fff
}
.slimscrollsidebar {
    height: inherit !important;
    overflow-y: auto !important;
}
.btn-info{
    background-color: #<?= $_GET['btn'] ?> !important; 
    border: 1px color #<?= $_GET['btn'] ?> !important;
}
.preloader .cssload-speeding-wheel {
    position: absolute;
    top: calc(50% - 3.5px);
    left: calc(50% - 3.5px)
}
@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/poppins/v1/2fCJtbhSlhNNa6S2xlh9GyEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
    unicode-range: U+02BC, U+0900097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200B-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
}
@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/poppins/v1/UGh2YG8gx86rRGiAZYIbVyEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
    unicode-range: U+0100024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF
}
@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/poppins/v1/yQWaOD4iNU5NTY0apN-qj_k_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
    unicode-range: U+000000FF, U+0131, U+01520153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000
}
********** {
    outline: 0!important
}
body {
    background: #4f5467;
    font-family: Poppins, sans-serif;
    margin: 0;
    overflow-x: hidden;
    overflow-y: visible !important;
    color: #686868;
    font-weight: 300
}
html {
    position: relative;
    min-height: 100%;
    background: #fff
}
h1,
h2,
h3,
h4,
h5,
h6 {
    color: #2b2b2b;
    font-family: Poppins, sans-serif;
    margin: 10px 0;
    font-weight: 300
}
h1 {
    line-height: 48px;
    font-size: 36px
}
h2 {
    line-height: 36px;
    font-size: 24px
}
h3 {
    line-height: 30px;
    font-size: 21px
}
h4 {
    line-height: 22px;
    font-size: 18px
}
h5 {
    font-size: 16px;
    font-size: 14px
}
.dn {
    display: none
}
.db {
    display: block
}
.light_op_text {
    color: rgba(255, 255, 255, .5)
}
blockquote {
    border-left: 5px solid #ff6849!important;
    border: 1px solid rgba(120, 130, 140, .13)
}
p {
    line-height: 1.6
}
b {
    font-weight: 600
}
a:active,
a:focus,
a:hover {
    outline: 0;
    text-decoration: none
}
.clear {
    clear: both
}
.font-12 {
    font-size: 12px
}
hr {
    border-color: rgba(120, 130, 140, .13)
}
.b-t {
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.b-b {
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.b-l {
    border-left: 1px solid rgba(120, 130, 140, .13)
}
.b-r {
    border-right: 1px solid rgba(120, 130, 140, .13)
}
.b-all {
    border: 1px solid rgba(120, 130, 140, .13)
}
.b-none {
    border: 0!important
}
.max-height {
    height: 310px;
    overflow: auto
}
.t-a-c {
    text-align: center!important
}
.p-0 {
    padding: 0!important
}
.p-10 {
    padding: 10px!important
}
.p-20 {
    padding: 20px!important
}
.p-30 {
    padding: 30px!important
}
.p-l-0 {
    padding-left: 0!important
}
.p-l-10 {
    padding-left: 10px!important
}
.p-l-20 {
    padding-left: 20px!important
}
.p-r-0 {
    padding-right: 0!important
}
.p-r-10 {
    padding-right: 10px!important
}
.p-r-20 {
    padding-right: 20px!important
}
.p-r-30 {
    padding-right: 30px!important
}
.p-r-40 {
    padding-right: 40px!important
}
.p-t-0 {
    padding-top: 0!important
}
.p-t-10 {
    padding-top: 10px!important
}
.p-t-20 {
    padding-top: 20px!important
}
.p-t-30 {
    padding-top: 30px!important
}
.p-b-0 {
    padding-bottom: 0!important
}
.p-b-5 {
    padding-bottom: 5px!important
}
.p-b-10 {
    padding-bottom: 10px!important
}
.p-b-20 {
    padding-bottom: 20px!important
}
.p-b-30 {
    padding-bottom: 30px!important
}
.p-b-40 {
    padding-bottom: 40px!important
}
.m-0 {
    margin: 0!important
}
.m-l-5 {
    margin-left: 5px!important
}
.m-l-10 {
    margin-left: 10px!important
}
.m-l-15 {
    margin-left: 15px!important
}
.m-l-20 {
    margin-left: 20px!important
}
.m-l-30 {
    margin-left: 30px!important
}
.m-l-40 {
    margin-left: 40px!important
}
.m-r-5 {
    margin-right: 5px!important
}
.m-r-10 {
    margin-right: 10px!important
}
.m-r-15 {
    margin-right: 15px!important
}
.m-r-20 {
    margin-right: 20px!important
}
.m-r-30 {
    margin-right: 30px!important
}
.m-r-40 {
    margin-right: 40px!important
}
.m-t-5 {
    margin-top: 5px!important
}
.m-t-0 {
    margin-top: 0!important
}
.m-t-10 {
    margin-top: 10px!important
}
.m-t-15 {
    margin-top: 15px!important
}
.m-t-20 {
    margin-top: 20px!important
}
.m-t-30 {
    margin-top: 30px!important
}
.m-t-40 {
    margin-top: 40px!important
}
.m-b-0 {
    margin-bottom: 0!important
}
.m-b-5 {
    margin-bottom: 5px!important
}
.m-b-10 {
    margin-bottom: 10px!important
}
.m-b-15 {
    margin-bottom: 15px!important
}
.m-b-20 {
    margin-bottom: 20px!important
}
.m-b-30 {
    margin-bottom: 30px!important
}
.m-b-40 {
    margin-bottom: 40px!important
}
.vt {
    vertical-align: top
}
.vb {
    vertical-align: bottom
}
.font-bold {
    font-weight: 700
}
.font-normal {
    font-weight: 400
}
.font-light {
    font-weight: 300
}
.pull-in {
    margin-left: -15px;
    margin-right: -15px
}
.b-0 {
    border: none!important
}
.vertical-middle {
    vertical-align: middle
}
.bx-shadow {
    -moz-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
    -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1)
}
.mx-box {
    max-height: 380px;
    min-height: 380px
}
.thumb-sm {
    height: 32px;
    width: 32px
}
.thumb-md {
    height: 48px;
    width: 48px
}
.thumb-lg {
    height: 88px;
    width: 88px
}
.txt-oflo {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap
}
.get-code {
    color: #2b2b2b;
    cursor: pointer;
    border-radius: 100%;
    background: #fff;
    padding: 4px 5px;
    font-size: 10px;
    margin: 0 5px;
    vertical-align: middle
}
.badge {
    text-transform: uppercase;
    font-weight: 600;
    padding: 4px 5px 2px;
    font-size: 12px;
    margin-top: 1px;
    background-color: #fec107
}
.badge-xs {
    font-size: 9px
}
.badge-sm,
.badge-xs {
    -webkit-transform: translate(0, -2px);
    -ms-transform: translate(0, -2px);
    -o-transform: translate(0, -2px);
    transform: translate(0, -2px)
}
.badge-success {
    background-color: #00c292
}
.badge-info {
    background-color: #03a9f3
}
.badge-warning {
    background-color: #fec107
}
.badge-danger {
    background-color: #fb9678
}
.badge-purple {
    background-color: #9675ce
}
.badge-red {
    background-color: #fb3a3a
}
.badge-inverse {
    background-color: #4c5667
}
.notify {
    position: relative;
    margin-top: -30px
}
.notify .heartbit {
    position: absolute;
    top: -20px;
    right: -16px;
    height: 25px;
    width: 25px;
    z-index: 10;
    border: 5px solid #fb9678;
    border-radius: 70px;
    -moz-animation: heartbit 1s ease-out;
    -moz-animation-iteration-count: infinite;
    -o-animation: heartbit 1s ease-out;
    -o-animation-iteration-count: infinite;
    -webkit-animation: heartbit 1s ease-out;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite
}
.notify .point {
    width: 6px;
    height: 6px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    background-color: #fb9678;
    position: absolute;
    right: -6px;
    top: -10px
}
@-moz-keyframes heartbit {
    0% {
        -moz-transform: scale(0);
        opacity: 0
    }
    25% {
        -moz-transform: scale(.1);
        opacity: .1
    }
    50% {
        -moz-transform: scale(.5);
        opacity: .3
    }
    75% {
        -moz-transform: scale(.8);
        opacity: .5
    }
    100% {
        -moz-transform: scale(1);
        opacity: 0
    }
}
@-webkit-keyframes heartbit {
    0% {
        -webkit-transform: scale(0);
        opacity: 0
    }
    25% {
        -webkit-transform: scale(.1);
        opacity: .1
    }
    50% {
        -webkit-transform: scale(.5);
        opacity: .3
    }
    75% {
        -webkit-transform: scale(.8);
        opacity: .5
    }
    100% {
        -webkit-transform: scale(1);
        opacity: 0
    }
}
.text-white {
    color: #fff!important
}
.text-danger {
    color: #fb9678!important
}
.text-muted {
    color: #8d9ea7!important
}
.text-warning {
    color: #fec107!important
}
.text-success {
    color: #00c292!important
}
.text-info {
    color: #03a9f3!important
}
.text-inverse {
    color: #4c5667!important
}
.text-blue {
    color: #02bec9!important
}
.text-purple {
    color: #9675ce!important
}
.text-primary {
    color: #ab8ce4!important
}
.text-megna {
    color: #01c0c8!important
}
.text-dark {
    color: #686868!important
}
.card-primary {
    background-color: #ab8ce4;
    border-color: #ab8ce4
}
.card-success {
    background-color: #00c292;
    border-color: #00c292
}
.card-info {
    background-color: #03a9f3;
    border-color: #03a9f3
}
.card-warning {
    background-color: #fec107;
    border-color: #fec107
}
.card-danger {
    background-color: #fb9678;
    border-color: #fb9678
}
.card-secondary {
    background-color: #4c5667;
    border-color: #4c5667
}
.card-red {
    background-color: #fb3a3a;
    border-color: #fb3a3a
}
.card-blue {
    background-color: #02bec9;
    border-color: #02bec9
}
.card-purple {
    background-color: #9675ce;
    border-color: #9675ce
}
.card-megna {
    background-color: #01c0c8;
    border-color: #01c0c8
}
.card-outline-primary {
    border-color: #ab8ce4
}
.card-outline-success {
    border-color: #00c292
}
.card-outline-info {
    border-color: #03a9f3
}
.card-outline-warning {
    border-color: #fec107
}
.card-outline-danger {
    border-color: #fb9678
}
.card-outline-secondary {
    border-color: #4c5667
}
.card-outline-red {
    border-color: #fb3a3a
}
.card-outline-blue {
    border-color: #02bec9
}
.card-outline-purple {
    border-color: #9675ce
}
.card-outline-megna {
    border-color: #01c0c8
}
.bg-primary {
    background-color: #ab8ce4!important
}
.bg-success {
    background-color: #00c292!important
}
.bg-info {
    background-color: #03a9f3!important
}
.bg-warning {
    background-color: #fec107!important
}
.bg-danger {
    background-color: #fb9678!important
}
.bg-theme {
    background-color: #ff6849!important
}
.bg-theme-dark {
    background-color: #4f5467!important
}
.bg-inverse {
    background-color: #4c5667!important
}
.bg-purple {
    background-color: #9675ce!important
}
.bg-white {
    background-color: #fff!important
}
.label {
    letter-spacing: .05em;
    border-radius: 60px;
    padding: 4px 16px 3px;
    font-weight: 500
}
.label-rouded,
.label-rounded {
    border-radius: 60px;
    padding: 4px 16px 3px;
    font-weight: 500
}
.label-custom {
    background-color: #01c0c8
}
.label-success {
    background-color: #00c292
}
.label-info {
    background-color: #03a9f3
}
.label-warning {
    background-color: #fec107
}
.label-danger {
    background-color: #fb9678
}
.label-megna {
    background-color: #01c0c8
}
.label-primary {
    background-color: #ab8ce4
}
.label-purple {
    background-color: #9675ce
}
.label-red {
    background-color: #fb3a3a
}
.label-inverse {
    background-color: #4c5667
}
.label-default {
    background-color: #e4e7ea
}
.label-white {
    background-color: #fff
}
.dropdown-menu {
    border: 1px solid rgba(120, 130, 140, .13);
    border-radius: 0;
    box-shadow: 0 3px 12px rgba(0, 0, 0, .05)!important;
    -webkit-box-shadow: 0!important;
    -moz-box-shadow: 0!important;
    padding-bottom: 8px;
    margin-top: 0
}
.dropdown-menu>li>a {
    padding: 9px 20px
}
.dropdown-menu>li>a:focus,
.dropdown-menu>li>a:hover {
    background: #f7fafc
}
.navbar-top-links .progress {
    margin-bottom: 6px
}
label {
    font-weight: 500
}
.btn {
    border-radius: 0
}
.form-control {
    background-color: #fff;
    border: 1px solid #e4e7ea;
    border-radius: 0;
    box-shadow: none;
    color: #565656;
    height: 38px;
    max-width: 100%;
    padding: 7px 12px;
    transition: all 300ms linear 0s
}
.form-control:focus {
    box-shadow: none;
    border-color: #2b2b2b
}
.input-sm {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5
}
.input-lg {
    height: 44px;
    padding: 5px 10px;
    font-size: 18px
}
.bootstrap-tagsinput {
    border: 1px solid #e4e7ea;
    border-radius: 0;
    box-shadow: none;
    display: block;
    padding: 7px 12px
}
.bootstrap-touchspin .input-group-btn-vertical>.btn {
    padding: 9px 10px
}
.bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-down,
.bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-up {
    border-radius: 0
}
.input-group-btn .btn {
    padding: 8px 12px
}
.form-horizontal .form-group {
    margin-left: -7.5px;
    margin-right: -7.5px;
    margin-bottom: 25px
}
.form-group {
    margin-bottom: 25px;
    overflow: hidden
}
.list-group-item,
.list-group-item:first-child,
.list-group-item:last-child {
    border-radius: 0;
    border-color: rgba(120, 130, 140, .13)
}
.list-group-item.active,
.list-group-item.active:focus,
.list-group-item.active:hover {
    background: #03a9f3;
    border-color: #03a9f3
}
.list-task .list-group-item,
.list-task .list-group-item:first-child {
    border-radius: 0;
    border: 0
}
.list-task .list-group-item:last-child {
    border-radius: 0;
    border: 0
}
.media {
    border: 1px solid rgba(120, 130, 140, .13);
    margin-bottom: 10px;
    padding: 15px
}
.media .media-heading {
    font-weight: 500
}
.well,
pre {
    background: #fff;
    border-radius: 0
}
.nav-tabs>li>a {
    border-radius: 0;
    color: #2b2b2b
}
.nav-tabs>li>a:focus,
.nav-tabs>li>a:hover {
    background: #fff
}
.modal-content {
    border-radius: 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .1)
}
.alert {
    border-radius: 0
}
.carousel-control {
    width: 8%
}
.carousel-control span {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    font-size: 30px
}
.popover {
    border-radius: 0
}
.popover-title {
    padding: 5px 14px
}
.container-fluid {
    padding-left: 25px;
    padding-right: 25px;
    padding-bottom: 15px
}
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
    padding-left: 7.5px;
    padding-right: 7.5px
}
.row {
    margin-right: -7.5px;
    margin-left: -7.5px
}
.btn-group-vertical>.btn:first-child:not(:last-child),
.btn-group-vertical>.btn:last-child:not(:first-child) {
    border-radius: 0
}
.table-responsive {
    overflow-y: hidden
}
.pagination>li:first-child>a,
.pagination>li:first-child>span {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}
.pagination>li:last-child>a,
.pagination>li:last-child>span {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}
.pagination>li>a,
.pagination>li>span {
    color: #2b2b2b
}
.pagination>li>a:focus,
.pagination>li>a:hover,
.pagination>li>span:focus,
.pagination>li>span:hover {
    background-color: #e4e7ea
}
.pagination-split li {
    margin-left: 5px;
    display: inline-block;
    float: left
}
.pagination-split li:first-child {
    margin-left: 0
}
.pagination-split li a {
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0
}
.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
    background-color: #ff6849;
    border-color: #ff6849
}
.pager li>a,
.pager li>span {
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    color: #2b2b2b
}
.table-box {
    display: table;
    width: 100%
}
.cell {
    display: table-cell;
    vertical-align: middle
}
.jqstooltip {
    width: auto!important;
    height: auto!important
}
#wrapper {
    width: 100%
}
#page-wrapper {
    padding: 0 0 60px;
    min-height: 568px;
    background: #edf1f5
}
.footer {
    bottom: 0;
    color: #58666e;
    left: 0;
    padding: 20px 30px;
    position: absolute;
    right: 0;
    background: #fff
}
.bg-title {
    background: #fff;
    overflow: hidden;
    padding: 15px 15px 10px;
    margin-bottom: 25px;
    margin-left: -25.5px;
    margin-right: -25.5px
}
.bg-title h4 {
    color: rgba(0, 0, 0, .5);
    font-weight: 600;
    margin-top: 6px
}
.bg-title .breadcrumb {
    background: 0 0;
    margin-bottom: 0;
    float: right;
    padding: 0;
    margin-top: 8px
}
.bg-title .breadcrumb a {
    color: rgba(0, 0, 0, .5)
}
.bg-title .breadcrumb a:hover {
    color: #000
}
.bg-title .breadcrumb .active {
    color: #ff6849
}
.logo b {
    height: 60px;
    width: 80px;
    line-height: 60px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    display: block
}
.logo i {
    color: #fff
}
.top-left-part {
    width: 220px;
    float: left
}
.top-left-part a {
    color: #fff;
    font-size: 18px;
    padding-left: 0;
    text-transform: uppercase
}
.navbar-header {
    width: 100%;
    background: #3c4451;
    border: 0
}
.navbar-default {
    border: 0
}
.navbar-top-links {
    margin-right: 0
}
.navbar-top-links .badge {
    position: absolute;
    right: 6px;
    top: 15px
}
.navbar-top-links>li {
    float: left
}
.navbar-top-links>li>a {
    color: #fff;
    padding: 0 12px;
    line-height: 60px;
    min-height: 60px
}
.navbar-top-links>li>a:hover {
    background: rgba(0, 0, 0, .1)
}
.navbar-top-links>li>a:focus {
    background: rgba(0, 0, 0, 0)
}
.nav .open>a,
.nav .open>a:focus,
.nav .open>a:hover {
    background: rgba(255, 255, 255, .2)
}
.navbar-top-links .dropdown-menu li {
    display: block
}
.navbar-top-links .dropdown-menu li:last-child {
    margin-right: 0
}
.navbar-top-links .dropdown-menu li a div {
    white-space: normal
}
.navbar-top-links .dropdown-alerts,
.navbar-top-links .dropdown-messages,
.navbar-top-links .dropdown-tasks {
    width: 310px;
    min-width: 0
}
.navbar-top-links .dropdown-messages {
    margin-left: 5px
}
.navbar-top-links .dropdown-tasks {
    margin-left: -59px
}
.navbar-top-links .dropdown-alerts {
    margin-left: -123px
}
.navbar-top-links .dropdown-user {
    right: 0;
    left: auto
}
.navbar-header .navbar-toggle {
    float: none;
    padding: 0 15px;
    line-height: 60px;
    border: 0;
    color: rgba(255, 255, 255, .5);
    margin: 0;
    display: inline-block;
    border-radius: 0
}
.navbar-header .navbar-toggle:focus,
.navbar-header .navbar-toggle:hover {
    background: rgba(0, 0, 0, .3);
    color: #fff
}
.app-search {
    position: relative;
    margin: 0
}
.app-search a {
    position: absolute;
    top: 20px;
    right: 10px;
    color: #4c5667
}
.app-search .form-control,
.app-search .form-control:focus {
    border: none;
    font-size: 13px;
    color: #4c5667;
    padding-left: 20px;
    padding-right: 40px;
    background: rgba(255, 255, 255, .9);
    box-shadow: none;
    height: 30px;
    font-weight: 600;
    width: 180px;
    display: inline-block;
    line-height: 30px;
    margin-top: 15px;
    border-radius: 40px;
    transition: .5s ease-out
}
.app-search .form-control::-moz-placeholder {
    color: #4c5667;
    opacity: .5
}
.app-search .form-control::-webkit-input-placeholder {
    color: #4c5667;
    opacity: .5
}
.app-search .form-control::-ms-placeholder {
    color: #4c5667;
    opacity: .5
}
.nav-small-cap {
    color: #a6afbb;
    cursor: default;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: .035em;
    padding: 12px 15px!important;
    pointer-events: none;
    margin: 20px 0 0 -15px
}
.profile-pic {
    padding: 0 20px;
    line-height: 50px
}
.profile-pic img {
    margin-right: 10px
}
.drop-title {
    border-bottom: 1px solid rgba(0, 0, 0, .1);
    color: #2b2b2b;
    font-size: 15px;
    font-weight: 600;
    padding: 11px 20px 15px
}
.btn-outline {
    color: inherit;
    background-color: transparent;
    transition: all .5s
}
.btn-rounded {
    border-radius: 60px
}
.btn-custom,
.btn-custom.disabled {
    background: #ff6849;
    border: 1px solid #ff6849;
    color: #fff
}
.btn-custom.disabled.focus,
.btn-custom.disabled:focus,
.btn-custom.disabled:hover,
.btn-custom.focus,
.btn-custom:focus,
.btn-custom:hover {
    background: #ff6849;
    opacity: .8;
    color: #fff;
    border: 1px solid #ff6849
}
.btn-primary,
.btn-primary.disabled {
    background: #ab8ce4;
    border: 1px solid #ab8ce4
}
.btn-primary.disabled.focus,
.btn-primary.disabled:focus,
.btn-primary.disabled:hover,
.btn-primary.focus,
.btn-primary:focus,
.btn-primary:hover {
    background: #ab8ce4;
    opacity: .8;
    border: 1px solid #ab8ce4
}
.btn-success,
.btn-success.disabled {
    background: #00c292;
    border: 1px solid #00c292
}
.btn-success.disabled.focus,
.btn-success.disabled:focus,
.btn-success.disabled:hover,
.btn-success.focus,
.btn-success:focus,
.btn-success:hover {
    background: #00c292;
    opacity: .8;
    border: 1px solid #00c292
}
.btn-info,
.btn-info.disabled {
    background-color: #<?= $_GET['btn'] ?>;
    border: 1px solid #<?= $_GET['btn'] ?>
}
.btn-info.disabled.focus,
.btn-info.disabled:focus,
.btn-info.disabled:hover,
.btn-info.focus,
.btn-info:focus,
.btn-info:hover {
    background: #<?= $_GET['btn'] ?>;
    opacity: .8;
    border: 1px solid #<?= $_GET['btn'] ?>
}
.btn-warning,
.btn-warning.disabled {
    background: #fec107;
    border: 1px solid #fec107
}
.btn-warning.disabled.focus,
.btn-warning.disabled:focus,
.btn-warning.disabled:hover,
.btn-warning.focus,
.btn-warning:focus,
.btn-warning:hover {
    background: #fec107;
    opacity: .8;
    border: 1px solid #fec107
}
.btn-danger,
.btn-danger.disabled {
    background: #fb9678;
    border: 1px solid #fb9678
}
.btn-danger.disabled.focus,
.btn-danger.disabled:focus,
.btn-danger.disabled:hover,
.btn-danger.focus,
.btn-danger:focus,
.btn-danger:hover {
    background: #fb9678;
    opacity: .8;
    border: 1px solid #fb9678
}
.btn-default,
.btn-default.disabled {
    background: #e4e7ea;
    border: 1px solid #e4e7ea
}
.btn-default.disabled.focus,
.btn-default.disabled:focus,
.btn-default.disabled:hover,
.btn-default.focus,
.btn-default:focus,
.btn-default:hover {
    opacity: .8;
    border: 1px solid #e4e7ea;
    background: #e4e7ea
}
.btn-default.btn-outline {
    background-color: #fff
}
.btn-default.btn-outline.focus,
.btn-default.btn-outline:focus,
.btn-default.btn-outline:hover {
    background: #e4e7ea
}
.btn-primary.btn-outline {
    color: #ab8ce4;
    background-color: #fff
}
.btn-primary.btn-outline.focus,
.btn-primary.btn-outline:focus,
.btn-primary.btn-outline:hover {
    background: #ab8ce4;
    color: #fff
}
.btn-success.btn-outline {
    color: #00c292;
    background-color: transparent
}
.btn-success.btn-outline.focus,
.btn-success.btn-outline:focus,
.btn-success.btn-outline:hover {
    background: #00c292;
    color: #fff
}
.btn-info.btn-outline {
    color: #03a9f3;
    background-color: transparent
}
.btn-info.btn-outline.focus,
.btn-info.btn-outline:focus,
.btn-info.btn-outline:hover {
    background: #03a9f3;
    color: #fff
}
.btn-warning.btn-outline {
    color: #fec107;
    background-color: transparent
}
.btn-warning.btn-outline.focus,
.btn-warning.btn-outline:focus,
.btn-warning.btn-outline:hover {
    background: #fec107;
    color: #fff
}
.btn-danger.btn-outline {
    color: #fb9678;
    background-color: transparent
}
.btn-danger.btn-outline.focus,
.btn-danger.btn-outline:focus,
.btn-danger.btn-outline:hover {
    background: #fb9678;
    color: #fff
}
.button-box .btn {
    margin: 0 8px 8px 0
}
.btn-danger.btn-outline:hover,
.btn-info.btn-outline:hover,
.btn-primary.btn-outline:hover,
.btn-success.btn-outline:hover,
.btn-warning.btn-outline:hover {
    color: #fff
}
.btn-label {
    background: rgba(0, 0, 0, .05);
    display: inline-block;
    margin: -6px 12px -6px -14px;
    padding: 7px 15px
}
.btn-facebook {
    color: #fff!important;
    background-color: #3b5998!important
}
.btn-twitter {
    color: #fff!important;
    background-color: #55acee!important
}
.btn-linkedin {
    color: #fff!important;
    background-color: #007bb6!important
}
.btn-dribbble {
    color: #fff!important;
    background-color: #ea4c89!important
}
.btn-googleplus {
    color: #fff!important;
    background-color: #dd4b39!important
}
.btn-instagram {
    color: #fff!important;
    background-color: #3f729b!important
}
.btn-pinterest {
    color: #fff!important;
    background-color: #cb2027!important
}
.btn-dropbox {
    color: #fff!important;
    background-color: #007ee5!important
}
.btn-flickr {
    color: #fff!important;
    background-color: #ff0084!important
}
.btn-tumblr {
    color: #fff!important;
    background-color: #32506d!important
}
.btn-skype {
    color: #fff!important;
    background-color: #00aff0!important
}
.btn-youtube {
    color: #fff!important;
    background-color: #b00!important
}
.btn-github {
    color: #fff!important;
    background-color: #171515!important
}
.btn-primary.active.focus,
.btn-primary.active:focus,
.btn-primary.active:hover,
.btn-primary.focus,
.btn-primary.focus:active,
.btn-primary:active:focus,
.btn-primary:active:hover,
.btn-primary:focus,
.open>.dropdown-toggle.btn-primary.focus,
.open>.dropdown-toggle.btn-primary:focus,
.open>.dropdown-toggle.btn-primary:hover {
    background-color: #ab8ce4;
    border: 1px solid #ab8ce4
}
.btn-success.active.focus,
.btn-success.active:focus,
.btn-success.active:hover,
.btn-success.focus,
.btn-success.focus:active,
.btn-success:active:focus,
.btn-success:active:hover,
.btn-success:focus,
.open>.dropdown-toggle.btn-success.focus,
.open>.dropdown-toggle.btn-success:focus,
.open>.dropdown-toggle.btn-success:hover {
    background-color: #00c292;
    border: 1px solid #00c292
}
.btn-info.active.focus,
.btn-info.active:focus,
.btn-info.active:hover,
.btn-info.focus,
.btn-info.focus:active,
.btn-info:active:focus,
.btn-info:active:hover,
.btn-info:focus,
.open>.dropdown-toggle.btn-info.focus,
.open>.dropdown-toggle.btn-info:focus,
.open>.dropdown-toggle.btn-info:hover {
    background-color: <?= $conf['layout']['cor_call_to_action']; ?>;
    border: 1px solid #FFBA00
}
.btn-warning.active.focus,
.btn-warning.active:focus,
.btn-warning.active:hover,
.btn-warning.focus,
.btn-warning.focus:active,
.btn-warning:active:focus,
.btn-warning:active:hover,
.btn-warning:focus,
.open>.dropdown-toggle.btn-warning.focus,
.open>.dropdown-toggle.btn-warning:focus,
.open>.dropdown-toggle.btn-warning:hover {
    background-color: #fec107;
    border: 1px solid #fec107
}
.btn-danger.active.focus,
.btn-danger.active:focus,
.btn-danger.active:hover,
.btn-danger.focus,
.btn-danger.focus:active,
.btn-danger:active:focus,
.btn-danger:active:hover,
.btn-danger:focus,
.open>.dropdown-toggle.btn-danger.focus,
.open>.dropdown-toggle.btn-danger:focus,
.open>.dropdown-toggle.btn-danger:hover {
    background-color: #fb9678;
    border: 1px solid #fb9678
}
.btn-inverse,
.btn-inverse.active,
.btn-inverse.focus,
.btn-inverse:active,
.btn-inverse:focus,
.btn-inverse:hover,
.open>.dropdown-toggle.btn-inverse {
    background-color: #4c5667;
    border: 1px solid #4c5667;
    color: #fff
}
.chat {
    margin: 0;
    padding: 0;
    list-style: none
}
.chat li {
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted rgba(120, 130, 140, .13)
}
.chat li.left .chat-body {
    margin-left: 60px
}
.chat li.right .chat-body {
    margin-right: 60px
}
.chat li .chat-body p {
    margin: 0
}
.chat .glyphicon,
.panel .slidedown .glyphicon {
    margin-right: 5px
}
.chat-panel .panel-body {
    height: 350px;
    overflow-y: scroll
}
.login-panel {
    margin-top: 25%
}
.flot-chart {
    display: block;
    height: 400px
}
.flot-chart-content {
    width: 100%;
    height: 100%
}
table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_desc_disabled {
    background: 0 0
}
table.dataTable thead .sorting_asc:after {
    content: "\f0de";
    float: right;
    font-family: fontawesome
}
table.dataTable thead .sorting_desc:after {
    content: "\f0dd";
    float: right;
    font-family: fontawesome
}
table.dataTable thead .sorting:after {
    content: "\f0dc";
    float: right;
    font-family: fontawesome;
    color: rgba(50, 50, 50, .5)
}
.btn-circle {
    width: 30px;
    height: 30px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.25
}
.btn-circle.btn-lg {
    width: 50px;
    height: 50px;
    padding: 10px 16px;
    border-radius: 25px;
    font-size: 18px;
    line-height: 1.33
}
.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33
}
.show-grid [class^=col-] {
    padding-top: 10px;
    padding-bottom: 10px;
    border: 1px solid rgba(120, 130, 140, .13);
    background-color: #f7fafc
}
.show-grid {
    margin: 15px 0
}
.huge {
    font-size: 40px
}
.white-box {
    background: #fff;
    padding: 25px;
    margin-bottom: 15px
}
.white-box .box-title {
    margin: 0 0 12px;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 14px
}
.panel {
    border-radius: 0;
    margin-bottom: 15px;
    border: 0
}
.panel .panel-heading {
    border-radius: 0;
    font-weight: 600;
    text-transform: uppercase;
    padding: 20px 25px
}
.panel .panel-heading .panel-title {
    font-size: 14px;
    color: #2b2b2b
}
.panel .panel-heading a i {
    font-size: 12px;
    margin-left: 8px
}
.panel .panel-action {
    float: right
}
.panel .panel-action a {
    opacity: .5
}
.panel .panel-action a:hover {
    opacity: 1
}
.panel .panel-body {
    padding: 25px
}
.panel .panel-body:first-child h3 {
    margin-top: 0;
    font-weight: 600;
    font-family: Poppins, sans-serif;
    font-size: 14px;
    text-transform: uppercase
}
.panel .panel-footer {
    background: #fff;
    border-radius: 0;
    padding: 20px 25px
}
.panel-green,
.panel-success {
    border-color: #00c292
}
.panel-green .panel-heading,
.panel-success .panel-heading {
    border-color: #00c292;
    color: #fff;
    background-color: #00c292
}
.panel-green .panel-heading a,
.panel-success .panel-heading a {
    color: #fff
}
.panel-green .panel-heading a:hover,
.panel-success .panel-heading a:hover {
    color: rgba(255, 255, 255, .5)
}
.panel-green a,
.panel-success a {
    color: #00c292
}
.panel-green a:hover,
.panel-success a:hover {
    color: #007658
}
.panel-black,
.panel-inverse {
    border-color: #4c5667
}
.panel-black .panel-heading,
.panel-inverse .panel-heading {
    border-color: #4c5667;
    color: #fff;
    background-color: #4c5667
}
.panel-black .panel-heading a,
.panel-inverse .panel-heading a {
    color: #fff
}
.panel-black .panel-heading a:hover,
.panel-inverse .panel-heading a:hover {
    color: rgba(255, 255, 255, .5)
}
.panel-black a,
.panel-inverse a {
    color: #4c5667
}
.panel-black a:hover,
.panel-inverse a:hover {
    color: #2c313b
}
.panel-darkblue,
.panel-primary {
    border-color: #ab8ce4
}
.panel-darkblue .panel-heading,
.panel-primary .panel-heading {
    border-color: #ab8ce4;
    color: #fff;
    background-color: #ab8ce4
}
.panel-darkblue .panel-heading a,
.panel-primary .panel-heading a {
    color: #fff
}
.panel-darkblue .panel-heading a:hover,
.panel-primary .panel-heading a:hover {
    color: rgba(255, 255, 255, .5)
}
.panel-darkblue a,
.panel-primary a {
    color: #ab8ce4
}
.panel-darkblue a:hover,
.panel-primary a:hover {
    color: #7e4ed5
}
.panel-blue,
.panel-info {
    border-color: #03a9f3
}
.panel-blue .panel-heading,
.panel-info .panel-heading {
    border-color: #03a9f3;
    color: #fff;
    background-color: #03a9f3
}
.panel-blue .panel-heading a,
.panel-info .panel-heading a {
    color: #fff
}
.panel-blue .panel-heading a:hover,
.panel-info .panel-heading a:hover {
    color: rgba(255, 255, 255, .5)
}
.panel-blue a,
.panel-info a {
    color: #03a9f3
}
.panel-blue a:hover,
.panel-info a:hover {
    color: #0274a7
}
.panel-danger,
.panel-red {
    border-color: #fb9678
}
.panel-danger .panel-heading,
.panel-red .panel-heading {
    border-color: #fb9678;
    color: #fff;
    background-color: #fb9678
}
.panel-danger .panel-heading a,
.panel-red .panel-heading a {
    color: #fff
}
.panel-danger .panel-heading a:hover,
.panel-red .panel-heading a:hover {
    color: rgba(255, 255, 255, .5)
}
.panel-danger a,
.panel-red a {
    color: #fb9678
}
.panel-danger a:hover,
.panel-red a:hover {
    color: #f95c2e
}
.panel-warning,
.panel-yellow {
    border-color: #fec107
}
.panel-warning .panel-heading,
.panel-yellow .panel-heading {
    border-color: #fec107;
    color: #fff;
    background-color: #fec107
}
.panel-warning .panel-heading a,
.panel-yellow .panel-heading a {
    color: #fff
}
.panel-warning .panel-heading a:hover,
.panel-yellow .panel-heading a:hover {
    color: rgba(255, 255, 255, .5)
}
.panel-warning a,
.panel-yellow a {
    color: #fec107
}
.panel-warning a:hover,
.panel-yellow a:hover {
    color: #b88b01
}
.panel-default,
.panel-white {
    border-color: rgba(120, 130, 140, .13)
}
.panel-default .panel-heading,
.panel-white .panel-heading {
    color: #2b2b2b;
    background-color: #fff;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.panel-default .panel-body,
.panel-white .panel-body {
    color: #2b2b2b
}
.panel-default .panel-action a,
.panel-white .panel-action a {
    color: #2b2b2b;
    opacity: .5
}
.panel-default .panel-action a:hover,
.panel-white .panel-action a:hover {
    opacity: 1;
    color: #2b2b2b
}
.panel-default .panel-footer,
.panel-white .panel-footer {
    background: #fff;
    color: #2b2b2b;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-info {
    border-color: #03a9f3
}
.full-panel-info .panel-heading {
    border-color: #03a9f3;
    color: #fff;
    background-color: #03a9f3;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-info .panel-body {
    background: #03a9f3;
    color: #fff
}
.full-panel-info .panel-footer {
    background: #03a9f3;
    color: #fff;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-info a {
    color: #03a9f3
}
.full-panel-info a:hover {
    color: #0274a7
}
.full-panel-warning {
    border-color: #fec107
}
.full-panel-warning .panel-heading {
    border-color: #fec107;
    color: #fff;
    background-color: #fec107;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-warning .panel-body {
    background: #fec107;
    color: #fff
}
.full-panel-warning .panel-footer {
    background: #fec107;
    color: #fff;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-warning a {
    color: #fec107
}
.full-panel-warning a:hover {
    color: #b88b01
}
.full-panel-success {
    border-color: #00c292
}
.full-panel-success .panel-heading {
    border-color: #00c292;
    color: #fff;
    background-color: #00c292;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-success .panel-body {
    background: #00c292;
    color: #fff
}
.full-panel-success .panel-footer {
    background: #00c292;
    color: #fff;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-success a {
    color: #00c292
}
.full-panel-success a:hover {
    color: #007658
}
.full-panel-purple {
    border-color: #9675ce
}
.full-panel-purple .panel-heading {
    color: #fff;
    background-color: #9675ce;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-purple .panel-body {
    background: #9675ce;
    color: #fff
}
.full-panel-purple .panel-footer {
    background: #9675ce;
    color: #fff;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-purple a {
    color: #9675ce
}
.full-panel-purple a:hover {
    color: #6c41b6
}
.full-panel-danger {
    border-color: #fb9678
}
.full-panel-danger .panel-heading {
    border-color: #fb9678;
    color: #fff;
    background-color: #fb9678;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-danger .panel-body {
    background: #fb9678;
    color: #fff
}
.full-panel-danger .panel-footer {
    background: #fb9678;
    color: #fff;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-danger a {
    color: #fb9678
}
.full-panel-danger a:hover {
    color: #f95c2e
}
.full-panel-inverse {
    border-color: #4c5667
}
.full-panel-inverse .panel-heading {
    border-color: #4c5667;
    color: #fff;
    background-color: #4c5667;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-inverse .panel-body {
    background: #4c5667;
    color: #fff
}
.full-panel-inverse .panel-footer {
    background: #4c5667;
    color: #fff;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-inverse a {
    color: #4c5667
}
.full-panel-inverse a:hover {
    color: #2c313b
}
.full-panel-default {
    border-color: rgba(120, 130, 140, .13)
}
.full-panel-default .panel-heading {
    color: #2b2b2b;
    background-color: #fff;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-default .panel-body {
    color: #2b2b2b
}
.full-panel-default .panel-footer {
    background: #fff;
    color: #2b2b2b;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.full-panel-default a {
    color: #2b2b2b
}
.full-panel-default a:hover {
    color: #2c313b
}
.panel-opcl {
    float: right
}
.panel-opcl i {
    margin-left: 8px;
    font-size: 10px;
    cursor: pointer
}
.fa-fw {
    width: 20px!important;
    display: inline-block!important;
    text-align: left!important
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent
}
.waves-effect .waves-ripple {
    position: absolute;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    opacity: 0;
    background: rgba(0, 0, 0, .08);
    -webkit-transition: all .5s ease-out;
    -moz-transition: all .5s ease-out;
    -o-transition: all .5s ease-out;
    transition: all .5s ease-out;
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    -o-transition-property: -o-transform, opacity;
    transition-property: transform, opacity;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    pointer-events: none
}
.waves-effect.waves-light .waves-ripple {
    background: rgba(255, 255, 255, .4);
    background: -webkit-radial-gradient(rgba(255, 255, 255, .2) 0, rgba(255, 255, 255, .3) 40%, rgba(255, 255, 255, .4) 50%, rgba(255, 255, 255, .5) 60%, rgba(255, 255, 255, 0) 70%);
    background: -o-radial-gradient(rgba(255, 255, 255, .2) 0, rgba(255, 255, 255, .3) 40%, rgba(255, 255, 255, .4) 50%, rgba(255, 255, 255, .5) 60%, rgba(255, 255, 255, 0) 70%);
    background: -moz-radial-gradient(rgba(255, 255, 255, .2) 0, rgba(255, 255, 255, .3) 40%, rgba(255, 255, 255, .4) 50%, rgba(255, 255, 255, .5) 60%, rgba(255, 255, 255, 0) 70%);
    background: radial-gradient(rgba(255, 255, 255, .2) 0, rgba(255, 255, 255, .3) 40%, rgba(255, 255, 255, .4) 50%, rgba(255, 255, 255, .5) 60%, rgba(255, 255, 255, 0) 70%)
}
.waves-effect.waves-classic .waves-ripple {
    background: rgba(0, 0, 0, .2)
}
.waves-effect.waves-classic.waves-light .waves-ripple {
    background: rgba(255, 255, 255, .4)
}
.waves-notransition {
    -webkit-transition: none!important;
    -moz-transition: none!important;
    -o-transition: none!important;
    transition: none!important
}
.waves-button,
.waves-circle {
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-mask-image: -webkit-radial-gradient(circle, #fff 100%, #000 100%)
}
.waves-button,
.waves-button-input,
.waves-button:hover,
.waves-button:visited {
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: none;
    outline: 0;
    color: inherit;
    background-color: rgba(0, 0, 0, 0);
    font-size: 1em;
    line-height: 1em;
    text-align: center;
    text-decoration: none;
    z-index: 1
}
.waves-button {
    padding: .85em 1.1em;
    border-radius: .2em
}
.waves-button-input {
    margin: 0;
    padding: .85em 1.1em
}
.waves-input-wrapper {
    border-radius: .2em;
    vertical-align: bottom
}
.waves-input-wrapper.waves-button {
    padding: 0
}
.waves-input-wrapper .waves-button-input {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1
}
.waves-circle {
    text-align: center;
    width: 2.5em;
    height: 2.5em;
    line-height: 2.5em;
    border-radius: 50%
}
.waves-float {
    -webkit-mask-image: none;
    -webkit-box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, .12);
    box-shadow: 0 1px 1.5px 1px rgba(0, 0, 0, .12);
    -webkit-transition: all 300ms;
    -moz-transition: all 300ms;
    -o-transition: all 300ms;
    transition: all 300ms
}
.waves-float:active {
    -webkit-box-shadow: 0 8px 20px 1px rgba(0, 0, 0, .3);
    box-shadow: 0 8px 20px 1px rgba(0, 0, 0, .3)
}
.waves-block {
    display: block
}
.checkbox {
    padding-left: 20px
}
.checkbox label {
    display: inline-block;
    padding-left: 5px;
    position: relative
}
.checkbox label::before {
    -o-transition: .3s ease-in-out;
    -webkit-transition: .3s ease-in-out;
    background-color: #fff;
    border-radius: 1px;
    border: 1px solid rgba(120, 130, 140, .13);
    content: "";
    display: inline-block;
    height: 17px;
    left: 0;
    margin-left: -20px;
    position: absolute;
    transition: .3s ease-in-out;
    width: 17px;
    outline: 0!important
}
.checkbox label::after {
    color: #2b2b2b;
    display: inline-block;
    font-size: 11px;
    height: 16px;
    left: 0;
    margin-left: -20px;
    padding-left: 3px;
    padding-top: 1px;
    position: absolute;
    top: 0;
    width: 16px
}
.checkbox input[type=checkbox] {
    cursor: pointer;
    opacity: 0;
    z-index: 1;
    outline: 0!important
}
.checkbox input[type=checkbox]:disabled+label {
    opacity: .65
}
.checkbox input[type=checkbox]:focus+label::before {
    outline-offset: -2px;
    outline: 0;
    outline: dotted thin
}
.checkbox input[type=checkbox]:checked+label::after {
    content: "\f00c";
    font-family: FontAwesome
}
.checkbox input[type=checkbox]:disabled+label::before {
    background-color: #e4e7ea;
    cursor: not-allowed
}
.checkbox.checkbox-circle label::before {
    border-radius: 50%
}
.checkbox.checkbox-inline {
    margin-top: 0
}
.checkbox.checkbox-single label {
    height: 17px
}
.checkbox-primary input[type=checkbox]:checked+label::before {
    background-color: #ab8ce4;
    border-color: #ab8ce4
}
.checkbox-primary input[type=checkbox]:checked+label::after {
    color: #fff
}
.checkbox-danger input[type=checkbox]:checked+label::before {
    background-color: #fb9678;
    border-color: #fb9678
}
.checkbox-danger input[type=checkbox]:checked+label::after {
    color: #fff
}
.checkbox-info input[type=checkbox]:checked+label::before {
    background-color: #03a9f3;
    border-color: #03a9f3
}
.checkbox-info input[type=checkbox]:checked+label::after {
    color: #fff
}
.checkbox-warning input[type=checkbox]:checked+label::before {
    background-color: #fec107;
    border-color: #fec107
}
.checkbox-warning input[type=checkbox]:checked+label::after {
    color: #fff
}
.checkbox-success input[type=checkbox]:checked+label::before {
    background-color: #00c292;
    border-color: #00c292
}
.checkbox-success input[type=checkbox]:checked+label::after {
    color: #fff
}
.checkbox-purple input[type=checkbox]:checked+label::before {
    background-color: #9675ce;
    border-color: #9675ce
}
.checkbox-purple input[type=checkbox]:checked+label::after {
    color: #fff
}
.checkbox-red input[type=checkbox]:checked+label::before {
    background-color: #fb9678;
    border-color: #fb9678
}
.checkbox-red input[type=checkbox]:checked+label::after {
    color: #fff
}
.checkbox-inverse input[type=checkbox]:checked+label::before {
    background-color: #4c5667;
    border-color: #4c5667
}
.checkbox-inverse input[type=checkbox]:checked+label::after {
    color: #fff
}
.radio {
    padding-left: 20px
}
.radio label {
    display: inline-block;
    padding-left: 5px;
    position: relative
}
.radio label::before {
    -o-transition: border .5s ease-in-out;
    -webkit-transition: border .5s ease-in-out;
    background-color: #fff;
    border-radius: 50%;
    border: 1px solid rgba(120, 130, 140, .13);
    content: "";
    display: inline-block;
    height: 17px;
    left: 0;
    margin-left: -20px;
    position: absolute;
    transition: border .5s ease-in-out;
    width: 17px;
    outline: 0!important
}
.radio label::after {
    -moz-transition: -moz-transform .3s cubic-bezier(.8, -.33, .2, 1.33);
    -ms-transform: scale(0, 0);
    -o-transform: scale(0, 0);
    -o-transition: -o-transform .3s cubic-bezier(.8, -.33, .2, 1.33);
    -webkit-transform: scale(0, 0);
    -webkit-transition: -webkit-transform .3s cubic-bezier(.8, -.33, .2, 1.33);
    background-color: #2b2b2b;
    border-radius: 50%;
    content: " ";
    display: inline-block;
    height: 7px;
    left: 5px;
    margin-left: -20px;
    position: absolute;
    top: 5px;
    transform: scale(0, 0);
    transition: transform .3s cubic-bezier(.8, -.33, .2, 1.33);
    width: 7px
}
.radio input[type=radio] {
    cursor: pointer;
    opacity: 0;
    z-index: 1;
    outline: 0!important
}
.radio input[type=radio]:disabled+label {
    opacity: .65
}
.radio input[type=radio]:focus+label::before {
    outline-offset: -2px;
    outline: -webkit-focus-ring-color auto 5px;
    outline: dotted thin
}
.radio input[type=radio]:checked+label::after {
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1)
}
.radio input[type=radio]:disabled+label::before {
    cursor: not-allowed
}
.radio.radio-inline {
    margin-top: 0
}
.radio.radio-single label {
    height: 17px
}
.radio-primary input[type=radio]+label::after {
    background-color: #ab8ce4
}
.radio-primary input[type=radio]:checked+label::before {
    border-color: #ab8ce4
}
.radio-primary input[type=radio]:checked+label::after {
    background-color: #ab8ce4
}
.radio-danger input[type=radio]+label::after {
    background-color: #fb9678
}
.radio-danger input[type=radio]:checked+label::before {
    border-color: #fb9678
}
.radio-danger input[type=radio]:checked+label::after {
    background-color: #fb9678
}
.radio-info input[type=radio]+label::after {
    background-color: #03a9f3
}
.radio-info input[type=radio]:checked+label::before {
    border-color: #03a9f3
}
.radio-info input[type=radio]:checked+label::after {
    background-color: #03a9f3
}
.radio-warning input[type=radio]+label::after {
    background-color: #fec107
}
.radio-warning input[type=radio]:checked+label::before {
    border-color: #fec107
}
.radio-warning input[type=radio]:checked+label::after {
    background-color: #fec107
}
.radio-success input[type=radio]+label::after {
    background-color: #00c292
}
.radio-success input[type=radio]:checked+label::before {
    border-color: #00c292
}
.radio-success input[type=radio]:checked+label::after {
    background-color: #00c292
}
.radio-purple input[type=radio]+label::after {
    background-color: #9675ce
}
.radio-purple input[type=radio]:checked+label::before {
    border-color: #9675ce
}
.radio-purple input[type=radio]:checked+label::after {
    background-color: #9675ce
}
.radio-red input[type=radio]+label::after {
    background-color: #fb9678
}
.radio-red input[type=radio]:checked+label::before {
    border-color: #fb9678
}
.radio-red input[type=radio]:checked+label::after {
    background-color: #fb9678
}
.fileupload {
    overflow: hidden;
    position: relative
}
.fileupload input.upload {
    cursor: pointer;
    filter: alpha(opacity=0);
    font-size: 20px;
    margin: 0;
    opacity: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0
}
.model_img {
    cursor: pointer
}
.myadmin-dd .dd-list .dd-item .dd-handle {
    background: #fff;
    border: 1px solid rgba(120, 130, 140, .13);
    padding: 8px 16px;
    height: auto;
    font-weight: 600;
    border-radius: 0
}
.myadmin-dd .dd-list .dd-item .dd-handle:hover {
    color: #03a9f3
}
.myadmin-dd .dd-list .dd-item button {
    height: auto;
    font-size: 17px;
    margin: 8px auto;
    color: #2b2b2b;
    width: 30px
}
.myadmin-dd-empty .dd-list .dd3-handle {
    border: 1px solid rgba(120, 130, 140, .13);
    border-bottom: 0;
    background: #fff;
    height: 36px;
    width: 36px
}
.myadmin-dd-empty .dd-list .dd3-handle:before {
    color: inherit;
    top: 7px
}
.myadmin-dd-empty .dd-list .dd3-handle:hover {
    color: #03a9f3
}
.myadmin-dd-empty .dd-list .dd3-content {
    height: auto;
    border: 1px solid rgba(120, 130, 140, .13);
    padding: 8px 16px 8px 46px;
    background: #fff;
    font-weight: 600
}
.myadmin-dd-empty .dd-list .dd3-content:hover {
    color: #03a9f3
}
.myadmin-dd-empty .dd-list button {
    width: 26px;
    height: 26px;
    font-size: 16px;
    font-weight: 600
}
.settings_box {
    position: absolute;
    top: 75px;
    right: 0;
    z-index: 100
}
.settings_box a {
    background: #fff;
    padding: 15px;
    display: inline-block;
    vertical-align: top
}
.settings_box a i {
    display: block;
    -webkit-animation-name: rotate;
    -webkit-animation-duration: 2s;
    -moz-animation-name: rotate;
    -moz-animation-duration: 2s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    animation-name: rotate;
    font-size: 16px;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-timing-function: linear
}
@-webkit-keyframes rotate {
    from {
        -webkit-transform: rotate(0deg)
    }
    to {
        -webkit-transform: rotate(360deg)
    }
}
@-moz-keyframes rotate {
    from {
        -moz-transform: rotate(0deg)
    }
    to {
        -moz-transform: rotate(360deg)
    }
}
@keyframes rotate {
    from {
        transform: rotate(0deg)
    }
    to {
        transform: rotate(360deg)
    }
}
.theme_color {
    margin: 0;
    padding: 0;
    display: inline-block;
    overflow: hidden;
    width: 0;
    transition: .5s ease-out;
    background: #fff
}
.theme_color li {
    list-style: none;
    width: 30%;
    float: left;
    margin: 0 1.5%
}
.theme_color li a {
    padding: 5px;
    height: 50px;
    display: block
}
.theme_color li a.theme-green {
    background: #00c292
}
.theme_color li a.theme-red {
    background: #fb9678
}
.theme_color li a.theme-dark {
    background: #4c5667
}
.theme_block {
    width: 200px;
    padding: 30px
}
ul.common li {
    display: inline-block;
    line-height: 40px;
    list-style: none none;
    width: 48%
}
ul.common li a {
    color: #686868
}
ul.common li a:hover {
    color: #03a9f3
}
.row-in i {
    font-size: 24px
}
.mailbox {
    width: 280px;
    overflow: auto;
    padding-bottom: 0
}
.message-center a {
    border-bottom: 1px solid rgba(120, 130, 140, .13);
    display: block;
    padding: 9px 15px
}
.message-center a:hover {
    background: #f7fafc
}
.message-center .user-img {
    width: 40px;
    float: left;
    position: relative;
    margin: 0 10px 15px 0
}
.message-center .user-img img {
    width: 100%
}
.message-center .user-img .profile-status {
    border: 2px solid #fff;
    border-radius: 50%;
    display: inline-block;
    height: 10px;
    left: 30px;
    position: absolute;
    top: 1px;
    width: 10px
}
.message-center .user-img .online {
    background: #00c292
}
.message-center .user-img .busy {
    background: #fb9678
}
.message-center .user-img .away,
.message-center .user-img .offline {
    background: #fec107
}
.message-center .mail-contnet h5 {
    margin: 0;
    font-weight: 400;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap
}
.message-center .mail-contnet .mail-desc {
    font-size: 12px;
    display: block;
    margin: 5px 0;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    color: #2b2b2b
}
.message-center .mail-contnet .time {
    display: block;
    font-size: 10px;
    color: #2b2b2b
}
.mail-contnet a.action {
    margin-left: 10px;
    font-size: 12px;
    visibility: hidden
}
.mail-contnet:hover a.action {
    visibility: visible
}
.inbox-center .unread td {
    font-weight: 600
}
.inbox-center a {
    color: #686868;
    padding: 2px 0 3px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-block
}
.comment-center {
    margin: 0 -25px
}
.comment-center .comment-body {
    border-bottom: 1px solid rgba(120, 130, 140, .13);
    display: table;
    padding: 20px 25px
}
.comment-center .comment-body:hover {
    background: #f7fafc
}
.comment-center .user-img {
    width: 40px;
    display: table-cell;
    position: relative;
    margin: 0 10px 0 0
}
.comment-center .user-img img {
    width: 100%
}
.comment-center .mail-contnet {
    display: table-cell;
    padding-left: 15px;
    vertical-align: top
}
.comment-center .mail-contnet h5 {
    margin: 0;
    font-weight: 400;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap
}
.comment-center .mail-contnet .mail-desc {
    font-size: 14px;
    display: block;
    margin: 8px 0;
    line-height: 25px;
    color: #848a96;
    height: 50px;
    overflow: hidden
}
.comment-center .mail-contnet .time {
    display: block;
    font-size: 10px;
    color: #2b2b2b
}
.sales-report {
    background: #f7fafc;
    margin: 12px -25px;
    padding: 15px
}
.dropdown-alerts,
.dropdown-tasks {
    padding: 0
}
.dropdown-alerts li a,
.dropdown-tasks li a,
.mailbox li>a {
    padding: 15px 20px
}
.dropdown-alerts li.divider,
.dropdown-tasks li.divider {
    margin: 0
}
.row-in-br {
    border-right: 1px solid rgba(120, 130, 140, .13)
}
.col-in {
    padding: 20px
}
.col-in h3 {
    font-size: 48px;
    font-weight: 100
}
.basic-list {
    padding: 0
}
.basic-list li {
    display: block;
    padding: 15px 0;
    border-bottom: 1px solid rgba(120, 130, 140, .13);
    line-height: 27px
}
.basic-list li:last-child {
    border-bottom: 0
}
.steamline {
    position: relative;
    border-left: 1px solid rgba(120, 130, 140, .13);
    margin-left: 20px
}
.steamline .sl-left {
    float: left;
    margin-left: -20px;
    z-index: 1;
    margin-right: 15px
}
.steamline .sl-left img {
    max-width: 40px
}
.steamline .sl-right {
    padding-left: 35px
}
.steamline .sl-item {
    margin-top: 8px;
    margin-bottom: 30px
}
.sl-date {
    font-size: 10px;
    color: #98a6ad
}
.time-item {
    border-color: rgba(120, 130, 140, .13);
    padding-bottom: 1px;
    position: relative
}
.time-item:before {
    content: " ";
    display: table
}
.time-item:after {
    background-color: #fff;
    border-color: rgba(120, 130, 140, .13);
    border-radius: 10px;
    border-style: solid;
    border-width: 2px;
    bottom: 0;
    content: '';
    height: 14px;
    left: 0;
    margin-left: -8px;
    position: absolute;
    top: 5px;
    width: 14px
}
.time-item-item:after {
    content: " ";
    display: table
}
.item-info {
    margin-bottom: 15px;
    margin-left: 15px
}
.item-info p {
    margin-bottom: 10px!important
}
.user-bg {
    margin: -25px;
    height: 230px;
    overflow: hidden;
    position: relative
}
.user-bg .overlay-box {
    background: #9675ce;
    opacity: .9;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    text-align: center
}
.user-bg .overlay-box .user-content {
    padding: 15px;
    margin-top: 30px
}
.user-btm-box {
    padding: 40px 0 10px;
    clear: both;
    overflow: hidden
}
.vertical .carousel-inner {
    height: 100%;
    position: relative
}
.carousel.vertical .item {
    -webkit-transition: .6s ease-in-out top;
    -moz-transition: .6s ease-in-out top;
    -ms-transition: .6s ease-in-out top;
    -o-transition: .6s ease-in-out top;
    transition: .6s ease-in-out top
}
.carousel.vertical .active {
    top: 0
}
.carousel.vertical .next {
    top: 400px
}
.carousel.vertical .prev {
    top: -400px
}
.carousel.vertical .next.left,
.carousel.vertical .prev.right {
    top: 0
}
.carousel.vertical .active.left {
    top: -400px
}
.carousel.vertical .active.right {
    top: 400px
}
.carousel.vertical .item {
    left: 0
}
.twi-user img {
    margin-right: 20px;
    width: 50px
}
.twi-user {
    margin: 18px 0
}
.carousel-inner h3 {
    height: 112px;
    overflow: hidden
}
.chart-box {
    margin: 25px -15px -17px -17px
}
.list-task .task-done span {
    text-decoration: line-through
}
.chat-list {
    list-style: none;
    max-height: 332px;
    padding: 0 20px
}
.chat-list li {
    margin-bottom: 24px;
    overflow: auto
}
.chat-list .chat-image {
    display: inline-block;
    float: left;
    text-align: center;
    width: 50px
}
.chat-list .chat-image img {
    border-radius: 100%;
    width: 100%
}
.chat-list .chat-text {
    background: #f7fafc;
    border-radius: 0;
    display: inline-block;
    padding: 15px;
    position: relative
}
.chat-list .chat-text h4 {
    color: #1a2942;
    display: block;
    font-size: 12px;
    font-style: normal;
    font-weight: 700;
    margin: 0;
    line-height: 15px;
    position: relative
}
.chat-list .chat-text p {
    margin: 0;
    padding-top: 3px
}
.chat-list .chat-text b {
    font-size: 10px;
    opacity: .8
}
.chat-list .chat-body {
    display: inline-block;
    float: left;
    font-size: 12px;
    margin-left: 12px;
    width: 65%
}
.chat-list .odd .chat-image {
    float: right!important
}
.chat-list .odd .chat-body {
    float: right!important;
    margin-right: 12px;
    text-align: right;
    color: #fff
}
.chat-list .odd .chat-text {
    background: #ff6849
}
.chat-list .odd .chat-text h4 {
    color: #fff
}
.chat-send {
    padding-left: 0;
    padding-right: 30px
}
.chat-send button {
    width: 100%
}
.weather-box .weather-top {
    overflow: hidden;
    padding: 10px 25px;
    margin: 0 -25px;
    background: #f7fafc
}
.weather-box .weather-top h2 {
    line-height: 24px
}
.weather-box .weather-top h2 small {
    font-size: 13px
}
.weather-box .weather-top .today_crnt {
    font-size: 45px;
    font-weight: 100
}
.weather-box .weather-top .today_crnt canvas {
    display: inline-block;
    margin-right: 10px;
    vertical-align: middle
}
.weather-box .weather-info {
    padding: 10px 0
}
.weather-box .weather-time {
    overflow: hidden;
    text-align: center;
    padding-top: 15px
}
.weather-box .weather-time li span {
    display: block
}
.weather-box .weather-time li canvas {
    font-size: 20px;
    margin: 10px 0
}
.demo-container {
    width: 100%;
    height: 350px
}
.demo-placeholder {
    width: 100%;
    height: 100%;
    font-size: 14px;
    line-height: 1.2em
}
.myadmin-alert {
    border-radius: 0;
    color: #fff;
    padding: 12px 30px 12px 12px;
    position: relative;
    text-align: left
}
.myadmin-alert a {
    color: inherit;
    font-weight: 600;
    text-decoration: underline
}
.myadmin-alert h4 {
    color: inherit;
    font-size: 14px;
    font-weight: 600;
    line-height: normal;
    margin: 0
}
.myadmin-alert .img {
    border-radius: 3px;
    height: 40px;
    left: 12px;
    position: absolute;
    top: 12px;
    width: 40px
}
.myadmin-alert-img {
    min-height: 64px;
    padding-left: 65px
}
.myadmin-alert-icon {
    padding-left: 20px
}
.myadmin-alert-icon i {
    padding-right: 10px
}
.myadmin-alert .closed {
    color: rgba(255, 255, 255, .5);
    font-size: 20px;
    font-weight: 700;
    padding: 4px;
    position: absolute;
    right: 3px;
    text-decoration: none;
    top: 0
}
.myadmin-alert .closed:hover {
    color: #fff
}
.myadmin-alert-click {
    cursor: pointer;
    padding-right: 12px
}
.myadmin-alert .primary {
    background: rgba(0, 0, 0, .4);
    border: none;
    border-radius: 3px;
    color: inherit;
    outline: 0;
    padding: 4px 10px
}
.myadmin-alert .cancel {
    background: rgba(255, 255, 255, .4);
    border: none;
    border-radius: 3px;
    color: rgba(0, 0, 0, .8);
    outline: 0;
    padding: 4px 10px
}
.myadmin-alert .cancel:hover,
.myadmin-alert .primary:hover {
    opacity: .9
}
.myadmin-alert-bottom,
.myadmin-alert-bottom-left,
.myadmin-alert-bottom-right,
.myadmin-alert-fullscreen,
.myadmin-alert-top,
.myadmin-alert-top-left,
.myadmin-alert-top-right {
    box-shadow: 2px 2px 2px rgba(0, 0, 0, .1);
    display: none;
    position: fixed;
    z-index: 1000
}
.myadmin-alert-top {
    left: 0;
    right: 0;
    top: 0
}
.myadmin-alert-bottom {
    bottom: 0;
    left: 0;
    right: 0
}
.myadmin-alert-top-left {
    left: 20px;
    top: 80px
}
.myadmin-alert-top-right {
    right: 20px;
    top: 80px
}
.myadmin-alert-bottom-left {
    bottom: 20px;
    left: 20px
}
.myadmin-alert-bottom-right {
    bottom: 20px;
    right: 20px
}
.myadmin-alert-fullsize {
    left: 50%;
    margin: -20px;
    top: 50%
}
.alert-custom {
    background: #ff6849;
    color: #fff;
    border-color: #ff6849
}
.alert-inverse {
    background: #4c5667;
    color: #fff;
    border-color: #4c5667
}
.alert-success {
    background: #00c292;
    color: #fff;
    border-color: #00c292
}
.alert-dark {
    background: #686868;
    color: #fff;
    border-color: #686868
}
.alert-warning {
    background: #fec107;
    color: #fff;
    border-color: #fec107
}
.alert-danger {
    background: #fb9678;
    color: #fff;
    border-color: #fb9678
}
.alert-primary {
    background: #9675ce;
    color: #fff;
    border-color: #9675ce
}
.alert-info {
    background: #03a9f3;
    color: #fff;
    border-color: #03a9f3
}
.alert-info .closed,
.alert-info a.closed:hover {
    color: inherit
}
.tab-content {
    margin-top: 30px
}
.customtab {
    border-bottom: 2px solid #f7fafc
}
.customtab li.active a,
.customtab li.active a:focus,
.customtab li.active a:hover {
    background: #fff;
    border: 0;
    border-bottom: 2px solid #ff6849;
    margin-bottom: -1px;
    color: #ff6849
}
.customtab li a,
.customtab li a:focus,
.customtab li a:hover {
    border: 0
}
.customtab2 {
    border-bottom: 1px solid #f7fafc;
    border-top: 1px solid #f7fafc;
    padding: 10px 0
}
.customtab2 li.active a,
.customtab2 li.active a:focus,
.customtab2 li.active a:hover {
    background: #ff6849;
    border: 1px solid #ff6849;
    color: #fff
}
.customtab2 li a,
.customtab2 li a:focus,
.customtab2 li a:hover {
    border: 0
}
.vtabs {
    display: table
}
.vtabs .tabs-vertical {
    width: 150px;
    border-right: 1px solid rgba(120, 130, 140, .13);
    display: table-cell;
    vertical-align: top
}
.vtabs .tabs-vertical li a {
    color: #2b2b2b;
    margin-bottom: 10px
}
.vtabs .tab-content {
    display: table-cell;
    padding: 20px;
    vertical-align: top
}
.tabs-vertical li.active a,
.tabs-vertical li.active a:focus,
.tabs-vertical li.active a:hover {
    background: #ff6849;
    border: 0;
    border-right: 2px solid #ff6849;
    margin-right: -1px;
    color: #fff
}
.customvtab .tabs-vertical li.active a,
.customvtab .tabs-vertical li.active a:focus,
.customvtab .tabs-vertical li.active a:hover {
    background: #fff;
    border: 0;
    border-right: 2px solid #ff6849;
    margin-right: -1px;
    color: #2b2b2b
}
.nav-pills>li.active>a,
.nav-pills>li.active>a:focus,
.nav-pills>li.active>a:hover {
    background: #ff6849;
    color: #fff
}
.nav-pills>li>a {
    color: #2b2b2b;
    border-radius: 0
}
.panel-group .panel .panel-heading .accordion-toggle.collapsed:before,
.panel-group .panel .panel-heading a[data-toggle=collapse].collapsed:before {
    content: '\e64b'
}
.panel-group .panel .panel-heading a[data-toggle=collapse] {
    display: block
}
.panel-group .panel .panel-heading a[data-toggle=collapse]:before {
    content: '\e648';
    display: block;
    float: right;
    font-family: themify;
    font-size: 14px;
    text-align: right;
    width: 25px
}
.panel-group .panel .panel-heading .accordion-toggle {
    display: block
}
.panel-group .panel .panel-heading .accordion-toggle:before {
    content: '\e648';
    display: block;
    float: right;
    font-family: themify;
    font-size: 14px;
    text-align: right;
    width: 25px
}
.panel-group .panel .panel-heading+.panel-collapse .panel-body {
    border-top: none
}
.panel-group .panel-heading {
    padding: 12px 20px
}
.progress {
    -webkit-box-shadow: none!important;
    background-color: rgba(120, 130, 140, .13);
    box-shadow: none!important;
    height: 4px;
    border-radius: 0;
    margin-bottom: 18px;
    overflow: hidden
}
.progress-bar {
    box-shadow: none;
    font-size: 8px;
    font-weight: 600;
    line-height: 12px
}
.progress.progress-sm {
    height: 8px!important
}
.progress.progress-sm .progress-bar {
    font-size: 8px;
    line-height: 5px
}
.progress.progress-md {
    height: 15px!important
}
.progress.progress-md .progress-bar {
    font-size: 10.8px;
    line-height: 14.4px
}
.progress.progress-lg {
    height: 20px!important
}
.progress.progress-lg .progress-bar {
    font-size: 12px;
    line-height: 20px
}
.progress-bar-primary {
    background-color: #ab8ce4
}
.progress-bar-success {
    background-color: #00c292
}
.progress-bar-info {
    background-color: #03a9f3
}
.progress-bar-megna {
    background-color: #01c0c8
}
.progress-bar-warning {
    background-color: #fec107
}
.progress-bar-danger {
    background-color: #fb9678
}
.progress-bar-inverse {
    background-color: #4c5667
}
.progress-bar-purple {
    background-color: #9675ce
}
.progress-bar-custom {
    background-color: #03a9f3
}
.progress-animated {
    -webkit-animation-duration: 5s;
    -webkit-animation-name: myanimation;
    -webkit-transition: 5s all;
    animation-duration: 5s;
    animation-name: myanimation;
    transition: 5s all
}
@-webkit-keyframes myanimation {
    from {
        width: 0
    }
}
@keyframes myanimation {
    from {
        width: 0
    }
}
.progress-vertical {
    min-height: 250px;
    height: 250px;
    width: 4px;
    position: relative;
    display: inline-block;
    margin-bottom: 0;
    margin-right: 20px
}
.progress-vertical .progress-bar {
    width: 100%
}
.progress-vertical-bottom {
    min-height: 250px;
    height: 250px;
    position: relative;
    width: 4px;
    display: inline-block;
    margin-bottom: 0;
    margin-right: 20px
}
.progress-vertical-bottom .progress-bar {
    width: 100%;
    position: absolute;
    bottom: 0
}
.progress-vertical-bottom.progress-sm,
.progress-vertical.progress-sm {
    width: 8px!important
}
.progress-vertical-bottom.progress-sm .progress-bar,
.progress-vertical.progress-sm .progress-bar {
    font-size: 8px;
    line-height: 5px
}
.progress-vertical-bottom.progress-md,
.progress-vertical.progress-md {
    width: 15px!important
}
.progress-vertical-bottom.progress-md .progress-bar,
.progress-vertical.progress-md .progress-bar {
    font-size: 10.8px;
    line-height: 14.4px
}
.progress-vertical-bottom.progress-lg,
.progress-vertical.progress-lg {
    width: 20px!important
}
.progress-vertical-bottom.progress-lg .progress-bar,
.progress-vertical.progress-lg .progress-bar {
    font-size: 12px;
    line-height: 20px
}
.timeline {
    position: relative;
    padding: 20px 0;
    list-style: none;
    max-width: 1200px;
    margin: 0 auto
}
.timeline:before {
    content: " ";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 3px;
    margin-left: -1.5px;
    background-color: #eee
}
.timeline>li {
    position: relative;
    margin-bottom: 20px
}
.timeline>li:after,
.timeline>li:before {
    content: " ";
    display: table
}
.timeline>li:after {
    clear: both
}
.timeline>li>.timeline-panel {
    float: left;
    position: relative;
    width: 46%;
    padding: 20px;
    border: 1px solid rgba(120, 130, 140, .13);
    border-radius: 0;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 6px rgba(0, 0, 0, .05)
}
.timeline>li>.timeline-panel:before {
    content: " ";
    display: inline-block;
    position: absolute;
    top: 26px;
    right: -8px;
    border-top: 8px solid transparent;
    border-right: 0 solid rgba(120, 130, 140, .13);
    border-bottom: 8px solid transparent;
    border-left: 8px solid rgba(120, 130, 140, .13)
}
.timeline>li>.timeline-panel:after {
    content: " ";
    display: inline-block;
    position: absolute;
    top: 27px;
    right: -7px;
    border-top: 7px solid transparent;
    border-right: 0 solid #fff;
    border-bottom: 7px solid transparent;
    border-left: 7px solid #fff
}
.timeline>li>.timeline-badge {
    z-index: 100;
    position: absolute;
    top: 16px;
    left: 50%;
    width: 50px;
    height: 50px;
    margin-left: -25px;
    border-radius: 50%;
    text-align: center;
    font-size: 1.4em;
    line-height: 50px;
    color: #fff;
    overflow: hidden;
    background-color: #4c5667
}
.timeline>li.timeline-inverted>.timeline-panel {
    float: right
}
.timeline>li.timeline-inverted>.timeline-panel:before {
    right: auto;
    left: -8px;
    border-right-width: 8px;
    border-left-width: 0
}
.timeline>li.timeline-inverted>.timeline-panel:after {
    right: auto;
    left: -7px;
    border-right-width: 7px;
    border-left-width: 0
}
.timeline-badge.primary {
    background-color: #ab8ce4!important
}
.timeline-badge.success {
    background-color: #00c292!important
}
.timeline-badge.warning {
    background-color: #fec107!important
}
.timeline-badge.danger {
    background-color: #fb9678!important
}
.timeline-badge.info {
    background-color: #03a9f3!important
}
.timeline-title {
    margin-top: 0;
    color: inherit;
    font-weight: 400
}
.timeline-body>p,
.timeline-body>ul {
    margin-bottom: 0
}
.timeline-body>p+p {
    margin-top: 5px
}
.chart {
    position: relative;
    display: inline-block;
    width: 100px;
    height: 100px;
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center
}
.chart canvas {
    position: absolute;
    top: 0;
    left: 0
}
.chart.chart-widget-pie {
    margin-top: 5px;
    margin-bottom: 5px
}
.pie-chart>span {
    left: 0;
    margin-top: -2px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
    transform: translateY(-50%)
}
.chart>span>img {
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
    width: 60%;
    height: 60%;
    transform: translateY(-50%);
    margin: 0 auto
}
.percent {
    display: inline-block;
    line-height: 100px;
    z-index: 2;
    font-weight: 600;
    font-size: 18px;
    color: #2b2b2b
}
.percent:after {
    content: '%';
    margin-left: .1em;
    font-size: .8em
}
.table {
    margin-bottom: 10px
}
.table-hover>tbody>tr:hover,
.table-striped>tbody>tr:nth-of-type(odd),
.table>tbody>tr.active>td,
.table>tbody>tr.active>th,
.table>tbody>tr>td.active,
.table>tbody>tr>th.active,
.table>tfoot>tr.active>td,
.table>tfoot>tr.active>th,
.table>tfoot>tr>td.active,
.table>tfoot>tr>th.active,
.table>thead>tr.active>td,
.table>thead>tr.active>th,
.table>thead>tr>td.active,
.table>thead>tr>th.active {
    background-color: #f7fafc!important
}
.table-bordered,
.table>tbody>tr>td,
.table>tbody>tr>th,
.table>tfoot>tr>td,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>thead>tr>th {
    border-top: 1px solid #e4e7ea
}
.table>tbody>tr>td,
.table>tbody>tr>th,
.table>tfoot>tr>td,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>thead>tr>th {
    padding: 15px 8px
}
.table-bordered>tbody>tr>td,
.table-bordered>tbody>tr>th,
.table-bordered>tfoot>tr>td,
.table-bordered>tfoot>tr>th,
.table-bordered>thead>tr>td,
.table-bordered>thead>tr>th {
    border: 1px solid #e4e7ea
}
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 1px solid #e4e7ea
}
tbody {
    color: #797979
}
th {
    color: #666;
    font-weight: 500
}
.table-bordered {
    border: 1px solid #e4e7ea
}
table.focus-on tbody tr.focused td,
table.focus-on tbody tr.focused th {
    background-color: #ff6849;
    color: #fff
}
.table-rep-plugin .table-responsive {
    border: none!important
}
.table-rep-plugin tbody th {
    font-size: 14px;
    font-weight: 400
}
.jsgrid .jsgrid-table {
    margin-bottom: 0
}
.jsgrid-selected-row>td {
    background: #f7fafc;
    border-color: #f7fafc
}
.jsgrid-header-row>th {
    background: #fff
}
.footable-odd {
    background-color: #f7fafc
}
.form-control-line {
    border-left: 0 none;
    border-radius: 0;
    border-right: 0 none;
    border-top: 0 none;
    box-shadow: none;
    padding-left: 0
}
.has-success .form-control {
    border-color: #00c292;
    box-shadow: none!important
}
.has-warning .form-control {
    border-color: #fec107;
    box-shadow: none!important
}
.has-error .form-control {
    border-color: #fb9678;
    box-shadow: none!important
}
.input-group-addon {
    border-radius: 2px;
    border: 1px solid rgba(120, 130, 140, .13)
}
.input-daterange input:first-child,
.input-daterange input:last-child {
    border-radius: 0
}
.form-material .form-group {
    overflow: hidden
}
.form-material .form-control {
    background-color: rgba(0, 0, 0, 0);
    background-position: center bottom, center calc(99%);
    background-repeat: no-repeat;
    background-size: 0 2px, 100% 1px;
    padding: 0;
    transition: background 0s ease-out 0s
}
.form-material .form-control,
.form-material .form-control.focus,
.form-material .form-control:focus {
    background-image: linear-gradient(#9675ce, #9675ce), linear-gradient(rgba(120, 130, 140, .13), rgba(120, 130, 140, .13));
    border: 0;
    border-radius: 0;
    box-shadow: none;
    float: none
}
.form-material .form-control.focus,
.form-material .form-control:focus {
    background-size: 100% 2px, 100% 1px;
    outline: 0;
    transition-duration: .3s
}
.form-bordered .form-group {
    border-bottom: 1px solid rgba(120, 130, 140, .13);
    padding-bottom: 20px
}
.select2-container .select2-choice {
    background-image: none!important;
    border: none!important;
    height: auto!important;
    padding: 0!important;
    line-height: 22px!important;
    background-color: transparent!important;
    box-shadow: none!important
}
.select2-container .select2-choice .select2-arrow {
    background-image: none!important;
    background: 0 0;
    border: none;
    width: 14px;
    top: -2px
}
.select2-container .select2-container-multi.form-control {
    height: auto
}
.select2-results .select2-highlighted {
    color: #fff;
    background-color: #03a9f3
}
.select2-drop-active {
    border: 1px solid #e3e3e3!important;
    padding-top: 5px
}
.select2-search input {
    border: 1px solid rgba(120, 130, 140, .13)
}
.select2-container-multi {
    width: 100%
}
.select2-container-multi .select2-choices {
    border: 1px solid #border!important;
    box-shadow: none!important;
    background-image: none!important;
    border-radius: 0!important;
    min-height: 38px
}
.select2-container-multi .select2-choices .select2-search-choice {
    padding: 4px 7px 4px 18px;
    margin: 5px 0 3px 5px;
    color: #555;
    background: #f5f5f5;
    border-color: rgba(120, 130, 140, .13);
    -webkit-box-shadow: none;
    box-shadow: none
}
.select2-container-multi .select2-choices .select2-search-field input {
    padding: 7px 7px 7px 10px;
    font-family: inherit
}
.icon-list-demo div {
    cursor: pointer;
    line-height: 60px;
    white-space: nowrap;
    color: #686868
}
.icon-list-demo div:hover {
    color: #2b2b2b
}
.icon-list-demo div p {
    margin: 10px 0;
    padding: 5px 0
}
.icon-list-demo i {
    -webkit-transition: all .2s;
    -webkit-transition: font-size .2s;
    display: inline-block;
    font-size: 18px;
    margin: 0 15px 0 10px;
    text-align: left;
    vertical-align: middle;
    width: auto;
    transition: all .3s ease 0s
}
.icon-list-demo .col-md-4 {
    border-radius: 0
}
.icon-list-demo .col-md-4:hover {
    background-color: #f7fafc
}
.icon-list-demo .col-md-4:hover i {
    font-size: 2em
}
.gmaps,
.gmaps-panaroma {
    height: 300px;
    background: #e4e7ea;
    border-radius: 3px
}
.gmaps-overlay {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 16px;
    line-height: 40px;
    background: #ab8ce4;
    border-radius: 4px;
    padding: 10px 20px
}
.gmaps-overlay_arrow {
    left: 50%;
    margin-left: -16px;
    width: 0;
    height: 0;
    position: absolute
}
.gmaps-overlay_arrow.above {
    bottom: -15px;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-top: 16px solid #ab8ce4
}
.gmaps-overlay_arrow.below {
    top: -15px;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-bottom: 16px solid #ab8ce4
}
.jvectormap-zoomin,
.jvectormap-zoomout {
    width: 10px;
    height: 10px;
    line-height: 10px
}
.jvectormap-zoomout {
    top: 40px
}
.error-box {
    height: 100%;
    position: fixed;
    background: url(../../plugins/images/error-bg.jpg) center center no-repeat #fff!important;
    width: 100%
}
.error-box .footer {
    width: 100%;
    left: 0;
    right: 0
}
.error-body {
    padding-top: 5%
}
.error-body h1 {
    font-size: 210px;
    font-weight: 900;
    line-height: 210px
}
.login-register {
    background: url(../img/inicial.jpg) center center/cover no-repeat !important;
    height: 100%;
    position: fixed
}
.login-box {
    background: #fff;
    width: 400px;
    margin: 10% auto 0
}
.login-box .footer {
    width: 100%;
    left: 0;
    right: 0
}
.login-box .social {
    display: block;
    margin-bottom: 30px
}
#recoverform {
    display: none
}
.pricing-box {
    position: relative;
    text-align: center;
    margin-top: 30px
}
.featured-plan {
    margin-top: 0
}
.featured-plan .pricing-body {
    padding: 60px 0;
    background: #f7fafc;
    border: 1px solid #ddd
}
.featured-plan .price-table-content .price-row {
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.pricing-body {
    border-radius: 0;
    border-top: 1px solid rgba(120, 130, 140, .13);
    border-bottom: 5px solid rgba(120, 130, 140, .13);
    vertical-align: middle;
    padding: 30px 0;
    position: relative
}
.pricing-body h2 {
    position: relative;
    font-size: 56px;
    margin: 20px 0 10px;
    font-weight: 700
}
.pricing-body h2 span {
    position: absolute;
    font-size: 15px;
    top: -10px;
    margin-left: -10px
}
.price-table-content .price-row {
    padding: 20px 0;
    border-top: 1px solid rgba(120, 130, 140, .13)
}
.pricing-plan {
    padding: 0 15px
}
.pricing-plan .no-padding {
    padding: 0
}
.price-lable {
    position: absolute;
    top: -10px;
    padding: 5px 10px;
    margin: 0 auto;
    display: inline-block;
    width: 100px;
    left: 0;
    right: 0
}
.mails a {
    color: #2b2b2b
}
.mails td {
    vertical-align: middle!important;
    position: relative
}
.mails td:last-of-type {
    width: 100px;
    padding-right: 20px
}
.mails tr:hover .text-white {
    display: none
}
.mails .mail-select {
    padding: 12px 20px;
    min-width: 134px
}
.mails .checkbox {
    margin-bottom: 0;
    margin-top: 0;
    vertical-align: middle;
    display: inline-block;
    height: 17px
}
.mails .checkbox label {
    min-height: 16px
}
.mail-list .list-group-item {
    background-color: transparent;
    border: 0;
    border-left: 3px solid #fff;
    border-radius: 0
}
.mail-list .list-group-item:hover {
    background: #f7fafc;
    border-left: 3px solid #f7fafc
}
.mail-list .list-group-item:focus {
    border-left: 3px solid #f7fafc
}
.mail-list .list-group-item.active:focus {
    background: #f7fafc;
    border-left: 3px solid #fb9678
}
.mail-list .list-group-item.active {
    border-left: 3px solid #fb9678;
    border-radius: 0;
    color: #2b2b2b!important
}
.mail_listing {
    min-height: 500px
}
.inbox_listing .inbox-item:hover {
    background: #f7fafc
}
.inbox_listing .inbox-item {
    padding-left: 20px
}
.inbox-widget.inbox_listing .inbox-item .inbox-item-text {
    height: 19px;
    overflow: hidden
}
.message-center .unread .mail-contnet .mail-desc,
.message-center .unread .mail-contnet h5 {
    font-weight: 600;
    color: #2b2b2b!important
}
.calendar {
    float: left;
    margin-bottom: 0
}
.fc-view {
    margin-top: 30px
}
.none-border .modal-footer {
    border-top: none
}
.fc-toolbar {
    margin-bottom: 5px;
    margin-top: 15px
}
.fc-toolbar h2 {
    font-size: 18px;
    font-weight: 600;
    line-height: 30px;
    text-transform: uppercase
}
.fc-day {
    background: #fff
}
.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active,
.fc-toolbar .ui-state-hover,
.fc-toolbar button:focus,
.fc-toolbar button:hover {
    z-index: 0
}
.fc-widget-header {
    border: 0!important
}
.fc-widget-content {
    border-color: rgba(120, 130, 140, .13)!important
}
.fc th.fc-widget-header {
    background: #9675ce;
    color: #fff;
    font-size: 14px;
    line-height: 20px;
    padding: 7px 0;
    text-transform: uppercase
}
.fc-button {
    background: #fff;
    border: 1px solid rgba(120, 130, 140, .13);
    color: #555;
    text-transform: capitalize
}
.fc-text-arrow {
    font-family: inherit;
    font-size: 16px
}
.fc-state-hover {
    background: #F5F5F5
}
.fc-unthemed .fc-today {
    border: 1px solid #fb9678;
    background: #fcf8e3!important
}
.fc-cell-overlay,
.fc-state-highlight {
    background: #f0f0f0
}
.fc-event {
    border-radius: 0;
    border: none;
    cursor: move;
    font-size: 13px;
    margin: 1px -1px 0;
    padding: 5px;
    text-align: center;
    background: #03a9f3
}
.calendar-event {
    cursor: move;
    margin: 10px 5px 0 0;
    padding: 6px 10px;
    display: inline-block;
    color: #fff;
    min-width: 140px;
    text-align: center;
    background: #03a9f3
}
.calendar-event a {
    float: right;
    opacity: .6;
    font-size: 10px;
    margin: 4px 0 0 10px;
    color: #fff
}
.fc-basic-view td.fc-day-number,
.fc-basic-view td.fc-week-number span {
    padding-right: 5px
}
.weather h1 {
    color: #fff;
    font-size: 50px;
    font-weight: 100
}
.weather i {
    color: #fff;
    font-size: 40px
}
.weather .w-title-sub {
    color: rgba(255, 255, 255, .6)
}
.navbar-top-links>li.right-side-toggle a:focus {
    background: #4f5467
}
.right-sidebar {
    position: fixed;
    right: -240px;
    width: 240px;
    display: none;
    z-index: 1000;
    background: #fff;
    top: 0;
    height: 100%;
    box-shadow: 5px 1px 40px rgba(0, 0, 0, .1);
    transition: all .3s ease
}
.right-sidebar .rpanel-title {
    display: block;
    padding: 21px;
    color: #fff;
    text-transform: uppercase;
    font-size: 13px;
    background: #ff6849
}
.right-sidebar .rpanel-title span {
    float: right;
    cursor: pointer;
    font-size: 11px
}
.right-sidebar .rpanel-title span:hover {
    color: #2b2b2b
}
.right-sidebar .r-panel-body {
    padding: 20px
}
.right-sidebar .r-panel-body ul {
    margin: 0;
    padding: 0
}
.right-sidebar .r-panel-body ul li {
    list-style: none;
    padding: 5px 0
}
.shw-rside {
    right: 0;
    width: 240px;
    display: block
}
.chatonline img {
    margin-right: 10px;
    float: left;
    width: 30px
}
.chatonline li a {
    padding: 15px 0;
    float: left;
    width: 100%
}
.chatonline li a span {
    color: #686868
}
.chatonline li a span small {
    display: block;
    font-size: 10px
}
ul#themecolors {
    display: block
}
ul#themecolors li {
    display: inline-block
}
ul#themecolors li:first-child {
    display: block
}
#themecolors li a {
    width: 50px;
    height: 50px;
    display: inline-block;
    margin: 5px;
    color: transparent;
    position: relative
}
#themecolors li a.working:before {
    content: "\f00c";
    font-family: FontAwesome;
    font-size: 18px;
    line-height: 50px;
    width: 50px;
    height: 50px;
    position: absolute;
    top: 0;
    left: 0;
    color: #fff;
    text-align: center
}
.default-theme {
    background: #fb9678
}
.green-theme {
    background: #00c292
}
.yellow-theme {
    background: #a0aec4
}
.blue-theme {
    background: #03a9f3
}
.purple-theme {
    background: #9675ce
}
.megna-theme {
    background: #01c0c8
}
.default-dark-theme {
    background: #4f5467;
    background: -moz-linear-gradient(left, #4f5467 0, #4f5467 23%, #fb9678 23%, #fb9678 99%);
    background: -webkit-linear-gradient(left, #4f5467 0, #4f5467 23%, #fb9678 23%, #fb9678 99%);
    background: linear-gradient(to right, #4f5467 0, #4f5467 23%, #fb9678 23%, #fb9678 99%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#4f5467', endColorstr='#fb9678', GradientType=1)
}
.green-dark-theme {
    background: #4f5467;
    background: -moz-linear-gradient(left, #4f5467 0, #4f5467 23%, #00c292 23%, #00c292 99%);
    background: -webkit-linear-gradient(left, #4f5467 0, #4f5467 23%, #00c292 23%, #00c292 99%);
    background: linear-gradient(to right, #4f5467 0, #4f5467 23%, #00c292 23%, #00c292 99%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#4f5467', endColorstr='#00c292', GradientType=1)
}
.yellow-dark-theme {
    background: #4f5467;
    background: -moz-linear-gradient(left, #4f5467 0, #4f5467 23%, #a0aec4 23%, #a0aec4 99%);
    background: -webkit-linear-gradient(left, #4f5467 0, #4f5467 23%, #a0aec4 23%, #a0aec4 99%);
    background: linear-gradient(to right, #4f5467 0, #4f5467 23%, #a0aec4 23%, #a0aec4 99%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#4f5467', endColorstr='#a0aec4', GradientType=1)
}
.blue-dark-theme {
    background: #4f5467;
    background: -moz-linear-gradient(left, #4f5467 0, #4f5467 23%, #03a9f3 23%, #03a9f3 99%);
    background: -webkit-linear-gradient(left, #4f5467 0, #4f5467 23%, #03a9f3 23%, #03a9f3 99%);
    background: linear-gradient(to right, #4f5467 0, #4f5467 23%, #03a9f3 23%, #03a9f3 99%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#4f5467', endColorstr='@info', GradientType=1)
}
.purple-dark-theme {
    background: #4f5467;
    background: -moz-linear-gradient(left, #4f5467 0, #4f5467 23%, #9675ce 23%, #9675ce 99%);
    background: -webkit-linear-gradient(left, #4f5467 0, #4f5467 23%, #9675ce 23%, #9675ce 99%);
    background: linear-gradient(to right, #4f5467 0, #4f5467 23%, #9675ce 23%, #9675ce 99%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#4f5467', endColorstr='@purple', GradientType=1)
}
.megna-dark-theme {
    background: #4f5467;
    background: -moz-linear-gradient(left, #4f5467 0, #4f5467 23%, #01c0c8 23%, #01c0c8 99%);
    background: -webkit-linear-gradient(left, #4f5467 0, #4f5467 23%, #01c0c8 23%, #01c0c8 99%);
    background: linear-gradient(to right, #4f5467 0, #4f5467 23%, #01c0c8 23%, #01c0c8 99%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#4f5467', endColorstr='@megna', GradientType=1)
}
.visited li a {
    color: #686868
}
.visited li.active a {
    color: #ff6849
}
.stats-row {
    margin-bottom: 20px
}
.stat-item {
    display: inline-block;
    padding-right: 15px
}
.stat-item+.stat-item {
    padding-left: 15px;
    border-left: 1px solid #eee
}
.country-state {
    list-style: none;
    margin: 0;
    padding: 0 0 0 10px
}
.country-state h2 {
    margin: 0
}
.country-state .progress {
    margin-top: 8px
}
.two-part li {
    width: 48.8%
}
.two-part li i {
    font-size: 50px
}
.two-part li span {
    font-size: 50px;
    font-weight: 100;
    font-family: Poppins, sans-serif
}
.news-slide {
    position: relative
}
.news-slide .overlaybg {
    height: 360px;
    overflow: hidden
}
.news-slide .overlaybg img {
    width: 100%;
    height: 100%
}
.news-slide .news-content {
    position: absolute;
    height: 360px;
    background: rgba(0, 0, 0, .5);
    z-index: 10;
    width: 100%;
    top: 0;
    padding: 30px
}
.news-slide .news-content h2 {
    height: 240px;
    overflow: hidden;
    color: #fff
}
.news-slide .news-content a {
    color: #fff;
    opacity: .6;
    text-transform: uppercase
}
.news-slide .news-content a:hover {
    opacity: 1
}
.nav-pills-rounded li {
    display: inline-block;
    float: none
}
.nav-pills-rounded li a {
    border-radius: 60px;
    -moz-border-radius: 60px;
    -webkit-border-radius: 60px;
    color: #686868;
    padding: 10px 25px
}
.nav-pills-rounded li.active a,
.nav-pills-rounded li.active a:focus,
.nav-pills-rounded li.active a:hover {
    background: #ff6849;
    color: #fff
}
.analytics-info .list-inline {
    margin-bottom: 0
}
.analytics-info .list-inline li {
    vertical-align: middle
}
.analytics-info .list-inline li span {
    font-size: 24px
}
.analytics-info .list-inline li i {
    font-size: 20px
}
.feeds {
    margin: 0;
    padding: 0
}
.feeds li {
    list-style: none;
    padding: 10px;
    display: block
}
.feeds li:hover {
    background: #f7fafc
}
.feeds li>div {
    width: 40px;
    height: 40px;
    margin-right: 5px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    border-radius: 100%
}
.feeds li>div i {
    line-height: 40px
}
.feeds li span {
    float: right;
    width: auto;
    font-size: 12px
}
.jq-icon-info {
    background-color: #01c0c8;
    color: #fff
}
.jq-icon-success {
    background-color: #00c292;
    color: #fff
}
.jq-icon-error {
    background-color: #fb9678;
    color: #fff
}
.jq-icon-warning {
    background-color: #fec107;
    color: #fff
}
.dropzone {
    border-style: dashed;
    border-width: 1px
}
.weather h1 sup {
    font-size: 20px;
    top: -1.2em
}
.fcbtn {
    position: relative;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
    padding: 8px 20px
}
.fcbtn:after {
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s
}
.btn-1b:after {
    width: 100%;
    height: 0;
    top: 0;
    left: 0
}
.btn-1b:active,
.btn-1b:hover {
    color: #fff
}
.btn-1b:active:after,
.btn-1b:hover:after {
    height: 100%
}
.btn-1b.btn-info:after,
.btn-1c.btn-info:after,
.btn-1d.btn-info:after,
.btn-1e.btn-info:after,
.btn-1f.btn-info:after {
    background: #03a9f3
}
.btn-1b.btn-warning:after,
.btn-1c.btn-warning:after,
.btn-1d.btn-warning:after,
.btn-1e.btn-warning:after,
.btn-1f.btn-warning:after {
    background: #fec107
}
.btn-1b.btn-danger:after,
.btn-1c.btn-danger:after,
.btn-1d.btn-danger:after,
.btn-1e.btn-danger:after,
.btn-1f.btn-danger:after {
    background: #fb9678
}
.btn-1b.btn-primary:after,
.btn-1c.btn-primary:after,
.btn-1d.btn-primary:after,
.btn-1e.btn-primary:after,
.btn-1f.btn-primary:after {
    background: #9675ce
}
.btn-1b.btn-success:after,
.btn-1c.btn-success:after,
.btn-1d.btn-success:after,
.btn-1e.btn-success:after,
.btn-1f.btn-success:after {
    background: #00c292
}
.btn-1b.btn-inverse:after,
.btn-1c.btn-inverse:after,
.btn-1d.btn-inverse:after,
.btn-1e.btn-inverse:after,
.btn-1f.btn-inverse:after {
    background: #4c5667
}
.btn-1c:after {
    width: 0;
    height: 100%;
    top: 0;
    left: 0
}
.btn-1c:active,
.btn-1c:hover {
    color: #000
}
.btn-1c:active:after,
.btn-1c:hover:after {
    width: 100%
}
.btn-1d {
    overflow: hidden
}
.btn-1d:after {
    width: 0;
    height: 103%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}
.btn-1d:hover:after {
    width: 100%;
    opacity: 1
}
.btn-1e {
    overflow: hidden
}
.btn-1e:after {
    width: 100%;
    height: 0;
    top: 50%;
    left: 50%;
    background: #fff;
    opacity: 0;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform: translateX(-50%) translateY(-50%) rotate(45deg)
}
.btn-1e:hover:after {
    height: 260%;
    opacity: 1
}
.btn-1e:active:after {
    height: 400%;
    opacity: 1
}
.btn-1f {
    overflow: hidden
}
.btn-1f:after {
    width: 101%;
    height: 0;
    top: 50%;
    left: 50%;
    background: #fff;
    opacity: 0;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}
.btn-1f:hover:after {
    height: 100%;
    opacity: 1
}
.btn-1f:active:after {
    height: 130%;
    opacity: 1
}
.sweet-alert {
    padding: 25px
}
.sweet-alert h2 {
    margin-top: 0
}
.sweet-alert p {
    line-height: 30px
}
ul.list-icons {
    margin: 0;
    padding: 0
}
ul.list-icons li {
    list-style: none;
    line-height: 40px
}
ul.list-icons li i {
    font-size: 12px;
    margin-right: 5px
}
.demo-popover .popover,
.demo-tooltip .tooltip {
    position: relative;
    margin-right: 25px;
    opacity: 1;
    display: inline-block
}
.tooltip-inner {
    border-radius: 3px;
    padding: 5px 10px
}
.tooltip.in {
    opacity: 1
}
.tooltip-primary+.tooltip .tooltip-inner,
.tooltip-primary.tooltip .tooltip-inner {
    color: #fff;
    background-color: #ab8ce4
}
.tooltip-primary+.tooltip.top .tooltip-arrow,
.tooltip-primary.tooltip.top .tooltip-arrow {
    border-top-color: #ab8ce4
}
.tooltip-primary+.tooltip.right .tooltip-arrow,
.tooltip-primary.tooltip.right .tooltip-arrow {
    border-right-color: #ab8ce4
}
.tooltip-primary+.tooltip.bottom .tooltip-arrow,
.tooltip-primary.tooltip.bottom .tooltip-arrow {
    border-bottom-color: #ab8ce4
}
.tooltip-primary+.tooltip.left .tooltip-arrow,
.tooltip-primary.tooltip.left .tooltip-arrow {
    border-left-color: #ab8ce4
}
.tooltip-success+.tooltip .tooltip-inner,
.tooltip-success.tooltip .tooltip-inner {
    color: #fff;
    background-color: #00c292
}
.tooltip-success+.tooltip.top .tooltip-arrow,
.tooltip-success.tooltip.top .tooltip-arrow {
    border-top-color: #00c292
}
.tooltip-success+.tooltip.right .tooltip-arrow,
.tooltip-success.tooltip.right .tooltip-arrow {
    border-right-color: #00c292
}
.tooltip-success+.tooltip.bottom .tooltip-arrow,
.tooltip-success.tooltip.bottom .tooltip-arrow {
    border-bottom-color: #00c292
}
.tooltip-success+.tooltip.left .tooltip-arrow,
.tooltip-success.tooltip.left .tooltip-arrow {
    border-left-color: #00c292
}
.tooltip-warning+.tooltip .tooltip-inner,
.tooltip-warning.tooltip .tooltip-inner {
    color: #fff;
    background-color: #fec107
}
.tooltip-warning+.tooltip.top .tooltip-arrow,
.tooltip-warning.tooltip.top .tooltip-arrow {
    border-top-color: #fec107
}
.tooltip-warning+.tooltip.right .tooltip-arrow,
.tooltip-warning.tooltip.right .tooltip-arrow {
    border-right-color: #fec107
}
.tooltip-warning+.tooltip.bottom .tooltip-arrow,
.tooltip-warning.tooltip.bottom .tooltip-arrow {
    border-bottom-color: #fec107
}
.tooltip-warning+.tooltip.left .tooltip-arrow,
.tooltip-warning.tooltip.left .tooltip-arrow {
    border-left-color: #fec107
}
.tooltip-info+.tooltip .tooltip-inner,
.tooltip-info.tooltip .tooltip-inner {
    color: #fff;
    background-color: #03a9f3
}
.tooltip-info+.tooltip.top .tooltip-arrow,
.tooltip-info.tooltip.top .tooltip-arrow {
    border-top-color: #03a9f3
}
.tooltip-info+.tooltip.right .tooltip-arrow,
.tooltip-info.tooltip.right .tooltip-arrow {
    border-right-color: #03a9f3
}
.tooltip-info+tooltip.bottom .tooltip-arrow,
.tooltip-info.tooltip.bottom .tooltip-arrow {
    border-bottom-color: #03a9f3
}
.tooltip-info+.tooltip.left .tooltip-arrow,
.tooltip-info.tooltip.left .tooltip-arrow {
    border-left-color: #03a9f3
}
.tooltip-danger+.tooltip .tooltip-inner,
.tooltip-danger.tooltip .tooltip-inner {
    color: #fff;
    background-color: #fb9678
}
.tooltip-danger+.tooltip.top .tooltip-arrow,
.tooltip-danger.tooltip.top .tooltip-arrow {
    border-top-color: #fb9678
}
.tooltip-danger+.tooltip.right .tooltip-arrow,
.tooltip-danger.tooltip.right .tooltip-arrow {
    border-right-color: #fb9678
}
.tooltip-danger+.tooltip.bottom .tooltip-arrow,
.tooltip-danger.tooltip.bottom .tooltip-arrow {
    border-bottom-color: #fb9678
}
.tooltip-danger+.tooltip.left .tooltip-arrow,
.tooltip-danger.tooltip.left .tooltip-arrow {
    border-left-color: #fb9678
}
.flotTip {
    padding: 8px 12px;
    background-color: #2b2b2b;
    z-index: 100;
    color: #fff;
    opacity: .9;
    font-size: 13px
}
.popover {
    -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, .05);
    box-shadow: 0 2px 6px rgba(0, 0, 0, .05)
}
.popover .popover-title {
    border-radius: 0
}
.popover-primary+.popover .popover-title {
    color: #fff;
    background-color: #ab8ce4;
    border-color: #ab8ce4
}
.popover-primary+.popover.bottom .arrow,
.popover-primary+.popover.bottom .arrow:after {
    border-bottom-color: #ab8ce4
}
.popover-success+.popover .popover-title {
    color: #fff;
    background-color: #00c292;
    border-color: #00c292
}
.popover-success+.popover.bottom .arrow,
.popover-success+.popover.bottom .arrow:after {
    border-bottom-color: #00c292
}
.popover-info+.popover .popover-title {
    color: #fff;
    background-color: #03a9f3;
    border-color: #03a9f3
}
.popover-info+.popover.bottom .arrow,
.popover-info+.popover.bottom .arrow:after {
    border-bottom-color: #03a9f3
}
.popover-warning+.popover .popover-title {
    color: #fff;
    background-color: #fec107;
    border-color: #fec107
}
.popover-warning+.popover.bottom .arrow,
.popover-warning+.popover.bottom .arrow:after {
    border-bottom-color: #fec107
}
.popover-danger+.popover .popover-title {
    color: #fff;
    background-color: #fb9678;
    border-color: #fb9678
}
.popover-danger+.popover.bottom .arrow,
.popover-danger+.popover.bottom .arrow:after {
    border-bottom-color: #fb9678
}
.btn-file {
    overflow: hidden;
    position: relative;
    vertical-align: middle
}
.btn-file>input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    font-size: 23px;
    height: 100%;
    width: 100%;
    direction: ltr;
    cursor: pointer;
    border-radius: 0
}
.fileinput {
    margin-bottom: 9px;
    display: inline-block
}
.fileinput .form-control {
    padding-top: 7px;
    padding-bottom: 5px;
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
    cursor: text
}
.fileinput .thumbnail {
    overflow: hidden;
    display: inline-block;
    margin-bottom: 5px;
    vertical-align: middle;
    text-align: center
}
.fileinput .thumbnail>img {
    max-height: 100%
}
.fileinput .btn {
    vertical-align: middle
}
.fileinput-exists .fileinput-new,
.fileinput-new .fileinput-exists {
    display: none
}
.fileinput-inline .fileinput-controls {
    display: inline
}
.fileinput-filename {
    vertical-align: middle;
    display: inline-block;
    overflow: hidden
}
.form-control .fileinput-filename {
    vertical-align: bottom
}
.fileinput.input-group {
    display: table
}
.fileinput.input-group>* {
    position: relative;
    z-index: 2
}
.fileinput.input-group>.btn-file {
    z-index: 1
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100%
}
.ms-container .ms-list {
    border-radius: 0;
    box-shadow: none
}
.ms-container .ms-selectable li.ms-elem-selectable,
.ms-container .ms-selection li.ms-elem-selection {
    padding: 6px 10px
}
.ms-container .ms-selectable li.ms-hover,
.ms-container .ms-selection li.ms-hover {
    background: #03a9f3
}
.dropzone .dz-message {
    text-align: center;
    margin: 10% 0
}
.editable-input .form-control {
    height: 30px
}
.asColorPicker-trigger {
    position: absolute;
    top: 0;
    right: -35px;
    height: 38px;
    width: 37px;
    border: 0
}
.asColorPicker-dropdown {
    max-width: 260px
}
.asColorPicker-clear {
    top: 7px;
    right: 16px
}
.datepicker table tr td.today,
.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:hover,
.datepicker table tr td.today:hover {
    background: #ff6849;
    color: #fff
}
.datepicker table tr td.active,
.datepicker table tr td.active.disabled,
.datepicker table tr td.active.disabled:hover,
.datepicker table tr td.active:hover {
    background: #03a9f3;
    color: #fff
}
.editable-table+input.error {
    border: 1px solid #danger;
    outline: 0;
    outline-offset: 0
}
#editable-datatable_wrapper+input:focus,
.editable-table+input,
.editable-table+input:focus {
    border: 1px solid #03a9f3!important;
    outline: 0!important;
    outline-offset: 0!important
}
.editable-table td:focus {
    outline: 0
}
.wizard-steps {
    display: table;
    width: 100%
}
.wizard-steps>li {
    display: table-cell;
    padding: 10px 20px;
    background: #f7fafc
}
.wizard-steps>li span {
    border-radius: 100%;
    border: 1px solid rgba(120, 130, 140, .13);
    width: 40px;
    height: 40px;
    display: inline-block;
    vertical-align: middle;
    padding-top: 9px;
    margin-right: 8px;
    text-align: center
}
.wizard-content {
    padding: 25px;
    border-color: rgba(120, 130, 140, .13);
    margin-bottom: 30px
}
.wizard-steps>li.current,
.wizard-steps>li.done {
    background: #03a9f3;
    color: #fff
}
.wizard-steps>li.current span,
.wizard-steps>li.done span {
    border-color: #fff;
    color: #fff
}
.wizard-steps>li.current h4,
.wizard-steps>li.done h4 {
    color: #fff
}
.wizard-steps>li.done {
    background: #00c292
}
.wizard-steps>li.error {
    background: #fb9678
}
.wiz-aco .pager {
    margin: 0
}
.sidebar {
    overflow-y: auto
}
.sidebar .sidebar-nav.navbar-collapse {
    padding-left: 0;
    padding-right: 0
}
.sidebar .fa-fw {
    width: 20px;
    text-align: left!important;
    display: inline-block;
    font-size: 16px;
    vertical-align: middle
}
.sidebar .label {
    font-size: 10px;
    border-radius: 60px;
    padding: 6px 8px;
    min-width: 30px;
    height: 20px
}
.sidebar #side-menu .user-pro a {
    padding-left: 20px
}
.sidebar #side-menu .user-pro .nav-second-level a:hover {
    color: #ff6849
}
.sidebar #side-menu .user-pro .arrow {
    top: 23px;
    right: 20px
}
.sidebar #side-menu .user-pro>a {
    padding: 17px 7px 16px 15px!important
}
.sidebar #side-menu .user-pro .img-circle {
    width: 30px;
    margin-right: 10px
}
.sidebar #side-menu .user-pro .nav-second-level li i {
    margin-right: 5px
}
.sidebar .sidebar-search {
    padding: 15px
}
#side-menu li.active>a {
    background: rgba(0, 0, 0, .02)
}
#side-menu li a {
    color: #54667a;
    border-left: 3px solid #4f5467
}
#side-menu>li>a {
    padding: 15px 30px 15px 15px
}
#side-menu>li>a:focus,
#side-menu>li>a:hover {
    background: rgba(0, 0, 0, .1)
}
#side-menu>li>a.active {
    border-left: 3px solid #ff6849;
    color: #fff;
    background: rgba(0, 0, 0, 0)
}
#side-menu ul>li>a:hover {
    color: #ff6849;
    background: 0 0
}
#side-menu ul>li>a.active {
    color: #ff6849
}
.sidebar .arrow {
    position: absolute;
    right: 15px;
    top: 18px
}
.sidebar .nav-second-level .arrow {
    top: 12px
}
.sidebar .fa.arrow:before {
    content: "\f105"
}
.sidebar .active>a>span>.fa.arrow:before {
    content: "\f107"
}
.sidebar .nav-second-level li,
.sidebar .nav-third-level li {
    border-bottom: none!important
}
.sidebar .nav-second-level li a {
    padding-left: 43px
}
.sidebar .nav-third-level li a {
    padding-left: 52px
}
.content-wrapper .nicescroll-rails {
    display: none!important
}
.fix-sidebar .top-left-part {
    background: #ff6849
}
/*!
 *  Font Awesome 4.5.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */

@font-face {
    font-family: FontAwesome;
    src: url(../less/icons/font-awesome/fonts/fontawesome-webfont.eot?v=4.5.0);
    src: url(../less/icons/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.5.0) format('embedded-opentype'), url(../less/icons/font-awesome/fonts/fontawesome-webfont.woff2?v=4.5.0) format('woff2'), url(../less/icons/font-awesome/fonts/fontawesome-webfont.woff?v=4.5.0) format('woff'), url(../less/icons/font-awesome/fonts/fontawesome-webfont.ttf?v=4.5.0) format('truetype'), url(../less/icons/font-awesome/fonts/fontawesome-webfont.svg?v=4.5.0#fontawesomeregular) format('svg');
    font-weight: 400;
    font-style: normal
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.fa-lg {
    font-size: 1.33333333em;
    line-height: .75em;
    vertical-align: -15%
}
.fa-2x {
    font-size: 2em
}
.fa-3x {
    font-size: 3em
}
.fa-4x {
    font-size: 4em
}
.fa-5x {
    font-size: 5em
}
.fa-fw {
    text-align: center
}
.fa-ul {
    padding-left: 0;
    margin-left: 2.14285714em;
    list-style-type: none
}
.fa-ul>li {
    position: relative
}
.fa-li {
    position: absolute;
    left: -2.14285714em;
    width: 2.14285714em;
    top: .14285714em;
    text-align: center
}
.fa-li.fa-lg {
    left: -1.85714286em
}
.fa-border {
    padding: .2em .25em .15em;
    border: .08em solid #eee;
    border-radius: .1em
}
.fa-pull-left {
    float: left
}
.fa-pull-right {
    float: right
}
.fa.fa-pull-left {
    margin-right: .3em
}
.fa.fa-pull-right {
    margin-left: .3em
}
.pull-right {
    float: right
}
.pull-left {
    float: left
}
.fa.pull-left {
    margin-right: .3em
}
.fa.pull-right {
    margin-left: .3em
}
.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear
}
.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8)
}
@-webkit-keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}
@keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}
.fa-rotate-90 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=1);
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}
.fa-rotate-180 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg)
}
.fa-rotate-270 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=3);
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg)
}
.fa-flip-horizontal {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
    -webkit-transform: scale(-1, 1);
    -ms-transform: scale(-1, 1);
    transform: scale(-1, 1)
}
.fa-flip-vertical {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
    -webkit-transform: scale(1, -1);
    -ms-transform: scale(1, -1);
    transform: scale(1, -1)
}
:root .fa-flip-horizontal,
:root .fa-flip-vertical,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-rotate-90 {
    filter: none
}
.fa-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: middle
}
.fa-stack-1x,
.fa-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center
}
.fa-stack-1x {
    line-height: inherit
}
.fa-stack-2x {
    font-size: 2em
}
.fa-inverse {
    color: #fff
}
.fa-glass:before {
    content: "\f000"
}
.fa-music:before {
    content: "\f001"
}
.fa-search:before {
    content: "\f002"
}
.fa-envelope-o:before {
    content: "\f003"
}
.fa-heart:before {
    content: "\f004"
}
.fa-star:before {
    content: "\f005"
}
.fa-star-o:before {
    content: "\f006"
}
.fa-user:before {
    content: "\f007"
}
.fa-film:before {
    content: "\f008"
}
.fa-th-large:before {
    content: "\f009"
}
.fa-th:before {
    content: "\f00a"
}
.fa-th-list:before {
    content: "\f00b"
}
.fa-check:before {
    content: "\f00c"
}
.fa-close:before,
.fa-remove:before,
.fa-times:before {
    content: "\f00d"
}
.fa-search-plus:before {
    content: "\f00e"
}
.fa-search-minus:before {
    content: "\f010"
}
.fa-power-off:before {
    content: "\f011"
}
.fa-signal:before {
    content: "\f012"
}
.fa-cog:before,
.fa-gear:before {
    content: "\f013"
}
.fa-trash-o:before {
    content: "\f014"
}
.fa-home:before {
    content: "\f015"
}
.fa-file-o:before {
    content: "\f016"
}
.fa-clock-o:before {
    content: "\f017"
}
.fa-road:before {
    content: "\f018"
}
.fa-download:before {
    content: "\f019"
}
.fa-arrow-circle-o-down:before {
    content: "\f01a"
}
.fa-arrow-circle-o-up:before {
    content: "\f01b"
}
.fa-inbox:before {
    content: "\f01c"
}
.fa-play-circle-o:before {
    content: "\f01d"
}
.fa-repeat:before,
.fa-rotate-right:before {
    content: "\f01e"
}
.fa-refresh:before {
    content: "\f021"
}
.fa-list-alt:before {
    content: "\f022"
}
.fa-lock:before {
    content: "\f023"
}
.fa-flag:before {
    content: "\f024"
}
.fa-headphones:before {
    content: "\f025"
}
.fa-volume-off:before {
    content: "\f026"
}
.fa-volume-down:before {
    content: "\f027"
}
.fa-volume-up:before {
    content: "\f028"
}
.fa-qrcode:before {
    content: "\f029"
}
.fa-barcode:before {
    content: "\f02a"
}
.fa-tag:before {
    content: "\f02b"
}
.fa-tags:before {
    content: "\f02c"
}
.fa-book:before {
    content: "\f02d"
}
.fa-bookmark:before {
    content: "\f02e"
}
.fa-print:before {
    content: "\f02f"
}
.fa-camera:before {
    content: "\f030"
}
.fa-font:before {
    content: "\f031"
}
.fa-bold:before {
    content: "\f032"
}
.fa-italic:before {
    content: "\f033"
}
.fa-text-height:before {
    content: "\f034"
}
.fa-text-width:before {
    content: "\f035"
}
.fa-align-left:before {
    content: "\f036"
}
.fa-align-center:before {
    content: "\f037"
}
.fa-align-right:before {
    content: "\f038"
}
.fa-align-justify:before {
    content: "\f039"
}
.fa-list:before {
    content: "\f03a"
}
.fa-dedent:before,
.fa-outdent:before {
    content: "\f03b"
}
.fa-indent:before {
    content: "\f03c"
}
.fa-video-camera:before {
    content: "\f03d"
}
.fa-image:before,
.fa-photo:before,
.fa-picture-o:before {
    content: "\f03e"
}
.fa-pencil:before {
    content: "\f040"
}
.fa-map-marker:before {
    content: "\f041"
}
.fa-adjust:before {
    content: "\f042"
}
.fa-tint:before {
    content: "\f043"
}
.fa-edit:before,
.fa-pencil-square-o:before {
    content: "\f044"
}
.fa-share-square-o:before {
    content: "\f045"
}
.fa-check-square-o:before {
    content: "\f046"
}
.fa-arrows:before {
    content: "\f047"
}
.fa-step-backward:before {
    content: "\f048"
}
.fa-fast-backward:before {
    content: "\f049"
}
.fa-backward:before {
    content: "\f04a"
}
.fa-play:before {
    content: "\f04b"
}
.fa-pause:before {
    content: "\f04c"
}
.fa-stop:before {
    content: "\f04d"
}
.fa-forward:before {
    content: "\f04e"
}
.fa-fast-forward:before {
    content: "\f050"
}
.fa-step-forward:before {
    content: "\f051"
}
.fa-eject:before {
    content: "\f052"
}
.fa-chevron-left:before {
    content: "\f053"
}
.fa-chevron-right:before {
    content: "\f054"
}
.fa-plus-circle:before {
    content: "\f055"
}
.fa-minus-circle:before {
    content: "\f056"
}
.fa-times-circle:before {
    content: "\f057"
}
.fa-check-circle:before {
    content: "\f058"
}
.fa-question-circle:before {
    content: "\f059"
}
.fa-info-circle:before {
    content: "\f05a"
}
.fa-crosshairs:before {
    content: "\f05b"
}
.fa-times-circle-o:before {
    content: "\f05c"
}
.fa-check-circle-o:before {
    content: "\f05d"
}
.fa-ban:before {
    content: "\f05e"
}
.fa-arrow-left:before {
    content: "\f060"
}
.fa-arrow-right:before {
    content: "\f061"
}
.fa-arrow-up:before {
    content: "\f062"
}
.fa-arrow-down:before {
    content: "\f063"
}
.fa-mail-forward:before,
.fa-share:before {
    content: "\f064"
}
.fa-expand:before {
    content: "\f065"
}
.fa-compress:before {
    content: "\f066"
}
.fa-plus:before {
    content: "\f067"
}
.fa-minus:before {
    content: "\f068"
}
.fa-asterisk:before {
    content: "\f069"
}
.fa-exclamation-circle:before {
    content: "\f06a"
}
.fa-gift:before {
    content: "\f06b"
}
.fa-leaf:before {
    content: "\f06c"
}
.fa-fire:before {
    content: "\f06d"
}
.fa-eye:before {
    content: "\f06e"
}
.fa-eye-slash:before {
    content: "\f070"
}
.fa-exclamation-triangle:before,
.fa-warning:before {
    content: "\f071"
}
.fa-plane:before {
    content: "\f072"
}
.fa-calendar:before {
    content: "\f073"
}
.fa-random:before {
    content: "\f074"
}
.fa-comment:before {
    content: "\f075"
}
.fa-magnet:before {
    content: "\f076"
}
.fa-chevron-up:before {
    content: "\f077"
}
.fa-chevron-down:before {
    content: "\f078"
}
.fa-retweet:before {
    content: "\f079"
}
.fa-shopping-cart:before {
    content: "\f07a"
}
.fa-folder:before {
    content: "\f07b"
}
.fa-folder-open:before {
    content: "\f07c"
}
.fa-arrows-v:before {
    content: "\f07d"
}
.fa-arrows-h:before {
    content: "\f07e"
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
    content: "\f080"
}
.fa-twitter-square:before {
    content: "\f081"
}
.fa-facebook-square:before {
    content: "\f082"
}
.fa-camera-retro:before {
    content: "\f083"
}
.fa-key:before {
    content: "\f084"
}
.fa-cogs:before,
.fa-gears:before {
    content: "\f085"
}
.fa-comments:before {
    content: "\f086"
}
.fa-thumbs-o-up:before {
    content: "\f087"
}
.fa-thumbs-o-down:before {
    content: "\f088"
}
.fa-star-half:before {
    content: "\f089"
}
.fa-heart-o:before {
    content: "\f08a"
}
.fa-sign-out:before {
    content: "\f08b"
}
.fa-linkedin-square:before {
    content: "\f08c"
}
.fa-thumb-tack:before {
    content: "\f08d"
}
.fa-external-link:before {
    content: "\f08e"
}
.fa-sign-in:before {
    content: "\f090"
}
.fa-trophy:before {
    content: "\f091"
}
.fa-github-square:before {
    content: "\f092"
}
.fa-upload:before {
    content: "\f093"
}
.fa-lemon-o:before {
    content: "\f094"
}
.fa-phone:before {
    content: "\f095"
}
.fa-square-o:before {
    content: "\f096"
}
.fa-bookmark-o:before {
    content: "\f097"
}
.fa-phone-square:before {
    content: "\f098"
}
.fa-twitter:before {
    content: "\f099"
}
.fa-facebook-f:before,
.fa-facebook:before {
    content: "\f09a"
}
.fa-github:before {
    content: "\f09b"
}
.fa-unlock:before {
    content: "\f09c"
}
.fa-credit-card:before {
    content: "\f09d"
}
.fa-feed:before,
.fa-rss:before {
    content: "\f09e"
}
.fa-hdd-o:before {
    content: "\f0a0"
}
.fa-bullhorn:before {
    content: "\f0a1"
}
.fa-bell:before {
    content: "\f0f3"
}
.fa-certificate:before {
    content: "\f0a3"
}
.fa-hand-o-right:before {
    content: "\f0a4"
}
.fa-hand-o-left:before {
    content: "\f0a5"
}
.fa-hand-o-up:before {
    content: "\f0a6"
}
.fa-hand-o-down:before {
    content: "\f0a7"
}
.fa-arrow-circle-left:before {
    content: "\f0a8"
}
.fa-arrow-circle-right:before {
    content: "\f0a9"
}
.fa-arrow-circle-up:before {
    content: "\f0aa"
}
.fa-arrow-circle-down:before {
    content: "\f0ab"
}
.fa-globe:before {
    content: "\f0ac"
}
.fa-wrench:before {
    content: "\f0ad"
}
.fa-tasks:before {
    content: "\f0ae"
}
.fa-filter:before {
    content: "\f0b0"
}
.fa-briefcase:before {
    content: "\f0b1"
}
.fa-arrows-alt:before {
    content: "\f0b2"
}
.fa-group:before,
.fa-users:before {
    content: "\f0c0"
}
.fa-chain:before,
.fa-link:before {
    content: "\f0c1"
}
.fa-cloud:before {
    content: "\f0c2"
}
.fa-flask:before {
    content: "\f0c3"
}
.fa-cut:before,
.fa-scissors:before {
    content: "\f0c4"
}
.fa-copy:before,
.fa-files-o:before {
    content: "\f0c5"
}
.fa-paperclip:before {
    content: "\f0c6"
}
.fa-floppy-o:before,
.fa-save:before {
    content: "\f0c7"
}
.fa-square:before {
    content: "\f0c8"
}
.fa-bars:before,
.fa-navicon:before,
.fa-reorder:before {
    content: "\f0c9"
}
.fa-list-ul:before {
    content: "\f0ca"
}
.fa-list-ol:before {
    content: "\f0cb"
}
.fa-strikethrough:before {
    content: "\f0cc"
}
.fa-underline:before {
    content: "\f0cd"
}
.fa-table:before {
    content: "\f0ce"
}
.fa-magic:before {
    content: "\f0d0"
}
.fa-truck:before {
    content: "\f0d1"
}
.fa-pinterest:before {
    content: "\f0d2"
}
.fa-pinterest-square:before {
    content: "\f0d3"
}
.fa-google-plus-square:before {
    content: "\f0d4"
}
.fa-google-plus:before {
    content: "\f0d5"
}
.fa-money:before {
    content: "\f0d6"
}
.fa-caret-down:before {
    content: "\f0d7"
}
.fa-caret-up:before {
    content: "\f0d8"
}
.fa-caret-left:before {
    content: "\f0d9"
}
.fa-caret-right:before {
    content: "\f0da"
}
.fa-columns:before {
    content: "\f0db"
}
.fa-sort:before,
.fa-unsorted:before {
    content: "\f0dc"
}
.fa-sort-desc:before,
.fa-sort-down:before {
    content: "\f0dd"
}
.fa-sort-asc:before,
.fa-sort-up:before {
    content: "\f0de"
}
.fa-envelope:before {
    content: "\f0e0"
}
.fa-linkedin:before {
    content: "\f0e1"
}
.fa-rotate-left:before,
.fa-undo:before {
    content: "\f0e2"
}
.fa-gavel:before,
.fa-legal:before {
    content: "\f0e3"
}
.fa-dashboard:before,
.fa-tachometer:before {
    content: "\f0e4"
}
.fa-comment-o:before {
    content: "\f0e5"
}
.fa-comments-o:before {
    content: "\f0e6"
}
.fa-bolt:before,
.fa-flash:before {
    content: "\f0e7"
}
.fa-sitemap:before {
    content: "\f0e8"
}
.fa-umbrella:before {
    content: "\f0e9"
}
.fa-clipboard:before,
.fa-paste:before {
    content: "\f0ea"
}
.fa-lightbulb-o:before {
    content: "\f0eb"
}
.fa-exchange:before {
    content: "\f0ec"
}
.fa-cloud-download:before {
    content: "\f0ed"
}
.fa-cloud-upload:before {
    content: "\f0ee"
}
.fa-user-md:before {
    content: "\f0f0"
}
.fa-stethoscope:before {
    content: "\f0f1"
}
.fa-suitcase:before {
    content: "\f0f2"
}
.fa-bell-o:before {
    content: "\f0a2"
}
.fa-coffee:before {
    content: "\f0f4"
}
.fa-cutlery:before {
    content: "\f0f5"
}
.fa-file-text-o:before {
    content: "\f0f6"
}
.fa-building-o:before {
    content: "\f0f7"
}
.fa-hospital-o:before {
    content: "\f0f8"
}
.fa-ambulance:before {
    content: "\f0f9"
}
.fa-medkit:before {
    content: "\f0fa"
}
.fa-fighter-jet:before {
    content: "\f0fb"
}
.fa-beer:before {
    content: "\f0fc"
}
.fa-h-square:before {
    content: "\f0fd"
}
.fa-plus-square:before {
    content: "\f0fe"
}
.fa-angle-double-left:before {
    content: "\f100"
}
.fa-angle-double-right:before {
    content: "\f101"
}
.fa-angle-double-up:before {
    content: "\f102"
}
.fa-angle-double-down:before {
    content: "\f103"
}
.fa-angle-left:before {
    content: "\f104"
}
.fa-angle-right:before {
    content: "\f105"
}
.fa-angle-up:before {
    content: "\f106"
}
.fa-angle-down:before {
    content: "\f107"
}
.fa-desktop:before {
    content: "\f108"
}
.fa-laptop:before {
    content: "\f109"
}
.fa-tablet:before {
    content: "\f10a"
}
.fa-mobile-phone:before,
.fa-mobile:before {
    content: "\f10b"
}
.fa-circle-o:before {
    content: "\f10c"
}
.fa-quote-left:before {
    content: "\f10d"
}
.fa-quote-right:before {
    content: "\f10e"
}
.fa-spinner:before {
    content: "\f110"
}
.fa-circle:before {
    content: "\f111"
}
.fa-mail-reply:before,
.fa-reply:before {
    content: "\f112"
}
.fa-github-alt:before {
    content: "\f113"
}
.fa-folder-o:before {
    content: "\f114"
}
.fa-folder-open-o:before {
    content: "\f115"
}
.fa-smile-o:before {
    content: "\f118"
}
.fa-frown-o:before {
    content: "\f119"
}
.fa-meh-o:before {
    content: "\f11a"
}
.fa-gamepad:before {
    content: "\f11b"
}
.fa-keyboard-o:before {
    content: "\f11c"
}
.fa-flag-o:before {
    content: "\f11d"
}
.fa-flag-checkered:before {
    content: "\f11e"
}
.fa-terminal:before {
    content: "\f120"
}
.fa-code:before {
    content: "\f121"
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
    content: "\f122"
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
    content: "\f123"
}
.fa-location-arrow:before {
    content: "\f124"
}
.fa-crop:before {
    content: "\f125"
}
.fa-code-fork:before {
    content: "\f126"
}
.fa-chain-broken:before,
.fa-unlink:before {
    content: "\f127"
}
.fa-question:before {
    content: "\f128"
}
.fa-info:before {
    content: "\f129"
}
.fa-exclamation:before {
    content: "\f12a"
}
.fa-superscript:before {
    content: "\f12b"
}
.fa-subscript:before {
    content: "\f12c"
}
.fa-eraser:before {
    content: "\f12d"
}
.fa-puzzle-piece:before {
    content: "\f12e"
}
.fa-microphone:before {
    content: "\f130"
}
.fa-microphone-slash:before {
    content: "\f131"
}
.fa-shield:before {
    content: "\f132"
}
.fa-calendar-o:before {
    content: "\f133"
}
.fa-fire-extinguisher:before {
    content: "\f134"
}
.fa-rocket:before {
    content: "\f135"
}
.fa-maxcdn:before {
    content: "\f136"
}
.fa-chevron-circle-left:before {
    content: "\f137"
}
.fa-chevron-circle-right:before {
    content: "\f138"
}
.fa-chevron-circle-up:before {
    content: "\f139"
}
.fa-chevron-circle-down:before {
    content: "\f13a"
}
.fa-html5:before {
    content: "\f13b"
}
.fa-css3:before {
    content: "\f13c"
}
.fa-anchor:before {
    content: "\f13d"
}
.fa-unlock-alt:before {
    content: "\f13e"
}
.fa-bullseye:before {
    content: "\f140"
}
.fa-ellipsis-h:before {
    content: "\f141"
}
.fa-ellipsis-v:before {
    content: "\f142"
}
.fa-rss-square:before {
    content: "\f143"
}
.fa-play-circle:before {
    content: "\f144"
}
.fa-ticket:before {
    content: "\f145"
}
.fa-minus-square:before {
    content: "\f146"
}
.fa-minus-square-o:before {
    content: "\f147"
}
.fa-level-up:before {
    content: "\f148"
}
.fa-level-down:before {
    content: "\f149"
}
.fa-check-square:before {
    content: "\f14a"
}
.fa-pencil-square:before {
    content: "\f14b"
}
.fa-external-link-square:before {
    content: "\f14c"
}
.fa-share-square:before {
    content: "\f14d"
}
.fa-compass:before {
    content: "\f14e"
}
.fa-caret-square-o-down:before,
.fa-toggle-down:before {
    content: "\f150"
}
.fa-caret-square-o-up:before,
.fa-toggle-up:before {
    content: "\f151"
}
.fa-caret-square-o-right:before,
.fa-toggle-right:before {
    content: "\f152"
}
.fa-eur:before,
.fa-euro:before {
    content: "\f153"
}
.fa-gbp:before {
    content: "\f154"
}
.fa-dollar:before,
.fa-usd:before {
    content: "\f155"
}
.fa-inr:before,
.fa-rupee:before {
    content: "\f156"
}
.fa-cny:before,
.fa-jpy:before,
.fa-rmb:before,
.fa-yen:before {
    content: "\f157"
}
.fa-rouble:before,
.fa-rub:before,
.fa-ruble:before {
    content: "\f158"
}
.fa-krw:before,
.fa-won:before {
    content: "\f159"
}
.fa-bitcoin:before,
.fa-btc:before {
    content: "\f15a"
}
.fa-file:before {
    content: "\f15b"
}
.fa-file-text:before {
    content: "\f15c"
}
.fa-sort-alpha-asc:before {
    content: "\f15d"
}
.fa-sort-alpha-desc:before {
    content: "\f15e"
}
.fa-sort-amount-asc:before {
    content: "\f160"
}
.fa-sort-amount-desc:before {
    content: "\f161"
}
.fa-sort-numeric-asc:before {
    content: "\f162"
}
.fa-sort-numeric-desc:before {
    content: "\f163"
}
.fa-thumbs-up:before {
    content: "\f164"
}
.fa-thumbs-down:before {
    content: "\f165"
}
.fa-youtube-square:before {
    content: "\f166"
}
.fa-youtube:before {
    content: "\f167"
}
.fa-xing:before {
    content: "\f168"
}
.fa-xing-square:before {
    content: "\f169"
}
.fa-youtube-play:before {
    content: "\f16a"
}
.fa-dropbox:before {
    content: "\f16b"
}
.fa-stack-overflow:before {
    content: "\f16c"
}
.fa-instagram:before {
    content: "\f16d"
}
.fa-flickr:before {
    content: "\f16e"
}
.fa-adn:before {
    content: "\f170"
}
.fa-bitbucket:before {
    content: "\f171"
}
.fa-bitbucket-square:before {
    content: "\f172"
}
.fa-tumblr:before {
    content: "\f173"
}
.fa-tumblr-square:before {
    content: "\f174"
}
.fa-long-arrow-down:before {
    content: "\f175"
}
.fa-long-arrow-up:before {
    content: "\f176"
}
.fa-long-arrow-left:before {
    content: "\f177"
}
.fa-long-arrow-right:before {
    content: "\f178"
}
.fa-apple:before {
    content: "\f179"
}
.fa-windows:before {
    content: "\f17a"
}
.fa-android:before {
    content: "\f17b"
}
.fa-linux:before {
    content: "\f17c"
}
.fa-dribbble:before {
    content: "\f17d"
}
.fa-skype:before {
    content: "\f17e"
}
.fa-foursquare:before {
    content: "\f180"
}
.fa-trello:before {
    content: "\f181"
}
.fa-female:before {
    content: "\f182"
}
.fa-male:before {
    content: "\f183"
}
.fa-gittip:before,
.fa-gratipay:before {
    content: "\f184"
}
.fa-sun-o:before {
    content: "\f185"
}
.fa-moon-o:before {
    content: "\f186"
}
.fa-archive:before {
    content: "\f187"
}
.fa-bug:before {
    content: "\f188"
}
.fa-vk:before {
    content: "\f189"
}
.fa-weibo:before {
    content: "\f18a"
}
.fa-renren:before {
    content: "\f18b"
}
.fa-pagelines:before {
    content: "\f18c"
}
.fa-stack-exchange:before {
    content: "\f18d"
}
.fa-arrow-circle-o-right:before {
    content: "\f18e"
}
.fa-arrow-circle-o-left:before {
    content: "\f190"
}
.fa-caret-square-o-left:before,
.fa-toggle-left:before {
    content: "\f191"
}
.fa-dot-circle-o:before {
    content: "\f192"
}
.fa-wheelchair:before {
    content: "\f193"
}
.fa-vimeo-square:before {
    content: "\f194"
}
.fa-try:before,
.fa-turkish-lira:before {
    content: "\f195"
}
.fa-plus-square-o:before {
    content: "\f196"
}
.fa-space-shuttle:before {
    content: "\f197"
}
.fa-slack:before {
    content: "\f198"
}
.fa-envelope-square:before {
    content: "\f199"
}
.fa-wordpress:before {
    content: "\f19a"
}
.fa-openid:before {
    content: "\f19b"
}
.fa-bank:before,
.fa-institution:before,
.fa-university:before {
    content: "\f19c"
}
.fa-graduation-cap:before,
.fa-mortar-board:before {
    content: "\f19d"
}
.fa-yahoo:before {
    content: "\f19e"
}
.fa-google:before {
    content: "\f1a0"
}
.fa-reddit:before {
    content: "\f1a1"
}
.fa-reddit-square:before {
    content: "\f1a2"
}
.fa-stumbleupon-circle:before {
    content: "\f1a3"
}
.fa-stumbleupon:before {
    content: "\f1a4"
}
.fa-delicious:before {
    content: "\f1a5"
}
.fa-digg:before {
    content: "\f1a6"
}
.fa-pied-piper:before {
    content: "\f1a7"
}
.fa-pied-piper-alt:before {
    content: "\f1a8"
}
.fa-drupal:before {
    content: "\f1a9"
}
.fa-joomla:before {
    content: "\f1aa"
}
.fa-language:before {
    content: "\f1ab"
}
.fa-fax:before {
    content: "\f1ac"
}
.fa-building:before {
    content: "\f1ad"
}
.fa-child:before {
    content: "\f1ae"
}
.fa-paw:before {
    content: "\f1b0"
}
.fa-spoon:before {
    content: "\f1b1"
}
.fa-cube:before {
    content: "\f1b2"
}
.fa-cubes:before {
    content: "\f1b3"
}
.fa-behance:before {
    content: "\f1b4"
}
.fa-behance-square:before {
    content: "\f1b5"
}
.fa-steam:before {
    content: "\f1b6"
}
.fa-steam-square:before {
    content: "\f1b7"
}
.fa-recycle:before {
    content: "\f1b8"
}
.fa-automobile:before,
.fa-car:before {
    content: "\f1b9"
}
.fa-cab:before,
.fa-taxi:before {
    content: "\f1ba"
}
.fa-tree:before {
    content: "\f1bb"
}
.fa-spotify:before {
    content: "\f1bc"
}
.fa-deviantart:before {
    content: "\f1bd"
}
.fa-soundcloud:before {
    content: "\f1be"
}
.fa-database:before {
    content: "\f1c0"
}
.fa-file-pdf-o:before {
    content: "\f1c1"
}
.fa-file-word-o:before {
    content: "\f1c2"
}
.fa-file-excel-o:before {
    content: "\f1c3"
}
.fa-file-powerpoint-o:before {
    content: "\f1c4"
}
.fa-file-image-o:before,
.fa-file-photo-o:before,
.fa-file-picture-o:before {
    content: "\f1c5"
}
.fa-file-archive-o:before,
.fa-file-zip-o:before {
    content: "\f1c6"
}
.fa-file-audio-o:before,
.fa-file-sound-o:before {
    content: "\f1c7"
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
    content: "\f1c8"
}
.fa-file-code-o:before {
    content: "\f1c9"
}
.fa-vine:before {
    content: "\f1ca"
}
.fa-codepen:before {
    content: "\f1cb"
}
.fa-jsfiddle:before {
    content: "\f1cc"
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-ring:before,
.fa-life-saver:before,
.fa-support:before {
    content: "\f1cd"
}
.fa-circle-o-notch:before {
    content: "\f1ce"
}
.fa-ra:before,
.fa-rebel:before {
    content: "\f1d0"
}
.fa-empire:before,
.fa-ge:before {
    content: "\f1d1"
}
.fa-git-square:before {
    content: "\f1d2"
}
.fa-git:before {
    content: "\f1d3"
}
.fa-hacker-news:before,
.fa-y-combinator-square:before,
.fa-yc-square:before {
    content: "\f1d4"
}
.fa-tencent-weibo:before {
    content: "\f1d5"
}
.fa-qq:before {
    content: "\f1d6"
}
.fa-wechat:before,
.fa-weixin:before {
    content: "\f1d7"
}
.fa-paper-plane:before,
.fa-send:before {
    content: "\f1d8"
}
.fa-paper-plane-o:before,
.fa-send-o:before {
    content: "\f1d9"
}
.fa-history:before {
    content: "\f1da"
}
.fa-circle-thin:before {
    content: "\f1db"
}
.fa-header:before {
    content: "\f1dc"
}
.fa-paragraph:before {
    content: "\f1dd"
}
.fa-sliders:before {
    content: "\f1de"
}
.fa-share-alt:before {
    content: "\f1e0"
}
.fa-share-alt-square:before {
    content: "\f1e1"
}
.fa-bomb:before {
    content: "\f1e2"
}
.fa-futbol-o:before,
.fa-soccer-ball-o:before {
    content: "\f1e3"
}
.fa-tty:before {
    content: "\f1e4"
}
.fa-binoculars:before {
    content: "\f1e5"
}
.fa-plug:before {
    content: "\f1e6"
}
.fa-slideshare:before {
    content: "\f1e7"
}
.fa-twitch:before {
    content: "\f1e8"
}
.fa-yelp:before {
    content: "\f1e9"
}
.fa-newspaper-o:before {
    content: "\f1ea"
}
.fa-wifi:before {
    content: "\f1eb"
}
.fa-calculator:before {
    content: "\f1ec"
}
.fa-paypal:before {
    content: "\f1ed"
}
.fa-google-wallet:before {
    content: "\f1ee"
}
.fa-cc-visa:before {
    content: "\f1f0"
}
.fa-cc-mastercard:before {
    content: "\f1f1"
}
.fa-cc-discover:before {
    content: "\f1f2"
}
.fa-cc-amex:before {
    content: "\f1f3"
}
.fa-cc-paypal:before {
    content: "\f1f4"
}
.fa-cc-stripe:before {
    content: "\f1f5"
}
.fa-bell-slash:before {
    content: "\f1f6"
}
.fa-bell-slash-o:before {
    content: "\f1f7"
}
.fa-trash:before {
    content: "\f1f8"
}
.fa-copyright:before {
    content: "\f1f9"
}
.fa-at:before {
    content: "\f1fa"
}
.fa-eyedropper:before {
    content: "\f1fb"
}
.fa-paint-brush:before {
    content: "\f1fc"
}
.fa-birthday-cake:before {
    content: "\f1fd"
}
.fa-area-chart:before {
    content: "\f1fe"
}
.fa-pie-chart:before {
    content: "\f200"
}
.fa-line-chart:before {
    content: "\f201"
}
.fa-lastfm:before {
    content: "\f202"
}
.fa-lastfm-square:before {
    content: "\f203"
}
.fa-toggle-off:before {
    content: "\f204"
}
.fa-toggle-on:before {
    content: "\f205"
}
.fa-bicycle:before {
    content: "\f206"
}
.fa-bus:before {
    content: "\f207"
}
.fa-ioxhost:before {
    content: "\f208"
}
.fa-angellist:before {
    content: "\f209"
}
.fa-cc:before {
    content: "\f20a"
}
.fa-ils:before,
.fa-shekel:before,
.fa-sheqel:before {
    content: "\f20b"
}
.fa-meanpath:before {
    content: "\f20c"
}
.fa-buysellads:before {
    content: "\f20d"
}
.fa-connectdevelop:before {
    content: "\f20e"
}
.fa-dashcube:before {
    content: "\f210"
}
.fa-forumbee:before {
    content: "\f211"
}
.fa-leanpub:before {
    content: "\f212"
}
.fa-sellsy:before {
    content: "\f213"
}
.fa-shirtsinbulk:before {
    content: "\f214"
}
.fa-simplybuilt:before {
    content: "\f215"
}
.fa-skyatlas:before {
    content: "\f216"
}
.fa-cart-plus:before {
    content: "\f217"
}
.fa-cart-arrow-down:before {
    content: "\f218"
}
.fa-diamond:before {
    content: "\f219"
}
.fa-ship:before {
    content: "\f21a"
}
.fa-user-secret:before {
    content: "\f21b"
}
.fa-motorcycle:before {
    content: "\f21c"
}
.fa-street-view:before {
    content: "\f21d"
}
.fa-heartbeat:before {
    content: "\f21e"
}
.fa-venus:before {
    content: "\f221"
}
.fa-mars:before {
    content: "\f222"
}
.fa-mercury:before {
    content: "\f223"
}
.fa-intersex:before,
.fa-transgender:before {
    content: "\f224"
}
.fa-transgender-alt:before {
    content: "\f225"
}
.fa-venus-double:before {
    content: "\f226"
}
.fa-mars-double:before {
    content: "\f227"
}
.fa-venus-mars:before {
    content: "\f228"
}
.fa-mars-stroke:before {
    content: "\f229"
}
.fa-mars-stroke-v:before {
    content: "\f22a"
}
.fa-mars-stroke-h:before {
    content: "\f22b"
}
.fa-neuter:before {
    content: "\f22c"
}
.fa-genderless:before {
    content: "\f22d"
}
.fa-facebook-official:before {
    content: "\f230"
}
.fa-pinterest-p:before {
    content: "\f231"
}
.fa-whatsapp:before {
    content: "\f232"
}
.fa-server:before {
    content: "\f233"
}
.fa-user-plus:before {
    content: "\f234"
}
.fa-user-times:before {
    content: "\f235"
}
.fa-bed:before,
.fa-hotel:before {
    content: "\f236"
}
.fa-viacoin:before {
    content: "\f237"
}
.fa-train:before {
    content: "\f238"
}
.fa-subway:before {
    content: "\f239"
}
.fa-medium:before {
    content: "\f23a"
}
.fa-y-combinator:before,
.fa-yc:before {
    content: "\f23b"
}
.fa-optin-monster:before {
    content: "\f23c"
}
.fa-opencart:before {
    content: "\f23d"
}
.fa-expeditedssl:before {
    content: "\f23e"
}
.fa-battery-4:before,
.fa-battery-full:before {
    content: "\f240"
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
    content: "\f241"
}
.fa-battery-2:before,
.fa-battery-half:before {
    content: "\f242"
}
.fa-battery-1:before,
.fa-battery-quarter:before {
    content: "\f243"
}
.fa-battery-0:before,
.fa-battery-empty:before {
    content: "\f244"
}
.fa-mouse-pointer:before {
    content: "\f245"
}
.fa-i-cursor:before {
    content: "\f246"
}
.fa-object-group:before {
    content: "\f247"
}
.fa-object-ungroup:before {
    content: "\f248"
}
.fa-sticky-note:before {
    content: "\f249"
}
.fa-sticky-note-o:before {
    content: "\f24a"
}
.fa-cc-jcb:before {
    content: "\f24b"
}
.fa-cc-diners-club:before {
    content: "\f24c"
}
.fa-clone:before {
    content: "\f24d"
}
.fa-balance-scale:before {
    content: "\f24e"
}
.fa-hourglass-o:before {
    content: "\f250"
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
    content: "\f251"
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
    content: "\f252"
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
    content: "\f253"
}
.fa-hourglass:before {
    content: "\f254"
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
    content: "\f255"
}
.fa-hand-paper-o:before,
.fa-hand-stop-o:before {
    content: "\f256"
}
.fa-hand-scissors-o:before {
    content: "\f257"
}
.fa-hand-lizard-o:before {
    content: "\f258"
}
.fa-hand-spock-o:before {
    content: "\f259"
}
.fa-hand-pointer-o:before {
    content: "\f25a"
}
.fa-hand-peace-o:before {
    content: "\f25b"
}
.fa-trademark:before {
    content: "\f25c"
}
.fa-registered:before {
    content: "\f25d"
}
.fa-creative-commons:before {
    content: "\f25e"
}
.fa-gg:before {
    content: "\f260"
}
.fa-gg-circle:before {
    content: "\f261"
}
.fa-tripadvisor:before {
    content: "\f262"
}
.fa-odnoklassniki:before {
    content: "\f263"
}
.fa-odnoklassniki-square:before {
    content: "\f264"
}
.fa-get-pocket:before {
    content: "\f265"
}
.fa-wikipedia-w:before {
    content: "\f266"
}
.fa-safari:before {
    content: "\f267"
}
.fa-chrome:before {
    content: "\f268"
}
.fa-firefox:before {
    content: "\f269"
}
.fa-opera:before {
    content: "\f26a"
}
.fa-internet-explorer:before {
    content: "\f26b"
}
.fa-television:before,
.fa-tv:before {
    content: "\f26c"
}
.fa-contao:before {
    content: "\f26d"
}
.fa-500px:before {
    content: "\f26e"
}
.fa-amazon:before {
    content: "\f270"
}
.fa-calendar-plus-o:before {
    content: "\f271"
}
.fa-calendar-minus-o:before {
    content: "\f272"
}
.fa-calendar-times-o:before {
    content: "\f273"
}
.fa-calendar-check-o:before {
    content: "\f274"
}
.fa-industry:before {
    content: "\f275"
}
.fa-map-pin:before {
    content: "\f276"
}
.fa-map-signs:before {
    content: "\f277"
}
.fa-map-o:before {
    content: "\f278"
}
.fa-map:before {
    content: "\f279"
}
.fa-commenting:before {
    content: "\f27a"
}
.fa-commenting-o:before {
    content: "\f27b"
}
.fa-houzz:before {
    content: "\f27c"
}
.fa-vimeo:before {
    content: "\f27d"
}
.fa-black-tie:before {
    content: "\f27e"
}
.fa-fonticons:before {
    content: "\f280"
}
.fa-reddit-alien:before {
    content: "\f281"
}
.fa-edge:before {
    content: "\f282"
}
.fa-credit-card-alt:before {
    content: "\f283"
}
.fa-codiepie:before {
    content: "\f284"
}
.fa-modx:before {
    content: "\f285"
}
.fa-fort-awesome:before {
    content: "\f286"
}
.fa-usb:before {
    content: "\f287"
}
.fa-product-hunt:before {
    content: "\f288"
}
.fa-mixcloud:before {
    content: "\f289"
}
.fa-scribd:before {
    content: "\f28a"
}
.fa-pause-circle:before {
    content: "\f28b"
}
.fa-pause-circle-o:before {
    content: "\f28c"
}
.fa-stop-circle:before {
    content: "\f28d"
}
.fa-stop-circle-o:before {
    content: "\f28e"
}
.fa-shopping-bag:before {
    content: "\f290"
}
.fa-shopping-basket:before {
    content: "\f291"
}
.fa-hashtag:before {
    content: "\f292"
}
.fa-bluetooth:before {
    content: "\f293"
}
.fa-bluetooth-b:before {
    content: "\f294"
}
.fa-percent:before {
    content: "\f295"
}
@font-face {
    font-family: themify;
    src: url(../less/icons/themify-icons/fonts/themify.eot?);
    src: url(../less/icons/themify-icons/fonts/themify.eot?#iefix) format('embedded-opentype'), url(../less/icons/themify-icons/fonts/themify.woff) format('woff'), url(../less/icons/themify-icons/fonts/themify.ttf?) format('truetype'), url(../less/icons/themify-icons/fonts/themify.svg?#themify) format('svg');
    font-weight: 400;
    font-style: normal
}
[class*=" ti-"],
[class^=ti-] {
    font-family: themify;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.ti-wand:before {
    content: "\e600"
}
.ti-volume:before {
    content: "\e601"
}
.ti-user:before {
    content: "\e602"
}
.ti-unlock:before {
    content: "\e603"
}
.ti-unlink:before {
    content: "\e604"
}
.ti-trash:before {
    content: "\e605"
}
.ti-thought:before {
    content: "\e606"
}
.ti-target:before {
    content: "\e607"
}
.ti-tag:before {
    content: "\e608"
}
.ti-tablet:before {
    content: "\e609"
}
.ti-star:before {
    content: "\e60a"
}
.ti-spray:before {
    content: "\e60b"
}
.ti-signal:before {
    content: "\e60c"
}
.ti-shopping-cart:before {
    content: "\e60d"
}
.ti-shopping-cart-full:before {
    content: "\e60e"
}
.ti-settings:before {
    content: "\e60f"
}
.ti-search:before {
    content: "\e610"
}
.ti-zoom-in:before {
    content: "\e611"
}
.ti-zoom-out:before {
    content: "\e612"
}
.ti-cut:before {
    content: "\e613"
}
.ti-ruler:before {
    content: "\e614"
}
.ti-ruler-pencil:before {
    content: "\e615"
}
.ti-ruler-alt:before {
    content: "\e616"
}
.ti-bookmark:before {
    content: "\e617"
}
.ti-bookmark-alt:before {
    content: "\e618"
}
.ti-reload:before {
    content: "\e619"
}
.ti-plus:before {
    content: "\e61a"
}
.ti-pin:before {
    content: "\e61b"
}
.ti-pencil:before {
    content: "\e61c"
}
.ti-pencil-alt:before {
    content: "\e61d"
}
.ti-paint-roller:before {
    content: "\e61e"
}
.ti-paint-bucket:before {
    content: "\e61f"
}
.ti-na:before {
    content: "\e620"
}
.ti-mobile:before {
    content: "\e621"
}
.ti-minus:before {
    content: "\e622"
}
.ti-medall:before {
    content: "\e623"
}
.ti-medall-alt:before {
    content: "\e624"
}
.ti-marker:before {
    content: "\e625"
}
.ti-marker-alt:before {
    content: "\e626"
}
.ti-arrow-up:before {
    content: "\e627"
}
.ti-arrow-right:before {
    content: "\e628"
}
.ti-arrow-left:before {
    content: "\e629"
}
.ti-arrow-down:before {
    content: "\e62a"
}
.ti-lock:before {
    content: "\e62b"
}
.ti-location-arrow:before {
    content: "\e62c"
}
.ti-link:before {
    content: "\e62d"
}
.ti-layout:before {
    content: "\e62e"
}
.ti-layers:before {
    content: "\e62f"
}
.ti-layers-alt:before {
    content: "\e630"
}
.ti-key:before {
    content: "\e631"
}
.ti-import:before {
    content: "\e632"
}
.ti-image:before {
    content: "\e633"
}
.ti-heart:before {
    content: "\e634"
}
.ti-heart-broken:before {
    content: "\e635"
}
.ti-hand-stop:before {
    content: "\e636"
}
.ti-hand-open:before {
    content: "\e637"
}
.ti-hand-drag:before {
    content: "\e638"
}
.ti-folder:before {
    content: "\e639"
}
.ti-flag:before {
    content: "\e63a"
}
.ti-flag-alt:before {
    content: "\e63b"
}
.ti-flag-alt-2:before {
    content: "\e63c"
}
.ti-eye:before {
    content: "\e63d"
}
.ti-export:before {
    content: "\e63e"
}
.ti-exchange-vertical:before {
    content: "\e63f"
}
.ti-desktop:before {
    content: "\e640"
}
.ti-cup:before {
    content: "\e641"
}
.ti-crown:before {
    content: "\e642"
}
.ti-comments:before {
    content: "\e643"
}
.ti-comment:before {
    content: "\e644"
}
.ti-comment-alt:before {
    content: "\e645"
}
.ti-close:before {
    content: "\e646"
}
.ti-clip:before {
    content: "\e647"
}
.ti-angle-up:before {
    content: "\e648"
}
.ti-angle-right:before {
    content: "\e649"
}
.ti-angle-left:before {
    content: "\e64a"
}
.ti-angle-down:before {
    content: "\e64b"
}
.ti-check:before {
    content: "\e64c"
}
.ti-check-box:before {
    content: "\e64d"
}
.ti-camera:before {
    content: "\e64e"
}
.ti-announcement:before {
    content: "\e64f"
}
.ti-brush:before {
    content: "\e650"
}
.ti-briefcase:before {
    content: "\e651"
}
.ti-bolt:before {
    content: "\e652"
}
.ti-bolt-alt:before {
    content: "\e653"
}
.ti-blackboard:before {
    content: "\e654"
}
.ti-bag:before {
    content: "\e655"
}
.ti-move:before {
    content: "\e656"
}
.ti-arrows-vertical:before {
    content: "\e657"
}
.ti-arrows-horizontal:before {
    content: "\e658"
}
.ti-fullscreen:before {
    content: "\e659"
}
.ti-arrow-top-right:before {
    content: "\e65a"
}
.ti-arrow-top-left:before {
    content: "\e65b"
}
.ti-arrow-circle-up:before {
    content: "\e65c"
}
.ti-arrow-circle-right:before {
    content: "\e65d"
}
.ti-arrow-circle-left:before {
    content: "\e65e"
}
.ti-arrow-circle-down:before {
    content: "\e65f"
}
.ti-angle-double-up:before {
    content: "\e660"
}
.ti-angle-double-right:before {
    content: "\e661"
}
.ti-angle-double-left:before {
    content: "\e662"
}
.ti-angle-double-down:before {
    content: "\e663"
}
.ti-zip:before {
    content: "\e664"
}
.ti-world:before {
    content: "\e665"
}
.ti-wheelchair:before {
    content: "\e666"
}
.ti-view-list:before {
    content: "\e667"
}
.ti-view-list-alt:before {
    content: "\e668"
}
.ti-view-grid:before {
    content: "\e669"
}
.ti-uppercase:before {
    content: "\e66a"
}
.ti-upload:before {
    content: "\e66b"
}
.ti-underline:before {
    content: "\e66c"
}
.ti-truck:before {
    content: "\e66d"
}
.ti-timer:before {
    content: "\e66e"
}
.ti-ticket:before {
    content: "\e66f"
}
.ti-thumb-up:before {
    content: "\e670"
}
.ti-thumb-down:before {
    content: "\e671"
}
.ti-text:before {
    content: "\e672"
}
.ti-stats-up:before {
    content: "\e673"
}
.ti-stats-down:before {
    content: "\e674"
}
.ti-split-v:before {
    content: "\e675"
}
.ti-split-h:before {
    content: "\e676"
}
.ti-smallcap:before {
    content: "\e677"
}
.ti-shine:before {
    content: "\e678"
}
.ti-shift-right:before {
    content: "\e679"
}
.ti-shift-left:before {
    content: "\e67a"
}
.ti-shield:before {
    content: "\e67b"
}
.ti-notepad:before {
    content: "\e67c"
}
.ti-server:before {
    content: "\e67d"
}
.ti-quote-right:before {
    content: "\e67e"
}
.ti-quote-left:before {
    content: "\e67f"
}
.ti-pulse:before {
    content: "\e680"
}
.ti-printer:before {
    content: "\e681"
}
.ti-power-off:before {
    content: "\e682"
}
.ti-plug:before {
    content: "\e683"
}
.ti-pie-chart:before {
    content: "\e684"
}
.ti-paragraph:before {
    content: "\e685"
}
.ti-panel:before {
    content: "\e686"
}
.ti-package:before {
    content: "\e687"
}
.ti-music:before {
    content: "\e688"
}
.ti-music-alt:before {
    content: "\e689"
}
.ti-mouse:before {
    content: "\e68a"
}
.ti-mouse-alt:before {
    content: "\e68b"
}
.ti-money:before {
    content: "\e68c"
}
.ti-microphone:before {
    content: "\e68d"
}
.ti-menu:before {
    content: "\e68e"
}
.ti-menu-alt:before {
    content: "\e68f"
}
.ti-map:before {
    content: "\e690"
}
.ti-map-alt:before {
    content: "\e691"
}
.ti-loop:before {
    content: "\e692"
}
.ti-location-pin:before {
    content: "\e693"
}
.ti-list:before {
    content: "\e694"
}
.ti-light-bulb:before {
    content: "\e695"
}
.ti-Italic:before {
    content: "\e696"
}
.ti-info:before {
    content: "\e697"
}
.ti-infinite:before {
    content: "\e698"
}
.ti-id-badge:before {
    content: "\e699"
}
.ti-hummer:before {
    content: "\e69a"
}
.ti-home:before {
    content: "\e69b"
}
.ti-help:before {
    content: "\e69c"
}
.ti-headphone:before {
    content: "\e69d"
}
.ti-harddrives:before {
    content: "\e69e"
}
.ti-harddrive:before {
    content: "\e69f"
}
.ti-gift:before {
    content: "\e6a0"
}
.ti-game:before {
    content: "\e6a1"
}
.ti-filter:before {
    content: "\e6a2"
}
.ti-files:before {
    content: "\e6a3"
}
.ti-file:before {
    content: "\e6a4"
}
.ti-eraser:before {
    content: "\e6a5"
}
.ti-envelope:before {
    content: "\e6a6"
}
.ti-download:before {
    content: "\e6a7"
}
.ti-direction:before {
    content: "\e6a8"
}
.ti-direction-alt:before {
    content: "\e6a9"
}
.ti-dashboard:before {
    content: "\e6aa"
}
.ti-control-stop:before {
    content: "\e6ab"
}
.ti-control-shuffle:before {
    content: "\e6ac"
}
.ti-control-play:before {
    content: "\e6ad"
}
.ti-control-pause:before {
    content: "\e6ae"
}
.ti-control-forward:before {
    content: "\e6af"
}
.ti-control-backward:before {
    content: "\e6b0"
}
.ti-cloud:before {
    content: "\e6b1"
}
.ti-cloud-up:before {
    content: "\e6b2"
}
.ti-cloud-down:before {
    content: "\e6b3"
}
.ti-clipboard:before {
    content: "\e6b4"
}
.ti-car:before {
    content: "\e6b5"
}
.ti-calendar:before {
    content: "\e6b6"
}
.ti-book:before {
    content: "\e6b7"
}
.ti-bell:before {
    content: "\e6b8"
}
.ti-basketball:before {
    content: "\e6b9"
}
.ti-bar-chart:before {
    content: "\e6ba"
}
.ti-bar-chart-alt:before {
    content: "\e6bb"
}
.ti-back-right:before {
    content: "\e6bc"
}
.ti-back-left:before {
    content: "\e6bd"
}
.ti-arrows-corner:before {
    content: "\e6be"
}
.ti-archive:before {
    content: "\e6bf"
}
.ti-anchor:before {
    content: "\e6c0"
}
.ti-align-right:before {
    content: "\e6c1"
}
.ti-align-left:before {
    content: "\e6c2"
}
.ti-align-justify:before {
    content: "\e6c3"
}
.ti-align-center:before {
    content: "\e6c4"
}
.ti-alert:before {
    content: "\e6c5"
}
.ti-alarm-clock:before {
    content: "\e6c6"
}
.ti-agenda:before {
    content: "\e6c7"
}
.ti-write:before {
    content: "\e6c8"
}
.ti-window:before {
    content: "\e6c9"
}
.ti-widgetized:before {
    content: "\e6ca"
}
.ti-widget:before {
    content: "\e6cb"
}
.ti-widget-alt:before {
    content: "\e6cc"
}
.ti-wallet:before {
    content: "\e6cd"
}
.ti-video-clapper:before {
    content: "\e6ce"
}
.ti-video-camera:before {
    content: "\e6cf"
}
.ti-vector:before {
    content: "\e6d0"
}
.ti-themify-logo:before {
    content: "\e6d1"
}
.ti-themify-favicon:before {
    content: "\e6d2"
}
.ti-themify-favicon-alt:before {
    content: "\e6d3"
}
.ti-support:before {
    content: "\e6d4"
}
.ti-stamp:before {
    content: "\e6d5"
}
.ti-split-v-alt:before {
    content: "\e6d6"
}
.ti-slice:before {
    content: "\e6d7"
}
.ti-shortcode:before {
    content: "\e6d8"
}
.ti-shift-right-alt:before {
    content: "\e6d9"
}
.ti-shift-left-alt:before {
    content: "\e6da"
}
.ti-ruler-alt-2:before {
    content: "\e6db"
}
.ti-receipt:before {
    content: "\e6dc"
}
.ti-pin2:before {
    content: "\e6dd"
}
.ti-pin-alt:before {
    content: "\e6de"
}
.ti-pencil-alt2:before {
    content: "\e6df"
}
.ti-palette:before {
    content: "\e6e0"
}
.ti-more:before {
    content: "\e6e1"
}
.ti-more-alt:before {
    content: "\e6e2"
}
.ti-microphone-alt:before {
    content: "\e6e3"
}
.ti-magnet:before {
    content: "\e6e4"
}
.ti-line-double:before {
    content: "\e6e5"
}
.ti-line-dotted:before {
    content: "\e6e6"
}
.ti-line-dashed:before {
    content: "\e6e7"
}
.ti-layout-width-full:before {
    content: "\e6e8"
}
.ti-layout-width-default:before {
    content: "\e6e9"
}
.ti-layout-width-default-alt:before {
    content: "\e6ea"
}
.ti-layout-tab:before {
    content: "\e6eb"
}
.ti-layout-tab-window:before {
    content: "\e6ec"
}
.ti-layout-tab-v:before {
    content: "\e6ed"
}
.ti-layout-tab-min:before {
    content: "\e6ee"
}
.ti-layout-slider:before {
    content: "\e6ef"
}
.ti-layout-slider-alt:before {
    content: "\e6f0"
}
.ti-layout-sidebar-right:before {
    content: "\e6f1"
}
.ti-layout-sidebar-none:before {
    content: "\e6f2"
}
.ti-layout-sidebar-left:before {
    content: "\e6f3"
}
.ti-layout-placeholder:before {
    content: "\e6f4"
}
.ti-layout-menu:before {
    content: "\e6f5"
}
.ti-layout-menu-v:before {
    content: "\e6f6"
}
.ti-layout-menu-separated:before {
    content: "\e6f7"
}
.ti-layout-menu-full:before {
    content: "\e6f8"
}
.ti-layout-media-right-alt:before {
    content: "\e6f9"
}
.ti-layout-media-right:before {
    content: "\e6fa"
}
.ti-layout-media-overlay:before {
    content: "\e6fb"
}
.ti-layout-media-overlay-alt:before {
    content: "\e6fc"
}
.ti-layout-media-overlay-alt-2:before {
    content: "\e6fd"
}
.ti-layout-media-left-alt:before {
    content: "\e6fe"
}
.ti-layout-media-left:before {
    content: "\e6ff"
}
.ti-layout-media-center-alt:before {
    content: "\e700"
}
.ti-layout-media-center:before {
    content: "\e701"
}
.ti-layout-list-thumb:before {
    content: "\e702"
}
.ti-layout-list-thumb-alt:before {
    content: "\e703"
}
.ti-layout-list-post:before {
    content: "\e704"
}
.ti-layout-list-large-image:before {
    content: "\e705"
}
.ti-layout-line-solid:before {
    content: "\e706"
}
.ti-layout-grid4:before {
    content: "\e707"
}
.ti-layout-grid3:before {
    content: "\e708"
}
.ti-layout-grid2:before {
    content: "\e709"
}
.ti-layout-grid2-thumb:before {
    content: "\e70a"
}
.ti-layout-cta-right:before {
    content: "\e70b"
}
.ti-layout-cta-left:before {
    content: "\e70c"
}
.ti-layout-cta-center:before {
    content: "\e70d"
}
.ti-layout-cta-btn-right:before {
    content: "\e70e"
}
.ti-layout-cta-btn-left:before {
    content: "\e70f"
}
.ti-layout-column4:before {
    content: "\e710"
}
.ti-layout-column3:before {
    content: "\e711"
}
.ti-layout-column2:before {
    content: "\e712"
}
.ti-layout-accordion-separated:before {
    content: "\e713"
}
.ti-layout-accordion-merged:before {
    content: "\e714"
}
.ti-layout-accordion-list:before {
    content: "\e715"
}
.ti-ink-pen:before {
    content: "\e716"
}
.ti-info-alt:before {
    content: "\e717"
}
.ti-help-alt:before {
    content: "\e718"
}
.ti-headphone-alt:before {
    content: "\e719"
}
.ti-hand-point-up:before {
    content: "\e71a"
}
.ti-hand-point-right:before {
    content: "\e71b"
}
.ti-hand-point-left:before {
    content: "\e71c"
}
.ti-hand-point-down:before {
    content: "\e71d"
}
.ti-gallery:before {
    content: "\e71e"
}
.ti-face-smile:before {
    content: "\e71f"
}
.ti-face-sad:before {
    content: "\e720"
}
.ti-credit-card:before {
    content: "\e721"
}
.ti-control-skip-forward:before {
    content: "\e722"
}
.ti-control-skip-backward:before {
    content: "\e723"
}
.ti-control-record:before {
    content: "\e724"
}
.ti-control-eject:before {
    content: "\e725"
}
.ti-comments-smiley:before {
    content: "\e726"
}
.ti-brush-alt:before {
    content: "\e727"
}
.ti-youtube:before {
    content: "\e728"
}
.ti-vimeo:before {
    content: "\e729"
}
.ti-twitter:before {
    content: "\e72a"
}
.ti-time:before {
    content: "\e72b"
}
.ti-tumblr:before {
    content: "\e72c"
}
.ti-skype:before {
    content: "\e72d"
}
.ti-share:before {
    content: "\e72e"
}
.ti-share-alt:before {
    content: "\e72f"
}
.ti-rocket:before {
    content: "\e730"
}
.ti-pinterest:before {
    content: "\e731"
}
.ti-new-window:before {
    content: "\e732"
}
.ti-microsoft:before {
    content: "\e733"
}
.ti-list-ol:before {
    content: "\e734"
}
.ti-linkedin:before {
    content: "\e735"
}
.ti-layout-sidebar-2:before {
    content: "\e736"
}
.ti-layout-grid4-alt:before {
    content: "\e737"
}
.ti-layout-grid3-alt:before {
    content: "\e738"
}
.ti-layout-grid2-alt:before {
    content: "\e739"
}
.ti-layout-column4-alt:before {
    content: "\e73a"
}
.ti-layout-column3-alt:before {
    content: "\e73b"
}
.ti-layout-column2-alt:before {
    content: "\e73c"
}
.ti-instagram:before {
    content: "\e73d"
}
.ti-google:before {
    content: "\e73e"
}
.ti-github:before {
    content: "\e73f"
}
.ti-flickr:before {
    content: "\e740"
}
.ti-facebook:before {
    content: "\e741"
}
.ti-dropbox:before {
    content: "\e742"
}
.ti-dribbble:before {
    content: "\e743"
}
.ti-apple:before {
    content: "\e744"
}
.ti-android:before {
    content: "\e745"
}
.ti-save:before {
    content: "\e746"
}
.ti-save-alt:before {
    content: "\e747"
}
.ti-yahoo:before {
    content: "\e748"
}
.ti-wordpress:before {
    content: "\e749"
}
.ti-vimeo-alt:before {
    content: "\e74a"
}
.ti-twitter-alt:before {
    content: "\e74b"
}
.ti-tumblr-alt:before {
    content: "\e74c"
}
.ti-trello:before {
    content: "\e74d"
}
.ti-stack-overflow:before {
    content: "\e74e"
}
.ti-soundcloud:before {
    content: "\e74f"
}
.ti-sharethis:before {
    content: "\e750"
}
.ti-sharethis-alt:before {
    content: "\e751"
}
.ti-reddit:before {
    content: "\e752"
}
.ti-pinterest-alt:before {
    content: "\e753"
}
.ti-microsoft-alt:before {
    content: "\e754"
}
.ti-linux:before {
    content: "\e755"
}
.ti-jsfiddle:before {
    content: "\e756"
}
.ti-joomla:before {
    content: "\e757"
}
.ti-html5:before {
    content: "\e758"
}
.ti-flickr-alt:before {
    content: "\e759"
}
.ti-email:before {
    content: "\e75a"
}
.ti-drupal:before {
    content: "\e75b"
}
.ti-dropbox-alt:before {
    content: "\e75c"
}
.ti-css3:before {
    content: "\e75d"
}
.ti-rss:before {
    content: "\e75e"
}
.ti-rss-alt:before {
    content: "\e75f"
}
@font-face {
    font-family: simple-line-icons;
    src: url(../less/icons/simple-line-icons/fonts/Simple-Line-Icons.eot?-i3a2kk);
    src: url(../less/icons/simple-line-icons/fonts/Simple-Line-Icons.eot?#iefix-i3a2kk) format('embedded-opentype'), url(../less/icons/simple-line-icons/fonts/Simple-Line-Icons.ttf?-i3a2kk) format('truetype'), url(../less/icons/simple-line-icons/fonts/Simple-Line-Icons.woff2?-i3a2kk) format('woff2'), url(../less/icons/simple-line-icons/fonts/Simple-Line-Icons.woff?-i3a2kk) format('woff'), url(../less/icons/simple-line-icons/fonts/Simple-Line-Icons.svg?-i3a2kk#simple-line-icons) format('svg');
    font-weight: 400;
    font-style: normal
}
.icon-action-redo,
.icon-action-undo,
.icon-anchor,
.icon-arrow-down,
.icon-arrow-down-circle,
.icon-arrow-left,
.icon-arrow-left-circle,
.icon-arrow-right,
.icon-arrow-right-circle,
.icon-arrow-up,
.icon-arrow-up-circle,
.icon-badge,
.icon-bag,
.icon-ban,
.icon-basket,
.icon-basket-loaded,
.icon-bell,
.icon-book-open,
.icon-briefcase,
.icon-bubble,
.icon-bubbles,
.icon-bulb,
.icon-calculator,
.icon-calender,
.icon-call-end,
.icon-call-in,
.icon-call-out,
.icon-camera,
.icon-camrecorder,
.icon-chart,
.icon-check,
.icon-chemistry,
.icon-clock,
.icon-close,
.icon-cloud-download,
.icon-cloud-upload,
.icon-compass,
.icon-control-end,
.icon-control-forward,
.icon-control-pause,
.icon-control-play,
.icon-control-rewind,
.icon-control-start,
.icon-credit-card,
.icon-crop,
.icon-cup,
.icon-cursor,
.icon-cursor-move,
.icon-diamond,
.icon-direction,
.icon-directions,
.icon-disc,
.icon-dislike,
.icon-doc,
.icon-docs,
.icon-drawar,
.icon-drop,
.icon-earphones,
.icon-earphones-alt,
.icon-emotsmile,
.icon-energy,
.icon-envelope,
.icon-envelope-letter,
.icon-envelope-open,
.icon-equalizer,
.icon-eye,
.icon-eyeglass,
.icon-feed,
.icon-film,
.icon-fire,
.icon-flag,
.icon-folder,
.icon-folder-alt,
.icon-frame,
.icon-game-controller,
.icon-ghost,
.icon-globe,
.icon-globe-alt,
.icon-graduation,
.icon-graph,
.icon-grid,
.icon-handbag,
.icon-heart,
.icon-home,
.icon-hourglass,
.icon-info,
.icon-key,
.icon-layers,
.icon-like,
.icon-link,
.icon-list,
.icon-location-pin,
.icon-lock,
.icon-lock-open,
.icon-login,
.icon-logout,
.icon-loop,
.icon-magic-wand,
.icon-magnet,
.icon-magnifier,
.icon-magnifier-add,
.icon-magnifier-remove,
.icon-map,
.icon-menu,
.icon-microphone,
.icon-mouse,
.icon-music-tone,
.icon-music-tone-alt,
.icon-mustache,
.icon-note,
.icon-notebook,
.icon-options,
.icon-options-vertical,
.icon-paper-clip,
.icon-paper-plane,
.icon-paypal,
.icon-pencil,
.icon-people,
.icon-phone,
.icon-picture,
.icon-pie-chart,
.icon-pin,
.icon-plane,
.icon-playlist,
.icon-plus,
.icon-power,
.icon-present,
.icon-printer,
.icon-puzzle,
.icon-question,
.icon-refresh,
.icon-reload,
.icon-rocket,
.icon-screen-desktop,
.icon-screen-smartphone,
.icon-screen-tablet,
.icon-settings,
.icon-share,
.icon-share-alt,
.icon-shield,
.icon-shuffle,
.icon-size-actual,
.icon-size-fullscreen,
.icon-social-behance,
.icon-social-dribbble,
.icon-social-dropbox,
.icon-social-facebook,
.icon-social-foursqare,
.icon-social-github,
.icon-social-gplus,
.icon-social-instagram,
.icon-social-linkedin,
.icon-social-pintarest,
.icon-social-reddit,
.icon-social-skype,
.icon-social-soundcloud,
.icon-social-spotify,
.icon-social-stumbleupon,
.icon-social-tumblr,
.icon-social-twitter,
.icon-social-youtube,
.icon-speech,
.icon-speedometer,
.icon-star,
.icon-support,
.icon-symble-female,
.icon-symbol-male,
.icon-tag,
.icon-target,
.icon-trash,
.icon-trophy,
.icon-umbrella,
.icon-user,
.icon-user-female,
.icon-user-follow,
.icon-user-following,
.icon-user-unfollow,
.icon-vector,
.icon-volume-1,
.icon-volume-2,
.icon-volume-off,
.icon-wallet,
.icon-wrench {
    font-family: simple-line-icons;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-user:before {
    content: "\e005"
}
.icon-people:before {
    content: "\e001"
}
.icon-user-female:before {
    content: "\e000"
}
.icon-user-follow:before {
    content: "\e002"
}
.icon-user-following:before {
    content: "\e003"
}
.icon-user-unfollow:before {
    content: "\e004"
}
.icon-login:before {
    content: "\e066"
}
.icon-logout:before {
    content: "\e065"
}
.icon-emotsmile:before {
    content: "\e021"
}
.icon-phone:before {
    content: "\e600"
}
.icon-call-end:before {
    content: "\e048"
}
.icon-call-in:before {
    content: "\e047"
}
.icon-call-out:before {
    content: "\e046"
}
.icon-map:before {
    content: "\e033"
}
.icon-location-pin:before {
    content: "\e096"
}
.icon-direction:before {
    content: "\e042"
}
.icon-directions:before {
    content: "\e041"
}
.icon-compass:before {
    content: "\e045"
}
.icon-layers:before {
    content: "\e034"
}
.icon-menu:before {
    content: "\e601"
}
.icon-list:before {
    content: "\e067"
}
.icon-options-vertical:before {
    content: "\e602"
}
.icon-options:before {
    content: "\e603"
}
.icon-arrow-down:before {
    content: "\e604"
}
.icon-arrow-left:before {
    content: "\e605"
}
.icon-arrow-right:before {
    content: "\e606"
}
.icon-arrow-up:before {
    content: "\e607"
}
.icon-arrow-up-circle:before {
    content: "\e078"
}
.icon-arrow-left-circle:before {
    content: "\e07a"
}
.icon-arrow-right-circle:before {
    content: "\e079"
}
.icon-arrow-down-circle:before {
    content: "\e07b"
}
.icon-check:before {
    content: "\e080"
}
.icon-clock:before {
    content: "\e081"
}
.icon-plus:before {
    content: "\e095"
}
.icon-close:before {
    content: "\e082"
}
.icon-trophy:before {
    content: "\e006"
}
.icon-screen-smartphone:before {
    content: "\e010"
}
.icon-screen-desktop:before {
    content: "\e011"
}
.icon-plane:before {
    content: "\e012"
}
.icon-notebook:before {
    content: "\e013"
}
.icon-mustache:before {
    content: "\e014"
}
.icon-mouse:before {
    content: "\e015"
}
.icon-magnet:before {
    content: "\e016"
}
.icon-energy:before {
    content: "\e020"
}
.icon-disc:before {
    content: "\e022"
}
.icon-cursor:before {
    content: "\e06e"
}
.icon-cursor-move:before {
    content: "\e023"
}
.icon-crop:before {
    content: "\e024"
}
.icon-chemistry:before {
    content: "\e026"
}
.icon-speedometer:before {
    content: "\e007"
}
.icon-shield:before {
    content: "\e00e"
}
.icon-screen-tablet:before {
    content: "\e00f"
}
.icon-magic-wand:before {
    content: "\e017"
}
.icon-hourglass:before {
    content: "\e018"
}
.icon-graduation:before {
    content: "\e019"
}
.icon-ghost:before {
    content: "\e01a"
}
.icon-game-controller:before {
    content: "\e01b"
}
.icon-fire:before {
    content: "\e01c"
}
.icon-eyeglass:before {
    content: "\e01d"
}
.icon-envelope-open:before {
    content: "\e01e"
}
.icon-envelope-letter:before {
    content: "\e01f"
}
.icon-bell:before {
    content: "\e027"
}
.icon-badge:before {
    content: "\e028"
}
.icon-anchor:before {
    content: "\e029"
}
.icon-wallet:before {
    content: "\e02a"
}
.icon-vector:before {
    content: "\e02b"
}
.icon-speech:before {
    content: "\e02c"
}
.icon-puzzle:before {
    content: "\e02d"
}
.icon-printer:before {
    content: "\e02e"
}
.icon-present:before {
    content: "\e02f"
}
.icon-playlist:before {
    content: "\e030"
}
.icon-pin:before {
    content: "\e031"
}
.icon-picture:before {
    content: "\e032"
}
.icon-handbag:before {
    content: "\e035"
}
.icon-globe-alt:before {
    content: "\e036"
}
.icon-globe:before {
    content: "\e037"
}
.icon-folder-alt:before {
    content: "\e039"
}
.icon-folder:before {
    content: "\e089"
}
.icon-film:before {
    content: "\e03a"
}
.icon-feed:before {
    content: "\e03b"
}
.icon-drop:before {
    content: "\e03e"
}
.icon-drawar:before {
    content: "\e03f"
}
.icon-docs:before {
    content: "\e040"
}
.icon-doc:before {
    content: "\e085"
}
.icon-diamond:before {
    content: "\e043"
}
.icon-cup:before {
    content: "\e044"
}
.icon-calculator:before {
    content: "\e049"
}
.icon-bubbles:before {
    content: "\e04a"
}
.icon-briefcase:before {
    content: "\e04b"
}
.icon-book-open:before {
    content: "\e04c"
}
.icon-basket-loaded:before {
    content: "\e04d"
}
.icon-basket:before {
    content: "\e04e"
}
.icon-bag:before {
    content: "\e04f"
}
.icon-action-undo:before {
    content: "\e050"
}
.icon-action-redo:before {
    content: "\e051"
}
.icon-wrench:before {
    content: "\e052"
}
.icon-umbrella:before {
    content: "\e053"
}
.icon-trash:before {
    content: "\e054"
}
.icon-tag:before {
    content: "\e055"
}
.icon-support:before {
    content: "\e056"
}
.icon-frame:before {
    content: "\e038"
}
.icon-size-fullscreen:before {
    content: "\e057"
}
.icon-size-actual:before {
    content: "\e058"
}
.icon-shuffle:before {
    content: "\e059"
}
.icon-share-alt:before {
    content: "\e05a"
}
.icon-share:before {
    content: "\e05b"
}
.icon-rocket:before {
    content: "\e05c"
}
.icon-question:before {
    content: "\e05d"
}
.icon-pie-chart:before {
    content: "\e05e"
}
.icon-pencil:before {
    content: "\e05f"
}
.icon-note:before {
    content: "\e060"
}
.icon-loop:before {
    content: "\e064"
}
.icon-home:before {
    content: "\e069"
}
.icon-grid:before {
    content: "\e06a"
}
.icon-graph:before {
    content: "\e06b"
}
.icon-microphone:before {
    content: "\e063"
}
.icon-music-tone-alt:before {
    content: "\e061"
}
.icon-music-tone:before {
    content: "\e062"
}
.icon-earphones-alt:before {
    content: "\e03c"
}
.icon-earphones:before {
    content: "\e03d"
}
.icon-equalizer:before {
    content: "\e06c"
}
.icon-like:before {
    content: "\e068"
}
.icon-dislike:before {
    content: "\e06d"
}
.icon-control-start:before {
    content: "\e06f"
}
.icon-control-rewind:before {
    content: "\e070"
}
.icon-control-play:before {
    content: "\e071"
}
.icon-control-pause:before {
    content: "\e072"
}
.icon-control-forward:before {
    content: "\e073"
}
.icon-control-end:before {
    content: "\e074"
}
.icon-volume-1:before {
    content: "\e09f"
}
.icon-volume-2:before {
    content: "\e0a0"
}
.icon-volume-off:before {
    content: "\e0a1"
}
.icon-calender:before {
    content: "\e075"
}
.icon-bulb:before {
    content: "\e076"
}
.icon-chart:before {
    content: "\e077"
}
.icon-ban:before {
    content: "\e07c"
}
.icon-bubble:before {
    content: "\e07d"
}
.icon-camrecorder:before {
    content: "\e07e"
}
.icon-camera:before {
    content: "\e07f"
}
.icon-cloud-download:before {
    content: "\e083"
}
.icon-cloud-upload:before {
    content: "\e084"
}
.icon-envelope:before {
    content: "\e086"
}
.icon-eye:before {
    content: "\e087"
}
.icon-flag:before {
    content: "\e088"
}
.icon-heart:before {
    content: "\e08a"
}
.icon-info:before {
    content: "\e08b"
}
.icon-key:before {
    content: "\e08c"
}
.icon-link:before {
    content: "\e08d"
}
.icon-lock:before {
    content: "\e08e"
}
.icon-lock-open:before {
    content: "\e08f"
}
.icon-magnifier:before {
    content: "\e090"
}
.icon-magnifier-add:before {
    content: "\e091"
}
.icon-magnifier-remove:before {
    content: "\e092"
}
.icon-paper-clip:before {
    content: "\e093"
}
.icon-paper-plane:before {
    content: "\e094"
}
.icon-power:before {
    content: "\e097"
}
.icon-refresh:before {
    content: "\e098"
}
.icon-reload:before {
    content: "\e099"
}
.icon-settings:before {
    content: "\e09a"
}
.icon-star:before {
    content: "\e09b"
}
.icon-symble-female:before {
    content: "\e09c"
}
.icon-symbol-male:before {
    content: "\e09d"
}
.icon-target:before {
    content: "\e09e"
}
.icon-credit-card:before {
    content: "\e025"
}
.icon-paypal:before {
    content: "\e608"
}
.icon-social-tumblr:before {
    content: "\e00a"
}
.icon-social-twitter:before {
    content: "\e009"
}
.icon-social-facebook:before {
    content: "\e00b"
}
.icon-social-instagram:before {
    content: "\e609"
}
.icon-social-linkedin:before {
    content: "\e60a"
}
.icon-social-pintarest:before {
    content: "\e60b"
}
.icon-social-github:before {
    content: "\e60c"
}
.icon-social-gplus:before {
    content: "\e60d"
}
.icon-social-reddit:before {
    content: "\e60e"
}
.icon-social-skype:before {
    content: "\e60f"
}
.icon-social-dribbble:before {
    content: "\e00d"
}
.icon-social-behance:before {
    content: "\e610"
}
.icon-social-foursqare:before {
    content: "\e611"
}
.icon-social-soundcloud:before {
    content: "\e612"
}
.icon-social-spotify:before {
    content: "\e613"
}
.icon-social-stumbleupon:before {
    content: "\e614"
}
.icon-social-youtube:before {
    content: "\e008"
}
.icon-social-dropbox:before {
    content: "\e00c"
}
/*!
 *  Weather Icons 2.0
 *  Updated August 1, 2015
 *  Weather themed icons for Bootstrap
 *  Author - Erik Flowers - erik@helloerik.com
 *  Email: erik@helloerik.com
 *  Twitter: http://twitter.com/Erik_UX
 *  ------------------------------------------------------------------------------
 *  Maintained at http://erikflowers.github.io/weather-icons
 *
 *  License
 *  ------------------------------------------------------------------------------
 *  - Font licensed under SIL OFL 1.1 -
 *    http://scripts.sil.org/OFL
 *  - CSS, SCSS and LESS are licensed under MIT License -
 *    http://opensource.org/licenses/mit-license.html
 *  - Documentation licensed under CC BY 3.0 -
 *    http://creativecommons.org/licenses/by/3.0/
 *  - Inspired by and works great as a companion with Font Awesome
 *    "Font Awesome by Dave Gandy - http://fontawesome.io"
 */

@font-face {
    font-family: weathericons;
    src: url(../less/icons/weather-icons/font/weathericons-regular-webfont.eot);
    src: url(../less/icons/weather-icons/font/weathericons-regular-webfont.eot?#iefix) format('embedded-opentype'), url(../less/icons/weather-icons/font/weathericons-regular-webfont.woff2) format('woff2'), url(../less/icons/weather-icons/font/weathericons-regular-webfont.woff) format('woff'), url(../less/icons/weather-icons/font/weathericons-regular-webfont.ttf) format('truetype'), url(../less/icons/weather-icons/font/weathericons-regular-webfont.svg#weather_iconsregular) format('svg');
    font-weight: 400;
    font-style: normal
}
.wi {
    display: inline-block;
    font-family: weathericons;
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.wi-fw {
    text-align: center;
    width: 1.4em
}
.wi-rotate-90 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=1);
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}
.wi-rotate-180 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg)
}
.wi-rotate-270 {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=3);
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg)
}
.wi-flip-horizontal {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
    -webkit-transform: scale(-1, 1);
    -ms-transform: scale(-1, 1);
    transform: scale(-1, 1)
}
.wi-flip-vertical {
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
    -webkit-transform: scale(1, -1);
    -ms-transform: scale(1, -1);
    transform: scale(1, -1)
}
.wi-day-sunny:before {
    content: "\f00d"
}
.wi-day-cloudy:before {
    content: "\f002"
}
.wi-day-cloudy-gusts:before {
    content: "\f000"
}
.wi-day-cloudy-windy:before {
    content: "\f001"
}
.wi-day-fog:before {
    content: "\f003"
}
.wi-day-hail:before {
    content: "\f004"
}
.wi-day-haze:before {
    content: "\f0b6"
}
.wi-day-lightning:before {
    content: "\f005"
}
.wi-day-rain:before {
    content: "\f008"
}
.wi-day-rain-mix:before {
    content: "\f006"
}
.wi-day-rain-wind:before {
    content: "\f007"
}
.wi-day-showers:before {
    content: "\f009"
}
.wi-day-sleet:before {
    content: "\f0b2"
}
.wi-day-sleet-storm:before {
    content: "\f068"
}
.wi-day-snow:before {
    content: "\f00a"
}
.wi-day-snow-thunderstorm:before {
    content: "\f06b"
}
.wi-day-snow-wind:before {
    content: "\f065"
}
.wi-day-sprinkle:before {
    content: "\f00b"
}
.wi-day-storm-showers:before {
    content: "\f00e"
}
.wi-day-sunny-overcast:before {
    content: "\f00c"
}
.wi-day-thunderstorm:before {
    content: "\f010"
}
.wi-day-windy:before {
    content: "\f085"
}
.wi-solar-eclipse:before {
    content: "\f06e"
}
.wi-hot:before {
    content: "\f072"
}
.wi-day-cloudy-high:before {
    content: "\f07d"
}
.wi-day-light-wind:before {
    content: "\f0c4"
}
.wi-night-clear:before {
    content: "\f02e"
}
.wi-night-alt-cloudy:before {
    content: "\f086"
}
.wi-night-alt-cloudy-gusts:before {
    content: "\f022"
}
.wi-night-alt-cloudy-windy:before {
    content: "\f023"
}
.wi-night-alt-hail:before {
    content: "\f024"
}
.wi-night-alt-lightning:before {
    content: "\f025"
}
.wi-night-alt-rain:before {
    content: "\f028"
}
.wi-night-alt-rain-mix:before {
    content: "\f026"
}
.wi-night-alt-rain-wind:before {
    content: "\f027"
}
.wi-night-alt-showers:before {
    content: "\f029"
}
.wi-night-alt-sleet:before {
    content: "\f0b4"
}
.wi-night-alt-sleet-storm:before {
    content: "\f06a"
}
.wi-night-alt-snow:before {
    content: "\f02a"
}
.wi-night-alt-snow-thunderstorm:before {
    content: "\f06d"
}
.wi-night-alt-snow-wind:before {
    content: "\f067"
}
.wi-night-alt-sprinkle:before {
    content: "\f02b"
}
.wi-night-alt-storm-showers:before {
    content: "\f02c"
}
.wi-night-alt-thunderstorm:before {
    content: "\f02d"
}
.wi-night-cloudy:before {
    content: "\f031"
}
.wi-night-cloudy-gusts:before {
    content: "\f02f"
}
.wi-night-cloudy-windy:before {
    content: "\f030"
}
.wi-night-fog:before {
    content: "\f04a"
}
.wi-night-hail:before {
    content: "\f032"
}
.wi-night-lightning:before {
    content: "\f033"
}
.wi-night-partly-cloudy:before {
    content: "\f083"
}
.wi-night-rain:before {
    content: "\f036"
}
.wi-night-rain-mix:before {
    content: "\f034"
}
.wi-night-rain-wind:before {
    content: "\f035"
}
.wi-night-showers:before {
    content: "\f037"
}
.wi-night-sleet:before {
    content: "\f0b3"
}
.wi-night-sleet-storm:before {
    content: "\f069"
}
.wi-night-snow:before {
    content: "\f038"
}
.wi-night-snow-thunderstorm:before {
    content: "\f06c"
}
.wi-night-snow-wind:before {
    content: "\f066"
}
.wi-night-sprinkle:before {
    content: "\f039"
}
.wi-night-storm-showers:before {
    content: "\f03a"
}
.wi-night-thunderstorm:before {
    content: "\f03b"
}
.wi-lunar-eclipse:before {
    content: "\f070"
}
.wi-stars:before {
    content: "\f077"
}
.wi-night-alt-cloudy-high:before {
    content: "\f07e"
}
.wi-night-cloudy-high:before {
    content: "\f080"
}
.wi-night-alt-partly-cloudy:before {
    content: "\f081"
}
.wi-cloud:before {
    content: "\f041"
}
.wi-cloudy:before {
    content: "\f013"
}
.wi-cloudy-gusts:before {
    content: "\f011"
}
.wi-cloudy-windy:before {
    content: "\f012"
}
.wi-fog:before {
    content: "\f014"
}
.wi-hail:before {
    content: "\f015"
}
.wi-rain:before {
    content: "\f019"
}
.wi-rain-mix:before {
    content: "\f017"
}
.wi-rain-wind:before {
    content: "\f018"
}
.wi-showers:before {
    content: "\f01a"
}
.wi-sleet:before {
    content: "\f0b5"
}
.wi-sprinkle:before {
    content: "\f01c"
}
.wi-storm-showers:before {
    content: "\f01d"
}
.wi-thunderstorm:before {
    content: "\f01e"
}
.wi-snow-wind:before {
    content: "\f064"
}
.wi-snow:before {
    content: "\f01b"
}
.wi-smog:before {
    content: "\f074"
}
.wi-smoke:before {
    content: "\f062"
}
.wi-lightning:before {
    content: "\f016"
}
.wi-raindrops:before {
    content: "\f04e"
}
.wi-raindrop:before {
    content: "\f078"
}
.wi-dust:before {
    content: "\f063"
}
.wi-snowflake-cold:before {
    content: "\f076"
}
.wi-windy:before {
    content: "\f021"
}
.wi-strong-wind:before {
    content: "\f050"
}
.wi-sandstorm:before {
    content: "\f082"
}
.wi-earthquake:before {
    content: "\f0c6"
}
.wi-fire:before {
    content: "\f0c7"
}
.wi-flood:before {
    content: "\f07c"
}
.wi-meteor:before {
    content: "\f071"
}
.wi-tsunami:before {
    content: "\f0c5"
}
.wi-volcano:before {
    content: "\f0c8"
}
.wi-hurricane:before {
    content: "\f073"
}
.wi-tornado:before {
    content: "\f056"
}
.wi-small-craft-advisory:before {
    content: "\f0cc"
}
.wi-gale-warning:before {
    content: "\f0cd"
}
.wi-storm-warning:before {
    content: "\f0ce"
}
.wi-hurricane-warning:before {
    content: "\f0cf"
}
.wi-wind-direction:before {
    content: "\f0b1"
}
.wi-alien:before {
    content: "\f075"
}
.wi-celsius:before {
    content: "\f03c"
}
.wi-fahrenheit:before {
    content: "\f045"
}
.wi-degrees:before {
    content: "\f042"
}
.wi-thermometer:before {
    content: "\f055"
}
.wi-thermometer-exterior:before {
    content: "\f053"
}
.wi-thermometer-internal:before {
    content: "\f054"
}
.wi-cloud-down:before {
    content: "\f03d"
}
.wi-cloud-up:before {
    content: "\f040"
}
.wi-cloud-refresh:before {
    content: "\f03e"
}
.wi-horizon:before {
    content: "\f047"
}
.wi-horizon-alt:before {
    content: "\f046"
}
.wi-sunrise:before {
    content: "\f051"
}
.wi-sunset:before {
    content: "\f052"
}
.wi-moonrise:before {
    content: "\f0c9"
}
.wi-moonset:before {
    content: "\f0ca"
}
.wi-refresh:before {
    content: "\f04c"
}
.wi-refresh-alt:before {
    content: "\f04b"
}
.wi-umbrella:before {
    content: "\f084"
}
.wi-barometer:before {
    content: "\f079"
}
.wi-humidity:before {
    content: "\f07a"
}
.wi-na:before {
    content: "\f07b"
}
.wi-train:before {
    content: "\f0cb"
}
.wi-moon-new:before {
    content: "\f095"
}
.wi-moon-waxing-cresent-1:before {
    content: "\f096"
}
.wi-moon-waxing-cresent-2:before {
    content: "\f097"
}
.wi-moon-waxing-cresent-3:before {
    content: "\f098"
}
.wi-moon-waxing-cresent-4:before {
    content: "\f099"
}
.wi-moon-waxing-cresent-5:before {
    content: "\f09a"
}
.wi-moon-waxing-cresent-6:before {
    content: "\f09b"
}
.wi-moon-first-quarter:before {
    content: "\f09c"
}
.wi-moon-waxing-gibbous-1:before {
    content: "\f09d"
}
.wi-moon-waxing-gibbous-2:before {
    content: "\f09e"
}
.wi-moon-waxing-gibbous-3:before {
    content: "\f09f"
}
.wi-moon-waxing-gibbous-4:before {
    content: "\f0a0"
}
.wi-moon-waxing-gibbous-5:before {
    content: "\f0a1"
}
.wi-moon-waxing-gibbous-6:before {
    content: "\f0a2"
}
.wi-moon-full:before {
    content: "\f0a3"
}
.wi-moon-waning-gibbous-1:before {
    content: "\f0a4"
}
.wi-moon-waning-gibbous-2:before {
    content: "\f0a5"
}
.wi-moon-waning-gibbous-3:before {
    content: "\f0a6"
}
.wi-moon-waning-gibbous-4:before {
    content: "\f0a7"
}
.wi-moon-waning-gibbous-5:before {
    content: "\f0a8"
}
.wi-moon-waning-gibbous-6:before {
    content: "\f0a9"
}
.wi-moon-third-quarter:before {
    content: "\f0aa"
}
.wi-moon-waning-crescent-1:before {
    content: "\f0ab"
}
.wi-moon-waning-crescent-2:before {
    content: "\f0ac"
}
.wi-moon-waning-crescent-3:before {
    content: "\f0ad"
}
.wi-moon-waning-crescent-4:before {
    content: "\f0ae"
}
.wi-moon-waning-crescent-5:before {
    content: "\f0af"
}
.wi-moon-waning-crescent-6:before {
    content: "\f0b0"
}
.wi-moon-alt-new:before {
    content: "\f0eb"
}
.wi-moon-alt-waxing-cresent-1:before {
    content: "\f0d0"
}
.wi-moon-alt-waxing-cresent-2:before {
    content: "\f0d1"
}
.wi-moon-alt-waxing-cresent-3:before {
    content: "\f0d2"
}
.wi-moon-alt-waxing-cresent-4:before {
    content: "\f0d3"
}
.wi-moon-alt-waxing-cresent-5:before {
    content: "\f0d4"
}
.wi-moon-alt-waxing-cresent-6:before {
    content: "\f0d5"
}
.wi-moon-alt-first-quarter:before {
    content: "\f0d6"
}
.wi-moon-alt-waxing-gibbous-1:before {
    content: "\f0d7"
}
.wi-moon-alt-waxing-gibbous-2:before {
    content: "\f0d8"
}
.wi-moon-alt-waxing-gibbous-3:before {
    content: "\f0d9"
}
.wi-moon-alt-waxing-gibbous-4:before {
    content: "\f0da"
}
.wi-moon-alt-waxing-gibbous-5:before {
    content: "\f0db"
}
.wi-moon-alt-waxing-gibbous-6:before {
    content: "\f0dc"
}
.wi-moon-alt-full:before {
    content: "\f0dd"
}
.wi-moon-alt-waning-gibbous-1:before {
    content: "\f0de"
}
.wi-moon-alt-waning-gibbous-2:before {
    content: "\f0df"
}
.wi-moon-alt-waning-gibbous-3:before {
    content: "\f0e0"
}
.wi-moon-alt-waning-gibbous-4:before {
    content: "\f0e1"
}
.wi-moon-alt-waning-gibbous-5:before {
    content: "\f0e2"
}
.wi-moon-alt-waning-gibbous-6:before {
    content: "\f0e3"
}
.wi-moon-alt-third-quarter:before {
    content: "\f0e4"
}
.wi-moon-alt-waning-crescent-1:before {
    content: "\f0e5"
}
.wi-moon-alt-waning-crescent-2:before {
    content: "\f0e6"
}
.wi-moon-alt-waning-crescent-3:before {
    content: "\f0e7"
}
.wi-moon-alt-waning-crescent-4:before {
    content: "\f0e8"
}
.wi-moon-alt-waning-crescent-5:before {
    content: "\f0e9"
}
.wi-moon-alt-waning-crescent-6:before {
    content: "\f0ea"
}
.wi-moon-0:before {
    content: "\f095"
}
.wi-moon-1:before {
    content: "\f096"
}
.wi-moon-2:before {
    content: "\f097"
}
.wi-moon-3:before {
    content: "\f098"
}
.wi-moon-4:before {
    content: "\f099"
}
.wi-moon-5:before {
    content: "\f09a"
}
.wi-moon-6:before {
    content: "\f09b"
}
.wi-moon-7:before {
    content: "\f09c"
}
.wi-moon-8:before {
    content: "\f09d"
}
.wi-moon-9:before {
    content: "\f09e"
}
.wi-moon-10:before {
    content: "\f09f"
}
.wi-moon-11:before {
    content: "\f0a0"
}
.wi-moon-12:before {
    content: "\f0a1"
}
.wi-moon-13:before {
    content: "\f0a2"
}
.wi-moon-14:before {
    content: "\f0a3"
}
.wi-moon-15:before {
    content: "\f0a4"
}
.wi-moon-16:before {
    content: "\f0a5"
}
.wi-moon-17:before {
    content: "\f0a6"
}
.wi-moon-18:before {
    content: "\f0a7"
}
.wi-moon-19:before {
    content: "\f0a8"
}
.wi-moon-20:before {
    content: "\f0a9"
}
.wi-moon-21:before {
    content: "\f0aa"
}
.wi-moon-22:before {
    content: "\f0ab"
}
.wi-moon-23:before {
    content: "\f0ac"
}
.wi-moon-24:before {
    content: "\f0ad"
}
.wi-moon-25:before {
    content: "\f0ae"
}
.wi-moon-26:before {
    content: "\f0af"
}
.wi-moon-27:before {
    content: "\f0b0"
}
.wi-time-1:before {
    content: "\f08a"
}
.wi-time-2:before {
    content: "\f08b"
}
.wi-time-3:before {
    content: "\f08c"
}
.wi-time-4:before {
    content: "\f08d"
}
.wi-time-5:before {
    content: "\f08e"
}
.wi-time-6:before {
    content: "\f08f"
}
.wi-time-7:before {
    content: "\f090"
}
.wi-time-8:before {
    content: "\f091"
}
.wi-time-9:before {
    content: "\f092"
}
.wi-time-10:before {
    content: "\f093"
}
.wi-time-11:before {
    content: "\f094"
}
.wi-time-12:before {
    content: "\f089"
}
.wi-direction-up:before {
    content: "\f058"
}
.wi-direction-up-right:before {
    content: "\f057"
}
.wi-direction-right:before {
    content: "\f04d"
}
.wi-direction-down-right:before {
    content: "\f088"
}
.wi-direction-down:before {
    content: "\f044"
}
.wi-direction-down-left:before {
    content: "\f043"
}
.wi-direction-left:before {
    content: "\f048"
}
.wi-direction-up-left:before {
    content: "\f087"
}
.wi-wind-beaufort-0:before {
    content: "\f0b7"
}
.wi-wind-beaufort-1:before {
    content: "\f0b8"
}
.wi-wind-beaufort-2:before {
    content: "\f0b9"
}
.wi-wind-beaufort-3:before {
    content: "\f0ba"
}
.wi-wind-beaufort-4:before {
    content: "\f0bb"
}
.wi-wind-beaufort-5:before {
    content: "\f0bc"
}
.wi-wind-beaufort-6:before {
    content: "\f0bd"
}
.wi-wind-beaufort-7:before {
    content: "\f0be"
}
.wi-wind-beaufort-8:before {
    content: "\f0bf"
}
.wi-wind-beaufort-9:before {
    content: "\f0c0"
}
.wi-wind-beaufort-10:before {
    content: "\f0c1"
}
.wi-wind-beaufort-11:before {
    content: "\f0c2"
}
.wi-wind-beaufort-12:before {
    content: "\f0c3"
}
.wi-yahoo-0:before {
    content: "\f056"
}
.wi-yahoo-1:before {
    content: "\f00e"
}
.wi-yahoo-2:before {
    content: "\f073"
}
.wi-yahoo-3:before,
.wi-yahoo-4:before {
    content: "\f01e"
}
.wi-yahoo-5:before,
.wi-yahoo-6:before,
.wi-yahoo-7:before {
    content: "\f017"
}
.wi-yahoo-8:before {
    content: "\f015"
}
.wi-yahoo-9:before {
    content: "\f01a"
}
.wi-yahoo-10:before {
    content: "\f015"
}
.wi-yahoo-11:before,
.wi-yahoo-12:before {
    content: "\f01a"
}
.wi-yahoo-13:before {
    content: "\f01b"
}
.wi-yahoo-14:before {
    content: "\f00a"
}
.wi-yahoo-15:before {
    content: "\f064"
}
.wi-yahoo-16:before {
    content: "\f01b"
}
.wi-yahoo-17:before {
    content: "\f015"
}
.wi-yahoo-18:before {
    content: "\f017"
}
.wi-yahoo-19:before {
    content: "\f063"
}
.wi-yahoo-20:before {
    content: "\f014"
}
.wi-yahoo-21:before {
    content: "\f021"
}
.wi-yahoo-22:before {
    content: "\f062"
}
.wi-yahoo-23:before,
.wi-yahoo-24:before {
    content: "\f050"
}
.wi-yahoo-25:before {
    content: "\f076"
}
.wi-yahoo-26:before {
    content: "\f013"
}
.wi-yahoo-27:before {
    content: "\f031"
}
.wi-yahoo-28:before {
    content: "\f002"
}
.wi-yahoo-29:before {
    content: "\f031"
}
.wi-yahoo-30:before {
    content: "\f002"
}
.wi-yahoo-31:before {
    content: "\f02e"
}
.wi-yahoo-32:before {
    content: "\f00d"
}
.wi-yahoo-33:before {
    content: "\f083"
}
.wi-yahoo-34:before {
    content: "\f00c"
}
.wi-yahoo-35:before {
    content: "\f017"
}
.wi-yahoo-36:before {
    content: "\f072"
}
.wi-yahoo-37:before,
.wi-yahoo-38:before,
.wi-yahoo-39:before {
    content: "\f00e"
}
.wi-yahoo-40:before {
    content: "\f01a"
}
.wi-yahoo-41:before {
    content: "\f064"
}
.wi-yahoo-42:before {
    content: "\f01b"
}
.wi-yahoo-43:before {
    content: "\f064"
}
.wi-yahoo-44:before {
    content: "\f00c"
}
.wi-yahoo-45:before {
    content: "\f00e"
}
.wi-yahoo-46:before {
    content: "\f01b"
}
.wi-yahoo-47:before {
    content: "\f00e"
}
.wi-yahoo-3200:before {
    content: "\f077"
}
.wi-forecast-io-clear-day:before {
    content: "\f00d"
}
.wi-forecast-io-clear-night:before {
    content: "\f02e"
}
.wi-forecast-io-rain:before {
    content: "\f019"
}
.wi-forecast-io-snow:before {
    content: "\f01b"
}
.wi-forecast-io-sleet:before {
    content: "\f0b5"
}
.wi-forecast-io-wind:before {
    content: "\f050"
}
.wi-forecast-io-fog:before {
    content: "\f014"
}
.wi-forecast-io-cloudy:before {
    content: "\f013"
}
.wi-forecast-io-partly-cloudy-day:before {
    content: "\f002"
}
.wi-forecast-io-partly-cloudy-night:before {
    content: "\f031"
}
.wi-forecast-io-hail:before {
    content: "\f015"
}
.wi-forecast-io-thunderstorm:before {
    content: "\f01e"
}
.wi-forecast-io-tornado:before {
    content: "\f056"
}
.wi-wmo4680-00:before,
.wi-wmo4680-0:before {
    content: "\f055"
}
.wi-wmo4680-01:before,
.wi-wmo4680-1:before {
    content: "\f013"
}
.wi-wmo4680-02:before,
.wi-wmo4680-2:before {
    content: "\f055"
}
.wi-wmo4680-03:before,
.wi-wmo4680-3:before {
    content: "\f013"
}
.wi-wmo4680-04:before,
.wi-wmo4680-05:before,
.wi-wmo4680-10:before,
.wi-wmo4680-11:before,
.wi-wmo4680-4:before,
.wi-wmo4680-5:before {
    content: "\f014"
}
.wi-wmo4680-12:before {
    content: "\f016"
}
.wi-wmo4680-18:before {
    content: "\f050"
}
.wi-wmo4680-20:before {
    content: "\f014"
}
.wi-wmo4680-21:before,
.wi-wmo4680-22:before {
    content: "\f017"
}
.wi-wmo4680-23:before {
    content: "\f019"
}
.wi-wmo4680-24:before {
    content: "\f01b"
}
.wi-wmo4680-25:before {
    content: "\f015"
}
.wi-wmo4680-26:before {
    content: "\f01e"
}
.wi-wmo4680-27:before,
.wi-wmo4680-28:before,
.wi-wmo4680-29:before {
    content: "\f063"
}
.wi-wmo4680-30:before,
.wi-wmo4680-31:before,
.wi-wmo4680-32:before,
.wi-wmo4680-33:before,
.wi-wmo4680-34:before,
.wi-wmo4680-35:before {
    content: "\f014"
}
.wi-wmo4680-40:before {
    content: "\f017"
}
.wi-wmo4680-41:before {
    content: "\f01c"
}
.wi-wmo4680-42:before {
    content: "\f019"
}
.wi-wmo4680-43:before {
    content: "\f01c"
}
.wi-wmo4680-44:before {
    content: "\f019"
}
.wi-wmo4680-45:before,
.wi-wmo4680-46:before {
    content: "\f015"
}
.wi-wmo4680-47:before,
.wi-wmo4680-48:before {
    content: "\f01b"
}
.wi-wmo4680-50:before,
.wi-wmo4680-51:before {
    content: "\f01c"
}
.wi-wmo4680-52:before,
.wi-wmo4680-53:before {
    content: "\f019"
}
.wi-wmo4680-54:before,
.wi-wmo4680-55:before,
.wi-wmo4680-56:before {
    content: "\f076"
}
.wi-wmo4680-57:before {
    content: "\f01c"
}
.wi-wmo4680-58:before {
    content: "\f019"
}
.wi-wmo4680-60:before,
.wi-wmo4680-61:before {
    content: "\f01c"
}
.wi-wmo4680-62:before,
.wi-wmo4680-63:before {
    content: "\f019"
}
.wi-wmo4680-64:before,
.wi-wmo4680-65:before,
.wi-wmo4680-66:before {
    content: "\f015"
}
.wi-wmo4680-67:before,
.wi-wmo4680-68:before {
    content: "\f017"
}
.wi-wmo4680-70:before,
.wi-wmo4680-71:before,
.wi-wmo4680-72:before,
.wi-wmo4680-73:before {
    content: "\f01b"
}
.wi-wmo4680-74:before,
.wi-wmo4680-75:before,
.wi-wmo4680-76:before {
    content: "\f076"
}
.wi-wmo4680-77:before {
    content: "\f01b"
}
.wi-wmo4680-78:before {
    content: "\f076"
}
.wi-wmo4680-80:before {
    content: "\f019"
}
.wi-wmo4680-81:before {
    content: "\f01c"
}
.wi-wmo4680-82:before,
.wi-wmo4680-83:before {
    content: "\f019"
}
.wi-wmo4680-84:before {
    content: "\f01d"
}
.wi-wmo4680-85:before,
.wi-wmo4680-86:before,
.wi-wmo4680-87:before {
    content: "\f017"
}
.wi-wmo4680-89:before {
    content: "\f015"
}
.wi-wmo4680-90:before {
    content: "\f016"
}
.wi-wmo4680-91:before {
    content: "\f01d"
}
.wi-wmo4680-92:before,
.wi-wmo4680-93:before {
    content: "\f01e"
}
.wi-wmo4680-94:before {
    content: "\f016"
}
.wi-wmo4680-95:before,
.wi-wmo4680-96:before {
    content: "\f01e"
}
.wi-wmo4680-99:before {
    content: "\f056"
}
.wi-owm-200:before,
.wi-owm-201:before,
.wi-owm-202:before {
    content: "\f01e"
}
.wi-owm-210:before,
.wi-owm-211:before,
.wi-owm-212:before,
.wi-owm-221:before {
    content: "\f016"
}
.wi-owm-230:before,
.wi-owm-231:before,
.wi-owm-232:before {
    content: "\f01e"
}
.wi-owm-300:before,
.wi-owm-301:before {
    content: "\f01c"
}
.wi-owm-302:before {
    content: "\f019"
}
.wi-owm-310:before {
    content: "\f017"
}
.wi-owm-311:before,
.wi-owm-312:before {
    content: "\f019"
}
.wi-owm-313:before {
    content: "\f01a"
}
.wi-owm-314:before {
    content: "\f019"
}
.wi-owm-321:before,
.wi-owm-500:before {
    content: "\f01c"
}
.wi-owm-501:before,
.wi-owm-502:before,
.wi-owm-503:before,
.wi-owm-504:before {
    content: "\f019"
}
.wi-owm-511:before {
    content: "\f017"
}
.wi-owm-520:before,
.wi-owm-521:before,
.wi-owm-522:before {
    content: "\f01a"
}
.wi-owm-531:before {
    content: "\f01d"
}
.wi-owm-600:before,
.wi-owm-601:before {
    content: "\f01b"
}
.wi-owm-602:before {
    content: "\f0b5"
}
.wi-owm-611:before,
.wi-owm-612:before,
.wi-owm-615:before,
.wi-owm-616:before,
.wi-owm-620:before {
    content: "\f017"
}
.wi-owm-621:before,
.wi-owm-622:before {
    content: "\f01b"
}
.wi-owm-701:before {
    content: "\f01a"
}
.wi-owm-711:before {
    content: "\f062"
}
.wi-owm-721:before {
    content: "\f0b6"
}
.wi-owm-731:before {
    content: "\f063"
}
.wi-owm-741:before {
    content: "\f014"
}
.wi-owm-761:before,
.wi-owm-762:before {
    content: "\f063"
}
.wi-owm-771:before {
    content: "\f011"
}
.wi-owm-781:before {
    content: "\f056"
}
.wi-owm-800:before {
    content: "\f00d"
}
.wi-owm-801:before,
.wi-owm-802:before,
.wi-owm-803:before {
    content: "\f011"
}
.wi-owm-803:before {
    content: "\f012"
}
.wi-owm-804:before {
    content: "\f013"
}
.wi-owm-900:before {
    content: "\f056"
}
.wi-owm-901:before {
    content: "\f01d"
}
.wi-owm-902:before {
    content: "\f073"
}
.wi-owm-903:before {
    content: "\f076"
}
.wi-owm-904:before {
    content: "\f072"
}
.wi-owm-905:before {
    content: "\f021"
}
.wi-owm-906:before {
    content: "\f015"
}
.wi-owm-957:before {
    content: "\f050"
}
.wi-owm-day-200:before,
.wi-owm-day-201:before,
.wi-owm-day-202:before {
    content: "\f010"
}
.wi-owm-day-210:before,
.wi-owm-day-211:before,
.wi-owm-day-212:before,
.wi-owm-day-221:before {
    content: "\f005"
}
.wi-owm-day-230:before,
.wi-owm-day-231:before,
.wi-owm-day-232:before {
    content: "\f010"
}
.wi-owm-day-300:before,
.wi-owm-day-301:before {
    content: "\f00b"
}
.wi-owm-day-302:before,
.wi-owm-day-310:before,
.wi-owm-day-311:before,
.wi-owm-day-312:before,
.wi-owm-day-313:before,
.wi-owm-day-314:before {
    content: "\f008"
}
.wi-owm-day-321:before,
.wi-owm-day-500:before {
    content: "\f00b"
}
.wi-owm-day-501:before,
.wi-owm-day-502:before,
.wi-owm-day-503:before,
.wi-owm-day-504:before {
    content: "\f008"
}
.wi-owm-day-511:before {
    content: "\f006"
}
.wi-owm-day-520:before,
.wi-owm-day-521:before,
.wi-owm-day-522:before {
    content: "\f009"
}
.wi-owm-day-531:before {
    content: "\f00e"
}
.wi-owm-day-600:before {
    content: "\f00a"
}
.wi-owm-day-601:before {
    content: "\f0b2"
}
.wi-owm-day-602:before {
    content: "\f00a"
}
.wi-owm-day-611:before,
.wi-owm-day-612:before,
.wi-owm-day-615:before,
.wi-owm-day-616:before,
.wi-owm-day-620:before {
    content: "\f006"
}
.wi-owm-day-621:before,
.wi-owm-day-622:before {
    content: "\f00a"
}
.wi-owm-day-701:before {
    content: "\f009"
}
.wi-owm-day-711:before {
    content: "\f062"
}
.wi-owm-day-721:before {
    content: "\f0b6"
}
.wi-owm-day-731:before {
    content: "\f063"
}
.wi-owm-day-741:before {
    content: "\f003"
}
.wi-owm-day-761:before,
.wi-owm-day-762:before {
    content: "\f063"
}
.wi-owm-day-781:before {
    content: "\f056"
}
.wi-owm-day-800:before {
    content: "\f00d"
}
.wi-owm-day-801:before,
.wi-owm-day-802:before,
.wi-owm-day-803:before {
    content: "\f000"
}
.wi-owm-day-804:before {
    content: "\f00c"
}
.wi-owm-day-900:before {
    content: "\f056"
}
.wi-owm-day-902:before {
    content: "\f073"
}
.wi-owm-day-903:before {
    content: "\f076"
}
.wi-owm-day-904:before {
    content: "\f072"
}
.wi-owm-day-906:before {
    content: "\f004"
}
.wi-owm-day-957:before {
    content: "\f050"
}
.wi-owm-night-200:before,
.wi-owm-night-201:before,
.wi-owm-night-202:before {
    content: "\f02d"
}
.wi-owm-night-210:before,
.wi-owm-night-211:before,
.wi-owm-night-212:before,
.wi-owm-night-221:before {
    content: "\f025"
}
.wi-owm-night-230:before,
.wi-owm-night-231:before,
.wi-owm-night-232:before {
    content: "\f02d"
}
.wi-owm-night-300:before,
.wi-owm-night-301:before {
    content: "\f02b"
}
.wi-owm-night-302:before,
.wi-owm-night-310:before,
.wi-owm-night-311:before,
.wi-owm-night-312:before,
.wi-owm-night-313:before,
.wi-owm-night-314:before {
    content: "\f028"
}
.wi-owm-night-321:before,
.wi-owm-night-500:before {
    content: "\f02b"
}
.wi-owm-night-501:before,
.wi-owm-night-502:before,
.wi-owm-night-503:before,
.wi-owm-night-504:before {
    content: "\f028"
}
.wi-owm-night-511:before {
    content: "\f026"
}
.wi-owm-night-520:before,
.wi-owm-night-521:before,
.wi-owm-night-522:before {
    content: "\f029"
}
.wi-owm-night-531:before {
    content: "\f02c"
}
.wi-owm-night-600:before {
    content: "\f02a"
}
.wi-owm-night-601:before {
    content: "\f0b4"
}
.wi-owm-night-602:before {
    content: "\f02a"
}
.wi-owm-night-611:before,
.wi-owm-night-612:before,
.wi-owm-night-615:before,
.wi-owm-night-616:before,
.wi-owm-night-620:before {
    content: "\f026"
}
.wi-owm-night-621:before,
.wi-owm-night-622:before {
    content: "\f02a"
}
.wi-owm-night-701:before {
    content: "\f029"
}
.wi-owm-night-711:before {
    content: "\f062"
}
.wi-owm-night-721:before {
    content: "\f0b6"
}
.wi-owm-night-731:before {
    content: "\f063"
}
.wi-owm-night-741:before {
    content: "\f04a"
}
.wi-owm-night-761:before,
.wi-owm-night-762:before {
    content: "\f063"
}
.wi-owm-night-781:before {
    content: "\f056"
}
.wi-owm-night-800:before {
    content: "\f02e"
}
.wi-owm-night-801:before,
.wi-owm-night-802:before,
.wi-owm-night-803:before {
    content: "\f022"
}
.wi-owm-night-804:before {
    content: "\f086"
}
.wi-owm-night-900:before {
    content: "\f056"
}
.wi-owm-night-902:before {
    content: "\f073"
}
.wi-owm-night-903:before {
    content: "\f076"
}
.wi-owm-night-904:before {
    content: "\f072"
}
.wi-owm-night-906:before {
    content: "\f024"
}
.wi-owm-night-957:before {
    content: "\f050"
}
.glyphs.character-mapping {
    margin: 0 0 20px;
    padding: 20px 0 20px 30px;
    color: rgba(0, 0, 0, .5);
    border: 1px solid #d8e0e5;
    -webkit-border-radius: 3px;
    border-radius: 3px
}
.glyphs.character-mapping li {
    margin: 0 30px 20px 0;
    display: inline-block;
    width: 90px;
    text-align: center;
    font-size: 24px;
    color: #2b2b2b
}
.linea-icon {
    position: relative
}
.linea-icon svg {
    fill: #000
}
.glyphs.character-mapping input {
    margin: 0;
    padding: 5px 0;
    line-height: 12px;
    font-size: 12px;
    display: block;
    width: 100%;
    border: 1px solid #d8e0e5;
    text-align: center;
    outline: 0
}
.glyphs.character-mapping input:focus {
    border: 1px solid #fbde4a;
    -webkit-box-shadow: inset 0 0 3px #fbde4a;
    box-shadow: inset 0 0 3px #fbde4a
}
.glyphs.character-mapping input:hover {
    -webkit-box-shadow: inset 0 0 3px #fbde4a;
    box-shadow: inset 0 0 3px #fbde4a
}
@font-face {
    font-family: linea-arrows-10;
    src: url(../less/icons/linea-icons/fonts/linea-arrows-10.eot);
    src: url(../less/icons/linea-icons/fonts/linea-arrows-10.eot?#iefix) format("embedded-opentype"), url(../less/icons/linea-icons/fonts/linea-arrows-10.woff) format("woff"), url(../less/icons/linea-icons/fonts/linea-arrows-10.ttf) format("truetype"), url(../less/icons/linea-icons/fonts/linea-arrows-10.svg#linea-arrows-10) format("svg");
    font-weight: 400;
    font-style: normal
}
.linea-aerrow[data-icon]:before {
    font-family: linea-arrows-10!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-arrows-anticlockwise:before {
    content: "\e000"
}
.icon-arrows-anticlockwise-dashed:before {
    content: "\e001"
}
.icon-arrows-button-down:before {
    content: "\e002"
}
.icon-arrows-button-off:before {
    content: "\e003"
}
.icon-arrows-button-on:before {
    content: "\e004"
}
.icon-arrows-button-up:before {
    content: "\e005"
}
.icon-arrows-check:before {
    content: "\e006"
}
.icon-arrows-circle-check:before {
    content: "\e007"
}
.icon-arrows-circle-down:before {
    content: "\e008"
}
.icon-arrows-circle-downleft:before {
    content: "\e009"
}
.icon-arrows-circle-downright:before {
    content: "\e00a"
}
.icon-arrows-circle-left:before {
    content: "\e00b"
}
.icon-arrows-circle-minus:before {
    content: "\e00c"
}
.icon-arrows-circle-plus:before {
    content: "\e00d"
}
.icon-arrows-circle-remove:before {
    content: "\e00e"
}
.icon-arrows-circle-right:before {
    content: "\e00f"
}
.icon-arrows-circle-up:before {
    content: "\e010"
}
.icon-arrows-circle-upleft:before {
    content: "\e011"
}
.icon-arrows-circle-upright:before {
    content: "\e012"
}
.icon-arrows-clockwise:before {
    content: "\e013"
}
.icon-arrows-clockwise-dashed:before {
    content: "\e014"
}
.icon-arrows-compress:before {
    content: "\e015"
}
.icon-arrows-deny:before {
    content: "\e016"
}
.icon-arrows-diagonal:before {
    content: "\e017"
}
.icon-arrows-diagonal2:before {
    content: "\e018"
}
.icon-arrows-down:before {
    content: "\e019"
}
.icon-arrows-down-double:before {
    content: "\e01a"
}
.icon-arrows-downleft:before {
    content: "\e01b"
}
.icon-arrows-downright:before {
    content: "\e01c"
}
.icon-arrows-drag-down:before {
    content: "\e01d"
}
.icon-arrows-drag-down-dashed:before {
    content: "\e01e"
}
.icon-arrows-drag-horiz:before {
    content: "\e01f"
}
.icon-arrows-drag-left:before {
    content: "\e020"
}
.icon-arrows-drag-left-dashed:before {
    content: "\e021"
}
.icon-arrows-drag-right:before {
    content: "\e022"
}
.icon-arrows-drag-right-dashed:before {
    content: "\e023"
}
.icon-arrows-drag-up:before {
    content: "\e024"
}
.icon-arrows-drag-up-dashed:before {
    content: "\e025"
}
.icon-arrows-drag-vert:before {
    content: "\e026"
}
.icon-arrows-exclamation:before {
    content: "\e027"
}
.icon-arrows-expand:before {
    content: "\e028"
}
.icon-arrows-expand-diagonal1:before {
    content: "\e029"
}
.icon-arrows-expand-horizontal1:before {
    content: "\e02a"
}
.icon-arrows-expand-vertical1:before {
    content: "\e02b"
}
.icon-arrows-fit-horizontal:before {
    content: "\e02c"
}
.icon-arrows-fit-vertical:before {
    content: "\e02d"
}
.icon-arrows-glide:before {
    content: "\e02e"
}
.icon-arrows-glide-horizontal:before {
    content: "\e02f"
}
.icon-arrows-glide-vertical:before {
    content: "\e030"
}
.icon-arrows-hamburger1:before {
    content: "\e031"
}
.icon-arrows-hamburger-2:before {
    content: "\e032"
}
.icon-arrows-horizontal:before {
    content: "\e033"
}
.icon-arrows-info:before {
    content: "\e034"
}
.icon-arrows-keyboard-alt:before {
    content: "\e035"
}
.icon-arrows-keyboard-cmd:before {
    content: "\e036"
}
.icon-arrows-keyboard-delete:before {
    content: "\e037"
}
.icon-arrows-keyboard-down:before {
    content: "\e038"
}
.icon-arrows-keyboard-left:before {
    content: "\e039"
}
.icon-arrows-keyboard-return:before {
    content: "\e03a"
}
.icon-arrows-keyboard-right:before {
    content: "\e03b"
}
.icon-arrows-keyboard-shift:before {
    content: "\e03c"
}
.icon-arrows-keyboard-tab:before {
    content: "\e03d"
}
.icon-arrows-keyboard-up:before {
    content: "\e03e"
}
.icon-arrows-left:before {
    content: "\e03f"
}
.icon-arrows-left-double-32:before {
    content: "\e040"
}
.icon-arrows-minus:before {
    content: "\e041"
}
.icon-arrows-move:before {
    content: "\e042"
}
.icon-arrows-move2:before {
    content: "\e043"
}
.icon-arrows-move-bottom:before {
    content: "\e044"
}
.icon-arrows-move-left:before {
    content: "\e045"
}
.icon-arrows-move-right:before {
    content: "\e046"
}
.icon-arrows-move-top:before {
    content: "\e047"
}
.icon-arrows-plus:before {
    content: "\e048"
}
.icon-arrows-question:before {
    content: "\e049"
}
.icon-arrows-remove:before {
    content: "\e04a"
}
.icon-arrows-right:before {
    content: "\e04b"
}
.icon-arrows-right-double:before {
    content: "\e04c"
}
.icon-arrows-rotate:before {
    content: "\e04d"
}
.icon-arrows-rotate-anti:before {
    content: "\e04e"
}
.icon-arrows-rotate-anti-dashed:before {
    content: "\e04f"
}
.icon-arrows-rotate-dashed:before {
    content: "\e050"
}
.icon-arrows-shrink:before {
    content: "\e051"
}
.icon-arrows-shrink-diagonal1:before {
    content: "\e052"
}
.icon-arrows-shrink-diagonal2:before {
    content: "\e053"
}
.icon-arrows-shrink-horizonal2:before {
    content: "\e054"
}
.icon-arrows-shrink-horizontal1:before {
    content: "\e055"
}
.icon-arrows-shrink-vertical1:before {
    content: "\e056"
}
.icon-arrows-shrink-vertical2:before {
    content: "\e057"
}
.icon-arrows-sign-down:before {
    content: "\e058"
}
.icon-arrows-sign-left:before {
    content: "\e059"
}
.icon-arrows-sign-right:before {
    content: "\e05a"
}
.icon-arrows-sign-up:before {
    content: "\e05b"
}
.icon-arrows-slide-down1:before {
    content: "\e05c"
}
.icon-arrows-slide-down2:before {
    content: "\e05d"
}
.icon-arrows-slide-left1:before {
    content: "\e05e"
}
.icon-arrows-slide-left2:before {
    content: "\e05f"
}
.icon-arrows-slide-right1:before {
    content: "\e060"
}
.icon-arrows-slide-right2:before {
    content: "\e061"
}
.icon-arrows-slide-up1:before {
    content: "\e062"
}
.icon-arrows-slide-up2:before {
    content: "\e063"
}
.icon-arrows-slim-down:before {
    content: "\e064"
}
.icon-arrows-slim-down-dashed:before {
    content: "\e065"
}
.icon-arrows-slim-left:before {
    content: "\e066"
}
.icon-arrows-slim-left-dashed:before {
    content: "\e067"
}
.icon-arrows-slim-right:before {
    content: "\e068"
}
.icon-arrows-slim-right-dashed:before {
    content: "\e069"
}
.icon-arrows-slim-up:before {
    content: "\e06a"
}
.icon-arrows-slim-up-dashed:before {
    content: "\e06b"
}
.icon-arrows-square-check:before {
    content: "\e06c"
}
.icon-arrows-square-down:before {
    content: "\e06d"
}
.icon-arrows-square-downleft:before {
    content: "\e06e"
}
.icon-arrows-square-downright:before {
    content: "\e06f"
}
.icon-arrows-square-left:before {
    content: "\e070"
}
.icon-arrows-square-minus:before {
    content: "\e071"
}
.icon-arrows-square-plus:before {
    content: "\e072"
}
.icon-arrows-square-remove:before {
    content: "\e073"
}
.icon-arrows-square-right:before {
    content: "\e074"
}
.icon-arrows-square-up:before {
    content: "\e075"
}
.icon-arrows-square-upleft:before {
    content: "\e076"
}
.icon-arrows-square-upright:before {
    content: "\e077"
}
.icon-arrows-squares:before {
    content: "\e078"
}
.icon-arrows-stretch-diagonal1:before {
    content: "\e079"
}
.icon-arrows-stretch-diagonal2:before {
    content: "\e07a"
}
.icon-arrows-stretch-diagonal3:before {
    content: "\e07b"
}
.icon-arrows-stretch-diagonal4:before {
    content: "\e07c"
}
.icon-arrows-stretch-horizontal1:before {
    content: "\e07d"
}
.icon-arrows-stretch-horizontal2:before {
    content: "\e07e"
}
.icon-arrows-stretch-vertical1:before {
    content: "\e07f"
}
.icon-arrows-stretch-vertical2:before {
    content: "\e080"
}
.icon-arrows-switch-horizontal:before {
    content: "\e081"
}
.icon-arrows-switch-vertical:before {
    content: "\e082"
}
.icon-arrows-up:before {
    content: "\e083"
}
.icon-arrows-up-double-33:before {
    content: "\e084"
}
.icon-arrows-upleft:before {
    content: "\e085"
}
.icon-arrows-upright:before {
    content: "\e086"
}
.icon-arrows-vertical:before {
    content: "\e087"
}
@font-face {
    font-family: linea-basic-10;
    src: url(../less/icons/linea-icons/fonts/linea-basic-10.eot);
    src: url(../less/icons/linea-icons/fonts/linea-basic-10.eot?#iefix) format("embedded-opentype"), url(../less/icons/linea-icons/fonts/linea-basic-10.woff) format("woff"), url(../less/icons/linea-icons/fonts/linea-basic-10.ttf) format("truetype"), url(../less/icons/linea-icons/fonts/linea-basic-10.svg#linea-basic-10) format("svg");
    font-weight: 400;
    font-style: normal
}
.linea-basic[data-icon]:before {
    font-family: linea-basic-10!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-basic-accelerator:before {
    content: "a"
}
.icon-basic-alarm:before {
    content: "b"
}
.icon-basic-anchor:before {
    content: "c"
}
.icon-basic-anticlockwise:before {
    content: "d"
}
.icon-basic-archive:before {
    content: "e"
}
.icon-basic-archive-full:before {
    content: "f"
}
.icon-basic-ban:before {
    content: "g"
}
.icon-basic-battery-charge:before {
    content: "h"
}
.icon-basic-battery-empty:before {
    content: "i"
}
.icon-basic-battery-full:before {
    content: "j"
}
.icon-basic-battery-half:before {
    content: "k"
}
.icon-basic-bolt:before {
    content: "l"
}
.icon-basic-book:before {
    content: "m"
}
.icon-basic-book-pen:before {
    content: "n"
}
.icon-basic-book-pencil:before {
    content: "o"
}
.icon-basic-bookmark:before {
    content: "p"
}
.icon-basic-calculator:before {
    content: "q"
}
.icon-basic-calendar:before {
    content: "r"
}
.icon-basic-cards-diamonds:before {
    content: "s"
}
.icon-basic-cards-hearts:before {
    content: "t"
}
.icon-basic-case:before {
    content: "u"
}
.icon-basic-chronometer:before {
    content: "v"
}
.icon-basic-clessidre:before {
    content: "w"
}
.icon-basic-clock:before {
    content: "x"
}
.icon-basic-clockwise:before {
    content: "y"
}
.icon-basic-cloud:before {
    content: "z"
}
.icon-basic-clubs:before {
    content: "A"
}
.icon-basic-compass:before {
    content: "B"
}
.icon-basic-cup:before {
    content: "C"
}
.icon-basic-diamonds:before {
    content: "D"
}
.icon-basic-display:before {
    content: "E"
}
.icon-basic-download:before {
    content: "F"
}
.icon-basic-exclamation:before {
    content: "G"
}
.icon-basic-eye:before {
    content: "H"
}
.icon-basic-eye-closed:before {
    content: "I"
}
.icon-basic-female:before {
    content: "J"
}
.icon-basic-flag1:before {
    content: "K"
}
.icon-basic-flag2:before {
    content: "L"
}
.icon-basic-floppydisk:before {
    content: "M"
}
.icon-basic-folder:before {
    content: "N"
}
.icon-basic-folder-multiple:before {
    content: "O"
}
.icon-basic-gear:before {
    content: "P"
}
.icon-basic-geolocalize-01:before {
    content: "Q"
}
.icon-basic-geolocalize-05:before {
    content: "R"
}
.icon-basic-globe:before {
    content: "S"
}
.icon-basic-gunsight:before {
    content: "T"
}
.icon-basic-hammer:before {
    content: "U"
}
.icon-basic-headset:before {
    content: "V"
}
.icon-basic-heart:before {
    content: "W"
}
.icon-basic-heart-broken:before {
    content: "X"
}
.icon-basic-helm:before {
    content: "Y"
}
.icon-basic-home:before {
    content: "Z"
}
.icon-basic-info:before {
    content: "0"
}
.icon-basic-ipod:before {
    content: "1"
}
.icon-basic-joypad:before {
    content: "2"
}
.icon-basic-key:before {
    content: "3"
}
.icon-basic-keyboard:before {
    content: "4"
}
.icon-basic-laptop:before {
    content: "5"
}
.icon-basic-life-buoy:before {
    content: "6"
}
.icon-basic-lightbulb:before {
    content: "7"
}
.icon-basic-link:before {
    content: "8"
}
.icon-basic-lock:before {
    content: "9"
}
.icon-basic-lock-open:before {
    content: "!"
}
.icon-basic-magic-mouse:before {
    content: "\""
}
.icon-basic-magnifier:before {
    content: "#"
}
.icon-basic-magnifier-minus:before {
    content: "$"
}
.icon-basic-magnifier-plus:before {
    content: "%"
}
.icon-basic-mail:before {
    content: "&"
}
.icon-basic-mail-multiple:before {
    content: "'"
}
.icon-basic-mail-open:before {
    content: "("
}
.icon-basic-mail-open-text:before {
    content: ")"
}
.icon-basic-male:before {
    content: "*"
}
.icon-basic-map:before {
    content: "+"
}
.icon-basic-message:before {
    content: ","
}
.icon-basic-message-multiple:before {
    content: "-"
}
.icon-basic-message-txt:before {
    content: "."
}
.icon-basic-mixer2:before {
    content: "/"
}
.icon-basic-mouse:before {
    content: ":"
}
.icon-basic-notebook:before {
    content: ";"
}
.icon-basic-notebook-pen:before {
    content: "<"
}
.icon-basic-notebook-pencil:before {
    content: "="
}
.icon-basic-paperplane:before {
    content: ">"
}
.icon-basic-pencil-ruler:before {
    content: "?"
}
.icon-basic-pencil-ruler-pen:before {
    content: "@"
}
.icon-basic-photo:before {
    content: "["
}
.icon-basic-picture:before {
    content: "]"
}
.icon-basic-picture-multiple:before {
    content: "^"
}
.icon-basic-pin1:before {
    content: "_"
}
.icon-basic-pin2:before {
    content: "`"
}
.icon-basic-postcard:before {
    content:"{"
}
.icon-basic-postcard-multiple:before {
    content: "|"
}
.icon-basic-printer:before {
    content: "}"
}
.icon-basic-question:before {
    content: "~"
}
.icon-basic-rss:before {
    content: "\\"
}
.icon-basic-server:before {
    content: "\e000"
}
.icon-basic-server2:before {
    content: "\e001"
}
.icon-basic-server-cloud:before {
    content: "\e002"
}
.icon-basic-server-download:before {
    content: "\e003"
}
.icon-basic-server-upload:before {
    content: "\e004"
}
.icon-basic-settings:before {
    content: "\e005"
}
.icon-basic-share:before {
    content: "\e006"
}
.icon-basic-sheet:before {
    content: "\e007"
}
.icon-basic-sheet-multiple:before {
    content: "\e008"
}
.icon-basic-sheet-pen:before {
    content: "\e009"
}
.icon-basic-sheet-pencil:before {
    content: "\e00a"
}
.icon-basic-sheet-txt:before {
    content: "\e00b"
}
.icon-basic-signs:before {
    content: "\e00c"
}
.icon-basic-smartphone:before {
    content: "\e00d"
}
.icon-basic-spades:before {
    content: "\e00e"
}
.icon-basic-spread:before {
    content: "\e00f"
}
.icon-basic-spread-bookmark:before {
    content: "\e010"
}
.icon-basic-spread-text:before {
    content: "\e011"
}
.icon-basic-spread-text-bookmark:before {
    content: "\e012"
}
.icon-basic-star:before {
    content: "\e013"
}
.icon-basic-tablet:before {
    content: "\e014"
}
.icon-basic-target:before {
    content: "\e015"
}
.icon-basic-todo:before {
    content: "\e016"
}
.icon-basic-todo-pen:before {
    content: "\e017"
}
.icon-basic-todo-pencil:before {
    content: "\e018"
}
.icon-basic-todo-txt:before {
    content: "\e019"
}
.icon-basic-todolist-pen:before {
    content: "\e01a"
}
.icon-basic-todolist-pencil:before {
    content: "\e01b"
}
.icon-basic-trashcan:before {
    content: "\e01c"
}
.icon-basic-trashcan-full:before {
    content: "\e01d"
}
.icon-basic-trashcan-refresh:before {
    content: "\e01e"
}
.icon-basic-trashcan-remove:before {
    content: "\e01f"
}
.icon-basic-upload:before {
    content: "\e020"
}
.icon-basic-usb:before {
    content: "\e021"
}
.icon-basic-video:before {
    content: "\e022"
}
.icon-basic-watch:before {
    content: "\e023"
}
.icon-basic-webpage:before {
    content: "\e024"
}
.icon-basic-webpage-img-txt:before {
    content: "\e025"
}
.icon-basic-webpage-multiple:before {
    content: "\e026"
}
.icon-basic-webpage-txt:before {
    content: "\e027"
}
.icon-basic-world:before {
    content: "\e028"
}
@font-face {
    font-family: linea-basic-elaboration-10;
    src: url(../less/icons/linea-icons/fonts/linea-basic-elaboration-10.eot);
    src: url(../less/icons/linea-icons/fonts/linea-basic-elaboration-10.eot?#iefix) format("embedded-opentype"), url(../less/icons/linea-icons/fonts/linea-basic-elaboration-10.woff) format("woff"), url(../less/icons/linea-icons/fonts/linea-basic-elaboration-10.ttf) format("truetype"), url(../less/icons/linea-icons/fonts/linea-basic-elaboration-10.svg#linea-basic-elaboration-10) format("svg");
    font-weight: 400;
    font-style: normal
}
.linea-elaborate[data-icon]:before {
    font-family: linea-basic-elaboration-10!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-basic-elaboration-bookmark-checck:before {
    content: "a"
}
.icon-basic-elaboration-bookmark-minus:before {
    content: "b"
}
.icon-basic-elaboration-bookmark-plus:before {
    content: "c"
}
.icon-basic-elaboration-bookmark-remove:before {
    content: "d"
}
.icon-basic-elaboration-briefcase-check:before {
    content: "e"
}
.icon-basic-elaboration-briefcase-download:before {
    content: "f"
}
.icon-basic-elaboration-briefcase-flagged:before {
    content: "g"
}
.icon-basic-elaboration-briefcase-minus:before {
    content: "h"
}
.icon-basic-elaboration-briefcase-plus:before {
    content: "i"
}
.icon-basic-elaboration-briefcase-refresh:before {
    content: "j"
}
.icon-basic-elaboration-briefcase-remove:before {
    content: "k"
}
.icon-basic-elaboration-briefcase-search:before {
    content: "l"
}
.icon-basic-elaboration-briefcase-star:before {
    content: "m"
}
.icon-basic-elaboration-briefcase-upload:before {
    content: "n"
}
.icon-basic-elaboration-browser-check:before {
    content: "o"
}
.icon-basic-elaboration-browser-download:before {
    content: "p"
}
.icon-basic-elaboration-browser-minus:before {
    content: "q"
}
.icon-basic-elaboration-browser-plus:before {
    content: "r"
}
.icon-basic-elaboration-browser-refresh:before {
    content: "s"
}
.icon-basic-elaboration-browser-remove:before {
    content: "t"
}
.icon-basic-elaboration-browser-search:before {
    content: "u"
}
.icon-basic-elaboration-browser-star:before {
    content: "v"
}
.icon-basic-elaboration-browser-upload:before {
    content: "w"
}
.icon-basic-elaboration-calendar-check:before {
    content: "x"
}
.icon-basic-elaboration-calendar-cloud:before {
    content: "y"
}
.icon-basic-elaboration-calendar-download:before {
    content: "z"
}
.icon-basic-elaboration-calendar-empty:before {
    content: "A"
}
.icon-basic-elaboration-calendar-flagged:before {
    content: "B"
}
.icon-basic-elaboration-calendar-heart:before {
    content: "C"
}
.icon-basic-elaboration-calendar-minus:before {
    content: "D"
}
.icon-basic-elaboration-calendar-next:before {
    content: "E"
}
.icon-basic-elaboration-calendar-noaccess:before {
    content: "F"
}
.icon-basic-elaboration-calendar-pencil:before {
    content: "G"
}
.icon-basic-elaboration-calendar-plus:before {
    content: "H"
}
.icon-basic-elaboration-calendar-previous:before {
    content: "I"
}
.icon-basic-elaboration-calendar-refresh:before {
    content: "J"
}
.icon-basic-elaboration-calendar-remove:before {
    content: "K"
}
.icon-basic-elaboration-calendar-search:before {
    content: "L"
}
.icon-basic-elaboration-calendar-star:before {
    content: "M"
}
.icon-basic-elaboration-calendar-upload:before {
    content: "N"
}
.icon-basic-elaboration-cloud-check:before {
    content: "O"
}
.icon-basic-elaboration-cloud-download:before {
    content: "P"
}
.icon-basic-elaboration-cloud-minus:before {
    content: "Q"
}
.icon-basic-elaboration-cloud-noaccess:before {
    content: "R"
}
.icon-basic-elaboration-cloud-plus:before {
    content: "S"
}
.icon-basic-elaboration-cloud-refresh:before {
    content: "T"
}
.icon-basic-elaboration-cloud-remove:before {
    content: "U"
}
.icon-basic-elaboration-cloud-search:before {
    content: "V"
}
.icon-basic-elaboration-cloud-upload:before {
    content: "W"
}
.icon-basic-elaboration-document-check:before {
    content: "X"
}
.icon-basic-elaboration-document-cloud:before {
    content: "Y"
}
.icon-basic-elaboration-document-download:before {
    content: "Z"
}
.icon-basic-elaboration-document-flagged:before {
    content: "0"
}
.icon-basic-elaboration-document-graph:before {
    content: "1"
}
.icon-basic-elaboration-document-heart:before {
    content: "2"
}
.icon-basic-elaboration-document-minus:before {
    content: "3"
}
.icon-basic-elaboration-document-next:before {
    content: "4"
}
.icon-basic-elaboration-document-noaccess:before {
    content: "5"
}
.icon-basic-elaboration-document-note:before {
    content: "6"
}
.icon-basic-elaboration-document-pencil:before {
    content: "7"
}
.icon-basic-elaboration-document-picture:before {
    content: "8"
}
.icon-basic-elaboration-document-plus:before {
    content: "9"
}
.icon-basic-elaboration-document-previous:before {
    content: "!"
}
.icon-basic-elaboration-document-refresh:before {
    content: "\""
}
.icon-basic-elaboration-document-remove:before {
    content: "#"
}
.icon-basic-elaboration-document-search:before {
    content: "$"
}
.icon-basic-elaboration-document-star:before {
    content: "%"
}
.icon-basic-elaboration-document-upload:before {
    content: "&"
}
.icon-basic-elaboration-folder-check:before {
    content: "'"
}
.icon-basic-elaboration-folder-cloud:before {
    content: "("
}
.icon-basic-elaboration-folder-document:before {
    content: ")"
}
.icon-basic-elaboration-folder-download:before {
    content: "*"
}
.icon-basic-elaboration-folder-flagged:before {
    content: "+"
}
.icon-basic-elaboration-folder-graph:before {
    content: ","
}
.icon-basic-elaboration-folder-heart:before {
    content: "-"
}
.icon-basic-elaboration-folder-minus:before {
    content: "."
}
.icon-basic-elaboration-folder-next:before {
    content: "/"
}
.icon-basic-elaboration-folder-noaccess:before {
    content: ":"
}
.icon-basic-elaboration-folder-note:before {
    content: ";"
}
.icon-basic-elaboration-folder-pencil:before {
    content: "<"
}
.icon-basic-elaboration-folder-picture:before {
    content: "="
}
.icon-basic-elaboration-folder-plus:before {
    content: ">"
}
.icon-basic-elaboration-folder-previous:before {
    content: "?"
}
.icon-basic-elaboration-folder-refresh:before {
    content: "@"
}
.icon-basic-elaboration-folder-remove:before {
    content: "["
}
.icon-basic-elaboration-folder-search:before {
    content: "]"
}
.icon-basic-elaboration-folder-star:before {
    content: "^"
}
.icon-basic-elaboration-folder-upload:before {
    content: "_"
}
.icon-basic-elaboration-mail-check:before {
    content: "`"
}
.icon-basic-elaboration-mail-cloud:before {
    content:"{"
}
.icon-basic-elaboration-mail-document:before {
    content: "|"
}
.icon-basic-elaboration-mail-download:before {
    content: "}"
}
.icon-basic-elaboration-mail-flagged:before {
    content: "~"
}
.icon-basic-elaboration-mail-heart:before {
    content: "\\"
}
.icon-basic-elaboration-mail-next:before {
    content: "\e000"
}
.icon-basic-elaboration-mail-noaccess:before {
    content: "\e001"
}
.icon-basic-elaboration-mail-note:before {
    content: "\e002"
}
.icon-basic-elaboration-mail-pencil:before {
    content: "\e003"
}
.icon-basic-elaboration-mail-picture:before {
    content: "\e004"
}
.icon-basic-elaboration-mail-previous:before {
    content: "\e005"
}
.icon-basic-elaboration-mail-refresh:before {
    content: "\e006"
}
.icon-basic-elaboration-mail-remove:before {
    content: "\e007"
}
.icon-basic-elaboration-mail-search:before {
    content: "\e008"
}
.icon-basic-elaboration-mail-star:before {
    content: "\e009"
}
.icon-basic-elaboration-mail-upload:before {
    content: "\e00a"
}
.icon-basic-elaboration-message-check:before {
    content: "\e00b"
}
.icon-basic-elaboration-message-dots:before {
    content: "\e00c"
}
.icon-basic-elaboration-message-happy:before {
    content: "\e00d"
}
.icon-basic-elaboration-message-heart:before {
    content: "\e00e"
}
.icon-basic-elaboration-message-minus:before {
    content: "\e00f"
}
.icon-basic-elaboration-message-note:before {
    content: "\e010"
}
.icon-basic-elaboration-message-plus:before {
    content: "\e011"
}
.icon-basic-elaboration-message-refresh:before {
    content: "\e012"
}
.icon-basic-elaboration-message-remove:before {
    content: "\e013"
}
.icon-basic-elaboration-message-sad:before {
    content: "\e014"
}
.icon-basic-elaboration-smartphone-cloud:before {
    content: "\e015"
}
.icon-basic-elaboration-smartphone-heart:before {
    content: "\e016"
}
.icon-basic-elaboration-smartphone-noaccess:before {
    content: "\e017"
}
.icon-basic-elaboration-smartphone-note:before {
    content: "\e018"
}
.icon-basic-elaboration-smartphone-pencil:before {
    content: "\e019"
}
.icon-basic-elaboration-smartphone-picture:before {
    content: "\e01a"
}
.icon-basic-elaboration-smartphone-refresh:before {
    content: "\e01b"
}
.icon-basic-elaboration-smartphone-search:before {
    content: "\e01c"
}
.icon-basic-elaboration-tablet-cloud:before {
    content: "\e01d"
}
.icon-basic-elaboration-tablet-heart:before {
    content: "\e01e"
}
.icon-basic-elaboration-tablet-noaccess:before {
    content: "\e01f"
}
.icon-basic-elaboration-tablet-note:before {
    content: "\e020"
}
.icon-basic-elaboration-tablet-pencil:before {
    content: "\e021"
}
.icon-basic-elaboration-tablet-picture:before {
    content: "\e022"
}
.icon-basic-elaboration-tablet-refresh:before {
    content: "\e023"
}
.icon-basic-elaboration-tablet-search:before {
    content: "\e024"
}
.icon-basic-elaboration-todolist-2:before {
    content: "\e025"
}
.icon-basic-elaboration-todolist-check:before {
    content: "\e026"
}
.icon-basic-elaboration-todolist-cloud:before {
    content: "\e027"
}
.icon-basic-elaboration-todolist-download:before {
    content: "\e028"
}
.icon-basic-elaboration-todolist-flagged:before {
    content: "\e029"
}
.icon-basic-elaboration-todolist-minus:before {
    content: "\e02a"
}
.icon-basic-elaboration-todolist-noaccess:before {
    content: "\e02b"
}
.icon-basic-elaboration-todolist-pencil:before {
    content: "\e02c"
}
.icon-basic-elaboration-todolist-plus:before {
    content: "\e02d"
}
.icon-basic-elaboration-todolist-refresh:before {
    content: "\e02e"
}
.icon-basic-elaboration-todolist-remove:before {
    content: "\e02f"
}
.icon-basic-elaboration-todolist-search:before {
    content: "\e030"
}
.icon-basic-elaboration-todolist-star:before {
    content: "\e031"
}
.icon-basic-elaboration-todolist-upload:before {
    content: "\e032"
}
@font-face {
    font-family: linea-ecommerce-10;
    src: url(../less/icons/linea-icons/fonts/linea-ecommerce-10.eot);
    src: url(../less/icons/linea-icons/fonts/linea-ecommerce-10.eot?#iefix) format("embedded-opentype"), url(../less/icons/linea-icons/fonts/linea-ecommerce-10.woff) format("woff"), url(../less/icons/linea-icons/fonts/linea-ecommerce-10.ttf) format("truetype"), url(../less/icons/linea-icons/fonts/linea-ecommerce-10.svg#linea-ecommerce-10) format("svg");
    font-weight: 400;
    font-style: normal
}
.linea-ecommerce[data-icon]:before {
    font-family: linea-ecommerce-10!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-ecommerce-bag:before {
    content: "a"
}
.icon-ecommerce-bag-check:before {
    content: "b"
}
.icon-ecommerce-bag-cloud:before {
    content: "c"
}
.icon-ecommerce-bag-download:before {
    content: "d"
}
.icon-ecommerce-bag-minus:before {
    content: "e"
}
.icon-ecommerce-bag-plus:before {
    content: "f"
}
.icon-ecommerce-bag-refresh:before {
    content: "g"
}
.icon-ecommerce-bag-remove:before {
    content: "h"
}
.icon-ecommerce-bag-search:before {
    content: "i"
}
.icon-ecommerce-bag-upload:before {
    content: "j"
}
.icon-ecommerce-banknote:before {
    content: "k"
}
.icon-ecommerce-banknotes:before {
    content: "l"
}
.icon-ecommerce-basket:before {
    content: "m"
}
.icon-ecommerce-basket-check:before {
    content: "n"
}
.icon-ecommerce-basket-cloud:before {
    content: "o"
}
.icon-ecommerce-basket-download:before {
    content: "p"
}
.icon-ecommerce-basket-minus:before {
    content: "q"
}
.icon-ecommerce-basket-plus:before {
    content: "r"
}
.icon-ecommerce-basket-refresh:before {
    content: "s"
}
.icon-ecommerce-basket-remove:before {
    content: "t"
}
.icon-ecommerce-basket-search:before {
    content: "u"
}
.icon-ecommerce-basket-upload:before {
    content: "v"
}
.icon-ecommerce-bath:before {
    content: "w"
}
.icon-ecommerce-cart:before {
    content: "x"
}
.icon-ecommerce-cart-check:before {
    content: "y"
}
.icon-ecommerce-cart-cloud:before {
    content: "z"
}
.icon-ecommerce-cart-content:before {
    content: "A"
}
.icon-ecommerce-cart-download:before {
    content: "B"
}
.icon-ecommerce-cart-minus:before {
    content: "C"
}
.icon-ecommerce-cart-plus:before {
    content: "D"
}
.icon-ecommerce-cart-refresh:before {
    content: "E"
}
.icon-ecommerce-cart-remove:before {
    content: "F"
}
.icon-ecommerce-cart-search:before {
    content: "G"
}
.icon-ecommerce-cart-upload:before {
    content: "H"
}
.icon-ecommerce-cent:before {
    content: "I"
}
.icon-ecommerce-colon:before {
    content: "J"
}
.icon-ecommerce-creditcard:before {
    content: "K"
}
.icon-ecommerce-diamond:before {
    content: "L"
}
.icon-ecommerce-dollar:before {
    content: "M"
}
.icon-ecommerce-euro:before {
    content: "N"
}
.icon-ecommerce-franc:before {
    content: "O"
}
.icon-ecommerce-gift:before {
    content: "P"
}
.icon-ecommerce-graph1:before {
    content: "Q"
}
.icon-ecommerce-graph2:before {
    content: "R"
}
.icon-ecommerce-graph3:before {
    content: "S"
}
.icon-ecommerce-graph-decrease:before {
    content: "T"
}
.icon-ecommerce-graph-increase:before {
    content: "U"
}
.icon-ecommerce-guarani:before {
    content: "V"
}
.icon-ecommerce-kips:before {
    content: "W"
}
.icon-ecommerce-lira:before {
    content: "X"
}
.icon-ecommerce-megaphone:before {
    content: "Y"
}
.icon-ecommerce-money:before {
    content: "Z"
}
.icon-ecommerce-naira:before {
    content: "0"
}
.icon-ecommerce-pesos:before {
    content: "1"
}
.icon-ecommerce-pound:before {
    content: "2"
}
.icon-ecommerce-receipt:before {
    content: "3"
}
.icon-ecommerce-receipt-bath:before {
    content: "4"
}
.icon-ecommerce-receipt-cent:before {
    content: "5"
}
.icon-ecommerce-receipt-dollar:before {
    content: "6"
}
.icon-ecommerce-receipt-euro:before {
    content: "7"
}
.icon-ecommerce-receipt-franc:before {
    content: "8"
}
.icon-ecommerce-receipt-guarani:before {
    content: "9"
}
.icon-ecommerce-receipt-kips:before {
    content: "!"
}
.icon-ecommerce-receipt-lira:before {
    content: "\""
}
.icon-ecommerce-receipt-naira:before {
    content: "#"
}
.icon-ecommerce-receipt-pesos:before {
    content: "$"
}
.icon-ecommerce-receipt-pound:before {
    content: "%"
}
.icon-ecommerce-receipt-rublo:before {
    content: "&"
}
.icon-ecommerce-receipt-rupee:before {
    content: "'"
}
.icon-ecommerce-receipt-tugrik:before {
    content: "("
}
.icon-ecommerce-receipt-won:before {
    content: ")"
}
.icon-ecommerce-receipt-yen:before {
    content: "*"
}
.icon-ecommerce-receipt-yen2:before {
    content: "+"
}
.icon-ecommerce-recept-colon:before {
    content: ","
}
.icon-ecommerce-rublo:before {
    content: "-"
}
.icon-ecommerce-rupee:before {
    content: "."
}
.icon-ecommerce-safe:before {
    content: "/"
}
.icon-ecommerce-sale:before {
    content: ":"
}
.icon-ecommerce-sales:before {
    content: ";"
}
.icon-ecommerce-ticket:before {
    content: "<"
}
.icon-ecommerce-tugriks:before {
    content: "="
}
.icon-ecommerce-wallet:before {
    content: ">"
}
.icon-ecommerce-won:before {
    content: "?"
}
.icon-ecommerce-yen:before {
    content: "@"
}
.icon-ecommerce-yen2:before {
    content: "["
}
@font-face {
    font-family: linea-music-10;
    src: url(../less/icons/linea-icons/fonts/linea-music-10.eot);
    src: url(../less/icons/linea-icons/fonts/linea-music-10.eot?#iefix) format("embedded-opentype"), url(../less/icons/linea-icons/fonts/linea-music-10.woff) format("woff"), url(../less/icons/linea-icons/fonts/linea-music-10.ttf) format("truetype"), url(../less/icons/linea-icons/fonts/linea-music-10.svg#linea-music-10) format("svg");
    font-weight: 400;
    font-style: normal
}
.linea-music[data-icon]:before {
    font-family: linea-music-10!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-music-beginning-button:before {
    content: "a"
}
.icon-music-bell:before {
    content: "b"
}
.icon-music-cd:before {
    content: "c"
}
.icon-music-diapason:before {
    content: "d"
}
.icon-music-eject-button:before {
    content: "e"
}
.icon-music-end-button:before {
    content: "f"
}
.icon-music-fastforward-button:before {
    content: "g"
}
.icon-music-headphones:before {
    content: "h"
}
.icon-music-ipod:before {
    content: "i"
}
.icon-music-loudspeaker:before {
    content: "j"
}
.icon-music-microphone:before {
    content: "k"
}
.icon-music-microphone-old:before {
    content: "l"
}
.icon-music-mixer:before {
    content: "m"
}
.icon-music-mute:before {
    content: "n"
}
.icon-music-note-multiple:before {
    content: "o"
}
.icon-music-note-single:before {
    content: "p"
}
.icon-music-pause-button:before {
    content: "q"
}
.icon-music-play-button:before {
    content: "r"
}
.icon-music-playlist:before {
    content: "s"
}
.icon-music-radio-ghettoblaster:before {
    content: "t"
}
.icon-music-radio-portable:before {
    content: "u"
}
.icon-music-record:before {
    content: "v"
}
.icon-music-recordplayer:before {
    content: "w"
}
.icon-music-repeat-button:before {
    content: "x"
}
.icon-music-rewind-button:before {
    content: "y"
}
.icon-music-shuffle-button:before {
    content: "z"
}
.icon-music-stop-button:before {
    content: "A"
}
.icon-music-tape:before {
    content: "B"
}
.icon-music-volume-down:before {
    content: "C"
}
.icon-music-volume-up:before {
    content: "D"
}
@font-face {
    font-family: linea-software-10;
    src: url(../less/icons/linea-icons/fonts/linea-software-10.eot);
    src: url(../less/icons/linea-icons/fonts/linea-software-10.eot?#iefix) format("embedded-opentype"), url(../less/icons/linea-icons/fonts/linea-software-10.woff) format("woff"), url(../less/icons/linea-icons/fonts/linea-software-10.ttf) format("truetype"), url(../less/icons/linea-icons/fonts/linea-software-10.svg#linea-software-10) format("svg");
    font-weight: 400;
    font-style: normal
}
.linea-software[data-icon]:before {
    font-family: linea-software-10!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-software-add-vectorpoint:before {
    content: "a"
}
.icon-software-box-oval:before {
    content: "b"
}
.icon-software-box-polygon:before {
    content: "c"
}
.icon-software-box-rectangle:before {
    content: "d"
}
.icon-software-box-roundedrectangle:before {
    content: "e"
}
.icon-software-character:before {
    content: "f"
}
.icon-software-crop:before {
    content: "g"
}
.icon-software-eyedropper:before {
    content: "h"
}
.icon-software-font-allcaps:before {
    content: "i"
}
.icon-software-font-baseline-shift:before {
    content: "j"
}
.icon-software-font-horizontal-scale:before {
    content: "k"
}
.icon-software-font-kerning:before {
    content: "l"
}
.icon-software-font-leading:before {
    content: "m"
}
.icon-software-font-size:before {
    content: "n"
}
.icon-software-font-smallcapital:before {
    content: "o"
}
.icon-software-font-smallcaps:before {
    content: "p"
}
.icon-software-font-strikethrough:before {
    content: "q"
}
.icon-software-font-tracking:before {
    content: "r"
}
.icon-software-font-underline:before {
    content: "s"
}
.icon-software-font-vertical-scale:before {
    content: "t"
}
.icon-software-horizontal-align-center:before {
    content: "u"
}
.icon-software-horizontal-align-left:before {
    content: "v"
}
.icon-software-horizontal-align-right:before {
    content: "w"
}
.icon-software-horizontal-distribute-center:before {
    content: "x"
}
.icon-software-horizontal-distribute-left:before {
    content: "y"
}
.icon-software-horizontal-distribute-right:before {
    content: "z"
}
.icon-software-indent-firstline:before {
    content: "A"
}
.icon-software-indent-left:before {
    content: "B"
}
.icon-software-indent-right:before {
    content: "C"
}
.icon-software-lasso:before {
    content: "D"
}
.icon-software-layers1:before {
    content: "E"
}
.icon-software-layers2:before {
    content: "F"
}
.icon-software-layout:before {
    content: "G"
}
.icon-software-layout-2columns:before {
    content: "H"
}
.icon-software-layout-3columns:before {
    content: "I"
}
.icon-software-layout-4boxes:before {
    content: "J"
}
.icon-software-layout-4columns:before {
    content: "K"
}
.icon-software-layout-4lines:before {
    content: "L"
}
.icon-software-layout-8boxes:before {
    content: "M"
}
.icon-software-layout-header:before {
    content: "N"
}
.icon-software-layout-header-2columns:before {
    content: "O"
}
.icon-software-layout-header-3columns:before {
    content: "P"
}
.icon-software-layout-header-4boxes:before {
    content: "Q"
}
.icon-software-layout-header-4columns:before {
    content: "R"
}
.icon-software-layout-header-complex:before {
    content: "S"
}
.icon-software-layout-header-complex2:before {
    content: "T"
}
.icon-software-layout-header-complex3:before {
    content: "U"
}
.icon-software-layout-header-complex4:before {
    content: "V"
}
.icon-software-layout-header-sideleft:before {
    content: "W"
}
.icon-software-layout-header-sideright:before {
    content: "X"
}
.icon-software-layout-sidebar-left:before {
    content: "Y"
}
.icon-software-layout-sidebar-right:before {
    content: "Z"
}
.icon-software-magnete:before {
    content: "0"
}
.icon-software-pages:before {
    content: "1"
}
.icon-software-paintbrush:before {
    content: "2"
}
.icon-software-paintbucket:before {
    content: "3"
}
.icon-software-paintroller:before {
    content: "4"
}
.icon-software-paragraph:before {
    content: "5"
}
.icon-software-paragraph-align-left:before {
    content: "6"
}
.icon-software-paragraph-align-right:before {
    content: "7"
}
.icon-software-paragraph-center:before {
    content: "8"
}
.icon-software-paragraph-justify-all:before {
    content: "9"
}
.icon-software-paragraph-justify-center:before {
    content: "!"
}
.icon-software-paragraph-justify-left:before {
    content: "\""
}
.icon-software-paragraph-justify-right:before {
    content: "#"
}
.icon-software-paragraph-space-after:before {
    content: "$"
}
.icon-software-paragraph-space-before:before {
    content: "%"
}
.icon-software-pathfinder-exclude:before {
    content: "&"
}
.icon-software-pathfinder-intersect:before {
    content: "'"
}
.icon-software-pathfinder-subtract:before {
    content: "("
}
.icon-software-pathfinder-unite:before {
    content: ")"
}
.icon-software-pen:before {
    content: "*"
}
.icon-software-pen-add:before {
    content: "+"
}
.icon-software-pen-remove:before {
    content: ","
}
.icon-software-pencil:before {
    content: "-"
}
.icon-software-polygonallasso:before {
    content: "."
}
.icon-software-reflect-horizontal:before {
    content: "/"
}
.icon-software-reflect-vertical:before {
    content: ":"
}
.icon-software-remove-vectorpoint:before {
    content: ";"
}
.icon-software-scale-expand:before {
    content: "<"
}
.icon-software-scale-reduce:before {
    content: "="
}
.icon-software-selection-oval:before {
    content: ">"
}
.icon-software-selection-polygon:before {
    content: "?"
}
.icon-software-selection-rectangle:before {
    content: "@"
}
.icon-software-selection-roundedrectangle:before {
    content: "["
}
.icon-software-shape-oval:before {
    content: "]"
}
.icon-software-shape-polygon:before {
    content: "^"
}
.icon-software-shape-rectangle:before {
    content: "_"
}
.icon-software-shape-roundedrectangle:before {
    content: "`"
}
.icon-software-slice:before {
    content:"{"
}
.icon-software-transform-bezier:before {
    content: "|"
}
.icon-software-vector-box:before {
    content: "}"
}
.icon-software-vector-composite:before {
    content: "~"
}
.icon-software-vector-line:before {
    content: "\\"
}
.icon-software-vertical-align-bottom:before {
    content: "\e000"
}
.icon-software-vertical-align-center:before {
    content: "\e001"
}
.icon-software-vertical-align-top:before {
    content: "\e002"
}
.icon-software-vertical-distribute-bottom:before {
    content: "\e003"
}
.icon-software-vertical-distribute-center:before {
    content: "\e004"
}
.icon-software-vertical-distribute-top:before {
    content: "\e005"
}
@font-face {
    font-family: linea-weather-10;
    src: url(../less/icons/linea-icons/fonts/linea-weather-10.eot);
    src: url(../less/icons/linea-icons/fonts/linea-weather-10.eot?#iefix) format("embedded-opentype"), url(../less/icons/linea-icons/fonts/linea-weather-10.woff) format("woff"), url(../less/icons/linea-icons/fonts/linea-weather-10.ttf) format("truetype"), url(../less/icons/linea-icons/fonts/linea-weather-10.svg#linea-weather-10) format("svg");
    font-weight: 400;
    font-style: normal
}
.linea-weather[data-icon]:before {
    font-family: linea-weather-10!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
[class*="linea- icon-"]:before,
[class^=linea-icon-]:before {
    font-family: linea-weather-10!important;
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.icon-weather-aquarius:before {
    content: "\e000"
}
.icon-weather-aries:before {
    content: "\e001"
}
.icon-weather-cancer:before {
    content: "\e002"
}
.icon-weather-capricorn:before {
    content: "\e003"
}
.icon-weather-cloud:before {
    content: "\e004"
}
.icon-weather-cloud-drop:before {
    content: "\e005"
}
.icon-weather-cloud-lightning:before {
    content: "\e006"
}
.icon-weather-cloud-snowflake:before {
    content: "\e007"
}
.icon-weather-downpour-fullmoon:before {
    content: "\e008"
}
.icon-weather-downpour-halfmoon:before {
    content: "\e009"
}
.icon-weather-downpour-sun:before {
    content: "\e00a"
}
.icon-weather-drop:before {
    content: "\e00b"
}
.icon-weather-first-quarter:before {
    content: "\e00c"
}
.icon-weather-fog:before {
    content: "\e00d"
}
.icon-weather-fog-fullmoon:before {
    content: "\e00e"
}
.icon-weather-fog-halfmoon:before {
    content: "\e00f"
}
.icon-weather-fog-sun:before {
    content: "\e010"
}
.icon-weather-fullmoon:before {
    content: "\e011"
}
.icon-weather-gemini:before {
    content: "\e012"
}
.icon-weather-hail:before {
    content: "\e013"
}
.icon-weather-hail-fullmoon:before {
    content: "\e014"
}
.icon-weather-hail-halfmoon:before {
    content: "\e015"
}
.icon-weather-hail-sun:before {
    content: "\e016"
}
.icon-weather-last-quarter:before {
    content: "\e017"
}
.icon-weather-leo:before {
    content: "\e018"
}
.icon-weather-libra:before {
    content: "\e019"
}
.icon-weather-lightning:before {
    content: "\e01a"
}
.icon-weather-mistyrain:before {
    content: "\e01b"
}
.icon-weather-mistyrain-fullmoon:before {
    content: "\e01c"
}
.icon-weather-mistyrain-halfmoon:before {
    content: "\e01d"
}
.icon-weather-mistyrain-sun:before {
    content: "\e01e"
}
.icon-weather-moon:before {
    content: "\e01f"
}
.icon-weather-moondown-full:before {
    content: "\e020"
}
.icon-weather-moondown-half:before {
    content: "\e021"
}
.icon-weather-moonset-full:before {
    content: "\e022"
}
.icon-weather-moonset-half:before {
    content: "\e023"
}
.icon-weather-move2:before {
    content: "\e024"
}
.icon-weather-newmoon:before {
    content: "\e025"
}
.icon-weather-pisces:before {
    content: "\e026"
}
.icon-weather-rain:before {
    content: "\e027"
}
.icon-weather-rain-fullmoon:before {
    content: "\e028"
}
.icon-weather-rain-halfmoon:before {
    content: "\e029"
}
.icon-weather-rain-sun:before {
    content: "\e02a"
}
.icon-weather-sagittarius:before {
    content: "\e02b"
}
.icon-weather-scorpio:before {
    content: "\e02c"
}
.icon-weather-snow:before {
    content: "\e02d"
}
.icon-weather-snow-fullmoon:before {
    content: "\e02e"
}
.icon-weather-snow-halfmoon:before {
    content: "\e02f"
}
.icon-weather-snow-sun:before {
    content: "\e030"
}
.icon-weather-snowflake:before {
    content: "\e031"
}
.icon-weather-star:before {
    content: "\e032"
}
.icon-weather-storm-11:before {
    content: "\e033"
}
.icon-weather-storm-32:before {
    content: "\e034"
}
.icon-weather-storm-fullmoon:before {
    content: "\e035"
}
.icon-weather-storm-halfmoon:before {
    content: "\e036"
}
.icon-weather-storm-sun:before {
    content: "\e037"
}
.icon-weather-sun:before {
    content: "\e038"
}
.icon-weather-sundown:before {
    content: "\e039"
}
.icon-weather-sunset:before {
    content: "\e03a"
}
.icon-weather-taurus:before {
    content: "\e03b"
}
.icon-weather-tempest:before {
    content: "\e03c"
}
.icon-weather-tempest-fullmoon:before {
    content: "\e03d"
}
.icon-weather-tempest-halfmoon:before {
    content: "\e03e"
}
.icon-weather-tempest-sun:before {
    content: "\e03f"
}
.icon-weather-variable-fullmoon:before {
    content: "\e040"
}
.icon-weather-variable-halfmoon:before {
    content: "\e041"
}
.icon-weather-variable-sun:before {
    content: "\e042"
}
.icon-weather-virgo:before {
    content: "\e043"
}
.icon-weather-waning-cresent:before {
    content: "\e044"
}
.icon-weather-waning-gibbous:before {
    content: "\e045"
}
.icon-weather-waxing-cresent:before {
    content: "\e046"
}
.icon-weather-waxing-gibbous:before {
    content: "\e047"
}
.icon-weather-wind:before {
    content: "\e048"
}
.icon-weather-wind-e:before {
    content: "\e049"
}
.icon-weather-wind-fullmoon:before {
    content: "\e04a"
}
.icon-weather-wind-halfmoon:before {
    content: "\e04b"
}
.icon-weather-wind-n:before {
    content: "\e04c"
}
.icon-weather-wind-ne:before {
    content: "\e04d"
}
.icon-weather-wind-nw:before {
    content: "\e04e"
}
.icon-weather-wind-s:before {
    content: "\e04f"
}
.icon-weather-wind-se:before {
    content: "\e050"
}
.icon-weather-wind-sun:before {
    content: "\e051"
}
.icon-weather-wind-sw:before {
    content: "\e052"
}
.icon-weather-wind-w:before {
    content: "\e053"
}
.icon-weather-windgust:before {
    content: "\e054"
}
.sttabs {
    position: relative;
    overflow: hidden;
    margin: 0 auto;
    width: 100%;
    font-weight: 300
}
.sticon::before {
    display: inline-block;
    margin: 0 .4em 0 0;
    vertical-align: middle;
    font-size: 20px;
    speak: none;
    -webkit-backface-visibility: hidden;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.sttabs nav {
    text-align: center;
    margin-top: 30px;
}
.sttabs nav ul {
    position: relative;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: flex;
    margin: 0 auto;
    padding: 0;
    font-family: Poppins, sans-serif;
    list-style: none;
    -ms-box-orient: horizontal;
    -ms-box-pack: center;
    -webkit-flex-flow: row wrap;
    -moz-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center
}
.sttabs nav ul li {
    position: relative;
    z-index: 1;
    display: block;
    margin: 0;
    text-align: center;
    -webkit-flex: 1;
    -moz-flex: 1;
    -ms-flex: 1;
    flex: 1
}
.sttabs nav a {
    position: relative;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 2.5
}
.sttabs nav a span {
    vertical-align: middle;
    font-wight: 500;
    font-size: 14px;
    font-family: Poppins, sans-serif
}
.sttabs nav a:focus {
    outline: 0
}
.sttabs nav li.tab-current a {
    color: #fb9678
}
.tabs-style-bar nav ul li a {
    margin: 0 2px;
    background-color: #f7fafc;
    color: #686868;
    padding: 5px 0;
    transition: background-color .2s, color .2s
}
.tabs-style-bar nav ul li a:focus,
.tabs-style-bar nav ul li a:hover {
    color: #fb9678
}
.tabs-style-bar nav ul li a span {
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
    font-family: Poppins, sans-serif
}
.tabs-style-bar nav ul li.tab-current a {
    background: #fb9678;
    color: #fff
}
.tabs-style-iconbox nav {
    background: #f7fafc
}
.tabs-style-iconbox nav ul li a {
    overflow: visible;
    padding: 35px 0;
    line-height: 1;
    -webkit-transition: color .2s;
    transition: color .2s;
    color: #2b2b2b
}
.tabs-style-iconbox nav ul li.tab-current {
    z-index: 1
}
.tabs-style-iconbox nav ul li.tab-current a {
    background: #fb9678;
    color: #fff;
    box-shadow: -1px 0 0 #fff
}
.tabs-style-iconbox nav ul li.tab-current a::after {
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -10px;
    width: 0;
    height: 0;
    border: solid transparent;
    border-width: 10px;
    border-top-color: #fb9678;
    content: '';
    pointer-events: none
}
.tabs-style-iconbox nav ul li::after,
.tabs-style-iconbox nav ul li:first-child::before {
    position: absolute;
    top: 20%;
    right: 0;
    z-index: -1;
    width: 1px;
    height: 60%;
    content: ''
}
.tabs-style-iconbox nav ul li:first-child::before {
    right: auto;
    left: 0
}
.tabs-style-iconbox .sticon::before {
    display: block;
    margin: 0 0 .25em
}
.tabs-style-underline nav {
    border: 1px solid rgba(120, 130, 140, .13)
}
.tabs-style-underline nav a {
    padding: 20px 0;
    border-left: 1px solid rgba(120, 130, 140, .13);
    -webkit-transition: color .2s;
    transition: color .2s;
    color: #2b2b2b
}
.tabs-style-underline nav li:last-child a {
    border-right: 1px solid rgba(120, 130, 140, .13)
}
.tabs-style-underline nav li a::after {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: #fb9678;
    content: '';
    -webkit-transition: -webkit-transform .3s;
    transition: transform .3s;
    -webkit-transform: translate3d(0, 150%, 0);
    transform: translate3d(0, 150%, 0)
}
.tabs-style-underline nav li.tab-current a::after {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.tabs-style-linetriangle nav a {
    overflow: visible;
    border-bottom: 1px solid rgba(0, 0, 0, .2);
    -webkit-transition: color .2s;
    transition: color .2s
}
.tabs-style-linetriangle nav a span {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size: 14px;
    padding: 15px 0;
    color: #2b2b2b
}
.tabs-style-linetriangle nav li.tab-current a:after,
.tabs-style-linetriangle nav li.tab-current a:before {
    position: absolute;
    top: 100%;
    left: 50%;
    width: 0;
    height: 0;
    border: solid transparent;
    content: '';
    pointer-events: none
}
.tabs-style-linetriangle nav li.tab-current a:after {
    margin-left: -10px;
    border-width: 10px;
    border-top-color: #fff
}
.tabs-style-linetriangle nav li.tab-current a span {
    color: #fb9678
}
.tabs-style-linetriangle nav li.tab-current a:before {
    margin-left: -11px;
    border-width: 11px;
    border-top-color: rgba(0, 0, 0, .2)
}
.tabs-style-iconfall {
    overflow: visible
}
.tabs-style-iconfall nav {
    max-width: 1200px;
    margin: 0 auto
}
.tabs-style-iconfall nav a {
    display: inline-block;
    overflow: visible;
    padding: 1em 0 2em;
    color: #2b2b2b;
    line-height: 1;
    -webkit-transition: color .3s cubic-bezier(.7, 0, .3, 1);
    transition: color .3s cubic-bezier(.7, 0, .3, 1)
}
.tabs-style-iconfall nav a:focus,
.tabs-style-iconfall nav a:hover,
.tabs-style-iconfall nav li.tab-current a {
    color: #fb9678
}
.tabs-style-iconfall nav li::before {
    position: absolute;
    bottom: 1em;
    left: 50%;
    margin-left: -20px;
    width: 40px;
    height: 4px;
    background: #fb9678;
    content: '';
    opacity: 0;
    -webkit-transition: -webkit-transform .2s ease-in;
    transition: transform .2s ease-in;
    -webkit-transform: scale3d(0, 1, 1);
    transform: scale3d(0, 1, 1)
}
.tabs-style-iconfall nav li.tab-current::before {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}
.tabs-style-iconfall nav li.tab-current .sticon::before {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.tabs-style-iconfall .sticon::before {
    display: block;
    margin: 0 0 .35em;
    opacity: 0;
    font-size: 24px;
    -webkit-transition: -webkit-transform .2s, opacity .2s;
    transition: transform .2s, opacity .2s;
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    pointer-events: none
}
@media screen and (max-width: 58em) {
    .tabs-style-iconfall nav li .sticon::before {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}
.tabs-style-linemove nav {
    background: #f7fafc
}
.tabs-style-linemove nav li:last-child::before {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: #fb9678;
    content: '';
    -webkit-transition: -webkit-transform .3s;
    transition: transform .3s
}
.tabs-style-linemove nav li:first-child.tab-current~li:last-child::before {
    -webkit-transform: translate3d(-400%, 0, 0);
    transform: translate3d(-400%, 0, 0)
}
.tabs-style-linemove nav li:nth-child(2).tab-current~li:last-child::before {
    -webkit-transform: translate3d(-300%, 0, 0);
    transform: translate3d(-300%, 0, 0)
}
.tabs-style-linemove nav li:nth-child(3).tab-current~li:last-child::before {
    -webkit-transform: translate3d(-200%, 0, 0);
    transform: translate3d(-200%, 0, 0)
}
.tabs-style-linemove nav li:nth-child(4).tab-current~li:last-child::before {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
}
.tabs-style-linemove nav a {
    padding: 30px 0;
    color: #2b2b2b;
    line-height: 1;
    -webkit-transition: color .3s, -webkit-transform .3s;
    transition: color .3s, transform .3s
}
.tabs-style-linemove nav li.tab-current a {
    color: #fb9678
}
.tabs-style-line nav a {
    padding: 10px 10px;
    box-shadow: inset 0 -2px #d1d3d2;
    color: #686868;
    text-align: left;
    text-transform: uppercase;
    letter-spacing: 1px;
    -webkit-transition: color .3s, box-shadow .3s;
    transition: color .3s, box-shadow .3s
}
.tabs-style-line nav a:focus,
.tabs-style-line nav a:hover {
    box-shadow: inset 0 -2px #74777b
}
.tabs-style-line nav li.tab-current a {
    box-shadow: inset 0 -2px #fb9678;
    color: #fb9678
}
@media screen and (max-width: 58em) {
    .tabs-style-line nav ul {
        display: block;
        box-shadow: none
    }
    .tabs-style-line nav ul li {
        display: block;
        -webkit-flex: none;
        flex: none
    }
}
.tabs-style-circle {
    overflow: visible
}
.tabs-style-circle nav li {
    margin-top: 60px!important;
    margin-bottom: 60px!important
}
.tabs-style-circle nav li::before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -60px 0 0 -60px;
    width: 120px;
    height: 120px;
    border: 1px solid #fb9678;
    border-radius: 50%;
    content: '';
    opacity: 0;
    -webkit-transition: -webkit-transform .2s, opacity .2s;
    transition: transform .2s, opacity .2s;
    -webkit-transition-timing-function: cubic-bezier(.7, 0, .3, 1);
    transition-timing-function: cubic-bezier(.7, 0, .3, 1)
}
.tabs-style-circle nav a {
    overflow: visible;
    color: #2b2b2b;
    font-weight: 500;
    font-size: 14;
    line-height: 1.1;
    -webkit-transition: color .3s cubic-bezier(.7, 0, .3, 1);
    transition: color .3s cubic-bezier(.7, 0, .3, 1)
}
.tabs-style-circle nav a span {
    display: inline-block
}
.tabs-style-circle nav a:focus,
.tabs-style-circle nav a:hover,
.tabs-style-circle nav li.tab-current a {
    color: #fb9678
}
.tabs-style-circle nav li.tab-current a span {
    -webkit-transform: translate3d(0, 4px, 0);
    transform: translate3d(0, 4px, 0)
}
@media screen and (max-width: 58em) {
    .tabs-style-circle nav li::before {
        margin: -40px 0 0 -40px;
        width: 80px;
        height: 80px
    }
}
.tabs-style-circle nav li.tab-current::before {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}
.tabs-style-circle .icon::before,
.tabs-style-circle nav a span {
    -webkit-transition: -webkit-transform .3s cubic-bezier(.7, 0, .3, 1);
    transition: transform .3s cubic-bezier(.7, 0, .3, 1)
}
.tabs-style-circle .sticon::before {
    display: block;
    margin: 0;
    pointer-events: none
}
.tabs-style-circle nav li.tab-current .sticon::before {
    -webkit-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0)
}
.tabs-style-shape {
    max-width: 1200px;
    margin: 0 auto
}
.tabs-style-shape nav ul li {
    margin: 0 3em
}
.tabs-style-shape nav ul li:first-child {
    margin-left: 0
}
.tabs-style-shape nav ul li.tab-current {
    z-index: 1
}
.tabs-style-shape nav li a {
    overflow: visible;
    margin: 0 -3em 0 0;
    padding: 0;
    color: #fff;
    font-weight: 500
}
.tabs-style-shape nav li a svg {
    position: absolute;
    left: 100%;
    margin: 0;
    width: 3em;
    height: 100%;
    fill: #bdc2c9
}
.tabs-style-shape nav li:first-child a span {
    padding-left: 2em;
    border-radius: 30px 0 0
}
.tabs-style-shape nav li:last-child a span {
    padding-right: 2em;
    border-radius: 0 30px 0 0
}
.tabs-style-shape nav li a svg:nth-child(2),
.tabs-style-shape nav li:last-child a svg {
    right: 100%;
    left: auto;
    -webkit-transform: scale3d(-1, 1, 1);
    transform: scale3d(-1, 1, 1)
}
.tabs-style-shape nav li a span {
    display: block;
    overflow: hidden;
    padding: .65em 0;
    background-color: #bdc2c9;
    text-overflow: ellipsis;
    white-space: nowrap
}
.tabs-style-shape nav li a:hover span {
    background-color: #fb9678
}
.tabs-style-shape nav li a:hover svg {
    fill: #fb9678
}
.tabs-style-shape nav li a svg {
    pointer-events: none
}
.tabs-style-shape nav li a svg use {
    pointer-events: auto
}
.tabs-style-shape nav li.tab-current a span,
.tabs-style-shape nav li.tab-current a svg {
    -webkit-transition: none;
    transition: none
}
.tabs-style-shape nav li.tab-current a span {
    background: #f7fafc
}
.tabs-style-shape nav li.tab-current a svg {
    fill: #f7fafc
}
.tabs-style-shape .content-wrap {
    background: #f7fafc
}
@media screen and (max-width: 58em) {
    .tabs-style-shape nav ul {
        display: block;
        padding-top: 1.5em
    }
    .tabs-style-shape nav ul li {
        display: block;
        margin: -1.25em 0 0;
        -webkit-flex: none;
        flex: none
    }
    .tabs-style-shape nav ul li a {
        margin: 0
    }
    .tabs-style-shape nav ul li svg {
        display: none
    }
    .tabs-style-shape nav ul li a span {
        padding: 1.25em 0 2em!important;
        border-radius: 30px 30px 0 0!important;
        box-shadow: 0 -1px 2px rgba(0, 0, 0, .1);
        line-height: 1
    }
    .tabs-style-shape nav ul li:last-child a span {
        padding: 1.25em 0!important
    }
    .tabs-style-shape nav ul li.tab-current {
        z-index: 1
    }
}
.tabs-style-linebox nav ul li {
    margin: 0 .5em;
    -webkit-flex: none;
    flex: none
}
.tabs-style-linebox nav a {
    padding: 0 1.5em;
    color: #2b2b2b;
    font-weight: 500;
    -webkit-transition: color .3s;
    transition: color .3s
}
.tabs-style-linebox nav a:focus,
.tabs-style-linebox nav a:hover {
    color: #fb9678
}
.tabs-style-linebox nav li.tab-current a {
    color: #fff
}
.tabs-style-linebox nav a::after {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    background: #d2d8d6;
    content: '';
    -webkit-transition: background-color .3s, -webkit-transform .3s;
    transition: background-color .3s, transform .3s;
    -webkit-transition-timing-function: ease, cubic-bezier(.7, 0, .3, 1);
    transition-timing-function: ease, cubic-bezier(.7, 0, .3, 1);
    -webkit-transform: translate3d(0, 100%, 0) translate3d(0, -3px, 0);
    transform: translate3d(0, 100%, 0) translate3d(0, -3px, 0)
}
.tabs-style-linebox nav li.tab-current a::after {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.tabs-style-linebox nav a:focus::after,
.tabs-style-linebox nav a:hover::after,
.tabs-style-linebox nav li.tab-current a::after {
    background: #fb9678
}
@media screen and (max-width: 58em) {
    .tabs-style-linebox nav ul {
        display: block;
        box-shadow: none
    }
    .tabs-style-linebox nav ul li {
        display: block;
        -webkit-flex: none;
        flex: none
    }
}
.tabs-style-flip {
    max-width: 1200px;
    margin: 0 auto
}
.tabs-style-flip nav a {
    padding: .5em 0;
    color: #2b2b2b;
    -webkit-transition: color .3s;
    transition: color .3s
}
.tabs-style-flip nav a:focus,
.tabs-style-flip nav a:hover {
    color: #fb9678
}
.tabs-style-flip nav a span {
    text-transform: uppercase;
    letter-spacing: 1px
}
.tabs-style-flip nav a::after {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    background-color: #f0f0f0;
    content: '';
    -webkit-transition: -webkit-transform .3s, background-color .3s;
    transition: transform .3s, background-color .3s;
    -webkit-transform: perspective(900px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(900px) rotate3d(1, 0, 0, 90deg);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-perspective-origin: 50% 100%;
    perspective-origin: 50% 100%
}
.tabs-style-flip nav li.tab-current a {
    color: #fb9678
}
.tabs-style-flip nav li.tab-current a::after {
    background-color: #f7fafc;
    -webkit-transform: perspective(900px) rotate3d(1, 0, 0, 0deg);
    transform: perspective(900px) rotate3d(1, 0, 0, 0deg)
}
.tabs-style-flip .content-wrap {
    background: #f7fafc
}
.tabs-style-circlefill {
    max-width: 800px;
    border: 1px solid #fb9678;
    margin: 0 auto
}
.tabs-style-circlefill nav ul li {
    overflow: hidden;
    border-right: 1px solid #fb9678
}
.tabs-style-circlefill nav li a {
    padding: 1.5em 0;
    color: #fff;
    font-size: 1.25em
}
.tabs-style-circlefill nav li:first-child {
    border-left: none
}
.tabs-style-circlefill nav li:last-child {
    border: none
}
.tabs-style-circlefill nav li::before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -40px 0 0 -40px;
    width: 80px;
    height: 80px;
    border: 1px solid #fb9678;
    border-radius: 50%;
    background: #fb9678;
    content: '';
    -webkit-transition: -webkit-transform .3s;
    transition: transform .3s
}
.tabs-style-circlefill nav li.tab-current::before {
    -webkit-transform: scale3d(2.5, 2.5, 1);
    transform: scale3d(2.5, 2.5, 1)
}
.tabs-style-circlefill nav a {
    -webkit-transition: color .3s;
    transition: color .3s
}
.tabs-style-circlefill nav a span {
    display: none
}
.tabs-style-circlefill nav li.tab-current a {
    color: #fff
}
.tabs-style-circlefill .icon::before {
    display: block;
    margin: 0;
    pointer-events: none
}
.tabs-style-circlefill .content-wrap {
    border-top: 1px solid #fb9678
}
.content-wrap {
    position: relative
}
.content-wrap section {
    display: none;
    margin: 0 auto;
    padding: 25px;
    min-height: 150px
}
.content-wrap section p {
    margin: 0;
    padding: .75em 0
}
.content-wrap section.content-current {
    display: block
}
.no-js .content-wrap section {
    display: block;
    padding-bottom: 2em;
    border-bottom: 1px solid rgba(255, 255, 255, .6)
}
.no-flexbox nav ul {
    display: block
}
.no-flexbox nav ul li {
    min-width: 15%;
    display: inline-block
}
@media screen and (max-width: 58em) {
    .sttabs nav a span {
        display: none
    }
    .sttabs nav a:before {
        margin-right: 0
    }
}
.mytooltip {
    display: inline;
    position: relative;
    z-index: 9999
}
.tooltip-item {
    background: rgba(0, 0, 0, .1);
    cursor: pointer;
    display: inline-block;
    font-weight: 500;
    padding: 0 10px
}
.tooltip-item::after {
    content: '';
    position: absolute;
    width: 360px;
    height: 20px;
    bottom: 100%;
    left: 50%;
    pointer-events: none;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}
.mytooltip:hover .tooltip-item::after {
    pointer-events: auto
}
.tooltip-content {
    position: absolute;
    z-index: 9999;
    width: 360px;
    left: 50%;
    margin: 0 0 20px -180px;
    bottom: 100%;
    text-align: left;
    font-size: 14px;
    line-height: 30px;
    box-shadow: -5px -5px 15px rgba(48, 54, 61, .2);
    background: #2b2b2b;
    opacity: 0;
    cursor: default;
    pointer-events: none
}
.tooltip-effect-1 .tooltip-content {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s;
    color: #fff
}
.tooltip-effect-2 .tooltip-content {
    -webkit-transform-origin: 50% calc(110%);
    transform-origin: 50% calc(110%);
    -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
    transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
    -webkit-transition: opacity .2s, -webkit-transform .2s;
    transition: opacity .2s, transform .2s
}
.tooltip-effect-3 .tooltip-content {
    -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
    transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-4 .tooltip-content {
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transform: scale3d(.7, .3, 1);
    transform: scale3d(.7, .3, 1);
    -webkit-transition: opacity .2s, -webkit-transform .2s;
    transition: opacity .2s, transform .2s
}
.tooltip-effect-5 .tooltip-content {
    width: 180px;
    margin-left: -90px;
    -webkit-transform-origin: 50% calc(106%);
    transform-origin: 50% calc(106%);
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
    -webkit-transition: opacity .2s, -webkit-transform .2s;
    transition: opacity .2s, transform .2s;
    -webkit-transition-timing-function: ease, cubic-bezier(.17, .67, .4, 1.39);
    transition-timing-function: ease, cubic-bezier(.17, .67, .4, 1.39)
}
.mytooltip:hover .tooltip-content {
    pointer-events: auto;
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0);
    transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0)
}
.tooltip.tooltip-effect-2:hover .tooltip-content {
    -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 0deg);
    transform: perspective(1000px) rotate3d(1, 0, 0, 0deg)
}
.tooltip-content::after {
    content: '';
    top: 100%;
    left: 50%;
    border: solid transparent;
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: #2a3035 transparent transparent;
    border-width: 10px;
    margin-left: -10px
}
.tooltip-content img {
    position: relative;
    height: 140px;
    display: block;
    float: left;
    margin-right: 1em
}
.tooltip-text {
    font-size: 14px;
    line-height: 24px;
    display: block;
    padding: 1.31em 1.21em 1.21em 0;
    color: #fff
}
.tooltip-effect-5 .tooltip-text {
    padding: 1.4em
}
a.mytooltip {
    font-weight: 500;
    color: #fb9678
}
.tooltip-content2 {
    position: absolute;
    z-index: 9999;
    width: 80px;
    height: 80px;
    padding-top: 25px;
    left: 50%;
    margin-left: -40px;
    bottom: 100%;
    border-radius: 50%;
    text-align: center;
    background: #fb9678;
    color: #fff;
    opacity: 0;
    margin-bottom: 20px;
    cursor: default;
    pointer-events: none
}
.tooltip-content2 i {
    opacity: 0
}
.mytooltip:hover .tooltip-content2,
.mytooltip:hover .tooltip-content2 i {
    opacity: 1;
    font-size: 18px
}
.tooltip-effect-6 .tooltip-content2 {
    -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
    transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-6 .tooltip-content2 i {
    -webkit-transform: scale3d(0, 0, 1);
    transform: scale3d(0, 0, 1);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-7 .tooltip-content2 {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-7 .tooltip-content2 i {
    -webkit-transform: translate3d(0, 15px, 0);
    transform: translate3d(0, 15px, 0);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-8 .tooltip-content2 {
    -webkit-transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
    transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-8 .tooltip-content2 i {
    -webkit-transform: scale3d(0, 0, 1);
    transform: scale3d(0, 0, 1);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-9 .tooltip-content2 {
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-effect-9 .tooltip-content2 i {
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.mytooltip:hover .tooltip-content2,
.mytooltip:hover .tooltip-content2 i {
    pointer-events: auto;
    -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
    transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
}
.tooltip-effect-6:hover .tooltip-content2 i {
    -webkit-transform: rotate3d(1, 1, 1, 0);
    transform: rotate3d(1, 1, 1, 0)
}
.tooltip-content2::after {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    margin: -7px 0 0 -15px;
    width: 30px;
    height: 20px;
    background: url(../../plugins/images/tooltip/tooltip1.svg) center center no-repeat;
    background-size: 100%
}
.tooltip-content3 {
    position: absolute;
    background: url(../../plugins/images/tooltip/shape1.svg) center bottom no-repeat;
    background-size: 100% 100%;
    z-index: 9999;
    width: 200px;
    bottom: 100%;
    left: 50%;
    margin-left: -100px;
    padding: 50px 30px;
    text-align: center;
    color: #fff;
    opacity: 0;
    cursor: default;
    font-size: 14;
    line-height: 27px;
    pointer-events: none;
    -webkit-transform: scale3d(.1, .2, 1);
    transform: scale3d(.1, .2, 1);
    -webkit-transform-origin: 50% 120%;
    transform-origin: 50% 120%;
    -webkit-transition: opacity .4s, -webkit-transform .4s;
    transition: opacity .4s, transform .4s;
    -webkit-transition-timing-function: ease, cubic-bezier(.6, 0, .4, 1);
    transition-timing-function: ease, cubic-bezier(.6, 0, .4, 1)
}
.mytooltip:hover .tooltip-content3 {
    opacity: 1;
    pointer-events: auto;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}
.tooltip-content3::after {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    left: 50%;
    margin-left: -8px;
    top: 100%;
    background: #00AEEF;
    -webkit-transform: translate3d(0, -60%, 0) rotate3d(0, 0, 1, 45deg);
    transform: translate3d(0, -60%, 0) rotate3d(0, 0, 1, 45deg)
}
.tooltip-item2 {
    color: #03a9f3;
    cursor: pointer;
    z-index: 100;
    position: relative;
    display: inline-block;
    font-weight: 500;
    -webkit-transition: background-color .3s, color .3s, -webkit-transform .3s;
    transition: background-color .3s, color .3s, transform .3s
}
.mytooltip:hover .tooltip-item2 {
    color: #fff;
    -webkit-transform: translate3d(0, -.5em, 0);
    transform: translate3d(0, -.5em, 0)
}
.tooltip-content4 {
    position: absolute;
    z-index: 99;
    width: 360px;
    left: 50%;
    margin-left: -180px;
    bottom: -5px;
    text-align: left;
    background: #03a9f3;
    opacity: 0;
    font-size: 14px;
    line-height: 27px;
    padding: 1.5em;
    color: #fff;
    border-bottom: 55px solid #2b2b2b;
    cursor: default;
    pointer-events: none;
    border-radius: 5px;
    -webkit-transform: translate3d(0, -.5em, 0);
    transform: translate3d(0, -.5em, 0);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.tooltip-content4 a {
    color: #2b2b2b
}
.tooltip-text2 {
    opacity: 0;
    -webkit-transform: translate3d(0, 1.5em, 0);
    transform: translate3d(0, 1.5em, 0);
    -webkit-transition: opacity .3s, -webkit-transform .3s;
    transition: opacity .3s, transform .3s
}
.mytooltip:hover .tooltip-content4,
.mytooltip:hover .tooltip-text2 {
    pointer-events: auto;
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.tooltip-content5 {
    position: absolute;
    z-index: 9999;
    width: 300px;
    left: 50%;
    bottom: 100%;
    font-size: 20px;
    line-height: 1.4;
    text-align: center;
    font-weight: 400;
    color: #fff;
    background: 0 0;
    opacity: 0;
    margin: 0 0 20px -150px;
    cursor: default;
    pointer-events: none;
    -webkit-font-smoothing: antialiased;
    -webkit-transition: opacity .3s .3s;
    transition: opacity .3s .3s
}
.mytooltip:hover .tooltip-content5 {
    opacity: 1;
    pointer-events: auto;
    -webkit-transition-delay: 0s;
    transition-delay: 0s
}
.tooltip-content5 span {
    display: block
}
.tooltip-text3 {
    border-bottom: 10px solid #fb9678;
    overflow: hidden;
    -webkit-transform: scale3d(0, 1, 1);
    transform: scale3d(0, 1, 1);
    -webkit-transition: -webkit-transform .3s .3s;
    transition: transform .3s .3s
}
.mytooltip:hover .tooltip-text3 {
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}
.tooltip-inner2 {
    background: #2b2b2b;
    padding: 40px;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    webkit-transition: -webkit-transform .3s;
    transition: transform .3s
}
.mytooltip:hover .tooltip-inner2 {
    -webkit-transition-delay: .3s;
    transition-delay: .3s;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.tooltip-content5::after {
    content: '';
    bottom: -20px;
    left: 50%;
    border: solid transparent;
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: #fb9678 transparent transparent;
    border-width: 10px;
    margin-left: -10px
}
@media (max-width: 1350px) {
    .carousel .item h3 {
        font-size: 17px;
        height: 90px
    }
    .inbox-center a {
        width: 400px
    }
}
.search-listing {
    padding: 0;
    margin: 0
}
.search-listing li {
    list-style: none;
    padding: 15px 0;
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.search-listing li h3 {
    margin: 0;
    font-size: 18px
}
.search-listing li h3 a {
    color: #03a9f3
}
.search-listing li h3 a:hover {
    text-decoration: underline
}
.search-listing li a {
    color: #00c292
}
.megamenu {
    left: 0;
    right: 0;
    width: 100%
}
.mega-dropdown {
    position: static!important
}
.mega-dropdown-menu {
    padding: 20px;
    width: 100%;
    -webkit-box-shadow: none;
    border: 0;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .2)!important
}
.mega-dropdown-menu>li>ul {
    padding: 0;
    margin: 0
}
.mega-dropdown-menu>li>ul>li {
    list-style: none
}
.mega-dropdown-menu>li>ul>li>a {
    display: block;
    padding: 8px 0;
    clear: both;
    line-height: 1.428571429;
    color: #686868;
    white-space: normal
}
.mega-dropdown-menu>li>ul>li>a:focus,
.mega-dropdown-menu>li>ul>li>a:hover {
    text-decoration: none;
    color: #ff6849
}
.mega-dropdown-menu .dropdown-header {
    font-size: 16px;
    font-weight: 500;
    padding: 8px 0;
    margin-top: 12px
}
.mega-dropdown-menu li.demo-box a {
    color: #fff;
    display: block
}
.mega-dropdown-menu li.demo-box a:hover {
    opacity: .8
}
a.dt-button,
button.dt-button,
div.dt-button {
    background: #03a9f3;
    color: #fff;
    border-color: #03a9f3
}
a.dt-button:hover,
button.dt-button:hover,
div.dt-button:hover {
    background: #03a9f3
}
a.dt-button:hover:not(.disabled),
button.dt-button:hover:not(.disabled),
div.dt-button:hover:not(.disabled) {
    background: #f7fafc;
    color: #2b2b2b;
    border-color: rgba(120, 130, 140, .13)
}
.dataTables_filter input {
    border: 1px solid rgba(120, 130, 140, .523)
}
table.dataTable.display tbody tr.even>.sorting_1,
table.dataTable.display tbody tr.odd>.sorting_1,
table.dataTable.display tbody tr:hover>.sorting_1,
table.dataTable.order-column.hover tbody tr:hover>.sorting_1,
table.dataTable.order-column.stripe tbody tr.even>.sorting_1,
table.dataTable.order-column.stripe tbody tr.odd>.sorting_1 {
    background: 0 0
}
.note-editor .panel-heading {
    padding: 6px 10px 10px
}
.page-aside {
    position: relative
}
.left-aside {
    position: absolute;
    background: #fff;
    border-right: 1px solid rgba(120, 130, 140, .13);
    padding: 20px;
    width: 250px;
    height: 100%
}
.right-aside {
    padding: 20px;
    margin-left: 250px
}
.right-aside .contact-list td {
    vertical-align: middle;
    padding: 25px 10px
}
.right-aside .contact-list td img {
    width: 30px
}
.list-style-none {
    margin: 0;
    padding: 0
}
.list-style-none li {
    list-style: none;
    margin: 0
}
.list-style-none li.box-label a {
    font-weight: 500
}
.list-style-none li.divider {
    margin: 10px 0;
    height: 1px;
    background: rgba(120, 130, 140, .13)
}
.list-style-none li a {
    padding: 15px 10px;
    display: block;
    color: #686868
}
.list-style-none li a:hover {
    color: #ff6849
}
.list-style-none li a span {
    float: right
}
.chat-main-box {
    position: relative;
    background: #fff;
    overflow: hidden
}
.chat-main-box .chat-left-aside {
    position: absolute;
    width: 250px;
    z-index: 9;
    top: 0;
    border-right: 1px solid rgba(120, 130, 140, .13)
}
.chat-main-box .chat-left-aside .open-panel {
    display: none;
    cursor: pointer;
    position: absolute;
    left: -webkit-calc(99%);
    top: 50%;
    z-index: 100;
    background-color: #fff;
    -webkit-box-shadow: 1px 0 3px rgba(0, 0, 0, .2);
    box-shadow: 1px 0 3px rgba(0, 0, 0, .2);
    border-radius: 0 100px 100px 0;
    line-height: 1;
    padding: 15px 8px 15px 4px
}
.chat-main-box .chat-left-aside .chat-left-inner .form-control {
    height: 60px
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none {
    padding: 0
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none li {
    list-style: none;
    overflow: hidden
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none li a {
    padding: 20px
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none li a.active,
.chat-main-box .chat-left-aside .chat-left-inner .style-none li a:hover {
    background: #f7fafc
}
.chat-main-box .chat-right-aside {
    margin-left: 250px
}
.chat-main-box .chat-right-aside .chat-list {
    max-height: none;
    height: 100%;
    padding-top: 40px
}
.chat-main-box .chat-right-aside .chat-list .chat-text {
    border-radius: 6px
}
.chat-main-box .chat-right-aside .send-chat-box {
    position: relative
}
.chat-main-box .chat-right-aside .send-chat-box .form-control {
    border: none;
    border-top: 1px solid rgba(120, 130, 140, .13);
    resize: none;
    height: 80px;
    padding-right: 180px
}
.chat-main-box .chat-right-aside .send-chat-box .form-control:focus {
    border-color: rgba(120, 130, 140, .13)
}
.chat-main-box .chat-right-aside .send-chat-box .custom-send {
    position: absolute;
    right: 20px;
    bottom: 10px
}
.chat-main-box .chat-right-aside .send-chat-box .custom-send .cst-icon {
    color: #686868;
    margin-right: 10px
}
.el-element-overlay .white-box {
    padding: 0
}
.el-element-overlay .el-card-item {
    position: relative;
    padding-bottom: 25px
}
.el-element-overlay .el-card-item .el-card-avatar {
    margin-bottom: 15px
}
.el-element-overlay .el-card-item .el-card-content {
    text-align: center
}
.el-element-overlay .el-card-item .el-card-content h3 {
    margin: 0
}
.el-element-overlay .el-card-item .el-card-content a {
    color: #686868
}
.el-element-overlay .el-card-item .el-card-content a:hover {
    color: #ff6849
}
.el-element-overlay .el-card-item .el-overlay-1 {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default
}
.el-element-overlay .el-card-item .el-overlay-1 img {
    display: block;
    position: relative;
    -webkit-transition: all .4s linear;
    transition: all .4s linear;
    width: 100%;
    height: auto
}
.el-element-overlay .el-card-item .el-overlay-1:hover img {
    -ms-transform: scale(1.2) translateZ(0);
    -webkit-transform: scale(1.2) translateZ(0)
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info {
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    color: #fff;
    background-color: transparent;
    filter: alpha(opacity=0);
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    padding: 0;
    margin: auto;
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%) translateZ(0);
    -webkit-transform: translateY(-50%) translateZ(0);
    -ms-transform: translateY(-50%) translateZ(0)
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info>li {
    list-style: none;
    display: inline-block;
    margin: 0 3px
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info>li a {
    border-color: #fff;
    color: #fff;
    padding: 12px 15px 10px
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info>li a:hover {
    background: #fb9678;
    border-color: #fb9678
}
.el-element-overlay .el-card-item .el-overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    opacity: 0;
    background-color: rgba(0, 0, 0, .7);
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out
}
.el-element-overlay .el-card-item .el-overlay-1:hover .el-overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0)
}
.el-element-overlay .el-card-item .el-overlay-1 .scrl-dwn {
    top: -100%
}
.el-element-overlay .el-card-item .el-overlay-1 .scrl-up {
    top: 100%;
    height: 0
}
.el-element-overlay .el-card-item .el-overlay-1:hover .scrl-dwn {
    top: 0
}
.el-element-overlay .el-card-item .el-overlay-1:hover .scrl-up {
    top: 0;
    height: 100%
}
.login-sidebar {
    position: absolute;
    right: 0;
    margin-top: 0;
    height: 100%
}
.common-list {
    margin: 0;
    padding: 0
}
.common-list li {
    list-style: none;
    display: block
}
.common-list li a {
    padding: 12px 0;
    color: #686868;
    display: block
}
.common-list li a:hover {
    color: #ff6849
}
.color-table.primary-table thead th {
    background-color: #ab8ce4;
    color: #fff
}
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff
}
.color-table.info-table thead th {
    background-color: #03a9f3;
    color: #fff
}
.color-table.warning-table thead th {
    background-color: #fec107;
    color: #fff
}
.color-table.danger-table thead th {
    background-color: #fb9678;
    color: #fff
}
.color-table.inverse-table thead th {
    background-color: #4c5667;
    color: #fff
}
.color-table.dark-table thead th {
    background-color: #2b2b2b;
    color: #fff
}
.color-table.red-table thead th {
    background-color: #fb3a3a;
    color: #fff
}
.color-table.purple-table thead th {
    background-color: #9675ce;
    color: #fff
}
.color-table.muted-table thead th {
    background-color: #98a6ad;
    color: #fff
}
.color-bordered-table.primary-bordered-table {
    border: 2px solid #ab8ce4
}
.color-bordered-table.primary-bordered-table thead th {
    background-color: #ab8ce4;
    color: #fff
}
.color-bordered-table.success-bordered-table {
    border: 2px solid #00c292
}
.color-bordered-table.success-bordered-table thead th {
    background-color: #00c292;
    color: #fff
}
.color-bordered-table.info-bordered-table {
    border: 2px solid #03a9f3
}
.color-bordered-table.info-bordered-table thead th {
    background-color: #03a9f3;
    color: #fff
}
.color-bordered-table.warning-bordered-table {
    border: 2px solid #fec107
}
.color-bordered-table.warning-bordered-table thead th {
    background-color: #fec107;
    color: #fff
}
.color-bordered-table.danger-bordered-table {
    border: 2px solid #fb9678
}
.color-bordered-table.danger-bordered-table thead th {
    background-color: #fb9678;
    color: #fff
}
.color-bordered-table.inverse-bordered-table {
    border: 2px solid #4c5667
}
.color-bordered-table.inverse-bordered-table thead th {
    background-color: #4c5667;
    color: #fff
}
.color-bordered-table.dark-bordered-table {
    border: 2px solid #2b2b2b
}
.color-bordered-table.dark-bordered-table thead th {
    background-color: #2b2b2b;
    color: #fff
}
.color-bordered-table.red-bordered-table {
    border: 2px solid #fb3a3a
}
.color-bordered-table.red-bordered-table thead th {
    background-color: #fb3a3a;
    color: #fff
}
.color-bordered-table.purple-bordered-table {
    border: 2px solid #9675ce
}
.color-bordered-table.purple-bordered-table thead th {
    background-color: #9675ce;
    color: #fff
}
.color-bordered-table.muted-bordered-table {
    border: 2px solid #98a6ad
}
.color-bordered-table.muted-bordered-table thead th {
    background-color: #98a6ad;
    color: #fff
}
.full-color-table.full-primary-table {
    background-color: rgba(171, 140, 228, .8)
}
.full-color-table.full-primary-table thead th {
    background-color: #ab8ce4;
    border: 0!important;
    color: #fff
}
.full-color-table.full-primary-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-primary-table tr:hover {
    background-color: #ab8ce4
}
.full-color-table.full-success-table {
    background-color: rgba(0, 194, 146, .8)
}
.full-color-table.full-success-table thead th {
    background-color: #00c292;
    border: 0!important;
    color: #fff
}
.full-color-table.full-success-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-success-table tr:hover {
    background-color: #00c292
}
.full-color-table.full-info-table {
    background-color: rgba(3, 169, 243, .8)
}
.full-color-table.full-info-table thead th {
    background-color: #03a9f3;
    border: 0!important;
    color: #fff
}
.full-color-table.full-info-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-info-table tr:hover {
    background-color: #03a9f3
}
.full-color-table.full-warning-table {
    background-color: rgba(254, 193, 7, .8)
}
.full-color-table.full-warning-table thead th {
    background-color: #fec107;
    border: 0!important;
    color: #fff
}
.full-color-table.full-warning-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-warning-table tr:hover {
    background-color: #fec107
}
.full-color-table.full-danger-table {
    background-color: rgba(251, 150, 120, .8)
}
.full-color-table.full-danger-table thead th {
    background-color: #fb9678;
    border: 0!important;
    color: #fff
}
.full-color-table.full-danger-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-danger-table tr:hover {
    background-color: #fb9678
}
.full-color-table.full-inverse-table {
    background-color: rgba(76, 86, 103, .8)
}
.full-color-table.full-inverse-table thead th {
    background-color: #4c5667;
    border: 0!important;
    color: #fff
}
.full-color-table.full-inverse-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-inverse-table tr:hover {
    background-color: #4c5667
}
.full-color-table.full-dark-table {
    background-color: rgba(43, 43, 43, .8)
}
.full-color-table.full-dark-table thead th {
    background-color: #2b2b2b;
    border: 0!important;
    color: #fff
}
.full-color-table.full-dark-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-dark-table tr:hover {
    background-color: #2b2b2b
}
.full-color-table.full-red-table {
    background-color: rgba(251, 58, 58, .8)
}
.full-color-table.full-red-table thead th {
    background-color: #fb3a3a;
    border: 0!important;
    color: #fff
}
.full-color-table.full-red-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-red-table tr:hover {
    background-color: #fb3a3a
}
.full-color-table.full-purple-table {
    background-color: rgba(150, 117, 206, .8)
}
.full-color-table.full-purple-table thead th {
    background-color: #9675ce;
    border: 0!important;
    color: #fff
}
.full-color-table.full-purple-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-purple-table tr:hover {
    background-color: #9675ce
}
.full-color-table.full-muted-table {
    background-color: rgba(152, 166, 173, .8)
}
.full-color-table.full-muted-table thead th {
    background-color: #98a6ad;
    border: 0!important;
    color: #fff
}
.full-color-table.full-muted-table tbody td {
    border: 0!important;
    color: #fff
}
.full-color-table.full-muted-table tr:hover {
    background-color: #98a6ad
}
.floating-labels .form-group {
    position: relative
}
.floating-labels .form-control {
    font-size: 20px;
    padding: 10px 10px 10px 0;
    display: block;
    border: none;
    border-bottom: 1px solid #e4e7ea
}
.floating-labels select.form-control>option {
    font-size: 14px
}
.has-error .form-control {
    border-bottom: 1px solid #fb9678
}
.has-warning .form-control {
    border-bottom: 1px solid #fec107
}
.has-success .form-control {
    border-bottom: 1px solid #00c292
}
.floating-labels .form-control:focus {
    outline: 0;
    border: none
}
.floating-labels label {
    color: #686868;
    font-size: 16px;
    position: absolute;
    cursor: auto;
    top: 10px;
    transition: .2s ease all;
    -moz-transition: .2s ease all;
    -webkit-transition: .2s ease all
}
.floating-labels .form-control:focus~label,
.floating-labels .form-control:valid~label {
    top: -20px;
    font-size: 12px;
    color: #ab8ce4
}
.floating-labels .bar {
    position: relative;
    display: block
}
.floating-labels .bar:after,
.floating-labels .bar:before {
    content: '';
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: #ab8ce4;
    transition: .2s ease all;
    -moz-transition: .2s ease all;
    -webkit-transition: .2s ease all
}
.floating-labels .bar:before {
    left: 50%
}
.floating-labels .bar:after {
    right: 50%
}
.floating-labels .form-control:focus~.bar:after,
.floating-labels .form-control:focus~.bar:before {
    width: 50%
}
.floating-labels .highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: .5
}
.floating-labels .input-lg,
.floating-labels .input-lg~label {
    font-size: 24px
}
.floating-labels .input-sm,
.floating-labels .input-sm~label {
    font-size: 16px
}
.has-warning .bar:after,
.has-warning .bar:before {
    background: #fec107
}
.has-success .bar:after,
.has-success .bar:before {
    background: #00c292
}
.has-error .bar:after,
.has-error .bar:before {
    background: #fb9678
}
.has-warning .form-control:focus~label,
.has-warning .form-control:valid~label {
    color: #fec107
}
.has-success .form-control:focus~label,
.has-success .form-control:valid~label {
    color: #00c292
}
.has-error .form-control:focus~label,
.has-error .form-control:valid~label {
    color: #fb9678
}
.has-feedback label~.t-0 {
    top: 0
}
.table.dataTable,
table.dataTable {
    width: 99.8%!important
}
table.dataTable thead .sorting::after,
table.dataTable thead .sorting_asc::after,
table.dataTable thead .sorting_desc::after {
    float: none;
    padding-left: 10px
}
.re ul.two-part li i,
.re ul.two-part li span {
    font-size: 36px
}
.bg-light h4 {
    font-weight: 700
}
.agent-contact,
.pro-desc {
    font-size: 12px
}
.form-agent-inq .form-group {
    margin-bottom: 10px
}
.agent-info {
    max-height: 358px;
    height: 358px;
    background: #f7fafc
}
.pro-list {
    margin-top: 15px
}
.pro-detail,
.pro-img {
    display: table-cell;
    vertical-align: top
}
.pro-detail h5 a {
    color: #686868;
    line-height: 20px;
    font-weight: 500
}
.pro-box .pro-list-img {
    display: block;
    height: 210px;
    position: relative;
    overflow: hidden
}
.pro-box .pro-label {
    position: absolute;
    text-transform: uppercase;
    top: 0;
    right: 0;
    border-radius: 2px;
    padding: 5px;
    font-size: 80%
}
.pro-col-label {
    padding: 7px;
    width: 26%;
    display: block;
    margin-top: -15px;
    margin-left: 37%;
    border: 1px solid rgba(120, 130, 140, .13);
    text-transform: uppercase
}
.pro-box .pro-label-img {
    position: absolute;
    top: 30px;
    right: 30px
}
.pro-box.pro-horizontal pro-content {
    width: 100%;
    height: 210px
}
.pro-content .pro-list-details {
    height: 138px;
    max-height: 142px;
    border-bottom: 1px solid rgba(120, 130, 140, .13);
    border-right: 1px solid rgba(120, 130, 140, .13)
}
.pro-content .pro-list-info {
    border-bottom: 1px solid rgba(120, 130, 140, .13)
}
.pro-agent .agent-name h5,
.pro-agent .agent-name small,
.pro-agent-col-3 .agent-name h5,
.pro-agent-col-3 .agent-name small,
.pro-content .pro-list-details h3,
.pro-content .pro-list-details h4,
.pro-content-3-col .pro-list-details h3,
.pro-content-3-col .pro-list-details h4,
.pro-content-3-col .pro-list-details h4 small,
.pro-list-info ul.pro-info li,
.pro-list-info-3-col ul.pro-info li,
.pro-location span,
ul.pro-info li span.label {
    font-weight: 500
}
.pro-list-info ul.pro-info,
.pro-list-info-3-col ul.pro-info {
    padding: 16px 10px 10px;
    list-style: none
}
.pro-list-info ul.pro-info li {
    padding: 10px 0 10px 20px;
    font-size: 12px
}
ul.pro-info li span.label {
    width: 25px;
    height: 25px;
    padding: 8px;
    border-radius: 50%;
    margin-top: -4px;
    margin-right: 15px;
    font-size: 12px
}
ul.pro-amenities li span img,
ul.pro-info li span img {
    margin-top: -8px;
    padding-right: 12px
}
.pro-agent .agent-img a img,
.pro-agent-col-3 .agent-img a img {
    border: 3px solid #fff;
    box-shadow: 1px 1px 1px rgba(120, 130, 140, .13)
}
.pro-agent .agent-img,
.pro-agent .agent-name,
.pro-agent-col-3 .agent-img,
.pro-agent-col-3 .agent-name {
    float: left
}
.pro-agent .agent-img {
    padding-top: 12px
}
.pro-agent .agent-name {
    padding: 10px 0 0 15px
}
.pro-location span {
    padding-top: 27px
}
.pro-content-3-col {
    padding: 15px;
    background: #f7fafc
}
.pro-content-3-col .pro-list-details h4 small {
    color: #fb9678
}
.pro-list-info-3-col ul.pro-info li {
    padding: 10px 5px
}
.pro-agent-col-3 .agent-img {
    padding: 15px
}
.pro-agent-col-3 .agent-name {
    padding: 15px 15px 15px 5px
}
ul.pro-amenities {
    list-style: none;
    padding: 8px 0
}
ul.pro-amenities li {
    padding: 10px 0;
    font-size: 12px
}
ul.pro-amenities li span i {
    padding-right: 12px
}
.pro-rd .table>tbody>tr>td:first-child {
    font-weight: 500
}
.pro-rd .table>tbody>tr>td,
.pro-rd .table>tbody>tr>th {
    border: none;
    padding: 8px 8px 8px 0;
    font-size: 12px
}
.pd-agent-info {
    max-height: 200px;
    height: 200px;
    background: #f7fafc;
    margin-top: 15px
}
.pd-agent-contact,
.pd-agent-inq {
    padding: 25px
}
.pro-add-form .checkbox label,
.pro-add-form .radio label {
    font-weight: 100
}
.register-box {
    max-width: 600px;
    margin: 0 auto;
    padding-top: 2%
}
.step-register {
    position: absolute;
    height: 100%
}
#sortable_panels .panel-heading {
    cursor: move
}
.icheck-list,
.icolors {
    padding: 0;
    margin: 0;
    list-style: none
}
.icolors>li {
    padding: 0;
    margin: 2px;
    float: left;
    display: inline-block;
    height: 30px;
    width: 30px;
    background: #2b2b2b;
    text-align: center
}
.icolors>li.active:after {
    content: "\2713 ";
    color: #fff;
    line-height: 30px
}
.icolors>li:first-child {
    margin-left: 0
}
.icolors>li.orange {
    background: #fb9678
}
.icolors>li.yellow {
    background: #fec107
}
.icolors>li.info {
    background: #03a9f3
}
.icolors>li.green {
    background: #00c292
}
.icolors>li.red {
    background: #fb3a3a
}
.icolors>li.purple {
    background: #9675ce
}
.icolors>li.blue {
    background: #02bec9
}
.icheck-list {
    float: left;
    padding-right: 50px;
    padding-top: 10px
}
.icheck-list li {
    padding-bottom: 5px
}
.icheck-list li label {
    padding-left: 10px
}
.default-steps .column-step {
    padding-top: 30px;
    padding-bottom: 30px;
    text-align: center;
    background: #edf1f5
}
.default-steps .column-step.active {
    background: #03a9f3
}
.default-steps .column-step.active .step-number,
.default-steps .step-number {
    font-size: 24px;
    background: #03a9f3;
    color: #fff;
    border-radius: 50%;
    display: inline-block;
    margin: auto auto 10px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 50px
}
.default-steps .column-step.active .step-number {
    background: #fff;
    color: #686868
}
.default-steps .step-title {
    font-size: 24px;
    font-weight: 100
}
.default-steps .column-step.active .step-info,
.default-steps .column-step.active .step-title {
    color: #fff
}
.thin-steps .column-step {
    padding: 20px;
    background: #edf1f5
}
.thin-steps .column-step.active {
    background: #fb9678
}
.thin-steps .column-step.active .step-number,
.thin-steps .step-number {
    font-size: 20px;
    background: #fb9678;
    color: #fff;
    border-radius: 50%;
    float: left;
    display: inline-block;
    margin: auto;
    padding-top: 2px;
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 40px
}
.thin-steps .column-step.active .step-number {
    background: #fff;
    color: #686868
}
.thin-steps .step-title {
    font-size: 24px;
    font-weight: 100;
    padding-left: 60px;
    margin-top: -2px
}
.thin-steps .column-step.active .step-info,
.thin-steps .column-step.active .step-title {
    color: #fff
}
.thin-steps .step-info {
    padding-left: 60px;
    margin-top: -5px
}
.steps-no-bg .column-step {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center
}
.steps-no-bg .column-step.active .step-number,
.steps-no-bg .step-number {
    font-size: 24px;
    background: #fff;
    color: #686868;
    border: 1px solid #686868;
    border-radius: 50%;
    display: inline-block;
    margin: auto auto 10px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 50px
}
.steps-no-bg .column-step.active .step-number {
    background: #fff;
    color: #03a9f3;
    border: 1px solid #03a9f3
}
.steps-no-bg .step-title {
    font-size: 24px;
    font-weight: 100
}
.steps-no-bg .column-step.active .step-info,
.steps-no-bg .column-step.active .step-title {
    color: #03a9f3
}
.thin-steps-no-bg .column-step {
    padding: 20px
}
.thin-steps-no-bg .column-step.active .step-number,
.thin-steps-no-bg .step-number {
    font-size: 20px;
    background: #fff;
    color: #686868;
    border: 1px solid #686868;
    border-radius: 50%;
    float: left;
    display: inline-block;
    margin: auto;
    padding-top: 1px;
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 40px
}
.thin-steps-no-bg .column-step.active .step-number {
    background: #fff;
    color: #fb9678;
    border: 1px solid #fb9678
}
.thin-steps-no-bg .step-title {
    font-size: 24px;
    font-weight: 100;
    padding-left: 60px;
    margin-top: -2px
}
.thin-steps-no-bg .column-step.active .step-info,
.thin-steps-no-bg .column-step.active .step-title {
    color: #fb9678
}
.thin-steps-no-bg .step-info {
    padding-left: 60px;
    margin-top: -5px
}
.numbered-bg .column-step {
    padding-top: 30px;
    padding-bottom: 30px;
    text-align: center;
    height: 160px;
    background: #edf1f5
}
.numbered-bg .column-step.active {
    background: #03a9f3
}
.numbered-bg .column-step.active .step-number,
.numbered-bg .step-number {
    font-size: 200px;
    position: absolute;
    bottom: 0;
    right: 0;
    line-height: 120px;
    color: #e4e7ea;
    z-index: 1
}
.numbered-bg .column-step.active .step-number {
    color: #0298da
}
.numbered-bg .step-title {
    font-size: 24px;
    font-weight: 100;
    padding-top: 18px
}
.numbered-bg .step-info,
.numbered-bg .step-title {
    z-index: 3;
    position: relative
}
.numbered-bg .column-step.active .step-info,
.numbered-bg .column-step.active .step-title {
    color: #fff
}
.thin-steps-numbered-bg .column-step {
    padding: 20px;
    text-align: center;
    background: #edf1f5
}
.thin-steps-numbered-bg .column-step.active {
    background: #03a9f3
}
.thin-steps-numbered-bg .column-step.active .step-number,
.thin-steps-numbered-bg .step-number {
    font-size: 120px;
    position: absolute;
    bottom: 0;
    right: 0;
    line-height: 75px;
    color: #e4e7ea;
    z-index: 1
}
.thin-steps-numbered-bg .column-step.active .step-number {
    color: #0298da
}
.thin-steps-numbered-bg .step-title {
    font-size: 24px;
    font-weight: 100
}
.thin-steps-numbered-bg .step-info,
.thin-steps-numbered-bg .step-title {
    z-index: 3;
    position: relative
}
.thin-steps-numbered-bg .column-step.active .step-info,
.thin-steps-numbered-bg .column-step.active .step-title {
    color: #fff
}
.line-steps .column-step {
    padding: 30px 0;
    text-align: center
}
.line-steps .step-number {
    font-size: 20px;
    background: #fff;
    border-radius: 50%!important;
    display: inline-block;
    margin: auto auto 14px;
    border: 3px solid #e4e7ea;
    position: relative;
    height: 40px;
    width: 40px;
    z-index: 3;
    line-height: 37px
}
.line-steps .step-title {
    font-size: 20px;
    font-weight: 100;
    position: relative
}
.line-steps .step-title:after,
.line-steps .step-title:before {
    content: '';
    height: 3px;
    width: 50%;
    position: absolute;
    background-color: #e4e7ea;
    top: -32px;
    z-index: 1;
    transform: translateY(-100%)
}
.line-steps .step-title:after {
    left: 50%
}
.line-steps .step-title:before {
    right: 50%
}
.line-steps .finish .step-title:after,
.line-steps .start .step-title:before {
    content: none
}
.line-steps .start .step-title:after {
    background-color: #03a9f3
}
.line-steps .start .step-number {
    color: #03a9f3;
    border-color: #03a9f3
}
.line-steps .start .step-info,
.line-steps .start .step-title {
    color: #686868
}
.line-steps .active .step-title:after,
.line-steps .active .step-title:before {
    background-color: #03a9f3
}
.line-steps .active .step-number {
    color: #03a9f3;
    border-color: #03a9f3;
    webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    -o-transform: scale(1.3);
    transform: scale(1.3)
}
.line-steps .active .step-info,
.line-steps .active .step-title {
    color: #686868
}
.line-steps .upcoming .step-title:after,
.line-steps .upcoming .step-title:before {
    background-color: #03a9f3
}
.line-steps .upcoming .step-number {
    color: #03a9f3;
    border-color: #03a9f3
}
.line-steps .upcoming .step-info,
.line-steps .upcoming .step-title {
    color: #686868
}
.line-steps .finish .step-number {
    color: #e4e7ea
}
.line-steps .finish .step-info,
.line-steps .finish .step-title {
    color: #686868
}
.ribbon-wrapper,
.ribbon-wrapper-bottom,
.ribbon-wrapper-reverse,
.ribbon-wrapper-right-bottom {
    position: relative;
    background: #edf1f5;
    padding: 50px 15px 15px 50px
}
.ribbon-overflow {
    overflow: hidden
}
.ribbon-wrapper-reverse {
    padding: 50px 50px 15px 15px
}
.ribbon-wrapper-bottom {
    padding: 15px 15px 50px 50px
}
.ribbon-wrapper-right-bottom {
    padding: 15px 50px 50px 15px
}
.ribbon {
    padding: 0 20px;
    height: 30px;
    line-height: 30px;
    clear: left;
    position: absolute;
    top: 12px;
    left: -2px;
    color: #fff
}
.ribbon-bookmark:before {
    position: absolute;
    top: 0;
    left: 100%;
    display: block;
    width: 0;
    height: 0;
    content: '';
    border: 15px solid #2b2b2b;
    border-right: 10px solid transparent
}
.ribbon-right {
    left: auto;
    right: -2px
}
.ribbon-bookmark.ribbon-right:before {
    right: 100%;
    left: auto;
    border-right: 15px solid #2b2b2b;
    border-left: 10px solid transparent
}
.ribbon-vertical-l,
.ribbon-vertical-r {
    clear: none;
    padding: 0 5px;
    height: 70px;
    width: 30px;
    line-height: 70px;
    text-align: center;
    left: 12px;
    top: -2px
}
.ribbon-vertical-r {
    left: auto;
    right: 12px
}
.ribbon-bookmark.ribbon-vertical-l:before,
.ribbon-bookmark.ribbon-vertical-r:before {
    top: 100%;
    left: 0;
    margin-top: -14px;
    border-right: 15px solid #2b2b2b;
    border-bottom: 10px solid transparent
}
.ribbon-badge {
    top: 15px;
    overflow: hidden;
    left: -90px;
    width: 100%;
    text-align: center;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg)
}
.ribbon-badge.ribbon-right {
    left: auto;
    right: -90px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg)
}
.ribbon-badge.ribbon-bottom {
    top: auto;
    bottom: 15px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg)
}
.ribbon-badge.ribbon-right.ribbon-bottom {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg)
}
.ribbon-corner {
    top: 0;
    left: 0;
    background-color: transparent!important;
    padding: 6px 0 0 10px
}
.ribbon-corner i {
    position: relative
}
.ribbon-corner:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 0;
    content: '';
    border: 30px solid transparent;
    border-top-color: #ff6849;
    border-left-color: #ff6849
}
.ribbon-corner.ribbon-right:before {
    right: 0;
    left: auto;
    border-right-color: #526069;
    border-left-color: transparent
}
.ribbon-corner.ribbon-right {
    right: 0;
    left: auto;
    padding: 6px 10px 0 0
}
.ribbon-corner.ribbon-bottom:before {
    top: auto;
    bottom: 0;
    border-top-color: transparent;
    border-bottom-color: #526069
}
.ribbon-corner.ribbon-bottom {
    bottom: 0;
    top: auto;
    padding: 0 10px 6px
}
.ribbon-custom {
    background: #ff6849
}
.ribbon-bookmark.ribbon-right.ribbon-custom:before {
    border-right-color: #ff6849;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-custom:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-custom:before {
    border-right-color: #ff6849;
    border-bottom-color: transparent
}
.ribbon-primary {
    background: #ab8ce4
}
.ribbon-bookmark.ribbon-primary:before {
    border-color: #ab8ce4 transparent #ab8ce4 #ab8ce4
}
.ribbon-bookmark.ribbon-right.ribbon-primary:before {
    border-right-color: #ab8ce4;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-primary:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-primary:before {
    border-right-color: #ab8ce4;
    border-bottom-color: transparent
}
.ribbon-primary.ribbon-corner:before {
    border-top-color: #ab8ce4;
    border-left-color: #ab8ce4
}
.ribbon-primary.ribbon-corner.ribbon-right:before {
    border-right-color: #ab8ce4;
    border-left-color: transparent
}
.ribbon-primary.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #ab8ce4
}
.ribbon-success {
    background: #00c292
}
.ribbon-bookmark.ribbon-success:before {
    border-color: #00c292 transparent #00c292 #00c292
}
.ribbon-bookmark.ribbon-right.ribbon-success:before {
    border-right-color: #00c292;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-success:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-success:before {
    border-right-color: #00c292;
    border-bottom-color: transparent
}
.ribbon-success.ribbon-corner:before {
    border-top-color: #00c292;
    border-left-color: #00c292
}
.ribbon-success.ribbon-corner.ribbon-right:before {
    border-right-color: #00c292;
    border-left-color: transparent
}
.ribbon-success.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #00c292
}
.ribbon-info {
    background: #03a9f3
}
.ribbon-bookmark.ribbon-info:before {
    border-color: #03a9f3 transparent #03a9f3 #03a9f3
}
.ribbon-bookmark.ribbon-right.ribbon-info:before {
    border-right-color: #03a9f3;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-info:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-info:before {
    border-right-color: #03a9f3;
    border-bottom-color: transparent
}
.ribbon-info.ribbon-corner:before {
    border-top-color: #03a9f3;
    border-left-color: #03a9f3
}
.ribbon-info.ribbon-corner.ribbon-right:before {
    border-right-color: #03a9f3;
    border-left-color: transparent
}
.ribbon-info.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #03a9f3
}
.ribbon-warning {
    background: #fec107
}
.ribbon-bookmark.ribbon-warning:before {
    border-color: #fec107 transparent #fec107 #fec107
}
.ribbon-bookmark.ribbon-right.ribbon-warning:before {
    border-right-color: #fec107;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-warning:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-warning:before {
    border-right-color: #fec107;
    border-bottom-color: transparent
}
.ribbon-warning.ribbon-corner:before {
    border-top-color: #fec107;
    border-left-color: #fec107
}
.ribbon-warning.ribbon-corner.ribbon-right:before {
    border-right-color: #fec107;
    border-left-color: transparent
}
.ribbon-warning.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #fec107
}
.ribbon-danger {
    background: #fb9678
}
.ribbon-bookmark.ribbon-danger:before {
    border-color: #fb9678 transparent #fb9678 #fb9678
}
.ribbon-bookmark.ribbon-right.ribbon-danger:before {
    border-right-color: #fb9678;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-danger:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-danger:before {
    border-right-color: #fb9678;
    border-bottom-color: transparent
}
.ribbon-danger.ribbon-corner:before {
    border-top-color: #fb9678;
    border-left-color: #fb9678
}
.ribbon-danger.ribbon-corner.ribbon-right:before {
    border-right-color: #fb9678;
    border-left-color: transparent
}
.ribbon-danger.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #fb9678
}
.ribbon-default {
    background: #2b2b2b
}
.ribbon-bookmark.ribbon-default:before {
    border-color: #2b2b2b transparent #2b2b2b #2b2b2b
}
.ribbon-bookmark.ribbon-right.ribbon-default:before {
    border-right-color: #2b2b2b;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-default:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-default:before {
    border-right-color: #2b2b2b;
    border-bottom-color: transparent
}
.ribbon-default.ribbon-corner:before {
    border-top-color: #2b2b2b;
    border-left-color: #2b2b2b
}
.ribbon-default.ribbon-corner.ribbon-right:before {
    border-right-color: #2b2b2b;
    border-left-color: transparent
}
.ribbon-default.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #2b2b2b
}
.bootstrap-switch,
.bootstrap-switch .bootstrap-switch-container {
    border-radius: 2px
}
.bootstrap-switch .bootstrap-switch-handle-on {
    border-bottom-left-radius: 2px;
    border-top-left-radius: 2px
}
.bootstrap-switch .bootstrap-switch-handle-off {
    border-bottom-right-radius: 2px;
    border-top-right-radius: 2px
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary {
    color: #fff;
    background: #ab8ce4
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info {
    color: #fff;
    background: #03a9f3
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success {
    color: #fff;
    background: #00c292
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning {
    color: #fff;
    background: #fec107
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger {
    color: #fff;
    background: #fb9678
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default {
    color: #2b2b2b;
    background: #e4e7ea
}
.lobipanel .panel-heading .dropdown .dropdown-menu>li>a .panel-control-icon,
.lobipanel>.panel-heading .dropdown .dropdown-toggle .panel-control-icon {
    line-height: 1px
}
.lobipanel .panel-heading .dropdown .dropdown-menu>li>a {
    color: #2b2b2b
}
.lobipanel .panel-heading .dropdown .dropdown-menu {
    box-shadow: none!important
}
.lobipanel .panel-heading .dropdown .dropdown-menu>li>a:focus:hover,
.lobipanel .panel-heading .dropdown .dropdown-menu>li>a:hover {
    background: 0 0;
    text-shadow: none;
    opacity: .6
}
.lobipanel-placeholder {
    background-color: #02bec9;
    opacity: .1;
    border: 1px dashed #2b2b2b
}
.dp-selected[style] {
    background-color: #01c0c8!important
}
.grid-stack-item-content {
    background: #fff;
    color: #2b2b2b;
    font-family: Poppins, sans-serif;
    text-align: center;
    font-size: 20px
}
.grid-stack-item-content .fa {
    font-size: 64px;
    display: block;
    margin: 20px 0 10px
}
@media (max-width: 1350px) {
    .carousel .item h3 {
        font-size: 17px;
        height: 90px
    }
    .inbox-center a {
        width: 400px
    }
}
@media (min-width: 1024px) {
    .app-search .form-control:focus {
        width: 300px
    }
}
@media (min-width: 768px) {
    #page-wrapper {
        position: inherit;
        margin: 0 0 0 220px
    }
    .navbar-default {
        position: relative;
        width: 100%;
        top: 0
    }
    .fix-header .navbar-static-top {
        position: fixed
    }
    .fix-header #page-wrapper {
        margin-top: 60px
    }
    .sidebar {
        z-index: 10;
        position: absolute;
        width: 220px;
        padding-top: 60px;
        height: 100%
    }
    .fix-sidebar .sidebar {
        position: fixed;
        overflow: hidden
    }
    .fix-sidebar .top-left-part {
        position: fixed;
        width: 220px
    }
    .fix-sidebar .navbar-left {
        margin-left: 220px
    }
    .footer {
        left: 220px
    }
    .content-wrapper #page-wrapper {
        margin-left: 60px
    }
    .content-wrapper .navbar-left {
        margin-left: 0
    }
    .content-wrapper .footer {
        left: 60px
    }
    .content-wrapper .sidebar {
        width: 60px
    }
    .content-wrapper .sidebar .hide-menu {
        display: none;
        width: 180px;
        left: 60px
    }
    .content-wrapper .sidebar .sidebar-nav {
        position: absolute;
        overflow: hidden
    }
    .content-wrapper .sidebar .sidebar-nav .nav-second-level {
        position: absolute;
        z-index: 999999
    }
    .content-wrapper .sidebar .nav-small-cap,
    .content-wrapper .sidebar li span span {
        display: none
    }
    .content-wrapper .sidebar #side-menu>li:hover {
        width: 300px;
        background: #f7fafc
    }
    .content-wrapper .sidebar li:hover .hide-menu {
        display: inline
    }
    .content-wrapper .sidebar #side-menu>li>a {
        padding: 15px 17px 15px 20px
    }
    .content-wrapper .sidebar li:hover .nav-second-level,
    .content-wrapper .sidebar li:hover .nav-second-level.collapse li,
    .content-wrapper .sidebar li:hover .nav-second-level.in {
        display: block
    }
    .content-wrapper .sidebar .nav-second-level {
        position: absolute;
        left: 60px;
        background: #f7fafc;
        width: 240px;
        opacity: 1;
        padding-bottom: 20px;
        display: none
    }
    .content-wrapper .sidebar .nav-second-level li {
        background: #f7fafc
    }
    .content-wrapper .top-left-part {
        width: 60px
    }
    .navbar-top-links .dropdown-alerts,
    .navbar-top-links .dropdown-messages,
    .navbar-top-links .dropdown-tasks {
        margin-left: auto
    }
    .mail_listing {
        border-left: 1px solid rgba(120, 130, 140, .13);
        padding-left: 20px
    }
    .inbox-panel {
        padding-right: 20px
    }
    .top-minus {
        margin-top: -62px;
        float: right
    }
    .content-wrapper.fix-sidebar .navbar-left,
    .fix-sidebar.content-wrapper .navbar-left {
        margin-left: 60px!important
    }
    .content-wrapper.fix-sidebar .sidebar,
    .fix-sidebar.content-wrapper .sidebar {
        position: fixed
    }
    .content-wrapper.fix-sidebar .sidebar .sidebar-nav,
    .fix-sidebar.content-wrapper .sidebar .sidebar-nav {
        position: absolute
    }
    .content-wrapper.fix-sidebar .sidebar .sidebar-nav .nav-second-level,
    .fix-sidebar.content-wrapper .sidebar .sidebar-nav .nav-second-level {
        position: absolute;
        z-index: 99999
    }
    .lobipanel .panel-heading .dropdown .dropdown-menu>li>a {
        color: #fff
    }
}
@media (max-width: 1024px) {
    .b-r-none {
        border-right: 0
    }
    .carousel-inner h3 {
        height: 90px;
        overflow: hidden
    }
    .inbox-center a {
        width: 300px
    }
}
@media (max-width: 767px) {
    .navbar-top-links {
        display: inline-block
    }
    .navbar-top-links .profile-pic img {
        margin-right: 0
    }
    .top-left-part {
        width: 60px
    }
    .navbar-top-links li:last-child {
        margin-right: 0
    }
    .navbar-top-links .dropdown-alerts,
    .navbar-top-links .dropdown-messages,
    .navbar-top-links .dropdown-tasks {
        width: 260px
    }
    .row-in-br {
        border-right: 0;
        border-bottom: 1px solid rgba(120, 130, 140, .13)
    }
    .bg-title .breadcrumb {
        float: left;
        margin-top: 0;
        margin-bottom: 10px
    }
    ul.timeline:before {
        left: 40px
    }
    ul.timeline>li>.timeline-panel {
        width: calc(100% - 90px)
    }
    ul.timeline>li>.timeline-badge {
        top: 16px;
        left: 15px;
        margin-left: 0
    }
    ul.timeline>li>.timeline-panel {
        float: right
    }
    ul.timeline>li>.timeline-panel:before {
        right: auto;
        left: -15px;
        border-right-width: 15px;
        border-left-width: 0
    }
    ul.timeline>li>.timeline-panel:after {
        right: auto;
        left: -14px;
        border-right-width: 14px;
        border-left-width: 0
    }
    .wizard-steps>li {
        display: block
    }
    .dropdown .dropdown-tasks,
    .dropdown .mailbox {
        left: -100px
    }
    .fix-header .navbar-static-top {
        position: fixed;
        top: 0;
        width: 100%
    }
    .fix-header #page-wrapper {
        margin-top: 60px
    }
    .fix-header .sidebar {
        position: fixed;
        height: 350px;
        top: 60px;
        z-index: 100;
        overflow: auto!important;
        box-shadow: 0 10px 35px rgba(0, 0, 0, .2)
    }
    .mega-dropdown-menu {
        height: 340px;
        overflow: auto
    }
    .left-aside {
        position: relative;
        width: 100%;
        border: 0
    }
    .right-aside {
        margin-left: 0
    }
    .chat-main-box .chat-left-aside {
        left: -250px;
        transition: .5s ease-in;
        background: #fff
    }
    .chat-main-box .chat-left-aside.open-pnl {
        left: 0
    }
    .chat-main-box .chat-left-aside .open-panel {
        display: block
    }
    .chat-main-box .chat-right-aside {
        margin: 0
    }
    .table-responsive.pro-rd {
        border: none
    }
    #msform fieldset,
    .login-register,
    .step-register {
        position: relative
    }
}
@media (max-width: 480px) {
    .vtabs .tabs-vertical {
        width: auto
    }
    .stat-item {
        padding-right: 0
    }
    .login-box {
        width: 100%
    }
    .pro-content .pro-list-details {
        height: 100px;
        border-right: none
    }
    .pro-list-info ul.pro-info li {
        padding: 10px 0
    }
    .pro-list-info ul.pro-info {
        padding-left: 0
    }
    .pro-agent .agent-img {
        padding-top: 3px
    }
    .pro-agent .agent-name {
        padding: 2px 0 10px 15px
    }
}
@media (max-width: 991px) {
    .line-steps .step-title:after,
    .line-steps .step-title:before {
        content: none
    }
    .numbered-bg .step-info,
    .numbered-bg .step-title {
        padding-right: 0
    }
}
.navbar-static-top {
    padding: 0
}
.navbar-static-top .dropdown-toggle::after {
    display: none
}
.mega-dropdown .mega-dropdown-menu>li {
    float: left;
    width: 100%
}
#side-menu {
    display: block;
    transition: .5 easy-out
}
#side-menu .nav {
    flex-direction: column
}
a.btn:not([href]):not([tabindex]) {
    color: #fff;
    font-size: 14px;
    cursor: pointer
}
.btn {
    font-size: 14px;
    padding: .8rem 1.2rem
}
a.btn-default:not([href]):not([tabindex]) {
    color: #686868
}
.btn-group.show {
    display: inline-block!important
}
.btn-lg {
    padding: 10px 16px;
    font-size: 18px
}
.btn-sm {
    padding: 5px 10px;
    font-size: 12px
}
.btn-xs {
    padding: 1px 8px;
    font-size: 11px
}
.btn-circle {
    padding: 6px 0
}
.btn-group-justified {
    display: table;
    width: 100%;
    table-layout: fixed;
    border-collapse: separate
}
.btn-group-justified .btn,
.btn-group-justified .btn-group {
    display: table-cell;
    float: none;
    width: 1%
}
.grid-stack {
    width: 100%
}
.mail_listing .media {
    display: block
}
.customtab.nav-tabs .nav-link {
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 2px solid #f7fafc
}
.customtab.nav-tabs .nav-link.active,
.customtab.nav-tabs .nav-link.active:focus,
.customtab.nav-tabs .nav-link:hover {
    border-bottom: 2px solid #ff6849;
    color: #ff6849
}
.vtabs .tabs-vertical li a.active,
.vtabs .tabs-vertical li a.active:focus,
.vtabs .tabs-vertical li a.active:hover {
    background: #ff6849;
    border: 0;
    border-right: 2px solid #ff6849;
    margin-right: -1px;
    color: #fff
}
.customvtab .tabs-vertical li a.active,
.customvtab .tabs-vertical li a.active:focus,
.customvtab .tabs-vertical li a.active:hover {
    background: #fff;
    border: 0;
    border-right: 2px solid #ff6849;
    margin-right: -1px;
    color: #2b2b2b
}
.customtab2 li .nav-link.active,
.customtab2 li .nav-link.active:focus,
.customtab2 li .nav-link.active:hover {
    background: #ff6849;
    border: 0 solid #ff6849;
    color: #fff
}
.customtab2.nav-tabs .nav-link {
    border: 0
}
.nav-pills .nav-item.show .nav-link,
.nav-pills .nav-link.active {
    background: #ff6849
}
span.caret {
    display: none
}
blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px
}
.list-inline>li {
    display: inline-block
}
.modal-header {
    display: block
}
.modal-header .modal-title {
    margin-top: 0
}
.popover,
.popover-title,
.tooltip {
    font-family: Poppins, sans-serif;
    font-size: 13px
}
.popover-title {
    margin-top: 0
}
.custom-select {
    height: calc(4.25rem)
}
.fileinput .form-control {
    width: 100%;
    position: relative
}
.fileinput-new .input-group-addon {
    position: absolute;
    right: 3px;
    top: 3px;
    z-index: 10!important
}
.input-group-addon {
    padding: 6px 12px;
    font-size: 14px
}
.custom-control {
    padding-left: 20px
}
.custom-control-indicator {
    width: 15px;
    height: 15px
}
.custom-file {
    height: 30px;
    width: 100%
}
.custom-file .custom-file-control,
.custom-file .custom-file-control::before {
    height: 35px
}
select.form-control:not([size]):not([multiple]) {
    height: calc(3.85rem)
}
.datepicker td,
.datepicker th,
.table-condensed td,
.table-condensed th {
    padding: 5px
}
.note-popover {
    display: none
}
.note-editor {
    border: 0
}
[type=reset],
[type=submit],
button,
html [type=button] {
    -webkit-appearance: none
}
.modal-backdrop.in {
    opacity: .5
}
a.fc-event:not([href]):not([tabindex]) {
    color: #fff
}
.dataTables_wrapper {
    display: block
}
.dataTables_wrapper label {
    display: inline-block
}
@media (min-width: 992px) {
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9 {
        float: left
    }
}

/* adapt */
#preview{
    height: auto !important;
}