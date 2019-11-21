<?php include_once 'head.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="conteudo-sobre">






    <div class="conteudo-esquerda-sobre">
        <div class="comments-container">
            <h1 class="h1-sobre">Quer saber o que dizem nossos alunos?</h1>

            <ul id="comments-list" class="comments-list ul-sobre">
                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="assets/img/aluno1.jpg"></div>
                        <!-- Contenedor del Comentario -->
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Rodrigo Ortiz</a></h6>
                                <span>Há 20 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                A organização para a semana acadêmica está incrível! 😃 Estamos colocando no site oficial dos estudantes os prazos e as tarefas que ainda estão sem responsáveis, fiquem ligados!
                            </div>
                        </div>
                    </div>
                    <!-- Respuestas de los comentarios -->
                    <ul class="comments-list reply-list" ul-sobre>
                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="assets/img/aluno2.jpg"></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Muller</a></h6>
                                    <span>Há 10 minutos</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Poderia me passar o link do site oficial? Estou bem por fora... 😓
                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="assets/img/aluno1.jpg"></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Rodrigo Ortiz</a></h6>
                                    <span>Há 10 minutos</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    https://wwww.siteoficialimaginario.com/semana-academica  . Se puderes participar, ajudará muito a equipe 😉
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="comment-main-level">
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="assets/img/aluno3.jpg"></div>
                        <!-- Contenedor del Comentario -->
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="http://creaticode.com/blog"> Paola Marques</a></h6>
                                <span>Há 8 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Curso massa! Professores bem preparados e muitas oportunidades... 😍
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="conteudo-direita-sobre">
        <div class="container">  
            <form id="contact" action="" method="post">
                <h3>Participe você também!</h3>
                <h4>Conte sua experiência para nós ;)</h4>
                <fieldset>
                    <input placeholder="Nome" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Email" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Digite sua mensagem aqui..." tabindex="5" required></textarea>

                </fieldset>
                <div class="row">
                    <!--
                        Fonte: https://apps.timwhitlock.info/emoji/tables/unicode
                        IMPORTANTE! Copie os emojis da coluna NATIVE        
                    -->
                    <button type="button" class="btn btn-sm">😁</button>
                    <button type="button" class="btn btn-sm">😂</button>
                    <button type="button" class="btn btn-sm">😃</button>
                    <button type="button" class="btn btn-sm">😄</button>
                    <button type="button" class="btn btn-sm">😅</button>
                    <button type="button" class="btn btn-sm">😆</button>
                    <button type="button" class="btn btn-sm">😉</button>
                    <button type="button" class="btn btn-sm">😊</button>
                    <button type="button" class="btn btn-sm">😋</button>
                    <button type="button" class="btn btn-sm">😌</button>
                    <button type="button" class="btn btn-sm">😍</button>
                    <button type="button" class="btn btn-sm">😏</button>
                    <button type="button" class="btn btn-sm">😒</button>
                    <button type="button" class="btn btn-sm">😓</button>
                    <button type="button" class="btn btn-sm">😔</button>
                    <button type="button" class="btn btn-sm">😖</button>
                    <button type="button" class="btn btn-sm">😘</button>
                    <button type="button" class="btn btn-sm">😚</button>
                    <button type="button" class="btn btn-sm">😜</button>
                    <button type="button" class="btn btn-sm">😝</button>
                    <button type="button" class="btn btn-sm">😞</button>
                    <button type="button" class="btn btn-sm">😠</button>
                    <button type="button" class="btn btn-sm">😢</button>
                    <button type="button" class="btn btn-sm">😤</button>
                    <button type="button" class="btn btn-sm">😥</button>
                    <button type="button" class="btn btn-sm">😨</button>
                    <button type="button" class="btn btn-sm">😩</button>
                    <button type="button" class="btn btn-sm">😪</button>
                    <button type="button" class="btn btn-sm">😫</button>
                    <button type="button" class="btn btn-sm">😭</button>
                    <button type="button" class="btn btn-sm">😰</button>
                    <button type="button" class="btn btn-sm">😱</button>
                    <button type="button" class="btn btn-sm">😲</button>
                    <button type="button" class="btn btn-sm">😳</button>
                    <button type="button" class="btn btn-sm">😵</button>
                    <button type="button" class="btn btn-sm">😷</button>
                    <button type="button" class="btn btn-sm">😸</button>
                    <button type="button" class="btn btn-sm">😹</button>
                    <button type="button" class="btn btn-sm">😺</button>
                    <button type="button" class="btn btn-sm">😻</button>
                    <button type="button" class="btn btn-sm">😼</button>
                    <button type="button" class="btn btn-sm">😽</button>
                    <button type="button" class="btn btn-sm">😾</button>
                    <button type="button" class="btn btn-sm">😿</button>
                    <button type="button" class="btn btn-sm">🙀</button>
                    <button type="button" class="btn btn-sm">🙅</button>
                    <button type="button" class="btn btn-sm">🙆</button>
                    <button type="button" class="btn btn-sm">🙇</button>
                    <button type="button" class="btn btn-sm">🙈</button>
                    <button type="button" class="btn btn-sm">🙉</button>
                    <button type="button" class="btn btn-sm">🙊</button>
                    <button type="button" class="btn btn-sm">🙋</button>
                    <button type="button" class="btn btn-sm">🙌</button>
                    <button type="button" class="btn btn-sm">🙍</button>
                    <button type="button" class="btn btn-sm">🙎</button>
                    <button type="button" class="btn btn-sm">🙏</button>
                </div>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
                </fieldset>

            </form>
        </div>
        <img src="assets/img/tenta.png" class="image-c">
    </div>
</div>

<?php include_once 'footer.php'; ?>

