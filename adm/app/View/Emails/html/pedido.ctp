
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>
<body style="margin:0px; background: #f8f8f8; ">
<div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
  <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
    <table border="0" cellpadding="0" cellspacing="0" style="max-width: 150px;margin-left: auto;margin-right: auto;">
      <tbody>
        <tr>
          <td style="vertical-align: top; padding-bottom:30px;" align="center">
            <a href="http://senhorm.sistemagestaomangue.com.br" target="_blank">
              <img src="http://senhorm.sistemagestaomangue.com.br/img/logo.svg" alt="" style="border:none"><br/>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td style="background:#00c0c8; padding:20px; color:#fff; text-align:center;"> Obrigado, o pedido foi recebido. </td>
        </tr>
      </tbody>
    </table>
    <div style="padding: 40px; background: #fff;">
      <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>
          <tr>
            <td><b><?= $nome; ?></b>
              <p style="margin-top:0px;">Pedido #<?= $pedido; ?></p></td>
            <td align="right" width="100"> 20, Agosto de 2017 </td>
          </tr>
          <tr>
            <td colspan="2" style="padding:20px 0; border-top:1px solid #f6f6f6;"><div>
                <table width="100%" cellpadding="0" cellspacing="0">
                  <tbody>
                    <?php
                    foreach ($produtos as $key => $value):
                    ?>
                    <tr>
                      <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;"><?= $value['produto_id']; ?> (<?= $value['quantidade']; ?>x ) - tamanho <?= $value['tamanho']; ?> </td>
                      <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;"  align="right">
                      R$ 40,00</td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                    <tr>
                      <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;">Frete</td>
                      <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0;"  align="right">
                      R$ <?= $frete; ?></td>
                    </tr>
                    <tr class="total">
                      <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;" width="80%">Total</td>
                      <td style="font-family: 'arial'; font-size: 14px; vertical-align: middle; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; font-weight:bold;" align="right">R$ <?= $total; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div></td>
          </tr>
          <tr>
            <td colspan="2"><center>
                <a href="http://senhorm.sistemagestaomangue.com.br/perfil" target="_blank" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #D13242; border-radius: 60px; text-decoration:none;">Meus Pedidos</a>
              </center>
              <b>- Obrigado (SenhorM)</b> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>
