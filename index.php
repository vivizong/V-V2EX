<?php
/**
 * 这是参考V2EX网站，进行修改的主题皮肤，个人感觉适合技术类博客
 * 
 * @package V-V2EX Theme 
 * @author Metoo
 * @version 0.1
 * @link https://github.com/vivizong
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div id="warpper">
	<div id='main' role="main">
		<div id="tab">
			<?php $this->widget('Widget_Metas_Category_List')->parse('<a class="item" href="{permalink}">{name}</a>'); ?>
		</div>
		<?php while($this->next()): ?>
				<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
					<div>
						<div class="post-title" itemprop="name headline">
							<a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
						</div>
						<div class="post-content" itemprop="articleBody">
							<?php $this->content('- 阅读剩余部分 -'); ?>
						</div>
						<div class="post-meta">
							<li itemprop="author" itemscope itemtype="http://schema.org/Person"><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
							<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
							<li class="category"><?php $this->category('  '); ?></li>
							<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
						</div>
					</div>
				</article>
		<?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	</div>
	<?php $this->need('sidebar.php'); ?>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
