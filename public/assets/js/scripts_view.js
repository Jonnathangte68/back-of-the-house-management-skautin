$(document).ready(() => {
    $('[data-toggle="tooltip"]').tooltip();
});

$("#add-new-script-file").click(() => {
    $("#add_script_file_modal").modal("show");
});

clearPopup = () => {
    $("#file_name").val("");
    $("#page_id").val("");
};

$("#add_script_file_frm").submit(e => {
    e.preventDefault();
    clearPopup();
    $("#add_script_file_modal").modal("hide");
});

$(".edit-field").click(function() {
    const fileId = $(this)
        .parent()
        .parent()
        .data("file-id");
    console.log("edit file action...", fileId);
    if (fileId) {
        const replaceScreen = `/code-editor-view/${fileId}`;
        location.href = replaceScreen;
    }
});
