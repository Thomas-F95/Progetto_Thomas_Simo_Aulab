<footer class="container-fluid bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase fw-bold mb-3">Presto.it</h5>
                <p class="small text-secondary">
                    Il portale numero uno per vendere e comprare articoli di ogni tipo.
                    Veloce, sicuro e alla portata di tutti.
                </p>
                <div class="d-flex gap-3">
                    {{-- Social icons  --}}
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase fw-bold mb-3">Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('homepage') }}" class="text-secondary text-decoration-none small">Home</a>
                        </li>
                        <li><a href="{{ route('article.index') }}"
                                class="text-secondary text-decoration-none small">Tutti gli articoli</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none small">Chi siamo</a></li>
                        <li><a href="#" class="text-secondary text-decoration-none small">Contatti</a></li>
                    </ul>

                </div>
                <div class="col-12 col-md-4">
                    <h5 class="text-uppercase fw-bold mb-3">Vuoi guadagnare?</h5>
                    <p class="small text-secondary">Diventa revisore della nostra community e aiutaci a rendere il
                        portale più sicuro.</p>
                    {{-- we will insert the authorization part so that we can see if the user is logged for request to become a reviewer (@auth , route}}) --}}
                </div>
                <hr class="my-4 border-secondary">

                <div class="row">
                    <div class="col-12 text-center">
                        <p class="small text-secondary mb-0">
                            &copy; {{ date('Y') }} Presto.it - Tutti i diritti riservati. <br>
                            Realizzato con <span class="text-danger">&hearts;</span> dal Team Presto.
                        </p>
                    </div>
                </div>
            </div>
</footer>
</div>
</div>
</div>
