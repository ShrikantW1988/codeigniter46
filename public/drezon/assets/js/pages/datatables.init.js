$(document).ready(function(){$("#datatable").DataTable();var a=$("#datatable-buttons").DataTable({lengthChange:!1,buttons:["copy","excel","pdf","colvis"]});a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$("#selection-datatable").DataTable({select:{style:"multi"}}),$("#key-datatable").DataTable({keys:!0}),a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$("#alternative-page-datatable").DataTable({pagingType:"full_numbers"}),$("#scroll-vertical-datatable").DataTable({scrollY:"350px",scrollCollapse:!0,paging:!1}),$("#scroll-horizontal-datatable").DataTable({scrollX:!0}),$("#complex-header-datatable").DataTable({columnDefs:[{visible:!1,targets:-1}]}),$("#row-callback-datatable").DataTable({createdRow:function(a,t,e){15e4<+t[5].replace(/[\$,]/g,"")&&$("td",a).eq(5).addClass("text-danger")}}),$("#state-saving-datatable").DataTable({stateSave:!0})});