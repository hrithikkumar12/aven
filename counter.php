<style media="screen">
.container {
  margin-top: 100px
}

.counter-box {
  display: block;
  background: #f6f6f6;
  padding: 40px 20px 37px;
  text-align: center
}

.counter-box p {
  margin: 5px 0 0;
  padding: 0;
  color: #909090;
  font-size: 18px;
  font-weight: 500
}

.counter-box i {
  font-size: 60px;
  margin: 0 0 15px;
  color: #d2d2d2
}

.counter {
  display: block;
  font-size: 32px;
  font-weight: 700;
  color: #666;
  line-height: 28px
}

.counter-box.colored {
  background: #3acf87
}

.counter-box.colored p,
.counter-box.colored i,
.counter-box.colored .counter {
  color: #fff
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

</script>





<div class="" style="background-image:url('img/ana1.jpg')">
    <div class="row">
        <div class="four col-md-3">
            <div class="counter-box colored"> <i class="fa fa-thumbs-o-up"></i> <span class="counter">2147</span>
                <p>Happy Customers</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box"> <i class="fa fa-group"></i> <span class="counter">3275</span>
                <p>Registered Members</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box"> <i class="fa fa-shopping-cart"></i> <span class="counter">289</span>
                <p>Available Products</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box"> <i class="fa fa-user"></i> <span class="counter">1563</span>
                <p>Saved Trees</p>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
</script>
