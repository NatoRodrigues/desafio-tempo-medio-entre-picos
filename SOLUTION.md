Solução para o Desafio - Tempo Médio entre Picos Implementação da Solução: Front-End: HTML e Bootstrap: Utilizei HTML para estruturar a página e o framework Bootstrap para facilitar o design responsivo, garantindo uma boa apresentação em dispositivos de diferentes tamanhos.

JavaScript e Chart.js: Para dinamizar a exibição dos dados, utilizei JavaScript para fazer requisições AJAX para o back-end e a biblioteca Chart.js para renderizar o gráfico de forma interativa e amigável.

Exibição do Tempo Médio: Adicionei um elemento na página para exibir o tempo médio entre os picos, que é atualizado automaticamente quando os dados são carregados ou alterados.

Back-End (PHP): Classe TempoMedioEntrePicos: Implementei uma classe em PHP para calcular o tempo médio entre os picos com base nos dados fornecidos. Essa classe identifica os picos verdadeiros no conjunto de dados e realiza os cálculos necessários para determinar o tempo médio.

Integração com o Front-End: O back-end fornece os dados do gráfico e o tempo médio em formato JSON, que são consumidos pelo front-end por meio de uma requisição AJAX, garantindo uma experiência dinâmica e interativa ao usuário.

Estratégias: Identificação de Picos: Utilizei um algoritmo simples para identificar picos nos dados fornecidos, verificando se um ponto é maior que seus vizinhos e se excede um determinado valor mínimo (neste caso, 50).

Cálculo do Tempo Médio: Calculei o tempo médio entre os picos encontrados, considerando a diferença de índices entre eles e realizando as operações necessárias para converter o tempo em minutos e segundos.

Dados para Validação: Utilizei três conjuntos de dados de exemplo para validar a implementação. Cada dados representa uma série temporal com valores simulados para teste do algoritmo.

Dificuldades e Dúvidas Encontradas: Durante o desenvolvimento da solução, uma das principais dificuldades foi identificar corretamente os picos verdadeiros e calcular o tempo médio entre eles. Isso exigiu uma compreensão detalhada dos requisitos do problema e a implementação de algoritmos eficientes para realizar esses cálculos.

Execução da Solução: Para executar a solução, é necessário um servidor web com suporte para PHP. Basta colocar o arquivo PHP (backend.php) no servidor e acessar a página HTML pelo navegador.

Certifique-se de que o servidor esteja configurado corretamente para executar arquivos PHP.

Com essa abordagem, o front-end exibe dinamicamente um gráfico com os dados fornecidos pelo back-end e o tempo médio entre os picos, proporcionando uma experiência interativa e informativa ao usuário.
