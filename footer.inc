
<?php
include('menu.php');
function footer()
{
  return '
  <footer>
    ' + menu() + '
    <div id="copyright_container">
      <p>&#169; SQUARE ENIX LTD. All Rights Reserved.</p>
      <div id="github_container">
        <a href="https://github.com/dvaanc/computer-warriaz-project" target="_blank"><img src="./images/github_logo.svg" alt="github logo"></a>
        <span class="footer_link"><a href="https://github.com/dvaanc/computer-warriaz-project" target="_blank">Made by Computer Warriaz</a></span>
      </div>
    </div>
  </footer>';
}

?>