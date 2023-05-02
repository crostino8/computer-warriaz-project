<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Apply</title>
</head>

<body>
  <?php
  include('header.inc');
  ?>
  <main id="apply_page_content">
    <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post" id="job_application_form">
      <h1>Job Application</h1>
      <label for="job_reference_number">Job reference number:</label>
      <input class="job_input" type="text" name="job_reference_number" id="job_reference_number" placeholder="Job reference number" required pattern="[a-zA-Z0-9]{5}" />
      <br>
      <label for="first_name">First name:</label>
      <input class="job_input" type="text" name="first_name" id="first_name" placeholder="First name" required pattern="[A-Za-z]{0,20}" />
      <br>
      <label for="last_name">Last name:</label>
      <input class="job_input" type="text" name="last_name" id="last_name" placeholder="Last name" required pattern="[A-Za-z]{0,20}" />
      <br>
      <label for="date_of_birth">Date of birth:</label>
      <input class="job_input" type="date" name="date_of_birth" required id="date_of_birth" />
      <br>
      <fieldset>
        <legend>Gender</legend>
        <div class="radio-group">
          <input checked class="input_radio" type="radio" name="radio" id="Male" value="male">
          <label id="male-label" for="Male">Male</label>
          <input class="input_radio" type="radio" name="radio" id="Female" value="female">
          <label id="female-label" for="Female">Female</label>
          <input class="input_radio" type="radio" name="radio" id="Others" value="others">
          <label id="others-label" for="Others">Others</label>
        </div>
      </fieldset>
      <br>
      <label for="street_address">Street Address:</label>
      <input class="job_input" type="text" name="street_address" id="street_address" placeholder="Street Address" required maxlength="40">
      <br>
      <label for="suburb_town">Suburb/Town:</label>
      <input class="job_input" type="text" name="suburb_town" id="suburb_town" placeholder="Surburb/Town" required maxlength="40">
      <br>
      <label for="state">State:</label>
      <select class="job_input" name="state" id="state" required>
        <option value="">State</option>
        <option value="VIC">VIC</option>
        <option value="NSW">NSW</option>
        <option value="QLD">QLD</option>
        <option value="NT">NT</option>
        <option value="WA">WA</option>
        <option value="SA">SA</option>
        <option value="TAS">TAS</option>
        <option value="ACT">ACT</option>
      </select>

      <label for="postcode">Postcode:</label>
      <input class="job_input" type="text" name="postcode" id="postcode" placeholder="Postcode" required pattern="[0-9]{4}" />

      <label for="email_address">Email address:</label>
      <input class="job_input" type="email" name="email_address" id="email_address" placeholder="Email address" required>

      <label for="phone_number">Phone number:</label>
      <input class="job_input" type="text" name="phone_number" id="phone_number" placeholder="Phone number" required pattern="[0-9 ]{8,12}">

      <fieldset>
        <legend>Skills List:</legend>
        <input checked class="input_checkbox" type="checkbox" id="programming" name="skill1" value="programming">
        <label for="programming">Programming</label>
        <input class="input_checkbox" type="checkbox" id="game-design" name="skill2" value="game-design">
        <label for="game-design">Game Design</label>
        <input class="input_checkbox" type="checkbox" id="art" name="skill3" value="art">
        <label for="art">Art</label>
        <input class="input_checkbox" type="checkbox" id="audio" name="skill4" value="audio">
        <label for="audio">Audio</label>
        <input class="input_checkbox" type="checkbox" id="project-management" name="skill5" value="project-management">
        <label for="project-management">Project Management</label>
        <input class="input_checkbox" type="checkbox" id="other_skills" name="skill6" value="other_skills">
        <label for="other_skills">Other Skills</label>
      </fieldset>

      <label for="other_skills_text">Other skills:</label>
      <textarea class="text_area" name="other_skills_text" id="other_skills_text" placeholder="Other skills"></textarea>
      <input class="job_input" type="submit" value="Apply">
      <input class="job_input" type="reset" value="Reset">
    </form>
  </main>
  <?php
  include("footer.inc");
  ?>
</body>

</html>