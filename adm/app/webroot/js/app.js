(function() {
    [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
        new CBPFWTabs(el);
    });
})();

$(document).ready(function() {
    var table = $('#myTable').DataTable({
        "language": {
            "lengthMenu": " Mostrando _MENU_  resultados por página",
            "zeroRecords": "Nenhum resultado encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem Registros",
            "infoFiltered": "(filtrando de _MAX_ total registros)",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "search" : 'Buscar',
            "previous" : 'Anterior'
        },
        "displayLength": 10
    });
});

$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

$(".js-tags-input").tagsinput('items');

$(".js-maxlength").each(function() {
    var a = jQuery(this);
    a.maxlength({
        alwaysShow: !!a.data("always-show"),
        threshold: a.data("threshold") ? a.data("threshold") : 10,
        warningClass: a.data("warning-class") ? a.data("warning-class") : "label label-warning",
        limitReachedClass: a.data("limit-reached-class") ? a.data("limit-reached-class") : "label label-danger",
        placement: a.data("placement") ? a.data("placement") : "bottom",
        preText: a.data("pre-text") ? a.data("pre-text") : "",
        separator: a.data("separator") ? a.data("separator") : "/",
        postText: a.data("post-text") ? a.data("post-text") : ""
    });
});

$('.summernote').summernote({
    height: 350, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor
    focus: false // set focus to editable area after initializing summernote
});

$('.inline-editor').summernote({
    airMode: true
});

window.edit = function() {
    $(".click2edit").summernote()
}, window.save = function() {
    $(".click2edit").summernote('destroy');
}

$('.dropify').dropify({
    messages: {
        default: 'Jogue o arquivo aqui, ou clique aqui',
        replace: 'Clique aqui para substituir',
        remove: 'Remover',
        error: 'Arquivo esgotou o limite permitido ( 2MB )'
    }
});

$(".fancybox").fancybox();

/* funções do jcrop */

// Create variables (in this scope) to hold the Jcrop API and image size
var jcrop_api, boundx, boundy;


function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB'];
    if (bytes == 0) return 'n/a';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
};

function updateInfo(e) {
    $('#x1').val(e.x);
    $('#y1').val(e.y);
    $('#x2').val(e.x2);
    $('#y2').val(e.y2);
    $('#w').val(e.w);
    $('#h').val(e.h);
};


function clearInfo() {
    $('.info #w').val('');
    $('.info #h').val('');
};


function fileSelectHandler() {

    // get selected file
    var oFile = $('#input-file-max-fs')[0].files[0];

    // preview element
    var oImage = document.getElementById('preview');

    if (oFile == undefined) {
        $('.step2').hide();
    }

    // prepare HTML5 FileReader
    var oReader = new FileReader();
        oReader.onload = function(e) {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = e.target.result;
        oImage.onload = function () { // onload event handler

            // display step 2
            $('.step2').fadeIn(500);

            $('.step2 h2').show();

            // display some basic image info
            var sResultFileSize = bytesToSize(oFile.size);
            $('#filesize').val(sResultFileSize);
            $('#filetype').val(oFile.type);
            $('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

            // destroy Jcrop if it is existed
            if (typeof jcrop_api != "undefined") {
                jcrop_api.destroy();
                jcrop_api = null;
                $('#preview').width(oImage.naturalWidth);
                $('#preview').height(oImage.naturalHeight);
            }

            setTimeout(function(){

                var aspect = $('#aspect').val();
                // initialize Jcrop
                $('#preview').Jcrop({
                    minSize: [32,32], // min crop size
                    setSelect:   [ ($('#preview').width() / 2) - 70, 
                       ($('#preview').height() / 2) - 70, 
                       ($('#preview').width() / 2) + 70, 
                       ($('#preview').height() / 2) + 70
                     ],
                    aspectRatio : aspect, // keep aspect ratio 1:1
                    bgFade: true, // use fade effect
                    bgOpacity: .3, // fade opacity
                    onChange: updateInfo,
                    onSelect: updateInfo,
                    onRelease: clearInfo
                }, function(){

                    // use the Jcrop API to get the real image size
                    var bounds = this.getBounds();
                    boundx = bounds[0];
                    boundy = bounds[1];

                    // Store the Jcrop API in the jcrop_api variable
                    jcrop_api = this;
                });
            },1000);

        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}

