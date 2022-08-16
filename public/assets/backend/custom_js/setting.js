$(document).ready(function () {
    createEditor('ckeditor-classic-privacy');
    createEditor('ckeditor-classic-terms');
});
function createEditor(id){
    ClassicEditor.create(document.querySelector("#"+id))
        .then( editor => {
            window.editor = editor;
            editor.ui.view.editable.element.style.height="200px";
            editor.model.document.on( 'change:data', () => {
                $( '#' + id).text(editor.getData());
            } );
        } )
        .catch(function(e){console.error(e)});
}

