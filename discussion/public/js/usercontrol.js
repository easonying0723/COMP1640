$('#usercontrolTable').DataTable({//call table id

   //retrieve: true,
   //scrollCollapse: true,
   scroll: true,
   responsive: true,
   searching: true,
   paging: true,
   
   columnDefs: [ {
      targets: 6,
      data: null,
      defaultContent:'<input type="checkbox" id="userstatus" data-toggle="toggle" data-on="On" data-off="Off" data-size="sm" checked required>'
      },
   
   {
      targets: -1,
      data: null,
      defaultContent: '<button class="btn btn-light" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="bx bx-trash"></i></button>'
   }],
   
   });
   
   $('#createusercontrol').on( 'click',function () {
   $("#successModal").modal("show");
   });

   $('#createusercontrol').on( 'click',function () {
   $("#exampleModal").modal("hide");
   });
