    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="d-flex align-items-center mb-3">
                    <img class="me-2" src="<?php echo get_theme_file_uri("src/iputone_logo.svg"); ?>" style="width:36px;">
                    <h2 class="m-0">IPUT ONE</h2>
                </div>
                <div class="row pb-5">
                    <div class="col-md-4 footer-links">
                        <div class="row">
                            <div class="col">
                                <h6>リンク</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex flex-column">
                                <p class="mb-1"><a href="<?=home_url('index.php/activity')?>">活動一覧</a></p>
                                <p class="mb-1"><a href="<?=home_url('index.php/news')?>">ニュース一覧</a></p>
                                <p class="mb-1"><a href="<?=home_url('index.php/faq')?>">FAQ</a></p>
                                <p class="mb-1"><a href="<?=home_url('index.php/contact')?>">お問い合わせ</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="#">このサイトについて</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 offset-md-1 d-flex flex-column">
                        <h6>外部リンク</h6>
                        <p class="mb-1"><a href="https://twitter.com/IputTokyo">IPUT days Tokyo - Twitter</a></p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <span>&copy;2022 IPUT ONE 学生によって運営されています</span>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- フォーム読み込みアニメーション -->
    <div class="loading d-none">
        <div class="spinner spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="mask"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
     integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
     crossorigin="anonymous"></script>
     <!-- base.js -->
     <script type="text/javascript" src="<?=get_theme_file_uri("assets/base.js")?>"></script>
     <?php wp_footer(); ?>
    </body>
</html>