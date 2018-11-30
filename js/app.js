var app = angular.module("myApp", []);
/*
app.config(['$routeProvider',
  function($routeProvider) {
     $routeProvider
        .when('/', {
            controller: 'SwiperController', 
            templateUrl: '/views/home.html' 
        })        
        .otherwise({
            redirectTo: '/'
        })
}]);
*/
//Homepage
app.controller('SwiperController1', ['$scope', '$http', function($scope, $http){
    //console.log('entrou swiper')
    $http.get('/techsulsite/json/techsul.json').success(function (data){
        $scope.slides = data.swiper
    })
    //console.log('saiu swiper')
}])

app.controller('SwiperController', ['$scope', function($scope) {
  $scope.slides = [ 
    { image: 'images/slider-classic-slide-3-1920x710.jpg', title: 'Bem-vindo à Techsul', subtitle: 'As melhores soluções para a área do retalho e mobilidade'},    
    { image: 'images/slider-classic-slide-1-1920x710.jpg', title: 'Software de Gestão PHC', subtitle: 'Acelere os seus negócios com a Techsul'},
    { image: 'images/slider-classic-slide-2-1920x1280.jpg', title: 'Software Certificado', subtitle: 'Serviços Líderes para a sua restauração'}
  ];      
}]);


app.controller('SoftwareController', ['$scope', '$http', function($scope, $http){
    $http.get('/techsulsite/json/techsul.json').success(function (data){
        $scope.boxes = data.software
    })
}])

app.controller('PriceController', ['$scope', '$http', function($scope, $http){
    $http.get('/techsulsite/json/techsul.json').success(function (data){        
        $scope.prices = data.prices
    })
}])

app.controller('ReasonsController', ['$scope', '$http', function($scope, $http){
    $http.get('/techsulsite/json/techsul.json').success(function (data){        
        $scope.reasons = data.reasons
    })
}])

app.controller('TestimonialsController', ['$scope', '$http', function($scope, $http){
    $http.get('/techsulsite/json/techsul.json').success(function (data){        
        $scope.quotes = data.quotes
    })
}])

app.controller('TestimonialsController1', ['$scope', function($scope) {
  $scope.quotes = [ 
    { image: 'images/solverde-112x99.png', title: 'José Godinho', subtitle: 'Solverde', text: 'Assim que começamos a trabalhar com a Techsul, constatámos que temos um parceiro com competência e eficácia nas diversas áreas que conosco trabalham. Não podimos ter encontrado melhor e tão perto de nós.'}, 
    { image: 'images/century21-112x99.jpg', title: 'Fernando da Ponte', subtitle: 'Century21 Angola', text: 'Mesmo a 8.000 km de distancia a Techsul tem respondido a todos as solicitações da Condo®, criando uma ferramenta de trabalho para a gestão de condomínios, que veio de alguma forma revolucionar a prestação de serviços de gestão de condomínios em Angola e aproximar os condóminos da gestão.'}, 
  ];      
}]);


app.controller('PartnersController', function($scope, $http){    
    $http.get('/techsulsite/json/techsul.json')
        .success(function (data){
            $scope.partners = data.partners
        })
})

app.controller('PartnersController2', ['$scope', '$http', function($scope, $http) {
    //$http GET
    $http({
        method: 'GET',
        url: '/techsulsite/json/partners.json',
        dataType: 'json'
    }, data).then(function successCallback(response) {
        $scope.partners = response.data
    }, function errorCallback(response) {
        alert("Error. Try Again!")
    })
}])

