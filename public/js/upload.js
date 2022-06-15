$('#file-upload').change(function() {
    var file = $('#file-upload')[0].files[0];
    var reader = new FileReader;
    reader.onload = function(e) {
      $('#demo').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
  });

  $('#file-upload1').change(function() {
    var file = $('#file-upload1')[0].files[0];
    var reader = new FileReader;
    reader.onload = function(e) {
      $('#demo1').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
  });

  // $('#date1').datetimepicker({
  //   date:null, //一開始輸入框的日期為空
  //   format: 'YYYY-MM-DD', //日期的顯示格式
  //   locale: moment.locale('zh-tw'), //國別
  //   daysOfWeekDisabled: [0, 6], //隱藏的天數0為周日6為星期六
  //   minDate: moment().add(1,'days'), //顯示最小天數
  //   maxDate: moment().add(30,'days'), //顯示最大天數，30為最大的顯示範圍為一個月為限
  //   disabledDates:
  //   [ //隱藏的日期
  //     moment().add(1,'days'), //前一日
  //     moment().add(2,'days'), //前二日
  //           '2021-10-10', //特別日期
  //           '2021-12-25'
  //   ]
  // });
