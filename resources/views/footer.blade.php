</div>
</div>

<!-- Optional JavaScript -->

<!--Itype-->
<script type="text/javascript" src="{{asset('public/js/ityped.js')}}"></script>
<script type="text/javascript">
        window.ityped.init(document.querySelector('#ityped'),{
            strings : [" Welcome to the...","CV Maker App."],
            typeSpeed:200,
            backDelay:500,
            loop : true
        })
</script>

<!--Clock-->
<script>
    function Clock(){
        var date, hour, miunte, second, ampm;
        date   = new Date();
        hour   = (date.getHours() >= 12) ? date.getHours()-12 : date.getHours();
        miunte = date.getMinutes();
        second = date.getSeconds();
        ampm   = (date.getHours() >= 12) ? " PM" : " AM";

        document.getElementById("hour").innerHTML = hour;
        document.getElementById("minute").innerHTML = miunte;
        document.getElementById("second").innerHTML = second;
        document.querySelector("#ampm").innerHTML = ampm;
    }
    setInterval(Clock, 1000);
</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>