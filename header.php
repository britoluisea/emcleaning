<?php
if( FILE_PATH ==   URL_INDEX  )
{ ?>
        <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?=IMG?>1.jpg');"></div>
                <div class="carousel-caption  wow flipInY" data-wow-offset="0" data-wow-delay="0.8s" >
                    <h1 >House Office Apartament</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat a explicabo odit. Nam tempora atque sed sequi obcaecati laboriosam dolorem alias, illo perferendis, rem asperiores distinctio eos accusantium facere at!</p>
                    <a href="#" class="btn btn-success hvr-grow-shadow">READ MORE</a>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?=IMG?>2.jpg');"></div>
                <div class="carousel-caption wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                    <h1>Caption 2</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat a explicabo odit. Nam tempora atque sed sequi obcaecati laboriosam dolorem alias, illo perferendis, rem asperiores distinctio eos accusantium facere at!</p>
                    <a href="#" class="btn btn-success hvr-grow-shadow">READ MORE</a>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?=IMG?>2a.jpg');"></div>
                <div class="carousel-caption wow fadeInUp" data-wow-offset="0" data-wow-delay="0.8s">
                    <h1>Caption 3</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat a explicabo odit. Nam tempora atque sed sequi obcaecati laboriosam dolorem alias, illo perferendis, rem asperiores distinctio eos accusantium facere at!</p>
                    <a href="#" class="btn btn-success hvr-grow-shadow">READ MORE</a>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header> <?php
}
else //header de pages internas
{  ?>
  <!-- banner -->
  <header  id="page-interna" style="
  background-image:url('<?=IMG?>2.jpg'); 
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding:150px;
  ">
  </header>
  <?php if(isset($share_fb))
  { ?>
    <div class="container">
      <div class="col-md-12" style="margin:20px 0px;">
         <?=$share_fb; ?>
      </div>
    </div>
    <?php
  }
}
//echo FILE_PATH ." ==  ". URL_INDEX;
?>