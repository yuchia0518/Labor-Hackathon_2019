// navbar='<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style="height:120px;">\
//   <a class="navbar-brand" href="./index.html" >就業通</a>\
//   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">\
//     <span class="navbar-toggler-icon"></span>\
//   </button>\
//   <div class="collapse navbar-collapse" id="navbarNav" >\
//     <div class="navbar-nav">\
//       <a class="nav-item nav-link active" href="index.html">首頁</a>\
//       <a class="nav-item nav-link active" href="field.html" style = "margin-left:40px;">學門</a>\
//       <a class="nav-item nav-link active" href="jobType.html" style = "margin-left:40px;">職缺</a>\
//       <a class="nav-item nav-link active" href="#" style = "margin-left:40px;">關於</a>\
//     </div>\
//     <div class="navbar-nav" style="margin-left:850px;">\
//       <a class="nav-item nav-link" href="#">登出</a>\
//       <a class="nav-item nav-link" href="MemberManage.html">會員管理</a>\
//     </div>\
//   </div>\
// </nav>';

navbar='<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center navbar fixed-top">\
    <a href="../index.php" class="navbar-brand d-flex w-50 mr-auto">就業通</a>\
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">\
        <span class="navbar-toggler-icon"></span>\
    </button>\
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">\
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">\
            <li class="nav-item">\
                <a class="nav-link" href="#"></a>\
            </li>\
            <!-- <li class="nav-item">\
                <a class="nav-link" href="#">Right</a>\
            </li>\
            <li class="nav-item">\
                <a class="nav-link" href="#">Right</a>\
            </li> -->\
        </ul>\
    </div>\
</nav>\
  <script type="text/javascript">\
    $(function () {\
  $(document).scroll(function () {\
    var $nav = $(".fixed-top");\
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());\
  });\
});\
  </script>\
  <style type="text/css">\
\
  .fixed-top.scrolled {\
    color : orange;\
    background-color: black;\
    transition: background-color 500ms linear;\
\
  }\
  .navbar {\
      background-color: #000281;\
}\
.navbar .navbar-brand {\
  color: #ffffff;\
}\
.navbar .navbar-brand:hover,\
.navbar .navbar-brand:focus {\
  color: #ffffff;\
}\
.navbar .navbar-text {\
  color: #ffffff;\
}\
.navbar .navbar-text a {\
  color: #ffffff;\
}\
.navbar .navbar-text a:hover,\
.navbar .navbar-text a:focus {\
  color: #ffffff; \
}\
.navbar .navbar-nav .nav-link {\
  color: #ffffff;\
  border-radius: .25rem;\
  margin: 0 0.25em;\
}\
.navbar .navbar-nav .nav-link:not(.disabled):hover,\
.navbar .navbar-nav .nav-link:not(.disabled):focus {\
  color: #ffffff;\
}\
.navbar .navbar-nav .nav-item.active .nav-link,\
.navbar .navbar-nav .nav-item.active .nav-link:hover,\
.navbar .navbar-nav .nav-item.active .nav-link:focus,\
.navbar .navbar-nav .nav-item.show .nav-link,\
.navbar .navbar-nav .nav-item.show .nav-link:hover,\
.navbar .navbar-nav .nav-item.show .nav-link:focus {\
  color: #ffffff;\
  background-color: #ca6c00;\
}\
.navbar .navbar-toggle {\
  border-color: #ca6c00;\
}\
.navbar .navbar-toggle:hover,\
.navbar .navbar-toggle:focus {\
  background-color: #ca6c00;\
}\
.navbar .navbar-toggle .navbar-toggler-icon {\
  color: #ffffff;\
}\
.navbar .navbar-collapse,\
.navbar .navbar-form {\
  border-color: #ffffff;\
}\
.navbar .navbar-link {\
  color: #ffffff;\
}\
.navbar .navbar-link:hover {\
  color: #ffffff;\
}\
\
@media (max-width: 575px) {\
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {\
    color: #ffffff;\
  }\
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,\
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {\
    color: #ffffff;\
  }\
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {\
    color: #ffffff;\
    background-color: #ca6c00;\
  }\
}\
\
@media (max-width: 767px) {\
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {\
    color: #ffffff;\
  }\
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,\
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {\
    color: #ffffff;\
  }\
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {\
    color: #ffffff;\
    background-color: #ca6c00;\
  }\
}\
\
@media (max-width: 991px) {\
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {\
    color: #ffffff;\
  }\
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,\
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {\
    color: #ffffff;\
  }\
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {\
    color: #ffffff;\
    background-color: #ca6c00;\
  }\
}\
\
@media (max-width: 1199px) {\
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {\
    color: #ffffff;\
  }\
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,\
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {\
    color: #ffffff;\
  }\
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {\
    color: #ffffff;\
    background-color: #ca6c00;\
  }\
}\
\
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {\
  color: #ffffff;\
}\
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,\
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {\
  color: #ffffff;\
}\
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {\
  color: #ffffff;\
  background-color: #ca6c00;\
}\
  </style>';

document.write(navbar);
