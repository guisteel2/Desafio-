<?php  
    require __DIR__.'/../vendor/autoload.php';
    use App\controller\Pessoa;
    include './template/header.php'; 
    $var = "";
    if($_POST){
        $var = Pessoa::cadastrar();
    }
?>
  
<main class="content">
    <div class="AddP">
        <?php if($var == 'Salvo'){?>
            <div class="alert alert-primary" role="alert">Pessoa ssalvar com sucesso</div>
        <?php } ?> 
        
        <h1>Adicionar Nova Pessoa</h1>
        <form action="/views/addPessoa.php" method="POST" >
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                    <input name="name" class="form-control" placeholder="Digite um Nome">
                    <?php if($var == 'Erro'){?>
                        <small id="emailHelp" class="form-text text-muted">Campo Obrigatorio.</small>
                    <?php } ?> 
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-danger " href="../index.php">Cancelar</a>
            </div>
        </form>
        
    </div>
    
</main>

<?php include '/template/footer.php'; ?>