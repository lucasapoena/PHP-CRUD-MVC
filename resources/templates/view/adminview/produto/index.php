<?php $produtos = $_REQUEST['produtos']; ?>
<div class="row right-align">
    <a href="<?php echo BASE_DIR; ?>/produtos/create" class="btn purple" name="action">Adicionar
        <i class="material-icons right">add_circle</i>
    </a>
</div>
<div class="row">
    <div class="col s12">
        <h3><?php echo $_REQUEST['title_page']; ?></h3>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Status</th>
                <th colspan="2">#</th>
            </tr>
            </thead>

            <tbody>
            <?php if (!empty($produtos)): ?>
                 <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?php echo $produto->getProdutoId(); ?></td>
                        <td><?php echo $produto->getNome(); ?></td>
                        <td><?php echo number_format((float) $produto->getPreco(), 2); ?></td>
                        <td><?php echo !is_null($produto->getStatus()) ? "<i class=\"material-icons\">check</i>" : ""; ?></td>
                        <td><a href="<?php echo BASE_DIR . "/produtos/edit?produto_id=".$produto->getProdutoId();?>" class="btn-floating">  <i class="material-icons">edit</i></a></td>
                        <td>
                            <form action="<?php echo BASE_DIR.'/produtos/delete'?>" method='POST'>
                                <input type='hidden' name='produto_id' value="<?php echo $produto->getProdutoId();?>">
                                <button class="btn-floating waves-effect red accent-2" onclick="return confirm('Você tem certeza?')" type="submit">
                                    <i class="material-icons">delete</i>
                                </button>
                            </form>
                    </tr>
                 <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

