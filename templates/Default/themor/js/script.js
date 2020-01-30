$(function() {

  $('.login_check input[name=name]').on('input',function () {

    if(this.value.length > 1) {
      CheckLogin(); return false;
    }

  });

});