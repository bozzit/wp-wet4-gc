<?php get_header(); ?>

<div class="container">
<div class="row">

<main role="main" property="mainContentOfPage" class="col-md-9 col-md-push-3">

    <!-- MainContentStart -->
			<!-- Content title begins / Début du titre du contenu -->
			<h1 id="wb-cont" property="name"><?php _e("<!--:en-->Page not found: 404 error<!--:--><!--:fr-->Erreur HTTP 404 - Non trouvé<!--:-->"); ?></h1>
			<!-- Content Title ends / Fin du titre du contenu -->
			
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
			<p><?php _e("<!--:en-->Unfortunately the content you're looking for isn't here. There may be a misspelling in your web address or you may have clicked a link for content that no longer exists. Perhaps you would be interested in our most recent articles.<!--:--><!--:fr-->Malheureusement, le contenu que vous recherchez n'est pas ici. Il peut y avoir une faute d'orthographe dans votre adresse web ou que vous ayez cliqué sur un lien pour le contenu qui n'existe plus. Peut-être que vous seriez intéressé par nos articles les plus récents.<!--:-->"); ?></p>
			<section>
				<h2><?php _e("<!--:en-->Recent Articles<!--:--><!--:fr-->Articles récents<!--:-->"); ?></h2>
				   <?php query_posts('cat=&showposts=5'); ?>
					<ul id="recentPosts">
				   <?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					<pre><time datetime="<?php the_date('Y-m-d', '', ''); ?>" pubdate><?php the_time('F j, Y'); ?></time></pre></li>
					<?php endwhile; ?>
					</ul>
			</section>
            <!-- Date Modified begins / Début de la date de modification -->
			<dl id="wb-dtmd" role="contentinfo" property="dateModified">
            <dt><?php _e("<!--:en-->Date modified: <!--:--><!--:fr-->Date de modification&#160;:<!--:-->"); ?></dt> 
                 <dd>
                   <time><?php the_time('Y-m-d') ?></time>
                 </dd>
            </dl>
<div class="row">
   <div class="col-sm-6 col-md-5 col-lg-4">
      <details class="brdr-0">
         <summary class="btn btn-default text-center">Report a problem on this page</summary>
         <div class="well row">
            <div class="gc-rprt-prblm">
               <div class="gc-rprt-prblm-frm gc-rprt-prblm-tggl" id="wb-auto-3">
                  <form action="#">
                     <fieldset>
                        <legend><span class="field-name">Please select all that apply: </span></legend>
                        <div class="checkbox">
                           <label for="problem1"><input data-reveal="#broken" name="problem" value="Something is broken" id="problem1" type="checkbox">Something is broken</label>
                        </div>
                        <div class="form-group hide" id="broken">
                           <label for="problem1-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem1-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem2"><input data-reveal="#spelling" name="problem" value="It has spelling or grammar mistakes" id="problem2" type="checkbox">The page has spelling or grammar mistakes</label>
                        </div>
                        <div class="form-group hide" id="spelling">
                           <label for="problem2-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem2-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem3"><input data-reveal="#wrong" name="problem" value="The information is wrong" id="problem3" type="checkbox">The information is wrong</label>
                        </div>
                        <div class="form-group hide" id="wrong">
                           <label for="problem3-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem3-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem4"><input data-reveal="#outdated" name="problem" value="The information is outdated" id="problem4" type="checkbox">The information is outdated</label>
                        </div>
                        <div class="form-group hide" id="outdated">
                           <label for="problem4-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem4-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem5"><input data-reveal="#find" name="problem" value="I can’t find what I’m looking for" id="problem5" type="checkbox">I can’t find what I’m looking for</label>
                        </div>
                        <div class="form-group hide" id="find">
                           <label for="problem5-detail">Describe what you’re looking for (optional):</label>
                           <input class="form-control full-width" id="problem5-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem6"><input data-reveal="#confusing" name="problem" value="It’s confusing" id="problem6" type="checkbox">Other</label>
                        </div>
                        <div class="form-group hide" id="confusing">
                           <label for="problem6-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem6-detail" type="text">
                        </div>
                     </fieldset>
                     <button type="submit" class="btn btn-primary wb-toggle wb-init wb-toggle-inited" data-toggle="{&quot;stateOff&quot;: &quot;hide&quot;, &quot;stateOn&quot;: &quot;show&quot;, &quot;selector&quot;: &quot;.gc-rprt-prblm-tggl&quot;}" aria-controls="wb-auto-3 wb-auto-4">Submit</button>
                  </form>
               </div>
               <div class="gc-rprt-prblm-thnk gc-rprt-prblm-tggl hide" id="wb-auto-4">
                  <h3>Thank you for your help!</h3>
                  <p>You will not receive a reply. For enquiries, please <a href="https://www.canada.ca/en/contact.html">contact us</a>.</p>
               </div>
            </div>
         </div>
      </details>
   </div>
</div>

		</main>
		<!-- Main content ends / Fin du contenu principal -->

<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?>
