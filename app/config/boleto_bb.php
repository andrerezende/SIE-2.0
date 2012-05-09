<?php
/* Informações da sua conta */
$config['Boleto']["agencia"] = "3832"; // Num da agencia, sem digito
$config['Boleto']["conta"] = "333017"; 	// Num da conta, sem digito

/* Dados do contrato com o Banco */
$config['Boleto']["convenio"] = "2203078";  // Num do convênio - REGRA: 6 ou 7 ou 8 dígitos
$config['Boleto']["contrato"] = "18680937"; // Num do seu contrato
$config['Boleto']["carteira"] = "18";
$config['Boleto']["variacao_carteira"] = "-019";  // Variação da Carteira, com traço (opcional)

/* Tipo do Boleto */
$config['Boleto']["formatacao_convenio"] = "7"; // REGRA: 8 p/ Convênio c/ 8 dígitos, 7 p/ Convênio c/ 7 dígitos, ou 6 se Convênio c/ 6 dígitos
$config['Boleto']["formatacao_nosso_numero"] = "2"; // REGRA: Usado apenas p/ Convênio c/ 6 dígitos: informe 1 se for NossoN�mero de at� 5 dígitos ou 2 para opção de até 17 dígitos

/* Seus Dados */
$config['Boleto']["identificacao"] = "Instituto Federal Baiano";
$config['Boleto']["cpf_cnpj"] = "10.724.903/0001-79";
$config['Boleto']["endereco"] = "Rua do Rouxinol, 115 - Imbuí - CEP: 41.720-052";
$config['Boleto']["cidade_uf"] = "Salvador / Bahia";
$config['Boleto']["cedente"] = "Instituto Federal de Educação, Ciência e Tecnologia Baiano";

/* Vence em quantos dias? */
$config['Boleto']['dias_vencimento'] = 5;

/* Taxa do boleto */
$config['Boleto']['taxa'] = 0;

/* Informações para o cliente*/
$config['Boleto']["demonstrativo1"] = "Pagamento de Taxa de Inscrição - ";
$config['Boleto']["demonstrativo2"] = " CPF do Candidato: ";
$config['Boleto']["demonstrativo3"] = "Número de Inscrição: ";

/* Instruções ao caixa*/
$config['Boleto']["instrucoes1"] = " Sr. Caixa,";
$config['Boleto']["instrucoes2"] = " Não receber após o vencimento.";
$config['Boleto']["instrucoes3"] = "";
$config['Boleto']["instrucoes4"] = "";

/* OPCIONAIS */
$config['Boleto']["quantidade"] = "";
$config['Boleto']["valor_unitario"] = "";

/* MOEDA */
$config['Boleto']["aceite"] = "N";
$config['Boleto']["especie"] = "R$";
$config['Boleto']["especie_doc"] = "RC";