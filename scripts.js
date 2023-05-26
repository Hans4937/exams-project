 //no clue if this does anything or not
 function redirectToPage(page) {
    window.location.href = page;
}


//don't delete
//clears the text fields when you click on them
function clearPlaceholder(textarea) {
  textarea.value = "";
}


function adjustTextareaHeight(textarea) {
  var rows = textarea.value.split("\n").length + 1;
  textarea.rows = rows;
}