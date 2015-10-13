<?php
session_start();

// include "../database/connect.class.php";
// $db = new database();
// $db->connect();
//
// require ("../configuration/config.class.php");
// $conf = new Config();
// $prefix = $conf->getPrefix();
// $sessionName = $conf->getSessionname();
// $title = $conf->getAdminTitle();
//
// include "../system/check_session.php";
// include "../system/check_authen.php";
//
// include "function/function.inc.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php //print $title;
      print "IS"; ?>
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/bootstrap-editable.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/ladda-themeless.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/social-buttons.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
    <link href="../../stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
    <link href="../../stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
    <link href="../../stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <link href="../../stylesheets/jquery.fileupload-ui.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="../../stylesheets/dropzone.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="../../jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="../../jquery/jquery-ui.js" type="text/javascript"></script>
    <script src="../../javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../javascripts/raphael.min.js" type="text/javascript"></script>
    <script src="../../javascripts/selectivizr-min.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="../../javascripts/fullcalendar.min.js" type="text/javascript"></script>
    <script src="../../javascripts/gcal.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../../javascripts/datatable-editable.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="../../javascripts/excanvas.min.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="../../javascripts/isotope_extras.js" type="text/javascript"></script>
    <script src="../../javascripts/modernizr.custom.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="../../javascripts/select2.js" type="text/javascript"></script>
    <script src="../../javascripts/styleswitcher.js" type="text/javascript"></script>
    <script src="../../javascripts/wysiwyg.js" type="text/javascript"></script>
    <script src="../../javascripts/typeahead.js" type="text/javascript"></script>
    <script src="../../javascripts/summernote.min.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.validate.js" type="text/javascript"></script>
    <script src="../../javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
    <script src="../../javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Extension -->
    <script type="text/javascript" src="../../javascripts/bootstrap-datepicker-thai.js"></script>
    <script type="text/javascript" src="../../javascripts/locales/bootstrap-datepicker.th.js"></script>

    <script src="../../javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
    <script src="../../javascripts/bootstrap-colorpicker.js" type="text/javascript"></script>
    <script src="../../javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="../../javascripts/typeahead.js" type="text/javascript"></script>
    <script src="../../javascripts/ladda.min.js" type="text/javascript"></script>
    <script src="../../javascripts/moment.js" type="text/javascript"></script>
    <script src="../../javascripts/mockjax.js" type="text/javascript"></script>
    <script src="../../javascripts/bootstrap-editable.min.js" type="text/javascript"></script>
    <script src="../../javascripts/xeditable-demo-mock.js" type="text/javascript"></script>
    <script src="../../javascripts/xeditable-demo.js" type="text/javascript"></script>
    <script src="../../javascripts/daterange-picker.js" type="text/javascript"></script>
    <script src="../../javascripts/date.js" type="text/javascript"></script>
    <script src="../../javascripts/fitvids.js" type="text/javascript"></script>
    <script src="../../javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="../../javascripts/dropzone.js" type="text/javascript"></script>
    <script src="../../javascripts/main.js" type="text/javascript"></script>
    <script src="../../javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <style media="screen">
      .has-req{
        color: red;
        font-weight: bold;
      }
    </style>
  </head>
  <body class="page-header-fixed bg-1">
    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown user hidden-xs">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-user fa-2x"></i>&nbsp;&nbsp;&nbsp;John Smith<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="profile.php">
                    <i class="fa fa-user"></i>My Account</a>
                  </li>
                  <li><a href="change_password.php">
                    <i class="fa fa-gear"></i>Change password</a>
                  </li>
                  <li><a href="../signout.php">
                    <i class="fa fa-sign-out"></i>Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="index.php">SIMANH</a>
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="index.php"><span aria-hidden="true" class="se7en-home"></span>หน้าหลัก</a>
              </li>

              <li class="dropdown current"><a data-toggle="dropdown" class="current" href="#">
                <span aria-hidden="true" class="se7en-forms"></span>ฟอร์ม<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="current" href="form-components.html">ข้อมูลเบื้องต้น</a>
                  </li>
                  <li>
                    <a href="form-advanced.html">การเกิดอุบัติเหตุ</a>
                  </li>
                  <li>
                    <a href="form-advanced.html">การบาดเจ็บ</a>
                  </li>
                  <li>
                    <a href="form-advanced.html">การนำส่งและปฐมพยาบาล</a>
                  </li>
                  <li>
                    <a href="form-advanced.html">Diagnosis</a>
                  </li>
                  <li>
                    <a href="form-advanced.html">การจำหน่ายและส่งต่อ</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="map.php"><span aria-hidden="true" class="se7en-flag"></span>แผนที่</a>
              </li>
              <li>
                <a href="export.php"><span aria-hidden="true" class="se7en-pages"></span>รายงาน</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height">
              <div class="heading">
                <i class="fa fa-edit"></i>ส่วนที่ 1
              </div>
              <div class="widget-content">
                <div class="wizard" id="wizard">
                  <div class="padded">
                    <ul class="wizard-nav">
                      <li>
                        <a data-toggle="tab" href="#tab1">1</a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#tab2">2 </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#tab3">3</a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#tab4">4</a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#tab5">5</a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#tab6">6</a>
                      </li>
                    </ul>
                    <div class="progress progress-striped active">
                      <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar" role="progressbar"></div>
                    </div>
                    <div class="tab-content">
                      <div class="tab-pane" id="tab1">


                        <form role="form">
                          <div class="row">
                            <div class="col-md-12">
                              <h2>
                                1.1 ข้อมูลเบื้องต้น
                              </h2>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">HN <span class="has-req">*</span></label><input class="form-control" id="HN" placeholder="กรอก HN ของผู้ประสบอุบัติเหตุ" type="text">
                              </div>
                              <div class="form-group">
                                <label for="password">ชื่อ <span class="has-req">*</span></label><input class="form-control" id="password" placeholder="กรอกชื่อ" type="text">
                              </div>
                              <div class="form-group">
                                <label for="password">นามสกุล <span class="has-req">*</span></label><input class="form-control" id="password" placeholder="กรอกนามสกุล" type="text">
                              </div>
                              <div class="form-group">
                                <label for="pid">ID <span class="has-req">*</span></label><input class="form-control" id="pid" placeholder="กรอกเลขบัตรประจำตัว" type="text">
                              </div>
                              <div class="form-group">
                                <label for="pid">อาชีพ <span class="has-req">*</span></label>
                                <select class="select2able">
                                  <option value="" selected=""> --กรุณาเลือกอาชีพ -- </option>
                                  <option value="00">ไม่มีอาชีพ</option>
                                  <option value="01">ข้าราชการ</option>
                                  <option value="02">ตำรวจ /ทหาร</option>
                                  <option value="03">พนักงานรัฐวิสาหกิจ</option>
                                  <option value="06">ค้าขาย</option>
                                  <option value="07">เกษตรกรรม</option>
                                  <option value="08">รักศึกษา/รักเรียน</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">

                              <div class="row">
                                <div class="form-group">
                                  <label class="control-label col-md-3">เพศ <br>(Gender) <span class="has-req">*</span></label>
                                  <div class="col-md-7">
                                    <label class="radio-inline"><input name="optionsRadios2" type="radio" value="option1"><span>ชาย</span></label><label class="radio-inline"><input  name="optionsRadios2" type="radio" value="option2"><span>หญิง</span></label>
                                  </div>
                                </div>
                              </div>

                              <p>
                                &nbsp;
                              </p>

                              <div class="form-group">
                                <label for="pid">วัน-เดือน-ปีเกิด (Date of Birth) <span class="has-req">*</span></label>
                                <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd-mm-yyyy" data-date-language="th-th" data-date-isBuddhist="true" data-date-start-view="2">
                                  <input class="form-control" type="text" readonly ><span class="input-group-addon"><i class="fa fa-calendar"></i></span></input>
                                </div>
                              </div>

                              <div class="row" style="padding-top: 10px;">
                                <div class="form-group">
                                  <label class="control-label col-md-3">ที่อยู่ปัจจุบัน <br>(Address) <span class="has-req">*</span></label>
                                  <div class="col-md-7">
                                    <label class="radio"><input name="optionsRadios2" type="radio" value="option1"><span>ในจังหวัด</span></label>
                                    <label class="radio"><input  name="optionsRadios2" type="radio" value="option2"><span>นอกจังหวัด</span></label>
                                    <label class="radio"><input  name="optionsRadios2" type="radio" value="option2"><span>นอกประเทศ</span></label>
                                  </div>
                                </div>
                              </div>

                              <p>
                                &nbsp;
                              </p>

                            </div>
                          </div>

                          <!-- <div class="row">
                            <div class="col-md-12">
                              <h2>
                                1.2 อาชีพ
                              </h2>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label col-md-2">Select2 Dropdown</label>
                                <div class="col-md-7">
                                  <select class="select2able"><option value="Category 1">Option 1</option><option value="Category 2">Option 2</option><option value="Category 3">Option 3</option><option value="Category 4">Option 4</option></select>
                                </div>
                              </div>
                            </div>
                          </div> -->
                        </form>
                      </div>
                      <div class="tab-pane" id="tab2">
                        <h2>
                          Personal Information
                        </h2>
                        <form role="form">
                          <div class="form-group">
                            <label for="name">Full Name</label><input class="form-control" id="name" placeholder="" type="text">
                          </div>
                          <div class="form-group">
                            <label for="country">Country</label><input class="form-control" id="country" placeholder="" type="text">
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" id="tab3">
                        <h2>
                          Payment Information
                        </h2>
                        <form role="form">
                          <div class="form-group">
                            <label for="name-credit">Name on credit card</label><input class="form-control" id="name-credit" placeholder="" type="text">
                          </div>
                          <div class="form-group">
                            <label for="credit-card">Credit card number</label><input class="form-control" id="credit-card" placeholder="" type="text">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="pager">
                    <div class="btn btn-default-outline btn-previous">
                      <i class="fa fa-long-arrow-left"></i>Back
                    </div>
                    <div class="btn btn-primary-outline btn-next">
                      Continue<i class="fa fa-long-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>


    </div>
    <!-- <div class="style-selector">
      <div class="style-selector-container">
        <h2>
          Layout Style
        </h2>
        <select name="layout"><option value="fluid">Fluid</option><option value="boxed">Boxed</option></select>
        <h2>
          Navigation Style
        </h2>
        <select name="nav"><option value="top">Top</option><option value="left">Left</option></select>
        <h2>
          Color Options
        </h2>
        <ul class="color-options clearfix">
          <li>
            <a class="blue" href="javascript:chooseStyle('none', 30)"></a>
          </li>
          <li>
            <a class="green" href="javascript:chooseStyle('green-theme', 30)"></a>
          </li>
          <li>
            <a class="orange" href="javascript:chooseStyle('orange-theme', 30)"></a>
          </li>
          <li>
            <a class="magenta" href="javascript:chooseStyle('magenta-theme', 30)"></a>
          </li>
          <li>
            <a class="gray" href="javascript:chooseStyle('gray-theme', 30)"></a>
          </li>
        </ul>
        <h2>
          Background Patterns
        </h2>
        <ul class="pattern-options clearfix">
          <li>
            <a class="active" href="#" id="bg-1"></a>
          </li>
          <li>
            <a href="#" id="bg-2"></a>
          </li>
          <li>
            <a href="#" id="bg-3"></a>
          </li>
          <li>
            <a href="#" id="bg-4"></a>
          </li>
          <li>
            <a href="#" id="bg-5"></a>
          </li>
        </ul>
        <div class="style-toggle closed">
          <span aria-hidden="true" class="se7en-gear"></span>
        </div>
      </div>
    </div> -->
  </body>
  <script type="text/javascript">
    $(function(){
      // $('.datepicker').datepicker();
      $('.datepicker').datepicker({language:'th-th',format:'dd/mm/yyyy'})
    });
  </script>
</html>
