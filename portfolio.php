<style media="screen">
  section{
    padding:20px;
    width:1200px;
    margin:40px auto;
  }
  section ul{
    display: flex;
    margin-bottom: 10px;
  }
  section ul li{
    list-style: none;
    background: #eee;
    padding: 8px 20px;
    margin: 5px;
    letter-spacing: 1px;
    cursor: pointer;
  }
  section ul li.active{
    background: #03a9f4;
    color: #fff;
  }
  .product{
    display: flex;
    flex-wrap: wrap;
  }
  .product .itemBox{
    position: relative;
    width: 280px;
    height: 300px;
    margin: 5px;
  }
  .product .itemBox img{
    position: absolute;
    top: 0;
    left: 0;
    width: 80%;
    height: 80%;
    object-fit: cover;
  }
</style>
<div style="">

  <div style="text-align:center">
    <p> <b style="color:#03a9f4">Aven</b>'s Portfolio </p>
    <p style="text-align:center">Cards support a wide variety of content, including images, text, list groups, links, and more. Below are examples of what’s supported.</p>
  </div>
<section>
  <ul>
    <li class="list active" data-filter="All">All</li>
    <li class="list" data-filter="mobile">Mobile</li>
    <li class="list" data-filter="camera">Camera</li>
    <li class="list" data-filter="watch">watch</li>
    <li class="list" data-filter="headphone">headphone</li>
    <!-- <li class="list" data-filter="All">All</li> -->
  </ul>
  <div class="product">
    <div class="itemBox mobile"><img src="img/mobile1.png" alt=""></div>
    <div class="itemBox camera"><img src="img/camera1.jpg" alt=""></div>
    <div class="itemBox watch"><img src="img/watch1.jpg" alt=""></div>
    <div class="itemBox headphone"><img src="img/headphone1.jpg" alt=""></div>

    <div class="itemBox mobile"><img src="img/mobile2.jpg" alt=""></div>
    <div class="itemBox camera"><img src="img/camera2.jpg" alt=""></div>
    <div class="itemBox watch"><img src="img/watch2.jpg" alt=""></div>
    <div class="itemBox headphone"><img src="img/headphone2.jpg" alt=""></div>

    <div class="itemBox mobile"><img src="img/mobile3.jpg" alt=""></div>
    <div class="itemBox camera"><img src="img/camera3.jpg" alt=""></div>
    <div class="itemBox watch"><img src="img/watch3.jpg" alt=""></div>
    <div class="itemBox headphone"><img src="img/headphone3.jpg" alt=""></div>
  </div>
</section>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.list').click(function(){
        const value = $(this).attr('data-filter');
        if (value == 'all') {
          $('.itemBox').show('1000');
        }
        else{
          $('.itemBox').not('.'+value).hide('1000');
          $('.itemBox').filter('.'+value).show('1000');
        }
      })


    })
  </script>
