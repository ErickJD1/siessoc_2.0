$(document).ready(function () {
  swal({
       title: "¿Estas seguro que deseas eliminar este registro?",
       text: "Si eliminas este registro, no podras recuperarlo",
       type: "warning",
       showCancelButton: true,
       confirmButtonColor: '#DD6B55',
       confirmButtonText: '¡Si, estoy seguro!',
       cancelButtonText: "Cancelar",
       closeOnConfirm: true,
       closeOnCancel: true
   },
   function(isConfirm) {
       if (isConfirm) {
         document.form.submit();
         }
   });
});
