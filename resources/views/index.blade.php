@extends('layout.main')
@push('title')
<title>শিবদেব চর দ্বি মুখী উচ্চ বিদ্যালয় </title>
@endpush
@section('main.section')
<div class="container">


    <div class="col-sm-12 col-12" id="mainpage">
        <div class="row">

            <div class="col-sm-9 col-12">







                <div class="col-sm-12 col-12 p-0 pb-2 cnotice">
                    <div class="row">
                        <div class="col-md-2 col-12 d-sm-block d-none">
                            <img src="{{url('images/notice.png')}}" class="img-fluid">
                        </div>

                        <div class="col-md-10 col-11 pt-3 p-4">
                            <strong class="text-success">নোটিশ বোর্ড</strong><br>

                            <div class="mt-3">


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">New No</a></li>


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">holeday</a></li>


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">YasinAl</a></li>


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">এসএসসি&#039;২৪ নির্বাচনী পরীক্ষা সংক্রান্ত</a></li>


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">নির্বাচনী পরীক্ষার নোটিশ</a></li>


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">বার্ষিক পরীক্ষার ফলাফল প্রকাশ</a></li>


                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="#">ইউনিক আইডি</a></li>


                            </div>

                            <div class="mt-4">
                                <a href="{{url('webpages/Notices')}}" class="float-right all">সকল নোটিশ</a>
                            </div>


                        </div>
                    </div>

                </div>
                <!-------------End Notice---------->




                <div class="col-md-12 col-12 p-0 mt-3 about">
                    <ul class="list-group p-0">
                        <li class="list-group-item" id="header">প্রতিষ্ঠান সম্পর্কে</li>
                        <div class="details2 p-2 border">
                            <title>Page Title</title>



                            <p style="font-family: SolaimanLipi;">We are Very Much Intelligent School Commitee</p>
                        </div>
                        <a href="{{url('webpages/about_institute')}}" class="btn btn-success btn-sm">আরো পড়ুন...</a>

                    </ul>
                </div>




                <div class="col-sm-12 col-12 p-0">
                    <div class="row">




                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;আমাদের সম্পর্কে</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url('images/logo1.jpg')}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/about_institute')}}">প্রতিষ্ঠান সম্পর্কে</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Mission_vission')}}">লক্ষ্য ও উদ্দেশ্য</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/history')}}">ইতিহাস</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Contact_us')}}">যোগাযোগ করুন</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->





                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;প্রশাসনিক তথ্য</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url('images/2.jpg')}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">




                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/message-from-head')}}">প্রধান শিক্ষকের বাণী</a></li>
                                            <!--<li><i class="fa fa-caret-right"></i><a href="https://skillbasedit.com/demo/vice-principal-message">সহকারী প্রধান শিক্ষকের বাণী</a></li>-->
                                            <!--<li><i class="fa fa-caret-right"></i><a href="https://skillbasedit.com/demo/Founder_Message">প্রতিষ্ঠাতার বাণী</a></li>-->
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/President_Message')}}">সভাপতির বাণী</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Managing_comittee')}}">পরিচালনা পর্ষদ তথ্য</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Donars_list')}}">দাতা সদস্যদের তালিকা</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->





                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;শিক্ষক ও কর্মচারী</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url('images/3.jpg')}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Teacher_info')}}">শিক্ষকবৃন্দের তথ্য</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Staff_info')}}">কর্মচারীদের তথ্য</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Ex_member_list')}}" target="blank">প্রাক্তন সদস্যদের তথ্য</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->



                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;একাডেমিক তথ্য</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url('images/4.jpg')}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Notices')}}">নোটিশ সমূহ</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Events')}}">ইভেন্টস</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Library_Info')}}">পাঠাগার তথ্য</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Hostel_Info')}}">ছাত্রাবাস তথ্য</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->





                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;পরীক্ষার তথ্য</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url('images/5.jpg')}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Exam_rules')}}">পরীক্ষার নিয়মাবলী</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Exam_routine')}}">পরীক্ষার সময়সূচী</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Syllabas')}}">সিলেবাস</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Lesson_plan')}}">পাঠ পরিকল্পনা</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->


                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;ফলাফল</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url('images/6.jpg')}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">
                                            <li><i class="fa fa-caret-right"></i><a href="{{('webpages/showResult')}}">অভ্যন্তরীণ ফলাফল</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="https://eboardresults.com/v2/home" target="blank">পাবলিক পরীক্ষার ফলাফল</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{('/')}}">বৃত্তি পরীক্ষার ফলাফল</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->




                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;গ্যালরি</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url("images/7.jpg")}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">

                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Photo_gallery')}}">ফটো গ্যালারী</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Video_gallery')}}">ভিডিও গ্যালারী</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Magazine')}}">ম্যাগাজিন</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->





                        <div class="col-sm-6 col-12 ">
                            <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000">
                                <p class="session">&nbsp;&nbsp;অন্যান্য</p>
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="{{url('images/3.jpg')}}" class="img-fluid" id="iconss">
                                    </div>

                                    <div class="col-sm-9 col-9 p-0">
                                        <ul class="menus">
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Events')}}">ইভেন্টস</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Sports')}}">ক্রীড়া কার্যক্রম</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Cultural_Activities')}}">সাংস্কৃতিক কার্যক্রম</a></li>
                                            <li><i class="fa fa-caret-right"></i><a href="{{url('webpages/Scouts')}}">স্কাউটস</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------------------------End Card----------------------->








                    </div>
                </div>
                <div>


                    <div style="margin-top: 20px;">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/gxDjLQj4xkg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </div>




            </div>
            <!-------------End Mainpage----------->





           
