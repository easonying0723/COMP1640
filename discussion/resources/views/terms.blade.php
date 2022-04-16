<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="{{ URL::asset('css/terms.css') }}" rel="stylesheet">

  <!-- All format -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- Sidebar slide -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
  
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body class="termsBody">
  <div class="termsTitle">
    <h1>Terms & Condition.</h1><br>
    <p>Please check terms and condition to proceed to submit your ideas.</p>
      <div class="termsContent">
        <strong>DISCUSS.ION</strong> <br><br>
        DISCUSS.ION provides functionality to make available content and ideas in connection with people<br><br>
        <strong class="text-muted">Any text in content should be written in English.</strong><br><br>
        Your acknowledgement and agree that you are responsible for all content and ideas you make available in connection with our website. You respresent and warrant that (1) you have the authority to grant the rights in such content and ideas as set forth in these Terms of Use, and the use of such ideas, will not violate any terms of these Terms of Use. This means you will be responsible for the legality, the accuracy , the approriateness, the originality , and your rights in any such Ideas. 
        Your acknowledgement and agree that you are responsible for all content and ideas you make available in connection with our website. You respresent and warrant that (1) you have the authority to grant the rights in such content and ideas as set forth in these Terms of Use, and the use of such ideas, will not violate any terms of these Terms of Use. This means you will be responsible for the legality, the accuracy , the approriateness, the originality , and your rights in any such Ideas. 
        Your acknowledgement and agree that you are responsible for all content and ideas you make available in connection with our website. You respresent and warrant that (1) you have the authority to grant the rights in such content and ideas as set forth in these Terms of Use, and the use of such ideas, will not violate any terms of these Terms of Use. This means you will be responsible for the legality, the accuracy , the approriateness, the originality , and your rights in any such Ideas. 
        <br><br>When you agree to terms and conditions, you are basically agreeing to all sorts of things. In order to know exactly what you have agreed to, you have to read and make sure you understand everything in the terms and conditions. Most people are usually surprised when they find out what they have agreed to.
      </div>
  </div>
</body>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var checkTerms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(checkTerms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</html>