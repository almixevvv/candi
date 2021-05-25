/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/generalFunction.js ***!
  \*****************************************/
//HEADER BUAT LOCALHOST
var getUrl = window.location;
window.baseUrl = getUrl.protocol + '//' + getUrl.host + '/' + getUrl.pathname.split('/')[1] + '/'; //Check for empty value in form

window.checkEmptyForm = function (form) {
  var formValue = $(form).find(':input').not('button');
  var emptyCounter = 0; //Check for empty value section

  formValue.each(function (index) {
    var curValue = $(this).val();
    var curOptions = $(this).find(':selected').val();

    if (curValue.length == 0 || curOptions == 'none') {
      emptyCounter++;
      var siblingCount = $(this).siblings('.alert').length;

      if (siblingCount == 0) {
        $(this).after("\n                 <div class=\"mt-2 mb-2 alert alert-danger\" role=\"alert\">\n                 Cannot be empty!\n                 </div>\n             ");
      }
    } else if (curValue.length != 0 || curOptions != 'none') {
      $(this).next('.alert').remove();
    }
  });

  if (emptyCounter != 0) {
    return false;
  } else if (emptyCounter == 0) {
    return true;
  }
};
/******/ })()
;