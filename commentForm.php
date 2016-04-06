<div id="CommentForm">
    <form action="" method="POST" name="CommentFormSend" >
        <div class="header">
            <div><h1>Добавить комментарий</h1></div>
            <div><a href="#" title="Закрыть окно">x</a></div>
        </div>
        <br/>
        <br/>

        <div class="field">
            <input name="User" id="User" value="Имя"
                   onfocus="if(this.value == '' || this.value == 'Имя'){this.value = ''}"
                   onblur="if(this.value == ''){this.value = 'Имя'}"/>
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
            <button onclick="return false;">Добавить</button>
        </div>
        <input type="hidden" name="Parent" id="Parent" value="0">
    </form>
</div>

						