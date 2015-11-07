<html>
<head>
  <meta charset = 'utf-8'>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="/assets/animate.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: 5000
    })

    $('#myCarousel').on('slid.bs.carousel', function() {
      //alert("slid");
    });
  });


  </script>
  <style>
  body{
    background-image: url(http://coolbackgroundhd.com/wp-content/uploads/2015/04/amazing-blue-abstract-picture-widescreen-high-definition-wallpapers.jpg);
    background-size: 100% 100%;
  }

  div.container{
    max-width: 1000px;
    min-width: 400px;
    min-height: 300px;
    background-image: url(http://i.imgur.com/gAaJAl7.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
    max-width: 1000px;
    margin: 0 auto;
    height: auto;
  }

  div.container label, div.container h2, div.container h3, div.container p{
    color: gray;
  }

  /************ Top NavBar ****************/
  .header4 {
    width: 100%;
    background-image: url(http://www.poketerra.com/header.png);
  }
  h3 {
    margin-left: 20px;
    color: white;
    text-shadow: 1px 1px white;
  }
  .team, .team2{
    font-family: marker felt;
    color: #B80000;
    font-size: 45px;
    text-shadow: 1px 1px white;
  }
  .rocket{
    font-family: arial black;
    font-size: 70px;
    color: #B80000;
    text-shadow: 2px 2px navy;

  }
  .store{
    font-size: 50px;
    font-family: pokemon solid;
    color: yellow;
    display: inline-block;
    text-align: center;
    margin-left: 20px;
    text-shadow: 2px 2px navy;
  }

  .motto{
    text-align: right;
    font-size: 15px;
    color: lightblue;
  }
  #login {
    margin-left: 20px;
    font-size: 15px;
  }

  /********** Second NavBar **************  */
  .navbar {
    background-image: url(http://i40.tinypic.com/10e3pjb.jpg);
    border: 1px solid white;
    margin-top: -5px;
  }
  div.navbar img {
    /*display: block;*/
    margin-left: auto;
    margin-right: auto;
  }

  #all_inventory{
    margin-top: 15px;
    margin-left: 90px;
  }
  .sponsors{
    width: 870px;
    height: 400px;

  }
  .sponsors h1, .sponsors img{
    padding: 3px;
  }

  .sponsors img{
    margin-top: 30px;
    margin-bottom: 20px;
    display: inline-block;
  }
  /*    ----------------Carousel CSS ----------------*/
  .carousel-control {
    padding-top:30%;
    width:5%;
  }
  .row {
    max-height: 400px;
    min-height: 100px;
  }
  /*----------------END Carousel---------------*/
  /*-----------------TABS---------------------*/
  .nav.nav-justified > li > a { position: relative; }
  .nav.nav-justified > li > a:hover,
  .nav.nav-justified > li > a:focus { background-color: transparent; }
  .nav.nav-justified > li > a > .quote {
    position: relative;
    left: 0px;
    top: 0;
    opacity: 0;
    width: 30px;
    height: 30px;
    /*padding: 5px;*/
    background-color: #13c0ba;
    border-radius: 15px;
    color: #fff;
  }
  .nav.nav-justified > li.active > a > .quote { opacity: 1; }
  .nav.nav-justified > li > a > img { box-shadow: 0 0 0 5px #13c0ba; }
  .nav.nav-justified > li > a > img {
    max-width: 100%;
    opacity: .3;
    -webkit-transform: scale(.8,.8);
    transform: scale(.8,.8);
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  .nav.nav-justified > li.active > a > img,
  .nav.nav-justified > li:hover > a > img,
  .nav.nav-justified > li:focus > a > img {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  .tab-pane .tab-inner { padding: 30px 0 20px; }

  @media (min-width: 768px) {
    .nav.nav-justified > li > a > .quote {
      left: auto;
      top: auto;
      right: 20px;
      bottom: 0px;
    }
  }
  div.containertext-center
  {
    margin-bottom: 300px;
  }
  .rows {
    text-align: center;
  }
  .article {
    border: 1px solid white;
    padding: 20px;
    background-image: url(http://p1.pichost.me/i/20/1427813.jpg);
    text-align: center;
    height: 350px;
    min-width: 100px;
  }


  .containertext-center {
    width:40%;
    min-width: 300px;
    margin: 0 auto;
  }
  </style>

</head>
<body>
  <div class='container'>
    <div class='header4'>
      <h3 class='animated slideInRight welcome'>Welcome to <span class="team">Team</span><span class="rocket">R</span><span class="team2">ocket</span><span class='store'>>>Poké Store<<</span><a id='login' href="/admins">Admin Login</a></h3>
      <div class='navbar'><div class="col-md-4"></div><div class="col-md-4"><img class='animated zoomIn catchem' src="http://cdn.bulbagarden.net/upload/thumb/1/13/English_motto.png/250px-English_motto.png"></div>
      <div class="col-md-4"><form action='/products/product_page' method='post'>
        <input id='all_inventory' type='submit' class='animated shake btn-md btn-danger' value='See all Inventory'>
      </form>
    </div>
  </div>
</div>






<!-- <h1 class='feature'>Featured Pokémon</h1> -->
<div class="col-md-12">

  <div class="well">
    <div id="myCarousel" class="animated flipInY carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-lg-12"><a href="/dashboards/pokeballs"><img src="/uploads/pokeballs2.png" alt="Image" class="img-responsive"></a>
            </div>
          </div>
          <!--/row-->
        </div>
        <!--/item-->
        <div class="item">
          <div class="row">
            <div class="col-lg-12"><a href="#x"><img src="/uploads/cutepoke.jpg" alt="Image" class="img-responsive"></a>
            </div>
          </div>
          <!--/row-->
        </div>
        <!--/item-->
        <div class="item">
          <div class="row">
            <div class="col-lg-12"><a href="#x"><img src="/uploads/battle.jpg" alt="Image" class="img-responsive"></a>
            </div>
          </div>
          <!--/row-->
        </div>
        <div class="item">
          <div class="row">
            <div class="col-lg-12"><a href="#x"><img src="/uploads/rare.jpg" alt="Image" class="img-responsive"></a>
            </div>
          </div>
        </div>
        <!--/item-->
      </div>
      <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div>
    <!--/myCarousel-->
  </div>
  <!--/well-->
</div><br>
<!-- ******THREE HEADINGS******** -->
<div class="container_marketing">
  <!-- Three columns of text below the carousel -->
  <div class="rows">
    <div class="col-sm-4 col-md-4 col-lg-4">
      <div  class='animated zoomInUp article'>
        <img class="img-circle" src="/uploads/farm.jpg" alt="Generic placeholder image" width="140" height="140">
        <h3>Poke Farm</h3>
        <p>Raised in organic habitat according to type, evolved naturally</p>
        <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.col-lg-4 -->
    <div class="col-sm-4 col-md-4 col-lg-4">
      <div  class='animated zoomInUp article'>
        <img class="img-circle" src="/uploads/news.png" alt="Generic placeholder image" width="140" height="140">
        <h3>Monthly Newsletter</h3>
        <p>Evolution & Training classes</p>
        <form class="" action="index.html" method="post">
          <input type="text" name="news" placeholder="ex: jesse@teamR.com"><br><br>
          <a class="btn btn-warning" type='submit' href="#" role="button">Sign Me Up</a>
        </form>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.col-lg-4 -->
    <div class="col-sm-4 col-md-4 col-lg-4">
      <div  class='animated zoomInUp article'>
        <img class="img-circle" src="/uploads/cards.jpg" alt="Generic placeholder image" width="140" height="140">
        <h3>Promotions</h3>
        <p>We need to make room for our new inventory</p>
        <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
</div>
<br>
<hr>









<div class="containertext-center">
  <div class="[ rows ]"> -->
    <!-- <div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel"> --> -->
    <div class="[ col-xs-4 col-sm-12 ]"
    <!-- Nav tabs -->
    <ul class="[ nav nav-justified ]" id="nav-tabs" role="tablist">
      <li role="presentation" class="animated jello active">
        <a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">
          <img class="img-circle" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQTEhQTExISFRQXGB4bGBgYGRwaGhocHhobFxwfIhgbHSggHRolHBgVITchJSwrLi4uGB8zODMsNygtLisBCgoKDg0OGhAQGywkICUsLCwsLCwsLC0sLCwsLCwsLCwsLCwtLCwsLCwsLCssNjcsLCw3KywsLDc3LCssLCsrK//AABEIAHgAeAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAMEBgcBAgj/xAA5EAABAgQDBQYEBAcBAQAAAAABAhEAAwQhBRIxBkFRYXETIoGRocEjMrHwQlJy0QcUFTNi4fFDkv/EABkBAAMBAQEAAAAAAAAAAAAAAAECAwQABf/EACIRAAICAgICAgMAAAAAAAAAAAABAhEDIRIxEyJBUQRhkf/aAAwDAQACEQMRAD8AqaJk0H+0rziSKic39j1MEv6GH/uTTb80PytnkF+/N/8As8Iy+dlPCgTIqZpNpCfOJdHTrSFqWls5JYRPlbNynS5mXH5jDlXs7JSl2Xv/ABK/eBPI5KgxgouwdjCQESVcFpPhYQLxraqWPhyk9oQ4KnZPDXfArbOrlBSZMgfKPiKclz+UdN/WANOgs7WfSBHEqtj8n0h+ZWTlkAqPICwjuS5zqLjjpw1eHZByAkkpVuZAV9WA63iLUqe5d97n2aKUhdjpIJGVZD7ns/B490mJKljKQ6X8fu8C4ly5meyteMFpC7YWkKCpU1n1cGPFIfjyHG5usCF5pZIcgHVt8S8Nn/Fli/zQrjSG5dINYyB2aWfUvEjBVAyFglnQweKzXz1Fah3rE749ycRWkAABhxgxtLROSvTOYkglRLaCOQ9/VZvAeUKD5J/S/o/GNdmky8akZj8Qac4kSMbkOe/uGiT+0E5EsZ9AO7wghRyXUqw0EZ0ijYDRjcnLbObEWQo+0QNpdoUJkKyiYDlIcoUA5sNRF1opbpbmYpP8Yl5KeUl2zTPFgCf2h1ERsyZBc/WDdME5bvlFy2vICB+FYYuYSpI7qbknzAi/7J4WUoNmzb94HLh15Q2WVFcGPl2V7DqdU0/IEo0BNgONz9YmHDZbHJlWRqohwOg9ovsnZmWsvYAcnfqTrDk7YJCg5mMTwS3mQesRTkzS4QWjJZuFDOACN/hwfhHpeD91C0j9Vra2MaQrYlEoXUSN7b4Yq6EJtlAGViBw4c4PkaA8MaMwxFAKQzFrH29x4c4WEkd3iFj6w7i9EUExFwk98DmIt3ExPUifXqCZmUByq/nHpSWdwzax6rKdZndoFIBTo8NzZClFRVNlurWJ8o8UdxlZ7kpKvlDxyO0uaX8tQgPyflCjnKP2coyNM/mKpAXM7CSyUOR2h3OfywFpduahsyaVDKD/ADHpq0XirQOynWN5Z+hjG6ev7qUABgOHT9hA2ujTghjnfN0aZge0k1aMykJTd9CfWKB/ErGTVT5YBdKEHc1ybnyAiw4RVrVKyE2ZvDSK1jNG89ASUjNLABNgCFMXPC4jscnyaZGcPom7JoAkvvzX9oueHhukVDBUKllUqYAFAgKAL3bV+YAg/TT5jd0AC91WH20LkVyNGGXGJc6BZ1AFom9uvTKIqGC1E/tD8aXNH5UtaLHLrHSVAkMzj76wdoompHatSiwt9vFdxUO7ecSsWnzVIBQtEpLtmVqegF4BkzVDN28ucBrkSz+paA4/J3kXQBxcDK/A/ftFZpqdlzFW7pA87/fWDO1VSRLyaEsT4XgDhEwq7QnS3nf2i0V62YMj9grXYehSTMIL5k7+J4QOq6RCZsxOXi0GqgfBWf8AJP1gZiKmnTuQ9oeC9ETt+RoJYHQSsySUpN0+ohQ5s6kgpI3lD8nEchmkLFs0Kbs6gyZijMnWQf8A0VzjHqT5o2r+vyTKUlppdLWlq3vyjNsKwdCkdoRMLubcAW08YlFxRa3R2kr1JTlSB1iPiFVlVImkElCiFDikj/UWumwiT2awEqCxoS5F+HKxit7T4QUSlLCw40Yf75QzeP47EjOXIP49h6ZNcSiyZiEqA4fhI6WHnFooqNK0gWIDEBt4irY/PE5FLVIU6VJynqQki/EFKknwiw4BPsIz5LTs9HGk7Qbk4fLlJLS0pcgqZ+8Q5Fh1MRBOzqmW+ZOn31ibiE8BHP67veIWEyCSpRDk2teOdtjxioo94dNlrTlWgKsxBdjd28xHJ9DLlgFIAADADhq3SIlOeynFN2U7fe+J2Jt2Zy6kfdoNyqgcFeiiTKJE6qUZvyS0qmKfeBlGnjFV7JKEKKQAVLKjydyB0EFsWrskmpVvVkljqo5lX/TLeK4ioSUnvc/SG3SMWSr0HVpenmnkn6mA2MJ+NMG8pDHwiYrEUokqSXJWAA25r+8QqmrTMmGYAzpZj0i0H6EGqm2WLZVlJ7qgWyP13woA0FeJLFiWbQgaF4UGV2CJ9CGX3B0jAUVS0TZiQSwWr0UY2NJrAlJ7SRoS2QneP8oqk7+Hi+2mkqUblTgJGpJ0JhYtfIzsr9ItSwATAfHZWV7kxp+Gfw9D5ZipiQzhspvu6QF2v2M7GUVHtFD9SfUNFH+hUlW+ygYLjKkylSDeWVBQvdJdy3JQ9RGp4EsCWFPuD+UYzSyR2iQCR3wD4lo0vZuvYdjMsoZkF+Yt5xnyJM2YJNdlmxDEwruBiN8RaZMxAdE4pvoLptfebQPpUAhwspuAOB3+fOLJh9BICA6Z4U2qFpyn6esGCTKy5Mr84KQszFrUqZzs2psN0SqPEDNzC1klRPTWHMdEq2WWUpf8SypSvDQB90Cp2KtLmKcIKiAAPyi59oWaVnK47M+21qiJnY/hSSrqSAPQD1MAaeW7vEzFz2kxUwk94+m6G8gQONni6qqRhnd2yfV0oVlOYJ7o1iP/ACiN81MGaXDZc1OdQKikAN1Fj5iHUbLpSsJLELCVJs1lf7hccJSVWNklGO6APYyh/wCo8o5Fsotj1JWJhQFSR3ZhYdxRdI8HEKKLBN9EXngu0bCZyGSCpPyneIf/AJyXnW8xGg/EP3gAjA6fufBQbHdE1ODU4UsdhL0H4RziEZMs0F1YtKC0vOlMU71D94A7b4zIVIKe3lF3/EDHnF8Rw+mAziQFpv2aUpKzbRhv6tGfYptnMqAZaKankguxAzKA/UWBPNoquTJtpFMEsdq6S4d/K/tGgY7Qky01coOyB2g4pb5hzT9OkUekHxgOo9DGp7HVOaSh9CNPQjpC5I0kVwS5NoAYFUGYlx3k7x9nX94KppVlJayeDv6+BhrEdnl080zKRIUhXzStG/STZuUD5uPTZVlyJyL6FJA89Du8olRqUqVMITpJfvK7w5lxoN8AFyVTVTEo+VNlFi3TraJdKuqqlkS5a05g2eYCEpD6tqT04RaJGGplyuyRdKA5U11HUk8/9QaoWXt0Y5WoIOXkPpBPB8EXVZUIKczKFy2gf2iDXFpg/Sn1EOSCULCkqKFpNlCxBjRx3Zg5uqLrsZRJXIWprsB5DMPeJ+NFOWVLObtJZUE2YZFMpLHVwbecVPA9q5lMVDs0zErLqHynfoQDx4QaxraOnny5K0EpmoDKSoMbaX0NjAhFxOk+VoLJxRc/t0JAQVhOYDQ2sfMescgBhlUDNSRpMBT46iFGht/Bn4J9hvEtvUIITKldoQCMxUyfDuufTrFaxTaernk5pq0g/hlukelz4mGKGjSdxMTqlDaMOgiMcaRaWRsD0eGqUbAJA+9If/lShXeZzaCFISPv75RGrp7gl9xf76w9UJYBpZjTArQO5fcI0PYGqSuUtAUMyFlSRvKFXfpciKRhFKFhZUHAGnm3v5CPeG1C5KkTEKCdCk8y7gjeksYWcbRTFk4Ss3JMrOkKAhtYIBSA76RzZPE0VEkLQwOik70K3jpz3wUKRwvGaqPSUr2gUinKElR+Y8YoG0e2ZlFcqQEd2ylKc5lcEgcOMaPiqSqWsI+YJVlP+TFm5vv3RgeHoZZKknMm5cXcW03b7copjim9mf8AIyOKVEOpzKAWoDNvbeBZ25Gx6g74s+GygtKStAVvDjd1iDQ0AVKvZ7j/AJwiVgaGBSfwlveNFGFsVbhYfuBul/rEb+iKIsoE87GCtfqGPlHZU1so3qMdQLK2qhmI7wCg28fuI7Bqee8WO+FAoNnmX3FW1ES5ykrvmCeNoUKGFHZcphxaAuJyrsm5NmhQoDCidQyQiVla7uecCzJ+ER+RT+DiFChgXsLbK48qlmBQUyFslfJtFNyc+BjYKWpMxAUefoW3WP0hQozZTd+M70Z7tVtqZizT0qhqypr+By8he49NYq6KBIQoZiVH1+7woUWhFJGbLNylsIBLJDcIZpkgLVldix8bv9BChQxEkTkDeWEM0jGapnypDB+f/IUKOCM1BDLOa4IYcXLffWFChQDj/9k="></i></span>
        </a>
      </li>
      <li role="presentation" class="animated jello">
        <a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
          <img class="img-circle" src="http://www.aceshowbiz.com/images/photo/oprah_winfrey.jpg" />
          <span class="quote"><i class="fa fa-quote-left"></i></span>
        </a>
      </li>
      <li role="presentation" class="animated jello">
        <a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
          <img class="img-circle" src="http://media.gunaxin.com/wp-content/uploads/2012/12/ron-burgundy-150x150.jpg" />
          <span class="quote"><i class="fa fa-quote-left"></i></span>
        </a>
      </li>
      <li role="presentation" class="animated jello">
        <a href="#wafer" aria-controls="wafer" role="tab" data-toggle="tab">
          <img class="img-circle" src="https://i.imgflip.com/2/hcv7n.jpg" />
          <span class="quote"><i class="fa fa-quote-left"></i></span>
        </a>
      </li>
    </ul>
  </div>
  <div class="[ col-xs-8 col-sm-12 ]">
    <!-- Tab panes -->
    <div class="tab-content" id="tabs-collapse">
      <div role="tabpanel" class="tab-pane fade in active" id="dustin">
        <div class="tab-inner">
          <p class="lead">Team Rocket's deals and business skills are stronger than my roundhouse kick!</p>
          <hr>
          <p><strong class="text-uppercase">Chuck Norris</strong></p>
          <p><em class="text-capitalize">Actor, Martial Artist</em> at <a href="#">USA</a></p>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="daksh">
        <div class="tab-inner">
          <p class="lead">Team Rocket's contribution to society epitomizes selflessness and dedication to hard work. They bring their "A" games 100% of the time!</p>
          <hr>
          <p><strong class="text-uppercase">Oprah Winfrey</strong></p>
          <p><em class="text-capitalize">Talk Show Host</em> at <a href="#">The O! network</a></p>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="anna">
        <div class="tab-inner">
          <p class="lead">Alvin, Nick, and Steven are the definition of classy. If you don't agree that these guys are the best...I will fight you.</p>
          <hr>
          <p><strong class="text-uppercase">Ron Burdundy</strong></p>
          <p><em class="text-capitalize">Lead Anchor</em> at <a href="#">Channel 4 News Team, GNN</a></p>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="wafer">
        <div class="tab-inner">
          <p class="lead"> I pity the fool who don't work with these guys! Knockout Service! </p>
          <hr>
          <p><strong class="text-uppercase">MR. T</strong></p>
          <p><em class="text-capitalize">Actor, Wrestler, Boxer, Rapper</em> at <a href="#">Hollywood</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<!-- <div class='sponsors'>
<h1>Featured On</h1>
<img src='http://www.magazinediscountcenter.com/uploads/images/full/1f0b83b58e8ac88c274214d885bb1d35.png' width: '90px' height='40px'>
<img src="http://www.flower-mound.com/images/pages/N1421/logo-cnnmoney.png" width: '120px' height='40px'>
<img src="http://makerbot-blog-old.s3.amazonaws.com/wp-content/uploads/2011/05/entrepreneur_magazine_logo3.jpg" width: '100px' height='50px'>
<img src="https://pbs.twimg.com/profile_images/550753086814162945/NF0P32Dg_400x400.jpeg" width='150px' height='130px'>
<img src="https://lombardi.georgetown.edu/sites/lombardi/files/files/upload/newsweek-logo.jpg" width: '90px' height='70px'>
<img src="http://rainn.org/images/news-room/News/06-2012/4-11-11-Bloomberg-Logo.png" width: '90px' height='40px'>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/National_Public_Radio_logo.svg/2000px-National_Public_Radio_logo.svg.png" width: '90px' height='40px'>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Time_Magazine_logo.svg/250px-Time_Magazine_logo.svg.png" width: '190px' height='60px'>

</div> -->

<!-- </div> -->


</body>
</html>
