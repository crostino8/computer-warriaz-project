<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Enhancements</title>
</head>
<body>
  <?php
    include('header.inc');
  ?>
  <main id="enhancements_page_styling">
    <section>
      <div>
        <h2>Enhancement 1</h2>
        <h4>Navlink items enchancements</h4>
        <span>Link: </span><a href="./index.html#nav_list">Enchancement</a>
      </div>
      <p>
        For nav links the most basic way to do it would just be to add simple &lt;a&gt; tags that links to each page with little to no styling required.
        This enhancement goes beyond the scope as it involves enriching the styles making it more fluid and aethetic to use.
        The code to add special underline animations as fluid hover animations to each navlink involves using the ::after css selector, instead of using text decoration for underline, 
        we create the underline manually, and upon hovering it will extend to 100% of the navlist items. 
      </p>
      <p>
        No references were used as I have previously learnt this awhile ago (Danny)
      </p>
    </section>
    <section>
      <div>
        <h2>Enhancement 2</h2>
        <h4>Form input enhancements</h4>
        <span>Link: </span><a href="./apply.html#job_application_form">Enhancement</a>
      </div>
      <p>
        The form section in the apply page was enhanced beyond the requirements for html and css, most of additional code involves adding hover effects and transition properties when hover on each text input and when each input is focused a blue border appears in with smooth animations. 
      </p>
      <p>
        No references were used as I have previously learnt this awhile ago (Danny)
      </p>
    </section>
  </main>

  <?php
  include("footer.inc");
  ?>

</body>
</html>