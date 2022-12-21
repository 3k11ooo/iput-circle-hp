<<<<<<< HEAD
<?php
/**
 * Template Name: 活動一覧ページ
*/
?>

<?php get_header(); ?>

<div class="top">
    <div class="title">
        <h1>活動一覧</h1>
    </div>
    <div class="filter">
        <!-- 検索フォーム -->
        <input type="text" class="search-input form-control" placeholder="検索する文字を入力してください"
        aria-label="search" aria-describedby="basic-addon1">
        <!-- Flex -->
        <div class="search-settings">
            <!-- サークルを選択する -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    サークルを選択する
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">サークル名1</a></li>
                    <li><a class="dropdown-item" href="#">サークル名2</a></li>
                    <li><a class="dropdown-item" href="#">サークル名3</a></li>
                </ul>
            </div>
            <input type="checkbox" class="btn-check" id="btn-check1" autocomplete="off">
            <label class="tag btn btn-outline-secondary" for="btn-check1">行事・イベント</label>
            <input type="checkbox" class="btn-check" id="btn-check2" autocomplete="off">
            <label class="tag btn btn-outline-secondary" for="btn-check2">活動記録</label>
            <input type="checkbox" class="btn-check" id="btn-check3" autocomplete="off">
            <label class="tag btn btn-outline-secondary" for="btn-check3">重要連絡</label>
        </div>
        <div class="w-100 d-flex justify-content-center">
            <button type="button" class="btn btn-primary">この条件で検索する</button>
        </div>
    </div>
</div>

<div class="container pt-4 pb-4" style="max-width: 750px !important;">
    <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">

        <?php for($i = 0; $i < 6; $i++): ?>
        <div class="col">
            <div class="card h-100 a-button">
                <a href="#"></a>
                <div class="row g-0">
                    <div class="col-4  col-lg-12">
                        <img src="https://via.placeholder.com/468x200?text=Sample+Image"
                        class="card-img-top ratio h-100" alt="...">
                    </div>
                    <div class="col-8  col-lg-12">
                        <div class="card-body">
                            <h5 class="card-title">
                                <span class="line-clamp-3">学生が地元を取材し、Uターンをの形を探すインスタマガジン「梨パック」が最高</span>
                            </h5>
                            <span class="badge bg-secondary">地元活性化サークル</span>
                            <p class="card-text"><small class="text-muted">2022.09.05</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>

    </div>
</div>

<div class="page">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">戻る</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">次へ</a></li>
        </ul>
    </nav>
</div>

<?=get_footer()?>
=======
<?php
/**
 * Template Name: 活動一覧ページ
*/
?>

<?php

$param_d = get_params('d');

// ページパラメータの確認（マイナスの数値や文字記号を1とする）
if ( isset( $param_d ) ) {
    $paged = $param_d > 0 ? $param_d : 1;
} else {
    $paged = 1;
}

/* 記事 取得 */
$args = array(
    'post_type'      => 'post',        // 投稿タイプ
    'posts_per_page' => 12,            // 投稿取得数
    'paged'          => $paged,        // 現在のページ
);

// 条件指定があった場合
$param_circle  = get_params('c');  // サークル名（カテゴリID）
$param_event_1 = get_params('e1'); // 行事・イベント
$param_event_2 = get_params('e2'); // 活動記録
$param_event_3 = get_params('e3'); // 重要連絡

if ( $param_circle )  $args['cat'] = $param_circle;
$tags = array();
if ( $param_event_1 ) $tags[] = get_tags(array('slug' => '行事・イベント'))[0]->term_id;
if ( $param_event_2 ) $tags[] = get_tags(array('slug' => '活動記録'))[0]->term_id;
if ( $param_event_3 ) $tags[] = get_tags(array('slug' => '重要連絡'))[0]->term_id;
if ( !empty($tags) ) {
    $args['tag__and'] = $tags;
}

$the_query = new WP_Query( $args );    // 投稿データ

get_header();

var_dump(get_tags(array('slug' => '行事・イベント')));
//var_dump($args);
?>

