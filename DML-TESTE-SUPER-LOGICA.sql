SELECT
concat(u.nome,'-',i.genero ) as usuario,
if(Year(now()) - i.ano_nascimento  > 50, 'SIM','NÃO') as maior_50_anos
FROM usuario u 
inner JOIN infor i on u.cpf = i.cpf 