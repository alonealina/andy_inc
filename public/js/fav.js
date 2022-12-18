$(function() {
    // 1. 「全選択」する
    $('#all').on('click', function() {
      $("input[name='chk[]']").prop('checked', true);
    });
    $('#all_not').on('click', function() {
      $("input[name='chk[]']").prop('checked', false);
    });
});

