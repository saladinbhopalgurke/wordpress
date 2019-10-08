<div class="post-thumbnail">
<?php the_post_thumbnail('medium'); ?></div>
<h1><?php the_field('artiste'); ?> - <?php the_field('album'); ?></h1>
<h4><?php the_field('date'); ?></h4>
par l'auteur
<h4>Label: <a href="http://<?php the_field('site_label'); ?>" target="_blank"><?php the_field('label'); ?></a></h4>
<h4>Site: <a href="http://<?php the_field('site_de_lartiste'); ?>" target="_blank"><?php the_field('site_de_lartiste'); ?></a></h4>
<?php
$note = get_field('note');
$urlnote = 'http://127.0.0.1/wordpress/wp-content/uploads/mouton-notes/'.$note.'.'.png;
?>
<?php if ($note) {
?><img src="<?php echo $urlnote; ?>" height=100px width=100px>;
<?php
} else {
echo "pas noté";
}
?>