app.controller('PartnersController1', ['$scope', function($scope) {  
  
  $scope.partners = [ 
    { image: 'images/portfolio/active4.png', title: 'Active 4'},
    { image: 'images/portfolio/ae.png', title: 'Active 4'},
    { image: 'images/portfolio/albusado.png', title: 'Active 4'},
    { image: 'images/portfolio/ama.png', title: 'Active 4'},
    { image: 'images/portfolio/aruina.png', title: 'Active 4'},
    { image: 'images/portfolio/bluestar.png', title: 'Active 4'},
    { image: 'images/portfolio/casanostra.png', title: 'Active 4'},
    { image: 'images/portfolio/century21Angola.png', title: 'Active 4'},
    { image: 'images/portfolio/luiscunha.png', title: 'Active 4'},
    { image: 'images/portfolio/decorvidro.png', title: 'Active 4'},
    { image: 'images/portfolio/equiauto.png', title: 'Active 4'},    
    { image: 'images/portfolio/logoEsa.png', title: 'Active 4'},
    { image: 'images/portfolio/fortedovale.png', title: 'Active 4'},
    { image: 'images/portfolio/logogalejardins.png', title: 'Active 4'},
    { image: 'images/portfolio/galetaxis.png', title: 'Galé Taxis'},
    { image: 'images/portfolio/grancafe.png', title: 'Gran Café'},
    { image: 'images/portfolio/grupoliberto.png', title: 'Grupo Liberto'},
    { image: 'images/portfolio/imagine.png', title: 'Imagine'},
    { image: 'images/portfolio/kissfm.png', title: 'Kiss FM Algarve'},
    { image: 'images/portfolio/libertosbar.png', title: 'Libertos Lounge Club'},
    { image: 'images/portfolio/lojacidadao.png', title: 'Loja do Cidadão'},
    { image: 'images/portfolio/lusoaventura.png', title: 'Luso Aventura'},
    { image: 'images/portfolio/marsolve.png', title: 'Mar Solve'},
    { image: 'images/portfolio/monicabarreto.png', title: 'Monica & Barreto'},
    { image: 'images/portfolio/mslaser.png', title: 'MS Laser'},
    { image: 'images/portfolio/mundodocafe.png', title: 'Mundo do Café Delta'},
    { image: 'images/portfolio/naturetica.png', title: 'Naturética'},
    { image: 'images/portfolio/nicetuktuk.png', title: 'Nice Tuk Tuk'},
    { image: 'images/portfolio/nicetrip.png', title: 'Nice Trip Rent-a-car'},
    { image: 'images/portfolio/oliva.png', title: 'Oliva'},
    { image: 'images/portfolio/panitomole.png', title: 'Panito Mole'},
    { image: 'images/portfolio/paodaaldeia.png', title: 'Pão da Aldeia'},
    { image: 'images/portfolio/procitrus.png', title: 'Ocean Eye'},
    { image: 'images/portfolio/santacasaalbufeira.png', title: 'Santa Casa de Albufeira'},
    { image: 'images/portfolio/logoFederacaoCacadores.png', title: 'Federação Caçadores'},
    { image: 'images/portfolio/solmg.png', title: 'Solverde'},
    { image: 'images/portfolio/casinomontegordo.png', title: 'Solverde Casino Montegordo'},
    { image: 'images/portfolio/solar.png', title: 'Solar FM'},
    { image: 'images/portfolio/tesouros.png', title: 'Tesouros do Mundo'},
    { image: 'images/portfolio/verdeminho.png', title: 'Verde Minho'},
    { image: 'images/portfolio/vogtry.png', title: 'Active 4'},
    { image: 'images/portfolio/costanova.png', title: 'Active 4'},
    { image: 'images/portfolio/aveiroemotions.png', title: 'Aveiro Emotions'},
  ]
}])

