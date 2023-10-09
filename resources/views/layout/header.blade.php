<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @stack('title')
    <link rel="icon" href="{{url('images/alhelal-logo.png')}}" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{url('/css/fontawesome.mini.css')}}">
    <link href="{{url('/css/fonts.google.css')}}" rel="stylesheet">
    <link href="{{url('/css/font.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('/css/uikit.mini.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.mini.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
    <link href="{{url('/css/b4-navbar.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/css/jquary-table.css')}}">

    <link href="{{url('/css/jquaryscripttop.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/css/seliderResponcive.css')}}" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="{{url('/js/jquary-3.3.1-mini.js')}}"></script>
    <script src="{{url('/js/jquary.mini.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/main.js')}}"></script>

</head>
<style>
    .navbar-light .navbar-nav .nav-link {
        padding: 12px 7px;
    }

    p#est {
        font-size: 15px;
    }

    @media screen and (max-width: 968px) {
        p#est {
            text-align: left;
            /* left: 10px; */
            padding-left: 68px !important;
            font-size: 11px;
            margin-top: -18px !important;
        }
    }
</style>



<body>
    <div class="container">
        <div class="col-sm-12 col-12 bg-white pt-2">
            <div class="col-sm-12 col-12 topheader">
                <div class="row align-items-center">
                    <div class="col-sm-3 col-12 text-sm-left text-center pt-2   d-none d-sm-block">

                        {{--chnage 01--}}
                        <label><a href="https://skillbasedit.com/demo/time_line" class="surborno" target="blank"> সুবর্ণ
                                জয়ন্তী ও বঙ্গবন্ধু কর্ণার </a></label>
                    </div>
                    <div class="col-sm-9 col-12 text-sm-right text-center">


                        <!--Not Copy-->

                        <li><a href="{{url('/pages/downloadFiles')}}" target="_blank">ডাউনলোড ফাইল</a></li>
                        <li><a href="{{url('/pages/admission-form')}}" target="_blank">ভর্তি</a></li>
                        <li><a href="{{url('/pages/showResult')}}" target="_blank">ফলাফল</a></li>
                        <li><a href="{{url('/pages/login')}}" target="_blank">ছাত্র ছাত্রী লগইন</a></li>
                        <li><a href="{{url('/pages/adminLogin')}}" target="_blank">ওয়েবসাইট ড্যাশবোর্ড</a></li>
                        <li><a href="{{url('/pages/adminpanel')}}" target="_blank">সফটওয়্যার ড্যাশবোর্ড</a></li>


                    </div>
                </div>
            </div>
            <!-------Top Header End------->




            <div class="col-sm-12 col-12 p-0">
                <div class="slider" id="slider1">
                    <div
                        style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{url('/images/image.jpg')}}'); background-position: center; background-size: cover;">
                    </div>

                    <div
                        style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{url('/images/image02.jpeg')}}'); background-position: center; background-size: cover;">
                    </div>


                    <span class="titleBar">
                        <a href="{{url('/')}}" style="color:yellow; font-size:18px;"><img
                                src="{{url('/images/alhelal-logo.png')}}"
                                class="img-fluid rounded"> শিবদেব চর দ্বি মুখী উচ্চ বিদ্যালয় </a>
                    </span>
                </div>


                <div id="carouselExampleIndicators" class="carousel slide d-block d-sm-none" data-ride="carousel">
                    <div class="carousel-inner">


                        <div class="carousel-item active">
                            <img src="{{url('/images/image.jpg')}}" class="d-block w-100">
                        </div>




                        <div class="carousel-item">
                            <img src="{{url('/images/image02.jpeg')}}" class="d-block w-100">
                        </div>



                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                <!-----End Mobile Slider------>


            </div>
            <!-------End Slider----->



            <nav class="navbar navbar-expand-lg navbar-light btco-hover-menu menubar"
                style="background: #fff; border-bottom: 1px solid #e5e5e5; padding: 0px; box-shadow: 0 1px 5px -2px #999;">


                <a class="navbar-brand d-sm-none d-block" style="color: #000; font-weight: bold;"
                    href="{{url('/')}}">Menu</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                    style="background-color: #f4f4f4; color: #fff; padding: 5px 10px;">
                    <span class="navbar-toggler-icon" style="color: #fff;"></span>
                </button>



                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"
                                    style="font-size: 15px;"></i></a>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                প্রতিষ্ঠান পরিচিতি
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink"
                                style="min-width: 400px; ">

                                <div class="col-md-12 col-12 dmenu mt-3">
                                    <div class="row">
                                        <div class="col-md-6">
{{--ssssssssssssssssss--}}

                                            <li><a href="{{url('/webpages/about_institute')}}">প্রতিষ্ঠান সম্পর্কে</a></li>


                                            {{--starding here --}}
                                            <li><a href="https://skillbasedit.com/demo/Mission_vission">লক্ষ্য এবং
                                                    উদ্দেশ্য</a></li>
                                            <li><a href="https://skillbasedit.com/demo/History">ইতিহাস</a></li>
                                            <li><a href="https://skillbasedit.com/demo/Citizen_charter">সিটিজেন
                                                    চার্টার</a></li>
                                            <li><a href="https://skillbasedit.com/demo/teaching_permission">পাঠদানের
                                                    অনুমতি ও স্বীকৃতি </a></li>
                                            <li><a href="https://skillbasedit.com/demo/mpo_info">এমপিও/জাতীয়করণ তথ্য
                                                </a></li>

                                        </div>

                                        <div class="col-md-6">

                                            <li><a href="https://skillbasedit.com/demo/Infrastructure">ভৌত অবকাঠামো</a>
                                            </li>
                                            <li><a href="https://skillbasedit.com/demo/Yearly_working_plan">বার্ষিক
                                                    কর্ম পরিকল্পনা</a></li>
                                            <li><a href="https://skillbasedit.com/demo/head_intro">প্রধান শিক্ষক
                                                    পরিচিতি</a></li>
                                            <li><a href="https://skillbasedit.com/demo/Contact_us">যোগাযোগের ঠিকানা</a>
                                            </li>
                                            <!--<li><a href="https://skillbasedit.com/demo/Teacher_info">শিক্ষকবৃন্দের তথ্য</a></li>-->
                                            <!--<li><a href="https://skillbasedit.com/demo/vice_principal_intro">সহকারি প্রধান শিক্ষক পরিচিতি</a></li>-->
                                        </div>

                                        <!-- <div class="col-md-4">-->


                                        <!--     <li><a href="https://skillbasedit.com/demo/Staff_info">কর্মচারীদের তথ্য</a></li> -->
                                        <!--    <li><a href="https://skillbasedit.com/demo/Student_info_chart">ছাত্র-ছাত্রী তথ্য </a></li>-->

                                        <!--</div>-->

                                    </div>


                                </div>
                            </ul>
                        </li>





                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                প্রশাসনিক তথ্য
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

                                <div class="col-md-12 col-12 dmenu mt-3">
                                    <li><a href="https://skillbasedit.com/demo/President_Message">সভাপতির বাণী</a></li>
                                    <li><a href="https://skillbasedit.com/demo/message-from-head">প্রধান শিক্ষকের
                                            বাণী</a></li>
                                    <!--<li><a href="https://skillbasedit.com/demo/vice-principal-message">সহকারি প্রধান শিক্ষকের বাণী</a></li>-->

                                    <!--<li><a href="https://skillbasedit.com/demo/Founder_Message">প্রতিষ্ঠাতার বাণী</a></li>-->

                                    <li><a href="https://skillbasedit.com/demo/Managing_comittee">ব্যবস্থাপনা কমিটির
                                            তথ্য</a></li>

                                    <li><a href="https://skillbasedit.com/demo/Chairman_list">সভাপতির তালিকা</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Principle_list">প্রধান শিক্ষকদের
                                            তালিকা</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Donars_list">দাতা সদস্যদের তালিকা</a>
                                    </li>
                                    <li><a href="https://skillbasedit.com/demo/Ex_member_list">প্রাক্তন সদস্যদের
                                            তালিকা</a></li>
                                </div>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                শিক্ষক এবং কর্মচারী
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

                                <div class="col-md-12 col-12 dmenu mt-3">
                                    <li><a href="https://skillbasedit.com/demo/Teacher_info">শিক্ষকবৃন্দের তথ্য</a>
                                    </li>

                                    <li><a href="https://skillbasedit.com/demo/Staff_info">কর্মচারীদের তথ্য</a></li>

                                </div>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                শিক্ষার্থীর তথ্য
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

                                <div class="col-md-12 col-12 dmenu mt-3">

                                    <li><a href="class_gender_based_education">শ্রেণী ও লিংগ ভিত্তিক শিক্ষার্থী তথ্য
                                        </a></li>
                                    <li><a href="cate_wise_approved_branch_info">শ্রেণীভিত্তিক অনুমোদিত শাখার তথ্য </a>
                                    </li>
                                    <li><a href="student_attendance">শিক্ষার্থী উপস্থিতি তথ্য </a></li>
                                    <li><a href="six_class_student_info">৬ষ্ঠ শ্রেণী শিক্ষার্থী তথ্য</a></li>
                                    <li><a href="seven_class_student_info">৭ম শ্রেণী শিক্ষার্থী তথ্য</a></li>
                                    <li><a href="eight_class_student_info">৮ম শ্রেণী শিক্ষার্থী তথ্য</a></li>
                                    <li><a href="nine_class_student_info">৯ম শ্রেণী শিক্ষার্থী তথ্য</a></li>
                                    <li><a href="ten_class_student_info">১০ম শ্রেণী শিক্ষার্থী তথ্য</a></li>

                                </div>
                            </ul>
                        </li>

                        <!--<li><a href="https://skillbasedit.com/demo/Ex_Teacher_info">Ex-Teacher Info.</a></li>-->
                        <!--<li><a href="https://skillbasedit.com/demo/Ex_Staff_info">Ex-Staff Info.</a></li>-->
                        <!--<li><a href="https://skillbasedit.com/demo/Guidline_teacher_staff">Guidline for Teacher/Staff</a></li>-->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                একাডেমিক তথ্য
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

                                <div class="col-md-12 col-12 dmenu mt-3">

                                    <li><a href="https://skillbasedit.com/demo/Holiday_list">ছুটির তালিকা</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Academic_Calender">একাডেমিক
                                            ক্যালেন্ডার</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Class_routine">ক্লাস রুটিন</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Syllabas">পাঠ্যসূচী</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Rules_regulation">আচরণ বিধি</a></a>
                                    </li>

                                    <li><a href="https://skillbasedit.com/demo/Uniform">ইউনিফর্ম</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Fees">ফি সমূহ</a></li>
                                    <!--<li><a href="https://skillbasedit.com/demo/Book_list">সিলেবাস </a></li>-->
                                    <li><a href="https://skillbasedit.com/demo/Online_Classroutine">দৈনিক ডায়েরি</a>
                                    </li>

                                </div>
                            </ul>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                সহপাঠ্যক্রম
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink"
                                style="min-width: 500px;  max-width:100%;">


                                <div class="col-md-12 col-12 dmenu mt-3">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <!--<li><a  href="https://skillbasedit.com/demo/Events">ইভেন্টস</a></li>-->
                                            <li><a href="https://skillbasedit.com/demo/Sports">ক্রীড়া কার্যক্রম</a>
                                            </li>
                                            <li><a href="https://skillbasedit.com/demo/Cultural_Activities">সাংস্কৃতিক
                                                    কার্যক্রম</a></li>
                                            <li><a href="https://skillbasedit.com/demo/Scouts">স্কাউটস</a></li>
                                            <!--<li><a  href="https://skillbasedit.com/demo/Girls_Guide">গার্লস গাইড</a></li>-->
                                            <!--<li><a  href="https://skillbasedit.com/demo/BNCC">বিএনসিসি</a></li>-->
                                            <li><a href="https://skillbasedit.com/demo/Red_Crescent">রেড ক্রিসেন্ট</a>
                                            </li>
                                            <li><a href="https://skillbasedit.com/demo/Study_Tour">শিক্ষা সফর</a></li>
                                        </div>
                                        <div class="col-md-6">
                                            <li><a href="https://skillbasedit.com/demo/Student_Cafinet">স্টুডেন্ট
                                                    ক্যাবিনেট</a></li>
                                            <li><a href="https://skillbasedit.com/demo/Debate">ডিবেটিং ক্লাব</a></li>
                                            <li><a href="https://skillbasedit.com/demo/Language_Club">ল্যাঙ্গুয়েজ
                                                    ক্লাব</a></li>

                                            <li><a href="https://skillbasedit.com/demo/Science_Fair">বিজ্ঞান মেলা</a>
                                            </li>
                                            <!--<li><a  href="https://skillbasedit.com/demo/Computer_Club">কম্পিউটার ক্লাব</a></li>-->

                                        </div>


                                    </div>
                            </ul>
                        </li>





                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ভর্তি সংক্রান্ত তথ্য
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

                                <div class="col-md-12 col-12 dmenu mt-3">
                                    <li><a href="https://skillbasedit.com/demo/Prospects">প্রসপেক্টাস</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Admission_Rules">ভর্তির নিয়মাবলী</a>
                                    </li>
                                    <li><a href="https://skillbasedit.com/demo/Admission_Question">ভর্তি পরীক্ষার
                                            সিলেবাস</a></li>
                                    <!--<li><a href="https://skillbasedit.com/demo/Admission_Procedure">ভর্তির পদ্ধতি</a></li>-->
                                    <li><a href="https://skillbasedit.com/demo/Admission_Result">ভর্তির ফলাফল</a></li>

                                    <!--<li><a href="https://skillbasedit.com/demo/Transfer_Procedure">ট্রান্সফার পদ্ধতি</a></li>-->
                                </div>
                            </ul>
                        </li>













                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                পরীক্ষা সংক্রান্ত তথ্য
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

                                <div class="col-md-12 col-12 dmenu mt-3">
                                    <li><a href="https://skillbasedit.com/demo/Exam_rules">পরীক্ষার নিয়মাবলী</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Exam_routine">পরীক্ষা ও ফলাফলের
                                            সময়সূচী</a></li>

                                    <!--<li><a href="https://skillbasedit.com/demo/Lesson_plan">পাঠ পরিকল্পনা</a></li>-->
                                    <li><a href="https://skillbasedit.com/demo/Suggestion">সাজেশন্স</a></li>
                                </div>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ফলাফল
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

                                <div class="col-md-12 col-12 dmenu mt-3">
                                    <li><a href="https://high.alhelalacademy.edu.bd/showResult.php"
                                            target="blank">অভ্যন্তরীণ ফলাফল</a></li>
                                    <li><a href="https://eboardresults.com/v2/home" target="blank">পাবলিক পরীক্ষার
                                            ফলাফল</a></li>
                                    <li><a href="#">বৃত্তি পরীক্ষার ফলাফল </a></li>
                                </div>
                            </ul>
                        </li>





                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                গ্যালারী
                            </a>
                            <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink"
                                style="min-width:180px;">
                                <div class="col-md-12 col-12 dmenu mt-3">
                                    <li><a href="https://skillbasedit.com/demo/Photo_gallery">ফটো গ্যালারী</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Video_gallery">ভিডিও গ্যালারী</a></li>
                                    <li><a href="https://skillbasedit.com/demo/Magazine">ম্যাগাজিন</a></li>
                                </div>
                            </ul>
                        </li>

                        <!-- <li class="nav-item">
    <a class="nav-link" href="https://skillbasedit.com/demo/complain_box">অভিযোগ বাক্স</a>
</li> -->


                    </ul>

                </div>
            </nav>





        </div>
    </div>
