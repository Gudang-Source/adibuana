// kkn

$('select[name=prodi]').on('change', function(){
    var prodi = $(this).val();
    get_fakultas(prodi);
    get_nomor_urut_kkn(prodi);
    if(prodi == 'Pendidikan Kesejahteraan Keluarga'){
        set_konsentrasi();
        $('#konsentrasi').show();
        $('#konsentrasi').prev().show();
    }else{
        unset_konsentrasi();
        $('#konsentrasi').hide();
        $('#konsentrasi').prev().hide();
    }
});

var cekform = false;
$('#previewkkn').on('click', function(){
    if(!cekform){
        if($('input[name=nim]').val() == ""){
            alert("NIM Wajib Diisi");
            $('input[name=nim]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

        if($('input[name=nama]').val() == ""){
            alert("Nama Wajib Diisi");
            $('input[name=nama]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

        if($('input[name=angkatan]').val() == ""){
            alert("Angkatan Wajib Diisi");
            $('input[name=angkatan]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

        if($('input[name=kelas]').val() == ""){
            alert("Kelas Wajib Diisi");
            $('input[name=kelas]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

        if($('input[name=tempat_lahir]').val() == ""){
            alert("Tempat Lahir Wajib Diisi");
            $('input[name=tempat_lahir]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

        if($('input[name=tanggal_lahir]').val() == ""){
            alert("Tanggal Lahir Wajib Diisi");
            $('input[name=tanggal_lahir]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

        if($('input[name=kec]').val() == ""){
            alert("Kecamatan Wajib Diisi");
            $('input[name=kec]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

        if($('input[name=kota]').val() == ""){
            alert("Kota Wajib Diisi");
            $('input[name=kota]').focus();
            cekform = false;
            return;
        }else{
            cekform = true;
        }

    }

    if(cekform){
        form_to_view_kkn();
        $('#kknModal').modal('show');
    }
});
get_fakultas($('select[name=prodi]').val());

function get_fakultas(prodi){
    $.ajax({
        url:base_url+'ajax/get_fakultas',
        method:'get',
        data:{prodi:prodi},
        beforeSend:function(){
            $('.daftarkkn').block({message:'<p><img src="http://malsup.com/jquery/block/busy.gif" /> Mengambil Data...</p>'}) 
        },
        success:function(res){
            $('.daftarkkn').unblock();
            var faculty = JSON.parse(res);
            if(faculty['success']){
                $('input[name=fakultas]').val(faculty['data']['title_ina']);
            }
        }
    });
}

$('input[name=nim]').on('change', function(){
    cek_nim($(this).val());
});
function cek_nim(nim){
    $.ajax({
        url:base_url+'ajax/cek_nim_kkn',
        method:'get',
        data:{nim:nim},
        beforeSend:function(){
            $('.daftarkkn').block({message:'<p><img src="http://malsup.com/jquery/block/busy.gif" /> Cek NIM Anda</p>'})

        },
        success:function(res){
            $('.daftarkkn').unblock();
            var result = JSON.parse(res);
            console.log(result['success']);
            if(result['success'] == true){

            }else{
                alert("NIM Anda Sudah Terdaftar. Apabila anda merasa belum mendaftar, silahkan hubungi bagian IT");
                $('input[name=nim]').focus();
                $('input[name=nim]').val("");
                return;
            }
        }
    })
}

$('select[name=view_konsentrasi]').on('change', function(){
    set_konsentrasi();
});

function set_konsentrasi(){
    $('input[name=konsentrasi]').val($('select[name=view_konsentrasi]').val());
}
function unset_konsentrasi(){
    $('input[name=konsentrasi]').val("");
}

get_nomor_urut_kkn($('select[name=prodi]').val());

function get_nomor_urut_kkn(prodi){
    $.ajax({
        url:base_url+'ajax/get_nomor_urut_kkn',
        method:'get',
        data:{prodi:prodi},
        beforeSend:function(){
            $('.daftarkkn').block({message:'<p><img src="http://malsup.com/jquery/block/busy.gif" /> Mengambil Data...</p>'})
        },
        success:function(res){
            $('.daftarkkn').unblock();
            var result = JSON.parse(res);
            if(result['success']){
                var nourut = result['data'];
                $('input[name=no_urut]').val(nourut);
            }
        }
    })
}

function form_to_view_kkn(){
    $('#value_nim').text($('input[name=nim]').val());
    $('#value_nama').text($('input[name=nama]').val());
    $('#value_fakultas').text($('input[name=fakultas]').val());
    $('#value_prodi').text($('select[name=prodi]').val());
    $('#value_angkatan').text($('input[name=angkatan]').val());
    $('#value_kelas').text($('input[name=kelas]').val());
    $('#value_jenkel').text($('select[name=jenkel]').val());
    $('#value_agama').text($('select[name=agama]').val());
    $('#value_tempatlahir').text($('input[name=tempat_lahir]').val());
    $('#value_tanggallahir').text($('input[name=tanggal_lahir]').val());
    $('#value_alamatasal').text($('textarea[name=alamat_asal]').val());
    $('#value_alamatsekarang').text($('textarea[name=alamat_sekarang]').val());
    $('#value_kecamatan').text($('input[name=kec]').val());
    $('#value_kota').text($('input[name=kota]').val());
    $('#value_nohp').text($('input[name=nomorhp]').val());
    $('#value_statuskerja').text($('select[name=status_kerja]').val());
    $('#value_ukuranjaket').text($('Select[name=jaket]').val());
    $('#nourut span').text($('input[name=no_urut]').val());

    if($('input[name=konsentrasi]').val() != ""){
        $('#value_konsentrasi').text(' - '+$('input[name=konsentrasi]').val());
    }

}

function printKKN(){
   $('form[name=kkn]').submit();
}