<?php
    $produtos = $_REQUEST['produtos'];
    $numberOfColumns = 3;
    $colWidth = 12 / $numberOfColumns ;
?>

<div class="section">
    <h5>Catálogo de Produtos</h5>
    <?php if (!empty($produtos)): ?>
        <?php $arrayChunks = array_chunk($produtos, $numberOfColumns); ?>
        <?php foreach($arrayChunks as $produtos): ?>
            <div class="row">
                <?php foreach ($produtos as $produto): ?>
                    <div class="col s12 m<?php echo $colWidth; ?>">
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo BASE_DIR; ?>/resources/<?php echo !empty($produto->getImagem())?'var/upload/'.$produto->getImagem():'static/img/imageNotFound.png'; ?>">
                            </div>
                            <div class="card-content">
                                <p><?php echo $produto->getNome(); ?></p>
                                <p><b><?php echo "R$ ".number_format((float) $produto->getPreco(), 2); ?></b></p>
                            </div>
                            <div class="card-action light-green darken-1 ">
                                <a  class="white-text" href="comprar/<?php echo $produto->getProdutoId(); ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p> Não possui produtos cadastrados;
    <?php endif; ?>
</div>
