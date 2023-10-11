@extends('layout.main')
@push('title')
    <title>Teaching Permission</title>
@endpush
@section('main.section')
    <div class="container">
        <div class="col-sm-12 col-12" id="mainpage">
            <div class="row">

                <div class="col-sm-9 col-12">


                    <div class="col-sm-12 col-12 p-0" data-aos="fade-in" data-aos-duration="2000">
                        <ul class="list-group p-0">
                            <li class="list-group-item font-weight-bold bg-success text-light" id="about">সভাপতির বাণী
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <div style="font-size: 14px; line-height: 25px; text-align: justify;">
                                <div style="text-align:center;">
                                    <img src="{{url('images/1741209244067584.jpg')}}"
                                        class="img-fluid p-2" style=max-width:50%;>
                                </div>

                                <div class="name" style="text-align: center;margin-top:20px;font-size:20px;">
                                    <p>মোঃ শামসুল হক</p>
                                </div>

                                <p style="padding: 0px; margin-bottom: 10px;"><span style="text-align: justify;">এক বিংশ
                                        শতাব্দির চ্যালেঞ্জ মোকাবেলায় প্রথম সোপান হল শিক্ষা। সুশিক্ষা ছাড়া কোন জাতি উন্নতি
                                        লাভ করতে পারে না। শিক্ষার মাধ্যমেই তৈরি হয় সৎ, দেশপ্রেমিক ও মানবিক মূল্যবোধ সম্পন্ন
                                        সুনাগরিক। শিক্ষা ছাড়া মানুষের মধ্যে দেশপ্রেম,মানবতা ও নৈতিক মূল্যবোধের বিকাশ ঘটানো
                                        সম্ভব নয়। একবিংশ শতাব্দীর চ্যালেঞ্জ মোকাবেলা করে দেশকে আধুনিক ও ডিজিটাল বাংলাদেশ
                                        রূপে গড়ার ক্ষেত্রে যুগোপযোগী ও প্রযুক্তি নির্ভর মানসম্মত শিক্ষার কোন বিকল্প
                                        নেই।&nbsp;</span><span style="text-align: justify;">আল হেলাল একাডেমি</span><span
                                        style="text-align: justify;">&nbsp;একটি সর্বাধুনিক বিশ্বমানের শিক্ষা প্রতিষ্ঠানে
                                        পরিণত করার লক্ষ্যকে সামনে রেখে এখানে চালু করা হয়েছে সৃজনশীল শিক্ষা পদ্ধতি।</span><br
                                        style="text-align: justify;"><br style="text-align: justify;"><span
                                        style="text-align: justify;">শিক্ষার ক্ষেত্রে অনুসরণ করা হচ্ছে অংশগ্রহণমূলক পদ্ধতি।
                                        নিয়মিত বিভিন্ন ধরণের আধুনিক পদক্ষেপ গ্রহণের মাধ্যমে এ প্রতিষ্ঠানকে আন্তর্জাতিক মানে
                                        উন্নীত করার প্রচেষ্টা অব্যাহত আছে। ‘সহস্রাব্দ উন্নয়ন লক্ষ্যমাত্রা’ অর্জন এবং
                                        ‘ভিশন-২০২১’ বাস্তবায়নের লক্ষ্যে শিক্ষার্থী, অভিভাবক, শিক্ষক ও পরিচালনা পরিষদের সবাই
                                        একযোগে কাজ করে&nbsp;</span><span style="text-align: justify;">আল হেলাল
                                        একাডেমি</span><span style="text-align: justify;">&nbsp;একটি সর্বাধুনিক বিশ্বমানের
                                        শিক্ষা প্রতিষ্ঠানে পরিণত করবে বলে আমি দৃঢ়ভাবে আশাবাদী।</span><br></p>

                            </div>


                        </li>



                    </div>
                </div>

                <div class="col-sm-3 col-12">
                    <div class="col-sm-12 col-12 p-0">
                        <ul class="list-group">
                            <li class="list-group-item" id="featureheads">সভাপতির বাণী</li>
                        </ul>
                        <li class="list-group-item p-0 pt-2" id="padd">
                            <a href="{{ url('/webpages/President_Message') }}">
                                <center><img src="{{ url('/images/1741209244067584.jpg') }}" class="img-fluid"
                                        style="max-height: 200px;padding-bottom:5px;"></center>
                            </a>
                            <center><span class="head">মোঃ শামসুল হক<br><a href="{{ url('/webpages/President_Message') }}"
                                        class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
                        </li>
                    </div>
                    <div class="col-sm-12 col-12 p-0" style="margin-top:10px;">
                        <ul class="list-group">
                            <li class="list-group-item" id="featureheads">প্রধান শিক্ষকের বাণী</li>
                        </ul>
                        <li class="list-group-item p-0 pt-2" id="padd">
                            <a href="{{ url('/webpages/message-from-head') }}">
                                <center><img src="{{ url('/images/6511b91624acf.gif') }}" class="img-fluid"
                                        style="max-height: 200px;padding-bottom:5px;"></center>
                            </a>
                            <center><span class="head">আবু বকর সিদ্দিক<br><a
                                        href="{{ url('/webpages/message-from-head') }}"
                                        class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
                        </li>
                    </div>
                    <div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
                        <ul class="list-group">
                            <li class="list-group-item" id="featureheads">গুরুত্বপূর্ণ লিংক</li>
                        </ul>
                        <div class="feature">
                            <a href="{{ url('/pages/login') }}" target="_blank">
                                <li style='font-size:12px;'><span
                                        uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;Test</li>
                            </a>
                            <a href="{{ url('/pages/login') }}" target="_blank">
                                <li style='font-size:12px;'><span
                                        uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;New Link</li>
                            </a>
                            <a href="dsmoi.gov.bd" target="_blank">
                                <li style='font-size:12px;'><span
                                        uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;dsm.com</li>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-12 p-0 mt-2">
                        <ul class="list-group">
                            <li class="list-group-item" id="featureheads"> গুগল ম্যাপ </li>
                        </ul>
                        <li class="list-group-item p-0 pt-2" id="padd" style="overflow: hidden">
                            <center>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7191.681542953389!2d89.50101939643586!3d25.676572518497295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2d3bd83bafbf7%3A0xfdbf331a35340d23!2z4Ka24Ka_4Kas4Kam4KeH4Kas4Kaa4KawIOCmpuCnjeCmrOCmvy3gpq7gp4Lgppbgp4Ag4KaJ4Kaa4KeN4KaaIOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sen!2sbd!4v1697005450646!5m2!1sen!2sbd"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <br>
                            </center>
                        </li>
                    </div>
                    <div class="col-sm-12 col-12 p-0 mt-2">
                        <ul class="list-group">
                            <li class="list-group-item" id="featureheads">অফিসিয়াল ফ্যান পেইজ</li>
                            <li class="list-group-item p-0 pt-2" id="padd">
                                <center>
                                    <iframe
                                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Falhelalacademy.edu.bd&tabs=timeline&width=250&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=338704303143050"
                                        width="250" height="300" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
                        <ul class="list-group">
                            <li class="list-group-item" id="featurehead">জাতীয় সংগীত</li>
                            <iframe width="100%" height="150"
                                src="https://www.youtube.com/embed/SjefET6W3q4?start=13" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-------End Container------------->
    <div class="col-12  d-lg-none d-xl-none d-md-none btn btn-success ">
        <a href="#"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী ও বঙ্গবন্ধু কর্ণার </a>
    </div>
@endsection
