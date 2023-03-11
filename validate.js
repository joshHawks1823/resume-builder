$(document).ready(function() {
  $("#validForm").validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      fullName : {
        required: true,
        minlength: 3
      },
      phone_number: {
        number: true,
        minlength: 10,
        maxlength: 10,
        required: true,
        phoneUS: true
      },
      email: {
        required: true,
        email: true
      },
      website: {
        required: true,
        url: true
      }
    },
    messages : {
      name: {
        minlength: "Name should be at least 3 characters"

      },
      email: {
        email: "The email should be in the format: abc@domain.tld"
      }
    }
  });
});