<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap 5 -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<style>
div.conditionContent {
    background-color: white;
    width: 445px;
    height: 150px;
    overflow: scroll;
    padding: 10px;
    margin: 10px auto;
}

.continueBtn{
  float: right;
  background: #5A5EAA;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 5px 30px;
}

/*remove after add in other page*/
button{
  background: #5A5EAA;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 5px 30px;
  margin: 10px;
}
</style>
</head>
<body>
    <button type="button" id="addBtn" data-bs-toggle="modal" data-bs-target="#termsCondition_modal">Add <span class="iconify" data-icon="akar-icons:key"></span> </button>

 
<!-- Modal -->
<div class="modal fade" id="termsCondition_modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #F4F6FB;">
    
      <div class="modal-header">
        <h5 class="modal-title" id="conditionLabel">Terms & Condition</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col">
              Please check terms and condition to continue.
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="conditionContent">When you agree to terms and conditions, you are basically agreeing to all sorts of things. In order to know exactly what you have agreed to, you have to read and make sure you understand everything in the terms and conditions. Most people are usually surprised when they find out what they have agreed to.
        <br><br>When you agree to terms and conditions, you are basically agreeing to all sorts of things. In order to know exactly what you have agreed to, you have to read and make sure you understand everything in the terms and conditions. Most people are usually surprised when they find out what they have agreed to.
              </div>
            </div>
          </div>
          <form class="needs-validation" novalidate>
          <div class="form-check termsCheck" novalidate>
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck" required>
        I agree to the terms and condition.
             </label>
             <div class="invalid-feedback">
        You must agree to continue.
             </div>
            </div>
            <button class="continueBtn" type="submit">Continue</button>
          </form>
        </div>
      </div>
  
    </div>
  </div>
</div>

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
</body>
</html>

