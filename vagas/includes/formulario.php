<main>


<section>
    <a href="index.php">
        
    <button class="btn btn-success">Voltar</button>


    </a>
    
</section>

<h2 class="mt-3">Cadastrar Vaga</h2>
<form method="post">

<div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" name="titulo">
</div>

<div class="form-group">
    <label>Descrição</label>
    <textarea class="form-control" name="descricao" rows="10"></textarea>
</div>

<div class="form-group">    
        <label>Status</label>
        <p>
            
        </p>
    <div>
            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="s"> Ativo
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="n"> Inativo
                </label>
            </div>

            

    </div>

</div>

<p>

</p>

<div class="form-group">

    <button type="submit" class="btn btn-success">Enviar</button>

</div>

</form>
</main>