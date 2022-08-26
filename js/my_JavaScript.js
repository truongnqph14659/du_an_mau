
function $(selector) {
    const selectors = document.querySelectorAll(selector);
    return selectors.length === 1 ? selectors[0] : selectors;
}

function checked_all() {
    for(var i = 0; i<$('.form-check-input').length;i++){
        $('.form-check-input')[i].checked = true;
    }
    // $('.form-check-input').forEach(selector => {
    //     selector.checked = true
    //     console.log(selector)
    // });
}

function quit_checked_all() {
    $('.form-check-input').forEach(selector => {
        selector.checked = false
    });
}

$("#select_all").addEventListener('click', (event) => {
    event.preventDefault();
    checked_all();
})
$("#remove_select").addEventListener('click', (event) => {
    event.preventDefault();
    quit_checked_all()
})

function check_delete(evt) {
    let confirm_value = confirm('are you sure to delete value!')
    if (!confirm_value) {
        return evt.preventDefault();
    }
}

$("#delete_all").addEventListener('click', check_delete)
$("#delete_one_row").forEach(selector => selector.addEventListener('click', check_delete))

