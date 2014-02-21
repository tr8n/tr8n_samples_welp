<?php include('includes/header.php') ?>

<?php include('includes/nav.php') ?>

<div class="container">

  <div class="content">

    <div class="row">
      <div class="col-sm-12">
        <div class="pull-right"><br><a href="#"><?php tre("More Cities") ?></a></div>
        <h4><?php tre("Welp {city}", array("city" => "Los Angeles")) ?></h4>
        <hr>
      </div>
    </div>
      
    <div class="row">

      <div class="col-sm-7">
      
        <div class="well">
          <h3 class="text-primary"><?php tre("The best way to find local businesses") ?></h3>
          <p class="text-muted">
            <?php tre("Search for everything from the city's tastiest burger to the most renowned cardiologist.") ?>
            <?php tre("What will you uncover in your neighborhood?") ?>
          </p>
          <p>
            <a class="btn btn-primary" href="#"><?php tre("Create your free account") ?></a>
          </p>
        </div>
        
        <h3 class="text-primary"><?php tre("Best of Welp: {city}", array("city" => "Los Angeles")) ?></h3>
        <hr>
        <small class="pull-right"><a href="#"><?php tre("See More") ?></a></small>
        <h5 class="text-primary"><?php tre("Restaurants") ?></h5>


        <div class="media">
          <a class="pull-left" href="#">
            <div class="media-object media-img"></div>
          </a>
          <div class="media-body">
            <strong>1. <a href=""><?php tre("Ricky's Fish Tacos") ?></a></strong>
            <div class="text-muted">
              <img src="images/4-stars.png" title="<?php trle("{num} out of {count|| star}", array("num" => 4, "count" => 5)) ?>"/>
              <?php tre("{count|| Review}", array("count" => 14)) ?>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <div class="media-object media-img-sm"></div>
              </a>
              <div class="media-body">
                <p>Luckily, the perfect hot day food is a fish taco.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="media">
          <a class="pull-left" href="#">
            <div class="media-object media-img"></div>
          </a>
          <div class="media-body">
            <strong>2. <a href=""><?php tre("Genwa Korean Bbq") ?></strong>
            <div class="text-muted">
              <img src="images/3-stars.png" title="<?php trle("{num} out of {count|| star}", array("num" => 3, "count" => 5)) ?>"/>
              <?php tre("{count|| Review}", array("count" => 567)) ?>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <div class="media-object media-img-sm"></div>
              </a>
              <div class="media-body">
                <p>I love love love the fact that you get 25 side dishes.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="media">
          <a class="pull-left" href="#">
            <div class="media-object media-img"></div>
          </a>
          <div class="media-body">
            <strong>3. <a href=""><?php tre("Kang Hodong Baekjeong") ?></strong>
            <div class="text-muted">
              <img src="images/2-stars.png" title="<?php trle("2 out of 5 Stars") ?>"/>
              <?php tre("{count|| Review}", array("count" => 1)) ?>
            </div>
            <div class="media">
              <a class="pull-left" href="#">
                <div class="media-object media-img-sm"></div>
              </a>
              <div class="media-body">
                <p>Thick slices of juicy pastrami on rye hits the spot every time.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="media">
          <a class="pull-left" href="#">
            <div class="media-object media-img"></div>
          </a>
          <div class="media-body">
            <strong>4. <a href=""><?php tre("Guisados") ?></strong>
            <div class="text-muted">
              <img src="images/1-stars.png" title="<?php trle("{num} out of {count|| star}", array("num" => 1, "count" => 5)) ?>"/>
              <?php tre("{count|| Review}", array("count" => 14)) ?>
            </div>

            <div class="media">
              <a class="pull-left" href="#">
                <div class="media-object media-img-sm"></div>
              </a>
              <div class="media-body">
                <p>I can't wait to introduce more people to these orgasmic tacos.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-sm-5">

        <form>
          <div class="form-group">
            <label><small><?php tre("Find") ?></small></label>
            <input type="text" class="form-control" placeholder="<?php trle("tacos, cheap dinner, etc.") ?>">
          </div>
          <div class="form-group">
            <label><small><?php tre("Near") ?></small></label>
            <input type="text" class="form-control" value="Los Angeles">
          </div>
          <div class="form-group">
          <button type="submit" class="btn btn-default btn-sm"><?php tre("Search") ?></button>
          </div>
        </form>

        <hr>

        <h4 class="text-primary"><?php tre("Review of the day") ?></h4>

        <div class="media">
          <a class="pull-left" href="#">
            <div class="media-object media-img"></div>
          </a>
          <div class="media-body">
            <strong>
              <?php tre("[link: {user}] reviewed [link: {business_name}]", array("link"=> array("href" => ""), "user" => array("object" => array("name" => "Jane Smith", "gender" => "female"), "attribute" => "name"), "business_name" => tr("Ricky's Fish Tacos"))) ?>
            </strong>
            <div><img src="images/5-stars.png" title="<?php trle("{num} out of {count|| star}", array("num" => 5, "count" => 5)) ?>"/></div>
            <small class="text-muted"><?php tre("{count|| Review}", array("count" => 234)) ?></small>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, architecto, laboriosam doloribus sequi tenetur maxime magni porro sunt facilis officia deserunt blanditiis vitae consectetur rerum alias dolorem et dignissimos...
            <a href="#"><?php tre("Read More") ?></a></p>
          </div>
        </div>

        <hr>

        <h4 class="text-primary"><?php tre("Welp on the go") ?></h4>
        <p><?php tre("Get the Welp app on your mobile phone. It's free and helps you find great, local businesses on the go!") ?></p>
        <button type="submit" class="btn btn-default btn-sm"><?php tre("Get it free now") ?></button>

      </div>
    </div>
    <br><br><br>
  </div>

</div> <!-- /container -->

<?php include('includes/footer.php') ?>

