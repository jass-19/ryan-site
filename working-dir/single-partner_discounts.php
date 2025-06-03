<?php

get_header(); ?>

<style>

  /* Remove this if no longer needed */
.button-coupon-wrapper {
  display: block; /* changed from flex to block */
}

/* Add this new class */
.coupon-row-inline {
  display: flex;
  align-items: center;
  gap: 20px;
  margin: 20px 0;
  flex-wrap: wrap;
}

.container_PD {
    width: 100%;
    max-width: 1240px !important;
    margin: 100px auto;
    padding: 50px 50px;
    background: #cee0ff47;
    border-radius: 50px;
    box-shadow: 0px 0px 18px -8px #0e67ff;
}
.single_partner_discount_sec{padding:16px !important;}
.PD_row {
    display: flex;
    column-gap: 20px;
    justify-content: space-between;
    align-items: center;
}

img.coupon-img {
    width: 20px;
}

.copy-div {
    background: #508EFF;
    color: white;
    padding: 5px 15px;
    border-radius: 5px;
}

.btn-div {
    display: flex;
    background: white;
    justify-content: space-between;
    padding: 10px;
    border-radius: 10px;
    cursor: move;
    gap:24px;
}
 
.coupon-div {
    display: flex;
    column-gap: 10px;
    align-items: center;
}


    .featured_image_pd {
        width: 22%;
    }

.content_pd {
    width: 100%;
}



p.post_discount_para_style_one {
    font-size: 20px;
}

h5.post_discount_service_title {
    font-size: 30px;
    color: #508EFF;
}

.button-coupon-wrapper {
    display: flex;
    column-gap: 20px;
}

.coupon-button {
    width:100% !important;
}

.coupon-two {
  position: relative;
  transition: color 0.3s ease;
}

.btn-div.copied .coupon-two::after {
  content: "COPIED!";
  position: absolute;
  left: 50%;
  top: -50px; /* adjust as needed */
  transform: translateX(-50%);
  color: #508EFF;
  background-color: black; /* optional for better visibility */
  padding: 2px 6px;
  border-radius: 4px;
  font-size: 12px;
  animation: fadeOut 15s forwards;
  z-index: 10;
}


@keyframes fadeOut {
  0% { opacity: 1; }
  100% { opacity: 0; }
}

.PD_row_description{
width: 100% !important;
margin-top:20px;

}

.PD_row_description p {
    font-size: 18px;
    font-weight: 400;
}

p.post_discount_para_style_two a {
    font-weight: 900;
    text-decoration: underline !important;
}

span.coupan_code_sp {
    background: #EFF2F6;
    display: inline-block;
    padding: 5px 5px;
    border: 1px dotted #508EFF;
    border-radius: 5px;
    font-family: Roboto;
    font-size: 16px;
    line-height: 18.5px;
    color: #508EFF;
}

.featured_image_pd img {
    border-radius: 10px;
}

p.post_discount_para_style_two {
    font-size: 20px;
}

h5.post_discount_service_title {
    font-size: 30px;
    color: #508EFF;
}
.inner_coupon_div_wrap {
    display: block;
    margin-bottom: 22px;
}

p.post_discount_para_style_two span {
    background: #EFF2F6;
    display: inline-block;
    padding: 5px 5px;
    border: 1px dotted #508EFF;
    border-radius: 5px;
    font-family: Roboto;
    font-size: 16px;
    line-height: 18.5px;
    color: #508EFF;
}
.mxp-link {
    display: flex;
    background: white;
    justify-content: space-between;
    padding: 10px;
    border-radius: 10px;
}
span.lps-v_btn {
    background: #508EFF;
    color: white;
    padding: 5px 15px;
    border-radius: 5px;
}
span.fed {
    color: #000;
}
.mxp-link a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

 
.post_discount_title {
    font-size: 60px;
    color: #000000;
}


@media(max-width:1080px){

section.single_partner_discount_sec {
    padding: 0px 20px;
}

 
 .post_discount_title {
    font-size: 48px !important; 
    line-height:55px !important;
}
.PD_row {
    flex-direction: column;
    align-items: start !important;
    row-gap: 20px;
}

}