// Zonesoft
app.controller('ZsRestController', ['$scope', function($scope) {
  $scope.short = 'Um software desenhado para ser fiável e fácil de usar e com todas as funcionalidades que necessita. Certificado pela Autoridade Tributária e com a garantia de todas as atualizações legalmente exigidas, de forma gratuita e rápida.',
  $scope.boxes = [ 
    { icon: 'desktop', title: 'ZS BMS', description: 'ZS BMS é um portal online que permite a gestão remota de toda a informação de produtos, stocks, vendas, compras e fornecedores, e o acompanhamento em tempo real do negócio com apresentação de gráficos, mapas e relatórios.'}, 
    { icon: 'cloud', title: 'ZS CLOUD', description: 'A informação gerada pelos pontos de venda é sincronizada em tempo real, armazenada na cloud, sem custos adicionais, para que tenha toda a sua informação sempre disponível e segura.'}, 
    { icon: 'users', title: 'FREEBEE', description: 'Plataforma de fidelização integrada nos softwares Zone Soft. Permite aos clientes obter vantagens num conjunto alargado de pontos de venda e tornar o seu negócio alvo da atenção de milhares de pessoas.'}, 
    { icon: 'platter', title: 'ZS REST APP', description: 'Novo serviço totalmente integrado no software ZS REST. Traga todos os seus produtos para a mesa do seu cliente, num tablet android, e proporcione um serviço mais rápido e eficiente.'},
    { icon: 'coin-euro', title: 'AUTORIDADE TRIBUTÁRIA', description: 'Se a factura já está com o cliente porque não estar também com a AT? Software certificado pela AT, com opção de comunicação das faturas em tempo real.'},
    { icon: 'wifi', title: 'PAGAMENTOS MÓVEIS', description: 'UM NOVO MEIO DE PAGAMENTO Integração nativa do serviço MB WAY e das carteiras virtuais MEO Wallet e SEQR Wallet nos softwares Zone Soft, para que possa disponibilizar os meios de pagamento mais inovadores.'},
    { icon: 'smartphone', title: 'GADGETS', description: 'Ligação a balanças, PDAs, TPAs, monitores de cozinha, monitores de publicidade, tablets e smartphones.'}, 
    { icon: 'book', title: 'EMENTA DIGITAL', description: 'Visualização de produtos, comentários, famílias e subfamílias. Possibilidade do cliente realizar o seu pedido com validação pelo empregado.'},
    { icon: 'wifi', title: 'REGISTO DE PEDIDOS', description: 'Possibilidade de realizar todos os pedidos dos clientes na mesa, com envio para a cozinha. Impressão de consulta de mesa (impressora Bluetooth ou outra).'},
    { icon: 'desktop', title: 'APRESENTAÇÃO DA CONTA', description: 'Apresentação de conta a cliente.Fecho de conta com dados do cliente.Verificação de conta pelo cliente.Introdução dos dados fiscais para fatura.Programa de fidelização freebee®.Impressão de fatura (impressora Bluetooth ou outra).Envio de documento para AT (opcional).Disponível pagamentos com carteiras virtuais (Meo Wallet e SEQR Wallet).'}    
  ];      
}]);

app.controller('ZsPosController', ['$scope', function($scope) {
  $scope.short = 'A solução de software com as funcionalidades ideais para o comércio a retalho, fiável e de configuração simples e aberta. Um bom investimento para ajudar o seu negócio a crescer.',
  $scope.boxes = [ 
    { icon: 'desktop', title: 'ZS BMS', description: 'ZS BMS é um portal online que permite a gestão remota de toda a informação de produtos, stocks, vendas, compras e fornecedores, e o acompanhamento em tempo real do negócio com apresentação de gráficos, mapas e relatórios.'}, 
    { icon: 'cloud', title: 'ZS CLOUD', description: 'A informação gerada pelos pontos de venda é sincronizada em tempo real, armazenada na cloud, sem custos adicionais, para que tenha toda a sua informação sempre disponível e segura.'}, 
    { icon: 'users', title: 'FREEBEE', description: 'Plataforma de fidelização integrada nos softwares Zone Soft. Permite aos clientes obter vantagens num conjunto alargado de pontos de venda e tornar o seu negócio alvo da atenção de milhares de pessoas.'}, 
    { icon: 'briefcase', title: 'PRODUTOS', description: 'Gestão por cores, tamanhos, data de validade, lotes, propriedades e características.'},
    { icon: 'coin-euro', title: 'AUTORIDADE TRIBUTÁRIA', description: 'Se a factura já está com o cliente porque não estar também com a AT? Software certificado pela AT, com opção de comunicação das faturas em tempo real.'},
    { icon: 'wifi', title: 'PAGAMENTOS MÓVEIS', description: 'UM NOVO MEIO DE PAGAMENTO Integração nativa do serviço MB WAY e das carteiras virtuais MEO Wallet e SEQR Wallet nos softwares Zone Soft, para que possa disponibilizar os meios de pagamento mais inovadores.'},
    { icon: 'smartphone', title: 'GADGETS', description: 'Ligação a balanças, PDAs, TPAs, monitores de cozinha, monitores de publicidade, tablets e smartphones.'}  
  ];      
}]);

