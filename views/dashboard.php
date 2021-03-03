<?php
    require __DIR__.'/../vendor/autoload.php';
    use App\controller\Pessoa;

    $var = "";
    if($_GET['id']){
      $var = Pessoa::deletar($_GET['id']);
    }

    $pessoas = Pessoa::getPessoas();
?>

<!-- Main Content -->
<main class="content">
<div class="DivCenter">
  <div class="table">
    <?php if($var == 'Deletado'){?>
      <div class="alert alert-primary" role="alert">Pessoa Deletada com sucesso</div>
    <?php } ?> 

    <table class="table table-striped">
      <thead>
        <tr class="t-centro">
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">Data de Admissão</th>
          <th scope="col">Açoes</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($pessoas as $pessoa){ ?> 
          <tr class="t-centro">
            <th scope="row"><?= $pessoa->id_pessoa ?></th>
            <td><?= $pessoa->nome ?></td>
            <td><?= date("d-m-Y", strtotime($pessoa->data_admissao)); ?></td>
            <td><a href="/?id=<?=$pessoa->id_pessoa ?>" class="btn btn-danger">Deletar</a></td>
          </tr>
        <?php } ?>
      </tbody>

    </table>

    <a href="/views/addPessoa.php" style="margin: 30%;"><button type="button" class="btn btn-primary" >Adicionar Pessoa</button></a>
    
  </div>
</div>
  
</main>
  <!-- Main Content -->
