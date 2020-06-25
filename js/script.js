// Иожно, конечно сделать по другому, но Кастыл в кастыле кастылем не считается, главное, что работает

$(function () {
  $('.picnic__button').click(toggle_active);

  function toggle_active() {
    $('.mini_group').toggleClass('d_act');
  }

  $('.picnic__order').click(toggle_active2);

  function toggle_active2() {
    $('.order__picnic').toggleClass('d_act');
  }

  $(document).mouseup(function (e){
		var div = $(".mini_group");
		var div2 = $(".order__picnic");
		var div3 = $(".picnic__order");
		var div4 = $(".picnic__button");

		if (
        !div.is(e.target) &&
        !div2.is(e.target) &&
        !div3.is(e.target) &&
        !div4.is(e.target) &&
        div.has(e.target).length === 0 &&
        div2.has(e.target).length === 0 &&
        $('.datepickers-container').has(e.target).length === 0
      ) {
          div.removeClass('d_act');
          div2.removeClass('d_act');
		    }
	});

  $('.info2').click(function() {
    $(this).css({'background-image': 'none'});
  });





  function quantityProductsPlus() {
    var i = $(this).attr('class');
    i = i.replace('quantity-arrow-plus', '');
    i = i.replace('arrow-plus', '');

    var $quantityArrowPlus = $(".quantity-arrow-plus" + i);
    var $quantityNum = $(".quantity-num" + i);

    quantityPlus();

    function quantityPlus() {
      $quantityNum.val(+$quantityNum.val() + 1);
    }
  };

  function quantityProductsMinus() {
    var i = $(this).attr('class');
    i = i.replace('quantity-arrow-minus', '');
    i = i.replace('arrow-minus', '');


    var $quantityArrowMinus = $(".quantity-arrow-minus" + i);
    var $quantityNum = $(".quantity-num" + i);

    quantityMinus();

    function quantityMinus() {
      if ($quantityNum.val() > 1) {
        $quantityNum.val(+$quantityNum.val() - 1);
      }
    }
  };

  $('.arrow-plus').click(quantityProductsPlus);

  $('.arrow-minus').click(quantityProductsMinus);

  $('.header_burger').click(function() {
    $('.header__navigation_i_mob').toggle();
    $('.slider_copter').toggle('dis_none');
    $('.slider_text').toggle('dis_none');
    $('.slider_text_m').toggle('dis_none');
  });

  var width = $(document).width();

  $('.slide_btn1').click(function() {
    $('.slide_btn').removeClass('s-act');
    $('.slide_btn').css({'background-color': '#bfbebf'});
    $(this).css({'background-color': '#df0428'});
    $('.slider_copter').addClass('dis_none');
    $('#slider_copter1').removeClass('dis_none');
    $('.slider_text').addClass('dis_none');
    $('#slider_text1').removeClass('dis_none');
    $('.slider_text_m').addClass('dis_none');
    $('#slider_text_m1').removeClass('dis_none');
  });

  $('.slide_btn2').click(function() {
    $('.slide_btn').removeClass('s-act');
    $('.slide_btn').css({'background-color': '#bfbebf'});
    $(this).css({'background-color': '#df0428'});
    $('.slider_copter').addClass('dis_none');
    $('#slider_copter2').removeClass('dis_none');
    $('.slider_text').addClass('dis_none');
    $('#slider_text2').removeClass('dis_none');
    $('.slider_text_m').addClass('dis_none');
    $('#slider_text_m2').removeClass('dis_none');
    });

  $('.slide_btn3').click(function() {
    $('.slide_btn').removeClass('s-act');
    $('.slide_btn').css({'background-color': '#bfbebf'});
    $(this).css({'background-color': '#df0428'});
    $('.slider_copter').addClass('dis_none');
    $('#slider_copter3').removeClass('dis_none');
    $('.slider_text').addClass('dis_none');
    $('#slider_text3').removeClass('dis_none');
    $('.slider_text_m').addClass('dis_none');
    $('#slider_text_m3').removeClass('dis_none');
  });

  $('.arend_btn').click(function() {
    $('.header_pop').toggleClass('dis_none');
  });

  $(document).mouseup(function (e){
		var div = $(".order__form");

		if (
        !div.is(e.target) &&
        div.has(e.target).length === 0 &&
        $('.datepickers-container').has(e.target).length === 0
      ) {
          $('.header_pop').addClass('dis_none');
		    }
	});

  $(document).mouseup(function (){
		$('.popup').css({'display': 'none'});
	});

  var number_slide = 1;

  if (width < 951) {
    var autoSlide = function(number_slide) {
        if (number_slide >= 4) {
          number_slide=1;
        }
        $('.slide_btn').removeClass('s-act');
        $('.slide_btn').css({'background-color': '#bfbebf'});
        $('.slide_btn' + number_slide).css({'background-color': '#df0428'});
        $('.slider_copter').addClass('dis_none');
        $('#slider_copter' + number_slide).removeClass('dis_none');
        $('.slider_text_m').addClass('dis_none');
        $('#slider_text_m' + number_slide).removeClass('dis_none');
        number_slide++;
        clearInterval(interval);
        interval = setInterval(autoSlide, 5000, number_slide);
    }
  }

  var autoSlide = function(number_slide) {
      if (number_slide >= 4) {
        number_slide=1;
      }
      $('.slide_btn').removeClass('s-act');
      $('.slide_btn').css({'background-color': '#bfbebf'});
      $('.slide_btn' + number_slide).css({'background-color': '#df0428'});
      $('.slider_copter').addClass('dis_none');
      $('#slider_copter' + number_slide).removeClass('dis_none');
      $('.slider_text').addClass('dis_none');
      $('#slider_text' + number_slide).removeClass('dis_none');
      number_slide++;
      clearInterval(interval);
      interval = setInterval(autoSlide, 5000, number_slide);
  }

  var interval = setInterval(autoSlide, 5000, number_slide);

  // setInterval(autoSlide, 3000, number_slide);


});
