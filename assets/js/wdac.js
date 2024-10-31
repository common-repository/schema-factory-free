// Wait for the DOM to be ready
$(function() {
    $("#pro-btn").click(function(){
   $("#go-pro").css("display", "none"); 
});
    // if there isn't a current image, require one! please.
    var wdac_image_val = $("#wdac_exist_image").val();
            if (wdac_image_val == ''){
       var wdac_image_required = "required";
        }
 
    //console.log(wdac_image_val);
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='wdac-form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      wdac_business_name: "required",
      wdac_image: wdac_image_required
    },
    // Specify validation error messages
    messages: {
      wdac_business_name: "Please enter your business name",
      wdac_image: "Please upload an image"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});

