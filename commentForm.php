<div id="CommentForm">
    <form action="" method="POST" name="CommentFormSend" >
        <div class="header">
            <div><h1>�������� �����������</h1></div>
            <div><a href="#" title="������� ����">x</a></div>
        </div>
        <br/>
        <br/>

        <div class="field">
            <input name="User" id="User" value="���"
                   onfocus="if(this.value == '' || this.value == '���'){this.value = ''}"
                   onblur="if(this.value == ''){this.value = '���'}"/>
            <input name="Email" id="Email" value="E-mail"
                   onfocus="if(this.value == '' || this.value == 'E-mail'){this.value = ''}"
                   onblur="if(this.value == ''){this.value = 'E-mail'}"/>
            <br/>
            <br/>
            <textarea name="Message" id="Message"></textarea>
        </div>
        <br/>
        <div>
            <br/>
            <button onclick="return false;">��������</button>
        </div>
        <input type="hidden" name="Parent" id="Parent" value="0">
    </form>
</div>

						