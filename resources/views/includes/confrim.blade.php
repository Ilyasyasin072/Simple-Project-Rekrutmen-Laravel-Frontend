<script type="text/javascript">
$('.delete-btn').on('click', function(e){
    e.preventDefault();
    var self = $(this);
    var judul = $(this).attr("data-penerima");
    var formid = $(this).attr("data-formid");
    swal({
        title: "DELETE",
        text: "Hapus Data Buku : "+status+" ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#D9534f",
        confirmButtonText: "Yes, delete!",
        closeOnConfirm: true
    },
    function(){
        $("#"+formid).submit();
    });
});
</script>
