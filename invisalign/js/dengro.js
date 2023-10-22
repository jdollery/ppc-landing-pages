/*-----------------------------------------------------------------------------------*/
/* AJAX FORM - DENGRO WEBHOOK */
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function () {

  jQuery('#validateForm').validate({
    onkeyup: false,
    errorClass: "error-message",
    errorElement: 'div',
  
    submitHandler: function(form) {
  
      jQuery.ajax({
        url: form.action,
        type: form.method,
        data: jQuery(form).serialize(),
        cache: false,
        crossDomain: true,
        dataType: 'json',
        error: (error) => {
          console.log('Error', error);
          window.location.href = "/dental-design/ppc/template/sorry.php";
        },
        success: (res) => {
          console.log('Success');
          window.location.href = "/dental-design/ppc/template/thanks.php";
        }
      });
  
    }
  
  });

});