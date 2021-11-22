<!-- FORMULARIO PRINCIPAL -->

<!-- USANDO A MESMA ROTA CONTATO -->
{{ $slot }} <!-- Mensagem quem fica dentro do componente -->
{{ $dataAtual }}
<form action={{ route('site.index') }} method="post">
    @csrf
    <!-- PARA ENVIAR MODO POST GERA UM TOKEN  -->
    <input name="nome" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
