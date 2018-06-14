// function openNav() {
//     document.getElementById("myNav").style.width = "100%";
// }
// var moreId = '';
// var cur = '';
// $('.more-info').click(function () {
//     $('#myNav').css('width', '100%');
//     // moreId = $(this).attr("id").replace('more-', '');
//     var currentId = $(this).closest('tr').attr('id');
//     getCurrentInformation2(currentId);
//     alert(currentId.toString());
//
// });
// var EditId = '';
// $('.btn-edit').click(function () {
//     EditId = $(this).attr('id').replace('edit-', '');
//     $("#modal_edit").modal('show');
//     alert(EditId);
// });




function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});