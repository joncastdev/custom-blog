// tablas

// $("button").click(function(){
//     $("p").toggle();
//   });

// $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
//     $("body").toggleClass("sidebar-toggled");
//     $(".sidebar").toggleClass("toggled");
//     if ($(".sidebar").hasClass("toggled")) {
//       $('.sidebar .collapse').collapse('hide');
//     };
//   });

// declaro la variable afuera de las funciones, por que si declaro
// adentro de las funciones esta fuera del scope
var table;

$.ajax({
	url  : BASE_URL + 'leads/leadstable',
	// dataType: 'json',
  type: 'POST',
  cache: false,
  success :  function(result)
  {		
   table = $('#leads').DataTable({
			// "searching": false, //esta es la propiedad para el filtrado
			"bProcessing": true,
			// rowId: 'staffId',
			data: result,               
			columns: [
			     // '<img src=" ' + BASE_URL + 'uploads/thumbnails/' + result.img + ' " class="img-responsive img-circle" />'           
                // { "mData": "BASE_URL" },
                // { "data": "id_lead" },
                // { "data": "img" },
                {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido

                     return '<img src=" ' + BASE_URL + 'uploads/thumbnails/' + data.img + ' " class="img-responsive img-circle" />';
                   }},
                // { "sDefaultContent": BASE_URL + result[0].email },               
                { "data": "first_name" },
                { "data": "last_name" },
                { "data": "company" },
                { "data": "email" },              
                { "data": "country" },
                { "data": "state" },
                {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido
                	// return '<button type="button" value="id_lead" id="editar" class="editar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> Editar</span></button>';
               // return '<a type="button" id="editar" class="btn btn-info"><span class="fa fa-edit"></span><span class="hidden-xs"> Editar</span></a';
                 // return '<a href="'+ data.id_lead +'">'+ data.id_lead +'</a>';
                 return '<a class="btn btn-info" href="'+ data.id_lead +'"><span class="far fa-eye"></span></a>';
               }},
                   // {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido

                   //   return '<a class="btn btn-success" href="'+ data.id_lead +'"><span class="fas fa-edit"></span></a>';
                   // }},
                   // {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido

                   //   return '<a class="btn btn-danger" onclick="deleteLead('+ data.id_lead +')" ><span class="fas fa-trash-alt"></span</a>';
                   // }},

                  

                // { "data": null, "render": 'position' }
                // "render": function ( data, type, row, meta ) {
                // 	return '<a href="'+data+'">Download</a>';
                // }
                // { "data": "img","[, ].name"}
                // { "sDefaultContent": "<button type='submit' class='btn btn-primary btn-user btn-block'>View</button>" },
                // { "sDefaultContent": "<button type='submit' class='btn btn-success btn-user btn-block'>Edit</button>"  },
                // { "sDefaultContent": "<button type='submit' class='btn btn-danger btn-user btn-block'>Delete</button>" }
                ],


            });//end table

        // table.ajax.reload();


        // table.destroy();





		// editar("#leads tbody",datatable);

    // reloadTable(table);


	}
});

// table.ajax.reload(null,false);

// $('#leads').DataTable().ajax.reload();
// table.ajax.reload();


// function reloadTable(params){

//   // table.ajax.reload(null,false);

//   params.ajax.reload();

//   // console.log(params);
// }

// console.log(reloadTable());

