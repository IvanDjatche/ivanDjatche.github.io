$(document).ready(function(){
    var table = $('#dataTable').DataTable();

    //display Edit Modal
    $('.edit_btn').on('click', function(){
        

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
           }).get();
alert(data);
            console.log(data);

            $('#Name').val(data[1]);
            $('#Prenom').val(data[2]);
            $('#Telephone').val(data[3]);
        
            $('#EditForm').attr('action', '/{{route(\'Utilisateur.update\',$utilisateurs->id)}}/' + data[0]);
            $('#ModalEdit{{$utilisateurs->id}}').modal('show');
    })
    
});


    
$(document).on('click','.edit_btn',function(){

 var userId = $(this).data('id');
 
 $('#u_Nom').val(userId);
 $('#u_Prenom').val(userId);
 $('#u_Telephone').val(userId);
 $('#u_Adresse').val(userId);
 $('#u_Ville').val(userId);
 $('#u_Sexe').val(userId);
 $('#u_DateNaiss').val(userId);
 $('#u_Email').val(userId);
 $('#u_Role').val(userId);
 $('#u_Passe').val(userId);

});


<script>

      

$('.edit_btn').on('click',function(e){
 e.preventDefault();

 // var idd = {{Js::from($utilisateurs)}};

 // var idd = e.target.id; 
 var idd =  $(this).data('id');
 alert(idd);
 $('#id').val(idd);
 $('#Nom').val(idd);
 $('#Prenom').val(idd); 
 $('#Telephone').val(idd.find('Telephone').text());
 $('#Adresse').val(idd.find('Adresse').text());
 // $('#Ville').val(userId.find('Ville').text());
 // $('#Sexe').val(userId.find('Sexe').text());
 // $('#DateNaiss').val(userId.find('DateNaiss').text());
 // $('#Email').val(userId.find('Email').text());
 // $('#Role').val(userId.find('Role').text());
 // $('#Passe').val(userId.find('Passe').text());

});

</script>
<script>
$(document).ready(function () {
$('#example').data( {
  select: true
});
});
</script>
