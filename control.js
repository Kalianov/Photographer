$(document).ready(function(){
	$("#send").click(function(){
		var login = $("#login").val(), //в переменные записывает value из полей логина и пароля
			 pass = $("#pass").val();		
	$.post("form.php",
		{
			login:login,
			pass:pass
        },
		function(data) {
			/*alert (data);*/
			if (data == 0 ){
				$("#text").html("PLEASE CHECK THAT YOU HAVE ENTERED YOUR LOGIN CORRECTLY."); //из form.php получили -0 ,в блок #text записываем след...
			}
			else if (data ==1){
				$("#text").html("PLEASE CHECK THAT YOU HAVE ENTERED YOUR PASSWORD CORRECTLY.");//из form.php получили -1 ,в блок #text записываем след...
			}
			else{
				$("#text").html("");
                window.location.href='in.php';//из form.php получили -2,либо просто другое занчение  ,нас перекидывает на in.php
			}
		});
	});
    $("#exit").click(function(){ //уже в in.php есть кнопка выход
        $.post("click.php", //при клике обращаеться к click.php
            function(data) {
                return true;
            });
        window.location.href='index.php'; //если сесия разорвана переходит на страницу авторизации index.php
    });
});