//leads add
$("#leadsAdd").submit(function(event) {
  event.preventDefault();



  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var company = $("#company").val();
  var email = $("#email").val();
  var street = $("#street").val();
  var country = $("#country").val();
  var city = $("#city").val();
  var state = $("#state").val();
  var postal_code = $("#postal_code").val(); 
  var title = $("#title").val();
  var phone = $("#phone").val();
  var cell_phone = $("#cell_phone").val();
  var source = $("#source").val();
  var sector = $("#sector").val();
  var income = $("#income").val();
  var fax = $("#fax").val();
  var website = $("#website").val();
  var state_client = $("#state_client").val()
  var quantity_worker = $("#quantity_worker").val();
  var qualification = $("#qualification").val();
  var id_skype = $("#id_skype").val();
  var id_twiiter = $("#id_twiiter").val();
  var description = $("#description").val();

  // console.log(role);

  $.post(BASE_URL + 'leads/register',
  {
    first_name: first_name,
    last_name: last_name,
    email: email,
    company: company,
    street: street,   
    country: country,
    city: city,
    state: state,
    postal_code: postal_code,
    title: title,
    phone: phone,
    cell_phone: cell_phone,
    source: source,
    sector: sector,
    income: income,
    fax: fax,
    website: website,
    state_client: state_client,
    quantity_worker: quantity_worker,
    qualification: quantity_worker,
    id_skype: id_skype,
    id_twiiter: id_twiiter,
    description:description
    
  }, function(data) {
    /*optional stuff to do after success */

    var par = JSON.parse(data);

    // console.log(data);

    $("#msg_first_name").html(par.msg_first_name);
    $("#msg_last_name").html(par.msg_last_name);

    $("#msg_success").html(par.msg_success);

    // table.ajax.reload(null,false);

      // console.log(par);

      // console.log(table);

      // table.ajax.reload();

      // $('#leads').DataTable().ajax.reload();

      // table = $("#leads").DataTable();

      // table.ajax.reload();

    //   setInterval( function () {
    //     table.ajax.reload();
    // }, 30000 );



     //if (par.msg_success == "Register success") {     
      //window.location=BASE_URL + 'leads';
    //}     

  });





});



function deleteLead(params)
{

    // swal("Hola mundo!");

    // console.log(params);
    // console.log(dos);

    // if (datos === 'admin') {

    //   isAdministrator();

    // }




    swal({
      title: 'Are you sure to delete this record?',
      text: 'There is no way back!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      confirmButtonText: 'You accept?',
      cancelButtonColor: '#d33'    

    }).then(function(result) {      

         // verificamos si ahy resultados
         if (result) {

          confirmDelete(params);

        }

      }, function(err) {   

      });

  }

  // funcion para ir a la ruta para eliminar
  function confirmDelete(params)
  {

    // window.location=BASE_URL + 'leads/deleteLead/' + params;

    // // cargo los countrys con ajax
    $.ajax({
      url: BASE_URL+'leads/deletelead/' + params,   
      dataType: 'json'    
    })
    .done(function(result) {

        // table.ajax.reload();

        console.log(result);

        // table.ajax.reload(); 


      });



  }






// editar("#leads tbody",datatable);




// var editar = function(tbody, table){
//   $(tbody).on("click","button.editar", function(){
//     if(table.row(this).child.isShown()){
//         var data = table.row(this).data();
//     }else{
//         var data = table.row($(this).parents("tr")).data();
//     }
//     $('#editar_id').val(data[0]);
//     $('#editar_nombres').val(data[1]);
//     $('#editar_des').val(data[2]);

//     $('#ModalEditar').modal('show');
//     $("#editar_nombres").first().focus();
//   })
// }










// aaData: es la data que traemos del ajax
// aoColumns: son las columnas con la data
// mData: es la data a mostrar en cada columna los valores
// sDefaultContent : ponemos cualquier contenido por default
// sTitle: para poner un titulo

// $.ajax({
// 	url  : BASE_URL + 'users/userstable',
// 	dataType: 'json',
// 	cache: false,
// 	success :  function(result)
// 	{           
// 		// console.log(result); 
// 		// console.log(typeof(result));
// 		$('#users').DataTable({
// 			// "searching": false, //esta es la propiedad para el filtrado
// 			"bProcessing": true,
// 			"aaData": result,               
// 			"aoColumns": [
// 			     // '<img src=" ' + BASE_URL + 'uploads/thumbnails/' + result.img + ' " class="img-responsive img-circle" />'           
//                 // { "mData": "BASE_URL" },
//                 { "mData": "img" },
//                 // { "sDefaultContent": BASE_URL + result[0].email },
//                 { "mData": "first_name" },
//                 { "mData": "last_name" },
//                 { "mData": "email" },
//                 { "mData": "role" },
//                 { "mData": "country" },
//                 { "mData": "state" },
//                 { "sDefaultContent": "<button type='submit' class='btn btn-primary btn-user btn-block'>View</button>" },
//                 { "sDefaultContent": "<button type='submit' class='btn btn-success btn-user btn-block'>Edit</button>"  },
//                 { "sDefaultContent": "<button type='submit' class='btn btn-danger btn-user btn-block'>Delete</button>" }

//                 ]

//             });
// 	}
// });


