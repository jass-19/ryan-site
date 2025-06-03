<style type="text/css">
    .box-1 {
width: 100%;
max-width: 581px;
text-align: center;
background-color: #ffffff;
border: solid 1px #CCCCCC;
border-radius: 16px;
padding: 16px;
    }

  .tooltip-feedback {
    position: absolute;
    background: #333;
    color: #fff;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    z-index: 999;
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;}
    
    .seprator {
    height: 40px;
    background: #535353;
    width: 1px;
}

.img-sec {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.logo_image_one {
        width: 40%;
}

.logo_image_two {
        width: 40%;
}

.container_available_program {
    max-width: 1204px;
    width: 100%;
}

    .heading-1 .heading-title {
        margin: 0;
        color: #508EFF;
        font-family: Roboto;
        font-weight: 700;
        font-size: 20px;
        display: block;
        line-height: 100%;
        padding: 21px 16px 8px 16px;
    }

    .heading-2 .certificate-title {
        font-family: 'Roboto';
        color: #000000;
        font-size: 24px;
        text-align: center;
        font-weight: 600;
        line-height: 100%;
        margin: 0;
        padding: 8px 0px 6px 0px;
    }

    .heading-3 .school-name {
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 16px;
        line-height: 100%;
        color: #000000;
        opacity: 70%;
        padding: 6px 16px 21px 16px;
        margin: 0;
    }

    .heading-4 .discount-info {
        border-radius: 8px;
        background-color: #508EFF1A;
        padding: 8px;
        font-family: 'Roboto';
        font-size: 15px;
        font-weight: 400;
        line-height: 100%;
        border: 1px solid #508EFF33;
        text-align: center;
    }

    .span-code {
         font-size: 16px;
          background-color: #508EFF;
         font-weight: 600;
          color: #ffffff;
      border: 1px dashed #98BDFF;
      border-radius: 5px;
      padding: 3px;
    }

    .span-amount {
        font-weight: 600;
        margin: 0;
    }

    .span-date {
        font-weight: 600;
        margin: 0;
    }

    .heading-5 .late-discount {
        line-height: 100%;
        padding: 6px 16px 17px 16px;
        font-family: 'Roboto';
        font-style: italic;
        font-size: 16px;
        font-weight: 400;
        color: #4D4D4D;
    }

    .span-late-discount {
        font-weight: 600;
    }

    .button .learn-more-btn {
        font-family: Raleway;
        line-height: 18.78px;
        font-size: 16px;
        font-weight: 600;
        padding:8px;
        color: #000000;
        border: solid 1px #00000033;
        border-radius: 5px;
        text-decoration: none;
    }

.parent-div {
display: flex
;
column-gap: 15px;
justify-content: center;
flex-wrap: wrap;
row-gap: 16px;
}



@media only screen and (min-width: 320px) and (max-width: 767px) {

h2.certificate-title {
    font-size: 20px !important;
    line-height: 26px !important;
}

h2.school-name {
    font-size: 16px !important;
    line-height: 16px !important;
}

h2.discount-info {
    font-size: 18px !important;
    line-height: 35px !important;
}

h2.late-discount {
    font-size: 18px !important;
    line-height: 24px !important;
}

.box-1 {
    padding: 30px 16px;
}

}

</style>


<div class="section-1">
    <div class="container_available_program">
        <div class="parent-div"> <!-- Moved outside loop -->

            <?php
            $args = [
                'post_type' => 'available_programs',
                'post_status' => 'publish',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'ASC',
            ];
            $loop = new WP_Query($args);

            while ($loop->have_posts()):
                $loop->the_post(); ?>

            <div class="box-1">
                <div class="img-sec">

                  <div class="logo_image_one"><img src="<?php echo get_field(
                      'logo_image_one'
                  ); ?>"></div>
                  <div class="seprator"></div>
                  <div class="logo_image_two"><img src="<?php echo get_field(
                      'logo_image_two'
                  ); ?>"></div>
                  
                </div>
                <div class="heading-1">
<a class="heading-title" href="<?php the_permalink(); ?>"><?php echo get_field(
    'sub_title'
); ?></a>

                </div>
                <div class="heading-2">
  <a class="certificate-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


                </div>
                <div class="heading-3">
                    <h2 class="school-name"><?php echo get_field(
                        'school_field'
                    ); ?></h2>
                </div>
                <div class="heading-4">
                    <h2 class="discount-info">
                        Use code <span class="span-code"><?php echo get_field(
                            'coupon_code'
                        ); ?></span>  to save 
                        <span class="span-amount"><?php echo get_field(
                            'span_amount'
                        ); ?></span> if you enroll before
                        <span class="span-date"><?php echo get_field(
                            'span_date'
                        ); ?>
                    </h2>
                </div>
                <div class="heading-5">
<?php
$full_text = get_field('first_small_text');

// Use regex to find the first currency/number-like value and wrap it
$modified_text = preg_replace(
    '/(\$\d+(?:,\d{3})*(?:\.\d{2})?)/',
    '<span class="span-late-discount">$1</span>',
    $full_text,
    1
);
?>

<h2 class="late-discount">
    <?php echo $modified_text; ?>
</h2>

                </div>
                <div class="button">
                    <a class="learn-more-btn" href="<?php echo get_field(
                        'learn_more_button'
                    ); ?>">Learn More</a>

                </div>
            </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div> <!-- Close parent-div -->
    </div>
</div>


<script>
  function showTooltip(target, message = "Copied!") {
    const tooltip = document.createElement("div");
    tooltip.className = "tooltip-feedback";
    tooltip.innerText = message;

    document.body.appendChild(tooltip);
    const rect = target.getBoundingClientRect();

    tooltip.style.left = `${rect.left + window.scrollX + rect.width / 2}px`;
    tooltip.style.top = `${rect.top + window.scrollY - 30}px`;

    tooltip.style.opacity = 1;

    setTimeout(() => {
      tooltip.style.opacity = 0;
      setTimeout(() => document.body.removeChild(tooltip), 300);
    }, 1000);
  }

  document.addEventListener("DOMContentLoaded", function () {
    // For all .span-code elements
    const codeSpans = document.querySelectorAll('.span-code');

    codeSpans.forEach(span => {
      span.style.cursor = "pointer";

      span.addEventListener("click", function () {
        const text = this.innerText;

        navigator.clipboard.writeText(text).then(() => {
          showTooltip(this);
        }).catch(err => {
          console.error("Failed to copy text: ", err);
        });
      });
    });

    // For specific button with IDs
    const trigger = document.getElementById("class-copy-content");
    const source = document.getElementById("text-id-copy");

    if (trigger && source) {
      trigger.addEventListener("click", function () {
        const text = source.innerText;

        if (navigator.clipboard) {
          navigator.clipboard.writeText(text).then(() => {
            showTooltip(this);
          }).catch(err => {
            console.error("Clipboard write failed:", err);
          });
        } else {
          const textarea = document.createElement("textarea");
          textarea.value = text;
          document.body.appendChild(textarea);
          textarea.select();
          try {
            document.execCommand("copy");
            showTooltip(this);
          } catch (err) {
            console.error("Fallback copy failed:", err);
          }
          document.body.removeChild(textarea);
        }
      });
    }
  });
</script>