app.controller('ZsPosMobileController', ['$scope', function($scope) {
  $scope.short = 'Sem custos elevados e sem a necessidade de um computador, tenha o seu ponto de venda no seu smartphone ou tablet. Agora, de uma forma simples e rápida, tenha o seu POS móvel para que possa fazer e gerir o seu negócio, onde quer que esteja e ligado a uma impressoras de talões portáteis via bluetooth. A solução ideal para o seu negócio sempre em movimento, com o backup de toda a informação na cloud.',
  $scope.boxes = [ 
    { icon: 'desktop', title: 'ZS BMS', description: 'ZS BMS é um portal online que permite a gestão remota de toda a informação de produtos, stocks, vendas, compras e fornecedores, e o acompanhamento em tempo real do negócio com apresentação de gráficos, mapas e relatórios.'}, 
    { icon: 'cloud', title: 'ZS CLOUD', description: 'A informação gerada pelos pontos de venda é sincronizada em tempo real, armazenada na cloud, sem custos adicionais, para que tenha toda a sua informação sempre disponível e segura.'}, 
    { icon: 'users', title: 'FREEBEE', description: 'Plataforma de fidelização integrada nos softwares Zone Soft. Permite aos clientes obter vantagens num conjunto alargado de pontos de venda e tornar o seu negócio alvo da atenção de milhares de pessoas.'}, 
    { icon: 'desktop', title: 'INTERNET', description: 'Possibilidade de funcionar e faturar sem ligação à internet, com uma sincronização com a cloud automática mínima de 5 em 5 dias.'},
    { icon: 'map-marker', title: 'GEOLOCALIZAÇÃO', description: 'Fature onde quiser, quando quiser, no seu smartphone ou tablet, com controlo de localização e possibilidade de associar a venda à mesma.'},
    { icon: 'coin-euro', title: 'AUTORIDADE TRIBUTÁRIA', description: 'Se a factura já está com o cliente porque não estar também com a AT? Software certificado pela AT, com opção de comunicação das faturas em tempo real.'},
    { icon: 'wifi', title: 'PAGAMENTOS MÓVEIS', description: 'UM NOVO MEIO DE PAGAMENTO Integração nativa do serviço MB WAY e das carteiras virtuais MEO Wallet e SEQR Wallet nos softwares Zone Soft, para que possa disponibilizar os meios de pagamento mais inovadores.'},
    { icon: 'smartphone', title: 'GADGETS', description: 'Ligação a balanças, PDAs, TPAs, monitores de cozinha, monitores de publicidade, tablets e smartphones.'}  
  ];      
}]);

// TripManager
app.controller('TripManagerController', ['$scope', function($scope) {
  $scope.short = 'O Tripmanager é um sistema integrado de gestão de atividades maritimo turísticas que abrange todas as áreas do negócio. Trata-se de uma linha de soluções completamente integradas que proporcionam um controlo absoluto sobre todos os procedimentos, desde a definição das especificidades e características do negócio, planificação de atividades, calendarização de passeios, divulgação, visualização de reservas, listagens e relatórios, Dashboard, entre outros. Desenvolvido com recurso às mais recentes tecnologias, o Tripmanager assenta na plataforma cloud, tornando-o um software altamente disponível e adaptável, que potencia o negócio e confere à sua empresa um dinamismo sem antecedentes.',
  $scope.boxes = [ 
    { icon: 'map', title: 'Em qualquer lugar', description: 'ZS BMS é um portal online que permite a gestão remota de toda a informação de produtos, stocks, vendas, compras e fornecedores, e o acompanhamento em tempo real do negócio com apresentação de gráficos, mapas e relatórios.'}, 
    { icon: 'cog', title: 'Fléxivel', description: 'A informação gerada pelos pontos de venda é sincronizada em tempo real, armazenada na cloud, sem custos adicionais, para que tenha toda a sua informação sempre disponível e segura.'}, 
    { icon: 'desktop', title: 'Multiplataforma', description: 'Plataforma de fidelização integrada nos softwares Zone Soft. Permite aos clientes obter vantagens num conjunto alargado de pontos de venda e tornar o seu negócio alvo da atenção de milhares de pessoas.'}, 
    { icon: 'cloud', title: 'Cloud', description: 'Possibilidade de funcionar e faturar sem ligação à internet, com uma sincronização com a cloud automática mínima de 5 em 5 dias.'},
    { icon: 'flag', title: 'Multilingue', description: 'Fature onde quiser, quando quiser, no seu smartphone ou tablet, com controlo de localização e possibilidade de associar a venda à mesma.'},
    { icon: 'coin-euro', title: 'Á medida de cada etapa', description: 'Se a factura já está com o cliente porque não estar também com a AT? Software certificado pela AT, com opção de comunicação das faturas em tempo real.'},
  ];      
}]);

