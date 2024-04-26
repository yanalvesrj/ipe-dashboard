@extends('layouts.index')
@section('title','Dashboard')
@section('content')
<header>
    <h1>Meu Dashboard</h1>
  </header>
  <aside>
    <nav>
      <ul>
        <li><a href="#">Página 1</a></li>
        <li><a href="#">Página 2</a></li>
        <li><a href="#">Página 3</a></li>
      </ul>
    </nav>
  </aside>
  <main>
    <section>
      <h2>Vendas Mensais</h2>
      <!-- Aqui você pode adicionar gráficos ou tabelas -->
    </section>
    <section>
      <h2>Atividades Recentes</h2>
      <!-- Lista de atividades recentes, por exemplo -->
      <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
      </ul>
    </section>
  </main>
@endsection