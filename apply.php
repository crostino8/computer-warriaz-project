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
  <header>
    <nav>
      <a id="nav_logo_container" href="./index.html">
        <img src="./images/company_logo.svg" alt="Company Logo">
      </a>
      <ul id="nav_list">
        <li class="nav_list_item"><a href="./index.html">Home</a></li>
        <li class="nav_list_item"><a href="./about.html">About</a></li>
        <li class="nav_list_item"><a href="./jobs.html">Jobs</a></li>
        <li class="nav_list_item"><a href="./enhancements.html">Enhancements</a></li>
        <li class="nav_list_item"><a href="./apply.html">Apply</a></li>
        <li><a class="pill_button" href="mailto:104349875@student.swin.edu.au">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main id="apply_page_content">
    <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post" id="job_application_form">
      <h1>Job Application</h1>
      <input class="job_input" type="text" name="job_reference_number" id="job_reference_number" placeholder="Job reference number" required pattern="[a-zA-Z0-9]{5}"/>
      <input class="job_input" type="text" name="first_name" id="first_name" placeholder="First name" required pattern="[A-Za-z]{0,20}"/>
      <input class="job_input" type="text" name="last_name" id="last_name" placeholder="Last name" required pattern="[A-Za-z]{0,20}"/>
      <input class="job_input" type="date" name="date_of_birth" required id="date_of_birth"/>
    <fieldset>
      <legend>Gender</legend>
    <div class="radio-group" >
      <input checked class="input_radio" type="radio" name="radio" id="Male" value="male">
      <label id="male-label" for="Male">Male</label>
      <input class="input_radio" type="radio" name="radio" id="Female" value="female">
      <label id="female-label" for="Female">Female</label>
      <input class="input_radio" type="radio" name="radio" id="Others" value="others">
      <label id="others-label" for="Others">Others</label>
    </div>
    </fieldset>
      <input class="job_input" type="text" name="street_address" id="street_address" placeholder="Street Address" required maxlength="40">
      <input class="job_input" type="text" name="suburb_town" id="suburb_town" placeholder="Surburb/Town" required maxlength="40">
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
      <input class="job_input" type="text" name="postcode" id="postcode" placeholder="Postcode" required pattern="[0-9]{4}" />
      <input class="job_input" type="email" name="email_address" id="email_address" placeholder="Email address" required>
      <input class="job_input" type="text" name="phone_number" id="phone_number" placeholder="Phone number" required pattern="[0-9 ]{8,12}">
      <fieldset>
        <legend>Skills List</legend>
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
      <textarea class="text_area" name="other_skills_text" id="other_skills_text" placeholder="Other skills"></textarea>
      <input class="job_input" type="submit" value="Apply">
      <input class="job_input" type="reset" value="Reset">
    </form>
  </main>
  <footer>
    <ul id="footer_list">
      <li class="footer_link"><a href="./index.html">Home</a></li>
      <li class="footer_link"><a href="./about.html">About</a></li>
      <li class="footer_link"><a href="./jobs.html">Jobs</a></li>
      <li class="footer_link"><a href="./enhancements.html">Enhancements</a></li>
      <li class="footer_link"><a href="./apply.html">Apply</a></li>
    </ul>
    <div id="copyright_container">
      <p>&#169; SQUARE ENIX LTD. All Rights Reserved.</p>
      <div id="github_container">
        <a href="https://github.com/dvaanc/computer-warriaz-project" target="_blank"><img src="./images/github_logo.svg" alt="github logo"></a>
        <span class="footer_link"><a href="https://github.com/dvaanc/computer-warriaz-project" target="_blank">Made by Computer Warriaz</a></span>
      </div>
    </div>
  </footer>
</body>
</html>
