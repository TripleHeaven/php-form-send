function SubmitFormData() {
  var name = $("#name").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var textT = $("#textT").val();
  $.post("submit.php", { name: name, email: email, phone: phone, textT: textT },
  function(data) {
 $('#results').html(data);
 $('#myForm')[0].reset();
  });
}