// esta forma tambien funciona con data o mData es lo mismo
// $.ajax({
// 	url  : BASE_URL + 'users/userstable',
// 	dataType: 'json',
// 	cache: false,
// 	success :  function(result)
// 	{



// 	           var i;
// 	           var bu = "";
// 	           for (i = 0; i < result.length; i++) {
// 	           	// text += cars[i] + "<br>";
// 	           	// console.log(result[i].id_user);
// 	           	// bu += result[i].id_user + "<br>";
// 	           		bu += result[i].id_user;
// 	           }

// 	           // console.log(bu);           
// 		// console.log(result); 
// 		// console.log(typeof(result));
// 		// var o = JSON.parse(result);
// 		$('#users').DataTable({
// 			// "searching": false, //esta es la propiedad para el filtrado
// 			"bProcessing": true,
// 			// rowId: 'staffId',
// 			data: result,               
// 			columns: [
// 			     // '<img src=" ' + BASE_URL + 'uploads/thumbnails/' + result.img + ' " class="img-responsive img-circle" />'           
//                 // { "mData": "BASE_URL" },
//                 { "data": "img" },
//                 // { "sDefaultContent": BASE_URL + result[0].email },
//                 { "data": "first_name" },
//                 { "data": "last_name" },
//                 { "data": "email" },
//                 { "data": "role" },
//                 { "data": "country" },
//                 { "data": "state" },
//                 { "sDefaultContent": "<button type='submit' class='btn btn-primary btn-user btn-block'>View</button>" },
//                 { "sDefaultContent": "<button type='submit' class='btn btn-success btn-user btn-block'>Edit</button>"  },
//                 { "sDefaultContent": "<button type='submit' class='btn btn-danger btn-user btn-block'>Delete</button>" }

//                 ]

//             });
// 	}
// });





// respaldo
// $.ajax({
// 	type : 'POST',
// 	url  : BASE_URL + 'users/userstable',
// 	dataType: 'json',
// 	cache: false,
// 	success :  function(result)
// 	{
//             //pass data to datatable
//             console.log(result); // just to see I'm getting the correct data.
//             console.log(typeof(result))
//             $('#users').DataTable({
//                 "searching": false, //this is disabled because I have a custom search.
//                 "bProcessing": true,
//                 "aaData": result, //here we get the array data from the ajax call.
//                 // "aaSorting": [0, 'asc'],
//                 "aoColumns": [
//                 // null,
//                 // null,
//                 // null,
//                 // {
//                 // 	"mData": "first_name"
//                 // 	// "sDefaultContent": "Edit"
//                 // }
//                 { "mData": "first_name" },
//                 { "mData": "last_name" }

//                 // { "sTitle": "first_name" },
//                 // { "sTitle": "last_name" }

//                 ] //this isn't necessary unless you want modify the header
//                   //names without changing it in your html code. 
//                   //I find it useful tho' to setup the headers this way.
//               });
//         }
//     });




// ejemplo funciona
// $(document).ready(function() { 
//     $('#users').DataTable({       
//         "ajax": {
//             url : BASE_URL + 'users/testeando',
//             type : 'GET'
//         },

//     });
// });



// $(document).ready(function() {
// 	$('#users').DataTable( {
// 		"processing": true,
//         "serverSide": true,
// 		"ajax": BASE_URL + 'users/userstable',
// 		"columns": [
// 		{ "data": "first_name" },
// 		{ "data": "last_name" },
// 		{ "data": "email" },
// 		{ "data": "role" },
// 		{ "data": "state" }		
// 		]
// 	} );
// } );



// $(document).ready(function() { 
// 	$('#users').DataTable({
// 		// "scrollX": false      


// 	});

// });

// // cargo los countrys con ajax
// $.ajax({
// 	url: BASE_URL + 'users/userstable'   
// 	// dataType: 'json'    
// })
// .done(function(data) {

// 	// console.log(data);

// 	// console.log(url);

// 	// console.log(data[0].id_user);

// 	// var par = JSON.parse(data);

// 	// console.log(par);

// 	 // $("li").each(function(){
//   //   alert($(this).text())
//   // });

// 	// $('#users').DataTable( {		
// 	// 	"columns": [
// 	// 	{ data: first_name },
// 	// 	{ data: last_name }

// 	// 	]
// 	// } );


// });