app.controller('TripManagerPricesController', ['$scope', function($scope) {  
  $scope.boxes = [ 
    { title: 'Basic', prefered: '', price: '75', setup: 'Setup 750€', attrs:['Operadores','Agentes','Clientes','Actividades','Saidas','Embarcações','Tipo Passageiros','Paypal','Traduções Website','Relatórios']}, 
    { title: 'Standard', prefered: '_prefered', price: '150', setup: 'Setup 1000€',attrs:['Operadores','Agentes','Clientes','Actividades','Saidas','Embarcações','Tipo Passageiros','Paypal','Traduções Website','Relatórios','Extras','Transportes','Dashboard','Histórico'] }, 
    { title: 'Pro', prefered: '', price: '250', setup: 'Setup 1500€',attrs:['Operadores','Agentes','Clientes','Actividades','Saidas','Embarcações','Tipo Passageiros','Paypal','Traduções Website','Relatórios','Extras','Transportes','Dashboard','Histórico','Notificações','Códigos Promocionais','HIPAY','PDAs Check IN']}, 
  ];      
}]);

//PHC
app.controller('PhcLeftController', ['$scope', '$sce', function($scope, $sce) {  
  $scope.trustSrc = function(src) {
    return $sce.trustAsResourceUrl(src);
  };

  $scope.boxes = [ 
    { id:'1', image: 'images/phcimg/gestao_completo.jpg', title: 'Gestão', src: 'https://www.youtube.com/embed/osVUGn8Znl0', text: 'O módulo Gestão faz a gestão de clientes e fornecedores, stocks e encomendas, propostas e folhas de obra, tesouraria e bancos.'},
    { id:'2', image: 'images/phcimg/phc_clinica.jpg', title: 'PHC Clínica CS', src: 'https://www.youtube.com/embed/HPHV0k39Cds', text: 'O módulo Clínica alinha na gestão de duas vertentes: informação confidencial sobre cada Paciente e o seu historial. Por outro lado pode ser integrado com o módulo Gestão, a gestão financeira e faturação das marcações aos Pacientes e Entidades.'},
    { id:'3', image: 'images/phcimg/crm_comercial.jpg', title: 'PHC CRM Comercial CS', src: 'https://www.youtube.com/embed/OkeEuX9iC8E', text: 'O módulo CRM permite aumentar, significativamente, a produtividade da força de vendas e o volume de negócios da organização.'},
    { id:'4', image: 'images/phcimg/dashboard.jpg', title: 'PHC Dashboard CS', src: 'https://www.youtube.com/embed/UgKIRcnz6RA', text: 'O módulo Dashboards permite obter toda a informação necessária à condução dos resultados de cada área fundamental da empresa.'},
    { id:'5', image: 'images/phcimg/frota.jpg', title: 'PHC Frota CS', src: 'https://www.youtube.com/embed/MZifRn278Mc', text: 'O módulo Frota permite controlar todos os custos e utilizadores da frota. Com esta aplicação pode obter todas as estatísticas de consumos, as revisões a realizar, saber que seguros caducaram, quanto custa cada quilómetro rodado da frota, quem faz mais quilómetros, etc.'},
    { id:'6', image: 'images/phcimg/imobilizado.jpg', title: 'PHC Imobilizado CS', src: 'https://www.youtube.com/embed/BBxx1RsY_WA', text: 'O módulo Imobilizado permite processar, automaticamente, as amortizações/depreciações bem como as reavaliações dos ativos que compõem o imobilizado de uma empresa.'},
    { id:'7', image: 'images/phcimg/letras.jpg', title: 'PHC Letras CS', src: 'https://www.youtube.com/embed/kDIwM5DN6Ks', text: 'Com o módulo Letras, pode ter, de uma forma integrada com o Gestão e com o Contabilidade, a gestão completa e simples de todas as tarefas relacionadas com Letras.'},
  ];
}]);

