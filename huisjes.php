<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<br/>
<br/>
<br/>
<br/>

<div style="text-align: center;">
    	<h1 class="jobstitle"> Beschikbare Huizen </h1>
</div>
<br/>
<br/>


<?php
    $advertisers_image = get_field('advertisers_image');
    $advertisers = get_field('advertisers_texts');
?>


<?php
if ( have_rows('werk_sections') ):
  while ( have_rows('werk_sections') ): the_row(); 
  
  $image = get_sub_field('section_image');
  
  ?>

<div class="advertiser_section d-flex" id="advertisers">
    <div class="advertiser_right">
    <img src="<?php echo $image ?>" style="height: 10em; width: 11em; margin-left: 3em;"/>
        <div class="advertiser_right_restrain">
        <h1> <?php the_sub_field('section_titel'); ?> </h1>
            <h3> <?php the_sub_field('section_desc'); ?> </h3>

            <div class="btn-wrapper">
              <button class="btn btn-outline-success"> Bestel dit huis! </button> 
              <input type="file" name="myfile"/>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>

<?php endwhile; ?>
<?php endif; ?>

<style>
  .advertiser_section .advertiser_left {
    //height: 100%;
    width: 47%;
    background-size: cover;
  }

  .advertiser_section .advertiser_right {
    background-color: white;
    border: 3px solid black;
    height: 100%;
    width: 50%;
    margin-left: 30em;
    display: flex;
    padding: 2em 0 2em 0;
  }

  .advertiser_section  .advertiser_right .advertiser_right_restrain {
      display: flex;
      flex-direction: column;
      width: 50%;
      margin: auto;
  }

      .advertiser_section  .advertiser_right .advertiser_right_restrain h1 {
        font-size: 2em;
        font-weight: 800;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 1em;
        color: black;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain h3 {
        font-size: 1.3em;
        font-weight: 300;
        margin-bottom: 1.5em;
        color: black;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain p {
        font-size: 1em;
        font-weight: 300;
        margin-bottom: 1em;
        color: black;
        line-height: 22px;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain .signup {
        border-radius: 50%;
        height: 6em;
        width: 6em;
        margin: 0 auto;
        border: none;
        outline: 0 !important;
        color: blue;
        background-color: white;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain .signup:hover {
        cursor: pointer;
      }

@media only screen and (max-width: 800px) {
  .advertiser_section {
    flex-direction: column;
  }

    .advertiser_section .advertiser_left {
      margin: auto;
      height: 15em;
      width: 90%;
    }

    .advertiser_section .advertiser_right {
      margin: auto;
      width: 90%;
    }
  }

  .jobstitle {
    font-size: 4em;
  }

  .btn-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }

  .btn-wrapper input[type=file] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
  }
</style>