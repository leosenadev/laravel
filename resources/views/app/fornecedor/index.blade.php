<h1>Fornecedor</h1>


{{-- FICA O COMENTARIO --}}

@php 
    /*Comentarios de 
    multiplas linhas*/

       


 //@dd($fornecedores)
@endphp


@php 

    /* 
        if(!<condicao>){}  //enquanto executa se o retorno for true
    
        if(isset($variavel)){} //retorna true se a variavel for definida
        if(empty($variavel)){} //retorna true se a variavel for vazio

     @dd($fornecedores)
    */
   
@endphp



{{-- USANDO O IF --}}
    @if(count($listFornecedores) > 0 && count($listFornecedores) < 10)
        <h3>Existem alguns fornecedores cadastrado.</h3>
    @elseif(count($listFornecedores) > 10 )
        <h3> Existem varios fornecedores cadastrado</h3>
    @else
        <h3>Ainda não existem fornecedores cadastrado</h3>
    @endif

{{-- FIM IF --}}
   


{{-- @unless executa se o retorno for false--}}

 Fornecedor: {{$fornecedores[0]['nome']}}

 <br>

 Status: {{ $fornecedores[0]['status']}}
<br><br>


{{-- USANDO UNLESS --}}

@if(!($fornecedores[0]['status'] == 'S'))<!-- Retornar o valor true -->
    Fornecedor Inativo
@endif
<br>
<br>
@unless($fornecedores[0]['status'] == 'S')<!-- retornar o valor false -->
    Fornecedor Inativo 
@endunless 
{{-- FIM UNLESS --}}


<br><br>
{{-- USANDO ISSET --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{ $fornecedores[0]['status']}}
    <br>
    CNPJ: {{$fornecedores[0]['cnpj']}}
@endisset


<br><br>

@isset($fornecedores)

    Fornecedor: {{$fornecedores[1]['nome']}}
    <br>
    Status: {{$fornecedores[1]['status']}}
    <br>
    @isset($fornecedores[1]['cnpj'])
    CNPJ:{{--{{ $fornecedores[1]['cnpj'] }}--}}
        {{-- USANDO EMPTY --}}
        @empty($fornecedores[1]['cnpj'])
            -Vazio
        @endempty
        {{-- FIM EMPTY --}}
    @endisset 
@endisset
<br><br>

@isset($fornecedores)

    Fornecedor : {{$fornecedores[1]['nome']}}
    <br>
    Status : {{$fornecedores[1]['status']}}
    <br>
    CNPJ :{{$fornecedores[1]['cnpj'] ?? 'Dados não preenchido'}}
    <!-- 
        $variavel testada não estiver definida (isset)
        ou $variavel testada possuir o valor null
     -->   

@endisset

<br><br>

{{-- FIM ISSET --}}

{{-- Switch --}}


@isset($fornecedores)

    Fornecedor : <h3>{{ $fornecedores[2]['nome']}}</h3>
  
    Status : {{ $fornecedores[2]['status']}}
    <br>
    Cnpj : {{$fornecedores[2]['cnpj'] ?? 'Não informado'}}
    <br>
    DDD : {{$fornecedores[2]['ddd']}} 
    <br>
    
    @Switch($fornecedores[2]['ddd'])
        @case('71')
            Salvador-BA 
        @break
        @case('11')
            São Paulo - SP 
        @break
        @case('85')
            Fortaleza - CE 
        @break
        @default 
            DDD não identificado

    @endswitch
    <br>
    Telefone : {{$fornecedores[2]['telefone']}}
    <br> 

@endisset
{{-- FIM SWITCH --}}
<br>
{{-- FOR --}}
<br>
<h3>Fornecedores </h3>
@for($i=0; isset($fornecedores[$i]);$i++)
    <br>
    Fornecedor : {{ $fornecedores[$i]['nome']}}
    <br>
    Cnpj : {{ $fornecedores[$i]['cnpj'] ?? 'Não informado' }}
    <br>
    Status : @isset($fornecedores[$i]['status']) {{$fornecedores[$i]['status']}} @endisset
    <br>
    Telefone : {{$fornecedores[$i]['ddd']}} {{$fornecedores[$i]['telefone']}}
    <br>
    Ĺocal :
    @Switch($fornecedores[$i]['ddd'])
        @case('71')
            Salvador - BA 
        @break
        @case('11')
            São Paulo - SP 
        @break
        @case('85')
            Fortaleza - CE
        @break

    @endswitch

    <br>
    <hr>
@endfor
{{-- END FOR --}}

{{-- WHILE --}}
@isset($fornecedores)

    @php $i=0 @endphp 
    @while(isset($fornecedores[$i]))
        <br>
        Fornecedor : {{$fornecedores[$i]['nome']}}
        <br>
        CNPJ : {{$fornecedores[$i]['cnpj'] ?? 'Não informado!'}}
        <br>
        Contato : {{$fornecedores[$i]['ddd']}} {{$fornecedores[$i]['telefone']}} 
        <br>
        Região :

        @switch($fornecedores[$i]['ddd'])
            @case('71')
                Salvador - BA 
            @break
            @case('11')
                Sao Paulo - SP 
            @break
            @case('85')
                Fortaleza - CE 
            @break
            @default 
                Regiao não informado!        
        @endswitch

        @php $i++ @endphp
        <br>
    @endwhile


@endisset
{{-- End WHILE--}}
<br><br>
{{-- FOREACH --}}

@isset($fornecedores)

    @foreach($fornecedores as $indice => $fornecedor)
        <br>
        Fornecedor :{{$fornecedor['nome']}}
        <br>
        CNPJ : {{$fornecedor['cnpj'] ?? 'Não informado!'}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        Contato: {{$fornecedor['ddd']}}{{$fornecedor['telefone']}}
        <br>
        Região:
        @switch($fornecedor['ddd'])
            @case('71')
                Salvador - BA 
            @break
            @case('11')
                São Paulo - SP
            @break
            @case('85')
                Fortaleza - CE
            @break
            @default 
                Não informado!
        @endswitch
        <br>
    @endforeach


@endisset
{{-- END FOREACH --}}
<br><br>

{{-- FORELSE --}}
@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)

         {{--Variavel lop --}}
        <br>
        Interação atual: {{$loop->iteration}} 

        {{-- End lop--}}
        <br>
        Fornecedor :{{$fornecedor['nome']}}
        <br>
        CNPJ : {{$fornecedor['cnpj'] ?? 'Não informado!'}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        Contato: {{$fornecedor['ddd']}}{{$fornecedor['telefone']}}
        <br>
        Região:
        @switch($fornecedor['ddd'])
            @case('71')
                Salvador - BA 
            @break
            @case('11')
                São Paulo - SP
            @break
            @case('85')
                Fortaleza - CE
            @break
            @default 
                Não informado!
        @endswitch
        <br>
        {{-- OBJETO LOOP --}}
        @if($loop->first)
           <strong> Primeira Interação </strong>

            <br>
            <strong> Total de registros {{ $loop->count }} </strong>


        @endif
        <br><br>

        @if($loop->last)
            <strong> Ultima Interação loop</strong>
        @endif
        {{-- FIM OBJETO LOOP --}}
        @empty
            Não Existe fornecedores cadastrados!

    @endforelse


@endisset
{{-- END FORELSE --}}




















