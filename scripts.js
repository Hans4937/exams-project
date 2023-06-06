 //no clue if this does anything or not
 function redirectToPage(page) {
    window.location.href = page;
}

//clears the text fields when you click on them on contact us form
function clearPlaceholder(textarea) {
  textarea.value = "";
}

//adjusts the textareaheight on the contact us form
//does not work currently
function adjustTextareaHeight(textarea) {
  var rows = textarea.value.split("\n").length + 1;
  textarea.rows = rows;
}