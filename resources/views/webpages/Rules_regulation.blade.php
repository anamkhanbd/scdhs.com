@extends('layout.main')
@push('title')
    <title>Rules Regulations</title>
@endpush
@section('main.section')
    <div class="container">
        <div class="col-sm-12 col-12" id="mainpage">
            <div class="row">

                <div class="col-sm-9 col-12">


                    <div class="col-sm-12 col-12 p-0" data-aos="fade-in" data-aos-duration="2000">
                        <ul class="list-group p-0">
                            <li class="list-group-item font-weight-bold bg-success text-light" id="about">বিধি এবং
                                প্রবিধান</li>
                        </ul>
                        <li class="list-group-item">
                            <div style="font-size: 14px; line-height: 25px; text-align: justify;">
                                <p>1. Students are expected to come to the college in neat, clean and simple clothes. They
                                    must conform to the high standards of modesty maintained by the institutions. They
                                    should not wear gaudy dresses.
                                </p>
                                <p>2. All men students are expected to wear pants and shirts-bush shirts or slack shirts.
                                    Tshirts are not allowed. Women students are strictly not permitted to wear skirts,
                                    leggings, jeans, frocks and high tops.
                                </p>
                                <p>3. Students should not bring discredit to the college or to themselves. Insubordination
                                    and
                                    rude behavior of any kind inside or outside the college will be severely dealt with.
                                </p>
                                <p>4. Students should be regular and punctual in attending the classes and all activities
                                    connected with the college. No student is allowed to enter the classroom or leave the
                                    class room during class hours without the permission of the principal. They are not
                                    permitted to go out during lunch break.
                                </p>
                                <p>5. The students should stand up and wish the teacher when he/she enters the class. They
                                    should take their seats only after the teacher takes his/her seat or instructs the
                                    students
                                    to do so.
                                </p>
                                <p>6. They should wish all the teachers irrespective of their departments.
                                </p>
                                <p>7. Strict silence should be maintained during class hours in the Classrooms, Library,
                                    Laboratory, Examination halls and in the College premises.
                                </p>
                                <p>8. Use of books, magazines and other materials not approved by the principal will not be
                                    permitted in the college campus.
                                </p>
                                <p>9. All lost property should be brought to the college office.
                                </p>
                                <p>10. Students are expected to take care of the college property and help in keeping the
                                    premises neat and clean. Disfiguring of walls, doors or breaking the furniture is a
                                    breach of discipline and will not be tolerated.
                                </p>
                                <p>11. Students are forbidden from organizing any meeting in the college premises or
                                    collecting money for any purpose without the permission of the principal.
                                </p>
                                <p>12. Students are not permitted to entertain the visitors in the college during the
                                    working
                                    hours. They are strictly forbidden from receiving personal phone calls or letters.
                                </p>
                                <p>13. Student should not enter the office room, staff room or computer lab without
                                    permission.
                                </p>
                                <p>14. Monthly tests and model examinations are part of curriculum and student should be
                                    sincere in taking these tests. They should not indulge in any kind of malpractice during
                                    examinations or tests.
                                </p>
                                <p>15. Eve-teasing is strictly prohibited &amp; eve-teasers will be dismissed from the
                                    college.
                                    According to TamilNadu eve-teasing ordinance of 1998 whoever commits or
                                    participated or abets in eve-teasing, in or within the premises of any educational
                                    institutions, is liable for imprisonment for term which may extend to one year or shall
                                    we liable to a fine which may extend to RS.10000/- or both.<br></p>

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
                            <iframe width="100%" height="150" src="https://www.youtube.com/embed/SjefET6W3q4?start=13"
                                title="YouTube video player" frameborder="0"
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
