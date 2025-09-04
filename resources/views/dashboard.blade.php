<div>
    <h1>dashboard</h1>
    <p>Bem vindo {{ $user->name }}</p>
    <a href="{{ route('links.create') }}">Criar link</a>
    <br>
    <a href="{{ route('logout') }}">Sair</a>
</div>
