window.onload = function(){
    get_berita();
}

function get_berita(){
    $(document).ajaxStop($.unblockUI);
    $.ajax({
        method:'get',
        url:base_url+'berita-dan-pengumuman/berita-kampus/'+kode_page,
        data:{page:hal_pengumuman},
        beforeSend:function(){
            $.blockUI({ message: $('.message-load-content') }); 
        },
        success:function(result){
            $('#beritadanpengumuman').html(result);
            pagination_button();
        }
    });
}
function pagination_button(){
    $('ul.pagination li a').on('click', function(e){
        e.preventDefault();

        hal_pengumuman = $(this).attr('nilai');
        get_berita();
        window.history.replaceState("Berita", "Berita", $(this).attr('href'));
            $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 1500);
    });
}