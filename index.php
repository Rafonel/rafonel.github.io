<html>
<head>
    <title> Rafonel </title>
    <meta charset="utf-8">
	<meta http-equiv="content-language" content="pt-br">
	<meta http-equiv="cache-control" content="private">
	<meta name="rating" content="general">
	<meta name="author" content="Rafael Freitas">
	<meta name="copyright" content="©Rafonel">
	<meta name="description" content="Rafonel personal blog">
	<meta name="keywords" content="front-end, developer, senai">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/materialize1.min.css">
    <link rel="stylesheet" href="css/fontes.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="hide-on-med-and-up" id="isPhone"></div>
    <section id="secPerfil" class="row">
        <div class="col l3 m4 s10 center-align offset-l2 offset-m2 offset-s1">
            <div class="img-about">
                <img src="img/passoca.jpg" alt="" class="pic">
                <div class="icons-perfil">
                    <i class="fab fa-youtube" color="#cc0000" href="https://www.youtube.com/channel/UCIZoctDhTdSpUwnBAbbHb2w"></i>
                    <i class="fab fa-github" color="#55277e" href="https://github.com/PassocaGit"></i>
                    <i class="fab fa-linkedin" color="#0077b5" href="https://www.linkedin.com/in/rafonel2511/"></i>                
                    <i class="fab fa-instagram" color="#DD2A7B" href="https://instagram.com/ra_fon_el/"></i>
                </div>
            </div>
        </div>
        <div class="col l5 m5 s10 offset-s1 info">
            <p class="title">Rafonel</p>
            <hr>
            <div class="subname">
                <p>Rafael Freitas</p>
                <p class="tag">Full Stack Developer</p>
            </div> 
            <div class="description">
                <p>
                Sou programador desde os 15 anos, comecei pelo curso de TI do Senai, onde desenvolvi habilidades básicas de programação em linguagens focadas em desktop e web. Me interesso mais ao front-end, acredito que aparência e praticidade são as maiores influências para o usuário.
                </p>
            </div>
       </div>
    </section>
    <!-- <section class="row" id="secProjects">
    <div class="divider"><span>[ My Projects ]</span></div>
    <div class="col l12 m12 s10 offset-s1 project">
        <span class="title">Jurasis</span>
        <div class="description">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero similique, consequatur repellat corporis mollitia accusantium, facilis reprehenderit reiciendis blanditiis nulla ex fuga, harum necessitatibus cumque? Consequatur tempore libero ab.</p>
        </div>
    </div>
    <div class="col l12 m12 s10 offset-s1 project">
        <span class="title">ASDS</span>
        <div class="description">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero similique, consequatur repellat corporis mollitia accusantium, facilis reprehenderit reiciendis blanditiis nulla ex fuga, harum necessitatibus cumque? Consequatur tempore libero ab.</p>
        </div>
    </div>
    <div class="col l12 m12 s10 offset-s1 projects">
    <ul>
        <li ativo="yes">Moneycon</li>
        <li>Projeto 2</li>
        <li>Projeto 3</li>
    </ul>
    </div>
    </section> -->
    <script src="js/jquery_offline.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/p5.js"></script>
    <script src="js/p5.dom.js"></script>
    <script src="js/triangle.js"></script>
    <script src="js/sketch.js"></script>
    <script>
        $(function(){
            SectionSize(0);
            // SetTabs('.projects li');
            // OpenTab(0);	
            if($('#isPhone').css('display') == 'none'){
                $('#secPerfil').addClass('valign-wrapper');
            }
        });
        // Icon redirects
        $('i[href]').click(function() {
            RedirectBlank($(this).attr('href'));
    	});
        // IMG hover effect
        $('.img-about').hover(function(){
            $(this).children().addClass('is-hover');
        },function () { 
            $(this).children().removeClass('is-hover');
        });
        // Update alignment if is in phone
        window.onresize = function(event) {
            if($('#isPhone').css('display') == 'none'){
                $('#secPerfil').addClass('valign-wrapper');
            }
            else{
                $('#secPerfil').removeClass('valign-wrapper');
            }
        };
        
    </script>
</body>
</html>