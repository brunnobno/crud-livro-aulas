

<footer class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 bg-dark mt-auto py-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <span class="text-muted">CRUD Livros - Todos os direitos reservados.</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.querySelectorAll('[data-type="excluir"]').forEach(item => {
        item.addEventListener('click', event => {
            event.preventDefault();
            if(!event.target.dataset.itemId)
            {
                return;
            }

            excluirLivro(event.target.dataset.itemId)
        })
    })
</script>
</body>
</html>
