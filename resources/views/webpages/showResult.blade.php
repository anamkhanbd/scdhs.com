<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Al Helal Academy</title>
    <link rel="shortcut icon" href="{{url('images/logo1.jpg')}}" />
    <script type="text/javascript" src="{{url('js/jquery-1.9.0.min.js')}}"></script>

    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<style>
    #main {

        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.4) 100%), url(admin/all_image/hqdefault.jpg);
        border-radius: 5px;


    }
</style>

<script>
    $(document).ready(function() {
        var checking_html = '<img src="search_group/loading.gif" /> Checking...';
        $('#className').change(function() {
            $('#item_result').html(checking_html);
            check_availability();
            Check_exam_type();
        });

    });

    //function to check username availability   
    function check_availability() {
        var class_name = $('#className').val();
        $.post("admin/check_grou_name.php", {
                className: class_name
            },
            function(result) {
                //if the result is 1
                if (result != 0) {
                    //show that the username is available
                    $('#groupname').html(result);
                    $('#item_result').html("");
                    $('#category_result').html('');
                } else {
                    //show that the username is NOT available
                    document.getElementById('category_result').style.color = 'RED';
                    $('#category_result').html('No Group Name Found');
                    $('#item_result').html("");
                    $('#groupname').html('');
                }

                $('#subject_type').html("");
                $('#sub_name').html("");
                $('#part_name').html('');
                $('#subjectcode').val('');

            });

    }
    //function to check exam type availability  
    function Check_exam_type() {
        var class_name = $('#className').val();
        $.post("admin/Check_exam_type.php", {
                className: class_name
            },
            function(result) {
                //if the result is 1
                if (result != 0) {
                    //show that the username is available
                    $('#examtype').html(result);
                    $('#checkingGroup').html("");
                    $('#category_result').html('');
                } else {
                    //show that the username is NOT available
                    $('#checkingGroup').html('No Exam  Name Found');
                    $('#item_result').html("");
                    $('#examtype').html('');
                }

            });

    }

    function showFunction() {
        var aa = parseInt($("#a").val());
        //alert(aa);
        var bb = parseInt($("#b").val());
        //alert(bb);
        var sum = parseInt(aa + bb);
        var className = $('#className').val();
        var ExamName = $('#examtype').val();
        var Year = $('#year').val();
        var RollNo = $('#Roll').val();
        if (className == "Select One") {
            alert('Please Select Class Name..');
            return false;
        }
        if (ExamName == null) {
            alert('Please Select Exam Name..');
            return false;
        }

        if (RollNo == "") {
            alert('Please Select Roll No..');
            return false;
        }

        if (Year == "Select One...") {
            alert('Please Select Year..');
            return false;
        }
        var id = "ee";
        var TextField = $("#obtaintext").val();
        var showLoadImg = '<img src="js/gificon/ajax-loader.gif" /> Loading...';
        if (TextField != null) {
            if (sum == TextField) {
                $('#AddMarksStep1').hide();
                $('#AddMarksStep2').show();
                $.ajax({
                    url: "SHOWAllResult.php",
                    type: "POST",
                    data: {
                        className: className,
                        ExamName: ExamName,
                        Year: Year,
                        RollNo: RollNo
                    },
                    cache: false,
                    success: function(data) {
                        //alert(data);
                        $('#AddMarksStep2').html(data);
                        $('#showMassage').html(showLoadImg);

                    }

                });
            } else {
                $('#showMassage').html("<spna class='text-danger'><strong>Do Not Match... </strong></span>");
                return false;
            }
        }
    }

    function ShowBack() {
        location.reload();
        $('#className').val("");
        $('#examtype').val("");
        $('#year').val("");
        $('#Roll').val("");
        $('#obtaintext').val("");
        $('#showMassage').html("");
    }
</script>

