<?php $produto = $_REQUEST['produto']; ?>
<div class="row right-align">
    <a href="<?php echo BASE_DIR; ?>/produtos" class="btn grey" name="action">Voltar
        <i class="material-icons right">keyboard_return</i>
    </a>
    <button class="btn waves-effect waves-light purple" type="submit" name="save" >Salvar
        <i class="material-icons right">save</i>
    </button>
</div>
<h3 class="light"><?php echo $_REQUEST['title_page']; ?> Produto</h3>
<div class="divider"></div>
<div class="section">
    <h5>Informações Gerais</h5>
    <div class="row">
        <input type="hidden" name="produto_id" value="<?php echo !empty($produto->getProdutoId())?$produto->getProdutoId():0;?>">
        <div class="input-field col s12">
            <div class="switch">
                <label>
                    Off
                    <input type="checkbox" name="status" <?php echo !is_null($produto->getStatus())?'checked="on"':'';?>">
                    <span class="lever"></span>
                    On
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="nome" name="nome" type="text" required="" class="validate" value="<?php echo !empty($produto->getNome())?$produto->getNome():'';?>">
            <label for="nome">Nome</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="preco" name="preco" type="number" step="0.01" class="validate" value="<?php echo !empty($produto->getPreco())?$produto->getPreco():'';?>">
            <label for="preco">Preço</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="descricao" name="descricao" class="materialize-textarea"><?php echo !empty($produto->getDescricao())?$produto->getDescricao():'';?></textarea>
            <label for="descricao">Descrição</label>
        </div>
    </div>
</div>

<div class="divider"></div>
<div class="section">
    <h5>Galeria</h5>
    <div class="row">
        <div class="input-field col s8">
            <div class="file-field input-field">
                <div class="btn purple">
                    <span>Browse</span>
                    <input type="file" name="imagem">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Nenhum arquivo selecionado.">
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col s8">
            <img class="responsive-img"  src="<?php echo !empty($produto->getImagem())? (BASE_DIR .'/resources/var/upload/'.$produto->getImagem()):(BASE_DIR . '/resources/static/img/image_default.png'); ?>">
        </div>
    </div>
</div>
