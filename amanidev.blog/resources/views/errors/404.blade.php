@extends('layouts.app')
@section('title', "Erro 404 - amanidev.blog")
    
@section('content')
        <section id="section-404">
            <h1 id="error_404">Erro 404</h1>
            <p id="text_error_404">Ops, parece que algo deu errado. :(</p>
            <div class="buttons-form">
                <div class="form-btn">
                    <a href="/">
                    <button type="submit" class="btn" id="form_btn">
                        <svg width="11.2rem" height="3.8rem" viewBox="0 0 181 61" class="border">
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                        </svg>
                        <span id="form_submit">Voltar ao início</span>
                    </button>
                    </a>
                </div>
            </div>
        </section>
        @endsection
