
<?php
include ('menu.php');
function header(){
return'
<header>
    <nav>
      <a id="nav_logo_container" href="./index.html">
        <img src="./images/company_logo.svg" alt="Company Logo">
      </a>
      '+ menu() +'
    </nav>
</header>';
}

?>