app.controller('PhcRightController', ['$scope', '$sce', function($scope, $sce) {  
  $scope.trustSrc = function(src) {
    return $sce.trustAsResourceUrl(src);
  };

  $scope.boxes = [
    { id:'8', image: 'images/phcimg/phc_pessoal.jpg', title: 'PHC Pessoal CS', src: 'https://www.youtube.com/embed/hW2NOOGfVYY', text: 'O módulo Pessoal contempla as necessidades relativas à gestão de funcionários, processamento de vencimentos, férias, faltas e mapas legais, e está acompanhado de inúmeras análises para um controlo pormenorizado dos custos de pessoal.'},
    { id:'9', image: 'images/phcimg/pos.jpg', title: 'PHC POS (Ponto de Venda) CS', src: 'https://www.youtube.com/embed/9tOOx059bxU', text: 'O módulo POS (Ponto de Venda) permite controlar tudo o que está relacionado com uma loja ou rede.'},
    { id:'10', image: 'images/phcimg/projeto.jpg', title: 'PHC Projecto CS', src: 'https://www.youtube.com/embed/Uj2w-RW5V0w', text: 'O módulo Projecto permite que o utilizador execute e acompanhe todos os processos de uma obra, segundo as diversas etapas: orçamentação, planificação de obra, emissão/faturação dos autos de medição e controlo da obra.'},
    { id:'11', image: 'images/phcimg/rh.jpg', title: 'PHC Recursos Humanos CS', src: 'https://www.youtube.com/embed/hh4H50G4gU8', text: 'O módulo PHC Recursos Humanos permite otimizar a seleção e recrutamento, proceder a uma correta descrição de funções, executar avaliações de desempenho e avaliar as ações de formação.'},
    { id:'12', image: 'images/phcimg/suporte.jpg', title: 'PHC Suporte CS', src: 'https://www.youtube.com/embed/MsuRLXBtkNg', text: 'O módulo Suporte permite a qualquer empresa com assistência a clientes pós-venda, gerir todo o seu parque instalado, a atividade de suporte ao público e o desempenho e a produtividade da área técnica, de uma forma simples e completa.'},
    { id:'13', image: 'images/phcimg/team_control.jpg', title: 'PHC Team Control CS', src: 'https://www.youtube.com/embed/5VsuqBlmhiM', text: 'O módulo Team Control permite concretizar todos os projetos no tempo previsto e nos valores orçamentados. Para tal incorpora: planeamento, gestão, coordenação, colaboração e controlo de projetos, otimizando o trabalho de equipa.'},
    { id:'14', image: 'images/phcimg/workflow.jpg', title: 'PHC Workflow CS', src: 'https://www.youtube.com/embed/pdms849Mgd8', text: 'O módulo Workflow permite que o conjunto de ações a executar siga uma ordem pré-definida, de acordo com as normas da empresa, aumentando a agilidade e produtividade dos colaboradores.'},
  ];
}]);


app.controller('LastNewsController', ['$scope', function($scope) {  
  $scope.items = [ 
    { id: '1', author: 'Techsul', title: 'Benefits of Async/Await in Programming', description: '', link: 'blog-post.html', pubdate: '2018-11-22', sm_image: 'images/post-small-1-80x68.jpg', single_image: 'single-post-1-368x293.jpg', blog_image: 'blog-post-1-715x417.jpg', content: ['p1','p2','p3']}, 
    { id: '2', author: 'Techsul', title: 'Key Considerations and Warnings of iPaaS', description: '', link: 'blog-post.html', pubdate: '2018-01-12', sm_image: 'images/post-small-2-80x68.jpg', single_image: 'single-post-2-368x293.jpg', blog_image: 'blog-post-2-715x417.png', content: ['p3','p1']},     
    //{ id: '3', title: 'Brexit latest: Theresa May tells MPs deal is within our grasp as Britain and EU agree deep and flexible partnership', link: 'blog-post.html', date: '2018-01-12', image: 'images/post-small-2-80x68.jpg'},     
  ];      
}]);


/*
app.factory('blog', ['$http', function($http) {  
    return $http.get('/techsulsite/json/blog.json') 
    .success(function(data) { 
      return data; 
    }) 
    .error(function(err) { 
      return err; 
    })
}])

app.controller('blogController2', ['$scope', 'blog', function($scope, blog) { 
  blog.success(function(data) { 
    $scope.articles = data; 
  })
}])
*/
//FAQS
app.controller('FaqsController', function($scope, $http){
    $http.get('/techsulsite/json/techsul.json').success(function (data){
        $scope.faqs = data.faqs;
    })
})
//BLOG
app.controller('blogController', function($scope, $http){
    $http.get('/techsulsite/json/blog.json').success(function (data){
        $scope.articles = data;
    })
})

// POLITICAS DE PRIVACIDADE
app.controller('PrivacyController', function($scope, $http){
    $http.get('/techsulsite/json/techsul.json').success(function (data){
        $scope.policies = data.policies;
    })
})

// COOKIES
app.controller('CookiesController', function($scope, $http){
    $http.get('/techsulsite/json/techsul.json').success(function (data){        
        $scope.cookies = data.cookies;
    })
})

app.directive("showHtml", function() {
  return {
    restrict: 'A',
    scope: {showHtml: '@'},
    link: function(scope, element, attrs) {
        attrs.$observe('showHtml', function() {
            element.html(scope.showHtml);
        });

    } 
  }
});