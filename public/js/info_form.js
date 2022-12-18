let info_another = document.getElementById("info_another");

$('#info_check').on('click', function() {
    if (this.checked) {
        info_another.hidden = true;
    } else {
        info_another.hidden = false;
    }
});