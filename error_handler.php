<?php 
  



  function handleError($errorMessage) {
    // log the error
    error_log('Application Error: ' . $errorMessage);
    
    // clean output buffer if one exists
    if(ob_get_length()) {
      ob_end_clean();
    }

    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '  <meta charset="UTF-8">';
    echo '  <title>Error</title>';
    echo '</head>';
    echo '<body>';
    echo '    <h1>Oops!</h1>';
    echo '    <p>We encountered an error processing your request. Please try again later.</p>';
    echo '</body>';
    echo '</html>';
    exit();
  }
?>