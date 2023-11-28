
        <div class="container">

            <div class="col-sm-12 col-12 bg-white p-0 pt-5">
                <img src="{{url('images/footerbg.png')}}" class="img-fluid w-100">
            </div>
 

            <div class="col-sm-12 col-12 developerdiv">

                <center>

                    <span class="develop">Developed by</span>&nbsp;&nbsp;<a href="https://github.com/anamkhanbd" target="blank" class="it">A H ANAM</a></center>

            </div>
            <!-----------end develop by---------->




        </div>





        <script src="js/jquery-3.3.1.silim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script type="text/javascript" src="{{url('/js/jquery.data.tables.min.js')}}"></script>

        <script src="{{url('/js/popper.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>
        <script src="{{url('/js/bootstrap-4-navbar.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/owl.carosusel.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/nivo.selider.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/uikilt.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/uikit-icon.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/exzoom.js')}}"></script>

        <script>
            AOS.init();
            var preloader = document.getElementById('load');

            function myfunctions() {
                preloader.style.display = 'none';
            }

            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>


        <script src="{{url('/js/jquary-3.2.1.min.js')}}"></script>
        <script src="{{url('/js/seliderResponcsive.js')}}"></script>




        <script>
            $(document).ready(function() {

                $("#slider1").sliderResponsive({
                    // Using default everything
                    // slidePause: 5000,
                    // fadeSpeed: 800,
                    // autoPlay: "on",
                    // showArrows: "off",
                    // hideDots: "off",
                    // hoverZoom: "on",
                    // titleBarTop: "off"
                });

                $("#slider2").sliderResponsive({
                    fadeSpeed: 300,
                    autoPlay: "off",
                    showArrows: "on",
                    hideDots: "on"
                });

                $("#slider3").sliderResponsive({
                    hoverZoom: "off",
                    hideDots: "on"
                });

            });
        </script>


        <script src="{{url('/js/jq.data.table.min.js')}}" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>



</body>

</html>