<body>
    <form action="" method="post" name="showresult">
        <div class="container-fluid jumbotron" style="margin-top:0px;">

            <div class="col-lg-7 col-sm-12 col-lg-offset-2 jumbotron"
                style="border:3px #FFFFFF solid; background:#FFFFFF" id="AddMarksStep1">
                <div class="col-lg-12" id="main">
                    <div class="col-lg-2" style="margin-top:7px;"><img src="{{url('images/alhelal-logo.png')}}"
                            style="height:80px;50px; margin-bottom:5px;" class="img-rounded" /></div>
                    <div class="col-lg-10 col-sm-10 col-md-10 col-xs-12">


                        <table style="width:100%">
                            <tr>
                                <td><span class="text-justify"
                                        style="font-size:20px; color:#FFFFFF; border-bottom:2px  #FFFFFF solid; display:block"><strong>

                                            Al Helal Academy
                                        </strong>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><span class="text-justify" style="font-size:16px; color:#FFFFFF;"><strong>

                                            Main Road, Sonagazi, Feni.
                                            <br>
                                            Internal Results



                                        </strong>
                                    </span></td>
                            </tr>
                            <tr>
                                <td align="right"><br /><span class="text-justify">
                                    </span><br /></td>
                            </tr>
                        </table>

                    </div>
                </div>

                <div col-lg-12>
                    <div class="col-lg-10 col-md-10  col-lg-offset-1" style="margin-top:20px;">
                        <div style="border:1px #000000 solid">
                            <table class="table-responsive" border="0">
                                <tr>
                                    <td width="168">&nbsp;<strong>Select Class </strong></td>
                                    <td width="30">&nbsp;<strong>:</strong></td>
                                    <td width="276">
                                        <select class="form-control" style=" margin-top:5px;" name="className"
                                            id="className">
                                            <option>Select One</option>
                                            <option value="311609100003andSix Boys">Six Boys</option><span
                                                id="item_result"></span>
                                            <option value="311609110004andSeven Boys">Seven Boys</option><span
                                                id="item_result"></span>
                                            <option value="311609230005andEight Boys">Eight Boys</option><span
                                                id="item_result"></span>
                                            <option value="311609230006andNine Boys">Nine Boys</option><span
                                                id="item_result"></span>
                                            <option value="311609230007andTen Boys">Ten Boys</option><span
                                                id="item_result"></span>
                                            <option value="312101010008andSSC ">SSC </option><span
                                                id="item_result"></span>
                                            <option value="312301060009andSix Girls">Six Girls</option><span
                                                id="item_result"></span>
                                            <option value="312301060010andSeven Girls">Seven Girls</option><span
                                                id="item_result"></span>
                                            <option value="312301060011andEight Girls">Eight Girls</option><span
                                                id="item_result"></span>
                                            <option value="312301060012andNine Girls">Nine Girls</option><span
                                                id="item_result"></span>
                                            <option value="312301060013andTen Girls ">Ten Girls </option><span
                                                id="item_result"></span>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="168">&nbsp;<strong>Examination</strong></td>
                                    <td width="30">&nbsp;<strong>:</strong></td>
                                    <td width="276">

                                        <select class="form-control" name="examtype" id="examtype"
                                            style="margin-top:5px;"> </select>


                                    </td>
                                </tr>


                                <tr>
                                    <td width="168">&nbsp;<strong>Year </strong></td>
                                    <td width="30">&nbsp;<strong>:</strong></td>
                                    <td width="276">
                                        <select class="form-control" style=" margin-top:5px;" id="year">

                                            <option>Select One...</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="168">&nbsp;<strong>Roll No </strong></td>
                                    <td width="30">&nbsp;<strong>:</strong></td>
                                    <td width="276">
                                        <input type="text" class="form-control" style="margin-top:5px" id="Roll"
                                            placeholder="Your Roll.." />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="168">&nbsp;<strong>5+8 </strong>
                                        <input type="hidden" name="a" id="a" value="5" />
                                        <input type="hidden" name="b" id="b" value="8" />
                                    </td>
                                    <td width="30">&nbsp;<strong>:</strong></td>
                                    <td width="276">
                                        <input type="text" id="obtaintext" autocomplete="off"
                                            class="form-control" style="margin-top:5px" name="chekt" />
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="3" width="276" align="right">
                                        <span id="showMassage"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="168" height="58">&nbsp;<strong></strong></td>
                                    <td width="30">&nbsp;<strong></strong></td>
                                    <td width="276" align="right">
                                        <input type="button" name="submit" value="Submit" style="width:80px;"
                                            class="btn btn-danger btn-sm" onclick="return showFunction()" />
                                        <input type="button" name="Reset" value="Reset"
                                            onclick="return ShowBack()" style="width:80px;"
                                            class="btn btn-danger btn-sm" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" style="border-top:5px #006600 solid; margin-top:10px;"> </div>
                <div class="col-lg-12"
                    style="margin-top:1px; background:#E7E7E4; height:85px; border-radius:0px 0px 5px 5px">

                    <table class="table-responsive" border="0">
                        <tr>
                            <td width="998" height="92"><span style="font-size:14px; color:#8C8C8C">2015-2016
                                    SBIT, All rights reserved.</span></td>
                            <td width="181"><span style="font-size:14px; color:#8C8C8C"> Powered by</span></td>
                            <td width="163"><img src="{{url("images/alhelal-logo.png")}}" class="img-rounded"
                                    style="height:50px; width:130px;" /></td>
                        </tr>

                    </table>
                </div>


            </div>
            <div id="AddMarksStep2">

            </div>
        </div>

    </form>

    <script src="{{url('js/bootstrap.min.js')}}"></script>
</body>

</html>
