$(document).ready(function(){
	//Проверка на незаполненные поля в форме
	$('#CommentForm button').click(function(){
		if (document.getElementById("User").value=="" || document.getElementById("User").value=="Имя"){alert("Заполните поле Имя");}
		else if (document.getElementById("Email").value=="" || document.getElementById("Email").value=="E-mail"){alert("Заполните поле E-mail");}
		else if (!validateEmail(document.getElementById("Email").value)){alert("Некорректно введен E-mail");}
		else if (document.getElementById("Message").value==""){alert("Заполните поле Сообщение");}
		else{document.forms.CommentFormSend.submit();}
	});
	
	//При клике на изображении “Закрыть окно”, скрывать форму.
	$('#CommentForm .header  div  a').click(function(){
		document.getElementById("CommentForm").style.display="none";
	});
});


//Отобразить Форму в нужном месте и задать скрытому полю CommentParent  ID родительского комментария
function Comment_View(parent){
	document.getElementById('CommentView_Form'+parent).appendChild(document.getElementById('CommentForm'));
	document.getElementById("CommentForm").style.display="block";
	document.getElementById("Parent").value=parent;
}

//Функция внедряет дочерний блок с комментариями в родительский
function Comment_MoveChild(parent, id){
	document.getElementById('CommentView_Child'+parent).appendChild(document.getElementById('CommentView_Parent'+id));
}

//Проверка на корректность ввода почтового адреса
function validateEmail(email) {
	//проверка введённого email
	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	if (!email.match(reg)) {
		return (false);
	}
	return(true);
}
