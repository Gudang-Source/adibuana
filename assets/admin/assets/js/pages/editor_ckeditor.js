/* ------------------------------------------------------------------------------
*
*  # CKEditor editor
*
*  Specific JS code additions for editor_ckeditor.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Full featured editor
    var editor1 = CKEDITOR.replace( 'editor-full', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor1, '../' );
    var editor2 = CKEDITOR.replace( 'editor-full-2', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor2, '../' );
    var editor3 = CKEDITOR.replace( 'editor-full-3', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor3, '../' );
    var editor4 = CKEDITOR.replace( 'editor-full-4', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor4, '../' );
    var editor5 = CKEDITOR.replace( 'editor-full-5', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor5, '../' );
    var editor6 = CKEDITOR.replace( 'editor-full-6', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor6, '../' );
    var editor6 = CKEDITOR.replace( 'editor-full-7', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor6, '../' );
    var editor6 = CKEDITOR.replace( 'editor-full-8', {
        height: '300px',
        extraPlugins: 'forms',
        filebrowserBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : base_url+'assets/admin/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : base_url+'assets/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor6, '../' );



    // Readonly editor
    // ------------------------------

    // Setup
    var editor = CKEDITOR.replace('editor-readonly', {
        height: '400px'
    });

    // The instanceReady event is fired, when an instance of CKEditor has finished its initialization.
    CKEDITOR.on('instanceReady', function (ev) {

        // Show this "on" button.
        document.getElementById('readOnlyOn').style.display = '';

        // Event fired when the readOnly property changes.
        editor.on('readOnly', function() {
            document.getElementById('readOnlyOn').style.display = this.readOnly ? 'none' : '';
            document.getElementById('readOnlyOff').style.display = this.readOnly ? '' : 'none';
        });
    });

    // Toggle state
    function toggleReadOnly(isReadOnly) {
        editor.setReadOnly(isReadOnly);
    }
    document.getElementById('readOnlyOn').onclick=function(){ toggleReadOnly() }
    document.getElementById('readOnlyOff').onclick=function(){ toggleReadOnly(false) }



    // Enter key configuration
    // ------------------------------

    // Define editor
    var editor2;

    // Setup editor
    function changeEnter() {
        // If we already have an editor, let's destroy it first.
        if (editor2)
            editor2.destroy(true);

        // Create the editor again, with the appropriate settings.
        editor2 = CKEDITOR.replace('editor-enter', {
            height: '400px',
            extraPlugins: 'enterkey',
            enterMode: Number(document.getElementById('xEnter').value),
            shiftEnterMode: Number(document.getElementById('xShiftEnter').value)
        });
    }

    // Run on indow load
    window.onload = changeEnter;

    // Change configuration
    document.getElementById('xEnter').onchange=function(){changeEnter()}
    document.getElementById('xShiftEnter').onchange=function(){changeEnter()}

    // We are using Select2 selects here
    $('.select').select2({
        minimumResultsForSearch: '-1'
    })



    // Inline editor
    // ------------------------------

    // We need to turn off the automatic editor creation first
    CKEDITOR.disableAutoInline = true;

    // Attach editor to the area
    var editor3 = CKEDITOR.inline('editor-inline');
    
});
