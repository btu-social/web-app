function dataTableLanguage() {
    return {
        "decimal": "",
        "emptyTable": "Tablo içerisinde herhangi bir veri bulunamadı.",
        "info": "_TOTAL_ kayıt içinden _START_-_END_ arası gösteriliyor.",
        "infoEmpty": "0 kayıt içinden 0-0 arası gösteriliyor.",
        "infoFiltered": "(Toplam _MAX_ kayıttan filtrelendi)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Her sayfa için _MENU_ veri gösteriliyor.",
        "loadingRecords": "Yükleniyor...",
        "processing": "İşleniyor...",
        "search": "Ara:",
        "zeroRecords": "Üzgünüm. Herhangi bir veri bulunamadı.",
        "paginate": {
            "first": "İlk",
            "last": "Son",
            "next": "Sonraki",
            "previous": "Önceki"
        },
        "aria": {
            "sortAscending": ": Artan Sırada",
            "sortDescending": ": Azalan Sırada"
        },
    }
}

$(document).ready( function () {
    if(![undefined, null].includes(document.querySelector('#data-table')))
        $('#data-table').DataTable({
            language: dataTableLanguage(),
            responsive: true
        })
} )