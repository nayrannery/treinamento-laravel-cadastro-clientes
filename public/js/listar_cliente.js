$(document).ready( function($){
    base_url = window.location.origin;
   var table = $("#cliente").DataTable({
    ajax: base_url+"/clientes/show",
    serverSide: true,
    reponsive:true,
    processing:true,
    searching: true,
    "order":[0,"desc"],
    columns: [
        {"width":"5%",data:"id",name:"id"},
        {"width":"25%",data:"nome",name:"nome"},
        {"width":"5%",data:"genero",name:"genero"},
        {"width":"15%",data:"cpf",name:"cpf"},
        {"width":"10%",data:"dataNasc",name:"dataNasc"},
        {"width":"20%",data:"email",name:"email"},
        {"width":"25%",data:"telefone",name:"telefone"},
        {"width":"15%",data:"acao",name:"acao"},
    ],
   });
   

   $(document).on("click", ".btnExcluir", function() {
        id = $(this).data('id')
        $.ajax({
            type: "delete",
            url: base_url + "/clientes/"+id,
            dataType: 'json',
            crossDomain: true,
            contentType: "application/json",
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
            success: function() {
                location.reload();
            },
            error: function() {
                alert("Não foi possível excluir!");
            }
        }); 
    });
});