<div class="col-sm-3 col-12">
    <div class="col-sm-12 col-12 p-0">
    <ul class="list-group">
    <li class="list-group-item" id="featureheads">সভাপতির বাণী</li>
</ul>
<li class="list-group-item p-0 pt-2" id="padd">
    <a href="{{url('/webpages/President_Message')}}"><center><img src="{{url('/images/1741209244067584.jpg')}}" class="img-fluid" style="max-height: 200px;padding-bottom:5px;"></center></a>
    <center><span class="head">মোঃ শামসুল হক<br><a href="{{url('/webpages/President_Message')}}" class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
</li>
</div>
<div class="col-sm-12 col-12 p-0" style="margin-top:10px;">
    <ul class="list-group">
    <li class="list-group-item" id="featureheads">প্রধান শিক্ষকের বাণী</li>
</ul>
<li class="list-group-item p-0 pt-2" id="padd">
    <a href="{{url('/webpages/message-from-head')}}"><center><img src="{{url('/images/6511b91624acf.gif')}}" class="img-fluid" style="max-height: 200px;padding-bottom:5px;"></center></a>
    <center><span class="head">আবু বকর সিদ্দিক<br><a href="{{url('/webpages/message-from-head')}}" class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
</li>
</div>
<div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
    <ul class="list-group">
    <li class="list-group-item" id="featureheads">গুরুত্বপূর্ণ লিংক</li>
    </ul>
    <div class="feature">
        <a href="{{url('/pages/login')}}" target="_blank"><li style='font-size:12px;'><span uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;Test</li></a>
        <a href="{{url('/pages/login')}}" target="_blank"><li style='font-size:12px;'><span uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;New Link</li></a>
        <a href="dsmoi.gov.bd" target="_blank"><li style='font-size:12px;'><span uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;dsm.com</li></a>
</div>
</div>
<div class="col-sm-12 col-12 p-0 mt-2">
    <ul class="list-group">
    <li class="list-group-item" id="featureheads"> গুগল ম্যাপ </li>
    </ul> 
    <li class="list-group-item p-0 pt-2" id="padd" style="overflow: hidden">
    <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1093.1045997695203!2d91.38646537546839!3d22.848701614936264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753451f0b8e519f%3A0x3a7c5be17f194cb4!2sAl%20Helal%20Academy%2C%20Sonagazi%20-%20Olamabazar%20-%20Chardarbeshpur%20-%20Companiganj%20Rd%2C%20Sonagazi%20Municipality!5e0!3m2!1sen!2sbd!4v1660653244311!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        <br></center>
</li>
</div>
<div class="col-sm-12 col-12 p-0 mt-2">
    <ul class="list-group">
    <li class="list-group-item" id="featureheads">অফিসিয়াল ফ্যান পেইজ</li>
    <li class="list-group-item p-0 pt-2" id="padd">
    <center>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Falhelalacademy.edu.bd&tabs=timeline&width=250&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=338704303143050" width="250" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </li>
</ul> 
</div>
<div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
    <ul class="list-group">
    <li class="list-group-item" id="featurehead">জাতীয় সংগীত</li>
    <iframe width="100%" height="150" src="https://www.youtube.com/embed/SjefET6W3q4?start=13" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </ul>
    </div>
</div>
</div> 
</div>
</div><!-------End Container------------->
<div class="col-12  d-lg-none d-xl-none d-md-none btn btn-success "  >
        <a href="#"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী ও  বঙ্গবন্ধু কর্ণার   </a>
</div>
@endsection