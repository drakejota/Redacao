<?php
//Biblioteca de strings utilizadas no programa
//$str = array("1=> "Olá")
define('urlLike','https://telegram.me/storebot?start=waypoints_bot');
define('emailContato','@aspinella');
define('parceiroUtiligram','@Utiligram');
define('parceiroSoPortugues','@Portugues');
define('botPierre','@MalfadaBot '."\xf0\x9f\x93\xbb"."\xf0\x9f\x8e\xb6");
define('parceiroHumanas','@HUMANAS');
define('assinatura',"\n\n—————————————————\n".chapelUn.' @aprender');
//define('textoHumanas',"\xF0\x9F\x8E\x93 Filosofia\n   \xe2\x9a\x94 História\n   \xf0\x9f\x97\xa3 Crítica\n   \xf0\x9f\x98\x82 Humor\n   \xf0\x9f\x8c\x90E muito mais!");
function stringResp($cod,$fName=null,$key=null){
	$str= array(
		inSub_l1=>lampEmoji."<b>Dissertação:</b>\n\n<b>Dissertar</b> significa <b>“falar sobre”</b>.\nÉ o texto em que se expõem ideias, seguidas de argumentos que as comprovem.\nNa dissertação, você deve <b>revelar sua opiniãoa respeito do assunto</b>".assinatura,
		inSub_l2=>lampEmoji."<b>Narração</b>\n\nTexto em que se <b>contam fatos ocorridos em determinado tempo e lugar, envolvendo personagens.</b>\n  Lembre-se: você deve “narrar a ação”, respondendo à pergunta: <b>O que aconteceu?</b>".assinatura,
		inSub_l3=>lampEmoji."<b>Descrição:</b>\n\nTexto em que se indicam as <b>características de um determinado objeto, pessoa, ambiente ou paisagem.</b>\n Na <b>descrição,</b> você deve responder à pergunta: <b>Como a coisa  (lugar / pessoa) é?</b>\n É importante tentar usar os mais variados sentidos: <b>fale do aroma, dos cheiros, das cores, das sensações, de tudo que envolve a realidade a ser descrita.</b>".assinatura,
		inSub_l4=>"🔰<b>Os Dez Mandamentos para uma boa Redação</b>🔰\n\n<b>1)</b> Pense no que você quer dizer e diga da forma mais simples. <b>Procure ser direto (conciso) na construção das sentenças.</b>\n\n<b>2)</b> Use a voz ativa, evite a passiva. Evite termos estrangeiros e jargões.\n\n<b>3)</b> Evite o uso excessivo de advérbios. Tome cuidado com a gramática.\n\n<b>4)</b> Tente fazer com que os diálogos escritos (em caso de narração) pareçam uma conversa. O uso do gerúndio empobrece o texto. <b>Exemplo: Entendendo dessa maneira, o problema vai-se pondo numa perspectiva melhor, ficando mais claro...</b>\n\n<b>5)</b> Evite o uso excessivo do ”que”. Essa armadilha produz períodos longos. Prefira frases curtas.Exemplo: O fato de que o homem que seja inteligente tenha que entender os erros dos outros e perdoá-los não parece que seja certo. Adjetivos que não informam também são dispensáveis. <b>Por exemplo: luxuosa mansão (Toda mansão é luxuosa!).</b>\n\n<b>6)</b> Evite clichês (lugares comuns) e frases feitas. Exemplos: ”fazer das tripas coração”, ”encerrar com chave de ouro”, “silêncio mortal”, ”calorosos aplausos”.\n\n<b>7)</b> Verbo ”fazer”, no sentido de tempo, não é usado no plural. É errado escrever: ”Fazem alguns anos que não viajo”. <b>O certo é “Faz alguns anos que não viajo”.</b>\n\n<b>8)</b> Cuidado com redundâncias. É errado escrever, por exemplo: ”Há cinco anos atrás”. Corte o ”há” ou dispense o ”atrás”. A forma correta é “Há cinco anos...”\n\n<b>9)</b> A leitura intensiva facilita o uso da vírgula corretamente. Leia muito, leia sempre!\n\n<b>10)</b> Nas citações: use aspas, coloque vírgula e um verbo seguido do nome de quem disse ou escreveu o que está sendo citado. <b>Exemplo: “O queé escrito sem esforço é geralmente lido sem prazer.”, disse Samuel Johnson.</b>",

		inSub_l5=>"<b>1ª parte: Introdução</b>\n\nNo primeiro parágrafo, o autor apresenta o tema que será abordado.\n💡| _Dica:anuncie claramente o tema sobre o qual você escreverá e as delimitações propostas._\n\n<b>2ª parte: Desenvolvimento</b> \n\nNos parágrafos subsequentes (geralmente dois), o autor apresenta uma série de argumentos ordenados logicamente, a fim de convencer o leitor.\n💡| _Dica:argumente, discuta, exponha suas ideias, prove o que você pensa._\n\n<b>3ª parte: Conclusão</b>\n\nNo último parágrafo, o autor “amarra“ as ideias e procura transmitir uma mensagem ao leitor.\n💡| _Dica:conclua de maneira clara, simples, coerente, confirmando o que foi exposto no desenvolvimento._",

		inSub_l6=>"🙌🏻| <b>SIMPLICIDADE</b>\n\nUse palavras conhecidas e adequadas. Para ter um bom domínio do texto, prefira frases curtas.\n\n👁| <b>CLAREZA</b>\n\nO segredo está em não deixar nada subentendido, nem imaginar que o leitor sabe o que você quer dizer.\n\n☝️🏻️| <b>OBJETIVIDADE</b>\n\nVocê tem que expressar o máximo de conteúdo com o menor número de palavras possíveis.\n\n👥| <b>UNIDADE</b>\n\nNão esqueça, o texto deve ter unidade, por mais longo que seja. Você deve traçar uma linha coerente do começo ao final do texto.\n\n😎| <b>COERÊNCIA</b>\n\nA coerência entre todas as partes do texto é fator primordial para a boa escrita.\n\n✊🏻| <b>ORDEM</b>\n\nObedecer uma ordem cronológica é uma maneira de acertar sempre, apesar de não ser criativa\n\n✍🏻| <b>ÊNFASE</b>\n\nProcure chamar a atenção para o assunto com palavras fortes, cheias de significado, principalmente no início da narrativa.",

		inSub_l7=>"🌀| <b>Como defender suas ideias na redação do Enem</b>?\n\n🎲| Dica 1: <b>Entenda como as redações do Enem são corrigidas:</b>   http://blogdoenem.com.br/corrigem-redacoes-enem-vestibular/\n\n🎲| Dica 2: <b>Para se dar bem na redação do Enem, você precisar estar por dentro do que acontece no Brasil e no mundo.</b>\n\n🎲| Dica 3 : <b>Descubra como a criatividade pode enriquecer seu texto:</b> http://blogdoenem.com.br/redacao-enem-criatividade/",

		msgInicial=>"Olá<b>".($fName ? ', '.$fName.' ' : '!').emojiPiscando."\n\n</b>Sou o <b>Redação Bot</b>, fui criado com o objetivo de construir formadores de opinião capazes de <b>analisar e escrever</b> sobre temas relevantes da sociedade.\n\nEu tenho diversas características para te auxiliar na produção de seus textos.\n\n- <b>Espero que gostem!</b>".smileEmoji,
		defaultMsg=>"<b>Ops... Não entendi o que quis dizer!</b>".lampEmoji."\n\nSe tá com dúvidas, digita\n/start e reinicie-me.".emojiPiscando,
		b1=>"Por favor, escolha entre as opções do <b>teclado:</b>",
		b2=>b2,
		b3=>"💬| <b>Aqui teremos algumas redações que tiraram nota mil no Enem e em outros vestibulares</b>\n\n- Escolha o tema:",
		b4=>"—————————————————\n<b>Hey</b> 😉!\n\nSe você tem : <b>dúvidas, reclamações, sugestões, elogios</b> referente ao bot, entre em contato.\n\nSinta-se livre para relatar ou sugerir alguma coisa para @JotaDrake .😁\n\n📢 canal para atualizações do bot : @APRENDER\n—————————————————",
		b5=>"Olá, sou o <b>Jota Drake</b>, idealizador do projeto @Aprender onde contém diversos <b>canais e bots educacionais</b> e de interesse do pessoal da rede social inovadora e bastante proveitosa Telegram. \n\n\n<b>Esse é apenas um dos projetos que tenho por lá.\nDedicar-me-ei a ele com o mesmo carinho e comprometimento que tenho com meus outros projetos. \nCriado com a ajuda de companheiros indispensáveis pretendemos trazer o melhor conteúdo possível.</b>\n\n<i>Por favor se inscreva no projeto aprender para que possa conhecer os demais projetos.</i>\n\nUm abraço, Jota Drake.  😄",
		inSub_l8=>"✏️<b>| Escolha uma das redações referente ao tema:</b>",
		inSub_l9=>"✏️<b>| Escolha uma das redações referente ao tema:</b>",
		inSub_l10=>"✏️<b>| Escolha uma das redações referente ao tema:</b>",
		inSub_l11=>"✏️<b>| Escolha uma das redações referente ao tema:</b>",
		inSub_l12=>" Telegram.me/aprender",
		inSub_l13=>"👤| <b>Candidata: Mariana Moura Goes</b>\n⭐️| <b>Tema: ‘A persistência da violência contra a mulher na sociedade brasileira’.</b>\n\n\nA mulher vem, ao longo dos séculosXX e XXI, adquirindo valiosas conquistas, como o direito de votar e ser votada.   Entretanto, a violência contra este gênero parece não findar, mesmo com a existência de dispositivos legais que protegem a mulher. A diminuição dos índices deste tipo de violência ocorrerá no momento em que os dispositivos legais citados passarem a ser realmente eficazes e o machismo for efetivamente combatido, desafios esses que precisam ser encarados tanto pelo Estado quanto pela sociedade civil.",
		inSub_l14=>"👤| <b>Candidata: Amanda Castro</b>\n⭐️ Violência feminina\n\nA violência contra a mulherno Brasil tem apresentado aumentos significativos nas últimas décadas. De acordo com o Mapa da Violência de 2012, o número de mortes por essa causa aumentou em 230% no período de 1980 a 2010.\n\nAlém da física, o balanço de 2014 relatou cerca de 48% de outros tipos de violência contra a mulher, dentre esses a psicológica.  \nNesse âmbito, pode-se analisar que essa problemática persiste por ter raízes históricas e ideológicas.",
		inSub_l15=>"👤| <b>Candidata: Anna Beatriz Wreden</b>\n⭐️ Parte desfavorecida\n\nDe acordo com o sociólogo Émile Durkheim, a sociedade pode ser comparada a um “corpo biológico” por ser, assim como esse, composta por partes que interagem entre si. Desse modo, para que esse organismo seja igualitário e coeso, é necessário que todos os direitos dos cidadãos sejam garantidos. \nContudo,no Brasil, isso não ocorre, pois em pleno século XXI as mulheres ainda são alvos de violência.\n\n Esse quadro de persistência de maus tratos com esse setor é fruto, principalmente, de uma cultura de valorização do sexo masculino e de punições lentas e pouco eficientes por parte do Governo.",
		inSub_l16=>"👤| <b>Candidata: Cecília Maria Leite </b>\n⭐️ Violação à dignidade feminina\n\nHistoricamente, o papel feminino nas sociedades ocidentais foi subjugado aos interesses masculinos e tal paradigma só começou a ser contestado em meados do século XX, tendo a francesa Simone de Beauvoir como expoente. Conquanto tenham sido obtidos avanços no que se refere aos direitos civis, a violência contra a mulher é uma problemática persistente no Brasil, uma vez que ela se dá- na maioria das vezes- no ambiente doméstico. \n\nEssa situação dificulta as denúncias contra os agressores, pois muitas mulheres temem expor questões que acreditam serde ordem particular.",
		inSub_l17=>"👤| <b>Candidato: Anônimo</b>\n⭐️ A Intolerância religiosa\n\nDesde o processo de colonização brasileira,quando os portugueses chegaram no Brasil, jámanifestaram a intolerância religiosa para com os índios.\n Sobrepuseram a eles a religião católica e tiraram-lhes o direito de suas crenças até então vigentes. Esse problema ainda é recorrente nos dias atuais,marcado por discriminações e violências o que torna evidente a necessidade da tomada de medidas pelos órgãos governamentais e sociedade civil para minimizá-lo.",
		inSub_l18=>"👤| <b>Candidato: Anônimo</b>\n⭐️ Xenofobia Religiosa\n\nUm fator que prepondera em pleno século XXI é a homogeinização cultural, cujo objetivo e unir culturas, religiões e práticas diferentes, a fim de acabar com discussões, críticas, guerras, entre outros fatores. ",
		inSub_l19=>"👤| <b>Candidata: Emile Espanha</b>\n⭐️Cultura preconceituosa\n\nA intolerância religiosa em nosso pais é reflexo de uma cultura dita preconceituosa e conservadora que se estendeu desde os primórdios até os dias atuais, a mesma gera atos ilícitos.\n\nA diversidade entre religiões é notável porém a inaceitação de diferentes crenças também, um exemplo disso é visto a história brasileira, onde os índios nativos obtiveram contrariedade na pratica de sua doutrinas, já que os portugueses forcejaram impor seus princípios.",
		inSub_l20=>"👤| <b>Candidata: Daiane Novelli</b>\n⭐️ Imigração no Brasil.\n \n\nMorar no Brasil é o sonho de muitos imigrantes, seja para fugir da miséria, da falta de emprego ou de catástrofes naturais que assolaram seus países, que muitas vezes já eram pobres. Desta forma, o Brasil torna-se o destino dessas pessoas que estão em busca de emprego e uma vida melhor. Mas como o Brasil pode oferecer uma vida melhor à essas pessoas, se não a oferece nem aos próprios brasileiros?\n\nUm país como o Brasil que sofre com os péssimos serviços públicos como educação, saúde, segurança e, principalmente com a desigualdade social, não está no melhor momento para receber ainda mais pessoas. Em contra partida, existe o lado com, esses imigrantesfazem girar a economia de diversos estados do país, como o Amazonas, Santa Catarina e São Paulo, ocupando cargos de baixa renda e serviço pesado.",
		inSub_l21=>"👤| <b>Candidato: Vinícius Prado.</b>\n⭐️ Consequências da Imigração.\n\nNos últimos anos o Brasil vem crescendo economicamente, e isso faz com que pessoas de outros países que se sentem insatisfeitas com suas situações econômicas e/ou sociais, pensem em buscar uma maior qualidade de vida no Brasil. Como já ocorrido na imigraçãodo fim do século XIX, quando imigrantes vieram ao Brasil para trabalhar nas lavouras de café.\n\n A imigração para o Brasil pode ser prejudicial para o país se não for bem ordenada.",
		inSub_l22=>"👤|<b>Candidata: Bianca Solto</b>\n⭐️ A imigração no Brasil.\n\nO movimento imigratório é um fenômeno histórico na constituição da sociedade brasileira. A sua gênese ocorreu após a abolição da escravidão, quando necessitou-se de mão-de-obra livre para trabalhar nas lavouras de café. Na realidade   contemporânea, as causas responsáveis pela imigração também são econômicas como as crises presenciadas pelos EUA e pela Europa. Dessa forma, como essa mobilidade espacial de trabalhadores influencia o país?  \n \n\nApesar do aspecto econômico ocorrido no passado, outros motivos causam a expulsão de contingentes populacionais de um país para outro. São exemplos a fuga de conflitos evidenciados no Oriente Médio, causas naturais como o terremoto no Haiti e pobreza como na Bolívia. A imigração apresenta aspectos negativos como o xenofobismo, sentimento de aversão ao estrangeiro e causa discriminação e perseguição.",
		inSub_l23=>"👤| <b>Candidata: Aline de Carvalho.</b>\n⭐️  Tema: Operação Lei Seca\n\n Com a Crise de 1929 nos Estados Unidos, Rooseveh implementou a Lei Seca para minimizar os problemas e acidentes no trabalho. Agora, o Governo Federal implementou a Lei Seca com o intuito de reduzir o número de vítimas em acidentes de trânsito envolvendo motoristas embriagados. Dentro desse contexto há dois importantes fatores que devem ser levados em consideração: a redução nos acidentes de trânsito e o aumento da conscientização da população brasileira no que tange os riscos de se dirigir embriagado.",
		inSub_l24=>"👤| <b>Candidato anônimo</b>,\n⭐️ Tema: Trânsito e morte\n \nEm primeiro lugar, é impossível negar a redução de acidentes e de vítimas fatais. O fortalecimento das punições àqueles que dirigem alcoolizados fez com que muitos temessem a perda da carteira e o valor em dinheiro da multa, além de uma possível prisão. Assim, por meio de campanhas midiáticas, a opção por táxi ou pelo “motorista da rodada” ganhou força. Para que isso não se perca, é muito importante que as punições se mantenham. Nesse sentido, a mídia tem protagonismo na exposição de estatísticas e dados.",
		inSub_l25=>"Por favor, escolha entre as opções do <b>teclado:</b>",
		inSub_l26=>"O assunto a ser tratado deve ser apresentado de maneira clara, existem assuntos que abrem espaço para definições, citações, perguntas, exposição de ponto de vista oposto, comparações, descrição.\n\n<b>Confira algumas elementos que podem ser utilizados:</b>\n\n🔹 <i>Afirmação geral sobre o assunto</i>\n🔹<i>Consideração do tipo histórico</i>\n🔹 <i>filosófico</i>\n🔹 <i>Citação</i>\n🔹 <i>Comparação</i>\n🔹 <i>Uma ou mais perguntas</i>\n🔹 <i>Narração</i>",
		inSub_l27=>"Por favor, escolha entre as opções do <b>teclado:</b>",
		inSub_l28=>"Por favor, escolha entre as opções do <b>teclado:</b>",
		inSub_l29=>"💡<b>Narração</b>\n\nTexto em que se contam fatos ocorridos em determinado tempo e lugar, envolvendo personagens.\n\n💡<b>Descrição:</b>\n\nTexto em que se indicam as características de um determinado objeto, pessoa, ambiente ou paisagem.\n\n💡<b>Dissertação:</b>\n\nDissertar significa “falar sobre”.\nÉ o texto em que se expõem ideias, seguidas de argumentos que as comprovem.",
		inSub_l30=>"<b>Enredo</b> é o encadeado de ações executadas ou a executar pelas personagens numa ficção, a fim de criar sentido ou emoção no espectador.\n\n<b>Personagens:</b> são seres que se movimentam, se relacionam no texto e dão lugar à trama que se estabelece na ação.\n\n<b>Espaço:</b> local da ação. Pode ser físico ou psicológico.\n\n<b>Tempo:</b> época em que se passa aação\n\n<b>Cronologia:</b> Ordem e data dos acontecimentos. O tempo convencional (horas, dias, meses);",
		inSub_l31=>"Veja a seguir um tipo de roteiro. Siga os passos:\n\n<b>1)Interrogue o tema;\n\n2)Responda-o de acordo com a sua opinião;\n\n3)Apresente um argumento básico;\n\n4)Apresente argumentos auxiliares;\n\n5)Apresente um fato-exemplo;\n\n6)Conclua.</b>",
		inSub_l32=>"<b>Ela precisa ser direta, simples e objetiva.</b> Na teoria parece difícil, mas é mais simples do que parece. Tenha em mente o seguinte:\n\n1) <b>Todo o texto gira em torno da introdução que você elaborou;</b> é nessa introdução que vamos dizer do que o texto vai falar.\n\n2) O tamanho ideal de uma introdução é de <b>2 ou 3 frases.</b>\n\n3) Em cada parágrafo posterior do desenvolvimento,devem ser defendidas as frases <b>elaboradas na introdução.</b>",
		inSub_l33=>"O desenvolvimento não pode ser uma <b>continuidade da introdução.</b> Esses dois têm uma relação íntima, mas independente. Como assim?  Isso significa que, ao começar o desenvolvimento, é como se estivéssemos começando o texto novamente. \nNunca devemos iniciá-lo com os termos:\n\nPor causa disso…\nCom isso…\nBaseado nisso…\nDessa maneira…etc.",
		inSub_l34=>"Quando você for concluir seu texto, <b>responda pelo menos uma dessas perguntas sobre sua redação:</b>\n\n<b>Que lição pode ser tirada disso?</b>\n\n<b>Como resumir a solução para esse problema?</b>\n\n<b>O que merece ser destacado nesse raciocínio?</b>\n\nElabore sua conclusão respondendo essas perguntas em relação ao seu texto e você terá uma boa conclusão.",
		inSub_l35=>"📎| <b>No Enem a redação é corrigida considerando 5 competências:</b>\n\n<b>1:</b> Demonstrar domínio da norma culta da língua escrita.\n\n<b>2:</b> Compreender a proposta da redaçãoe aplicar conceitos das várias áreas de conhecimentopara desenvolver o tema, dentro dos limites estruturais do texto dissertativo-argumentativo.",
		inSub_l36=>"Saiba como os avaliadores definem sua nota final na redação do Enem Cada uma das 5 competências recebe uma nota quevaria de zero a 200. Depois, os avaliadores somam as notas de todas as competências, atribuindo um valor final para sua redação, que pode variar entre zero e 1000.",
		inSub_l37=>"Cada redação é corrigida por, no mínimo,dois corretores e às cegas, ou seja, nenhum dos dois sabe que nota foi dada pelo outro e nem qual foi o outro corretor, para haver a imparcialidade que o processo exige.",
		b6=>"0⃣| <b>Envie seus  textos</b> para que nosso Bot poste no canal @Redacao que <b>serão avaliados através de likes por membros colaborativos.</b>\n\nUtilize sua habilidade em prol de ajudar uns aos outros exercitando o conhecimento e aprendendo mutuamente. Divulgue sua redação, ajude outros estudantes e aprenda com eles.\n\n✋🏻 <b>Por favor, antes de enviar sua redação leia os termos e privacidade da ferramenta, e veja o que você pode e não pode enviar.</b>",
		prox1=>"1⃣| <b>Envie sua redação de maneira anônima:</b>\n \nTanto nos preocupamos com sua privacidade que permitimos que você possa enviar suas redações de forma anônima para o bot. Caso não deseje que outros usuários saibam quem você é, <b>basta não colocar seu nome na redação.</b>",
		prox2=>"2⃣| <b>Somente serão permitidos envios de textos de autoria do próprio usuário, com respeito a Lei 9.610 de 1998 (Lei de Direito Autoral).</b>\n\nO conteúdo das redações não poderá desrespeitar leis vigentes tais como por exemplo incitação ao crime e injúria racial de qualquer espécie. O bot poderá, a seu exclusivo critério, <b>excluir quaisquer REDAÇÕES que entenda violar as regras aqui estabelecidas.</b>",
		prox3=>"3⃣| O USUÁRIO garante a <b>propriedade intelectual</b> do mesmo, não cabendo ao bot a responsabilização por qualquer violação de <b>direitos autorais realizada pelo USUÁRIO.</b>",
		prox4=>"4⃣| <b>Não corrigimos qualquer redação enviada</b>\n\n A correção é colaborativa, ou seja, os usuários ajudam uns aos outros através de <b>likes nas redações, exercitando o conhecimento e aprendendo mutuamente no canal.</b>",
		prox5=>"5⃣| <b>Não serão aceitas redações com erros considerados 'absurdos gramaticais'.</b>\n\nErre com moderação, revise sua redação antes de serem enviadas. Não faremos correções, por isso, não cometa erros gramaticais simples. <b>Caso ocorra a redação será imediatamente removida.</b> <i>Alguns erros serão desconsiderados e aceitos.</i>",
		prox6=>"6⃣| <b>Usuários que:</b>\n\n<i> - Descumprir as disposições do presente TERMO;\n - Descumprir com seus deveres de USUÁRIO;\n - Praticar atos fraudulentos ou dolosos; Ou usar nas REDAÇÕES  qualquer atitude que cause algum dano a terceiros ou ao próprio BOT ou tenham a potencialidade de assim o fazer.</i>\n\n✖️ <b>Pelas razões aqui elencadas, todos as REDAÇÕES do USUÁRIO serão removidas.</b>",
		prox7=>"7⃣| <i>As redações enviadas devem seguir os seguintes requisitos: </i>\n\n- <b>Ter no mínimo 300 caracteres</b>\n- <b>Está de acordo com os termos anteriores</b>\n- <b>Domínio do idioma na norma padrão de escrita.</b>\n- <b>Desenvolvê-lo dentro dos padrões dissertativo-argumentativo.</b>\n- <b>Leve em consideração a lei dos direitos humanos.</b>",
		prox8=>"8⃣| <b>ENVIE SEU TEXTO SOBRE QUALQUER TEMA QUE ESTEJA DENTRO DOS CRITÉRIOS APRESENTADOS, LEVANDO EM CONSIDERAÇÃO A LEI DOS DIREITOS HUMANOS</b>\n\n▶️| <b>Você será redirecionado ao bot que recebe os textos:</b>"
	);
	if($key){
		if(array_key_exists($cod, $str)){
			return $cod;
		}else{
			return 'Mensagens diferentes do usual';
		}	
	}
	if(array_key_exists($cod, $str)){
		return $str[$cod];
	}else{
		return $str[defaultMsg];
	}
}
function inlineCorresp($pos){
	$arr = array(
		b1=>array(inSub_l25,inSub_l26,inSub_l27,inSub_l28),
		b2=>array(inSub_l4,inSub_l5,inSub_l6,inSub_l7),
		b3=>array(inSub_l8,inSub_l9,inSub_l10,inSub_l11),
		inSub_l8=>array(inSub_l13,inSub_l14,inSub_l15,inSub_l16),
		inSub_l9=>array(inSub_l17,inSub_l18,inSub_l19),
		inSub_l11=>array(inSub_l20,inSub_l21,inSub_l22),
		inSub_l10=>array(inSub_l23,inSub_l24),
		inSub_l25=>array(inSub_l29,inSub_l30,inSub_l31),
		inSub_l27=>array(inSub_l32,inSub_l33,inSub_l34),
		inSub_l28=>array(inSub_l35,inSub_l36,inSub_l37),
		b6=>array(prox1),
		prox1=>array(prox2),
		prox2=>array(prox3),
		prox3=>array(prox4),
		prox4=>array(prox5),
		prox5=>array(prox6),
		prox6=>array(prox7),
		prox7=>array(prox8)
	);
	if(array_key_exists($pos, $arr)){
		return $arr[$pos];
	}else{
		foreach($arr as $row => $innerArray){
			foreach($innerArray as $innerRow => $value){
				if($value == $pos){
					return $innerArray;
				}
			}
		}
		return null;
	}
}