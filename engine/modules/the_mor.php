<?php

if( !defined('DATALIFEENGINE') ) {
    header( "HTTP/1.1 403 Forbidden" );
    header ( 'Location: ../../' );
    die( "Hacking attempt!" );
}

//echo 'THE MOR';

if (isset($_POST)) {

    if (isset($_POST['singup'])) {

        echo 'singup';

        pr1($_POST);
    }
}

$html = <<<HTML
  <script>
  $( function() {
      
    // $("input[name=password2]").val();
      
    $("#dialog").dialog({
                autoOpen: false,
                draggable: false,
                resizable: false,
                width: 530,
                //height: 600,
                modal: true,
                dialogClass: 'no-close',

                open: function (event, ui) {
                    
                    $("body").css({
                        overflow: 'hidden'
                    });
                    $(".ui-widget-overlay").css({
                        background: "rgb(0, 0, 0)",
                        opacity: ".50 !important",
                        filter: "Alpha(Opacity=50)",
                    });
                    $('.ui-widget-overlay').hide().fadeIn();
                },
                beforeClose: function (event, ui) {
                    $("body").css({overflow: 'inherit'})
                    $('.ui-widget-overlay').remove();
                    $("<div />", {
                        'class': 'ui-widget-overlay'
                    }).css({
                        height: $(document).height(),
                        width: $(document).width(),
                        zIndex: 1001
                    }).appendTo("body").fadeOut(function () {
                        $(this).remove();
                    });
                }
            });
    
    $('body').on('click', '.ui-widget-overlay', function () {
       $('#dialog').dialog('close');
    });
    
    
    // $( "#opener" ).one( "click", function() {
    //           $( "#dialog" ).dialog({
    //             autoOpen: !0,
    //
    //             width: 530,
    //             show: {
    //               effect: "drop",
    //               duration: 350,
    //               direction: 'up'
    //             },
    //             hide: {
    //               effect: "drop",
    //               duration: 150,
    //               direction: 'right'
    //             }
    //           });
    //         });
 
    $("#opener").on('click',function () {
             
                $("#dialog").dialog({
                    autoOpen: !0,
                    width: 530,
                    modal: true,
                    show: {
                        // effect: "fade",
                        // effect: "drop",
                        effect: "fade",
                        duration: 350,
                        direction: 'up'
                    },
                    hide: {
                        effect: "fade",
                        duration: 50,
                        direction: 'right'
                    }
                });
            });
    
    
  });
  </script>

<div id="dialog" title="Регистрация">
    <p>
        <form method="post" action="/index.php?do=singup">
            <ul class="ui-form">
		
			<li class="form-group">
				<div class="login_check">
					<input 
					type="text" name="name" 
					id="name" class="wide" 
					required="" placeholder="Логин">
				</div>
				<div style="display: block" id="result-registration">sadad</div>
			</li>
			<li class="form-group">
				<input placeholder="Пароль" 
				type="password" name="password1" 
				id="password1" class="wide" required="">
				
				<input placeholder="Пароль" 
				type="hidden" name="password2" 
				id="password2">
			</li>
			<li class="form-group">
				<input placeholder="E-mail" type="email" 
				name="email" id="email"
				class="wide" required="">
			</li>

		

		
			<li class="form-group">
				<div class="c-captcha">
					<a onclick="reload(); return false;" href="#" title="Кликните на изображение чтобы обновить код, если он неразборчив"><span id="dle-captcha"><img src="engine/modules/antibot/antibot.php" alt="Кликните на изображение чтобы обновить код, если он неразборчив" width="160" height="80"></span></a>
					<input placeholder="Повторите код" title="Введите код указанный на картинке" type="text" name="sec_code" id="sec_code" required="">
				</div>
			</li>
		</ul>
		<div class="form_submit">
			<button class="btn" name="singup" type="submit">Зарегистрироваться</button>
		</div>
        </form>
    </p>
</div>
 
<a href="#" id="opener" title="auth">auth</a>

HTML;

echo $html;
