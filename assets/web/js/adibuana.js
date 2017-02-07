window.onload = function(){
    if(nama_halaman == 'beritadanpengumuman'){
        get_berita();
    }else if(nama_halaman == 'kegiatan'){
        get_kegiatan();
    }else if(nama_halaman == 'karir'){
        get_karir();
    }
}
$(document).ajaxStop($.unblockUI);
function get_berita(){
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

function get_kegiatan(){
$.ajax({
        method:'get',
        url:base_url+'kegiatan/'+kode_page,
        data:{page:hal_kegiatan},
        beforeSend:function(){
            $.blockUI({ message: $('.message-load-content') }); 
        },
        success:function(result){
            $('#kegiatan').html(result);
            pagination_button();
        }
    });   
}

function get_karir(){
$.ajax({
        method:'get',
        url:base_url+'karier/',
        data:{page:hal_karir},
        beforeSend:function(){
            $.blockUI({ message: $('.message-load-content') }); 
        },
        success:function(result){
            $('#karir').html(result);
            pagination_button();
        }
    });   
}

function pagination_button(){
    $('ul.pagination li a').on('click', function(e){
        e.preventDefault();
       
        if(nama_halaman == 'beritadanpengumuman'){
            hal_pengumuman = $(this).attr('nilai');
            get_berita();
        }else if(nama_halaman == 'kegiatan'){
            hal_kegiatan = $(this).attr('nilai');
            get_kegiatan();
        }else if(nama_halaman == 'karir'){
            hal_karir = $(this).attr('nilai');
            get_karir();
        }
        window.history.replaceState("Berita", "Berita", $(this).attr('href'));
            $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 1500);
    });
}