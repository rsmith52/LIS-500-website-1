<!DOCTYPE html>
<head>
  <title>Leslie Miley - Tech Hero</title>
  <link rel="stylesheet" href="style.css">
  <nav>
    <h1>Madde + Ray's Website</h1>
    <ul>
      <li>
        <a href="index.html">Home Page</a>
      </li>
      <li>
        <a href="leslie-miley.php">Leslie Miley</a>
      </li>
      <li>
        <a href="merritt-kopas.html">merritt k</a>
      </li>
    </ul>
    <!-- Added date to the nav menu -->
    <strong>Date: </strong> <?php echo date(l) . ", " . date(F) . " " . date(j) . " " . date(Y) ?>
  </nav>
</head>

<body>
  <h2>Leslie Miley</h2>
  <div class="row">
    <div class="column">
      <h3>Who is Leslie Miley - A Short Bio</h3>
      <p>
        Leslie Milie is an African American who has worked for numerous tech companies such as Twitter and Slack, the Obama Foundation,
        and Venture for America. Wherever he's been, he's worked to tackle diversity and inequality in hiring, and leadership positions.
      </p>
      <h3>Articles about Leslie Miley</h3>
      <ul>
        <!-- Old HTML for listing the links replaced by dynamic PHP above
        <li>
          <a href="https://medium.com/tech-diversity-files/thought-on-diversity-part-2-why-diversity-is-difficult-3dfd552fa1f7">Why Diversity is Difficult</a>
        </li>
        <li>
          <a href="https://peopleofcolorintech.com/engineers/leslie-miley-on-optimism-working-with-obama-and-techs-role-in-producing-inequality/">Working with Obama - Interview</a>
        </li>
        End of Old HTML -->
        <?php
            $links = array(
              "Why Diversity is Difficult" => "https://medium.com/tech-diversity-files/thought-on-diversity-part-2-why-diversity-is-difficult-3dfd552fa1f7",
              "Working with Obama - Interview" => "https://peopleofcolorintech.com/engineers/leslie-miley-on-optimism-working-with-obama-and-techs-role-in-producing-inequality/"
            );
        ?>
        <?php foreach ($links as $title => $link): ?>
              <li>
                <a href = <?php echo $link ?> > <?php echo $title ?> </a>
              </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="column">
      <!-- Use PHP to check if the image exists and displays an error if it doesn't for some reason. -->
      <?php if(file_exists("./miley.jpg")): ?>
          <img class="img2" width="500px" src="miley.jpg" alt="Leslie Miley picture" />
      <?php else: ?>
          <p>Image not found.</p>
      <?php endif; ?>

    </div>
  </div>
</body>
