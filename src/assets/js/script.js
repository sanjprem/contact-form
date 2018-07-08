$(document).ready(function(){
    $("select#selectEnquiry").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".selectOption").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".selectOption").hide();
            }
        });
    }).change();
});


$("#formSubmit").click(function(event) {
    var form = $("#formContact")
    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    form.addClass('was-validated');
        $.ajax({
        type: "POST",
        url: "sent-email.php"
    });
});
