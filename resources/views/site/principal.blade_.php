<h3>Principal (view)</h3>
<ul>
    <!-- NO CÓDIGO ABAIXO, CHAMAREMOS A ROTA INSERINDO O SEU PRÓPRIO CAMINHO-->
    <!--
    <li>
        <a href="/"> Principal</a>
    </li>
    <li>
        <a href="/sobre-nos"> Sobre nós</a>
    </li>
    <li>
        <a href="/contato"> Contato</a>
    </li>
    -->
    <!-- NO CÓDIGO ABAIXO, CHAMAREI A ROTA ATRAVÉS DO SEU NOME -->
    <li>
        <a href="{{ route('site.index') }}"> Principal</a>
    </li>
    <li>
        <a href="{{ route('site.sobrenos') }}"> Sobre nós</a>
    </li>
    <li>
        <a href="{{ route('site.contato') }}"> Contato</a>
    </li>
</ul>