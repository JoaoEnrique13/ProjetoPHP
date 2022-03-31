<?php
require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("João Enrique");
$pessoa->setEndereco("R Dr Mario Moura");
$pessoa->setBairro("Vila Progresso");
$pessoa->setCep("08240-480");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("SP");
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
                <?php echo $pessoa->getNome();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getEndereco();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getBairro();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getCep();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getCidade();?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #002060; padding: 10px; border-radius: 2px;">
            <?php echo $pessoa->getEstado();?>
            </td>
        </tr>
    </table>
</body>
</html>