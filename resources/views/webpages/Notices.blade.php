@extends('layout.main')
@push('title')
    <title>Notice Board </title>
@endpush
@section('main.section')
    <div class="container">
        <div class="col-sm-12 col-12" id="mainpage">


            <div class="col-sm-12 col-12 p-0" data-aos="fade-in" data-aos-duration="2000">
                <ul class="list-group p-0">
                    <li class="list-group-item font-weight-bold bg-success text-light" id="about">NOTICE BOARD</li>
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
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">New No</a></td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">2023-09-25</a></td>
                                        <td>
                                        </td>
                                    </tr>





                                    <tr style="font-size: 12px;">
                                        <td>2</td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">holeday</a></td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">0199-10-12</a></td>
                                        <td>
                                        </td>
                                    </tr>





                                    <tr style="font-size: 12px;">
                                        <td>3</td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">YasinAl</a></td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">2023-09-23</a></td>
                                        <td>
                                        </td>
                                    </tr>





                                    <tr style="font-size: 12px;">
                                        <td>4</td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">এসএসসি&#039;২৪ নির্বাচনী পরীক্ষা
                                                সংক্রান্ত</a></td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">2023-08-23</a></td>
                                        <td>
                                            <a href="{{url('pdf/230823_18_24_06.pdf')}}"
                                                class="btn btn-sm btn-danger"
                                                download="এসএসসি&#039;২৪ নির্বাচনী পরীক্ষা সংক্রান্ত"><img
                                                    src="{{url('images/pdf_icon.png')}}"
                                                    class="img-fluid"></a>
                                        </td>
                                    </tr>





                                    <tr style="font-size: 12px;">
                                        <td>5</td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">নির্বাচনী পরীক্ষার নোটিশ</a></td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">2022-10-17</a></td>
                                        <td>
                                        </td>
                                    </tr>





                                    <tr style="font-size: 12px;">
                                        <td>6</td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">বার্ষিক পরীক্ষার ফলাফল প্রকাশ</a>
                                        </td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">2022-08-10</a></td>
                                        <td>
                                        </td>
                                    </tr>





                                    <tr style="font-size: 12px;">
                                        <td>7</td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">ইউনিক আইডি</a></td>
                                        <td><a href="#"
                                                style="text-decoration: none;color: black">2022-08-11</a></td>
                                        <td>
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
        <a href="#"style="color:#fff; font-size:24px;" target="blank"> সুবর্ণ জয়ন্তী
            ও বঙ্গবন্ধু কর্ণার </a>
    </div>
@endsection
