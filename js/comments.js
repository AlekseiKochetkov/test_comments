$(document).ready(function(){
	//�������� �� ������������� ���� � �����
	$('#CommentForm button').click(function(){
		if (document.getElementById("User").value=="" || document.getElementById("User").value=="���"){alert("��������� ���� ���");}
		else if (document.getElementById("Email").value=="" || document.getElementById("Email").value=="E-mail"){alert("��������� ���� E-mail");}
		else if (!validateEmail(document.getElementById("Email").value)){alert("����������� ������ E-mail");}
		else if (document.getElementById("Message").value==""){alert("��������� ���� ���������");}
		else{document.forms.CommentFormSend.submit();}
	});
	
	//��� ����� �� ����������� �������� ����, �������� �����.
	$('#CommentForm .header  div  a').click(function(){
		document.getElementById("CommentForm").style.display="none";
	});
});


//���������� ����� � ������ ����� � ������ �������� ���� CommentParent  ID ������������� �����������
function Comment_View(parent){
	document.getElementById('CommentView_Form'+parent).appendChild(document.getElementById('CommentForm'));
	document.getElementById("CommentForm").style.display="block";
	document.getElementById("Parent").value=parent;
}

//������� �������� �������� ���� � ������������� � ������������
function Comment_MoveChild(parent, id){
	document.getElementById('CommentView_Child'+parent).appendChild(document.getElementById('CommentView_Parent'+id));
}

//�������� �� ������������ ����� ��������� ������
function validateEmail(email) {
	//�������� ��������� email
	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	if (!email.match(reg)) {
		return (false);
	}
	return(true);
}
