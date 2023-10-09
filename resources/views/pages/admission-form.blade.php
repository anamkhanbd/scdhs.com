<!DOCTYPE html>





<html lang="en">

<head>
   <title>Admission Form Fee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/js.jq.1.11.1.js"></script>
    <script type="text/javascript">
        var countDownDate = new Date('').getTime();
        var x = setInterval(function() {

            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            //document.getElementById("demo").innerHTML ='<span style="color:yellow;"><h3>আবেদনের শেষ সময় : <br>'+ days + " Day " + hours + " Hour " + minutes + " Minute  " + seconds + " Second"+"</h3></span>";
            if (distance < 0) {
                clearInterval(x);

                if (count == 0) {
                    count = 1;
                    // $('#questionID').show();
                }
                $('#demo').hide();
                $('#demo5').hide();
            }
        }, 1000);



        function InsertData() {
            var name = $('#stdName').val();
            if (name == "") {
                alert("Fill up student name");
                return;
            }

            var Phone = $('#Phone').val();
            if (Phone == "") {
                alert("Fill up your phone number");
                return;
            }

            var Class = $('#Class').val();
            if (Class == "") {
                alert("Select Class Name");
                return;
            }

            var bkashno = $('#bkashno').val();
            if (bkashno == "") {
                alert("Fill up  bKash Number ");
                return;
            }

            var TrxId = $('#TrxId').val();
            if (TrxId == "") {
                alert("Fill up TrxId ");
                return;
            }

            if (TrxId.length != 10) {
                alert("Check Your TrxId !");
                return
            }

            var insertval = "insertval";

            $.ajax({
                url: "ajaxInsertTranaction.php",
                type: "POST",
                data: {
                    name: name,
                    Phone: Phone,
                    Class: Class,
                    bkashno: bkashno,
                    TrxId: TrxId,
                    insertval: insertval
                },
                cache: false,
                success: function(data) {
                    $('#successfull').html(data);
                    $('#forminfo').hide();

                    //alert(data);
                    //location.reload();


                }

            });


        }
    </script>
</head>

<body>
    <div class="jumbotron bg-primary">
        <div class="container " style="color: #fff;">

            <label class="checkbox-inline">
  <h1 style="text-shadow:  0px 3px 3px #000;">  Al Helal Academy</h1>

            
<!--  <h5>          -->
<!--    (Application Form)</h5>-->
<!--  <h5 style="color:yellow; font-weight:bold;">আগামী ০২ জানুয়ারি পর্যন্ত ভর্তি আবেদন করা যাবে।  ০৩ জানুয়ারি সকাল ১০টায় ছাত্রদের এবং ০৪ জানুয়ারি সকাল ১০টায় ছাত্রীদের সাক্ষাৎকার নেওয়া হবে।  ০৫ জানুয়ারি সকাল ১০টায় ভর্তির জন্য নির্বাচিতদের তালিকা প্রকাশ করা হবে।  ০৫ জানুয়ারি থেকে ১০ জানুয়ারি পর্যন্ত ভর্তি হওয়া যাবে। -->
<!--</h5>-->
    <h4>জরুরী প্রয়োজনে যোগাযোগ করুন : ০১৩০৯০৯২৪৩৮, ০১৮২৪০৪১৪৮৫, ০১৩০৯১০৬৭১০</h4>
    </label ><br>

    <p id="demo"></p>
    <p id="demo3"></p>

  </div>
   </div>



<div class="container" id="forminfo">

  	  <h6 style="color:#ff0000; line-height: 25px;">
    ভর্তি ফরম ফি বাবদ ১১০ টাকা 01728563480 নম্বরে বিকাশ Send Money করুন এবং Transaction ID সংরক্ষণ করুন। </h6>
  <form method="post">
    <div class="form-group">
      <label for="Name">Student's Name:</label>
            <input type="text" class="form-control" id="stdName" placeholder="Enter Name" name="Name" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="Phone">Guardian's Mobile Number</label>
            <input type="text" class="form-control" id="Phone" placeholder="Enter Phone" name="Phone" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="Class">Select Class</label>
            <select class="form-control" id="Class" name="Class">
           
                         
                       <option value="">Select One</option>
                                                   <option value="312309240016andeleven">eleven</option>
                                                        <option value="312309110015andone">one</option>
                                                        <option value="311609100003andSix Boys">Six Boys</option>
                                                        <option value="312301060009andSix Girls">Six Girls</option>
                                                        <option value="311609110004andSeven Boys">Seven Boys</option>
                                                        <option value="312301060010andSeven Girls">Seven Girls</option>
                                                        <option value="312310050017andWeb Dev">Web Dev</option>
                                                        <option value="311609230005andEight Boys">Eight Boys</option>
                                                        <option value="312301060011andEight Girls">Eight Girls</option>
                                                        <option value="311609230006andNine Boys">Nine Boys</option>
                                                        <option value="312301060012andNine Girls">Nine Girls</option>
                                                        <option value="311609230007andTen Boys">Ten Boys</option>
                                                        <option value="312301060013andTen Girls ">Ten Girls </option>
                                                        <option value="312101010008andSSC ">SSC </option>
                                                        <option value="312309110014and1">1</option>
                                  </select>
        </div>

        <div class="form-group">
            <label for="bkashno">bKash Number: (যে বিকাশ নাম্বার থেকে টাকা পাঠানো হয়েছে) </label>
            <input type="text" class="form-control" id="bkashno" placeholder="Enter bkash No." name="bkashno" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="TrxId">Transaction ID </label>
            <input type="text" class="form-control" id="TrxId" placeholder="Enter TrxId" name="TrxId" autocomplete="off">
        </div>

        <button type="button" class="btn btn-primary" id="submit" onclick="return InsertData()">Submit</button>
        </form>


    </div>
    <div class="container" id="successfull">

    </div>


</body>

</html>