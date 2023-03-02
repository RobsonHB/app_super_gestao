<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado no interpretador do blade --}}

@php
//comentário de uma linha
/*Comentário de multiplas linhas*/
//echo 'Teste';

//var_dump($fornecedores)
@endphp


{{-- 
@if(count($fornecedores) > 0 && count($fornecedores < 10))

    <h3>Existem alguns fornecedores cadastrados</h3>

@elseif(count($fornecedores) > 10)

    <h3>Existem vários fornecedores cadastrados</h3>

@else

    <h3>Ainda não existem fornecedores cadastrados</h3>

@endif --}}

<b>Impressão simples:</b>
<br><br>
Fornecedores: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br><br>

<b>If:</b> 
<br>
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br><br>

<b>Unless:</b>
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless 
<br><br>

<b>Isset:</b>
<br>
@isset($fornecedores)
    Possui isset <br>
    Fornecedores: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
    CNPF: {{$fornecedores[1]['cnpj']}}
    @endisset
@endisset
<br><br>

<b>Empty:</b>
<br>
@empty($fornecedores[0]['cnpj'])
CNPJ da posição 0 está vazio
@endempty
<br><br>

<b>Operador condicional de valor Default:</b>
<br>
CNPJ 01: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido' }}
<br>
CNPJ 02: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
<br><br>

<b>Switch / case:</b>
<br>
 
@switch($fornecedores[1]['ddd'])
    @case ('11')
        São Paulo - SP
        @break
    @case('32')
        Juiz de Fora - MG
        @break
    @case('85')
    Fortaleza - CE
        @break
    @default        
        Estado não identificado
@endswitch
<br><br>

<b>For:</b>
<br>
@for($i = 0; isset($fornecedores[$i]); $i++)
    Linha {{$i}}<br>
    Nome: {{ $fornecedores[$i]['nome'] }} | Status: {{ $fornecedores[$i]['status'] }} | Cnpj: {{ $fornecedores[$i]['cnpj'] }} | DDD: {{ $fornecedores[$i]['ddd'] }} | Telefone: {{ $fornecedores[$i]['telefone'] }}<hr><br>
    
@endfor

<b>While:</b>
<br>
@php $j = 0 @endphp


@while(isset($fornecedores[$j]))
    Nome: {{ $fornecedores[$j]['nome'] }} | Status: {{ $fornecedores[$j]['status'] }} | Cnpj: {{ $fornecedores[$j]['cnpj'] }} | DDD: {{ $fornecedores[$j]['ddd'] }} | Telefone: {{ $fornecedores[$j]['telefone'] }}<hr><br>

    @php $j++ @endphp
@endwhile

<b>Foreach:</b>
<br>
@foreach ( $fornecedores as $indice => $fornecedor)

    Nome: {{ $fornecedor['nome'] }} | Status: {{ $fornecedor['status'] }} | Cnpj: {{ $fornecedor['cnpj'] }} | DDD: {{ $fornecedor['ddd'] }} | Telefone: {{ $fornecedor['telefone'] }}<hr><br>
    
@endforeach

<b>Forelse:</b>
<br>
@forelse($fornecedores as $indice => $fornecedor)
    Nome: {{ $fornecedor['nome'] }} | Status: {{ $fornecedor['status'] }} | Cnpj: {{ $fornecedor['cnpj'] }} | DDD: {{ $fornecedor['ddd'] }} | Telefone: {{ $fornecedor['telefone'] }}<hr><br>
    @empty
    Não existem fornecedores cadastrados!
@endforelse
