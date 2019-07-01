<?php 

$tags = get_the_tags() ?: [];

if($tags) {
    $tags = array_map(function($tag) {
        return $tag->name;
    }, $tags);
}

$networks = [
    'facebook' => [
        'href' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink(),
        'icon' => THEMEURL . '/images/facebook.svg'
    ],
    'twitter' => [
        'href' => 'https://twitter.com/intent/tweet?url=' . get_the_permalink() . '&text=' . get_the_title() . '&hashtags=' . implode(',', $tags),
        'icon' => THEMEURL . '/images/twitter.svg'
    ],
    'pinterest' => [
        'href' => 'https://pinterest.com/pin/create/button/?url=' . get_the_permalink() . '&media=' . get_thumbnail_image_url() . '&description=',
        'icon' => THEMEURL . '/images/pinterest.svg'
    ]
];

?>
<div class="detalles__share">
    <?php foreach($networks as $network): ?>
        <div class="detalles__social">
            <a href="<?php echo esc_url($network['href']); ?>" onclick="window.open(this.href, '_blank','left=20,top=20,width=500,height=500,toolbar=no,resizable=no'); return false;">
                <img src="<?php echo esc_url($network['icon']) ?>" alt="">
            </a>
        </div>
    <?php endforeach; ?>
</div>