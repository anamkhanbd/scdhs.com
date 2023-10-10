@extends('layout.main')
@push('title')
    <title>Online Class Rutine</title>
@endpush
@section('main.section')
    <div class="container">
        <div class="col-sm-12 col-12" id="mainpage">


            <div class="col-sm-12 col-12 p-0" data-aos="fade-in" data-aos-duration="2000">
                <ul class="list-group p-0">
                    <li class="list-group-item font-weight-bold bg-success text-light" id="about">অনলাইন ক্লাস রুটিন</li>
                    <li class="list-group-item">

                        <div class="table table-responsive">
                            <table id="example" class="display table-bordered" style="width:100%">
                                <thead>
                                    <tr style="font-size: 15px;">
                                        <th>SL.</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>






                                    <tr style="font-size: 12px;">
                                        <td>1</td>
                                        <td><a href="https://skillbasedit.com/demo/public/otherimage/110822_09_04_29.jpg"
                                                style="text-decoration: none;color: black">Online Class Routine</a></td>
                                        <td><a href="https://skillbasedit.com/demo/public/otherimage/110822_09_04_29.jpg"
                                                style="text-decoration: none;color: black">2022-08-03</a></td>
                                        <td>
                                            <a href="https://skillbasedit.com/demo/public/otherimage/110822_09_04_29.jpg"
                                                class="btn btn-sm btn-danger">
                                                <img src="https://skillbasedit.com/demo/public/frontend/img/pdf_icon.png"
                                                    class="img-fluid"></a>
                                        </td>
                                    </tr>





                                    <tr style="font-size: 12px;">
                                        <td>2</td>
                                        <td><a href="{{ url('images/110822_09_39_28.jpg') }}"
                                                style="text-decoration: none;color: black">Online Class Routine</a></td>
                                        <td><a href="{{ url('images/110822_09_39_28.jpg') }}"
                                                style="text-decoration: none;color: black">2022-08-06</a></td>
                                        <td>
                                            <a href="{{ url('images/110822_09_39_28.jpg') }}" class="btn btn-sm btn-danger">
                                                <img src="{{ url('images/pdf_icon.png') }}" class="img-fluid"></a>
                                        </td>
                                    </tr>





                            </table>

                        </div>

                    </li>

                </ul>
            </div>
        </div>





    </div>
    </div>










    <div class="col-12  d-lg-none d-xl-none d-md-none btn btn-success ">
        <a href="#"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী ও বঙ্গবন্ধু কর্ণার </a>
    </div>
@endsection