<div class="top">
    <div class="title">
        <h1>活動一覧</h1>
    </div>
    <div class="filter">
        <!-- 検索フォーム -->
        <input type="text" class="search-input form-control" placeholder="検索する文字を入力してください"
        aria-label="search" aria-describedby="basic-addon1">
        <!-- Flex -->
        <div class="search-settings">
            <!-- サークルを選択する -->
            <div class="dropdown">
                <select class="form-select form-select-sm" name="organizationId" style="flex:1" aria-label="所属サークルを選択する">
                    <!-- set value post id -->
                    <option value="false" selected>サークルを選択する</option>
                    <?php
                    // ログイン中のユーザーのサークル一覧
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'circle',
                        'post_status' => 'publish'
                    );
                    $posts = get_posts( $args );
                    
                    foreach( $posts as $post ):
                        $category_name = get_the_category( $post->ID )[0]->cat_name;
                        $category_id = get_the_category( $post->ID )[0]->cat_ID;
                    ?>
                    <option value="<?php echo $category_id ?>"><?php echo $category_name ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>

            <input type="checkbox" class="btn-check" id="btn-check1" autocomplete="off">
            <label class="tag btn btn-outline-secondary" for="btn-check1">行事・イベント</label>
            <input type="checkbox" class="btn-check" id="btn-check2" autocomplete="off">
            <label class="tag btn btn-outline-secondary" for="btn-check2">活動記録</label>
            <input type="checkbox" class="btn-check" id="btn-check3" autocomplete="off">
            <label class="tag btn btn-outline-secondary" for="btn-check3">重要連絡</label>
        </div>
        <div class="w-100 d-flex justify-content-center">
            <button type="button" class="btn btn-primary">この条件で検索する</button>
        </div>
    </div>
</div>

<div class="container pt-4 pb-4" style="max-width: 750px !important;">
    <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">

        <?php
        if ( $the_query->have_posts() ):
        while ( $the_query->have_posts() ):
        $the_query->the_post();
        ?>
        <div class="col">
            <div class="card h-100 a-button">
                <a href="<?php echo get_permalink( get_the_ID() ); ?>"></a>
                <div class="row g-0">
                    <div class="thumbnail col-4 col-lg-12">
                        <?php
                        // カスタムデータ取得
                        $post_custom = get_post_custom( get_the_ID() );
                        // サムネイルURL
                        $thumbnail_url = !empty($post_custom['topImage'][0]) ? wp_get_attachment_image_src( $post_custom['topImage'][0] )[0] : get_theme_file_uri('src/no_image_activity.png');
                        ?>
                        <img src="<?php echo $thumbnail_url; ?>"
                        class="card-img-top ratio h-100" alt="...">
                    </div>
                    <div class="col-8  col-lg-12">
                        <div class="card-body">
                            <h5 class="card-title">
                                <span class="line-clamp-3"><?php the_title(); ?></span>
                            </h5>
                            <?php
                            // サークル名を表示する
                            if ( isset( get_the_category()[1]->name ) ):
                            ?>
                            <span class="badge bg-secondary"><?php echo get_the_category()[1]->name; ?></span>
                            <?php endif; ?>
                            <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        endif;
        ?>
    </div>
</div>

<div class="page">
    <!-- Pagination -->
    <nav aria-label="Page navigation pt-3">
    <?php
    $pagination = paginate_links(
        array(
            'base'    => home_url("index.php/search-activity/%_%"),
            'format'  => '?d=%#%',
            'type'    => 'list',
            'current' => $paged, // int current page
            'total'   => $the_query->max_num_pages,  // int total pages
        )
    );
    echo $pagination;
    ?>
    </nav>
</div>

<script>
    /* Add Bootstrap Pagination Class */
    $('ul.page-numbers').addClass('pagination justify-content-center');
    $('ul.page-numbers li').addClass('page-item');
    $('ul.page-numbers li a').addClass('page-link');
    $('ul.page-numbers li span').addClass('page-link');
    $('ul.page-numbers li .current').parent().addClass('active');
</script>

<?php get_footer(); ?>
>>>>>>> ddb434df7fee5dee65477e60f376b53dd5be52a5
