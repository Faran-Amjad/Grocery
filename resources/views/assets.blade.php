<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

{{-- CKEDITOR --}}
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor', {
        filebrowserUploadUrl: "",
        filebrowserUploadMethod: 'form'
    });
</script>

{{-- DATATABLES --}}
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.js"></script>

{{-- Select2  --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{{-- NOTIFY --}}

<link rel="stylesheet" href="{{asset('public/assets/css/notifIt.min.css')}}" />
<script src="{{asset('public/assets/js/notifIt.min.js')}}"></script>

{{-- FONT AWSOME --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

{{-- ALERTS --}}
<script>
    $(document).ready(function(){

        @if (session('errors'))
            let xx = {!! session('errors') !!}
            console.log(xx)
            let msg = ''
            for(const [k, v ] of Object.entries(xx)){
                msg += v[0] +" <br> ";
            }

            notify(msg, 'info', 1);
        @endif

        @if (session('success'))

            notify("{{session('success')}}", 'success');
        @endif

        @if (session('error'))

            notify("{{session('error')}}", 'warning');
        @endif
    });

    function notify(text, type="success", multiline= 0, position="right", duration=3000){
        notif({
            msg : text,
            type: type,
            position: position,
            autohide: false,
            timeout: duration,
            animation:'slide',
            multiline: multiline ,
            zindex: 9999
        })
    }
</script>

<style>
    #DataTables_Table_0_filter{
        text-align: right !important
    }
</style>