@media  (max-width: 769px) {
section.single_partner_discount_sec{
   padding: 0px 15px;
}

.button-coupon-wrapper{flex-direction:column-reverse !important;}

.coupon-button{width:100% !important;}

.PD_row_description h2{font-size:30px !important;
line-height:40px !important;}
.PD_row {
    flex-direction: column;
    align-items: start !important;
    row-gap: 20px;
}

.PD_row_description{width: 100% !important;}


.container_PD {
    width: 100%;
    margin: 100px auto;
    padding: 40px 20px;
    background: #cee0ff47;
    border-radius: 20px;
    box-shadow: 0px 0px 18px -8px #0e67ff;
}

 

.post_discount_title {
    font-size: 46px !important;
    line-height:54px !important;
}
}
@media (max-width:568px) {
 

.post_discount_title {
    font-size: 30px !important ;  line-height:45px !important;
}
p.post_discount_para_style_two{font-size:16px !important;}
.PD_row_description p {
    font-size: 16px !important;
    line-height:24px !important;
    font-weight: 400;
}

h5.post_discount_service_title{ font-size: 24px !important;
    line-height:30px !important;}

.post_discount_service_title{ font-size: 24px !important;
    line-height:30px !important;}

.PD_row_description h2{font-size:25px !important;
line-height:32px !important;}

.PD_row_description h3{font-size:20px !important;
line-height:32px !important;}

.wp-block-button__link{font-size:14px !important;
line-height:20px !important;
padding:10px 20px !important;}

p.post_discount_para_style_one {
    font-size: 18px !important;
}

}

</style>



<section class="single_partner_discount_sec">   
<div class="container_PD">
<div class="PD_row">
<div class="featured_image_pd">
<img src="<?php echo get_the_post_thumbnail_url(); ?>">
</div>
<div class="content_pd">
<h4 class="post_discount_title">
    <?php the_title(); ?>
</h4>

<p class="post_discount_para_style_one"><?php echo get_field(
    'product_discount_para'
); ?></p>



</div>
</div>
<div class="button-coupon-wrapper"> 
   <div class="PD_row_description">
  <h5 class="post_discount_service_title">Services:</h5>
  <p class="post_discount_para_style_two"><?php echo get_field(
      'services_content'
  ); ?></p>

  <h5 class="post_discount_service_title_two">How to get it:</h5>
 <div class="coupon-row-inline">
    <?php
    $make_copy_button_a_redirect = get_field('make_copy_button_a_redirect');
    if ($make_copy_button_a_redirect === 'No') {
        if (get_field('coupon_code')): ?>
        <div class="btn-div">
          <div class="coupon-div">
            <img class="coupon-img" src="/wp-content/uploads/2025/05/Vector-4.svg">
            <p class="coupon-one"><?php echo get_field('coupon_code'); ?></p>
          </div>
          <div class="copy-div">
            <p class="coupon-two">COPY</p>
          </div>
        </div>
    <?php endif;
    } else {
        if (get_field('redirect_link')) { ?>
        <a href="<?php echo get_field('redirect_link'); ?>" target="_blank"> 
          <div class="btn-div">
            <div class="coupon-div">
              <img class="coupon-img" src="/wp-content/uploads/2025/05/Vector-4.svg">
              <p class="coupon-one"><?php echo get_field('coupon_code'); ?></p>
            </div>
            <div class="copy-div">
              <p class="coupon-two">Copy & Go</p>
            </div>
          </div>
        </a>
    <?php }
    }
    ?>
  </div>

  <div class="inner_coupon_div_wrap">
    <?php
    $com_rep = get_field('add_your_coupon_code_page');
    if ($com_rep) {
        foreach ($com_rep as $com_rep_row) { ?>
        <p class="post_discount_para_style_two"><?php echo $com_rep_row[
            'add_your_text'
        ]; ?></p>
    <?php }
    }
    ?>
  </div>

  <?php
  $get_condition = get_field('coupon_code');
  if ($get_condition != '') { ?>
    <p class="post_discount_para_style_two">
      Use the coupon code 
      <span class="coupan_code_sp"><?php echo get_field(
          'coupon_code'
      ); ?></span> 
      and follow this <a href="<?php echo get_field('follow_link'); ?>">link</a>
    </p>
  <?php } else { ?>
    <p class="post_discount_para_style_two">
      Just follow this <a href="<?php echo get_field(
          'follow_link'
      ); ?>">link</a>
    </p>  
  <?php }
  ?>

  
  <?php the_content(); ?> 
</div>

 
</div>




</div>
</section>

<script>
  document.querySelectorAll('.btn-div').forEach(function(btnDiv) {
    btnDiv.addEventListener('click', function() {
      const couponText = btnDiv.querySelector('.coupon-div .coupon-one').innerText;

      navigator.clipboard.writeText(couponText).then(function() {
        // Add class to trigger tooltip
        btnDiv.classList.add('copied');

        // Remove it after 1.5 seconds
        setTimeout(function() {
          btnDiv.classList.remove('copied');
        }, 1500);
      }).catch(function(err) {
        console.error('Copy failed', err);
      });
    });
  });
</script>








<?php get_footer(); ?>
