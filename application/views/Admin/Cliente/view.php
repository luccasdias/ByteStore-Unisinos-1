<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <h1><?php echo $titulo; ?></h1>
        <form method="POST"  action="<?php echo base_url()."index.php/admin/cliente/$acao";?>">
        <p> 
            ID: <?php echo str_pad($cliente['id'], 4, "0", STR_PAD_LEFT); ?>
            <input type="hidden" name="id" <?php echo ($cliente['id']!=''?"value='".$cliente['id']."'":"value='0'"); ?> />
        </p> 
        <p> 
            <label for='nome'>Nome: </label> 
            <input type='text' id='nome' name='nome' size='30' value="<?php echo $cliente['nome'] ?>"/> 
        </p> 

        <p> 
            <label for='email'>Email: </label> 
            <input type='text' id='email' name='email' size='30' value="<?php echo $cliente['email'] ?>"/> 
        </p> 

        <p> 
            <label for='data_cadastro'>Data cadastro: </label> 
            <input type='text' id='data_cadastro' name='data_cadastro' size='15' value="<?php echo $cliente['data_cadastro'] ?>" disabled="disabled"/> 
        </p> 

        <p> 
            <label for='fone'>Telefone: </label> 
            <input type='text' id='fone' name='fone' size='10' value="<?php echo $cliente['fone'] ?>"/> 
        </p> 

        <p> 
            <label for='senha'>Senha: </label> 
            <input type='password' id='senha' name='senha' size='10' value="<?php echo $cliente['senha'] ?>"/> 
        </p> 

        <p> 
            <label for='endereco'>Endereço: </label> 
            <input type='text' id='endereco' name='endereco' size='30' value="<?php echo $cliente['endereco'] ?>"/> 
            <label for='endereco_num'>Nº: </label> 
            <input type='text' id='endereco_num' name='endereco_num' size='3' value="<?php echo $cliente['endereco_num'] ?>"/> 
        </p> 

        <p> 
            <label for='endereco_comp'>Complemento: </label> 
            <input type='text' id='endereco_comp' name='endereco_comp' size='10' value="<?php echo $cliente['endereco_comp'] ?>"/> 
        </p> 

        <p> 
            <label for='cidade'>Cidade: </label> 
            <input type='text' id='cidade' name='cidade' size='15'value="<?php echo $cliente['cidade'] ?>"/> 
        </p> 

        <p> 
            <label for='uf'>UF: </label> 
            <input type='text' id='uf' name='uf' size='1'value="<?php echo $cliente['uf'] ?>"/> 
            <label for='cep'>CEP: </label> 
            <input type='text' id='cep' name='cep' size='10'value="<?php echo $cliente['cep'] ?>"/> 
        </p>

        <p> 
            <label for='cpf'>CPF: </label> 
            <input type='text' id='cpf' name='cpf' size='10'value="<?php echo $cliente['cpf'] ?>"/> 
            <label for='rg'>RG: </label> 
            <input type='text' id='rg' name='rg' size='10'value="<?php echo $cliente['rg'] ?>"/> 
        </p> 

        <p> 
            <label for='nascimento'>Nascimento: </label> 
            <input type='text' id='nascimento' name='nascimento' size='15'value="<?php echo $cliente['nascimento'] ?>"/> 
        </p> 

        <p> 
            <label for='newsletter'>Newsletter: </label> 
            <input type='checkbox' id='newsletter' name='newsletter' 
            <?php
                if ($cliente['newsletter'] == 1) {
                        echo "checked=\"checked\" value='1'";
                    }else{
                         echo "value='1'";
                    }
                    ?>/> 
        </p>
        <p>
            <input type="submit" value="Salvar" />
        </p>
</form>
    </body>
</html>
