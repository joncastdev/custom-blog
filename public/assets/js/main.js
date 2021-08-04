let BASE_URL = 'http://127.0.0.1:8000';

 // console.log(BASE_URL);

// cargar el modal al cargar pagina
$( document ).ready(function() {
  $('#modalFormLogin').modal('toggle')
});








// //leads add
$("#userAdd").click(function(event) {
  event.preventDefault();

  // console.log('test');

  // console.log(BASE_URL);



  let first_name = $("#user_first_name").val(),
  last_name = $("#user_last_name").val(),
  email = $("#user_email").val(),
  password = $("#user_password").val();
  // csrfHash = $('#user__token').val();

     // console.log(first_name);



  // console.log(role);

  $.post(BASE_URL + '/user/new',
  {
    first_name: first_name,
    last_name: last_name,
    email: email,
    password: password
    // user__toke:csrfHash      

  }, function(data) {
   


    // console.log(data);



    $("#msg_register").html('<h1 class="alert alert-success">' + data + '</h1>');


    setTimeout(reloadPage, 5000);

    function reloadPage(){

      location.reload();

    }
   
    

  });





});





