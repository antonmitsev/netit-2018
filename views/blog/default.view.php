<div class="row d-flex">

<?php 

$items_per_page = 3;
$pages = ceil(count($content) / $items_per_page);
//TODO - divide into pages! (Blocks);
foreach($content as $item): ?>
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
								<li><a href="#">&lt;</a></li>
<?php for($page = 0; $page < $pages; $page ++): ?>
	                <li class="<?php echo ($page == 0 ? 'active' : '');?>"><span><?php echo ($page + 1);?></span></li>
<?php endfor;?>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>

