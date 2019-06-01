$(function() {
  var STATUS = [
    { cname: 'draw', comment: 'Oops, DRAW ....' },
    { cname: 'lose', comment: 'Hee-Hee, YOU LOSE.' },
    { cname: 'win', comment: 'Oh Dear, YOU WIN.' }
  ];
  var $com_weapon = $('#com .weapon');
  var $you_weapon = $('#you .weapon');
  var $res_filed = $('#console .result');
  var resetTimer;
  var damage;

  init();

  function init() {
    $you_weapon
      .mouseover(function(_e) {
        $(this).addClass('ov');
      })
      .mouseout(function(_e) {
        $(this).removeClass('ov');
      })
      .click(attack);
    damage = new Damage();
  }

  function attack(_e) {
    var you_no = $you_weapon.index(this);
    var com_no = (Math.random() * 3) >> 0;
    var res = (you_no - com_no + 3) % 3;
    var cname = STATUS[res].cname;
    var comment = STATUS[res].comment;
    reset();
    $com_weapon.eq(com_no).addClass('on');
    $you_weapon.eq(you_no).addClass('on');
    $res_filed.addClass('on ' + cname).html(comment);
    clearTimeout(resetTimer);
    resetTimer = setTimeout(reset, 1500);
    if (res == 1) damage.start();
  }

  function reset() {
    $res_filed
      .removeAttr('class')
      .addClass('result')
      .html('');
    $com_weapon.removeClass('on');
    $you_weapon.removeClass('on');
  }

  /* ----------------------------------------------------------- */
  /* Damage Class */

  function Damage() {
    var SPAN = 3;
    var TIMES = 8;
    var MSEC = 30;
    var timer;
    var count;

    this.start = function() {
      count = 0;
      clearTimeout(timer);
      timer = setTimeout(ouch, MSEC);
      $('body').addClass('ouch');
    };

    function ouch() {
      var dx, dy;
      count++;
      if (count < TIMES) {
        dx = (Math.random() * SPAN * 2 - SPAN) >> 0;
        dy = (Math.random() * SPAN * 2 - SPAN) >> 0;
        timer = setTimeout(ouch, MSEC);
      } else {
        dx = dy = 0;
        $('body').removeClass('ouch');
      }
      $('#contents').css({ top: 50 + dy + '%', left: 50 + dx + '%' });
    }
  }
});
