//sidebar button
$('.sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

//sidenav param
var storage_menu = localStorage.getItem("storage_menu");
var storage_menu_2 = localStorage.getItem("page_menu");

//class active menu
if(storage_menu=="sipioner" && storage_menu_2=="izinData"){
    $("#izinData").addClass("activeMenu");
}else if (storage_menu=="sipioner" && storage_menu_2=="izinDataStatus"){
    $("#izinDataStatus").addClass("activeMenu");
}else if (storage_menu=="sipioner" && storage_menu_2=="izinIkuStatus"){
    $("#izinIkuStatus").addClass("activeMenu");
}else if (storage_menu=="simduk" && storage_menu_2=="pendudukData"){
    $("#pendudukData").addClass("activeMenu");
}else if (storage_menu=="simduk" && storage_menu_2=="pendudukDataKk"){
    $("#pendudukDataKk").addClass("activeMenu");
}else if (storage_menu=="simduk" && storage_menu_2=="pendudukDataUsia"){
    $("#pendudukDataUsia").addClass("activeMenu");
}else if (storage_menu=="simduk" && storage_menu_2=="pendudukDataRasio"){
    $("#pendudukDataRasio").addClass("activeMenu");
}else if (storage_menu=="simduk" && storage_menu_2=="pendudukDataPekerjaan"){
    $("#pendudukDataPekerjaan").addClass("activeMenu");
}else if (storage_menu=="simduk" && storage_menu_2=="pendudukDataPendidikan"){
    $("#pendudukDataPendidikan").addClass("activeMenu");
}else if (storage_menu=="simsaraswati" && storage_menu_2=="kemiskinanData"){
    $("#kemiskinanData").addClass("activeMenu");
}else if (storage_menu=="simsaraswati" && storage_menu_2=="kemiskinanAngka"){
    $("#kemiskinanAngka").addClass("activeMenu");
}else if (storage_menu=="simsaraswati" && storage_menu_2=="kemiskinanDataBps"){
    $("#kemiskinanDataBps").addClass("activeMenu");
}

//sidenav efek after move page
if(storage_menu=="sipioner"){
    $("#indi_daerah").removeClass("list-unstyled collapse"); 
    $("#indi_daerah").addClass("list-unstyled collapse in");
    $("#indi_daerah_effect").attr('aria-expanded', 'true');

    $("#izinmenu").removeClass("collapse");
    $("#izinmenu").addClass("collapse in");
    $("#izinmenu_effect").attr('aria-expanded', 'true');

    $("#kependudukanmenu").removeClass("collapse in");
    $("#kependudukanmenu").addClass("collapse");
    $("#kependudukanmenu_effect").attr('aria-expanded', 'false');

    $("#kemiskinanmenu").removeClass("collapse in");
    $("#kemiskinanmenu").addClass("collapse");
    $("#kemiskinanmenu_effect").attr('aria-expanded', 'false');

}else if (storage_menu=="simduk"){
    $("#indi_daerah").removeClass("list-unstyled collapse"); 
    $("#indi_daerah").addClass("list-unstyled collapse in");
    $("#indi_daerah_effect").attr('aria-expanded', 'true');

    $("#kependudukanmenu").removeClass("collapse");
    $("#kependudukanmenu").addClass("collapse in");
    $("#kependudukanmenu_effect").attr('aria-expanded', 'true');

    $("#izinmenu").removeClass("collapse in");
    $("#izinmenu").addClass("collapse");
    $("#izinmenu_effect").attr('aria-expanded', 'false');

    $("#kemiskinanmenu").removeClass("collapse in");
    $("#kemiskinanmenu").addClass("collapse");
    $("#kemiskinanmenu_effect").attr('aria-expanded', 'false');
    
}else if (storage_menu=="simsaraswati"){
    $("#indi_daerah").removeClass("list-unstyled collapse"); 
    $("#indi_daerah").addClass("list-unstyled collapse in");
    $("#indi_daerah_effect").attr('aria-expanded', 'true');

    $("#kemiskinanmenu").removeClass("collapse");
    $("#kemiskinanmenu").addClass("collapse in");
    $("#kemiskinanmenu_effect").attr('aria-expanded', 'true');

    $("#izinmenu").removeClass("collapse in");
    $("#izinmenu").addClass("collapse");
    $("#izinmenu_effect").attr('aria-expanded', 'false');

    $("#kependudukanmenu").removeClass("collapse in");
    $("#kependudukanmenu").addClass("collapse");
    $("#kependudukanmenu_effect").attr('aria-expanded', 'false');
}