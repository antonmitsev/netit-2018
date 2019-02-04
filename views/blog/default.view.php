<div class="row d-flex">

<?php 
$blog_items = $content['blog_items'];
$items_per_page = $content['items_per_page'];
$pages_count = $content['pages_count'];

$page_number = (int)@$_GET['page'];
$page_number_plus1 = 
	$page_number < $pages_count ? $page_number + 1 : 0;
$page_number_minus1 = 
	$page_number > 1 ? $page_number - 1 : 0;


//TODO - divide into pages! (Blocks);
foreach($blog_items as $item): ?>
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo (BASE_PICTURES . $item['picture']);?>');">
	              </a>
	              <div class="text py-4 d-block">
	              	<div class="meta">
	                  <div><a href="#"><?php echo $item['date_add'];?><!--Sept 10, 2018--></a></div>
	                  <div><a href="#"><?php echo $item['creator'];?></a></div>
	                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> <?php echo $item['comment_count'];?></a></div>
	                </div>
	                <h3 class="heading mt-2"><a href="#"><?php echo $item['title'];?></a></h3>
	                <p><?php echo $item['description'];?></p>
	              </div>
	            </div>
	          </div>
<?php endforeach; ?>         
	        </div>
	        <div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
								<li><a href="<?php echo Helpers::blogPageUrl($page_number - 1, $items_per_page);?>">&lt;</a></li>
<?php for($page = 0; $page < $pages_count; $page ++): ?>
	                <li class="<?php echo ((($page + 1) == $page_number) ? 'active' : '');?>">
										<a href="<?php echo Helpers::blogPageUrl($page + 1, $items_per_page);?>">
											<span>
											<?php echo ($page + 1);?>
											</span>
										</a>
									</li>
<?php endfor;?>
	                <li><a href="<?php echo Helpers::blogPageUrl($page_number + 1, $items_per_page);?>">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>

